<?php
    namespace RPG\Units;

    use RPG\Units\Properties\UnitProperties;
    use RPG\Unit;

    class Wizard extends UnitProperties implements Unit{

        protected $damage = 10;
        protected $armor;

        public function attack(Unit $opponent){
            show( "{$this->name} lanza un hechizo a {$opponent->getName()}" );
            $opponent->takeDamage( $this->damage );
        }

    }