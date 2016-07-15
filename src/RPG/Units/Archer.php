<?php
    namespace RPG\Units;

    use RPG\Unit;

    class Archer extends Unit{

        protected $damage = 20;

        public function attack(Unit $opponent){
            show( "{$this->name} dispara una flecha {$opponent->getName()}" );
            $opponent->takeDamage( $this->damage );
        }

    }