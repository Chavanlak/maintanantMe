<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    {{-- bootstrap 5 --}}
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap"
        rel="stylesheet">
    <title>Document</title>
    <style>
        body {
            background-color: #ffffff;
            background-image: url('images/fujihead1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
            /* font-family: Arial, sans-serif; */
            font-family: "Inter", sans-serif;
            justify-content: center;
            display: flex;
        }

        h4 {
            color: #2c3e50;
            text-align: center;
            margin-top: 20px;
        }


        .container {
            position: relative;

        }

        .login-box {
            background-color: white;
            /* margin: 30px auto; */
            padding: 30px;
            border-radius: 10px;
            max-width: 850px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            margin: auto;
            position: absolute;
            top: 30%;
            justify-content: center;
            /* width: 100%; */
        }
        .footer-logo{
            /* position: fixed;; */
            bottom: 10px;
            /* left: 50%; */
            transform: translateX(-50%);
        
            margin-left: auto;
        }
    </style>
</head>

<body>
   @yield('content')
<div class="footer-logo">
    <img src="images/tgilogo.png" alt="TGI Logo" class="footer-logo">

</div>

</body>

</html>
