<?php

    $felipe = new Soldier( 'Felipe' );
    $yassel = new Archer( 'Yassel' );
    $yassel->attack( $felipe );
    $felipe->setArmor( new BronzeArmor() );
    $yassel->attack( $felipe );
    $felipe->setArmor( new CursedArmor() );
    $yassel->attack( $felipe );
    $yassel->setArmor( new EvadeArmor() );
    $felipe->attack( $yassel );

