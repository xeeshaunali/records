<?php
    include 'header.php';    
?>

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

<?php
include "dbconn.php";

// Your SQL query to get all row count
$sql = "SELECT COUNT(*) as count FROM ctccc";


// Your SQL query to get row count  LyingWithRecord

$sqlInRecord = "SELECT COUNT(*) as count FROM ctccc WHERE `status` = 'LyingWithRecord'";

// Your SQL query to get row count LyingWithClerk

$sqlInClerk = "SELECT COUNT(*) as count FROM ctccc WHERE `status` = 'LyingWithClerk'";


// Your SQL query to get row count DistrictTransffer

$sqlInDistrictTransffer = "SELECT COUNT(*) as count FROM ctccc WHERE `status` = 'DistrictTransffer'";


// Your SQL query to get row count LyingWithOneWindow

$sqlInLyingWithOneWindow = "SELECT COUNT(*) as count FROM ctccc WHERE `status` = 'LyingWithOneWindow'";

// Your SQL query to get row count RemandBack

$sqlInRemandBack = "SELECT COUNT(*) as count FROM ctccc WHERE `status` = 'RemandBack'";


//All Rows
$result = $con->query($sql);

//Files In Record
$resultInRecord = $con->query($sqlInRecord);

//Files With Clerk
$resultInClerk = $con->query($sqlInClerk);

//Files Transffered to Other District
$resultInDistrictTransffer = $con->query($sqlInDistrictTransffer);


//Files With OneWindow Operation CTC
$resultInLyingWithOneWindow = $con->query($sqlInLyingWithOneWindow);

//Files With OneWindow Operation CTC
$resultInRemandBack = $con->query($sqlInRemandBack);



$rowCount = 0; // Row Count
$rowCountInRecord = 0; // Row Count With Record
$rowCountInClerk = 0; // Row Count Files With Clerk
$rowCountInDistrictTransffer = 0; // Row Count File District Transffered
$rowCountInLyingWithOneWindow = 0; // Row Count Files One Window Operations CTC
$rowCountInRemandBack = 0; // Row Count Files Cases Remand Back


if ($result->num_rows > 0) {
    // Fetch the result as an associative array
    $row = $result->fetch_assoc();   
    $rowCount = $row['count'];    
}

if ($resultInRecord->num_rows > 0) {
    // Fetch the result as an associative array
    $rowInRecord = $resultInRecord->fetch_assoc();   
    $rowCountInRecord = $rowInRecord['count'];    
}

if ($resultInClerk->num_rows > 0) {
    // Fetch the result as an associative array
    $rowInClerk = $resultInClerk->fetch_assoc();   
    $rowCountInClerk = $rowInClerk['count'];    
}


if ($resultInDistrictTransffer->num_rows > 0) {
    // Fetch the result as an associative array
    $rowInDistrictTransffer = $resultInDistrictTransffer->fetch_assoc();   
    $rowCountInDistrictTransffer = $rowInDistrictTransffer['count'];    
}


if ($resultInLyingWithOneWindow->num_rows > 0) {
    // Fetch the result as an associative array
    $rowInLyingWithOneWindow = $resultInLyingWithOneWindow->fetch_assoc();   
    $rowCountInLyingWithOneWindow = $rowInLyingWithOneWindow['count'];    
}


if ($resultInRemandBack->num_rows > 0) {
    // Fetch the result as an associative array
    $rowInRemandBack = $resultInRemandBack->fetch_assoc();   
    $rowCountInRemandBack = $rowInRemandBack['count'];    
}

// Close the connection
$con->close();
?>


<div class="container-fluid">    
    <div class="row mx-auto">
                        <!-- ADD CTC RECORD BUTTON -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body text-center">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="addRecord.php" style="text-decoration:none; color:white;font-weight:bold;" class="btn btn-success shadow rounded" data-aos="fade-left" >Add Case Record</a>  
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- EDIT CTC RECORD BUTTON -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body text-center">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="editRecord.php" style="text-decoration:none; color:white;font-weight:bold;" class="btn btn-success shadow rounded" data-aos="fade-up">Edit Case Record</a>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- GENERATE REPORT BUTTON -->
                        <div class="col-xl-4 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body text-center">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="search.php" style="text-decoration:none; color:white;font-weight:bold;" class="btn btn-success shadow rounded" data-aos="fade-down">Generate Report</a>
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- PRINT RECEIPP BUTTON -->
                        <!-- <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-info shadow h-100 py-2">
                                <div class="card-body text-center">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <a href="receiptPrint.php" style="text-decoration:none; color:white;font-weight:bold;" class="btn btn-success shadow rounded" data-aos="fade-right" >Print Record Receipt</a>  
                                            
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-clipboard-list fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> -->
                        <!-- TOTAL TOTAL FILES IN RECORD -->
                    <div class="row mx-auto text-center mb-5">                        
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-primary shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-primary fw-bold text-uppercase mb-1">
                                                Total Record</div>
                                                <a href="allrecord.php" style="color:green !important; text-decoration:none !important;">
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $rowCount; ?>
                                                    </div>
                                                </a>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-calendar fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                       <!-- TOTAL CTC DELIVERED DISPLAY NUMBER CARD -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">
                                            <div class="text-xs font-weight-bold text-success fw-bold text-uppercase mb-1">
                                                Total Files In Record</div>
                                                <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowCountInRecord; ?></div>
                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TOTAL CTC PENDING DISPLAY NUMBER CARD -->
                        <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">

                                            <div class="text-xs font-weight-bold text-danger fw-bold text-uppercase mb-1">Lying With Clerk
                                            </div>

                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowCountInClerk; ?>
                                            </div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                         <!-- TOTAL CTC PENDING DISPLAY NUMBER CARD -->
                         <div class="col-xl-3 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">

                                            <div class="text-xs font-weight-bold text-danger fw-bold text-uppercase mb-1">District Transffered
                                            </div>

                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowCountInDistrictTransffer; ?>
                                            </div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- TOTAL CTC PENDING DISPLAY NUMBER CARD -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">

                                            <div class="text-xs font-weight-bold text-danger fw-bold text-uppercase mb-1">Lying With One Window
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowCountInLyingWithOneWindow; ?>
                                            </div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <!-- TOTAL CTC PENDING DISPLAY NUMBER CARD -->
                        <div class="col-xl-6 col-md-6 mb-4">
                            <div class="card border-left-success shadow h-100 py-2">
                                <div class="card-body">
                                    <div class="row no-gutters align-items-center">
                                        <div class="col mr-2">

                                            <div class="text-xs font-weight-bold text-danger fw-bold text-uppercase mb-1">Cases Remanded Back
                                            </div>
                                            <div class="h5 mb-0 font-weight-bold text-gray-800"><?php echo $rowCountInRemandBack; ?>
                                            </div>

                                        </div>
                                        <div class="col-auto">
                                            <i class="fas fa-dollar-sign fa-2x text-gray-300"></i>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
<!-- END ROW -->

    
</div>
</body>
</html>

