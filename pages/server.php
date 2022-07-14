<?php
session_start();
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

    $username  = mysqli_real_escape_string( $conn, $_POST['username'] );
    $password  = mysqli_real_escape_string( $conn, $_POST['password'] );
    $password2 = mysqli_real_escape_string( $conn, $_POST['password2'] );
    $firstname = mysqli_real_escape_string( $conn, $_POST['firstname'] );
    $lastname  = mysqli_real_escape_string( $conn, $_POST['lastname'] );
    $email     = mysqli_real_escape_string( $conn, $_POST['email'] );

    if ( $username != '' && $password != '' && $password2 != '' && $firstname != '' && $lastname != '' && $email != '' )
    {
        if ( $password === $password2 )
        {
            $pass = md5( $password );

            // $chk   = "select count(*) as total from users where username = '$username' ";
            $chk   = "select * from users where username = '$username' ";
            $q_chk = mysqli_query( $conn, $chk );
            // $row   = mysqli_fetch_assoc( $q_chk );
            $cnt = mysqli_num_rows( $q_chk );

            // if ( $row['total] == 0 )
            if ( $cnt == 0 )
            {
                $sql = "insert into users (username,password,firstname,lastname,email)
                values ('$username','$pass','$firstname','$lastname','$email') ";
                $insert = mysqli_query( $conn, $sql );
                if ( $insert )
                {
                    $_SESSION['msg']  = 'สมัครไอดีเสร็จสิ้น';
                    $_SESSION['succ'] = true;
                    header( 'location: register.php' );
                }
                else
                {
                    $_SESSION['msg']  = 'ดำเนินการล้มเหลว ' . mysqli_error( $conn );
                    $_SESSION['succ'] = false;
                    header( 'location: register.php' );
                }
            }
            else
            {
                $_SESSION['msg']  = 'มี Username นี้อยู่แล้ว';
                $_SESSION['succ'] = false;
                header( 'location: register.php' );
            }
        }
        else
        {
            $_SESSION['msg']  = 'รหัสผ่านไม่ตรงกัน';
            $_SESSION['succ'] = false;
            header( 'location: register.php' );
        }
    }
    else
    {
        $_SESSION['msg']  = 'กรุณากรอกข้อมูลให้ครบถ้วน';
        $_SESSION['succ'] = false;
        header( 'location: register.php' );
    }

}
else
{
    header( 'location:index.php' );
}
?>