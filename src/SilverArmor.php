<?php
    namespace RPG;

    class SilverArmor extends ArmorClass implements Armor{

        protected $armorName = "Silver Armor";

        public function absorbDamage($damage){
            return $damage/3;
        }
    }
