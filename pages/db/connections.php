<?php
$user_db = [
    'host'    => 'localhost',
    'user'    => 'root',
    'pwd'     => '',
    'db_name' => 'learn_php',
];

$conn = mysqli_connect( $user_db['host'], $user_db['user'], $user_db['pwd'], $user_db['db_name'] );

if ( !$conn )
{
    die( 'Error Connect to Databases' );
}

?>