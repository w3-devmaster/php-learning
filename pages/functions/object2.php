<?php
namespace Functions;

class MyClass
{
    // public $public       = 'PUBLIC'; // เรียกใช้งานได้ทุกที่
    // private $private     = 'PRIVATE'; // เรียกใช้งานได้เฉพาะ ภายในคลาส
    // protected $protected = 'PROTECTED'; // เรียกใช้งานได้ภายในตัวเอง และ คลาสลูก

    public $name;
    public $h;
    public $w;
    protected $bmi;

    // function __construct( $name, $h, $w )
    // {
    //     $this->name = $name;
    //     $this->h    = $h;
    //     $this->w    = $w;
    // }

    protected function bmi()
    {
        return $this->w / (  ( $this->h / 100 ) * ( $this->h / 100 ) );
    }

    public function showData()
    {
        echo 'ชื่อ ' . $this->name;
        echo '<br>';
        echo "ส่วนสูง {$this->h} เซ็นติเมตร";
        echo '<br>';
        echo "น้ำหนัก $this->w กก.";
        echo '<br>';
        echo 'ดัชนีมวลกาย ' . number_format( $this->bmi(), 2 );
        echo '<br>';
    }
}

class MySubClass extends MyClass
{
    public function showBmi()
    {
        echo $this->bmi();
    }
}

// $my       = new MySubClass();
// $my->name = 'jod';
// $my->h    = 170;
// $my->w    = 55;

// echo $my->showData();

// $my2 = new MySubClass();

?>