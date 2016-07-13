<?php
    namespace RPG;

    class BronzeArmor extends ArmorClass implements Armor{

        protected $armorName = "Bronze Armor";

        public function absorbDamage($damage){
            return $damage/2;
        }

    }