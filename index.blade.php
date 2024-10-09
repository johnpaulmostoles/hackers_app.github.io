<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>List of Laptops</title>
</head>
<body>
    <h1>Laptops</h1>
    <div>
        <table border = "1">
            <tr>
                <th>ID</th>
                <th>Brand</th>
                <th>Specs</th>
                <th>Price</th>
            </tr>
            @foreach($brands as $brands)
            <tr>
                <td>{{$brands->id}}</td>
                <td>{{$brands->Brand}}</td>
                <td>{{$brands->Specs}}</td>
                <td>{{$brands->Price}}</td>
            </tr>
            @endforeach
        </table>
    </div>
</body>
</html>