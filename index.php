<?php
    function show($message){
        echo "<p>$message</p>";
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
            return $damage;
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

    class Archer extends Unit{

        protected $damage = 20;

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

        /**
         * @param mixed $armor
         */
        public function setArmor(Armor $armor = null){
            $this->armor = $armor;
        }

        public function attack(Unit $opponent){
            show( "{$this->name} ataca con espada a {$opponent->getName()}" );
            $opponent->takeDamage( $this->damage );
        }

        protected function absorbDamage($damage){
            if($this->armor){
                $damage = $this->armor->absorbDamage( $damage );
            }

            return $damage;
        }

    } 

    interface Armor{
        public function absorbDamage($damage);
    }

    class BronceArmor implements Armor{

        public function absorbDamage($damage){
            return $damage/2;
        }
    }

    class SilverArmor implements Armor{

        public function absorbDamage($damage){
            return $damage/4;
        }
    }

    $bronceArmor = new BronceArmor();
    $silverArmor = new SilverArmor();
    $felipe      = new Soldier( 'Felipe' );
    $yassel      = new Archer( 'Yassel' );
    // $felipe->move( "Adelante" );
    // $yassel->attack( $felipe );
    $yassel->attack( $felipe );
    $felipe->setArmor( $bronceArmor );
    $yassel->attack( $felipe );
    $felipe->setArmor( $silverArmor );
    $yassel->attack( $felipe );
    $felipe->attack( $yassel );

    