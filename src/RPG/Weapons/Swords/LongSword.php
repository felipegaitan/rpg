<?php
    namespace RPG\Weapons\Swords;

    use RPG\Unit;

    class LongSword extends Sword
    {

        protected $damage = 40;

        public function getDescription(Unit $atacker , Unit $opponet)
        {
            return "{$atacker->getName()} ataca con una espada grande a {$opponet->getName()}" ;
        }

    }