<!DOCTYPE html>
<html :class="{ 'theme-dark': dark }" x-data="data()" lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />

        <title>Windmill Dashboard - Forms</title>
    </head>
<body>
<!-- General elements -->
    <div class="">
        {{ $slot }}
    </div>
</body>
</html>
