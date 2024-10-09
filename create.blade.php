<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Laptop</title>
</head>
<body>
    <h1>Add a Laptop</h1>
    <form action="{{route('brands.store')}}" method="POST">
        @csrf
        @method('POST')
    <input type="text" name="Brand" placeholder="Brand of Loptop">
    <input type="text" name="Specs" placeholder="Specs of Loptop">
    <input type="text" name="Price" placeholder="Price of Loptop">
    <input type="submit" value="Add Laptop">
    </form>
</body>
</html>