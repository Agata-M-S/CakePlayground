<?php
namespace App\Controller;
use App\Controller\AppController;

class Book_recordsController extends AppController{
  public function initialize() {
    parent::initialize();
    $this->loadComponent('Paginator');
    $this->loadComponent('Flash');
    $this->loadModel('Authors');
    $this->loadModel('Genres');
    $this->loadModel('BooksGenres');
  }

  // action for the controller
  // This method should query the model layer, and prepare a response by rendering a Template in the View
  public function index(){
    $this->set('title', 'Book_records');
    $book_records = $this->Book_records
    ->find()
    ->contain(['Authors', 'Genres'])->toArray();
    $this->set(compact('book_records'));
  }

  // this method is for viewing the single book details in a separate view
  public function view($title = null){
    $book_record = $this->Book_records
    ->findByTitle($title)
    ->contain(['Authors', 'Genres', 'Reviews', 'Reviews.Users' ])
    ->firstOrFail();
    $this->set(compact('book_record'));
  }

  // this method is for viewing the author's details in a separate view
  public function author($name = null){
    $author = $this->Authors
    ->findByAuthorName($name)
    ->firstOrFail();
    $this->set(compact('author'));
  }

  // this method is for fetching book details for the edit view
  public function edit($title= null) {
    $book_record = $this->Book_records
    ->findByTitle($title)
    ->contain(['Authors', 'Genres', 'Reviews', 'Reviews.Users' ])
    ->firstOrFail();
    $this->set(compact('book_record'));
  }

  //this method is for editing an entry in the book_records table
  public function update($title= null){
    $book_record = $this->Book_records
    ->findByTitle($title)
    ->first();

    if ($this->request->is(['patch', 'post', 'put'])) {
      $book_record = $this->Book_records->patchEntity($book_record, $this->request->getData());
      if ($this->Book_records->save($book_record)) {
        $this->Flash->success(__('The book record has been updated.'));
         $this->redirect(['action' => 'index']);
      }
    }
    else {
        debug($book_record->getErrors());
      }
  }

  public function addBook(){
    $book_record=$this->Book_records->newEntity();
    $author=$this-> Authors -> newEntity();

    // get a list of genres from the DB and put them into array to display on the add book view

    $genres = $this->Genres->find()
    ->select(['genre'])
    ->select(['genre_id'])
    ->toArray();
    $this->set('genres', $genres);

    //check if author exists before creating new record, extract its ID to use it instead of creating a new record

    $authorName = $this->request->getData('author_name');
    $authorExists = $this->Authors->find()
    ->select(['author_id'])
    ->where(['author_name'=>$authorName])
    ->first();

    if($authorExists){
      $author_id = $authorExists->author_id;
      $bookData = $this->request->getData();
      debug($bookData);
      $bookData['author_id'] = $author_id;
      $book_record = $this->Book_records->patchEntity($book_record, $bookData);

      if( $this->Book_records->save($book_record)){
        // this is one way to add genres to the table
        $booksGenres = $this->BooksGenres->newEntity(
          [
            'book_id' => $book_record->get('book_id'),
            'genre_id'=> $this->request->getData('genre')
          ]);
          $this->BooksGenres->save($booksGenres);
          return $this->redirect(['action' => 'index']);
        }
    }

    // if author doesn't exist, create a new record then add the book, then add genres

    if (!$authorExists && $this->request->is('post')){
      $author= $this->Authors->patchEntity($author, $this->request->getData());
      $booksGenres= $this->BooksGenres->newEntity(); //this is another way to add genres to the table then patchEntity() with your data (line 128)

      if($this->Authors->save($author)){
        $author->author_id = $author->get('author_id');
        $author_id = $author->author_id;
        $bookData = $this->request->getData();
        $bookData['author_id'] = $author_id;
        $book_record = $this->Book_records->patchEntity($book_record, $bookData);

        if( $this->Book_records->save($book_record)){
          $book_record->book_id = $book_record->get('book_id');
          $book_id = $book_record -> book_id;
          $genre_id = $this->request->getData('genre');
          $data = [
            'book_id' => $book_id,
            'genre_id'=> $genre_id
          ];
          $booksGenres = $this->BooksGenres->patchEntity($booksGenres, $data);
          $this->BooksGenres->save($booksGenres);
          return $this->redirect(['action' => 'index']);
        }
      }
    }
  }
}
