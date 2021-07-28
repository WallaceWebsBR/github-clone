<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">
        <script src="https://kit.fontawesome.com/1e1db64c85.js" crossorigin="anonymous"></script>
        <!-- Styles -->
        <style>
            body {
                background: #0d1117;
                margin: 0;
                font-family: sans-serif;
            }
            .container{
                display: flex;
                flex-direction: row;
            }
            #bar{
                width: 200px;
                height: 200px;
                display: flex;
                flex-direction: row;
                background: #161b22;
                width: 100%;
                height: 60px;
                z-index: -1;
            }
            #subbar{
                width: 200px;
                height: 200px;
                display: flex;
                flex-direction: row;
                background: #161b22;
                width: 100%;
                height: 60px;
                z-index: -1;
            }
            p{
                color: white;
            }
            #logo{
                padding-top: 9px;
                padding-left: 14px;
                max-width: 40px;
                max-height: 40px;
                filter: invert(100%);
           
            }
            input{
                margin-top: 15px;
                margin-left: 20px;
                background-color:#0d1117;
                padding-top: 4px;
                padding-bottom: 4px;
                width: 260px;
                height: 20px;
                border: none;
                border-radius: 20px;
            }
            h1,p{
                font-family: sans-serif;
                padding-left: 40px;
                padding-right: 40px;
                color:snow;
            }
            .box-col{
                display: flex;
                flex-direction: column;
                width: 20%;
                height: auto;
                /* background-color: #333; */
                border-radius: 5%;
                text-align: center;
            }
            .box-row{
                display: flex;
                flex-direction: row;
                width: 100vh;
                height: auto;
                /* background-color: #333; */
                text-align: center;
            }
            #avatar{
                padding-top: 30px;
                padding-left: 20px;
                border-radius: 50%;
            }
            fieldset{
                width: 20%;
            }
        </style>
    </head>
    <body>
        <div id="bar">
        <img id="logo" src="https://upload.wikimedia.org/wikipedia/commons/thumb/9/91/Octicons-mark-github.svg/1024px-Octicons-mark-github.svg.png">

        <input type="text" placeholder="Search or jump to..">
        <p>Pull requests</p><p>Issues</p><p>Marketplace</p><p>Explore</p>
        </div>
        <div class="container">
            <div class="box-col">
                <img id="avatar" src="http://github.com/WallaceWebsBR.png?size=300px">
                <p><b>Wallace Alberto<b><br>
                @WallaceWebsBR</p>
                <p>Brazilian Developer and Enginner. I like cats and I have a passion for programming.
                <fieldset>
                    <legend><p>Archivements</p></legend>
                    <p>26 Stars
                    <img src="https://image.flaticon.com/icons/png/512/66/66027.png" width="24px" style="filter: invert(100%);"></p>
                </fieldset></p>
            </div>
            <br>
            <div class="box-row">
            <p><i class="fas fa-book-open"> Overview</i></p>
            <p><i class="fas fa-book"> Repositories</i></p>
            <p><i class="fab fa-trello"> Projects</i></p>
            <p><i class="fas fa-box"> Packages</i></p>
            </div>
            <hr>
            
            <p>Popular repositories</p>
            <div class="box-row">
            <div class="box-col" style="padding-left:40px;width: 100%;">
                <fieldset>
                    <legend>
                    <a href="#">Meu Repositorio</a>
                    </legend>
                <p>Um repositorio muito foda baseado em Javascript para WEB.</p>
                <p>Tecnologias: <i class="fab fa-js-square"></i> <i class="fab fa-angular"></i> <i class="fab fa-node-js"></i></p>
                </fieldset>
            </div>
            <div class="box-col" style="width: 100%;">
                <fieldset>
                    <legend>
                    <a href="#">Meu RepoPHP</a>
                    </legend>
                <p>Um repositorio muito foda baseado em PHP-React e PWA.</p>
                <p>Tecnologias: <i class="fab fa-php"></i> <i class="fab fa-angular"></i> <i class="fas fa-stroopwafel"></i></p>
                </fieldset>
            </div>
            </div>            
        </div>
    </body>
</html>
