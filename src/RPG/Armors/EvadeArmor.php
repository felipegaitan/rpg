<?php
    namespace RPG\Armors;

    use RPG\Armor;
    use RPG\Armors\Properties\ArmorProperties;

    class EvadeArmor extends ArmorProperties implements Armor
    {

        protected $armorName = "Evade Armor";

        public function absorbDamage($damage)
        {
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