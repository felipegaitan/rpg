<?php
    namespace RPG\Units;

    use RPG\Unit;

    class Soldier extends Unit{

        protected $damage = 40;
        protected $armor;

        public function attack(Unit $opponent){
            show( "{$this->name} ataca con espada a {$opponent->getName()}" );
            $opponent->takeDamage( $this->damage );
        }

    }