<?php
$host = "localhost"; // MySQL server address
$user = "root"; // MySQL Workbench username
$password = "90000"; // MySQL Workbench password
$database = "collegeDB"; // Database name
$port = 3310; // MySQL default port

// Establish connection to the MySQL server
$connection = mysqli_connect($host, $user, $password, "", $port) or die("ERROR: Connection not established.");

// Check if the database exists
$databaseExistsResult = mysqli_query($connection, "show databases like '$database';");

if (mysqli_num_rows($databaseExistsResult) == 0) {
    // If the database doesn't exist, create it
    mysqli_query($connection, "create database $database");
    mysqli_query($connection, "use $database");
    mysqli_query($connection, "create table students(rno int primary key, sname text, degree text, marks int);");
}

// Select the database
mysqli_select_db($connection, $database) or die("Database Problem!");

include("./scripts/main.php");
include("./scripts/display.php");

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>College Database</title>
    <link rel="stylesheet" href="./styles/main.css">
</head>

<body>
    <div class="container">
        <video class="background-video" loop autoplay plays-inline muted src="./videos/galaxy.mp4" type="video"></video>

        <header>
            <div class="left">
                <img src="./images/afnan.jpg">
            </div>
            <ul class="nav blur">
                <li>College Database</li>
            </ul>
            <div class="right">
                <a href=""><img src="./images/git.png"></a>
            </div>
        </header>

        <div class="blackhole-box">
            <video class="blackhole" loop autoplay plays-inline muted src="./videos/blackhole.mp4" type="video"></video>
        </div>

        <div class="interface">
            <div class="card form-card">
                <h2 class="blur">ADD Record to Database</h2>
                <div class="data-section">
                    <form action="" method="post">
                        <div class="form-element">
                            <label for="rno">Roll No.</label>
                            <input type="text" name="rno-text" id="rno" placeholder="Roll no. format: IT-2130">
                        </div>
                        <div class="form-element">
                            <label for="name">Name</label>
                            <input type="text" name="name-text" id="name" placeholder="Your registered fullname (CNIC)">
                        </div>
                        <div class="form-element">
                            <label for="degree">Degree</label>
                            <input type="text" name="degree-text" id="degree" placeholder="e.g Computer Science">
                        </div>
                        <div class="form-element">
                            <label for="marks">Marks</label>
                            <input type="number" name="marks-text" id="marks" placeholder="current obtained marks only!">
                        </div>
                        <div class="form-element btns">
                            <button class="submit btn" name="submit-btn">Insert Record</button>
                            <button class="btn update" name="update-btn">Update Record</button>
                        </div>
                    </form>
                </div>
                <div class="form-message message"><?php echo htmlspecialchars($msg); ?></div>
            </div>
            <div class="card table-card">
                <div class="data-section">
                    <div class="crud-section">
                        <div class="search">
                            <input type="search" placeholder="Search by rollno">
                            <button class="search-db btn" name="search-db">Search</button>
                        </div>
                        <div class="delete">
                            <input type="search" id="delete-row" placeholder="Delete by rollno">
                            <button class="delete-row btn" name="delete-row">Delete</button>
                        </div>
                    </div>
                    <div class="table">
                        <table>
                            <thead>
                                <tr>
                                    <th>RNO</th>
                                    <th>NAME</th>
                                    <th>DEPT</th>
                                    <th>MARKS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $table = mysqli_query($connection, "select * from students");
                                while ($row = mysqli_fetch_array($table)) {
                                    echo "<tr> <td>" . $row['rno'] . "</td> <td>" . $row['sname'] . "</td> <td>" . $row['degree'] . "</td> <td>" . $row['marks'] . "</td> </tr>";
                                }
                                ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="table-message message"><?php echo htmlspecialchars($msg_table); ?></div>
                </div>
            </div>
        </div>
    </div>

    <script src="./scripts/app.js"></script>
</body>

</html>