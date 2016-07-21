<?php
    namespace RPG\Armors;

    use RPG\Armor;

    class BronzeArmor extends Armor
    {

        protected $armorName = "Bronze Armor";

        public function absorbDamage($damage)
        {
            return $damage/2;
        }

    }