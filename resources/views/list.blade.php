<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Result Product Discount</title>
    <link rel="stylesheet" href="resources/sass/app.scss" type="text/css">
</head>
<body>
<div class="container" id="content">
    <h2>Product Discount Calculator</h2>
    <form action="">
        <label>Product: </label>
        <span>{{$description}}</span>
        <br>
        <label>Price: </label>
        <span>{{$price}}</span>
        <br>
        <label>Discount Percent: </label>
        <span>{{$discount . ' %'}}</span>
        <br>
        <label>Discount Amount: </label>
        <span>{{$discountAmount. " VND"}}</span>
        <br>
        <label>Discount Price: </label>
        <span>{{$discountPrice . " VND"}}</span>
    </form>
</div>

</body>
</html>
