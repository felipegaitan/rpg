<?php

    class CursedArmor extends ArmorAbstract implements Armor{

        protected $armorName = "Cursed Armor";

        public function absorbDamage($damage){
            return $damage * 2;
        }
    }