<?php
/**
 * Plugin Name: Jungle Coming Soon page
 * Plugin URI: https://www.jungle.guide/
 * Description: Jungle Coming soon or maintenance plugin.
 * Version: 1.0
 * Author: Azat Rahmanov
 * Author URI: http://rahmanow.com/
 **/

/* Tell search engines that the site is temporarily unavailable */

$protocol = $_SERVER["SERVER_PROTOCOL"];
if ( 'HTTP/1.1' != $protocol && 'HTTP/1.0' != $protocol ) $protocol = 'HTTP/1.0';
header( "$protocol 503 Service Unavailable", true, 503 );
header( 'Content-Type: text/html; charset=utf-8' );
header( 'Retry-After: 600' );
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="">
    <title>Jungle - Coming Soon</title>
    <link rel="stylesheet" href="assets/bootstrap.min.css" type="text/css">
    <link href="assets/main.css" rel="stylesheet" type="text/css">
</head>
<body class="body">
    <div class="cursor" id="cursor">
        <div class="cursor__outer">
            <img class="cursor__ring" src="assets/jungle_cursor.png" alt="Coming soon">
        </div>
    </div>

    <main role="main" class="container-fluid">
        <div class="row">
            <div class="col-2">
                <div class="div-block-13 mt-4 ml-4">
                    <h1 class="heading-4" onclick="openNav()">?</h1>
                </div>

                <div id="jungleSide" class="sidepanel">
                    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&larr;</a>
                    <div class="row jg-row ml-">
                        <p class="lead">
                            Junge ist eine neue Agentür für digitale Kommunikation. Wir helfen Marken und Unternehmen dabei ihren Weg durch den digitalen Dschungel zu finden.
                        </p>
                        <a href="mailto:hi@jungle.guide">Haben wir interesse geweckt? <br /> Dann sprechen Sie uns an.</a>
                    </div>
                    <div class="row jg-row-1">
                        <span>t: 0176 3213 7779</span>
                        <span>m: hi@jungle.guide </span>
                    </div>
                </div>

            </div>

            <div class="col-8">

            </div>

            <div class="col-2">

            </div>
        </div>

        <div class="row align-items-center row-welcome">
            <div class="col-12 Iam">
                <h1 class="heading-3">Welcome to</h1>
                <b>
                    <div class="innerIam">
                        the Jungle <br />
                        Social Media <br />
                        digital Branding <br />
                        digital Strategy
                    </div>
                </b>
            </div>
        </div>

        <div class="row align-items-center row-email ml-4">
            <div class="col align-top">
                <div id="jg-rotate">
                    <p class="paragraph-2">hi@jungle.guide</p>
                </div>
            </div>
        </div>


    </main>

    <script src="assets/jquery-3.4.1.min.js"></script>
    <script src="assets/jquery-3.4.1.slim.min.js"></script>
    <script src="assets/popper.min.js"></script>
    <script src="assets/bootstrap.min.js"></script>
    <script src="assets/anime.min.js"></script>
    <script src="assets/main.js"></script>
    <!--[if lte IE 9]><script src="//cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif]-->

    <script>
        $(document).ready(function() {
            var movementStrength = 25;
            var height = movementStrength / $(window).height();
            var width = movementStrength / $(window).width();
            $(".body").mousemove(function(e){
                var pageX = e.pageX - ($(window).width() / 2);
                var pageY = e.pageY - ($(window).height() / 2);
                var newvalueX = width * pageX * -1 - 25;
                var newvalueY = height * pageY * -1 - 50;
                $('.body').css("background-position", newvalueX+"px     "+newvalueY+"px");
            });
        });

        /* Set the width of the sidebar to 250px (show it) */
        function openNav() {
            document.getElementById("jungleSide").style.width = "80%";
            document.getElementById("cursor").style.display = "none";
        }

        /* Set the width of the sidebar to 0 (hide it) */
        function closeNav() {
            document.getElementById("jungleSide").style.width = "0";
            document.getElementById("cursor").style.display = "inline";
        }
    </script>

</body>

<?php
/* This passes control back to the wordpress upgrade routine */
die();
/* Don't change this */
?>
