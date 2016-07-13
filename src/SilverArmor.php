<?php

    class SilverArmor extends ArmorAbstract implements Armor{

        protected $armorName = "Silver Armor";

        public function absorbDamage($damage){
            return $damage/3;
        }
    }
