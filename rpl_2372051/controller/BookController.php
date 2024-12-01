<?php

class BookController {
  private BookDao $bookDao;

  public function __construct()
  {
    $this->bookDao = new BookDao();
  }

  public function index() {
    $books = $this->bookDao->showAllBooks();
    include_once 'view/halaman_index_buku.php';
  }

  public function create() {
    include_once 'view/halaman_form_create_buku.php';
  }
  
  public function store() {
    $isbn = trim(filter_input(INPUT_POST, 'isbn', FILTER_SANITIZE_STRING));
    $title = trim(filter_input(INPUT_POST, 'title', FILTER_SANITIZE_STRING));
    $author = trim(filter_input(INPUT_POST, 'author', FILTER_SANITIZE_STRING));
    $rackNumber = trim(filter_input(INPUT_POST, 'rackNumber', FILTER_VALIDATE_INT));
    $publisher = trim(filter_input(INPUT_POST, 'publisher', FILTER_SANITIZE_STRING));
  }


}