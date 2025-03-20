<?php

if (isset($_POST["submit-btn"])) {

    $connection = mysqli_connect("localhost", "root", "90000") or die("Connection failed");

    $db = mysqli_query($connection, "SHOW DATABASES LIKE 'college';");
    if (mysqli_num_rows($db) > 0) {
        $db = mysqli_select_db($connection, "college");
        $rno = trim($_POST["rollNo-input"]);
        $name = trim($_POST['name-input']);
        $marks = trim($_POST['marks-input']);
        if ($rno == "" || $name == "" || $marks == "") {
            echo "<h3 class='message error'>Enter Data First</h3>";
        } else {
            $data = mysqli_num_rows(mysqli_query($connection, "SELECT rno FROM result WHERE rno = '$rno';"));
            if ($data == 0) {
                mysqli_query($connection, "INSERT INTO result(rno, sname, marks) VALUES('$rno','$name', '$marks');");
                echo "<h3 class = 'message success'>Data inserted successfully</h3>";
            } else {
                echo "<h3 class='message error'>Data already exists\n'$data'</h3>";
            }
        }
    } else {
        mysqli_query($connection, "CREATE DATABASE college;");
        mysqli_query($connection, "USE college;");
        mysqli_query($connection, "CREATE TABLE result(rno int primary key, sname text, marks int)");
        echo "<h3 class='message success'>Database created!</h3>";
    }
}
?>

<!--! The HTML FORM CODE GOES HERE -->

<!DOCTYPE html>
<html>

<head>
    <title>Form Validation</title>
    <style>
        body {
            width: 100%;
            min-height: 100vh;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #888;
            position: relative;
        }

        .message {
            max-width: 90%;
            margin: auto;
            position: absolute;
            top: 1.6rem;
            font-family: 'Poppins', 'Lato', sans-serif;
            font-size: 15px;
            font-weight: 500;
            color: white;
            background-color: #33333380;
            padding: 10px;
            border-radius: 8px;
            animation: fadeIn 1s ease-in-out;
            display: none;
            z-index: 1;
        }

        .message.error {
            display: block;
            background-color: #ff000080;
        }

        .message.success {
            display: block;
            background-color: green;
        }

        @keyframes fadeIn {
            0% {
                opacity: 0;
            }

            100% {
                opacity: 1;
            }
        }

        form {
            background-color: #33333380;
            width: 240px;
            color: white;
            font-size: 18px;
            border-radius: 8px;
            display: grid;
            box-sizing: border-box;
            padding: 20px;
            box-shadow: 3px 3px 3px 3px #000, inset 0 0 8px 4px #555;
        }

        .btn {
            width: 40%;
            margin: auto;
            cursor: pointer;
            padding: 3px 0;
            border-radius: 40px;
            margin-bottom: 10px;
            box-shadow: 0 0 3px 2px #fff;
            transition: all .3s linear;
            opacity: 0.8;
            background-color: white;
        }

        .btn:hover,
        .btn:focus {
            opacity: 1;
            box-shadow: inset 0 0 6px #000;
        }

        input {
            border: none;
            outline: none;
            transition: .2s;
        }

        p,
        input {
            font-family: 'Poppins', 'Lato', sans-serif;
        }

        .textInput {
            padding: 4px;
            border-radius: 40px;
            text-align: center;
            transition: .2s ease-in;
        }

        .textInput:focus,
        .textInput:hover {
            box-shadow: 1px 3px 2px 2px black;
            transform: translate(0, -2px);
        }

        .textInput.error {
            box-shadow: 1px 3px 2px 2px red;
            transform: translate(0, -2px);

            &::placeholder {
                color: red;
            }
        }

        p {
            font-size: 16px;
            margin: 30px 6px 10px 6px;
            cursor: default;
        }

        p:first-child {
            margin-top: 6px;
        }
    </style>
</head>


<body>
    <h3 class="message">This is a message</h3>
    <form action="" method="POST">
        <p>Name</p>
        <input class="textInput" type="text" name="name-input" placeholder="Enter your name">
        <p>Roll Number</p>
        <input class="textInput" type="text" name="rollNo-input" placeholder="Enter your roll number">
        <p>Marks</p>
        <input class="textInput marks" type="number" name="marks-input" placeholder="Enter your marks">
        <br><br>
        <input class="btn" type="submit" name="submit-btn" value="Submit">
    </form>

    <script>
        const messageBox = document.querySelector('.message');
        document.querySelectorAll('input').forEach(input => {
            input.addEventListener('blur', (e) => {
                if (input.value == '') {
                    input.classList.add('error');
                    input.classList.remove('success');
                    messageBox.classList.add('error');
                    messageBox.textContent = `Please ${input.getAttribute('placeholder')}`;
                } else {
                    input.classList.remove('error');
                    input.classList.remove('success');
                    messageBox.textContent = '';
                    messageBox.classList.remove('error');
                }
            });
        });
    </script>
</body>

</html>