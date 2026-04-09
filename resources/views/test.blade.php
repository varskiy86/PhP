<!DOCTYPE html>
<head>
    <title>My view</title>
</head>
<body>
    <form action="" method="POST">
        @csrf
        <input type="text" name="title" placeholder="title"> <br><br>
        <input type="text" name="desc" placeholder="desc"> <br><br>
        <input type="text" name="likes" placeholder="likes"> <br><br>
        <input type="text" name="text" placeholder="text"> <br><br>
        <input type="date" name="date" placeholder="date"> <br><br>
        <input type="text" name="name" placeholder="name">
        <button type="submit">отправить</button>
    </form>
    variable one:{{$var1}} <br>
    variable two:{{$var2}} <br>
    variable three:{{$var3}} <br>
    variable four:{{$var4}} <br>
    variable five:{{$var5}} <br>
</body>
</html>