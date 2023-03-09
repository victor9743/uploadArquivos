<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
    
    </head>
    <body class="antialiased">
        <?php foreach ($arquivos as $a) { ?>
            {{-- <img src="{{ url("storage/{$a->arquivo}") }}" > --}}
            <iframe src="{{ url("storage/{$a->arquivo}") }}" width="600" height="780" style="border: none;"></iframe>
        <?php  } ?>
        <form action="/store" method="POST" enctype="multipart/form-data">
            @csrf
            <input type="file" name="arquivo" /><br>
            <button type="submit">salvar</button>
        </form>
    
    </body>
</html>
