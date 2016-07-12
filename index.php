<?php
    function show($message){
        echo "<p>$message</p>";
    }

    abstract class Unit{

        protected $hp     = 40;
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
         * @return $name
         */
        public function getName(){
            return $this->name;
        }

        /**
         * @param $damage
         */
        public function takeDamage($damage){
            // $this->setHp( $this->hp-$damage );
            $this->setHp( $this->hp-$damage );
            if($this->hp<=0){
                $this->dies();
            }
        }

        /**
         * @param int $hp
         */
        private function setHp($points){
            $this->hp = $points;
            show( "{$this->name} tiene {$this->hp} de vida" );
        }

        /**
         *
         */
        public function dies(){
            show( "{$this->name} muere" );
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

        public function takeDamage($damage){
            if(rand( 0,1 )){
                parent::takeDamage( $damage );
            }else{
                show( "{$this->name} evita el ataque" );
            }
        }

    }

    class Soldier extends Unit{

        protected $damage = 40;

        public function attack(Unit $opponent){
            show( "{$this->name} corta en dos {$opponent->getName()}" );
            $opponent->takeDamage( $this->damage );
        }

        public function takeDamage($damage){
            parent::takeDamage( $damage/2 );
        }

    }

    class Wizard extends Unit{

        public function attack(Unit $opponent){
            show( "{$this->name} manda un hechizo a {$opponent->getName()}" );
        }

    }

    $felipe = new Soldier( 'Felipe' );
    $yassel = new Archer( 'Yassel' );
    $felipe->move( "Adelante" );
    $yassel->attack( $felipe );
    $yassel->attack( $felipe );
    $felipe->attack( $yassel );

    