<?php
    namespace RPG\Weapons\Swords;

    use RPG\Unit;
    use RPG\Weapon;

    class BasicSword extends Weapon
    {

        protected $damage = 20;
        protected $description = ':unit ataca con una espada a :opponent';
        
    }