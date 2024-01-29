<?php
namespace App\Controller;
use App\Controller\AppController;

class Book_recordsController extends AppController
{
 public function initialize() {
  parent::initialize();
  $this->loadComponent('Paginator');
  $this->loadComponent('Flash');
 }
  // action for the controller
  // This method should query the model layer, and prepare a response by rendering a Template in the View
  public function index()
  {
    $book_records = $this->Paginator->paginate($this->Book_records->find());
    $this->set(compact('book_records'));
  }

public function view($slug = null)
{
  $book_records = $this->author->findBySlug($slug)->firstOrFail();
  $this->set(compact('bookRecord'));
}
}
?>