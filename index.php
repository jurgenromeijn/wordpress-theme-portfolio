<!doctype html>
<html ng-app="app.portfolio">
    <head>
        <base href="/">
        <meta charset="utf-8">
        <title>Jurgen Romeijn | Full stack e-commerce developer</title>
        <meta name="description" content="Ik ben een full stack web developer die gespecialiseerd is in complexe e-commerce vraagstukken.">
        <meta name="viewport" content="width=device-width">
        <link href="https://fonts.googleapis.com/css?family=Roboto:100,300" rel="stylesheet">
        <link rel="stylesheet" href="assets/styles/styles.css">
    </head>
    <body>
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
