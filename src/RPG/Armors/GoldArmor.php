<?php
    namespace RPG\Armors;

    use RPG\Armor;

    class GoldArmor extends Armor
    {

        protected $armorName = "Gold Armor";

        public function absorbDamage($damage)
        {
            return $damage/4;
        }
    }