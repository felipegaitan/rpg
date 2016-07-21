<?php
    namespace RPG\Weapons\Bows;

    use RPG\Unit;

    class BasicBow extends Bow
    {

        protected $damage = 20;

        public function getDescription(Unit $atacker,Unit $opponet)
        {
            return "{$atacker->getName()} dispara una flecha a {$opponet->getName()}";
        }

    }