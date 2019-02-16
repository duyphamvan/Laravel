<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Product Discount Calculator</h2>
    <form action="{{route('product.index')}}" method="post">
        <p>@csrf</p>
        <label >Product Description</label><input type="text" name="product">
        <label >List Price</label><input type="text" name="price">
        <label >Discount Percent</label><input type="text" name="percent">
        <label >Result</label><input type="submit" value="Result">
    </form>
</body>
</html>