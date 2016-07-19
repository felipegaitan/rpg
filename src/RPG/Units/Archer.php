<?php
    namespace RPG\Units;

    use RPG\Units\Properties\UnitProperties;
    use RPG\Unit;

    class Archer extends UnitProperties implements Unit
    {

        protected $damage = 20;

        public function attack(Unit $opponent)
        {
            show("{$this->name} dispara una flecha {$opponent->getName()}");
            $opponent->takeDamage($this->damage);
        }

    }