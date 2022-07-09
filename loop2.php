<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Loop For</title>

</head>

<body>
    <?php
        for ( $i = 2560; $i <= 2565; $i++ )
        {
        ?>
    <p><?php echo $i; ?></p>
    <ul>
        <?php
            for ( $x = 1; $x <= 12; $x++ )
                {
                ?>
        <li><?=$x?></li>
        <?php
            }
            ?>
    </ul>
    <?php
        }
    ?>

    <?=( 1 == 1 ? 'เท่ากัน' : 'ไม่เท่ากัน' )?>
</body>

</html>