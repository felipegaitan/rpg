<?php
    namespace RPG\Armors;

    use RPG\Armor;
    use RPG\Attack;

    class GoldArmor extends Armor
    {

        protected $armorName = "Gold Armor";

        public function absorbDamage(Attack $attack)
        {
            return $attack->getDamage()/4;
        }
    }