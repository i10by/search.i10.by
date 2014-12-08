<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Поиск - i10</title>
        <link rel="stylesheet" href="/template/css/primary.css" media="screen">
        <link rel="stylesheet" href="/template/css/icons.css">
        <link href="favicon.png" rel="shortcut icon" type="image/x-icon" />
    </head>
    <body>
        <div id="wrapper">
            <div id="page">
                <div class="inner">
                    <? get_template("control-bar"); ?>
                    <div id="page-body">
                        <? get_page($url_page); ?>
                    </div>
                </div>
            </div>
            <? get_template("footer-bar"); ?>
        </div>

        <script src="/template/js/jquery.js"></script>
        <script src="/template/js/gui.js"></script>
    </body>
</html>