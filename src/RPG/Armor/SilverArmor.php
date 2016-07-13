<?php
    namespace RPG\Armor;

    use RPG\Armor;
    use RPG\Armor\ArmorClass;

    class SilverArmor extends ArmorClass implements Armor{

        protected $armorName = "Silver Armor";

        public function absorbDamage($damage){
            return $damage/3;
        }
    }
