<?php
    namespace RPG\Units;

    use RPG\Unit;
    use RPG\Weapons\Bows\Bow;

    class Archer extends Unit
    {

        public function __construct($name,Bow $weapon)
        {
            parent::__construct($name,$weapon);
        }

    }