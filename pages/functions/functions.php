<?php
function getUser( $conn, $user, $column )
{
    if ( $user != '' )
    {
        $sql    = "select * from users where username = '$user' ";
        $result = mysqli_query( $conn, $sql );

        $count = mysqli_num_rows( $result );
        if ( $count > 0 )
        {
            $row = mysqli_fetch_assoc( $result );

            return $row[$column];
        }
        else
        {
            return '-';
        }
    }
}

function xxxTel( $txt )
{
    return substr( $txt, 0, 3 ) . '-' . substr( $txt, 3, 3 ) . '-' . substr( $txt, 6 ); // ตัดตัวอักษร
}

?>