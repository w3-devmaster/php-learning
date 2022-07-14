<?php
    session_start();
    include './db/connections.php';
    // isset( $_SESSION['user'] ); /// มีไหม
    if ( empty( $_SESSION['user'] ) ) // ว่างไหม
    {
        $_SESSION['succ'] = false;
        $_SESSION['msg']  = 'กรุณาเข้าสู่ระบบ';
        header( 'location: login.php' );
    }

    $user = trim( $_SESSION['user'] );

    $sql = "SELECT * FROM users where username = '$user' ";

    $result = mysqli_query( $conn, $sql );
    $row    = mysqli_fetch_assoc( $result );
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
            <div class="col-4">
                <table class="table table-striped table-sm table-borderless" style="font-size:12px;">
                    <tr>
                        <td>ไอดี</td>
                        <td><?=$row['username']?></td>
                    </tr>
                    <tr>
                        <td>อีเมล</td>
                        <td><?=$row['email']?></td>
                    </tr>
                    <tr>
                        <td>ชื่อ-สกุล</td>
                        <td><?=$row['firstname'] . ' ' . $row['lastname']?></td>
                    </tr>
                    <tr>
                        <td colspan="2" style="font-size:12px;">
                            <a class="btn btn-sm btn-danger" href="index.php?logout=1">ออกจากระบบ</a>
                        </td>
                    </tr>
                </table>
            </div>
            <div class="col-8">
                <h6 class="text-info">เปลี่ยนรหัสผ่าน</h6>
                <form action="changepassword.php" method="post">
                    <input id="pass1" class="form-control form-control-sm mb-2" name="password" type="password"
                        placeholder="รหัสผ่านปัจจุบัน">
                    <input id="pass2" class="form-control form-control-sm mb-2" name="new_password" type="password"
                        placeholder="รหัสผ่านใหม่">
                    <input id="pass3" class="form-control form-control-sm mb-2" name="new_password2" type="password"
                        placeholder="ยืนยันรหัสผ่านใหม่">
                    <hr>
                    <input id="show-pass" type="checkbox" onclick="showPass()"> แสดงรหัสผ่าน
                    <hr>
                    <input class="btn btn-sm btn-success" name="do" type="submit" value="เปลี่ยนรหัสผ่าน">
                </form>
            </div>
        </div>
    </div>
</body>

</html>