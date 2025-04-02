<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <title>Document</title>
</head>
<style>
    .mobile,
    .desktop {
        display: none;
    }

    @media screen and (max-width: 450px) {
        .mobile {
            display: block;
        }
    }

    @media screen and (min-width: 451px) {
        .desktop {
            display: block;
        }
    }
</style>

<body>
    <div class="mobile">
        mobile
    </div>
    <div class="desktop">
        Desktop
    </div>
</body>

</html>