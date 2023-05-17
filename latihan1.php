<?php
$dbh = new PDO('mysql:host=localhost;dbname=crud', 'root', '');
$db = $dbh->prepare('SELECT * FROM mahasiswa');
$db->execute();

$mahasiswa = $db->fetchAll(PDO::FETCH_ASSOC);

$data = json_encode($mahasiswa, true);
echo $data;

?>