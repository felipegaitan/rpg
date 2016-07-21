<?php
    namespace RPG\Weapons\Bows;

    use RPG\Unit;
    use RPG\Weapon;

    class CrossBow extends Weapon
    {

        protected $damage = 40;
        protected $description = ':unit dispara una ráfaga de flechas a :opponent';

    }