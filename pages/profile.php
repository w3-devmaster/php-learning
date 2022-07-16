<?php
    if ( empty( $_SESSION['user'] ) ) // ว่างไหม
    {
        $_SESSION['succ'] = false;
        $_SESSION['msg']  = 'กรุณาเข้าสู่ระบบ';
        header( 'location: login.php' );
    }

    $user = trim( $_SESSION['user'] );

    $idx = getUser( $conn, $user, 'idx' );

    $sql = "select count(*) as total from profiles where user_idx = $idx ";
    $chk = mysqli_query( $conn, $sql );

    $cnt = mysqli_fetch_assoc( $chk );

    // SELECT * FROM `users` inner join `profiles` on users.idx = profiles.user_idx;   การรวม Table

    if ( $cnt['total'] == 0 )
    {
        $inst = "insert into profiles (user_idx,add_date)  values ($idx,now())";
        mysqli_query( $conn, $inst );
    }

    $sql    = "select * from profiles where user_idx = $idx ";
    $result = mysqli_query( $conn, $sql );

    $row = mysqli_fetch_assoc( $result );

?>

<table class="table table-striped table-sm table-borderless">
    <thead>
        <tr>
            <th colspan="2">ข้อมูลโปรไฟล์</th>
        </tr>
    </thead>
    <tbody>
        <tr>
            <td>จำนวนเงิน</td>
            <td>
                <?=number_format( $row['money'], 2 )?>
                <?//ceil( $row['money'] )  ปัดเศษขึ้น?>
                <?//floor( $row['money'] ) ปัดเศษลง?>
            </td>
        </tr>
        <tr>
            <td>ที่อยู่</td>
            <td><?=$row['address'] . ' ' . $row['moo'] . ' ' . $row['district'] . ' ' . $row['amphur'] . ' ' . $row['province'] . ' ' . $row['postcode']?>
            </td>
        </tr>
        <tr>
            <td>โทร</td>
            <td><?=xxxTel( $row['tel'] )?></td>
        </tr>
        <tr>
            <td>Line Id</td>
            <td><?=str_replace( 'nong', '', $row['line'] )?></td>
        </tr>
        <tr>
            <td>วันที่เพิ่ม</td>
            <td><?=date( 'd-m-Y H:i:s', strtotime( $row['add_date'] ) )?>
            </td>
        </tr>
    </tbody>
</table>