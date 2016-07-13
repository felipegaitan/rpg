<?php
    namespace RPG\Armor;

    abstract class ArmorClass{

        protected $armorName   = "";
        protected $evadeAttack = false;

        public function getArmorName(){
            return $this->armorName;
        }

        public function getEvadeAttack(){
            return $this->evadeAttack;
        }
    }