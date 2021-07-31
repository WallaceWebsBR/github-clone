@extends('layout.app')
@section('title', 'My Repositories')
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
<div id="repo">
    <table class="table table-responsive-sm table-striped">
    <tbody>
        @foreach($data as $repo)
        <tr>
            <td>{{$repo['name']}}</td>
            <td>{{$repo['description']}}</td>
        </tr>
        @endforeach
    </tbody>
</table>
</div>
@endsection