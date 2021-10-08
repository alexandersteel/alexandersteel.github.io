<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title>Stahl Development - Ich entwickle Websiten & Web Applikationen</title>

        <meta content="IE=edge" http-equiv="X-UA-Compatible" />
        <meta content="width=device-width,initial-scale=1" name="viewport" />

        <link rel="stylesheet" type="text/css" href="./css/styles.css" />
        <link href="https://fonts.googleapis.com/css?family=Muli:200,300,400,700" rel="stylesheet" />
        <link 
          href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" 
          rel="stylesheet" 
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" 
          crossorigin="anonymous" />
    </head>
    <body>
        <?php require(__DIR__ . "/inc/header.php"); ?>
        <?php require(__DIR__ . "/inc/service.php"); ?>
        <?php require(__DIR__ . "/inc/features.php"); ?>
        <?php require(__DIR__ . "/inc/clients.php"); ?>
        <?php require(__DIR__ . "/inc/team.php"); ?>
        <?php require(__DIR__ . "/inc/contact.php"); ?>
        <?php require(__DIR__ . "/inc/footer.php"); ?>

        <script type="text/javascript" src="./vendor/jquery/jquery-3.2.0.js"></script>
        <script type="text/javascript" src="./vendor/jpanelmenu/jquery.jpanelmenu.js"></script>
        <script type="text/javascript" src="./vendor/modernizr/modernizr-custom.js"></script>

        <script type="text/javascript">
            jQuery(document).ready(function($) {
                var jPM = $.jPanelMenu({
                    menu: '.side-menu',
                    trigger: '#side-menu-trigger',
                    direction: 'right'
                });
                jPM.on();
                $(".side-menu a").click(function() {
                    jPM.close();
                });
            });
        </script>
    </body>
</html>
