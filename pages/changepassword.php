<?php
session_start();

include './db/connections.php';

if ( !empty( $_POST['do'] ) )
{
    $username      = trim( $_SESSION['user'] );
    $password      = trim( $_POST['password'] );
    $new_password  = trim( $_POST['new_password'] );
    $new_password2 = trim( $_POST['new_password2'] );

    if ( $new_password === $new_password2 )
    {
        $sql    = "select password from users where username = '$username' ";
        $result = mysqli_query( $conn, $sql );
        $row    = mysqli_fetch_assoc( $result );

        if ( $row['password'] === md5( $password ) )
        {
            $new_pass = md5( $new_password );
            $u_sql    = "update users set password = '$new_pass' where username = '$username' ";
            $update   = mysqli_query( $conn, $u_sql );

            if ( $update )
            {
                $_SESSION['succ'] = true;
                $_SESSION['msg']  = 'เปลี่ยนรหัสผ่านเสร็จสิ้น';
                header( 'location: user.php' );
            }
            else
            {
                $_SESSION['succ'] = false;
                $_SESSION['msg']  = 'การดำเนินการล้มเหลว';
                header( 'location: user.php' );
            }
        }
        else
        {
            $_SESSION['succ'] = false;
            $_SESSION['msg']  = 'รหัสผ่านปัจจุบันไม่ถูกต้อง';
            header( 'location: user.php' );
        }
    }
    else
    {
        $_SESSION['succ'] = false;
        $_SESSION['msg']  = 'รหัสผ่านใหม่ ไม่ตรงกัน';
        header( 'location: user.php' );
    }
}
else
{
    header( 'location: user.php' );
}
?>