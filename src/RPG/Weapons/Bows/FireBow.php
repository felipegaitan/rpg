<?php
    namespace RPG\Weapons\Bows;

    use RPG\Unit;
    use RPG\Weapon;

    class FireBow extends Weapon
    {

        protected $damage = 30;
        protected $magical = true;
        protected $description = ':unit dispara una flecha de fuego a :opponent';

    }