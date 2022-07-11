<?php
//////////////////////////////////////////////////////
///  ฟังก์ชั้นที่จบในตัว
// $name = 'test 111';

// function myName( $name, $lastname )
// {
//     echo 'My name is ' . $name . ' ' . $lastname;
//     echo "<br>";
// }

// $lastname = 'Jan o cha';
// myName( 'apichat', $lastname );
// myName( 'vissanu', $lastname );
// myName( 'หำน้อย', $lastname );

//////////////////////////////////////////////////////////
//  ฟังก์ชั่นที่มีการส่งค่ากลับ

function area( $data )
{
    // $result = $width * $long;

    // return $result;

    // return $width * $long;
    // 100              50
    return $data['w'] * $data['l'];
}

$area = ['w' => 100, 'l' => 50]; //

echo area( $area );
// $area  = area( 500, 100 );
// $area2 = area( 5000, 10 );
// $area3 = area( 560, 160 );

// echo $area + $area2 + $area3;

?>