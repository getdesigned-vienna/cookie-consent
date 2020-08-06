Getdesigned Cookie Consent (GDCC)
======
* GDCC is a JS library that helps setting up a cookie consent easily
* No JS configuration required, everything is set in the cookie consent form
* Supports single cookies and groups
* Supports replacing certain content (e.g. YouTube) with replacements as long as the required cookie is not permitted
* Supports i18n via HTML attributes
* Is capable of deleting cookies, if the category is disabled.
* Comes with a handy debug mode to help you setup everything

## Installation
* Install via npm or yarn

        npm i @getdesigned-vienna/cookie-consent
        yarn add @getdesigned-vienna/cookie-consent
* Include jQuery (> 3) and fg-cookie in your built JS file (both come as GDCC npm dependency) 
* Make sure your built JS file is included in your source
* Initialize Getdesigned Cookie Consent once the DOM is ready. Setting the first (and only) param to true enables debug mode (Have a look at the console, especially errors and warnings when debug mode is enabled).

        $(function () {
            gdcc = new GdCookieConsent(true);
        });
* Make sure your HTML includes the GDCC wrapper (e.g. a DIV) with the cookie consent form inside and maybe a noscript tag:

        <div id="gdcc-wrapper">
            <noscript>...</noscript>
            <form>
            ...
            </form>
        </div>
* Now setup your cookie configuration using checkboxes (inputs) with labels and optionally fieldsets with legends.
    * Every checkbox NEEDS a unique ID, used for referencing in labels and content elements (see further below)
    * Fieldsets can have an ID for referencing all included checkboxes as a group from submit buttons
    * Required cookies are marked with the attributes "checked" and "disabled"

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
 * Finally add at least one submit button to the form which will automatically trigger saving the consent.
    * Alternatively you can use any DOM element with the class ".gdcc-save-consent".
    * The optional attribute "data-gdcc-select" allows to define one or more IDs of inputs or fieldsets to be activated automatically (presets). Use * to select all and - to select only required cookies. 
    
            <input type="submit" value="Save consent"/>
            <input type="submit" data-gdcc-select="marketing, image, twitter" value="Marketing + Image"/>
            <a href="#" class="gdcc-save-consent" data-gdcc-select="*">Allow all</a>
            <input type="submit" data-gdcc-select="-" value="Go minimum"/>
* GDCC is now ready to use and should save your cookie consent settings.
* If something is not working, enable debug mode (see above) and check the console of your browser.

## Prepare your content
* Content to be shown/hidden when a certain cookie is (not) accepted can be defined in 3 ways. "optin" means that the content is shown only if the corresponding cookie is accepted, "optout" is shown otherwise. You must always reference the corresponding cookie via its checkboxes' ID:
    * Add classes "gdcc-optin-&lt;input id&gt;" and "gdcc-optout-&lt;input id&gt;", e.g.
    
            <div>
                <img class="gdcc-optin-image gdcc-hide" data-gdcc-src="https://placekitten.com/g/300/200"/>
                <div class="gdcc-optout-image"><h2 style="background-color: forestgreen">Image Replacement #1</h2></div>
            </div> 
    * Add classes "gdcc-optin" and "gdcc-optout" together with an attribute "data-gdcc-cookie=&lt;input id&gt;", e.g.
    
            <div>
                <img class="gdcc-optin gdcc-hide" data-gdcc-cookie="image" data-gdcc-src="https://placekitten.com/g/200/300"/>
                <div class="gdcc-optout" data-gdcc-cookie="image"><h2 style="background-color: forestgreen">Image Replacement #2</h2></div>
            </div>
    * Instead of a CSS class you can also use the attribute "data-gdcc-selector", e.g. "data-gdcc-selector=gdcc-optin-&lt;input id&gt;"
* "optin" content will automatically get the css class "gdcc-hide" added (see abolve). Make sure it is already in place when you define optin content to avoid flashing and accidental loading of the resource. Otherwise GDCC will complain anyway (in debug mode).
* HTML elements with a "src" attribute, which are optin, should provide the attribute as "data-gdcc-src". GDCC will handle the replacement automatically, if the consent is given. E.g.
        
        <iframe class="gdcc-optin-youtube gdcc-hide" 
            data-gdcc-src="https://www.youtube.com/embed/ePkGwBTkUXs" frameborder="0"
            width="1280" height="720"
            allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        <div class="gdcc-optout-youtube"><h2 style="background-color: forestgreen">YouTube Replacement</h2></div>
* The same logic applies to HTML elements having a "href" attribute.

        <link data-gdcc-href="https://external-css.com/alternate.css" class="gdcc-optin-extfonts" rel="stylesheet" type="text/css" />
        <script data-gdcc-src="googleanalytics.js" data-gdcc-selector="gdcc-optin-googleanalytics" type="text/javascript"></script>
* The "type" attribute normally set to "text/css" and "type=text/javascript" should be set to "text/plain" instead. GDCC will take care.

## Missing cookie permissions / i18n
* When the user clicks on an optout element (e.g. a note that YouTube is currently disabled), a confirmation appears asking the user, if she/he wants to proceed and enable the corresponding cookie category.
* The message shown is taken from an attribute data-gdcc-msg, which MUST be set on the GDCC wrapper:

        <div id="gdcc-wrapper" data-gdcc-msg='You must accept cookies in the category "@cookie@" to show this content. Proceed?'>
* The string "@cookie@" will automatically be replaced by the label of the cookies checkbox.
* If the user confirms, the cookie will be enabled and the changed setting is saved.
* A more specific message can be placed on the input or the label itself. If available, it will be taken instead of the general message from the wrapper:
        
        <input type="checkbox" id="image" data-gdcc-msg='Enable cookie category "@cookie@"?' />
        <label for="image" data-gdcc-msg='Enable cookie category "@cookie@"?'>Images</label>

## Keep your cookies clean
* If a cookie is activated even only for a short time, it will stay in memory of your browser
* GDCC is capable of deleting those (first party) cookies, if the category gets disabled again.
* To make this work, make sure you configure the name of the cookies to be deleted in an optional attribute "data-gdcc-delete-cookie". The attribute accepts one or more cookie names, separated by space or comma:

        <input type="checkbox" id="extfonts" data-gdcc-delete-cookie="cookieNo1, cookieNo2"/>

   