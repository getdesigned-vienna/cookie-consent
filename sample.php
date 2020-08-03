<html>
<head>
    <style>
        .gdcc-hide {
            display: none;
        }
    </style>
<!--    <link rel="stylesheet" type="text/css" href="main.css"/>-->
    <link class="gdcc-optin-extfonts" rel="stylesheet" type="text/css" data-gdcc-href="alternate.css"/>
<!--    <link rel="preload" type="text/css" href="myStyle.css"/>-->
<!--    <link rel="preload" href="styles.css" as="style" onload="this.onload=null;this.rel='stylesheet'">-->
</head>
<body>
<div id="gd-cookie-consent" data-gdcc-msg='Um diesen Inhalt anzuzeigen müssen Sie die Cookie Kategorie "@cookie@" aktivieren. Fortsetzen?'>
    <noscript>Leider unterstützt Ihr Browser kein Javascript oder Sie haben Javascript deaktiviert.</noscript>
    <form>
        <fieldset>
            <legend>Funktional</legend>
            <input type="checkbox" id="session" checked disabled/>
            <label for="session">Session Cookie</label>
            <input type="checkbox" id="consent" checked disabled/>
            <label for="consent">Cookie Consent</label>
            <input type="checkbox" id="extfonts"/>
            <label for="extfonts">External Fonts</label>
        </fieldset>
        <fieldset id="marketing">
            <legend>Marketing</legend>
            <input type="checkbox" id="facebook"/>
            <label for="facebook">Facebook</label>
            <input type="checkbox" id="googleanalytics"/>
            <label for="googleanalytics">Google Analytics</label>
        </fieldset>
        <fieldset>
            <legend>Social Media</legend>
            <input type="checkbox" id="bild" data-gdcc-msgx="Input Message @cookie@"/>
            <label for="bild" data-gdcc-msgx="Label Message @cookie@">Bild</label>
            <input type="checkbox" id="youtube"/>
            <label for="youtube">YouTube</label>
            <input type="checkbox" id="twitter"/>
            <label for="twitter">Twitter</label>
        </fieldset>
        <input type="submit" value="Auswahl speichern"/>
        <input type="submit" data-gdcc-select="marketing, bild,,  twitter" value="Marketing + Bild"/>
        <input type="submit" data-gdcc-select="*" value="Alle"/>
        <input type="submit" data-gdcc-select="-" value="Minimum"/>
    </form>
</div>
<div>
    <img class="gdcc-optin gdcc-hide" data-gdcc-cookie="bild" data-gdcc-src="https://placekitten.com/g/200/300"/>
    <div class="gdcc-optout" data-gdcc-cookie="bild"><h2 style="background-color: forestgreen">Bild Ersatz</h2></div>
</div>
<div>
    <iframe class="gdcc-optin-youtube gdcc-hide" width="1280" height="720"
            data-gdcc-src="https://www.youtube.com/embed/ePkGwBTkUXs" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="gdcc-optout-youtube"><h2 style="background-color: forestgreen">YouTube Ersatz</h2></div>
</div>


<script src="/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
<script type="text/javascript" src="/getdesigned-cookie-consent.js?<?= time() ?>"></script>
<script data-gdcc-selector="gdcc-optin-googleanalytics" data-gdcc-src="googleanalytics.js" type="text/plain"></script>
</body>
</html>