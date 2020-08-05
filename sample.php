<html>
<head>
    <style>
        .gdcc-hide {
            display: none;
        }
    </style>
<!--    <link rel="stylesheet" type="text/css" href="main.css"/>-->
    <link data-gdcc-href="alternate.css" class="gdcc-optin-extfonts" rel="stylesheet" type="text/css" />
<!--    <link rel="preload" type="text/css" href="myStyle.css"/>-->
<!--    <link rel="preload" href="styles.css" as="style" onload="this.onload=null;this.rel='stylesheet'">-->
</head>
<body>
<div id="gd-cookie-consent" data-gdcc-msg='You must accept cookies in the category "@cookie@" to show this content. Proceed?'>
    <noscript>Leider unterstützt Ihr Browser kein Javascript oder Sie haben Javascript deaktiviert.</noscript>
    <form>
        <fieldset>
            <legend>Functional</legend>
            <input type="checkbox" id="session" checked disabled/>
            <label for="session">Session Cookie</label>
            <input type="checkbox" id="consent" checked disabled/>
            <label for="consent">Cookie Consent</label>
        </fieldset>
        <fieldset id="social-media">
            <legend>Social Media</legend>
            <input type="checkbox" id="youtube"/>
            <label for="youtube">YouTube</label>
            <input type="checkbox" id="twitter"/>
            <label for="twitter">Twitter</label>
        </fieldset>
        <fieldset id="marketing">
            <legend>Marketing</legend>
            <input type="checkbox" id="facebook"/>
            <label for="facebook">Facebook</label>
            <input type="checkbox" id="googleanalytics"/>
            <label for="googleanalytics">Google Analytics</label>
        </fieldset>
        <fieldset>
            <legend>Other ...</legend>
            <input type="checkbox" id="image" data-gdcc-msg='Enable cookie category "@cookie@"?' />
            <label for="image" data-gdcc-msg='Enable cookie category "@cookie@"?'>Images</label>
            <input type="checkbox" id="extfonts"/>
            <label for="extfonts">External Fonts</label>
        </fieldset>
        <input type="submit" value="Save consent"/>
        <input type="submit" data-gdcc-select="marketing, image, twitter" value="Marketing + Image"/>
        <a href="#" class="gdcc-save-consent" data-gdcc-select="*">Allow all</a>
        <input type="submit" data-gdcc-select="-" value="Go minimum"/>
    </form>
</div>
<div>
    <img class="gdcc-optin-image" data-gdcc-src="https://placekitten.com/g/300/200"/>
    <div class="gdcc-optout-image"><h2 style="background-color: forestgreen">Image Replacement #1</h2></div>
</div>
<div>
    <img class="gdcc-optin gdcc-hide" data-gdcc-cookie="image" data-gdcc-src="https://placekitten.com/g/200/300"/>
    <div class="gdcc-optout" data-gdcc-cookie="image"><h2 style="background-color: forestgreen">Image Replacement #2</h2></div>
</div>
<div>
    <iframe class="gdcc-optin-youtube gdcc-hide" width="1280" height="720"
            data-gdcc-src="https://www.youtube.com/embed/ePkGwBTkUXs" frameborder="0"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    <div class="gdcc-optout-youtube"><h2 style="background-color: forestgreen">YouTube Replacement</h2></div>
</div>


<script src="node_modules/jquery/dist/jquery.min.js"></script>
<script src="node_modules/fg-cookie/cookie.js"></script>
<script type="text/javascript" src="/getdesigned-cookie-consent.js?<?= time() ?>"></script>
<script data-gdcc-selector="gdcc-optin-googleanalytics" data-gdcc-src="googleanalytics.js" type="text/plain"></script>
<script type="text/javascript">
    $(function () {
        gdcc = new GdCookieConsent(true);
    });
</script>
</body>
</html>