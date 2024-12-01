<?php

class Book {
  private string $isbn;
  private string $title;
  private string $author;
  private string $publisher;
  private string $cover;
  private string $rackNumber;

  /**
   * Get the value of isbn
   */ 
  public function getIsbn()
  {
    return $this->isbn;
  }

  /**
   * Set the value of isbn
   *
   * @return  self
   */ 
  public function setIsbn($isbn)
  {
    $this->isbn = $isbn;

    return $this;
  }

  /**
   * Get the value of title
   */ 
  public function getTitle()
  {
    return $this->title;
  }

  /**
   * Set the value of title
   *
   * @return  self
   */ 
  public function setTitle($title)
  {
    $this->title = $title;

    return $this;
  }

  /**
   * Get the value of author
   */ 
  public function getAuthor()
  {
    return $this->author;
  }

  /**
   * Set the value of author
   *
   * @return  self
   */ 
  public function setAuthor($author)
  {
    $this->author = $author;

    return $this;
  }

  /**
   * Get the value of publisher
   */ 
  public function getPublisher()
  {
    return $this->publisher;
  }

  /**
   * Set the value of publisher
   *
   * @return  self
   */ 
  public function setPublisher($publisher)
  {
    $this->publisher = $publisher;

    return $this;
  }

  /**
   * Get the value of cover
   */ 
  public function getCover()
  {
    return $this->cover;
  }

  /**
   * Set the value of cover
   *
   * @return  self
   */ 
  public function setCover($cover)
  {
    $this->cover = $cover;

    return $this;
  }

  /**
   * Get the value of rackNumber
   */ 
  public function getRackNumber()
  {
    return $this->rackNumber;
  }

  /**
   * Set the value of rackNumber
   *
   * @return  self
   */ 
  public function setRackNumber($rackNumber)
  {
    $this->rackNumber = $rackNumber;

    return $this;
  }
}