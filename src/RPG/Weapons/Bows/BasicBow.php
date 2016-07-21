<?php
    namespace RPG\Weapons\Bows;

    use RPG\Unit;
    use RPG\Weapon;

    class BasicBow extends Weapon
    {

        protected $damage = 20;
        protected $description = ':unit dispara una flecha a :opponent';

    }