<?php
    namespace RPG;

    class Wizard extends Unit{

        protected $damage = 10;
        protected $armor;

        public function attack(Unit $opponent){
            show( "{$this->name} lanza un hechizo a {$opponent->getName()}" );
            $opponent->takeDamage( $this->damage );
        }

    }