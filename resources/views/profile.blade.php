@extends('layout.app')
@section('title', 'My Profile')
@section('name', $profile['name'])
@section('login', $profile['login'])
@section('bio', $profile['bio'])
@section('followers', $profile['followers'])
@section('following', $profile['following'])
@section('following_img')
@foreach(array_slice($followings, 0, 10) as $following)
<a href="/{{$following['login']}}">
<img src="{{$following['avatar_url']}}" alt="{{$following['login']}}" height="40px" style="border-radius: 40px;">
</a>
@endforeach
@endsection
@section('followers_img')
@foreach(array_slice($followers,0,10) as $follow)
<a href="/{{$follow['login']}}">
    <img src="{{$follow['avatar_url']}}" alt="{{$follow['login']}}" height="40px" style="border-radius: 40px;">
</a>
@endforeach
@endsection
@section('contents')
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
@endsection