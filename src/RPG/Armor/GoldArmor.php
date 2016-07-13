<?php
    namespace RPG\Armor;

    use RPG\Armor;
    use RPG\Armor\Properties\ArmorProperties;

    class GoldArmor extends ArmorProperties implements Armor{

        protected $armorName = "Gold Armor";

        public function absorbDamage($damage){
            return $damage/4;
        }
    }