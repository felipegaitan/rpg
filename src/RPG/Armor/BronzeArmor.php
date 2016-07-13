<?php
    namespace RPG\Armor;

    use RPG\Armor;
    use RPG\Armor\ArmorClass;

    class BronzeArmor extends ArmorClass implements Armor{

        protected $armorName = "Bronze Armor";

        public function absorbDamage($damage){
            return $damage/2;
        }

    }