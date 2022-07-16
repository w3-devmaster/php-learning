<?php

class Person
{
    public $name;
    public $lastname;
    public $bt_date;
    // private $age;

    public function __construct( $name, $lastname, $bt_date )
    {
        $this->name     = $name;
        $this->lastname = $lastname;
        $this->bt_date  = $bt_date;

    }

    public function showName()
    {
        echo $this->name . ' ' . $this->lastname;
    }

    public function age()
    {
        $now = strtotime( date( 'Y-m-d' ) );
        $tmp = strtotime( $this->bt_date );

        $year = floor(  (  ( $now - $tmp ) / ( 60 * 60 * 24 ) ) / 365 );

        echo $year . ' Years';

    }

    private function age2()
    {
        //  ประกาศใช้ภายในคลาส เท่านั้น
    }

    public static function age3() /////  **********************************
    {
        echo '55 Years';
        // เรียกจากนอกคลาสได้โดยตรง
    }

}

$jod   = new Person( 'Vissanu', 'Chotmit', '1986-05-25' );
$boss  = new Person( 'Jiradech', 'Phanraksa', '1996-02-20' );
$manow = new Person( 'Supharoek', 'Manow', '1996-04-10' );

$jod->showName();
echo "<br>";
$jod->age();
echo "<br>";

$boss->showName();
echo "<br>";
$boss->age();
echo "<br>";

$manow->showName();
echo "<br>";
$manow->age();

?>