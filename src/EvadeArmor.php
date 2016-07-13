<?php

    class EvadeArmor extends ArmorAbstract implements Armor{

        protected $armorName = "Evade Armor";

        public function absorbDamage($damage){
            if(rand( 0,1 )){
                $damage            = 0;
                $this->evadeAttack = true;
            }

            return $damage;
        }

        public function getEvade(){
            return $this->evade;
        }
    }