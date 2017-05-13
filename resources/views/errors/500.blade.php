<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Niečo sa pokazilo :(</title>
        {{header( "refresh:5;url=/" )}}

        <link href="https://fonts.googleapis.com/css?family=Roboto:100,400" rel="stylesheet">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                color: #B0BEC5;
                display: table;
                font-weight: 100;
                font-family: 'Roboto', sans-serif;
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 72px;
                margin-bottom: 40px;
            }

            .page-error-404 {
                color: #eee;
                display: block;
                font-size: 300px;
                font-weight: 800;
                line-height: 0.7;
            }

            .text-medium {
                font-size: 50px !important;
                font-weight: 800;
                line-height: 1.1;
                margin-bottom: 20px;
                color: #111;
            }

            p.lead {
                color: #696f6f;
                margin-bottom: 20px;
                font-weight: 300;
            }

            a {
                text-decoration: none;
                font-weight: 400;
            }

            a:hover {
                color: #26B8F3;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="row">
                    <div class="col-md-6">
                        <div class="page-error-404">500</div>
                    </div>
                    <div class="col-md-6">
                        <div class="text-left">
                            <h1 class="text-medium">Server Error!</h1>
                            <p class="lead">Ospravedľnujeme sa, niečo sa pokazilo na našich serveroch.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
