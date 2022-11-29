<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="https://kit.fontawesome.com/c58bfaf51a.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <title>Lorem</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            {{-- sidebar --}}
            @include('components.sidebar')
            
            <div class="col-md-7">
                <div class="row">
                    <!-- Category -->
                    @include('components.navbar')
                    <!-- Contents -->
                    <div class="col-md-11 ms-3 mt-5">
                        <div class="content mt-5">
                            @yield('content')
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <!-- Topics -->
                <div class="rightside-line">
                    <div class="row">
                        <div class="col-md-12 mt-4 ms-5">
                            {{-- search --}}
                            @include('components.search')
                            {{-- Side News --}}
                            @include('components.sidenews')
                           {{-- Recommended Topics --}}
                            @include('components.recommends')
                            {{-- Who to Follow --}}
                            @include('components.follow')
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
</body>
</html>
