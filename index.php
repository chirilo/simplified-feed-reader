<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Feed Reader - Welcome</title>

    <link rel="stylesheet" href="">

    <link rel="stylesheet" type="text/css" href="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.min.css" />
    <link rel="stylesheet" type="text/css" href="css/normalize.css" />
</head>

<body style="margin: 0 auto;">
    <div class="top-bar">
        <div class="top-bar-left">
            <ul class="menu">
                <li class="menu-text">Blog</li>
                <li><a href="#">One</a>
                </li>
                <li><a href="#">Two</a>
                </li>
                <li><a href="#">Three</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="callout large primary">
        <div id="page-wrap" class="row column text-center">
            <h1>Simple Feed Display</h1>
            <!-- <h2 class="subheader">Such a Simple Blog Layout</h2> -->
            <div id="loadArea"></div>
        </div>
    </div>
    

    <script src="http://www.google.com/jsapi" type="text/javascript"></script>
    <script type="text/javascript">
        google.load("jquery", "1.3.2");
    </script>
    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/jquery.cookie.js"></script>
    <script src="js/foundation.min.js"></script>
    <script type="text/javascript">
        $(document).foundation();
        function getFresh() {

            $("#loadArea").fadeOut(400, function() {
                $("#loadArea").load("feeder.php", function() {
                    $("#loadArea").fadeIn();
                });
            });

        };

        $(function() {
            getFresh();

            var int = setInterval("getFresh()", 10000);

        });
    </script>
</body>

</html>