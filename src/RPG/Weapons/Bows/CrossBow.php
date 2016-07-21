<?php
    namespace RPG\Weapons\Bows;

    use RPG\Unit;

    class CrossBow extends Bow
    {

        protected $damage = 40;

        public function getDescription(Unit $atacker , Unit $opponet)
        {
            return "{$atacker->getName()} dispara una ráfaga de flechas a {$opponet->getName()}" ;
        }

    }