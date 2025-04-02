<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>

    <form action="record.php?" method="get">
        <input type="number" value="first" name="first">
        <input type="number" value="second" name="second">
        <select name="operator" id=""> Operator
            <option value="+"> +</option>
            <option value="-"> -</option>
            <option value="/"> /</option>
            <option value="*"> *</option>

        </select>

        <button type="submit" class="btn btn-primary">
            =
        </button>
    </form>
</body>

</html>