<!DOCTYPE html>
<html lang="hu">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        @foreach ($users as $u)
            <ul>
                <li>{{$u->name}}</li>
                <li>{{$u->email}}</li>
                <li>{{$u->role}}</li>
                @foreach ($u->books as $b)
                    <li>
                        <ul>
                            <li>{{$b->title}}</li>
                            <li>{{$b->author}}</li>
                            <li>{{$b->publication_year}}</li>
                        </ul>
                    </li>
                @endforeach
            </ul>
        @endforeach
    </body>
</html>