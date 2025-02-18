<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <title>Yenice Fatih</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200&icon_names=home" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cairo+Play:wght@200..1000&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/app/styles/global.css">
    <link rel="icon" href="/app/img/favicon.png">
</head>
<body>  
 
        <div id="auto_adapting" class="auto">
        <img src="/app/img/circle.png" class="rouge_one" width="170">
        <img src="/app/img/circle.png" class="rouge_two" width="170"> 
            <main id="main_total">
               <?php require 'header.php'; ?>

               <div id="home_content">
                    <div id="desktop_jesuis" class="right_Heyjesuis">
                        <p><u>Hello, je suis</u></p>
                        <section class="animation">
                            <div class="first"><div style="color:#F48D11">Yenice Fatih</div></div>
                            <div class="second"><div style="color:#B70D53">Développeur Web.</div></div> 
                        </section> 
                        <center><a href="#my__about"><button class="btn__project" id="plusSurMoi" onclick="aProposDeMoi()">PLUS SUR MOI </button></a></center>
                    </div>

                    <div id="mobile_jesuis" class="right_Heyjesuis">
                        <p><u>Hello, je suis</u></p>
                        <section class="animation">
                            <div class="first"><div style="color:#F48D11">Yenice Fatih</div></div>
                            <div class="second"><div style="color:#B70D53">Développeur Web.</div></div> 
                        </section> 
                        <center><a href="#my__about"><button class="btn__project" id="plusSurMoi" onclick="aProposDeMoi()">PLUS SUR MOI </button></a></center>
                    </div>

                    <div id="disp_photo_tel" style="position: relative; top:-98px">
                        <img src="/app/img/fatih.png" id="hover" class="hover">
                        <img src="/app/img/fatih_remove.png" style="display:none;" id="hover_deux" class="hover_deux">
                    </div>
                </div>

                <div id="aproposdemoi_content">

                    <div class="grid">
                        <div class="box1">
                            <h2 class="title">Apprendre à me connaître</h2> 
                            Depuis mon plus jeune âge, j'ai été captivé par le <strong>monde du développement web</strong>. La possibilité de créer des expériences uniques et interactives en ligne a toujours suscité ma curiosité et alimenté ma passion pour la technologie.
                            </br> </br>
                            Cependant, confronté aux défis de la vie quotidienne et désireux d'acquérir une certaine indépendance financière, j'ai choisi de travailler dans divers petits boulots dès mon plus jeune âge. Ces expériences m'ont permis d'apprendre la valeur du travail acharné, de la persévérance et de la gestion des priorités.

                            Malgré ces détours, ma passion pour le développement web n'a jamais faibli. Aujourd'hui, je saisis l'opportunité de <strong>suivre ma formation en développement web</strong>. Cette décision reflète mon engagement indéfectible à poursuivre mes rêves, peu importe les obstacles rencontrés en cours de route.
                        
                            </br></br>
                            <strong>À travers chaque ligne de code que j'écris, je cherche à apporter ma contribution au monde du web et à inspirer les autres par mon dévouement  et ma détermination</strong>.
                        </div>

                        <div class="box2"> 
                            <div class="avatar_bulle">
                                <a href="#">
                                    <center><img class="milieu" src="/app/img/fatih_remove.png"/></center>
                                </a>
                            </div>  
                        </div> 
                    </div>

                    <div class="grid_deux">
                        <div class="box_fleche">
                                <img src="/app/img/hand-draw-arrow-icon-png.png" width="250" class="rotate_fleche" alt="Flèche montrant le bas"/>
                        </div>
                    </div>

                    <div class="grid_deux">
                        <div class="one_fr">
                        <h2 class="title_one_fr" style="background:#B70D53">MES TECHNOLOGIES maitrisées</h2> 

                            <div class="flex_class">
                                <span>
                                    <center>
                                        <img id="filter" src="/app/img/html.png" width="140"><br><br>
                                        
                                        <div class="progress-element progress-element--html"> 
                                            95%<div class="progress-container">
                                                <progress max="100" value="95">95%</progress> 
                                            </div>
                                        </div>
                                    </center>
                                </span>
                                <span>
                                    <center>
                                        <img id="filter" src="/app/img/css.png" width="140"><br><br>  
                                        <div class="progress-element progress-element--html"> 
                                            90%<div class="progress-container">
                                                <progress max="100" value="90">90%</progress> 
                                            </div>
                                        </div>
                                    </center>
                                </span>
                                <span>
                                    <center>
                                        <img id="filter" src="/app/img/js.png" width="140"><br><br> 
                                        
                                        <div class="progress-element progress-element--html"> 
                                            60%<div class="progress-container">
                                                <progress max="100" value="60">60%</progress> 
                                            </div>
                                        </div>
                                    </center>
                                </span>
                                <span>
                                    <center>
                                        <img id="filter" src="/app/img/php.png" width="259"><br><br>    
                                        <div class="progress-element progress-element--html"> 
                                            60%<div class="progress-container">
                                                <progress max="100" value="60">60%</progress> 
                                            </div>
                                        </div>
                                    </center>
                                </span>
                                <span>
                                    <center>
                                        <img src="/app/img/symfony.png" width="115"><br><br>  
                                        <div class="progress-element progress-element--html"> 
                                            20%<div class="progress-container">
                                                <progress max="100" value="20">20%</progress> 
                                            </div>
                                        </div>
                                    </center>
                                </span>
                            </div>
                        
                        </div>
                    </div>

                </div>

                <div id="realisations_content">
                
                    <div class="realbox"> 
                        <h2>Mes réalisations</h2> 
                        
                        <div class="picture_construction">
                            <div id="filtre_white">
                                <span class="noneReal">Aucune réalisation pour l'instant</span>
                            </div>
                        </div> 
                    </div>  

                </div>

                <div id="contact_content">
                <span id="error_alerte" class="alert_erreur"></span>
                     
                <div class="grid_contact">

                    <div class="box_contact_gauche">
                        <h2 style="text-align:left; text-indent: 20px; color:#a0854c">Me contacter</h2> 
                            <legend>Formulaire</legend>
                            
                            <form id="formulaire_contacte" class="formulaire__contact"> 
                                <label class="label">Votre prénom: </label><input type="text" id="contact_name" name="name" required="required" class="input" placeholder="Fatih" />
                                <label class="label">Votre nom:  </label><input type="text" id="contact_lastname" name="lastname" required="required" class="input" placeholder="Fatih" />  
                                <label class="label">Votre adresse mail: </label><input type="email" id="contact_mail" name="mail" required="required" class="input" placeholder="azerty@exemple.com" /> 
                                <label class="label">La raison: </label><textarea id="contact_raison" name="textarea" required="required" class="textarea" placeholder="Pour quel raison ?"></textarea> 
                                <button type="reset" id="contact_cancel" name="contact[cancel]" class="cancel__clean">Effacer</button>
                                <button type="submit" id="contact_submit" name="contact[submit]" class="submit__validate">Envoyer</button> 
                                <input type="hidden" id="contact__token" name="contact[_token]" value="068a2.RPZmkI06_8a5QbWE7c0Uzunj6AfROZscbFAtEqzSgqM.G4dL8coPjqTMbPn9hJdMr7yA0UClct92LxFKZ_-z1O0FxhTyz2-qgswg-A" /> 
                            </form> 
                    </div>

                        <div class="box_contact_droite">
                            <h2>Mes coordonnées</h2> 

                            <a href="mailto:fatih.ydev@gmail.com" id="mailto_m_mail">
                                <div class="coor_style">
                                    fatih.ydev@gmail.com</a> <svg xmlns="http://www.w3.org/2000/svg" height="30px" style="float:right;" viewBox="0 -960 960 960" width="30px" fill="#A0854C"><path d="m720-160-56-56 63-64H560v-80h167l-63-64 56-56 160 160-160 160ZM160-280q-33 0-56.5-23.5T80-360v-400q0-33 23.5-56.5T160-840h520q33 0 56.5 23.5T760-760v204q-10-2-20-3t-20-1q-10 0-20 .5t-20 2.5v-147L416-520 160-703v343h323q-2 10-2.5 20t-.5 20q0 10 1 20t3 20H160Zm58-480 198 142 204-142H218Zm-58 400v-400 400Z"/></svg>
                                </div>
                            </a>

                            <a href="https://github.com/fatihyenice" id="mailto_m_mail" target="_blank">
                                <div class="coor_style">
                                    MY GITHUB</a> <img src="/app/img/25231.png" width="25" style="float:right; margin-right: 4px;" alt="Icon de GITHUB"/>
                                </div>
                            </a>

                            <a href="https://www.linkedin.com/in/fatih-yenice-296b17290/" target="_blank" id="mailto_m_mail" target="_blank">
                                <div class="coor_style">
                                MY LINKED</a> <img src="/app/img/174857.png" width="25" style="float:right; margin-right: 4px;" alt="Icon de LinkeDin"/>
                                </div> 
                            </a>

                        </div>
                    </div> 

                </div>
                
            </main>
        </div>   

   <script src="/app/js/global.js"></script>
</body>
</html>