<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SpaceHistory</title>

    <!-- CSS -->
    <link rel="stylesheet" href="css/uikit.min.css" />
    <link rel="stylesheet" href="style.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Orbitron:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<body>

    <!----------------
        HEADER 
    ------------------>
    <!-- Menu -->
    <div class="uk-position-top">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar uk-sticky>
                <div class="uk-navbar-left">
                    <ul class="uk-navbar-nav">
                        <li class="uk-active"><a href="#">Accueil</a></li>
                        <li><a href="#">Historique</a></li>
                        <li>
                            <a href="#">Les robots</a>
                        </li>
                        <li>
                            <a href="#">Les fusées</a>
                        </li>
                    </ul>
                </div>
        </nav>
        <!-- Banner -->
        <img src="images/light.jpg" alt="">
            <div class="uk-height-large uk-background-cover uk-light uk-flex" uk-parallax="bgy: -200" style="background-image: url('images/banner.jpg');">
                <h1 class="uk-width-1-2@m uk-text-center uk-margin-auto uk-margin-auto-vertical">ExoMars</h1>
                <div class="uk-grid-small uk-child-width-auto" uk-grid uk-countdown="date: 2022-03-18T09:24:06+00:00">
                    <div>
                        <div class="uk-countdown-number uk-countdown-days"></div>
                        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Days</div>
                    </div>
                    <div class="uk-countdown-separator">:</div>
                    <div>
                        <div class="uk-countdown-number uk-countdown-hours"></div>
                        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Hours</div>
                    </div>
                    <div class="uk-countdown-separator">:</div>
                    <div>
                        <div class="uk-countdown-number uk-countdown-minutes"></div>
                        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Minutes</div>
                    </div>
                    <div class="uk-countdown-separator">:</div>
                    <div>
                        <div class="uk-countdown-number uk-countdown-seconds"></div>
                        <div class="uk-countdown-label uk-margin-small uk-text-center uk-visible@s">Seconds</div>
                    </div>
                </div>
            </div>
            
            <!----------------
                HISTORIQUE 
            ------------------>
            <!-- Timeline -->
            <div class="uk-container uk-padding" uk-parallax="bgy: 700" style="background: url('images/planet.png') no-repeat; background-size: 40%; background-position: right">
                <div class="uk-timeline">
                    <div class="uk-timeline-item">
                        <div class="uk-timeline-icon">
                            <span class="uk-badge"><span uk-icon="bolt"></span></span>
                        </div>
                        <div class="uk-timeline-content">
                            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                        <h3 class="uk-card-title"><time datetime="2020-07-08">July 8</time></h3>
                                        <span class="uk-label uk-label-success uk-margin-auto-left">Feature</span>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <p>Fully responsive timeline you can add to your UIkit 3 project</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-timeline-item">
                        <div class="uk-timeline-icon">
                                <span class="uk-badge"><span uk-icon="bolt"></span></span>
                        </div>
                        <div class="uk-timeline-content">
                            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                        <h3 class="uk-card-title"><time datetime="2020-07-07">July 7</time></h3>
                                        <span class="uk-label uk-label-success uk-margin-auto-left">Test</span>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="uk-timeline-item">
                        <div class="uk-timeline-icon">
                            <span class="uk-badge"><span uk-icon="bolt"></span></span>
                        </div>
                        <div class="uk-timeline-content">
                            <div class="uk-card uk-card-default uk-margin-medium-bottom uk-overflow-auto">
                                <div class="uk-card-header">
                                    <div class="uk-grid-small uk-flex-middle" uk-grid>
                                        <h3 class="uk-card-title"><time datetime="2020-07-06">July 6</time></h3>
                                        <span class="uk-label uk-label-success uk-margin-auto-left">Fix</span>
                                    </div>
                                </div>
                                <div class="uk-card-body">
                                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>


    
    <!-- SCRIPTS -->
    <script src="js/uikit.min.js"></script>
    <script src="js/uikit-icons.min.js"></script>
</body>
</html>