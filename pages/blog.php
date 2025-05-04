<h1>blog</h1>

<?php
$stmt= $conn->query('SELECT * FROM post');
$stm=$stmt->fetchALL();
var_dump($stm);



?>