<?php
    namespace RPG;

    use RPG\Armor;

    abstract class Unit{

        protected $hp     = 40;
        protected $armor  = null;
        protected $damage = 0;
        protected $name;

        /**
         * Unit constructor.
         *
         * @param $name
         */
        public function __construct($name,Armor $armor = null){
            $this->setArmor( $armor );
            $this->name = $name;
        }

        /**
         * @param mixed $armor
         */
        public function setArmor(Armor $armor = null){
            $this->armor = $armor;
        }

        /**
         * @param \Unit $opponent
         *
         * @return mixed
         */
        abstract public function attack(Unit $opponent);

        /**
         * @param $direction
         */
        public function move($direction){
            show( "{$this->name} camina hacia {$direction}" );
        }

        /**
         * @return bool $name
         */
        public function getName(){
            return $this->name;
        }

        /**
         * @param $damage
         */
        public function takeDamage($damage){
            $this->hp = ( $this->hp-$this->absorbDamage( $damage ) );
            if($this->hp<0){
                $this->hp = 0;
            }
            show( "{$this->name} tiene {$this->hp} de vida" );
            if($this->hp<=0){
                $this->dies();
            }
        }

        protected function absorbDamage($damage){
            if($this->armor){
                $damage = $this->armor->absorbDamage( $damage );
                $this->mensajeAtaque( $this->armor );
            }

            return $damage;
        }

        protected function mensajeAtaque(Armor $armor){
            if(!is_null( $armor )){
                $evadeMessage = $this->armor->getEvadeAttack()==true ? "y evade ataque" : "";
                show( "{$this->name} tiene armadura '{$armor->getArmorName()}' {$evadeMessage}" );
            }
        }

        /**
         *
         */
        public function dies(){
            show( "{$this->name} muere" );
            exit();
        }

        /**
         * @return int
         */
        public function getHp(){
            return $this->hp;
        }

    }