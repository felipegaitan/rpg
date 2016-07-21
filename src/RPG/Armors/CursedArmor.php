<?php
    namespace RPG\Armors;

    use RPG\Armor;

    class CursedArmor extends Armor
    {

        protected $armorName = "Cursed Armor";

        public function absorbDamage($damage)
        {
            return $damage*2;
        }
    }