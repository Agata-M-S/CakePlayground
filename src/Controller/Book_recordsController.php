<?php
namespace App\Controller;
use App\Controller\AppController;

class Book_recordsController extends AppController
{
 public function initialize() {
  parent::initialize();
  $this->loadComponent('Paginator');
  $this->loadComponent('Flash');
  $this->loadModel('Authors');
  
}
// action for the controller
// This method should query the model layer, and prepare a response by rendering a Template in the View
public function index()
{
    $this->set('title', 'Book_records');
    $book_records = $this->Book_records
    ->find()
    ->contain(['Authors', 'Genres'])->toArray();
    $this->set(compact('book_records'));
  }
// this method is for viewing the single book details in a separate view
public function view($title = null)
{
  $book_record = $this->Book_records
  ->findByTitle($title)
  ->contain(['Authors', 'Genres', 'Reviews', 'Reviews.Users' ])
  ->firstOrFail();
  $this->set(compact('book_record'));


}

// this method is for viewing the author's details in a separate view
public function author($name = null)
{
  $author = $this->Authors
  ->findByAuthorName($name)
  ->firstOrFail();
  $this->set(compact('author'));
}
  public function edit($title= null)
{
  $book_record = $this->Book_records
  ->findByTitle($title)
  ->contain(['Authors', 'Genres', 'Reviews', 'Reviews.Users' ])
  ->firstOrFail();
  $this->set(compact('book_record'));
}

//this method is for editing an entry in the book_records table
public function update($title= null)
{
  $book_record = $this->Book_records
  ->findByTitle($title)
  ->first();
  
  if ($this->request->is(['patch', 'post', 'put'])) {
    $book_record = $this->Book_records->patchEntity($book_record, $this->request->getData());
    if ($this->Book_records->save($book_record)) {
        $this->Flash->success(__('The book record has been updated.'));
        return $this->redirect(['action' => 'index']);
    }
    else 
    {
      debug($book_record->getErrors());
    }
}
}
}
