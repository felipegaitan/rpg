<?php
    namespace RPG\Armor;

    use RPG\Armor;
    use RPG\Armor\Properties\ArmorProperties;

    class CursedArmor extends ArmorProperties implements Armor{

        protected $armorName = "Cursed Armor";

        public function absorbDamage($damage){
            return $damage*2;
        }
    }