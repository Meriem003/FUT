<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
    <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
body {
    background-color: hsl(113, 20%, 91%);
    height: 100vh;
    margin: 0;
    background-image: url(./img/téléchargement\ \(26\).jpg);

}
nav {
    background-color: #185B2B;
    color: #fff;
    padding: 10px 20px;
    display: flex;
    align-items: center;
    box-shadow: 0 4px 6px #183220;
}
nav img {
    width: 35px;
    height: 35px;
    border-radius: 50%;
    margin-right: 15px;
}
nav h3 {
    font-size: 24px;
    font-weight: bold;
    color: #d2ead9;
}
.container {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
    gap: 20px;
    width: 100%;
    max-width: 1200px;
    padding-top: 20px ;
    margin: auto;
    border-radius: 10px;
}
.formu {
    max-width: 400px;
    width: 100%;
    height: auto;
    padding-top: 20px;
    border-radius: 10px;
    background-color: #073111b0;
    box-shadow: 0 4px 6px rgba(3, 8, 5, 0.2);
}
.formu h1 {
    font-size: 24px;
    color: #d3e4d8b4;
    margin-bottom: 20px;
    text-align: center;
}
.terrain {
    background-image: url(./img/modif.jpg);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    width: 100%;
    max-width: 85%;
    height: 800px;
    position: relative;
    margin: 0 auto;
    box-shadow: 0 4px 8px 0 rgb(0, 0, 0), 0 6px 20px 0 rgb(0, 0, 0);
}

.GK,
.CBone,
.CBtow,
.lb,
.rb,
.CMone,
.CMtow,
.CMtrois,
.lw,
.RW,
.ST {
    position: absolute;
    transition: transform 0.3s ease;
    filter: drop-shadow(10px 10px 15px rgba(228, 239, 225, 0.3));
    background-image: url(./img/téléchargement__24_-removebg-preview.png);
    background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
    width: 150px;
    height: 190px;
}

.GK{
    left: 240px ;
}

.CBone{
    top: 180px;
    left: 310px;
}
.CBtow{
    top: 180px;
    left: 180px;
}
.lb{
    top: 150px;
    left: 50px;
}
.rb{
    top: 150px;
    left: 440px;
}
.CMone{
    top: 360px;
    left: 250px;
}
.CMtow{
    top: 340px;
    left: 100px;
}
.CMtrois{
    top: 340px;
    left: 400px;
}
.lw {
    top: 530px;
    left: 100px;
}

.RW {
    top: 530px;
    left: 400px;
}

.ST {
    top: 560px;
    left: 250px;
}
.scr h3 {
    font-size: 24px;
    font-weight: bold;
    color: #145423;
    text-align: center; 
    margin-bottom: 20px; 
}
.scr {
    background-color: #84ac8d;
    margin-top: 20px;
    border-radius: 30px;
    box-shadow: 10px 10px 15px rgba(30, 71, 14, 0.3);
    width: 740px;
}

.GK:hover,
.CBone:hover,
.CBtow:hover,
.lb:hover,
.rb:hover,
.CMone:hover,
.CMtow:hover,
.CMtrois:hover,
.lw:hover,
.RW:hover,
.ST:hover {
    transform: scale(1.2);
}

.statiqueJoueur{
    position: absolute;
    display: flex;
    justify-content: center;
    align-items: center;
    top: 118px;
    left: 22px;
    font-size: 10px;
    color: rgb(25, 86, 19);
    gap: 6px;
    background-color: #fdfefe49;
}

.nom{
    position: absolute;
    top: 100px;
    left: 22px;
    color: rgba(2, 33, 7, 0.842);
    background-color: #fdfefe49;
    width: 70%;
    font-size: 13px;
    text-align: center;
}

.position{
    position: absolute;
    top: 25px;
    left: 25px;
    font-size: 15px;
    color: rgb(208, 232, 219);
}
.joueur{
    position: absolute;
    height: 68px;
    left: 30px;
    bottom: 113px;
}
.joueur img{
    width: 90px;
}
    </style>
</head>
<body>
    <nav>
        <img src="./img/Sticker terrain de foot.jpg" alt="">
        <h3>FUT CHAMP</h3>
    </nav>
    <div class="container">
        <div class="formu">
            <h1>les joueurs disponible</h1>
        </div>
        <div class="foot">
            <div class="terrain">
                <div id="GK" class="GK">
                    <div class="joueur">
                        <img>
                    </div>
                    <div class="position">
                        <p class="SumRating"></p>
                        <p>GK</p>
                    </div>
                    <div class="nom">
                        <p class="nomText"></p>
                    </div>
                    <div class="statiqueJoueur">
                        <div class="data">
                            <p>DV</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>HD</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>KC</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>RF</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>SP</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>PS</p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="CBone" id="RCB">
                    <div class="joueur">
                        <img>
                    </div>
                    <div class="position">
                        <p class="SumRating"></p>
                        <p>RCB</p>
                    </div>
                    <div class="nom">
                        <p class="nomText"></p>
                    </div>
                    <div class="statiqueJoueur">
                        <div class="data">
                            <p>PC</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>ST</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>PS</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>DR</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>DF</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>PH</p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="CBtow" id="LCB">
                    <div class="joueur">
                        <img>
                    </div>
                    <div class="position">
                        <p class="SumRating"></p>
                        <p>LCB</p>
                    </div>
                    <div class="nom">
                        <p class="nomText"></p>
                    </div>
                    <div class="statiqueJoueur">
                        <div class="data">
                            <p>PC</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>ST</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>PS</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>DR</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>DF</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>PH</p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="lb" id="LB">
                    <div class="joueur">
                        <img>
                    </div>
                    <div class="position">
                        <p class="SumRating"></p>
                        <p>LB</p>
                    </div>
                    <div class="nom">
                        <p class="nomText"></p>
                    </div>
                    <div class="statiqueJoueur">
                        <div class="data">
                            <p>PC</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>ST</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>PS</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>DR</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>DF</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>PH</p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="rb" id="RB">
                    <div class="joueur">
                        <img>
                    </div>
                    <div class="position">
                        <p class="SumRating"></p>
                        <p>RB</p>
                    </div>
                    <div class="nom">
                        <p class="nomText"></p>
                    </div>
                    <div class="statiqueJoueur">
                            <div class="data">
                                <p>PC</p>
                                <p></p>
                            </div>
                            <div class="data">
                                <p>ST</p>
                                <p></p>
                            </div>
                            <div class="data">
                                <p>PS</p>
                                <p></p>
                            </div>
                            <div class="data">
                                <p>DR</p>
                                <p></p>
                            </div>
                            <div class="data">
                                <p>DF</p>
                                <p></p>
                            </div>
                            <div class="data">
                                <p>PH</p>
                                <p></p>
                            </div>
                    </div>
                </div>
                <div class="CMone" id="CM">
                    <div class="joueur">
                        <img>
                    </div>
                    <div class="position">
                        <p class="SumRating"></p>
                        <p>CM</p>
                    </div>
                    <div class="nom">
                        <p class="nomText"></p>
                    </div>
                    <div class="statiqueJoueur">
                        <div class="data">
                            <p>PC</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>ST</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>PS</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>DR</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>DF</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>PH</p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="CMtow" id="LCM">
                    <div class="joueur">
                        <img>
                    </div>
                    <div class="position">
                        <p class="SumRating"></p>
                        <p>LCM</p>
                    </div>
                    <div class="nom">
                        <p class="nomText"></p>
                    </div>
                    <div class="statiqueJoueur">
                            <div class="data">
                                <p>PC</p>
                                <p></p>
                            </div>
                            <div class="data">
                                <p>ST</p>
                                <p></p>
                            </div>
                            <div class="data">
                                <p>PS</p>
                                <p></p>
                            </div>
                            <div class="data">
                                <p>DR</p>
                                <p></p>
                            </div>
                            <div class="data">
                                <p>DF</p>
                                <p></p>
                            </div>
                            <div class="data">
                                <p>PH</p>
                                <p></p>
                        </div>
                    </div>
                </div>
                <div class="CMtrois" id="RCM">
                    <div class="joueur">
                        <img>
                    </div>
                    <div class="position">
                        <p class="SumRating"></p>
                        <p>RCM</p>
                    </div>
                    <div class="nom">
                        <p class="nomText"></p>
                    </div>
                    <div class="statiqueJoueur">
                        <div class="data">
                            <p>PC</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>ST</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>PS</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>DR</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>DF</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>PH</p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="lw" id="LW">
                    <div class="joueur">
                        <img>
                    </div>
                    <div class="position">
                        <p class="SumRating"></p>
                        <p>LW</p>
                    </div>
                    <div class="nom">
                        <p class="nomText"></p>
                    </div>
                    <div class="statiqueJoueur">
                        <div class="data">
                            <p>PC</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>ST</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>PS</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>DR</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>DF</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>PH</p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="RW" id="Rw">
                    <div class="joueur">
                        <img>
                    </div>
                    <div class="position">
                        <p class="SumRating"></p>
                        <p>RW</p>
                    </div>
                    <div class="nom">
                        <p class="nomText"></p>
                    </div>
                    <div class="statiqueJoueur">
                        <div class="data">
                            <p>PC</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>ST</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>PS</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>DR</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>DF</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>PH</p>
                            <p></p>
                        </div>
                    </div>
                </div>
                <div class="ST" id="ST">
                    <div class="joueur">
                        <img>
                    </div>
                    <div class="position">
                        <p class="SumRating"></p>
                        <p>ST</p>
                    </div>
                    <div class="nom">
                        <p class="nomText"></p>
                    </div>
                    <div class="statiqueJoueur">
                        <div class="data">
                            <p>PC</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>ST</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>PS</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>DR</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>DF</p>
                            <p></p>
                        </div>
                        <div class="data">
                            <p>PH</p>
                            <p></p>
                        </div>
                    </div>
                </div>    
            </div>
                <div class="scr">
            </div>
</div>
    </div>
    <script src="main.js"></script>
</body>
</html>