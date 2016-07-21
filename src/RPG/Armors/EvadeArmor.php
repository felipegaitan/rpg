<?php
    namespace RPG\Armors;

    use RPG\Armor;
    use RPG\Attack;

    class EvadeArmor extends Armor
    {

        protected $armorName = "Evade Armor";

        public function absorbDamage(Attack $attack)
        {
            $damage = $attack->getDamage();
            $this->evadeAttack = false;
            if (rand(0,1)) {
                $damage            = 0;
                $this->evadeAttack = true;
            }

            return $damage;
        }

        public function getEvade()
        {
            return $this->evadeAttack;
        }
    }