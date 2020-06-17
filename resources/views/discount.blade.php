<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product Discount Calculate</title>
    <link rel="stylesheet" href="resources/sass/app.scss" type="text/css">
</head>
<body>
<div id="content">
    <h1>Product Discount Calculate</h1>
    <form action="/discount" method="post">
        @csrf
        <div id="data">
            <label>Product</label>
            <input type="text" name="description" placeholder="Product Description">
            <br>
            <label>Price(VND)</label>
            <input type="text" name="price" placeholder="List Price">
            <br>
            <label>Discount Percent(%)</label>
            <input type="text" name="discount" placeholder="Discount Percent">
            <br>
            <div id="button">
                <label>&nbsp;</label>
                <button type="submit">Calculate</button>
            </div>
        </div>
    </form>
</div>

</body>
</html>
