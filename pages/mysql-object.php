<?php
$user_db = [
    'host'    => 'localhost',
    'user'    => 'root',
    'pwd'     => '',
    'db_name' => 'learn_php',
];

$conn = new mysqli( $user_db['host'], $user_db['user'], $user_db['pwd'], $user_db['db_name'] );

$sql    = 'select * from users where 1';
$result = $conn->query( $sql );
$row    = $result->fetch_assoc();

echo '<pre>';
// echo $row->username;
echo $row['username'];
echo '</pre>';

?>