<?php
//  while loop
// do while
// for loop
// foreach

// $a = 1;
// while ( $a <= 10 )
// {
//     echo 'มีค่า : ' . $a . '<br>';
//     $a++; // $a = $a + 1;
// }
// /////////////////////////////////
// echo "<hr>";

// $b = 1;

// do
// {
//     echo 'มีค่า : ' . $b . '<br>';
//     $b++;
// } while ( $b <= 10 );

// for ( $y = 0; $y <= 100; $y += 10 )
// {
//     echo 'มีค่า : ' . $y . '<br>';
// }

// echo "<hr>";

// echo '<select>';
// for ( $a = 2565; $a >= 2400; $a--)
// {
//     echo '<option value="' . $a . '" >ปี พ.ศ. ' . $a . '</option>';
// }
// echo '</select>';

// $cars  = ['bmw', 'honda', 'yamaha', 'ford', 'nissan']; // Indexed Array
// $total = count( $cars );

// // echo $total;
// for ( $i = 0; $i < $total; $i++ )
// {
//     echo $cars[$i] . '<br>';
// }

// echo '<br>';

// foreach ( $cars as $car )
// {
//     echo $car . '<br>';
// }

// $person = [
//     'name'     => 'Apichat',
//     'lastname' => 'Kumjensi',
// ]; // Associative Array // อาร์เรย์ ที่มีคีย์กำกับ

// echo '<br>';
// foreach ( $person as $k => $a )
// {
//     echo $k . ' = ' . $a . '<br>';
// }

$persons = [
    'director' => [
        'firstname' => 'Johny',
        'lastname'  => 'Depp',
        'age'       => 60,
        'home'      => [
            'home'    => '119/119',
            'address' => 'New York',
            'nation'  => 'USA',
        ],
    ],
    'vampire'  => [
        'firstname' => 'Edward',
        'lastname'  => 'Cullen',
        'age'       => 130,
        'home'      => [
            'home'    => '15',
            'address' => 'Fox',
            'nation'  => 'USA',
        ],
    ],
    'god'      => [
        'firstname' => 'Thor',
        'lastname'  => 'Odinson',
        'age'       => 3500,
        'home'      => [
            'home'    => '1',
            'address' => 'Assguard',
            'nation'  => 'Univers',
        ],
    ],
];

foreach ( $persons as $key => $value )
{
    echo $value['firstname'] . ' : ';
    foreach ( $value['home'] as $k => $v )
    {
        echo $k . ' --> ' . $v . '';
    }
    echo '<br>';
}

?>