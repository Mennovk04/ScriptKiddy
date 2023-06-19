

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>It Portfolio</title>
    <link rel="stylesheet" href="/style.css">
</head>
<main>
    <body>
    <article>
        <div class="bar">
            <a class="{{ Request::path() === 'welcome' ? 'active' : ' ' }}" href="welcome">Home</a>
            <a class="{{ Request::path() === 'blog' ? 'active' : ' ' }}" href="blog">Blog</a>
            <a href="500">500</a>
        </div>
        @yield('content')
    </article>
    </body>
</main>
</html>
