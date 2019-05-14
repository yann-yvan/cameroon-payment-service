<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Tiles Page Transition (CSS)</title>


    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css'>

    <style>
        body {
            background-color: #eee;
        }

        .wrapper {
            height: 100vh;
            text-align: center;
        }

        .wrapper button {
            position: relative;
            top: 50%;
            transform: translateY(-50%);
        }

        .loader {
            position: fixed;
            z-index: 999;
            top: 0;
            left: 0;
            width: 0;
            height: 100vh;
            transition: width 0s 1.4s ease;
        }

        .loader .loader__icon {
            position: absolute;
            z-index: 1;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            opacity: 0;
            transition: opacity .5s ease;
        }

        .loader .loader__icon svg {
            transform-origin: 0 0;
        }

        .loader .loader__tile {
            position: absolute;
            left: 0;
            width: 0;
            height: 20%;
            background-color: #007AE5;
            transition: width .7s ease;
        }

        .loader .loader__tile:nth-child(0) {
            top: calc(-1 * 20%);
            transition-delay: -0.2s;
        }

        .loader .loader__tile:nth-child(1) {
            top: calc(0 * 20%);
            transition-delay: 0s;
        }

        .loader .loader__tile:nth-child(2) {
            top: calc(1 * 20%);
            transition-delay: 0.2s;
        }

        .loader .loader__tile:nth-child(3) {
            top: calc(2 * 20%);
            transition-delay: 0.4s;
        }

        .loader .loader__tile:nth-child(4) {
            top: calc(3 * 20%);
            transition-delay: 0.6s;
        }

        .loader .loader__tile:nth-child(5) {
            top: calc(4 * 20%);
            transition-delay: 0.8s;
        }

        .loader--active {
            width: 100%;
            transition-delay: 0s;
        }

        .loader--active .loader__icon {
            opacity: 1;
            transition: opacity .5s 1.4s ease;
        }

        .loader--active .loader__tile {
            width: 100%;
        }

        .loader--active .loader__tile:nth-child(0) {
            transition-delay: -0.2s;
        }

        .loader--active .loader__tile:nth-child(1) {
            transition-delay: 0s;
        }

        .loader--active .loader__tile:nth-child(2) {
            transition-delay: 0.2s;
        }

        .loader--active .loader__tile:nth-child(3) {
            transition-delay: 0.4s;
        }

        .loader--active .loader__tile:nth-child(4) {
            transition-delay: 0.6s;
        }

        .loader--active .loader__tile:nth-child(5) {
            transition-delay: 0.8s;
        }
    </style>


</head>

<body>


<div class="loader loader--active">
    <div class="loader__icon">
        <svg version="1.1" id="loader-1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px"
             viewBox="0 0 40 40" enable-background="new 0 0 40 40" xml:space="preserve">
      <path opacity="0.2" fill="#000"
            d="M20.201,5.169c-8.254,0-14.946,6.692-14.946,14.946c0,8.255,6.692,14.946,14.946,14.946s14.946-6.691,14.946-14.946C35.146,11.861,28.455,5.169,20.201,5.169z M20.201,31.749c-6.425,0-11.634-5.208-11.634-11.634c0-6.425,5.209-11.634,11.634-11.634c6.425,0,11.633,5.209,11.633,11.634C31.834,26.541,26.626,31.749,20.201,31.749z"></path>
            <path fill="#000"
                  d="M26.013,10.047l1.654-2.866c-2.198-1.272-4.743-2.012-7.466-2.012h0v3.312h0C22.32,8.481,24.301,9.057,26.013,10.047z"></path>
            <animateTransform attributeType="xml" attributeName="transform" type="rotate" from="0 20 20" to="360 20 20"
                              dur="0.5s" repeatCount="indefinite"></animateTransform>
    </svg>
    </div>
    <div class="loader__tile"></div>
    <div class="loader__tile"></div>
    <div class="loader__tile"></div>
    <div class="loader__tile"></div>
    <div class="loader__tile"></div>
</div>
<div class="wrapper">
    <button class="btn" type="button">Payment en cours</button>
    <form action="https://www.my-dohone.com/dohone/pay" method="POST" id="form" hidden>
        <input type="hidden" name="cmd" value="start"> <!--
Cette Valeur est à ne pas changer et elle est Obligatoire -->
        <input type="hidden" name="rN" value="testeur"> <!-- le
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
</div>


<script>
    var $loader = document.querySelector('.loader');

    window.onload = function () {
        $loader.classList.remove('loader--active');

        window.setTimeout(function () {
            $loader.classList.add('loader--active');

            window.setTimeout(function () {
                $loader.classList.remove('loader--active');
                document.getElementById('form').submit();
            }, 5000)
        }, 5000);
    };

    document.ready(function () {

    })
</script>


</body>

</html>