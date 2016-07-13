<?php

    abstract class ArmorAbstract{

        protected $armorName   = "";
        protected $evadeAttack = false;

        public function getArmorName(){
            return $this->armorName;
        }

        public function getEvadeAttack(){
            return $this->evadeAttack;
        }
    }