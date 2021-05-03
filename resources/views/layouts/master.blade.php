<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Signika:wght@400;500;600;700&display=swap" rel="stylesheet">
    @include('elements.css')
</head>

<body>

<div id="wrapper">
    @include('elements.header')
    <div class="wp-content ">
        <div class="grid">
            <div class="row">
                <div class="l-20 m-30 c-0">
                    @include('elements.sidebar')
                </div>
                <div class="l-80 m-70 c-12">
                    <div class="grid">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


@include('elements.js')
</body>

</html>
