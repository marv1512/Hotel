<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
    * {
        margin: 0;
        box-sizing: border-box;
    }

    .container {
        width: 100%;
    }

    .box {
        background-color: purple;
        border: 1px solid red;
        height: 300px;
        width: 100%;
    }

    @media screen and (max-width: 450px) {}

    @media screen and (min-width: 450px) {
        .container {
            display: flex;
        }

        .box {
            background-color: green;
        }
    }
</style>

<body>
    <div class="container">
        <div class="box"></div>
        <div class="box"></div>
    </div>

</body>

</html>