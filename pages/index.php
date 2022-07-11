<?php
    include './db/connections.php';
    $sql = "SELECT * FROM users";

    $result = mysqli_query( $conn, $sql );
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
        // การนำเข้าไฟล์ มาใช้งาน  include '';
        include './element/nav-bar.php';

    ?>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <table class="table table-striped table-success text-center">
                    <thead>
                        <tr>
                            <th colspan="4">
                                <h3> รายชื่อสมาชิกทั้งหมด</h3>
                            </th>
                        </tr>
                        <tr>
                            <th>No.</th>
                            <th>Firstname</th>
                            <th>Lastname</th>
                            <th>Email</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                            while ( $row = mysqli_fetch_assoc( $result ) )
                            {
                            ?>
                        <tr>
                            <td><?=$row['idx']?></td>
                            <td><?=$row['firstname']?></td>
                            <td><?=$row['lastname']?></td>
                            <td><?=$row['email']?></td>
                        </tr>

                        <?php
                            }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>