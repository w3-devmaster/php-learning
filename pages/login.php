<?php
    session_start();
    if ( isset( $_SESSION['user'] ) )
    {
        header( 'location: user.php' );
    }
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php
        include './element/nav-bar.php';
    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h3 class="text-center alert alert-info">เข้าสู่ระบบ</h3>
                <hr>
            </div>
            <div class="col-4 mx-auto border border-success p-3 rounded shadow">
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
                <form action="server-login.php" method="post">
                    <p class="mb-1 mt-3">Username</p>
                    <input class="form-control" name="username" type="text" placeholder="ชื่อผู้ใช้งาน" required>
                    <p class="mb-1 mt-3">Password</p>
                    <input class="form-control" name="password" type="password" placeholder="รหัสผ่าน" required>
                    <hr>
                    <div class="d-grid gap-2">
                        <input class="btn btn-success" name="login" type="submit" value="เข้าสู่ระบบ">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>

</html>