<?php 

require('db.php');

$query = 'SELECT * FROM books';

$result = mysqli_query($conn, $query);

$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

var_dump($posts);





echo "<br>";
echo "<br>";

$query = 'SELECT title FROM books';

$result = mysqli_query($conn, $query);

$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);

var_dump($posts);























mysqli_free_result($result);
mysqli_close($conn);

?>