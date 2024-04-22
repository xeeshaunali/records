<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">   
    <script src="datatable/jquery-3.7.0.js"></script>
    <title>E Record Room</title>
    <link rel="stylesheet" href="aos.css">
    <script src="aos.js"></script>
</head>
<body>
    <div class="container">        
        <div class="row">
            <div class="col-md-12 text-center text-primary shadow rounded mt-1">
                <h1 class="fw-bold text-success" >District & Sessions Court Jamshoro</h1>
                <h2 class="text-success">E-Record Room || Sessions Courts</h2>               
            </div>
        </div>
    </div>

<div class="row container-fluid mt-5 ">
        <div class="col-12 text-center">
            <a href="login.php" style="color: white !important; text-decoration:none !important;" class="btn btn-success rounded shadow mb-5">ADMIN LOGIN</a>            
        </div>
    </div>
</div>

<!--Section Two Start-->

<section class="section shadow" style="background-color:#fcfafb;">

<div class="container ">
		<div class="row text-center">
			<div class="col-lg-12 col-md-12 col-sm-12">
				<div class="inline-block">					
					<h1 class="text-success" style="font-family:calisto MT;  font-size:3rem !important;">E RECORD BOOK || SESSION COURTS</h1>		
				</div>
			</div>
		</div>	

    <div class="row container-fluid" style="margin-top:2rem;margin-right:3rem;margin: left 3rem;">
        <div class="col-12 ">
           <!-- Search input -->
    <input type="text" id="searchInput" class="form-control mb-3" placeholder="Type search query">
    <!-- CHAT GPT -->
    <table class="table table-striped table-resposive round shadow" id="dataTable">
        <thead>
            <tr>
                <th>File No</th>
                <th>ID</th>                
                <th>Court</th>
                <th>Case Categ</th>
                <th>CaseNo</th>
                <th>CaseYear</th>
                <th>PartyOne</th>
                <th>PartyTwo</th>
                <th>CrimeNO</th>
                <th>CrimeYear</th>
                <th>UnderSection</th> <!--nameappln changes to UnderSection-->
                <th>PS</th>
                <!-- <th>DateOfInst</th>  -->
                <th>DateOfDisp</th> 
                <!-- <th>DateOfSubmission</th>  -->
                <th>Shelf</th>
                <th>Row</th>
                <th>Bundle</th>
                
                <th>Status</th>
                <th>Remarks</th>

                <!-- Add more columns as needed -->
            </tr>
        </thead>
        <tbody>
            <?php
            // Your PHP code to retrieve data from PHPMyAdmin and populate the table
            include "dbconn.php";

            $result = $con->query("SELECT * FROM ctccc");

            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row["file"] . "</td>";
                    echo "<td>" . $row["id"] . "</td>";                    
                    echo "<td>" . $row["courtname"] . "</td>";
                    echo "<td>" . $row["casecateg"] . "</td>";
                    echo "<td>" . $row["caseno"] . "</td>";
                    echo "<td>" . $row["year"] . "</td>";
                    echo "<td>" . $row["partyone"] . "</td>";
                    echo "<td>" . $row["partytwo"] . "</td>";
                    echo "<td>" . $row["crimeno"] . "</td>";
                    echo "<td>" . $row["crimeyear"] . "</td>";
                    echo "<td>" . $row["underSection"] . "</td>"; //nameappln changed to underSection
                    echo "<td>" . $row["ps"] . "</td>";
                    //echo "<td>" . $row["dateInst"] . "</td>"; //datedisposal changed to dateInst
                    echo "<td>" . $row["dateDisp"] . "</td>"; //datedelev changed to dateDisp
                    //echo "<td>" . $row["dateSubmission"] . "</td>"; //datehearing changed to dateSubmission
                    echo "<td>" . $row["shelf"] . "</td>";
                    echo "<td>" . $row["row"] . "</td>";
                    echo "<td>" . $row["bundle"] . "</td>";
                    
                    echo "<td>" . $row["status"] . "</td>";
                    echo "<td>" . $row["remarks"] . "</td>";

                    // Add more columns as needed
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='2'>No records found</td></tr>";
            }

            $con->close();
            ?>
        </tbody>
    </table>

    <!-- Pagination -->
    <div class="d-flex justify-content-center">
        <ul class="pagination">
            <!-- Pagination links will be dynamically added here using JavaScript -->
        </ul>
    </div>
</div>
    <!-- CHAT GPT -->

                    <ul class="pagination" id="pagination"></ul>
        </div>
      </div>        
  </div>
</div>

 
</section>

<script>
    // Function to handle pagination
    function paginate(items, currentPage, perPage) {
        const start = (currentPage - 1) * perPage;
        const end = start + perPage;
        return items.slice(start, end);
    }

    // Function to update table rows based on current page
    function updateTableRows(currentPage, perPage) {
        const rows = $('#dataTable tbody tr');
        const paginatedRows = paginate(rows, currentPage, perPage);

        rows.hide(); // Hide all rows
        paginatedRows.show(); // Show rows for the current page
    }

    // Function to update pagination links
    function updatePaginationLinks(currentPage, totalPages) {
        const pagination = $('#pagination');
        pagination.empty(); // Clear previous pagination links

        // Add Previous Page link
        pagination.append(`<li class="page-item ${currentPage === 1 ? 'disabled' : ''}">
                            <a class="page-link" href="#" onclick="changePage(${currentPage - 1})">Previous</a>
                          </li>`);

        // Add Page links
        for (let i = 1; i <= totalPages; i++) {
            pagination.append(`<li class="page-item ${currentPage === i ? 'active' : ''}">
                                <a class="page-link" href="#" onclick="changePage(${i})">${i}</a>
                              </li>`);
        }

        // Add Next Page link
        pagination.append(`<li class="page-item ${currentPage === totalPages ? 'disabled' : ''}">
                            <a class="page-link" href="#" onclick="changePage(${currentPage + 1})">Next</a>
                          </li>`);
    }

    // Function to handle page change
    function changePage(newPage) {
        const totalPages = Math.ceil($('#dataTable tbody tr').length / 10); // Assuming 20 rows per page
        const currentPage = Math.min(Math.max(newPage, 1), totalPages); // Ensure page is within bounds

        updateTableRows(currentPage, 10); // Update table rows
        updatePaginationLinks(currentPage, totalPages); // Update pagination links
    }

    // Initialize table and pagination on page load
    $(document).ready(function () {
        updateTableRows(1, 10); // Initialize with the first page and 20 rows per page
        updatePaginationLinks(1, Math.ceil($('#dataTable tbody tr').length / 4)); // Initialize pagination links
    });

    // Function to handle search input
    $('#searchInput').on('input', function () {
        const searchTerm = $(this).val().toLowerCase();
        const rows = $('#dataTable tbody tr');

        // Filter rows based on search input
        rows.filter(function () {
            $(this).toggle($(this).text().toLowerCase().indexOf(searchTerm) > -1);
        });

        // Update pagination links after filtering
        updatePaginationLinks(1, Math.ceil(rows.filter(':visible').length / 10));
    });
</script>

  </body>
  </html>