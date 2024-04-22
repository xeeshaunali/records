<?php
session_start();
if(isset($_SESSION['uid']))
{

}
else
{
    header('location:login.php');
}
?><?php include 'header.php';?>   

<style>
  label{
    color:green;
    font-weight: bold;
    word-spacing: 0.5rem;
    letter-spacing: 0.1rem;
  }
</style>

<div class="container-fluid">
<!-- form control start -->
    <form class="row g-3 mx-auto" action="addRecord.php" method="POST">
  

  <!-- test -->
  <div class="col-md-6" data-aos="fade-down">
    <label for="inputState" class="form-label">Court Name</label>
    <select id="courtname" class="form-select text-center shadow rounded" name="courtname" >      
      <option selected value="DJ">District & Sessions Court JSO</option>
      <option value="ADJ-I">Additional Court-I, Kotri</option>
      <option value="ADJ-II">Additional Court-II, Kotri</option>
      <!--<option value="ADJ-S">Additional Court, Sehwan</option>-->
      <!--<option value="SENIOR-I">Senior / Assistant Sessions Court-I, Kotri</option>-->
      <!--<option value="SENIOR-II">Senior / Assistant Sessions Court-II, Kotri</option>-->
      <!--<option value="SENIOR-S">Senior / Assistant Sessions Court, Sehwan</option>-->
      <!--<option value="CJJM-I-K">Civil Court-I, Kotri</option>-->
      <!--<option value="CJJM-II-K">Civil Court-II, Kotri</option>-->
      <!--<option value="CJJM-CONSUMER">Consumer Protection Court</option>-->
      <!--<option value="CJJM-FAMILY">Family Court JSO</option>-->
      <!--<option value="CJJM-I-S">Civil Court-I, Sehwan</option>-->
      <!--<option value="CJJM-II-S">Civil Court-II, Sehwan</option>-->
      <option value="CJJM-III-TBK">Civil Court-III, Sehwan @ TBK</option>
      <!--<option value="CJJM-MANJHAND">Civil Court Manjhand</option>-->
      <option value="all">ALL</option>      
    </select>
  </div>
  <div class="col-md-6" data-aos="fade-down">
    <label for="inputState" class="form-label">Case / Appln Category</label>
    <select id="inputState" class="form-select text-center shadow rounded" name="casecateg" >
      
      <option selected id="casecateg" value="criminal">Criminal</option>
      <option value="Bail">Bail</option>
      <option value="Civil">Civil</option>
      <option value="Family">Family</option>
      <option value="Misc">MiscAppln</option>
      <option value="Other">Other</option>
    </select>
  </div>
  <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Case Number</label>
    <input required type="number" class="form-control text-center shadow rounded" id="inputPassword4" name="caseno">
  </div>
  <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Case Year</label>
    <input required type="number" class="form-control text-center shadow rounded" id="inputPassword4" name="year">
  </div>
  <div class="col-md-3">
    <label for="inputAddress" class="form-label">Party One</label>
    <input required type="text" class="form-control text-center shadow rounded" id="inputAddress" name="partyone">
  </div>
  <div class="col-md-3">
    <label for="inputAddress2" class="form-label">Party Two</label>
    <input type="text" class="form-control text-center shadow rounded" id="inputAddress2" name="partytwo">
  </div>
  <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Crime Number</label>
    <input type="number" class="form-control text-center shadow rounded" name="crimeno" id="inputPassword4">
  </div>

  <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Crime Year</label>
    <input type="number" class="form-control text-center shadow rounded" name="crimeyear" id="inputPassword4">
  </div>
  

  <div class="col-md-3">
    <label for="inputSyaye" class="form-label">Police Station</label>
    <select id="ps" class="form-select text-center shadow rounded" name="ps" >      
      <option selected value="Jamshoro">Jamshoro</option>
      <option value="Kotri">Kotri</option>      
      <option value="Railway">Railway</option>
      <option value="Excise & ANF">Excise & ANF</option>
      <option value="Sehwan">Sehwan</option>
      <option value="Looni Kot">Looni Kot</option>      
      <option value="Bhaan Saeedabad">Bhaan Saeedabad</option>
      <option value="Manjhand">Manjhand</option>
      <option value="Nooriabad">Nooriabad</option>
      <option value="Chachar">Chachar</option>
      <option value="Coal Mines">Coal Mines</option>
      <option value="Khanoth">Khanoth</option>
      <option value="Budhapur">Budhapur</option>
      <option value="Thebat">Thebat</option>
      <option value="Rajri">Rajri</option>
      <option value="Naing Sharif">Naing Sharif</option>
      <option value="Amri">Amri</option>
      <option value="Mahi Otho">Mahi Otho</option>
      <option value="Khero Dero">Khero Dero</option>
      <option value="Jhangara">Jhangara</option>
      <option value="Thano Bula Khan">Thano Bula Khan</option>
      <option value="Budhapur">Budhapur</option>
      <option value="other">Other PS</option>
      <option value="NILL">Nill</option>
    </select>
  </div>

  <div class="col-md-3" data-aos="fade-down">
    <label for="underSection" class="form-label">UnderSection</label>
    <input required type="text" class="form-control text-center shadow rounded" id="underSection" name="underSection">
  </div>
  
  <!-- <div class="col-md-3">
    <label for="date" class="form-label">DateOfInst</label>
    <input type="date" class="form-control text-center shadow rounded" name="dateInst" id="date">
  </div> -->
  <div class="col-md-3">
    <label for="date" class="form-label">DateOfDisp</label>
    <input required type="date" class="form-control text-center shadow rounded" name="dateDisp" id="date">
  </div>
  
  <!-- <div class="col-md-3">
    <label for="date" class="form-label">DateOfSubmission</label>
    <input type="date" class="form-control text-center shadow rounded" name="dateSubmission" id="date">
  </div> -->

  <div class="col-md-3">
    <label for="status" class="form-label">Case Status</label>
    <select id="status" name="status" class="form-select text-center shadow rounded" >      
      <option id="LyingWithRecord" value="LyingWithRecord">Lying with Record</option>
      <option id="DistrictTransffer" value="DistrictTransffer">District Transferred</option>
      <option id="LyingWithClerk" value="LyingWithClerk">Lying with Clerk</option>
      <option id="LyingWithOneWindow" value="LyingWithOneWindow">Lying with One Window</option>
      <option id="RemandBack" value="RemandBack">Case Remanded Back</option>
      <!-- TransferredOutDistrict -->
    </select>
  </div> 

  <div class="col-md-3 text-center">
    <label for="status" class="form-label">ShelfNo</label>
    <select id="shelf" name="shelf" class="form-select text-center shadow rounded" >      
    <option id="A" value="A" class="text-center">A</option>
                <option id="B" value="B" class="text-center">B</option>
                <option id="C" value="C" class="text-center">C</option>
                <option id="A" value="D" class="text-center">D</option>
                <option id="B" value="E" class="text-center">E</option>
                <option id="C" value="F" class="text-center">F</option>
                <option id="A" value="G" class="text-center">G</option>
                <option id="B" value="H" class="text-center">H</option>
                <option id="C" value="I" class="text-center">I</option>
                <option id="A" value="J" class="text-center">J</option>
                <option id="B" value="K" class="text-center">K</option>
                <option id="C" value="L" class="text-center">L</option>
                <option id="A" value="M" class="text-center">M</option>
                <option id="B" value="N" class="text-center">N</option>
                <option id="C" value="O" class="text-center">O</option>
                <option id="A" value="P" class="text-center">P</option>
                <option id="B" value="Q" class="text-center">Q</option>
                <option id="C" value="R" class="text-center">R</option>
                <option id="A" value="S" class="text-center">S</option>
                <option id="B" value="T" class="text-center">T</option>
                <option id="C" value="U" class="text-center">U</option>
                <option id="A" value="V" class="text-center">V</option>
                <option id="B" value="W" class="text-center">W</option>
                <option id="C" value="X" class="text-center">X</option>
                <option id="A" value="Y" class="text-center">Y</option>
                <option id="B" value="Z" class="text-center">Z</option>
      <!-- TransferredOutDistrict -->
    </select>
  </div> 

  <div class="col-md-3">    
    <label for="inputCity" class="form-label">Row NO</label>
    <input required type="number" class="form-control text-center shadow rounded" name="row" id="row">
  </div>

  <div class="col-md-3">    
    <label for="inputCity" class="form-label">Bundle No</label>
    <input required type="number" class="form-control text-center shadow rounded" name="bundle" id="bundle">
  </div>

  <div class="col-md-3">    
    <label for="inputCity" class="form-label">File No</label>
    <input required type="number" class="form-control text-center shadow rounded" name="file" id="file">
  </div>

  <div class="col-md-6">
    <label for="inputCity" class="form-label">Remarks</label>
    <input type="text" class="form-control text-center shadow rounded" name="remarks" id="remarks">
  </div>
  
  
  <div class="col-12 text-center mt-5 mb-1">
    <button type="submit" class="btn btn-success btn-lg w-50 " name="submit">Submit</button>
  </div>
  <div class="col-12 text-center mt-5 mb-5">
    <a href="receiptPrint.php" style="text-decoration:none; font-weight:bold; font-size:1rem;" class="btn btn-success shadow round">Print Record Receipt</a>
  </div>
</form>
<!-- form control end -->

<!-- REPORT CARDS START -->


<!-- ID Generated   -->


<?php
if(isset($_POST['submit']))
{
    include "dbconn.php";
    $courtname     = trim($_POST['courtname']);
    $casecateg     = trim($_POST['casecateg']);
    $caseno        = trim($_POST['caseno']);
    $year          = trim($_POST['year']);
    $partyone      = trim($_POST['partyone']);
    $partytwo      = trim($_POST['partytwo']);
    $crimeno       = trim($_POST['crimeno']);
    $crimeyear     = trim($_POST['crimeyear']);
    $underSection  = trim($_POST['underSection']);
    $ps            = trim($_POST['ps']);
    //$dateInst      = trim($_POST['dateInst']); 
    $dateDisp      = trim($_POST['dateDisp']); 
    //$dateSubmission    = trim($_POST['dateSubmission']);
    $shelf         = trim($_POST['shelf']);
    $row         = trim($_POST['row']);
    $bundle         = trim($_POST['bundle']);
    $file         = trim($_POST['file']);
    $status        = trim($_POST['status']);    
    $remarks = trim($_POST['remarks']);
    
    // $imagename = $_FILES['image']['name'];
    // $temp_name = $_FILES['image']['tmp_name'];
    // move_uploaded_file($temp_name,"../dataimg/$imagename");

    $qry ="INSERT INTO `ctccc`(`courtname`, `casecateg`, `caseno`, `year`, `partyone`,`partytwo`,`crimeno`,`crimeyear`,`underSection`, `ps`, `dateDisp`, `shelf`, `status`, `remarks`, `row`, `bundle`, `file` ) VALUES ('$courtname', '$casecateg', '$caseno', '$year', '$partyone', '$partytwo','$crimeno','$crimeyear', '$underSection', '$ps','$dateDisp', '$shelf', '$status', '$remarks', '$row', '$bundle', '$file' )";
    

    $run = mysqli_query($con,$qry);
    
    $last_id = null;

    if($run == false)
    {
        $error = mysqli_error($con);
        // echo "Error: $error";
        ?>
          <script>
            alert("Fill all fields first");
          </script>
        <?php
    }
    else
    {
        ?>
            <script>
                alert("success");
            </script>
            
        <?php
        
        // Last Row Record Generated Start
        $last_id = $con->insert_id;
        // echo "New record created successfully. Last inserted ID is: " . $last_id;
        // Last Row Record Generated Start
       // $last_file = $con->insert_file;
        // echo "New record created successfully. Last inserted ID is: " . $last_id;
       
        ?>
            <h1 class="id">
              <?php echo "Record id is:"."  " . $last_id; ?>
            </h1>
            
            
            <!-- // Last Row Record Generated Stop -->
            
            
            <?php
            // Perform a SELECT query to fetch the last inserted record based on its ID
$select_query = "SELECT file FROM ctccc WHERE id = $last_id";
$result = mysqli_query($con, $select_query);

// Check if the query was successful and if a record was found
if ($result && mysqli_num_rows($result) > 0) {
    // Fetch the record as an associative array
    $record = mysqli_fetch_assoc($result);
    
    // Extract the value of the "file" field
    $file_value = $record['file'];
    
    // Display the last inserted ID and the "file" field value
    
    //echo "Last inserted ID: $last_id";
    ?>
      <h1><?php echo "File Number: $file_value";  ?> </h1>
    <?php
    //edited
} else {
    // Handle the case where no record was found
    echo "No record found for the last inserted ID: $last_id";
}

            ?>
        <?php
        ?>
            <script>
            if ( window.history.replaceState )
            {
              window.history.replaceState( null, null, window.location.href );
            }
            </script>
        <?php
    }   
}

?>
<!-- Stops page data submission upon page refresh or submitting empty value START-->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<!-- Stops page data submission upon page refresh or submitting empty value END -->


</body>
</html>


