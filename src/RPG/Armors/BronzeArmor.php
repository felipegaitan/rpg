<?php
    namespace RPG\Armors;

    use RPG\Armor;
    use RPG\Attack;

    class BronzeArmor extends Armor
    {

        protected $armorName = "Bronze Armor";

        public function absorbDamage(Attack $attack)
        {
            return $attack->getDamage()/2;
        }

    }