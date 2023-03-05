<!--Michael Kuswanto - 2172037-->
<!--Rezon Handry Gunawan - 2172004-->

<?php
$link = new PDO('mysql:host=localhost;dbname=pwl20222', 'root','');
$link ->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
$link ->setAttribute(PDO::ATTR_AUTOCOMMIT,false);
$query = 'SELECT id, name FROM genre';
$stmt = $link->prepare($query);
$stmt ->execute();
$result = $stmt->fetchAll();
$link = null;
?>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="d-flex justify-content-center">
    <div class="w-50 p-3 bg-light">
        <table class="table table-striped justify-content-center">
            <thead>
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
            </tr>
            </thead>
            <tbody>
            <?php
            foreach ($result as $genre) {
                echo '<tr>';
                echo '<td>' . $genre['id']. '</td>' ;
                echo '<td>' . $genre['name']. '</td>' ;
                echo '</tr>';
            }
            ?>
            </tbody>
        </table>
    </div>
</div>
