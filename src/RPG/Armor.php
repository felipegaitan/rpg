<?php
    namespace RPG;

    use RPG\Attack;

    abstract class Armor
    {

        protected $armorName   = "";
        protected $evadeAttack = false;

        public function getArmorName()
        {
            return $this->armorName;
        }

        public function getEvadeAttack()
        {
            return $this->evadeAttack;
        }

        abstract public function absorbDamage(Attack $attack);

    }