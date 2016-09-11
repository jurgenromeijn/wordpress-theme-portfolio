<!doctype html>
<html ng-app="app.portfolio">
    <head>
        <base href="/">
        <meta charset="utf-8">
        <title data-ng-bind="title">Jurgen Romeijn | Full stack e-commerce developer</title>
        <meta name="description" content="">
        <meta name="viewport content=" width=device-width">
        <link rel="stylesheet" href="assets/styles/styles.css">
    </head>
    <body><!--[if lt IE 10]>
        <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade
            your browser</a> to improve your experience.</p>
        <![endif]-->
        <div class="page-wrapper">
            <header data-page-header=""></header>
            <div class="ui-view-container">
                <div data-ui-view="" data-autoscroll="true"></div>
            </div>
            <footer data-page-footer=""></footer>
        </div>
        <script src="assets/scripts/scripts.js"></script>
        <script>
            (function () {
                'use strict';
                window.nonce = '<?php echo wp_create_nonce('ccf_form'); ?>';
            })();
        </script>
    </body>
</html>
