<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
    <title>Items</title>
</head>
<body>
    @include("components.background-styling")
    @include("components.header")

    <div class="items-container">
        <a class="item" href="#">
            <div class="image-container">
                <img src="{{ asset('images/lend.svg') }}" alt="">
            </div>
            <div>
                <h1>ItemName</h1>
                <div class="item-properties-container">
                    <div class="item-propertie">

                    </div>
                </div>
            </div>
            <div class="add-button-container">
                <div class="add-button">
                    <img src="{{ asset('images/plus-icon.svg') }}" alt="">
                </div>
            </div>
        </a>
        <a class="item" href="#">

        </a>
        <a class="item" href="#">

        </a>
    </div>

</body>
</html>
