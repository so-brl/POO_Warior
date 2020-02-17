<?php

require_once __DIR__ . "/../base/localWarrior.php";


$GLOBALS['warriorID'] = 'XartiaX';


// Définissez vos class de combattants
abstract class Warrior extends LocalWarrior
{
    public $id;
    public $name;
    public $speed = 30;
    public $life = 100;
    public $shield = 20;
    public $imageUrl;
    public $weapon ;


    public $mentalPower;
    public $superPower;
    public $level;

    /**
     * Warrior constructor.
     * @param $id
     */
    public function __construct($id)
    {
        $this->id = $id;
    }

    /**
     * @param mixed $weapon
     */
    public function SetWeapon(Weapon $weapon)
    {
        return $this->weapon = $weapon;
    }
    /**
     * @param mixed $imageUrl
     */
    public function SetImageUrl($imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }


}
class StartrekWarrior extends Warrior
{
    /**
     * StartrekWarrior constructor.
     * @param
     */
    public function __construct($id)
    {
        parent:: __construct($id);
        $this->mentalPower = 8;
    }
    /**
     * @return mixed
     */
    public function power()
    {
        return $this->mentalPower;
    }
}
class MarvelWarrior extends Warrior
{
    /**
     * MarvelWarrior constructor.
     * @param
     */
    public function __construct($id)
    {
        parent:: __construct($id);
        $this->superPower = 100;
    }
    /**
     * @return mixed
     */
    public function power()
    {
        return $this->superPower;
    }
}
class PokemonWarrior extends Warrior
{
    /**
     * PokemonWarrior constructor.
     * @param
     */
    public function __construct($id)
    {
        parent:: __construct($id);
        $this->level = 1;

    }

    /**
     * @return mixed
     */
    public function power()
    {
        return $this->level;
    }


}

class Weapon extends Warrior
{

    public $id;
    public $strength;
    public $imageUrl;

    /**
     * Weapon constructor.
     * @param $id
     * @param $strength
     */
    public function __construct($id, $strength)
    {
        $this->id = $id;
        $this->strength = $strength;
    }

    /**
     * @param mixed $imageUrl
     */
    public function SetImageUrl($imageUrl): void
    {
        $this->imageUrl = $imageUrl;
    }
}