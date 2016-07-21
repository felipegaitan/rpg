<?php
    namespace RPG\Weapons\Swords;

    use RPG\Unit;

    class BasicSword extends Sword
    {

        protected $damage = 20;

        public function getDescription(Unit $atacker , Unit $opponet)
        {
            return "{$atacker->getName()} ataca con una espada a {$opponet->getName()}" ;
        }

    }