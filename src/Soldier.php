<?php
    namespace RPG;

    class Soldier extends Unit{

        protected $damage = 40;
        protected $armor;

        public function attack(Unit $opponent){
            show( "{$this->name} ataca con espada a {$opponent->getName()}" );
            $opponent->takeDamage( $this->damage );
        }

    }