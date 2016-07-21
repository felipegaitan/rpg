<?php
    namespace RPG\Units;

    use RPG\Unit;
    use RPG\Weapons\Swords\Sword;

    class Soldier extends Unit
    {
        
        public function __construct($name,Sword $weapon)
        {
            parent::__construct($name,$weapon);
        }

    }