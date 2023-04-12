<?php
class Hero{
    //atribute
    public $nama;
    public $health;
    public $damage;
    public $level = 1;

    public function __construct($nama, $health, $damage){
        $this->nama = $nama;
        $this->health = $health;
        $this->damage = $damage;
    }
    //method
    public function getinfo(){
        echo "<hr>Nama: " . $this->nama;
        echo "<br>HP: " . $this->health;
        echo "<br>Damage: " . $this->damage;
        echo "<br>Level: " . $this->level;
    }

    // method untuk naik 1 level
    public function LevelUp(){
        $this->level = $this->level +1;
    }

    //method untuk menyerang 
    public function attack($target){
        $target->health = $target->health - $this->damage;
    }
}
// membuat objek
$hero1 = new Hero ("Alducard" , 3200, 250);
$hero2 = new Hero("Frenco", 5000,50);

$hero1->levelUp();

$hero1->attack($hero2);

$hero1->getinfo();
$hero2->getinfo();