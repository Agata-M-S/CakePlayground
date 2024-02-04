<?php
namespace App\Controlller;
use App\Controller\AppController;

class AuthorsController extends AppController {

  public function initialize(){
    parent::initialize();
    $this->loadComponent('Paginator');
    $this->loadComponent('Flash');
    $this->loadModel('Authors');
    $this->loadmodel('BookRecords');
  }
  public function viewAuthor($id = null){
    $author= $this->Authors-> findById($id) ->firstOrFail();
    $this->set(compact('author'));
  }
}
?>