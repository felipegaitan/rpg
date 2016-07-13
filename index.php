<?php
    function show($message){
        echo "<p>$message</p>";
    }

    interface Armor{

        public function absorbDamage($damage);

        public function getArmorName();
    }

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
        public function __construct($name){
            $this->name = $name;
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
                $evadeMessage = $this->armor->getEvadeAttack() == true ? "y evade ataque" : "";
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

        /**
         * @param mixed $armor
         */
        public function setArmor(Armor $armor = null){
            $this->armor = $armor;
        }

    }

    class Archer extends Unit{

        protected $damage = 20;

        public function __construct($name,Armor $armor = null){
            $this->setArmor( $armor );
            parent::__construct( $name );
        }

        public function attack(Unit $opponent){
            show( "{$this->name} dispara una flecha {$opponent->getName()}" );
            $opponent->takeDamage( $this->damage );
        }

    }

    class Soldier extends Unit{

        protected $damage = 40;
        protected $armor;

        public function __construct($name,Armor $armor = null){
            $this->setArmor( $armor );
            parent::__construct( $name );
        }

        public function attack(Unit $opponent){
            show( "{$this->name} ataca con espada a {$opponent->getName()}" );
            $opponent->takeDamage( $this->damage );
        }

    }

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

    class BronzeArmor extends ArmorAbstract implements Armor{

        protected $armorName = "Bronze Armor";

        public function absorbDamage($damage){
            return $damage/2;
        }

    }

    class SilverArmor extends ArmorAbstract implements Armor{

        protected $armorName = "Silver Armor";

        public function absorbDamage($damage){
            return $damage/4;
        }
    }

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

    $felipe = new Soldier( 'Felipe' );
    $yassel = new Archer( 'Yassel' );
    $yassel->attack( $felipe );
    $felipe->setArmor( new BronzeArmor() );
    $yassel->attack( $felipe );
    $felipe->setArmor( new SilverArmor() );
    $yassel->attack( $felipe );
    $yassel->setArmor( new EvadeArmor() );
    $felipe->attack( $yassel );

