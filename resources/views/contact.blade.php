<html>
    <head>

    </head>
    <body>
        <h1>halaman contact</h1>

        @foreach ($contactlist as $item)
            {{ $item->name }} - {{ $item->email }}
        @endforeach
    </body>
</html>