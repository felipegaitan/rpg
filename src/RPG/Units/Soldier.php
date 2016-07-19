<?php
    namespace RPG\Units;

    use RPG\Units\Properties\UnitProperties;
    use RPG\Unit;

    class Soldier extends UnitProperties implements Unit
    {

        protected $armor;
        protected $damage = 40;

        public function attack(Unit $opponent)
        {
            show("{$this->name} ataca con espada a {$opponent->getName()}");
            $opponent->takeDamage($this->damage);
        }

    }