<?php
session_start();
include './db/connections.php';

if ( !empty( $_POST['login'] ) )
{
    // trim()  -- ตัดช่องว่างหน้าและหลัง สตริง
    $username = trim( $_POST['username'] );
    $password = trim( $_POST['password'] );

    $sql    = "select * from users where username = '$username' ";
    $result = mysqli_query( $conn, $sql );
    $count  = mysqli_num_rows( $result );

    if ( $count > 0 )
    {
        $row = mysqli_fetch_assoc( $result );

        if ( md5( $password ) === $row['password'] )
        {
            $_SESSION['user'] = $row['username'];
            $_SESSION['msg']  = 'เข้าสู่ระบบสำเร็จ';
            $_SESSION['succ'] = true;
            header( 'location: user.php' );
        }
        else
        {
            $_SESSION['msg']  = 'รหัสผ่านไม่ถูกต้อง';
            $_SESSION['succ'] = false;
            header( 'location: login.php' );
        }
    }
    else
    {
        $_SESSION['msg']  = 'ไม่พบไอดีนี้ในระบบ';
        $_SESSION['succ'] = false;
        header( 'location: login.php' );
    }
}
?>