<?php
// $_REQUEST; รับได้ทั้ง post และ get
// $_POST;
// $_GET;

// INSERT INTO    ----
// SELECT     ----
// UPDATE
// DELETE

include './db/connections.php';

if ( !empty( $_POST['register'] ) )
{

    $firstname = mysqli_real_escape_string( $conn, $_POST['firstname'] );
    $lastname  = mysqli_real_escape_string( $conn, $_POST['lastname'] );
    $email     = mysqli_real_escape_string( $conn, $_POST['email'] );

    if ( $firstname != '' && $lastname != '' && $email != '' )
    {
        $sql    = "INSERT INTO users (firstname,lastname,email) VALUES ('$firstname','$lastname','$email') ";
        $insert = mysqli_query( $conn, $sql );
        if ( $insert )
        {
            echo 'สมัครไอดีเสร็จสิ้น';
        }
        else
        {
            echo 'ดำเนินการล้มเหลว';
        }
    }
    else
    {
        echo 'กรุณากรอกข้อมูลให้ครบถ้วน';
    }

}
else
{
    header( 'location:index.php' );
}
?>