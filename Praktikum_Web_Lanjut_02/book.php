<!--Michael Kuswanto - 2172037-->
<!---->

<?php
$link = new PDO('mysql:host=localhost;dbname=pwl20222', 'root','');
$link ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$link ->setAttribute(PDO::ATTR_AUTOCOMMIT,false);
$query = "SELECT book.isbn, book.title, book.author, book.publisher, book.publish_year, genre.name AS 'genre_name' FROM book INNER JOIN genre WHERE book.genre_id = genre.id";
$stmt = $link->prepare($query);
$stmt ->execute();
$result = $stmt->fetchAll();
$link = null;
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="d-flex justify-content-center">
    <div class="w-75 p-3 bg-light">
        <table class="table table-striped justify-content-center">
            <thead>
            <tr>
                <th scope="col">ISBN</th>
                <th scope="col">Title</th>
                <th scope="col">Author</th>
                <th scope="col">Publisher</th>
                <th scope="col">Publish Year</th>
                <th scope="col">Genre</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($result as $book) {
                echo '<tr>';
                echo '<td>' . $book['isbn']. '</td>' ;
                echo '<td>' . $book['title']. '</td>' ;
                echo '<td>' . $book['author']. '</td>' ;
                echo '<td>' . $book['publisher']. '</td>' ;
                echo '<td>' . $book['publish_year']. '</td>' ;
                echo '<td>' . $book['genre_name']. '</td>' ;
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>

