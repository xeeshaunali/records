<?php
session_start();
if(isset($_SESSION['uid']))
{

}
else
{
    header('location:login.php');
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">   
    <script src="datatable/jquery-3.7.0.js"></script>
    <style>
        body{
            margin: 0 auto;
            padding: 0px;
        }

    </style>

<style>
        /* Add a CSS rule to hide the button when printing */
        @media print {
            .print-button {
                display: none !important;
            }
        }
    </style>
    
    <title>ONE WINDOW || CTC</title>
</head>
<body>


<?php
// Your database connection code here
include "dbconn.php";

$start_date = isset($_GET['start_date']) ? $_GET['start_date'] : '';
$end_date = isset($_GET['end_date']) ? $_GET['end_date'] : '';
$court_name = isset($_GET['courtname']) ? $_GET['courtname'] : 'all';
$status = isset($_GET['status']) ? $_GET['status'] : 'all';
$shelf = isset($_GET['shelf']) ? $_GET['shelf'] : 'all';

// Build the SQL query based on the selected filters
$sql = "SELECT * FROM ctccc WHERE 1";

// Add conditions based on the provided filters
if (!empty($start_date) && !empty($end_date)) {
    $sql .= " AND dateSubmission BETWEEN '$start_date' AND '$end_date'";
}



// Filter by Court Name
if ($court_name !== 'all') {
    $sql .= " AND courtname = '$court_name'";
}

// Filter by Status
if ($status !== 'all') {
    $sql .= " AND status = '$status'";
}

// Filter by Shelf
if ($shelf !== 'all') {
    $sql .= " AND shelf = '$shelf'";
}


$result = $con->query($sql);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbs5uoF0Zl3+kv4o5C/gSA4gEhqU7TWq18LDnZwiabtGUpJ3pi5P3BYWBn2bvy5+J" crossorigin="anonymous">
    <title>Search Results</title>
</head>
<body>

<div class="container-fluid mt-5">
    <h2 class="mb-4 text-center text-success">CTC RECORD</h2>
    <?php
     if ($result && $result->num_rows > 0) {
        ?>
        <table class="table table-striped bordered">
            <thead>
            <tr>
                        <th>ID</th>                        
                        <th>Court Name</th>
                        <th>Case Categ</th>
                        <th>Case No</th>
                        <th>Year</th>
                        <th>PartyOne</th>
                        <th>PartyTwo</th>
                        <th>CrimeNo</th>
                        <th>CrimeYear</th>
                        <th>P.S</th>
                        <th>Inst</th>
                        <th>Disposal</th>
                        <th>Submission</th>
                        <th>Shelf</th>
                        <th>Row</th>
                        <th>Bundle</th>
                        <th>File</th>
                        <th>Status</th>
            </tr>
            </thead>
            <tbody>
            <?php
            while ($row = $result->fetch_assoc()) {
                ?>
                <tr>
                <td><?php echo $row["id"]; ?></td>
                            <td><?php echo $row["courtname"]; ?></td>
                            <td><?php echo $row["casecateg"]; ?></td>
                            <td><?php echo $row["caseno"]; ?></td>
                            <td><?php echo $row["year"]; ?></td>
                            <td><?php echo $row["partyone"]; ?></td>
                            <td><?php echo $row["partytwo"]; ?></td>
                            <td><?php echo $row["crimeno"]; ?></td>
                            <td><?php echo $row["crimeyear"]; ?></td>
                            <td><?php echo $row["ps"]; ?></td>
                            <td><?php echo $row["dateInst"]; ?></td>
                            <td><?php echo $row["dateDisp"]; ?></td>
                            <td><?php echo $row["dateSubmission"]; ?></td>
                            <td><?php echo $row["shelf"]; ?></td>
                            <td><?php echo $row["row"]; ?></td>
                            <td><?php echo $row["bundle"]; ?></td>
                            <td><?php echo $row["file"]; ?></td>
                            <td><?php echo $row["status"]; ?></td>
                </tr>
                <?php
            }
            mysqli_free_result($result);
            ?>
            </tbody>
        </table>
        <?php
    } else {
        echo "No records found.";
    }


    $con->close();

    ?>
</div>


<div class="text-center mt-5">
    <button class="btn btn-success btn-lg shadow rounded print-button" onclick="printPage()">Print</button>
    <div class="print-date">Printed on: <?php echo date('Y-m-d H:i:s'); ?></div>
</div>


<script>
    // Function to print the page
    function printPage() {
        window.print();
    }

    
</script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-eUHJ3A5Cf7pyRffLZ/Dagx3lfUq76EdW8eN7eUtjhKp5AR6Vr+Qe4izfcSeJfBA" crossorigin="anonymous"></script>
</body>
</html>
