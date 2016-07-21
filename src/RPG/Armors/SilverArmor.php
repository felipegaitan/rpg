<?php
    namespace RPG\Armors;

    use RPG\Armor;

    class SilverArmor extends Armor
    {

        protected $armorName = "Silver Armor";

        public function absorbDamage($damage)
        {
            return $damage/3;
        }
    }
