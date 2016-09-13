<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0. minimum-scale=1.0">

        <title>You Have Fucking Arrived</title>

        {{HTML::style('css/bootstrap.css')}}
        {{HTML::style('css/font-awesome.css')}}
        <link rel="stylesheet/less" type="text/css" href="less/global.less" />
        
        <style>
            
            body {
                font-family:Lato;
                text-align:center;
            }

            .welcome {
                width: 300px;
                position: relative;
                left:50%;
                margin-left: -150px;
                top: 50%;
                -webkit-transform: translateY(-50%);
                -ms-transform: translateY(-50%);
                transform: translateY(-50%);
            }

            a, a:visited {
                text-decoration:none;
            }

            h1 {
                font-size: 32px;
                margin: 16px 0 0 0;
            }
        </style>
    </head>
    <body>
    <div id="wrap" style="height:100%;">
        <header>
        </header>
        <div id="content"  style="height:100%;">  
            <div class="welcome">
                <a href="http://laravel.com" title="Laravel PHP Framework">
                    {{HTML::image('img/pic.jpg','Imagen Muestra',array('class'=>'img-responsive'))}}
                    <!-- <img src="" alt="Laravel PHP Framework"> -->
                </a>
                <h1>You have fucking arrived.</h1>
            </div>
        </div>
    </div>  
    <footer>
    </footer>
    {{HTML::script('js/jquery-1.11.1.min.js')}}
    {{HTML::script('js/bootstrap.min.js')}}
    {{HTML::script('js/less-v2.6.1.min.js')}}
    </body>
</html>

