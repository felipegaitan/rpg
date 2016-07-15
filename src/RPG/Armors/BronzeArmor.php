<?php
    namespace RPG\Armors;

    use RPG\Armor;
    use RPG\Armors\Properties\ArmorProperties;

    class BronzeArmor extends ArmorProperties implements Armor{

        protected $armorName = "Bronze Armor";

        public function absorbDamage($damage){
            return $damage/2;
        }

    }