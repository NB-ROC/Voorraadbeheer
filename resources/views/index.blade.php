<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Dashboard</title>
</head>
<body>
    @include("components.background-styling")

    @include("components.header")

    <main class="buttons-container">
        <div class="mainpage-containers borrow-container">
            <h1 class="usefull-title">Lenen</h1>
            <a class="interface-button" href="/items">
                <img src="{{asset('images/lend.svg')}}" alt="">
            </a>
        </div>
        <div class="mainpage-containers return-container">
            <h1 class="usefull-title">Retouneren</h1>
            <a class="interface-button" href="#">
                <img src="{{asset('images/submit.svg')}}" alt="">
            </a>
        </div>
    </main>
</body>
</html>
