<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

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
            .icons-neon{
                padding-left: 40px;
                padding-right: 40px;
                color:snow;
                text-shadow:
      0 0 4px #fff,
      0 0 11px #fff,
      0 0 19px #fff,
      0 0 40px #0fa,
      0 0 80px #0fa,
      0 0 90px #0fa,
      0 0 100px #0fa,
      0 0 150px #0fa;    
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
                <img id="avatar" src="http://github.com/{{$data[0]['owner']['login']}}.png?size=300px">
                <p><b>@yield('name')<b><br>
                {{'@'}}@yield('login')</p>
                <p>@yield('bio')</p>
                <fieldset>
                    <legend><p>Archivements</p></legend>
                    <p> Followers (@yield('followers', 0))
                        @yield('followers_img')
                        <br>
                        Following (@yield('following', 0))
                        @yield('following_img')
                </fieldset>
            </div>
            <br>
            <div class="box-row">
            <a href="/@yield('login')"><p class="icons-neon"><i class="fas fa-book-open"> Overview</i></p></a>
            <a href="@yield('login')/repo"><p class="icons-neon"><i class="fas fa-book"> Repositories</i></p></a>
            <p class="icons-neon"><i class="fab fa-trello"> Projects</i></p>
            <p class="icons-neon"><i class="fas fa-box"> Packages</i></p>
            </div>
            <hr>
    @yield('contents')
    </div>
</body>
</html>