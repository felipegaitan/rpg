<?php
    require( 'src/helpers.php' );
    spl_autoload_register( function($className){
        $file = str_replace( "\\","/",$className );
        require "src/$file.php";
    });

    use RPG\Unit\Soldier;
    use RPG\Unit\Archer;
    use RPG\Armor\BronzeArmor;
    use RPG\Armor\CursedArmor;
    use RPG\Armor\GoldArmor;
    use RPG\Armor\EvadeArmor;

    $felipe = new Soldier( 'Felipe' );
    $yassel = new Archer( 'Yassel' );
    $yassel->attack( $felipe );
    $felipe->setArmor( new BronzeArmor() );
    $yassel->attack( $felipe );
    $felipe->setArmor( new GoldArmor() );
    //$felipe->setArmor( new CursedArmor() );
    $yassel->attack( $felipe );
    $yassel->setArmor( new EvadeArmor() );
    $felipe->attack( $yassel );

