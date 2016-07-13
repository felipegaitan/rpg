<?php
    namespace RPG\Armor;

    use RPG\Armor;
    use RPG\Armor\Properties\ArmorProperties;

    class SilverArmor extends ArmorProperties implements Armor{

        protected $armorName = "Silver Armor";

        public function absorbDamage($damage){
            return $damage/3;
        }
    }
