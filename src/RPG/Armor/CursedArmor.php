<?php
    namespace RPG\Armor;

    use RPG\Armor;
    use RPG\Armor\ArmorClass;

    class CursedArmor extends ArmorClass implements Armor{

        protected $armorName = "Cursed Armor";

        public function absorbDamage($damage){
            return $damage*2;
        }
    }