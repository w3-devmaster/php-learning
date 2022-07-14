<?php
include './db/connections.php';

if ( true )
{
    $idx = $_GET['idx'];

    $sql = "delete from users where idx = $idx ";
    $del = mysqli_query( $conn, $sql );
    if ( $del )
    {
        header( 'location: index.php' );
    }
    else
    {
        echo 'ดำเนินการล้มเหลว';
    }
}
else
{
    echo 'คุณไม่มีสิทธิ์ลบข้อมูล';
}
?>