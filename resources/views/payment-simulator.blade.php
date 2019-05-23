<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Payment Cm laravel library</title>


    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>

    <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat");

        html,
        body {
        @import url("https://fonts.googleapis.com/css?family=Montserrat");
            font-family: "Montserrat", sans-serif;
            height: 100%;
            width: 100%;
            color: white;
            background-color: #3b1b8b;
            overflow: hidden;
        }

        html html,
        html body,
        body html,
        body body {
            font-family: "Montserrat", sans-serif;
            height: 100%;
            width: 100%;
            color: white;
            background-color: #3b1b8b;
            overflow: hidden;
        }

        html section,
        body section {
            opacity: 1;
            height: 100%;
            width: 100%;
        }

        html .active section,
        body .active section {
            opacity: 1;
            transition: opacity 0.5s;
        }

        html .btn-cta,
        body .btn-cta {
            border: 5px solid;
            border-radius: 0;
        }

        html .btn-cta__green,
        body .btn-cta__green {
            border-color: #76ff03;
            background-color: transparent;
            color: #76ff03;
        }

        html .btn-cta__gray,
        body .btn-cta__gray {
            border: #ccc;
            background-color: transparent;
            color: #ccc;
        }

        html .slide-wrapper,
        body .slide-wrapper {
            position: relative;
            overflow: hidden;
            height: 90%;
            width: 90%;
            top: 5%;
            bottom: 5%;
            left: 5%;
            right: 5%;
            z-index: 3;
        }

        html h1,
        html h2,
        html h3,
        html h4,
        html h5,
        html h6,
        body h1,
        body h2,
        body h3,
        body h4,
        body h5,
        body h6 {
            color: #fff;
        }

        html .navbar-default .navbar-nav > li > a,
        body .navbar-default .navbar-nav > li > a {
            color: #fff;
        }

        html .cover-wrapper,
        body .cover-wrapper {
            display: table;
            width: 100%;
            height: 100%;
            min-height: 100%;
        }

        html .cover-wrapper__inner,
        body .cover-wrapper__inner {
            display: table-cell;
            vertical-align: middle;
        }

        html .cover-wrapper__container,
        body .cover-wrapper__container {
            margin-right: auto;
            margin-left: auto;
        }

        html section#nav,
        body section#nav {
            height: 50px;
        }

        html #home .slide-wrapper,
        body #home .slide-wrapper {
            background-color: #623ebd;
        }

        html #home-content,
        body #home-content {
            z-index: 5;
        }

        html #box1,
        body #box1 {
            display: block;
            width: 20px;
            height: 20px;
            background-color: red;
        }

        html #portfolio,
        body #portfolio {
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: 1;
            bottom: -100%;
            background: black;
        }

        html #aboutme,
        body #aboutme {
            background: #e9e9e9;
        }

        html .preload,
        body .preload {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            z-index: 1032;
            background-color: #7752d5;
        }

        html .circle,
        body .circle {
            border-radius: 190px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
            position: absolute;
            top: 50%;
            left: 50%;
            opacity: 0;
        }

        html .circle1,
        body .circle1 {
            background-color: #7752d5;
            width: 240px;
            height: 240px;
            margin-top: -120px;
            margin-left: -120px;
        }

        html .circle2,
        body .circle2 {
            background-color: #8362d9;
            width: 170px;
            height: 170px;
            margin-top: -85px;
            margin-left: -85px;
        }

        html .circle3,
        body .circle3 {
            background-color: #9f88d6;
            width: 100px;
            height: 100px;
            margin-top: -50px;
            margin-left: -50px;
        }

        html .spammer-container,
        body .spammer-container {
            display: none;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: green;
        }

        html .spammer-container .spammer__content,
        body .spammer-container .spammer__content {
            position: inherit;
            width: 100%;
            height: 100%;
            display: block;
            animation: spamcolor 0.1s infinite;
            -webkit-animation: spamcolor 0.1s infinite;
        }

        html .smallcircles,
        body .smallcircles {
            position: absolute;
            z-index: -2;
            width: 100%;
            height: 100%;
            animation: infinite-rotation 150s infinite;
        }

        html .small-circle,
        body .small-circle {
            position: inherit;
            display: block;
            width: 250px;
            height: 250px;
            background: #3b1b8b;
            margin-top: -125px;
            margin-left: -125px;
            border-radius: 125px;
            -webkit-animation: smallcircle 0.8s ease-in-out alternate;
            -moz-animation: smallcircle 0.8s ease-in-out alternate;
            animation: smallcircle 0.8s ease-in-out alternate;
        }

        html .small-circle:nth-child(1),
        body .small-circle:nth-child(1) {
            top: 12%;
            left: 24%;
        }

        html .small-circle:nth-child(2),
        body .small-circle:nth-child(2) {
            display: block;
            top: 18%;
            left: 44%;
        }

        html .small-circle:nth-child(3),
        body .small-circle:nth-child(3) {
            display: block;
            top: 78%;
            left: 5%;
        }

        html .small-circle:nth-child(4),
        body .small-circle:nth-child(4) {
            display: block;
            top: 78%;
            left: 56%;
        }

        html .small-circle:nth-child(4),
        body .small-circle:nth-child(4) {
            display: block;
            top: 78%;
            left: 56%;
        }

        html .small-circle:nth-child(5),
        body .small-circle:nth-child(5) {
            display: block;
            top: 38%;
            left: 86%;
        }

        html .small-circle:nth-child(6),
        body .small-circle:nth-child(6) {
            display: block;
            top: 86%;
            left: 96%;
        }

        html .big-circles,
        body .big-circles {
            position: absolute;
            width: 100%;
            height: 100%;
            animation: infinite-rotation 125s infinite;
        }

        html .big-circle,
        body .big-circle {
            position: inherit;
            display: block;
            width: 500px;
            height: 500px;
            background: #1f0a55;
            margin-top: -250px;
            margin-left: -250px;
            border-radius: 250px;
            -webkit-animation: bigcircle 1.6s ease-in-out alternate;
            -moz-animation: bigcircle 1.6s ease-in-out alternatee;
            animation: bigcircle 1.6s ease-in-out alternate;
        }

        html .big-circle:nth-child(1),
        body .big-circle:nth-child(1) {
            top: 12%;
            left: 4%;
        }

        html .big-circle:nth-child(2),
        body .big-circle:nth-child(2) {
            display: block;
            top: 98%;
            left: 84%;
        }

        html .big-circle:nth-child(3),
        body .big-circle:nth-child(3) {
            display: block;
            top: 78%;
            left: 0%;
        }

        html .big-circle:nth-child(4),
        body .big-circle:nth-child(4) {
            display: block;
            top: 78%;
            left: 56%;
        }

        html .big-circle:nth-child(4),
        body .big-circle:nth-child(4) {
            display: block;
            top: 78%;
            left: 56%;
        }

        html .big-circle:nth-child(5),
        body .big-circle:nth-child(5) {
            display: block;
            top: 38%;
            left: 86%;
        }

        html .big-circle:nth-child(6),
        body .big-circle:nth-child(6) {
            display: block;
            top: 86%;
            left: 96%;
        }

        @keyframes spamcolor {
            0% {
                background: red;
            }
            50% {
                background: yellow;
            }
            100% {
                background: red;
            }
        }

        @-webkit-keyframes spamcolor {
            0% {
                background: red;
            }
            50% {
                background: yellow;
            }
            100% {
                background: red;
            }
        }

        @keyframes smallcircle {
            0% {
                -webkit-transform: scale(0);
                -moz-transform: scale(0);
                transform: scale(0);
            }
            100% {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes bigcircle {
            0% {
                -webkit-transform: scale(0);
                -moz-transform: scale(0);
                transform: scale(0);
            }
            50% {
                -webkit-transform: scale(0);
                -moz-transform: scale(0);
                transform: scale(0);
            }
            100% {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes infinite-rotation {
            from {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            to {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

        section {
            opacity: 1;
            height: 100%;
            width: 100%;
        }

        .active section {
            opacity: 1;
            transition: opacity 0.5s;
        }

        .btn-cta {
            border: 5px solid;
            border-radius: 0;
        }

        .btn-cta__green {
            border-color: #76ff03;
            background-color: transparent;
            color: #76ff03;
        }

        .btn-cta__gray {
            border: #ccc;
            background-color: transparent;
            color: #ccc;
        }

        .slide-wrapper {
            position: relative;
            overflow: hidden;
            height: 90%;
            width: 90%;
            top: 5%;
            bottom: 5%;
            left: 5%;
            right: 5%;
            z-index: 3;
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            color: #fff;
        }

        .navbar-default .navbar-nav > li > a {
            color: #fff;
        }

        .cover-wrapper {
            display: table;
            width: 100%;
            height: 100%;
            min-height: 100%;
        }

        .cover-wrapper__inner {
            display: table-cell;
            vertical-align: middle;
        }

        .cover-wrapper__container {
            margin-right: auto;
            margin-left: auto;
        }

        section#nav {
            height: 50px;
        }

        #home .slide-wrapper {
            background-color: #623ebd;
        }

        #home-content {
            z-index: 5;
        }

        #box1 {
            display: block;
            width: 20px;
            height: 20px;
            background-color: red;
        }

        #portfolio {
            width: 100%;
            height: 100%;
            position: absolute;
            z-index: 1;
            bottom: -100%;
            background: black;
        }

        #aboutme {
            background: #e9e9e9;
        }

        .preload {
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            z-index: 1032;
            background-color: #7752d5;
        }

        .circle {
            border-radius: 190px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.4);
            position: absolute;
            top: 50%;
            left: 50%;
            opacity: 0;
        }

        .circle1 {
            background-color: #7752d5;
            width: 240px;
            height: 240px;
            margin-top: -120px;
            margin-left: -120px;
        }

        .circle2 {
            background-color: #8362d9;
            width: 170px;
            height: 170px;
            margin-top: -85px;
            margin-left: -85px;
        }

        .circle3 {
            background-color: #9f88d6;
            width: 100px;
            height: 100px;
            margin-top: -50px;
            margin-left: -50px;
        }

        .spammer-container {
            display: none;
            position: fixed;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
            background-color: green;
        }

        .spammer-container .spammer__content {
            position: inherit;
            width: 100%;
            height: 100%;
            display: block;
            animation: spamcolor 0.1s infinite;
            -webkit-animation: spamcolor 0.1s infinite;
        }

        .smallcircles {
            position: absolute;
            z-index: -2;
            width: 100%;
            height: 100%;
            animation: infinite-rotation 150s infinite;
        }

        .small-circle {
            position: inherit;
            display: block;
            width: 250px;
            height: 250px;
            background: #3b1b8b;
            margin-top: -125px;
            margin-left: -125px;
            border-radius: 125px;
            -webkit-animation: smallcircle 0.8s ease-in-out alternate;
            -moz-animation: smallcircle 0.8s ease-in-out alternate;
            animation: smallcircle 0.8s ease-in-out alternate;
        }

        .small-circle:nth-child(1) {
            top: 12%;
            left: 24%;
        }

        .small-circle:nth-child(2) {
            display: block;
            top: 18%;
            left: 44%;
        }

        .small-circle:nth-child(3) {
            display: block;
            top: 78%;
            left: 5%;
        }

        .small-circle:nth-child(4) {
            display: block;
            top: 78%;
            left: 56%;
        }

        .small-circle:nth-child(4) {
            display: block;
            top: 78%;
            left: 56%;
        }

        .small-circle:nth-child(5) {
            display: block;
            top: 38%;
            left: 86%;
        }

        .small-circle:nth-child(6) {
            display: block;
            top: 86%;
            left: 96%;
        }

        .big-circles {
            position: absolute;
            width: 100%;
            height: 100%;
            animation: infinite-rotation 125s infinite;
        }

        .big-circle {
            position: inherit;
            display: block;
            width: 500px;
            height: 500px;
            background: #1f0a55;
            margin-top: -250px;
            margin-left: -250px;
            border-radius: 250px;
            -webkit-animation: bigcircle 1.6s ease-in-out alternate;
            -moz-animation: bigcircle 1.6s ease-in-out alternatee;
            animation: bigcircle 1.6s ease-in-out alternate;
        }

        .big-circle:nth-child(1) {
            top: 12%;
            left: 4%;
        }

        .big-circle:nth-child(2) {
            display: block;
            top: 98%;
            left: 84%;
        }

        .big-circle:nth-child(3) {
            display: block;
            top: 78%;
            left: 0%;
        }

        .big-circle:nth-child(4) {
            display: block;
            top: 78%;
            left: 56%;
        }

        .big-circle:nth-child(4) {
            display: block;
            top: 78%;
            left: 56%;
        }

        .big-circle:nth-child(5) {
            display: block;
            top: 38%;
            left: 86%;
        }

        .big-circle:nth-child(6) {
            display: block;
            top: 86%;
            left: 96%;
        }

        @keyframes spamcolor {
            0% {
                background: red;
            }
            50% {
                background: yellow;
            }
            100% {
                background: red;
            }
        }

        @-webkit-keyframes spamcolor {
            0% {
                background: red;
            }
            50% {
                background: yellow;
            }
            100% {
                background: red;
            }
        }

        @keyframes smallcircle {
            0% {
                -webkit-transform: scale(0);
                -moz-transform: scale(0);
                transform: scale(0);
            }
            100% {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes bigcircle {
            0% {
                -webkit-transform: scale(0);
                -moz-transform: scale(0);
                transform: scale(0);
            }
            50% {
                -webkit-transform: scale(0);
                -moz-transform: scale(0);
                transform: scale(0);
            }
            100% {
                -webkit-transform: scale(1);
                -moz-transform: scale(1);
                transform: scale(1);
            }
        }

        @keyframes infinite-rotation {
            from {
                -webkit-transform: rotate(0deg);
                -moz-transform: rotate(0deg);
                transform: rotate(0deg);
            }
            to {
                -webkit-transform: rotate(360deg);
                -moz-transform: rotate(360deg);
                transform: rotate(360deg);
            }
        }

    </style>


</head>

<body>


<!-- Sandbox just for fun-->
<div class="big-circles">
    <div class="big-circle"></div>
    <div class="big-circle"></div>
    <div class="big-circle"></div>
</div>
<section id="home">
    <div class="slide-wrapper">
        <div class="smallcircles">
            <div class="small-circle"></div>
            <div class="small-circle"></div>
            <div class="small-circle"></div>
            <div class="small-circle"></div>
            <div class="small-circle"></div>
            <div class="small-circle"></div>
        </div>
        <div class="cover-wrapper text-center" id="home-content">
            <div class="cover-wrapper__inner">
                <div class="cover-wrapper__container">
                    <h1>Veillez patienter s'il vous plaît</h1>
                    <p>
                        <button class="btn btn-cta btn-cta__green text-uppercase trigger" data-toggle="closed">
                            Initialisation du processus
                        </button>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <section class="portfolio-wrapper" id="portfolio">
        <div class="cover-wrapper text-center" id="home">
            <div class="cover-wrapper__inner">
                <div class="cover-wrapper__container">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <h1 class="test-uppercase">On y est presque</h1>
                                <p>
                                    <button class="btn btn-cta btn-cta__green text-uppercase trigger"
                                            data-toggle="opened">Plus q'un instant
                                    </button>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</section>
<form action="{{config('dohone.debug')?config('dohone.sandbox'):config('dohone.url')}}" method="POST" id="form" hidden>
    <input type="hidden" name="cmd" value="start"> <!--
Cette Valeur est à ne pas changer et elle est Obligatoire -->
    <input type="hidden" name="rN" value="{{$data['rN']}}"> <!-- le
nom de votre client qui effectue le paiement. c'est facultatif. -->
    <input type="hidden" name="rT" value="{{$data['rT']}}">
    <!-- Numéro Téléphone du client qui effectue le paiement (Obligatoire) -->
    <input type="hidden" name="rE" value="{{$data['rE']}}">
    <!-- Adresse email du client qui effectue le paiement. c'est facultatif. -->
    <input type="hidden" name="rH" value="{{$data['rH']}}">
    <!-- Votre Code-marchand que vous avez reçu par mail (Obligatoire) -->
    <input type="hidden" name="rI" value="{{$data['rI']}}"> <!-- Le
numéro de votre commande. Si votre système ne gère pas de numéro de commande, vous pouvez enlevez ce champs.
c'est facultatif. Mais si vous fournissez le numéro de commande, il doit être unique. Les doublons sont éjectés
du côté de DOHONE. -->
    <input type="hidden" name="rMt" value="{{$data['rMt']}}"> <!--
Montant TOTAL des achats (Obligatoire). C’est le montant qui devra être payé par votre client. Par défaut la
dévise de ce montant est l'euro, Sauf si vous précisez une autre devise sous le paramètre 'rDvs' ci-après. -->
    <input type="hidden" name="rDvs" value="{{$data['rDvs']}}"> <!-- La
devise correspondante au montant que vous avez donné. Ce paramètre est facultatif. Dans le cas où vous ne
précisez pas ce paramètre, la devise est EUR. Vous avez le choix entre 3 devises uniquement : EUR, XAF, USD -->
    <input type="hidden" name="rOnly" value="{{$data['rOnly']}}">
    <!-- Ceci est optionnel. Si vous souhaitez que votre API n’affiche que certains opérateurs, vous pouvez
    préciser ces opérateurs ici. 1=MTN, 2=Orange, 3=Express Union, 5=Visa via UBA, 10=Dohone, 14= Visa via Wari,
    15=Wari card,16=VISA/MASTERCARD, 17=YUP. -->
    <input type="hidden" name="rLocale" value="{{$data['rLocale']}}">
    <!-- le choix de la langue. fr ou en -->
    <input type="hidden" name="source" value="{{$data['source']}}">
    <!-- Le nom commercial de votre site (Obligatoire) -->
    <input type="hidden" name="endPage" value="{{$data['endPage']}}">
    <!-- Adresse de redirection en cas de SUCCESS de paiement (Obligatoire) -->
    <input type="hidden" name="notifyPage" value="{{$data['notifyPage']}}">
    <!-- Adresse de notification automatique de votre site en cas de succès de paiement -->
    <input type="hidden" name="cancelPage" value="{{$data['cancelPage']}}">
    <!-- Adresse de redirection en cas de Annulation de paiement par le client -->
    <input type="hidden" name="logo" value="{{$data['logo']}}">
    <!--une adresse url menant au logo de votre site si vous voulez voir apparaitre ce logo pendant le
    paiement (Facultatif) -->
    <input type="hidden" name="motif" value="{{$data['motif']}}">
    <!-- le motif est facultatif. Si il est précisé, il sera inscrit dans votre historique DOHONE version
    excel. Ceci peut être important pour votre comptabilité. -->
    <input type="submit" value="Valider">
</form>


<script>
    var $loader = document.querySelector('.loader');

    window.onload = function () {
        window.setTimeout(function () {
            document.getElementById('form').submit();
        }, 2000)
    };

    /**
     * ITEManimate object is used to animate ease with bezier functions
     * example: TweenMax.to($('selector'), 1.5, {left:"80%", ease: ITEManimate.bezier(0.04,0.86,0.8,1)});
     *
     * Used: https://github.com/rdallasgray/bez
     Forked from: https://codepen.io/karlovidek/pen/qOxYjp
     */
    var ITEManimate = ({
        start: 0,
        bezier: function (p0, p1, p2, p3) {
            return ITEManimate.polyBez([p0, p1], [p2, p3]);

        },
        polyBez: function (p1, p2) {
            var A = [null, null],
                B = [null, null],
                C = [null, null],
                bezCoOrd = function (t, ax) {
                    C[ax] = 3 * p1[ax], B[ax] = 3 * (p2[ax] - p1[ax]) - C[ax], A[ax] = 1 - C[ax] - B[ax];
                    return t * (C[ax] + t * (B[ax] + t * A[ax]));
                },
                xDeriv = function (t) {
                    return C[0] + t * (2 * B[0] + 3 * A[0] * t);
                },
                xForT = function (t) {
                    var x = t,
                        i = 0,
                        z;
                    while (++i < 14) {
                        z = bezCoOrd(x, 0) - t;
                        if (Math.abs(z) < 1e-3) break;
                        x -= z / xDeriv(x);
                    }
                    return x;
                };
            return function (t) {
                return bezCoOrd(xForT(t), 1);
            }
        }
    });


    //CUSTOM JS CODE
    (function ($) {
        'use strict';

        //VIEWPORT
        var w = $(window);

        //ANIMATION
        var animationTrigger = $('.trigger');
        var sceneContainer = $('.slide-wrapper');
        var smallCircles = $('.small-circle');
        var portfolioContainer = $('.portfolio-wrapper');

        var main = {

            init: function () {
                var self = this;
                //GSAP ANIMATE
                main.animate();
            },

            //GSAP ANIMATION
            animate: function () {

                //OPEN
                function openAnimation() {
                    TweenMax.to(sceneContainer, 0.8, {
                        height: "100%",
                        ease: ITEManimate.bezier(0.930, 0.035, 0.350, 0.815),
                        top: "0%",
                        ease: ITEManimate.bezier(0.930, 0.035, 0.350, 0.815),
                        width: "100%",
                        ease: ITEManimate.bezier(0.930, 0.035, 0.350, 0.815),
                        left: "0%",
                        ease: ITEManimate.bezier(0.930, 0.035, 0.350, 0.815),

                        onComplete: function () {
                            console.log(sceneContainer);
                            TweenMax.to(portfolioContainer, 1.8, {
                                width: "100%",
                                ease: ITEManimate.bezier(0.930, 0.035, 0.350, 0.815),
                                top: "30%",
                                ease: ITEManimate.bezier(0.930, 0.035, 0.350, 0.815)
                            });
                            TweenMax.to(sceneContainer, 0.8, {
                                top: "-70%",
                                ease: ITEManimate.bezier(0.930, 0.035, 0.350, 0.815),
                            })
                        }
                    });

                    TweenMax.to(smallCircles, 0.4, {
                        scale: "0",
                        ease: ITEManimate.bezier(0.930, 0.035, 0.350, 0.815),

                    });

                }

                //CLOSE
                function closeAnimation() {
                    TweenMax.to(portfolioContainer, 1.2, {
                        top: "100%",
                        ease: ITEManimate.bezier(0.815, 0.035, 0.350, 0.930),
                        width: "100%",
                        ease: ITEManimate.bezier(0.815, 0.035, 0.350, 0.930),

                        onComplete: function () {
                            TweenMax.to(sceneContainer, 0.8, {
                                height: "90%",
                                ease: ITEManimate.bezier(0.815, 0.035, 0.350, 0.930),
                                top: "5%",
                                ease: ITEManimate.bezier(0.815, 0.035, 0.350, 0.930),
                                width: "90%",
                                ease: ITEManimate.bezier(0.815, 0.035, 0.350, 0.930),
                                left: "5%",
                                ease: ITEManimate.bezier(0.815, 0.035, 0.350, 0.930),
                                onComplete: function () {
                                    TweenMax.to(smallCircles, 0.4, {
                                        scale: "1",
                                        ease: ITEManimate.bezier(0.815, 0.035, 0.350, 0.930),

                                    });

                                }

                            });
                        }

                    })

                }

                animationTrigger.click(function () {
                    if ($(this).attr('data-toggle') == 'closed') {
                        $(this).attr('data-toggle', 'opened');
                        openAnimation();
                    } else if ($(this).attr('data-toggle', 'opened')) {
                        $(this).attr('data-toggle', 'closed');
                        closeAnimation();
                    }
                });
            }
        };

        $(window).resize(function () {
        });
        return main.init();
    }($));
</script>


</body>

</html>