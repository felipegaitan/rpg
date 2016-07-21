<?php
    namespace RPG\Armors;

    use RPG\Armor;
    use RPG\Attack;

    class SilverArmor extends Armor
    {

        protected $armorName = "Silver Armor";

        public function absorbDamage(Attack $attack)
        {
            return $attack->getDamage()/3;
        }
    }
