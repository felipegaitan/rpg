<?php
    namespace RPG\Armor;

    use RPG\Armor;
    use RPG\Armor\Properties\ArmorProperties;

    class BronzeArmor extends ArmorProperties implements Armor{

        protected $armorName = "Bronze Armor";

        public function absorbDamage($damage){
            return $damage/2;
        }

    }