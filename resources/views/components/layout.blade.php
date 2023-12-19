<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="/img/favi.png" type="image/x-icon">
    <link rel="icon" href="favi.png" type="image/x-icon">
    <title>Mirror mirror</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <x-navbar />
        <main>
            {{$slot}}
        </main>
    <x-footer />
</body>
</html>