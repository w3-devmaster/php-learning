<?php
    session_start();
    include './db/connections.php';
    include './functions/functions.php';
    // isset( $_SESSION['user'] ); /// มีไหม
    if ( empty( $_SESSION['user'] ) ) // ว่างไหม
    {
        $_SESSION['succ'] = false;
        $_SESSION['msg']  = 'กรุณาเข้าสู่ระบบ';
        header( 'location: login.php' );
    }

    $user = trim( $_SESSION['user'] );
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script>
    const showPass = () => {
        let chk = document.querySelector('#show-pass').checked
        let el_1 = document.querySelector('#pass1');
        let el_2 = document.querySelector('#pass2');
        let el_3 = document.querySelector('#pass3');

        if (chk) {
            el_1.type = 'text';
            el_2.type = 'text';
            el_3.type = 'text';
        } else {
            el_1.type = 'password';
            el_2.type = 'password';
            el_3.type = 'password';
        }
    }
    </script>
</head>

<body>
    <?php
        // การนำเข้าไฟล์ มาใช้งาน  include '';
        include './element/nav-bar.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php
                    if ( !empty( $_SESSION['msg'] ) )
                    {
                        if ( $_SESSION['succ'] )
                        {
                        ?>
                <div class="alert alert-success">
                    <?=$_SESSION['msg']?>
                </div>
                <?php
                    }
                        else
                        {
                        ?>
                <div class="alert alert-danger">
                    <?=$_SESSION['msg']?>
                </div>
                <?php
                    }
                        unset( $_SESSION['succ'] );
                        unset( $_SESSION['msg'] );
                    }
                ?>
            </div>
            <div class="col-lg-3 col-md-4 col-12">
                <table class="table table-striped table-sm table-borderless" style="font-size:12px;">
                    <tr>
                        <td>ไอดี</td>
                        <td><?=getUser( $conn, $user, 'username' )?></td>
                    </tr>
                    <tr>
                        <td>อีเมล</td>
                        <td><?=getUser( $conn, $user, 'email' )?></td>
                    </tr>
                    <tr>
                        <td>ชื่อ-สกุล</td>
                        <td><?=getUser( $conn, $user, 'firstname' ) . ' ' . getUser( $conn, $user, 'lastname' )?></td>
                    </tr>
                </table>
                <hr class="divider">
                <ul>
                    <li><a href="user.php">หน้าแรก</a></li>
                    <li><a href="user.php?cmd=changepassword">เปลี่ยนรหัสผ่าน</a></li>
                    <li><a href="user.php?cmd=profile">โปรไฟล์</a></li>
                    <li><a href="index.php?logout=1">ออกจากระบบ</a></li>
                </ul>
            </div>
            <div class="col-8">
                <?php
                    if ( isset( $_GET['cmd'] ) )
                    {
                        switch ( $_GET['cmd'] )
                        {
                        case 'changepassword':
                            include 'changepass-form.php';
                            break;

                        case 'profile':
                            include 'profile.php';
                            break;

                        default:
                            include './functions/object.php';
                            break;
                        }
                    }
                    else
                    {
                        include './functions/object.php';
                    }
                ?>
            </div>
        </div>
    </div>
</body>

</html>