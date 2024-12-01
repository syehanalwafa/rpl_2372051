<?php

class BookDao {
  public function showAllBooks() {
    $link = PDOUtil::createMySQLConnection();
    $query = 'SELECT * FROM book';
    $stmt = $link->prepare($query);
    $stmt->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, BookDao::class);
    $stmt->execute();
    $result = $stmt->fetchAll();
    $link = null;
    return $result;
  }

  public function addBook(Book $book): int {
    $result = 0;
    $link = PDOUtil::createMySQLConnection();
    $query = `INSERT INTO book(isbn, title, author, publisher, cover, rack_number) VALUES(?,?,?,?,?,?)`;
    $stmt = $link->prepare($query);
    $stmt->bindValue(1, $book->getIsbn());
    $stmt->bindValue(2, $book->getTitle());
    $stmt->bindValue(3, $book->getAuthor());
    $stmt->bindValue(4, $book->getPublisher());
    $stmt->bindValue(5, $book->getCover());
    $stmt->bindValue(6, $book->getRackNumber());
    $link->beginTransaction();

    if ($stmt->execute()) {
      $link->commit();
      $result = 1;
    } else {
      $link->rollBack();
    }
    
    $link = null;
    return $result;
  }
}