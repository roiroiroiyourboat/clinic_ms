<!DOCTYPE html>
<html>
<head>
    <title>Reports</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="reports.css">
    <!--Boxicons link-->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    
</head>
<body>
<div class="sidebar">
            <div class="logo-details">
            <a href="admin-user-manage.php">
                        <button style="background-color:transparent; border:none">
                            <img src="BulSU-SC Logo.png" alt="BULSU-SC LOGO"> 
                        </button>
                    </a> 
                <div class="logo_name">BULSU-SC Clinic</div>
            </div>
            <ul class="nav-list">
            <li>
                <a href="dashboard.php">
                    <i class='bx bx-grid-alt'></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="my_profile.php">
                        <i class='bx bx-user-circle'></i>
                        <span class="links_name">My Profile</span>
            </li>
            <li>
                <a href="patients.php">
                    <i class='bx bx-user'></i>
                    <span class="links_name">Patients</span>
                </a>
            </li>
            <li>
                <a href="users.php">
                    <i class='bx bx-group' ></i>
                    <span class="links_name">Users</span>
                </a>
            </li>
            <li>
                <a href="reports.php">
                    <i class='bx bx-spreadsheet'></i>
                    <span class="links_name">Reports</span>
                </a>
            </li>
            
            <li>
                 <div class="log_out">
                    <a id="go" onclick="log_out()">
                    <i class='bx bx-log-out'></i>
                    <span class="links_name" id="logout">Log out</span></a>
                </div>
            </li>
            </ul>
        </div>
    
    <!--header title-->
    <section class="main">
        <nav>
            <div class="side">
                <i class='bx bxs-report'></i>
                <span class="reports">Reports of Modality</span>
            </div>
        </nav>

        <div class="box2">
           <a href="print.php">
                <button class="btn_print">
                    <i class='bx bx-printer'></i>
                    <span>Print</span>
                </button>
            </a>
        </div>       

        <!--get data from database
        <table class="table table-primary ">
            <thead class="table align-middle">
                <tr class="table-secondary">
                    <th>Illness/Disease</th>
                    <th>Date</th>

                </tr>
            </thead>

            <tbody class="table-group-divider">
                <?php
                    $conn = new mysqli('localhost', 'root','','clinic_ms');
                    //check connection
                    if($conn->connect_error){
                                die('Connection Failed : '.$conn->connect_error);
                            } 
                            $sql = "SELECT illness, date FROM add_patient;";
                            $result = $conn-> query($sql);
                            if(!$result){
                                die("Invalid query: ".$conn->error);
                            }
                            //read data
                            while($row = $result-> fetch_assoc()){
                                echo "<tr>
                                <td>$row[illness]</td>
                                <td>$row[date]</td>
                                </tr>";
                            }
                        ?> 
            </tbody>-->

            <div class="container mt-3">
            <!--<h1>Clinic Modality Reports</h1>-->

                <?php
                    require_once('connection.php');

                    if (!$conn) {
                        die("Connection failed: " . mysqli_connect_error());
                    }

                    function getMonthNames() {
                        return array_map('ucfirst', 
                        explode(',', 'jan,feb,march,april,may,june,july,aug,sept,oct,nov,dec'));
                    }

                      $monthNames = getMonthNames();

                        echo '<table class="table table-hover text-center table-bordered">';
                        echo '<thead class = "table-info">';
                        echo '<th></th>';
                        echo '<th>No. of Cases</th>';
                        echo '<th></th>'; echo '<th></th>'; echo '<th></th>'; echo '<th></th>';
                        echo '<th></th>'; echo '<th></th>'; echo '<th></th>'; echo '<th></th>';
                        echo '<th></th>'; echo '<th></th>'; echo '<th></th>';
                        echo "<tr>";

                        echo '<th>Illness</th>';
                        foreach ($monthNames as $month) {
                        echo "<th>" . $month . "</th>";
                        }
                        echo "</tr>";
                        echo "</thead>";
                       
                        $stmt = $conn->prepare("SELECT MONTHNAME(date) AS month, illness, COUNT(*) AS count
                                                FROM add_patient
                                                GROUP BY MONTHNAME(date), illness
                                                ORDER BY month, illness");
                        $stmt->execute();
                        $result = $stmt->get_result(); 

                        if ($result->num_rows > 0) {
                        
                        $illnesses = array(); 
                        while ($row = $result->fetch_assoc()) {
                            $month = $row["month"];
                            $illness = $row["illness"];
                            $count = $row["count"];

                            if (!in_array($illness, $illnesses)) {
                            $illnesses[] = $illness;
                            echo "<tr>";
                            echo "<td>" . $illness . "</td>"; 
                            } else {
                            echo "<td></td>"; 
                            }

                            foreach ($monthNames as $monthName) {
                            if ($monthName == $month) {
                                echo "<td>" . $count . "</td>";
                            } else {
                                echo "<td></td>"; 
                            }
                            }

                            echo "</tr>";
                        }
                        } else {
                        echo "<tr><td colspan='" . (count($monthNames) + 1) . "'>No records found.</td></tr>"; 
                        }

                        $stmt->close();
                        $conn->close(); 

                        echo "</table>";


                ?>
        </div>
            
    </section>


    
    <script>
        function log_out(){
            var txt;
            if(confirm("Are you sure you want to log out?")){
                var a = document.getElementById("go");
                a.href="homepage.php";
            }
        }
    </script>
</body>
</html>