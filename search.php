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


<div class="container mt-5">
    <h2 class="mb-4">Generate Report</h2>
    <form action="searchResult.php" method="GET" id="myForm">
        <div class="row mb-3">


        <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Case Number</label>
    <input type="number" class="form-control text-center shadow rounded" id="inputPassword4" name="caseno">
  </div>
  <div class="col-md-3">
    <label for="inputPassword4" class="form-label">Case Year</label>
    <input type="number" class="form-control text-center shadow rounded" id="inputPassword4" name="year">
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
    <option selected value="all">ALL</option>      
      <option value="Jamshoro">Jamshoro</option>
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

  <div class="col-md-3">
    <label for="inputAddress" class="form-label">Party One</label>
    <input type="text" class="form-control text-center shadow rounded" id="inputAddress" name="partyone">
  </div>

  <div class="col-md-3">
    <label for="inputAddress2" class="form-label">Party Two</label>
    <input type="text" class="form-control text-center shadow rounded" id="inputAddress2" name="partytwo">
  </div>


            <!--<div class="col-md-3">-->
            <!--    <label for="start_date" class="form-label">From Date:</label>-->
            <!--    <input type="date" name="start_date" id="start_date" class="form-control text-center shadow rounded">-->
            <!--</div>-->
            <!--<div class="col-md-3">-->
            <!--    <label for="end_date" class="form-label">To Date:</label>-->
            <!--    <input type="date" name="end_date" id="end_date" class="form-control text-center shadow rounded">-->
            <!--</div>-->
            <div class="col-md-3">
                <label for="courtname" class="form-label ">Court Name:</label>
                <select name="courtname" id="courtname" class="form-select text-center shadow rounded">
                <option selected value="all">ALL</option>
                <option value="DJ">District & Sessions Court JSO</option>
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
                <!--<option value="CJJM-MANJHAND">Civil Court Manjhand</option>                 -->
                </select>
            </div>
            <div class="col-md-4">
                <label for="status" class="form-label">Status:</label>
                <select name="status" id="status" class="form-select text-center shadow rounded">
                <option selected value="all">All</option>
                    <option value="LyingWithRecord">Lying With Record</option>
                    <option value="DistrictTransffer">District Transffer</option>
                    <option value="LyingWithClerk">Lying With Clerk</option>
                    <option  id="LyingWithOneWindow" value="LyingWithOneWindow">Lying with One Window</option>
                    <option  id="RemandBack" value="RemandBack">Case Remanded Back</option>
                </select>
            </div>
            <!-- <div class="col-md-4">
                <label for="court_name" class="form-label">Court Name:</label>
                <input type="text" name="court_name" id="court_name" class="form-control">
            </div> -->
            <div class="col-md-4 text-center">
                <label for="status" class="form-label">ShelfNo</label>
                <select id="shelf" name="shelf" class="form-select text-center shadow rounded" >      
                <option selected id="all" value="all" class="text-center">All</option>
                <option id="A" value="A" class="text-center">A</option>
                <option id="B" value="B" class="text-center">B</option>
                <option id="C" value="C" class="text-center">C</option>
                <option id="D" value="D" class="text-center">D</option>
                <option id="E" value="E" class="text-center">E</option>
                <option id="F" value="F" class="text-center">F</option>
                <option id="G" value="G" class="text-center">G</option>
                <option id="H" value="H" class="text-center">H</option>
                <option id="I" value="I" class="text-center">I</option>
                <option id="J" value="J" class="text-center">J</option>
                <option id="K" value="K" class="text-center">K</option>
                <option id="L" value="L" class="text-center">L</option>
                <option id="M" value="M" class="text-center">M</option>
                <option id="N" value="N" class="text-center">N</option>
                <option id="O" value="O" class="text-center">O</option>
                <option id="P" value="P" class="text-center">P</option>
                <option id="Q" value="Q" class="text-center">Q</option>
                <option id="R" value="R" class="text-center">R</option>
                <option id="S" value="S" class="text-center">S</option>
                <option id="T" value="T" class="text-center">T</option>
                <option id="U" value="U" class="text-center">U</option>
                <option id="V" value="V" class="text-center">V</option>
                <option id="W" value="W" class="text-center">W</option>
                <option id="X" value="X" class="text-center">X</option>
                <option id="Y" value="Y" class="text-center">Y</option>
                <option id="Z" value="Z" class="text-center">Z</option>
                
                <!-- TransferredOutDistrict -->
                </select>
            </div>

            <div class="col-md-4">
    <label for="inputPassword4" class="form-label">bundle</label>
    <input type="number" class="form-control text-center shadow rounded" name="bundle" id="inputPassword4">
     </div>
        
        
        
        </div>
        <div class="row mb-3 text-center">            
            <div class="col-md-12">
                <button type="submit" class="btn btn-success btn-lg mt-2">Search</button>
            </div>
        </div>

        
    </form>
</div>
<script>
    // Set the content of the new window
    printWindow.document.body.innerHTML = tableDataString;
</script>

<!-- Stops page data submission upon page refresh or submitting empty value START-->
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }

</script>
<!-- Stops page data submission upon page refresh or submitting empty value END -->

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-eUHJ3A5Cf7pyRffLZ/Dagx3lfUq76EdW8eN7eUtjhKp5AR6Vr+Qe4izfcSeJfBA" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-eUHJ3A5Cf7pyRffLZ/Dagx3lfUq76EdW8eN7eUtjhKp5AR6Vr+Qe4izfcSeJfBA" crossorigin="anonymous"></script>
</body>
</html>
