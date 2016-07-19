<?php
    require "../vendor/autoload.php";
    use RPG\Units\Soldier;
    use RPG\Units\Archer;
    use RPG\Units\Wizard;
    use RPG\Armors\BronzeArmor;
    use RPG\Armors\CursedArmor;
    use RPG\Armors\GoldArmor;
    use RPG\Armors\EvadeArmor;

    $felipe = new Soldier('Felipe');
    $yassel = new Archer('Yassel');
    $yassel->attack($felipe);
    $felipe->setArmor(new BronzeArmor());
    $yassel->attack($felipe);
    $felipe->setArmor(new GoldArmor());
    //$felipe->setArmor( new CursedArmor() );
    $yassel->attack($felipe);
    $yassel->setArmor(new EvadeArmor());
    $felipe->attack($yassel);

