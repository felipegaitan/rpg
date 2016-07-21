<?php
    namespace RPG\Armors;

    use RPG\Armor;

    class EvadeArmor extends Armor
    {

        protected $armorName = "Evade Armor";

        public function absorbDamage($damage)
        {
            $this->evadeAttack = false;
            if (rand(0,1)) {
                $damage            = 0;
                $this->evadeAttack = true;
            }

            return $damage;
        }

        public function getEvade()
        {
            return $this->evadeAttack;
        }
    }