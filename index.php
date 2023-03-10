<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clicker</title>
    <link rel="stylesheet" href="css/style.css">
    <script async src="clicker.js"></script>
</head>

<body>
    <header>
        <p>1 kill = 1 Cert</p>
        <p id="cert">Certs : 0</p>
    </header>

    <main>
        <!-- plateau de jeu -->
        <div id="plateau">
            <!-- plateau ennemis (click) -->
            <div id="ennemis">
                <img id="clicker" src="image/ps2.jpg" alt="">
            </div>

            <!-- plateau alliés -->
            <div id="allies">
                <!-- alliés de dos-->
                <div class="carte"><img class="img" src="image/ingénieurD.png" alt=""></div>
                <div class="carte"><img class="img" src="image/infiltréD.png" alt=""></div>
                <div class="carte"><img class="img" src="image/assaut_lourdD.png" alt=""></div>
                <div class="carte"><img id="principal" class="img" src="image/poing.png" alt=""></div> <!-- le clicker vue à la première personne -->
                <div class="carte"><img class="img" src="image/xamD.png" alt=""></div>
                <div class="carte"><img class="img" src="image/assaut_légerD.png" alt=""></div>
                <div class="carte"><img class="img" src="image/ingénieurD.png" alt=""></div>
            </div>
        </div>

        <!-- le shop armes -->
        <div class="shop">

            <h1>Arme</h1>

            <div id="shop_armes">

                <div class="carte_arme">
                    <img class="img_armes" src="image/Cart-5-S_2.png" alt="">
                    <div>
                        <p>2 kills</p>
                        <button id="cart" class="bouton1">20 Certs</button>
                    </div>
                </div>


                <div class="carte_arme">
                    <img class="img_armes" src="image/Arbaléte-MG-A1_2.png" alt="">
                    <div>
                        <p>5 kills</p>
                        <button id="arbalete" class="bouton1">666 Certs</button>
                    </div>
                </div>


                <div class="carte_arme">
                    <img class="img_armes" src="image/MG-HBR1-Dragon_2.png" alt="">
                    <div>
                        <p>16 kills</p>
                        <button id="dragon" class="bouton1">2186 Certs</button>
                    </div>
                </div>

                <div class="carte_arme">
                    <img class="img_armes" src="image/M-H1-Vigie_2.png" alt="">
                    <div>
                        <p>43 kills</p>
                        <button id="vigie" class="bouton1">6666 Certs</button>
                    </div>
                </div>


                <div class="carte_arme">
                    <img class="img_armes" src="image/Percuteur-T2_2.png" alt="">
                    <div>
                        <p>127 kills</p>
                        <button id="percuteur" class="bouton1">11729 Certs</button>
                    </div>
                </div>


                <div class="carte_arme">
                    <img class="img_armes" src="image/Pitié-MRC3_2.png" alt="">
                    <div>
                        <p>1000 kills</p>
                        <button id="pitie" class="bouton1">50000 Certs</button>
                    </div>
                </div>


            </div>
        </div>

        <!-- shop alliés -->
        <div class="shop">

            <h1>Alliés</h1>

            <div id="shop_allies">

                <div class="carte-allies">
                    <img class="img_allies" src="image/ingénieurF.png" alt="">
                    <div>
                        <p>1 kill/s</p>
                        <button id=" medecin" class="bouton1">100 Certs</button>
                    </div>
                </div>

                <div class="carte-allies">
                    <img class="img_allies" src="image/ingénieurF.png" alt="">
                    <div>
                        <p>3 kills/s</p>
                        <button id="ingenieur" class="bouton1">999 Certs</button>
                    </div>
                </div>



                <div class="carte-allies">
                    <img class="img_allies" src="image/infiltréF.png" alt="">
                    <div>
                        <p>10 kills/s</p>
                        <button id="infiltré" class="bouton1">3874 Certs</button>
                    </div>
                </div>


                <div class="carte-allies">
                    <img class="img_allies" src="image/assaut_légerF.png" alt="">
                    <div>
                        <p>33 kills/s</p>
                        <button id="leger" class="bouton1">9999 Certs</button>
                    </div>
                </div>


                <div class="carte-allies">
                    <img class="img_allies" src="image/assaut_lourdF.png" alt="">
                    <div>
                        <p>59 kills/s</p>
                        <button id="lourd" class="bouton1">17054 Certs</button>
                    </div>
                </div>


                <div class="carte-allies">
                    <img class="img_allies" src="image/xamF.png" alt="">
                    <div>
                        <p>100 kills/s</p>
                        <button id="xam" class="bouton1">100000 Certs</button>
                    </div>
                </div>


            </div>
        </div>

    </main>

</body>

</html>