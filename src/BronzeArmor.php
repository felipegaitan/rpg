<?php

    class BronzeArmor extends ArmorAbstract implements Armor{

        protected $armorName = "Bronze Armor";

        public function absorbDamage($damage){
            return $damage/2;
        }

    }