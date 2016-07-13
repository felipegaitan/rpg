<?php

    class GoldArmor extends ArmorAbstract implements Armor{

        protected $armorName = "Gold Armor";

        public function absorbDamage($damage){
            return $damage/4;
        }
    }