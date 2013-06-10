<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <title>Mamona Framework</title>
        <meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge, chrome=1" />
        <meta name="apple-mobile-web-app-capable" content="yes" />
        <meta name="apple-mobile-web-app-status-bar-style" content="black" />
        <meta name="format-detection" content="telephone=no"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <link rel="apple-touch-startup-image" href="lib/durandal/img/ios-startup-image-landscape.png" media="(orientation:landscape)" />
        <link rel="apple-touch-startup-image" href="lib/durandal/img/ios-startup-image-portrait.png" media="(orientation:portrait)" />
        <link rel="apple-touch-icon" href="lib/durandal/img/icon.png"/>

        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap.css" />
        <link rel="stylesheet" href="lib/bootstrap/css/bootstrap-responsive.css" />
        <link rel="stylesheet" href="lib/font-awesome/css/font-awesome.css" />
        <link rel="stylesheet" href="lib/durandal/css/durandal.css" />
        <link rel="stylesheet" href="css/main.css" />

        <script type="text/javascript">
            if (navigator.userAgent.match(/IEMobile\/10\.0/)) {
                var msViewportStyle = document.createElement("style");
                var mq = "@@-ms-viewport{width:auto!important}";
                msViewportStyle.appendChild(document.createTextNode(mq));
                document.getElementsByTagName("head")[0].appendChild(msViewportStyle);
            }
        </script>
    </head>
    <body>
        <div id="applicationHost">
            <div class="splash">
              <div class="message">
                  Mamona
              </div>
              <i class="icon-spinner icon-2x icon-spin active"></i>
          </div>
        </div>
        <!-- <script src="//connect.facebook.net/en_US/all.js"></script>
        <script>
            window.fbAsyncInit = function() {
                // init the FB JS SDK
                FB.init({
                    appId      : '373968349391039',                     // App ID
                    channelUrl : 'channel.php'            // Channel File
                });

                // Additional initialization code such as adding Event Listeners goes here
                FB.Canvas.setAutoGrow();
            };
        </script>
        <script>
          (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
          (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
          m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
          })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

          ga('create', '', 'test.com');
          ga('send', 'pageview');
        </script>-->
        <script src="lib/jquery/jquery-1.9.1.js"></script>
        <script src="lib/knockout/knockout-2.2.1.js"></script>
        <script src="lib/require/require.js" data-main="client/main"></script>
    </body>
</html>
