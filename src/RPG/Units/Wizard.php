<?php
    namespace RPG\Units;

    use RPG\Units\Properties\UnitProperties;
    use RPG\Unit;

    class Wizard extends UnitProperties implements Unit
    {

        protected $armor;
        protected $damage = 10;

        public function attack(Unit $opponent)
        {
            show("{$this->name} lanza un hechizo a {$opponent->getName()}");
            $opponent->takeDamage($this->damage);
        }

    }