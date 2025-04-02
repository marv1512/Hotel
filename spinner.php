<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/all.css">
    <title>Document</title>
</head>

<style>
    #loading {
        background-color: white;
        height: 100vh;
        left: 0;
        bottom: 0;
        width: 100%;
        justify-content: center;
        align-items: center;
        display: flex;
        visibility: hidden;
        animation: disappear 3s;
        position: fixed;
        background-position: initial;
        z-index: 9;

    }

    #loading i {
        position: absolute;
        align-items: center;
        justify-content: center;
        animation: spinning 2s ease-in-out;

    }

    @keyframes spinning {
        from {
            transform: rotate(0deg);

        }

        to {
            transform: rotate(360deg);
        }

    }

    @keyframes disappear {
        from {
            visibility: visible;

        }

        to {

            visibility: visible;
        }
    }
</style>

<body>
    <div id="loading">

        <i class=" fa fa-5x fa-spinner"></i>
    </div>
</body>

</html>


</div>