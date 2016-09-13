<!doctype html>
<html lang="es">
    <!-- 
    [Eduardo José Alvarado Delgado] <eduardoalvara2@gmail.com>
 
    Web realizada desde cero con:
    Laravel v4.2, 
    Bootstrap v3, 
    JQuery v1.11
    Less v2.6.

    Desde el 20 de Agosto de 2016 hasta fecha actual.
     -->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0. minimum-scale=1.0">

        <title>Eduardo Alvarado</title>

        {{HTML::style('css/bootstrap.css')}}
        {{HTML::style('css/font-awesome.min.css')}}
        <link rel="stylesheet/less" type="text/css" href="less/global.less" />
        
    </head>
    <body>
    <div id="wrap" class="container-fluid" style="height:100%;">
        <header class="row"> <!-- Row Header -->
            <div class="logo col-xs-7 col-sm-6 col-md-5 col-lg-3">
                <div class="stuff">
                    <center>
                        <img src="img/EduDeveloper.png" alt="eduardoalvara2" class="img-responsive">
                    </center>
                    <h1>Eduardo Alvarado</h1>
                    <h2 style="font-size: 14px; margin:0;">[Web & Game Developer]</h2>
                </div>

                {{$menu = '<div class="menu hidden-xs">
                    <a href="#" onClick="goTo(1); return false;">ABOUT</a> / 
                    <a href="#" onClick="goTo(2); return false;">WORK</a> / 
                    <a href="#" onClick="goTo(3); return false;">CONTACT</a>
                </div>'}}
            </div>
        </header>
        <div id="content" style="height:100%;">  
            <div class="row"> <!-- Row 1 -->
                <div id="eduardo-alvarado-pic" class="hidden-xs">
                    {{HTML::image('img/Eduardo-Alvarado.jpg','Eduardo Alvarado. @eduardoalvara2')}}
                </div>
                <div class="col-xs-12 col-sm-6 leftSide"> <!-- Div 1 -->
                    <h1>About();</h1>
                    {{$menu}}
                </div>
                <div class="col-xs-12 col-sm-6 rightSide"> <!-- Div 2 -->
                    <p>
                        ¡Hola! Soy Eduardo Alvarado, tengo 22 años, Cum Laude en Ingeniería en Informática con habilidades en el desarrollo de videojuegos y web. Con deseos de seguir aprendiendo y mejorarme profesionalmente. Actualmente en búsqueda de oportunidades laborales en Chile, especialmente en el desarrollo de Videojuegos o Web Front-End.
                    </p>
                    <br>
                    <h3>Desarrollador de Videojuegos</h3>
                    <p>
                        Generalista enfocado en Game Engine Programmer y UI Programmer, con experiencia en Unity3D y C#/Javascript, aplicando estructura de archivos <a href="https://www.toptal.com/unity-unity3d/unity-with-mvc-how-to-level-up-your-game-development">AMVCC</a>.
                    </p>
                    <p>
                        Tres juegos completados y uno de ellos publicado, el cual tiene como nombre Blind Flight y fue realizado en <a href="http://www.orusgames.com/">OrusGames</a> de <a href="http://www.orusys.com/">Orusys de Venezuela</a>, éste es un juego para moviles estilo runner. Además de el también he desarrollado dos juegos personales e independientes Cubetronic y <a href="https://eduardoalvara2.itch.io/breakouy-orusys">Breakout Orusys</a>. Aún hay miles de cosas que quiero aprender del área, me enamoré del desarrollo de videojuegos y me gustaría orientar mi carrera a ese camino.
                    </p>
                    <table>
                        <tr>
                            <td>
                                <ul>
                                    <li>Unity3D 5.3.*</li>
                                    <li>Photoshop CC</li>
                                    <li>
                                        <a href="https://www.toptal.com/unity-unity3d/unity-with-mvc-how-to-level-up-your-game-development">
                                            AMVCC
                                        </a>
                                    </li>
                                    <li>Google Play Games Services</li>
                                    <li>Unity Ads</li>
                                </ul> 
                            </td>
                            <td>
                                <ul>
                                    <li>C#</li>
                                    <li>JavaScript</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <h3>Desarrollador Web</h3>
                    <p>
                        Co-diseñador y desarrollador de la página oficial de mi Instituo Universitario de Tecnología "Dr. Federico Rivero Palacio", colaborador en la refactorización front-end del sistema web IVIChem del Insituto Venezolano de Investigaciones Científicas (IVIC) entre otros. Ambas web fueron realizadas con el Framework PHP Laravel 4.2, además de él trabajo con el Framework CSS Boostrap 3 y el lenguaje dinámico de hojas de estilo LESS. Amplia experiencia en JavaScript/JQuery y SQL con los Sistemas de Gestión de Base de Datos MySQL y PostgreSQL.
                    </p>
                    <table>
                        <tr>
                            <td>
                                <ul>
                                    <li>Framework PHP Laravel 4.2</li>
                                    <li>Framework CSS Bootstrap 3</li>
                                    <li>MVC/HMVC</li>
                                    <li>MySQL/PostgreSQL</li>
                                    <li>eXtreme Programming</li>
                                    <li>RUP</li>
                                    <li>SEO y SEM</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>PHP</li>
                                    <li>JavaScript/ JQuery/ AJAX</li>
                                    <li>HTML/ CSS/ LESS</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <h3>Otros</h3>
                    <p>También poseo conocimientos de las siguientes herramientas y lenguajes, aunque no me he enfocado en ellos, me gustan mucho y me siento cómodo trabajándolos.</p>
                    <table>
                        <tr>
                            <td>
                                <ul>
                                    <li>Python/PyQt</li>
                                    <li>Java</li>
                                </ul>
                            </td>
                            <td>
                                <ul>
                                    <li>Inglés: Lectura y escritura medio-alto. Escucha y habla medio-básico.</li>
                                </ul>
                            </td>
                        </tr>
                    </table>
        
                </div>
            </div>
            <div class="row"> <!-- Row 2 -->
                 <div class="col-xs-12 col-sm-6 leftSide"> <!-- Div 1 -->
                    <h1>Work();</h1>
                    {{$menu}}
                 </div>
                 <div class="col-xs-12 col-sm-6 rightSide"> <!-- Div 2 -->
                    <div class="section col-xs-12">
                        <a href="https://play.google.com/store/apps/details?id=com.Orusys.BlindFlightPaid" target="_blank">
                            <div>
                                <h4>Blind Flight</h4>
                                <p>Programador Junior</p>
                            </div>
                            {{HTML::image('img/work/blind_flight.jpg','Blind Flight. OrusGames. Eduardo Alvarado.')}}
                        </a>
                    </div>
                    <div class="section col-xs-12" >
                        <a href="https://eduardoalvara2.itch.io/breakouy-orusys" target="_blank">
                            <div>
                                <h4>Breakout Orusys</h4>
                                <p>Diseñador y Desarrollador</p>
                            </div>
                            {{HTML::image('img/work/breakout_orusys.png','Breakout Orusys. OrusGames. Eduardo Alvarado.')}}      
                        </a>
                    </div>
                    <div class="section col-xs-12" >
                        <a href="https://twitter.com/cubetronicv" target="_blank">
                            <div>
                                <h4>Cubetronic</h4>
                                <p>Diseñador y Desarrollador</p>
                            </div>
                            {{HTML::image('img/work/cubetronic.jpg','Breakout Orusys. OrusGames. Eduardo Alvarado.')}}      
                        </a>
                    </div>
                    
                    <div class="section col-xs-12">
                        <a href="http://iutfrp.edu.ve/"  target="_blank">
                            <div>
                                <h4>IUT "Dr. Federico Rivero Palacio"</h4>
                                <p>Co-Diseñador y Co-Desarrollador</p>
                            </div>
                            {{HTML::image('img/work/iut.jpg','Breakout Orusys. OrusGames. Eduardo Alvarado.')}}      
                        </a>
                    </div>
                    <div class="section col-xs-12">
                        <a href="{{URL::to('img/work/ivic.png')}}"  target="_blank">
                            
                            <div>
                                <h4>IVIChem 2.0</h4>
                                <p>Colaborador en Reingeniería</p>
                            </div>
                            {{HTML::image('img/work/ivic.png','Breakout Orusys. OrusGames. Eduardo Alvarado.')}}      
                        </a>
                    </div>
                    <div class="section col-xs-12">
                        <a href="{{URL::to('img/work/bomberos.png')}}"  target="_blank">
                            
                            <div>
                                <h4>Sistema de RRHH</h4>
                                <p>Co-Diseñador y Co-Desarrollador</p>
                            </div>
                            {{HTML::image('img/work/bomberos.png','Breakout Orusys. OrusGames. Eduardo Alvarado.')}}      
                        </a>
                    </div>
                 </div>
            </div>
            <div class="row"> <!-- Row 3 -->
                 <div class="col-xs-12 col-sm-6 leftSide"> <!-- Div 1 -->
                    <h1>Contact();</h1>
                    {{$menu}}
                 </div>
                 <div class="col-xs-12 col-sm-6 rightSide"> <!-- Div 2 -->
                    Si deseas conocer más de mi trabajo o comunicarte conmigo, puedes hacerlo mediante los siguientes medios:
                    <br>
                    <h2>Eduardo Alvarado</h2>
                    Web & Game Developer <br>
                    <a href="mailto:eduardoalvara2@gmail.com" class="email">eduardoalvara2@gmail.com</a>
                    <br><br>

                    <a href="https://www.linkedin.com/in/eduardoalvara2"><i class="fa fa-linkedin-square fa-2x" aria-hidden="true"></i></a>
                    &nbsp;&nbsp;
                    <a href="https://twitter.com/EduardoAlvara2"><i class="fa fa-twitter-square fa-2x" aria-hidden="true"></i></a>
                    &nbsp;&nbsp;
                    <a href="https://www.instagram.com/eduardoalvara2/"><i class="fa fa-instagram fa-2x" aria-hidden="true"></i></a>
                    &nbsp;&nbsp;
                    <a href="https://www.facebook.com/EduardoAlvara2"><i class="fa fa-facebook-square fa-2x" aria-hidden="true"></i></a>


                 </div>
            </div>
            <div class="row"> <!-- Row 4 -->
                 <div class="logoEnd col-xs-7 col-sm-6 col-md-5 col-lg-3">
                        <div class="stuff">
                            <center>
                                <img src="img/EduDeveloperWhite.png" alt="eduardoalvara2" class="img-responsive">
                            </center>
                            <h1>¡Gracias!</h1>
                        </div>
                 </div>
            </div>
        </div>
    </div>  
    <footer>
        Eduardo Alvarado, 2016
    </footer>
    {{HTML::script('js/jquery-1.11.1.min.js')}}
    {{HTML::script('js/bootstrap.min.js')}}
    {{HTML::script('js/less-v2.6.1.min.js')}}
    <!-- Components -->
    {{HTML::script('js/resizerComponent.js')}}
    {{HTML::script('js/scrollComponent.js')}}
    </body>
</html>

