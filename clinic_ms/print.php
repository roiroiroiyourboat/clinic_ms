<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reports of Modality</title>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" type="text/css" href="print.css" media="print">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">

</head>
<body>
    <!--header title-->
    <section class="main">
        <center>
        <nav>
            <div class="side">
                <h1 style="margin-top:20px">Reports of Modality</h1>     
                <p style="font-size:20px; margin-top:5px">Bulacan State University - Sarmiento Campus</p>
                <div id="line"></div>
                <!--<p class="reports">Reports of Modality</p>-->
            </div>
        </nav>
        <div class="box2">
                <button onclick="window.print();" id="print-btn" class="btn_print">
                    <i class='bx bx-printer'></i>
                    <span>Print</span>
                </button>

                <div class="line"></div>
        </div>
        </center>
    
        <div class="container-fluid">
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
</body>
</html>