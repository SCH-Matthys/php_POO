<?php include("Voiture.php"); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POO</title>
</head>
<body>
    <?php include("./header.php"); ?>
    <main>
        <section>
            <div>
                <div id="light"></div>
                <a href="" id="lightbtn">Toggle Lights</a>
            </div>
            <div></div>
            <div></div>
        </section>
        <p>
                <?php 
                    // PUBLIC ..............................
                    // $zx = new Voiture("Blanche",5);
                    // $zx->presentation();

                    
                    // PRIVATE ..............................
                    // $zx = new Voiture("blourge",17,50);
                    // $zx->setColor("blanche");
                    // echo $zx->getColor();
                    // echo "La voiture posède ".$zx->getNbrPortes()." portes et est de couleur ".$zx->getColor().". <br><br>";

                    // COULEUR , PORTES, TANK, TANKVALUE, CONSO, LIGHT
                    $mustang = new Voiture("Noir", 3, 80, 0, 12, 0);
                    // $mustang->infoGlobal();
                    // $mustang->tBord();
                    // $mustang->rouler(50);
                    $mustang->fill();
                    $mustang->tBord();
                    $mustang->rouler(100);
                    $mustang->tBord();
                    $mustang->fill();
                    $mustang->rouler(20);
                    $mustang->rouler(100);
                    // var_dump($mustang);
                ?>
            </p>
    </main>
    <style>
        *{
            padding: 0px;
            margin: 0px;
            text-decoration: none;
            list-style: none;
        }
        p{
            /* display: none; */
        }
        section{
            width: 1000px;
            height: 200px;
            background-color:grey;
            border: solid 4px black;
            border-bottom: none;
            display: flex;
        }
        section>div:nth-of-type(1){
            width: 200px;
            display:flex;
            flex-direction: column;
            justify-content: space-around;
            align-items: center;
        }
        section>div:nth-of-type(1)>div#light{
            width: 100px;
            height: 100px;
            background-color: lightgrey;
            border-radius: 100px;
            border: solid 2px #313131;
        }
        section>div:nth-of-type(1)>a#lightbtn{
            background-color:rgb(110, 110, 110);
            border: solid 1px #313131;
            padding: 8px 16px;
            border-radius: 4px;
            color: lightblue;
            font-weight: bold;
            letter-spacing: 1px;
            text-transform: uppercase;
            transition: 0.2s;
        }
        section>div:nth-of-type(1)>a#lightbtn:hover{
            background-color:rgb(119, 119, 119);
            border: solid 1px #313131;
            color:rgb(173, 212, 225);
            text-shadow: rgb(57, 168, 205) 1px 0 10px;
        }

        section>div:nth-of-type(2){
            width: 600px;
            border: solid 1px black;
            border-top:none;
            border-bottom:none;
        }
        section>div:nth-of-type(3){
            width: 200px;
        }
    </style>
</body>
</html>