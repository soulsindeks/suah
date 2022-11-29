<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    .container {
        display: flex;
        justify-content: center;
        align-items: center
    }

    form {
        border: 1px solid black;
        padding: 20px;
        margin: 10px;
        align-items: center;
        border-radius: 20px;
    }

    input {
        margin: 10px 
    }

    .tombol {
        float: right;
        margin-right: 10px;
        margin-top: 10px;
    }

</style>
<body>
    <div class="container">
        <form action="{{ url('/user') }}" method="post">

            @csrf
            {{ csrf_field() }}

            <label>Name : </label>
            <input type="text" name="name" placeholder="name"><br>
            <label>Email : </label>
            <input type="text" name="email" placeholder="example@mail.com"><br>
            <button class="tombol" type="submit">Submit</button>
        </form>
    </div>
</body>
</html>