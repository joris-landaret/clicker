<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Clicker</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

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
                <div class="carte"><img class="img" src="image/médecin.png" alt=""></div>
                <div class="carte"><img class="img" src="image/infiltré.png" alt=""></div>
                <div class="carte"><img class="img" src="image/assaut_lourd.png" alt=""></div>
                <div class="carte"><img id="principal" class="img" src="image/poing.png" alt=""></div> <!-- le clicker vue à la première personne -->
                <div class="carte"><img class="img" src="image/xam.png" alt=""></div>
                <div class="carte"><img class="img" src="image/assaut_léger.png" alt=""></div>
                <div class="carte"><img class="img" src="image/ingénieur.png" alt=""></div>
            </div>
        </div>

        <!-- le shop armes -->
        <div class="shop">

            <h1>Arme</h1>

            <div id="shop_armes">

                <div class="carte_arme">
                    <img class="img_armes" src="image/Cart-5-S_2.png" alt="">
                    <div>
                        <p>+1 kill/s</p>
                        <p>100 Cert</p>
                        <button id="cart" class="bouton1">Acheter</button>
                    </div>
                </div>


                <div class="carte_arme">
                    <img class="img_armes" src="image/Arbaléte-MG-A1_2.png" alt="">
                    <div>
                        <p>+1 kill/s</p>
                        <p>100 Cert</p>
                        <button id="arbalete" class="bouton1">Acheter</button>
                    </div>
                </div>


                <div class="carte_arme">
                    <img class="img_armes" src="image/MG-HBR1-Dragon_2.png" alt="">
                    <div>
                        <p>+1 kill/s</p>
                        <p>100 Cert</p>
                        <button id="dragon" class="bouton1">Acheter</button>
                    </div>
                </div>

                <div class="carte_arme">
                    <img class="img_armes" src="image/M-H1-Vigie_2.png" alt="">
                    <div>
                        <p>+1 kill/s</p>
                        <p>100 Cert</p>
                        <button id="vigie" class="bouton1">Acheter</button>
                    </div>
                </div>


                <div class="carte_arme">
                    <img class="img_armes" src="image/Percuteur-T2_2.png" alt="">
                    <div>
                        <p>+1 kill/s</p>
                        <p>100 Cert</p>
                        <button id="percuteur" class="bouton1">Acheter</button>
                    </div>
                </div>


                <div class="carte_arme">
                    <img class="img_armes" src="image/Pitié-MRC3_2.png" alt="">
                    <div>
                        <p>+1 kill/s</p>
                        <p>100 Cert</p>
                        <button id="pitie" class="bouton1">Acheter</button>
                    </div>
                </div>


            </div>
        </div>

        <!-- shop alliés -->
        <div class="shop">

            <h1>Alliés</h1>

            <div id="shop_allies">

                <div class="carte-allies">
                    <img class="img_allies" src="image/médecin.png" alt="">
                    <div>
                        <p>+1 kill/s</p>
                        <p>100 Cert</p>
                        <button id=" medecin" class="bouton1">Acheter</button>
                    </div>
                </div>

                <div class="carte-allies">
                    <img class="img_allies" src="image/ingénieur.png" alt="">
                    <div>
                        <p>+1 kill/s</p>
                        <p>100 Cert</p>
                        <button id="ingenieur" class="bouton1">Acheter</button>
                    </div>
                </div>



                <div class="carte-allies">
                    <img class="img_allies" src="image/infiltré.png" alt="">
                    <div>
                        <p>+1 kill/s</p>
                        <p>100 Cert</p>
                        <button id="infiltré" class="bouton1">Acheter</button>
                    </div>
                </div>


                <div class="carte-allies">
                    <img class="img_allies" src="image/assaut_léger.png" alt="">
                    <div>
                        <p>+1 kill/s</p>
                        <p>100 Cert</p>
                        <button id="leger" class="bouton1">Acheter</button>
                    </div>
                </div>


                <div class="carte-allies">
                    <img class="img_allies" src="image/assaut_lourd.png" alt="">
                    <div>
                        <p>+1 kill/s</p>
                        <p>100 Cert</p>
                        <button id="lourd" class="bouton1">Acheter</button>
                    </div>
                </div>


                <div class="carte-allies">
                    <img class="img_allies" src="image/xam.png" alt="">
                    <div>
                        <p>+1 kill/s</p>
                        <p>100 Cert</p>
                        <button id="xam" class="bouton1">Acheter</button>
                    </div>
                </div>


            </div>
        </div>

    </main>

</body>

</html>