<?php include("Pokemon.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POOkemon</title>
</head>
<body>
    <?php include("./header.php") ?>
    <img src="./consignePOOkemon.png" alt="">
    <main id="mainPOOkemon">
        <h2>POOkemon</h2>
        <div>
            <?php
                $salameche = new Pokemon("Salamèche",20,"Feu",8);
                $bulbizarre = new Pokemon("Bulbizarre",20,"Plante",8);
                $carapuce = new Pokemon("Carapuce",20,"Eau",8);

                $salameche->pokedex();     
                $salameche->attaque($bulbizarre);   
                $salameche->attaque($bulbizarre);   
                $salameche->attaque($bulbizarre);    
            ?>
        </div>
        <div>
            <?php
                $bulbizarre->pokedex();     
                $bulbizarre->attaque($carapuce);  
                $bulbizarre->attaque($carapuce);  
                $bulbizarre->attaque($carapuce);    
            ?>
        </div>
        <div>
            <?php
                $carapuce->pokedex();     
                $carapuce->attaque($salameche);  
                $carapuce->attaque($salameche);  
                $carapuce->attaque($salameche);    
            ?>
        </div>
    </main>
    <style>
        *{
            padding: 0px;
            margin: 0px;
            text-decoration: none;
            list-style: none;
        }
        main>div{
            padding-bottom: 32px;
        }
    </style>
</body>
</html>