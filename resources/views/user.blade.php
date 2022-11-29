<html>
    <head>

    </head>
    <style>
        table{
            margin-top: 20px;
            border-collapse: collapse;
        }

        td, th{
            border: 1px solid #252424;
            text-align: left;
            padding: 10px;
        }
    </style>
    <body>

         <a href="{{'/user/create'}}">tambah</a>
        <h1>{{ $judul }}</h1>

        {!! $konten !!}

        @if ($judul != '')
            <br>welcome
        @else
            <br>bye    
        @endif
        <br>
        @for ($i = 0; $i <= 10; $i++)
            {{$i}}
        @endfor

        <table>
            <thead>
                <tr>
                    <th>No</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                {{-- INI TAMBAHAN BUAT LOOPING NOMER  @foreach ($userlist as i => $item) --}}
                @foreach ($userlist as $item)
                    <tr>
                        {{-- SAMA INI JUGA buat looping = $i + 1 --}}
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $item->name }}</td> 
                        <td>{{ $item->email }}</td>
                    </tr>
                @endforeach
            </tbody>    
            
        </table>
        
    </body>
</html>