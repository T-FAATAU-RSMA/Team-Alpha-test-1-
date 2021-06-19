<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

        <!-- Script -->
        <script src="font_awesome/css/all.css"></script>
        <script src="font_awesome/js/all.js"></script>
        <script src="test/js/main_1.js"></script>
        <script src="test/js/main.js"></script>
        
        <!-- Styles -->
        <style>

            *{
                border: black solid 1px;
            }

            h1,h2{
                font-family: Georgia, 'Times New Roman', Times, serif;
            }

            /* PRESENTATION */
            .presentation{
                background-color: rgb(239, 239, 239);
                border-bottom-right-radius: 10px;
                border-bottom-left-radius: 10px;
                box-shadow: 12px 12px 2px 1px rgb(194, 194, 194);
            }

            .a_notre_sujet{
                margin-top: 4%;
            }

            #btn{
                position: fixed;
                box-shadow: 10px 5px 5px grey;
                background-color: white;
            }

            .btnG{
                color: white;
                background-color: red;
            }

            .btnF{
                color: white;
                background-color: blue;
            }

            .btnI{
                color: white;
                background-color: rgb(255, 51, 217);
            }
            
            .btnY{
                color: white;
                background-color: red;
            }

            .video{
                margin-bottom: 5%;
            }
            /* Video Responsive */

            .contenu{
                /*  */
            }

            .item{
                border-color:solid red 4px;
            }

            @media screen and (max-width: 835px){
                .item{
                    width:600px;
                }
            }

            @media screen and (max-width: 790px){
                .item{
                    width:550px;
                }
            }

            @media screen and (max-width: 740px){
                .item{
                    width:450px;
                }
            }

            @media screen and (max-width: 645px){
                .item{
                    width:370px;
                }
            }

            @media screen and (max-width: 558px){
                .item{
                    width:270px;
                }
            }

            @media screen and (max-width: 460px){
                .item{
                    width:190px;
                }
            }


            /* PRESENTATION */

            .prioritary{
                z-index: 1;
            }

            /* WHO */
            .back-g_who{
                background-color: rgb(252, 252, 252);
            }

            .equipe{
                background-color: white;
                border-bottom-right-radius: 10px;
                border-bottom-left-radius: 10px;
                box-shadow: 12px 12px 2px 1px rgb(194, 194, 194);
            }

            .icone{
                margin-top: 5%;
                margin-bottom: 5%;
            }

            .icone_profils{
                border-radius: 100%;
            }

                /* Conteneur principal */
            .overlay-image {
                position: relative;
                width: 100%;
            }

                /* Image originale */
            .overlay-image .image {
                border-radius: 100%;
                display: block;
                width: 100%;
                height: auto;
            }

                /* Texte original */
            .overlay-image .text {
                color: #fff;
                font-size: 30px;
                line-height: 1.5em;
                text-shadow: 2px 2px 2px #000;
                text-align: center;
                position: absolute;
                top: 50%;
                left: 50%;
                transform: translate(-50%, -50%);
                width: 100%;
            }

                /* Overlay */
            .overlay-image .hover {
                border-radius: 100%;
                position: absolute;
                top: 0;
                height: 100%;
                width: 100%;
                opacity: 0;
                transition: .5s ease;
            }

                /* Apparition overlay sur passage souris */
            .overlay-image:hover .hover {
                opacity: 1;
            }

            .overlay-image .normal {
                transition: .5s ease;
            }

            .overlay-image:hover .normal {
                opacity: 0;
            }

            .overlay-image .hover {
                background-color: rgba(0,0,0,0.5);
            }
            /* WHO */
            
            /* MISSION */
            .missions{
                background-color: rgb(239, 239, 239);
                border-bottom-right-radius: 10px;
                border-bottom-left-radius: 10px;
                box-shadow: 12px 12px 2px 1px rgb(194, 194, 194);
            }

            .text_missions{
                margin-top: 5%;
            }
            /* MISSION */

            /* FOOTER */
            .back-g_footer{
                background-color: rgb(242, 242, 242);
            }

            .copyright_on_footer{
                margin-top: 5%;
                margin-left: 5%;
                margin-bottom: 3%;
            }
            /* FOOTER */


        </style>

    </head>
    <body>

        <!-- CAROUSEL -->
        <div class="row">
            <div class="col-md-">

            </div>
        </div>
        <!-- FIN DE CAROUSEL -->


        <!-- PRESENTATION -->
        <div class="row" style="justify-content: center;" >

            <div class="col-md-5 presentation" align="center">
                <h1>
                    <a href="https://facepolynesie.org/qui-sommes-nous/">
                        Présentation
                    </a>
                </h1>
            </div>

            <div class="row mt-4" style="justify-content: center;">

                <div class="col-md-1">
                    <div type="button">
                        <ul class="prioritary list-group mt-5" id="btn">
                            <a href="https://www.facebook.com/FACE.POLYNESIE"><li class="btnF list-group-item m-1"><i class="fab fa-facebook"></i></li></a>
                            <a href="https://www.instagram.com/facepolynesiefrancaise/"><li class="btnI list-group-item m-1"><i class="fab fa-instagram"></i></li></a>
                            <a href="https://www.youtube.com/user/laFondationFACE"><li class="btnY list-group-item m-1" aria-disabled="true"><i class="fab fa-youtube"></i></li></a>
                        </ul>
                    </div>
                </div>

                <div class="col-md-10" align="center">
                    <img src="img/logo_face.jpeg" alt="logo de face polynésie" width="250" height="250">

                    <h2 class="a_notre_sujet">
                        A notre sujet
                    </h2>

                    <p>
                        Crée en 2016 à l’initiative de chefs d’entreprise de grands groupes Polynésien. <br>
                        Avec l’appui d’un réseau de plus de 50 entreprises de toutes tailles, FACE Polynésie met tout en œuvre pour réduire les inégalités sociales. <br>
                        Elle construit sa politique d’intervention en lien avec les institutions polynésiennes et les entreprises socialement engagées, <br>
                        afin d’agir au plus près des habitants des quartiers prioritaires. <br>
                        FACE coordonne un réseau de clubs d’entreprises locaux, regroupant 59 entreprises, <br>
                        dont l’objet est de participer au développement économique et social de territoires en difficulté
                    </p>
                </div>

                <div class="col-md-1">
                </div>

            </div>

            <div class="row mb-5" style="justify-content: center;">
                <div class="contenu col-md-10 video" align="center">
                    <video controls class="item">
                        <source src="video/creee-en-2016-a-linitiative-de-chefs-dentreprise-de-grands-groupes-polynesi_dvd.mp4" type="video/mp4">
                    </video>
                </div>
            </div>

        </div>
        <!-- PRESENTATION -->


        <!-- QUI SOMMES NOUS? -->
        <div class="row back-g_who" style="justify-content: center;">

            <div class="col-md-5 equipe" align="center">
                <h1>
                    Notre équipe
                </h1>
            </div>

            <div class="row" style="justify-content: center;">
                
                <div class="col-md-3 icone" align="center">
                    <div class="overlay-image">
                        
                        <img class="response image" src="img/icône-noire-solide-d-avatar-de-profil-utilisateur.jpg" alt="photo du directeur de face"/>
                            <div class="hover">
                                <div class="text">
                                    PAUWELS Sylvain <br>
                                    Directeur
                                </div>
                            </div>
                        
                    </div>
                </div>

                <div class="col-md-3 icone" align="center">
                    <div class="overlay-image">
                        <img class="image" src="img/icône-noire-solide-d-avatar-de-profil-utilisateur.jpg" alt="photo du directeur de face"/>
                            <div class="hover">
                                <div class="text">
                                    KOHUEINUI David <br>
                                    Charger de mission en communication
                                </div>
                            </div>
                    </div>
                </div>

                <div class="col-md-3 icone" align="center">
                    <div class="overlay-image">
                        <img class="image" src="img/icône-noire-solide-d-avatar-de-profil-utilisateur.jpg" alt="photo du directeur de face"/>
                            <div class="hover">
                                <div class="text">
                                    CHEE-AYEE Christian <br>
                                    Charger de mission en informatique
                                </div>
                            </div>
                    </div>
                </div>

            </div>



        </div>
        <!-- QUI SOMMES NOUS? -->


        <!-- LES MISSIONS DE FACE -->
        <div class="row" style="justify-content: center;">

            <div class="col-md-5 missions" align="center">
                <h1>
                    <a href="https://facepolynesie.org/portfolio/">
                        Nos missions
                    </a>
                </h1>
            </div>

            <div class="row" style="justify-content: center;">
                <div class="col-md-10" align="center">

                    <P class="text_missions">
                    Né de la prise de conscience des entrepreneurs du Pays du rôle sociétal qui est le leur, <br>
                    FACE Polynésie Française regroupe une cinquantaine d’entreprises engagées en faveur de la <br>
                    lutte contre toutes formes d’exclusions. FACE Polynésie vise à fédérer les moyens des <br>
                    entreprises locales pour accompagner et soutenir les actions portées par le gouvernement de Polynésie, <br>
                    le milieu associatif ou les initiatives individuelles.
                    </P>

                </div>
            </div>

            <div class="row" style="justify-content: center;">
                <div class="col-md-3">
                    <div class="overlay-image">
                        <img class="image" src="img/icône-noire-solide-d-avatar-de-profil-utilisateur.jpg" alt="photo du directeur de face"/>
                            <div class="hover">
                                <div class="text">
                                    Acteurs du territoire
                                </div>
                            </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="overlay-image">
                        <img class="image" src="img/icône-noire-solide-d-avatar-de-profil-utilisateur.jpg" alt="photo du directeur de face"/>
                            <div class="hover">
                                <div class="text">
                                    A l'école
                                </div>
                            </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="overlay-image">
                        <img class="image" src="img/icône-noire-solide-d-avatar-de-profil-utilisateur.jpg" alt="photo du directeur de face"/>
                            <div class="hover">
                                <div class="text">
                                    Au quotidien
                                </div>
                            </div>
                    </div>
                </div>
            </div>

            <div class="row" style="justify-content: center;">
                <div class="col-md-3">
                    <div class="overlay-image">
                        <img class="image" src="img/icône-noire-solide-d-avatar-de-profil-utilisateur.jpg" alt="photo du directeur de face"/>
                            <div class="hover">
                                <div class="text">
                                    Dans l'entreprise
                                </div>
                            </div>
                    </div>
                </div>

                <div class="col-md-3">
                    <div class="overlay-image">
                        <img class="image" src="img/icône-noire-solide-d-avatar-de-profil-utilisateur.jpg" alt="photo du directeur de face"/>
                            <div class="hover">
                                <div class="text">
                                    Pour l'emploi
                                </div>
                            </div>
                    </div>
                </div>
            </div>


        </div>
        <!-- LES MISSIONS DE FACE -->


        <!-- FOOTER -->
        <div class="row back-g_footer">

            <div class="col-md-4 copyright_on_footer">
                © 2021 ASSOCIATION FACE POLYNÉSIE
            </div>

        </div>
        <!-- FOOTER -->
        
    </body>
</html>
