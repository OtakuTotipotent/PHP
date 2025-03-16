<?php

// include("./scripts/main.php");

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Database</title>
    <link rel="stylesheet" href="./styles/main.css">
    <style>
        * {
            font-family: 'Poppins', sans-serif;
            box-sizing: border-box;
            margin: 0;
            padding: 0;
        }

        body {
            width: 100%;
            height: 100vh;
            color: lightgray;
        }

        .container {
            position: relative;
            width: 100%;
            height: 100%;
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 1rem;
        }

        .background-video {
            position: fixed;
            top: 0;
            left: 0;
            z-index: -1;
            mix-blend-mode: overlay;
        }

        @media (max-aspect-ratio: 16/9) {
            .background-video {
                width: auto;
                height: 100%;
            }
        }

        @media (min-aspect-ratio: 16/9) {
            .background-video {
                width: 100%;
                height: auto;
            }
        }

        header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 16px;
            height: 70px;
            width: 100%;
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            background-color: rgba(0, 0, 0, 0.123);
            backdrop-filter: blur(10px);
            padding: 0 30px;
            box-shadow: 0 0 15px #72a1de68;
            z-index: 999;
        }

        .left {
            display: flex;
            align-items: center;
            margin: 0 15px;
            transition: .7s;
            cursor: pointer;
        }

        .left img {
            width: 40px;
            border-radius: 40px;
            transition: .6s ease;
        }

        .left img:hover {
            transform: translate(1px, 14px);
            scale: 3;
            border-radius: 3px;
        }

        .right {
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .right a img {
            width: 32px;
            margin: 0 15px;
        }

        .blackhole-box {
            position: absolute;
            top: 0;
            width: 100%;
            justify-content: center;
            mix-blend-mode: lighten;
        }

        .blackhole-box video {
            width: 100%;
            margin-top: -25%;
        }

        .nav {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: rgba(0, 0, 69, 0.30);
            backdrop-filter: blur(10px);
            box-shadow: 0 0 10px #727fde65;
            list-style: none;
            border-radius: 50px;
        }

        .nav li {
            color: white;
            font-weight: 700;
            padding: 15px;
            text-align: center;
        }

        .interface {
            margin-top: 120px;
            width: 600px;
            height: 80vh;
            background-color: rgba(0, 0, 0, 0.02);
            box-shadow: inset 0 0 4px 2px #cf78faff;
            border-radius: 22px;
            border: 1px solid #cf78faff;
            overflow-x: scroll;
            display: flex;
            gap: 20px;
            z-index: 1;
            scroll-snap-type: x mandatory;
        }

        .interface::-webkit-scrollbar {
            height: 5px;
        }

        .interface::-webkit-scrollbar-button {
            background-color: transparent;
        }

        .interface::-webkit-scrollbar-track {
            background-color: transparent;
            border-radius: 100px;
        }

        .interface::-webkit-scrollbar-thumb {
            background-color: #cf78faff;
            border-radius: 50px;
            width: 50%;
        }

        .card {
            scroll-snap-align: center;
            padding: 30px 20px 20px 20px;
            flex-shrink: 0;
            width: 600px;
            height: 100%;
        }

        @media screen and (max-width: 640px) {
            .nav li {
                padding: 4px 6px;
            }

            .blackhole-box video {
                margin-top: -13%;
            }

            .interface {
                width: 85%;
            }
        }
    </style>
</head>

<body>
    <div class="container">
        <video class="background-video" loop autoplay plays-inline muted src="./videos/galaxy.mp4" type="video"></video>

        <header>
            <div class="left">
                <img src="./images/afnan.jpg">
            </div>
            <ul class="nav">
                <li>Manage College Database with ease</li>
            </ul>
            <div class="right">
                <a href=""><img src="./images/git.png"></a>
            </div>
        </header>

        <div class="blackhole-box">
            <video class="blackhole" loop autoplay plays-inline muted src="./videos/blackhole.mp4" type="video"></video>
        </div>

        <div class="interface">
            <div class="card">
                <h2>Upload Record to Database</h2>
                <div class="data-section">
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ab ipsa excepturi maxime eveniet rem id quos illum commodi aut, dolore distinctio doloribus illo? Laborum fuga quo iure et velit rerum?
                </div>
            </div>
            <div class="card">
                <h2>Update Record of Database</h2>
                <div class="data-section">
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Minima rerum quidem unde, laborum eaque dolorem dolorum nisi eligendi soluta ratione alias, temporibus harum. Molestias quas dicta voluptates doloribus fugiat libero.
                </div>
            </div>
        </div>
    </div>

    <script src="./scripts/app.js"></script>
</body>

</html>