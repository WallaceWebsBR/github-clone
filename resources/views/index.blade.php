<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Welcome to Githubfy.me</title>
    <style>
        body{

        }
    </style>
</head>
<body>
    <h1>
        Type your git username bellow
    </h1>
    <input type="text" id="username">
    <button onclick="location.href = '/' + document.getElementById('username').value">GO</button>
</body>
</html>