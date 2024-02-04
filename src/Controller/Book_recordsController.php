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
    $book_records = $this->Book_records->find()->contain(['Authors', 'Genres'])->toArray();
    $this->set(compact('book_records'));
  }

public function view($title = null)
{
  $book_record = $this->Book_records->findByTitle($title)->contain(['Authors', 'Genres'])->firstOrFail();
  $this->set(compact('book_record'));
}
public function author($name = null){
  $author = $this->Authors-> findByAuthorName($name)->firstOrFail();
  $this->set(compact('author'));
//   $query = $this->Authors->findByAuthorId(10);
// $author = $query->firstOrFail();
// // Log the SQL query
// $this->log($query->sql(), 'debug');
}
}
?>