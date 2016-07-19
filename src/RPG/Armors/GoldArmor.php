<?php
    namespace RPG\Armors;

    use RPG\Armor;
    use RPG\Armors\Properties\ArmorProperties;

    class GoldArmor extends ArmorProperties implements Armor
    {

        protected $armorName = "Gold Armor";

        public function absorbDamage($damage)
        {
            return $damage/4;
        }
    }