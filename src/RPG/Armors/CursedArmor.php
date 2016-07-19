<?php
    namespace RPG\Armors;

    use RPG\Armor;
    use RPG\Armors\Properties\ArmorProperties;

    class CursedArmor extends ArmorProperties implements Armor
    {

        protected $armorName = "Cursed Armor";

        public function absorbDamage($damage)
        {
            return $damage*2;
        }
    }