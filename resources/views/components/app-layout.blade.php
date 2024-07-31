<!doctype html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
  <link rel="preconnect" href="https://fonts.bunny.net">
  <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
  <title>{{ config('app.name') }}</title>
</head>
<body>
    <div class="container mx-auto py-10">
        <h1 class="text-3xl font-bold">
            <a href="/">{{ config('app.name') }}</a>
        </h1>

        {{ $slot }}
    </div>
</body>
</html>
