<?php
    namespace RPG\Armors;

    use RPG\Armor;
    use RPG\Attack;

    class CursedArmor extends Armor
    {

        protected $armorName = "Cursed Armor";

        public function absorbDamage(Attack $attack)
        {
            if( $attack->isPhysical()) {
                return $attack->getDamage()*2;
            }
            return $attack->getDamage()/2;
        }
    }