<?php
// $x = 10;
// $y = 100.01;

// $z = true; // false  // boolean

// $txt = 'Apichat';

// $cars = [
//     'bmw',
//     'honda',
//     'yamaha',
// ]; //  Indexed Array // อาร์เรย์ แบบมีคีย์เป็นตัวเลข

// $person = [
//     'name'     => 'Apichat',
//     'lastname' => 'Kumjensi',
// ]; // Associative Array // อาร์เรย์ ที่มีคีย์กำกับ

// $persons = [
//     'Head' => [
//         'firstname' => 'Apichat',
//         'lastname'  => 'Kumjensi',
//         'age'       => 32,
//         'profiles'  => [
//             'facebook' => 'PEP',
//             'line'     => "pepsi",
//         ],
//     ],
//     [
//         'firstname' => 'Visanu',
//         'lastname'  => 'Chotmit',
//         'age'       => 35,
//     ],
//     [
//         'firstname' => 'Manow',
//         'lastname'  => 'Orange',
//         'age'       => 25,
//     ],
// ]; // Multi Dimensional Array

// echo $persons['Head']['profiles']['line'];
// echo $persons[0]['firstname'];

// echo 'He is name : ' . $persons[0]['firstname'] . ' อายุ ' . $persons[0]['age'] . '<br>';
// echo 'He is name : ' . $persons[1]['firstname'] . '<br>';
// echo 'He is name : ' . $persons[2]['firstname'] . '<br>';

// echo '<pre>';
// print_r( $persons );
// echo '</pre>';

// echo 'My name is ' . $person['name'] . ' ' . $person['lastname'];

// echo $cars[0];
// echo '<br>';
// echo $cars[1];
// echo '<br>';
// echo $cars[2];

/*
Data Type

Integer   == ตัวเลขจำนวนเต็ม
Float  == ทศนิยม
String == ข้อความ
Boolean == ค่าจริง กับ ค่าเท็จ
NULL  == ค่าว่าง

Array
Object

 */
// echo 'Myname is : ' . $txt . ' ได้คะแนน : ' . ( $y + $x ) . ' คะแนน';

for ( $i = 2; $i <= 24; $i++ )
{
    for ( $x = 1; $x <= 12; $x++ )
    {
        echo $i . ' x ' . $x . ' = ' . ( $i * $x ) . '<br>';
    }
    echo '<hr>';
}
?>