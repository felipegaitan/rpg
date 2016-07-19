<?php
    namespace RPG\Armors\Properties;

    abstract class ArmorProperties
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
    }