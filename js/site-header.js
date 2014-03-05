// Modernizr
//@prepros-append ../vendor/modernizr-2.71.custom/custom.modernizr.min.js
//@codekit-append ../vendor/modernizr-2.71.custom/custom.modernizr.min.js

// Windows Phone Resolution Fix
(function() {
    if ("-ms-user-select" in document.documentElement.style && navigator.userAgent.match(/IEMobile\/10\.0/)) {
        var msViewportStyle = document.createElement("style");
        msViewportStyle.appendChild(
            document.createTextNode("@-ms-viewport{width:auto!important}")
        );
        document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
    }
})();