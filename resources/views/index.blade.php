<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>helo</title>
    </head>
    <body>
        <h1>Books: </h1>
        <ol>
            @foreach ($books as $b)
                <li>Title: {{$b->title}}</li>
                <ul>
                    <li>Author: {{$b->author}}</li>
                    <li>Publication year: {{$b->publication_year}}</li>
                    <!--@if(auth()->check() && auth()->user()->role == 'admin')
                        <form action="{{ route('foglalasok.show', $foglalas->id) }}" method="GET">
                            @csrf
                            <button type="submit">Megnézem</button>
                        </form>

                    @endif -->
                    <form action="">
                        <input type="submit" value="ok">
                    </form>
                    <br>
                </ul>
            @endforeach
        </ol>
    </body>
</html>