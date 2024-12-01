<?php
  require_once './model/Book.php'; // Adjust the path as needed~
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Hello World</h1>
  <a href="https:/if.it.maranatha.edu" target="_blank">Go to external URL</a>
  <table>
    <thead>
      <tr>ID</tr>
      <tr>Name</tr>
    </thead>

    <tbody>
      <tr>
        <td>1</td>
        <td>John Doe</td>
      </tr>
      
      <tr>
        <td>2</td>
        <td>Susan Bones</td>
      </tr>
    </tbody>
  </table>

  <?php
    $book = new Book();
    $book->setIsbn('1234567890123');
    $book->setTitle('Title 1');
    $book->setAuthor('Author 1');
    $book->setPublisher('Publisher 1');
    $book->setRackNumber('Rack Number 1');
    
    echo $book->getTitle()
  ?>
</body>
</html>