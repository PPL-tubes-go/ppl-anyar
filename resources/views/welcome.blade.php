<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do-ty List</title>
    @vite('resources/sass/app.scss')
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: wheat;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: orange;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            transform: translateX(-100%);
            animation: slideIn 1s forwards;
        }

        @keyframes slideIn {
            to {
                transform: translateX(0);
            }
        }

        h1,
        h3,
        p {
            color: black;
            font-weight: bold;
        }

        .img-thumbnail {
            margin-top: 20px;
            border: none;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            animation: bounce 2s infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-20px);
            }

            60% {
                transform: translateY(-10px);
            }
        }

        .btn-container {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-top: 20px;
        }

        .btn {
            margin: 0 10px;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            background-color: black;
            color: orange;
            text-decoration: none;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
        }

        .btn:hover {
            background-color: orangered;
            transform: scale(1.1);
        }
    </style>
</head>

<body>
    <div class="container text-center my-5">
        <h1 class="mb-2">Welcome to Do-ty List !</h1>
        <p>Don't forget to list your duty!<p>
        <img class="img-thumbnail" src="{{ Vite::asset('resources/images/panda.png') }}" alt="image">
        <div class="btn-container">
            <a class="btn btn-dark" href="{{ route('login') }}">Login</a>
            <a class="btn btn-dark" href="{{ route('register') }}">Register</a>
        </div>
    </div>
    @vite('resources/js/app.js')
</body>

</html>
