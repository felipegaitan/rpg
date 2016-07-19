<?php
    namespace RPG\Armors;

    use RPG\Armor;
    use RPG\Armors\Properties\ArmorProperties;

    class SilverArmor extends ArmorProperties implements Armor
    {

        protected $armorName = "Silver Armor";

        public function absorbDamage($damage)
        {
            return $damage/3;
        }
    }
