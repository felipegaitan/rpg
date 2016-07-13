<?php
    namespace RPG\Armor;

    use RPG\Armor;
    use RPG\Armor\ArmorClass;

    class GoldArmor extends ArmorClass implements Armor{

        protected $armorName = "Gold Armor";

        public function absorbDamage($damage){
            return $damage/4;
        }
    }