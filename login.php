<?php
session_start();
if(isset($_SESSION['uid']))
{
    header('location:admindash.php');
}
?>

<?php
include "dbconn.php";

if(isset($_POST['login']))
{
    $username = $_POST['uname'];
    $password = $_POST['pass'];

    $qry = "SELECT * FROM `admin` WHERE `username` = '$username' AND `password` = '$password';";
    $run = mysqli_query($con,$qry);
    $row = mysqli_num_rows($run);
    if($row < 1){
        ?>
            <script>
                alert("INVALID LOGIN!!");
            </script>
        <?php
    }
    else
    {
        $data = mysqli_fetch_assoc($run);
        $id = $data['id'];
        // echo $id;
        // session_start();
        $_SESSION['uid'] = $id;
        header('location:admindash.php');
    }

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
    <title>ONE WINDOW || CTC</title>
</head>
<body>

    <div class="container-fluid">        
        <div class="row">
            <div class="col-md-12 text-center text-primary shadow rounded mt-1">
                <h1 class="fw-bold text-success">District & Sessions Court Jamshoro</h1>
                <h2 class="text-success">E-Record Room || Sessions Courts</h2>               
            </div>
        </div>
    </div>    


    <div class="container-fluid text-center">
        <div class="row mx-auto mt-4 w-50 rounded shadow text-center">
            <div class="col-12">
                <form action="login.php" method="POST" class="form">
                    <table class="table mt-5">
                        <tr>
                            <td class="text-success">
                                User Name
                            </td>
                            <td>
                                <input type="text" name="uname" style="border:1px solid green" class="rounded shadow" placeholder="Enter User Name">
                            </td>
                        </tr>
                        <tr>
                            <td class="text-success">
                                Password
                            </td>
                            <td>
                                <input type="password" name="pass" style="border:1px solid green" class="rounded shadow" placeholder="Enter Password">
                            </td>
                        </tr>                        
                    </table>
                    
                    <button class="btn btn-success btn-lg rounded shadow mt-4" name="login" type="login" style="margin-bottom:3rem !important;">LOGIN</button>                                        
                </form>
            </div>
        </div>
    </div>
        

<script src="js/bootstrap.js"></script>
</body>
</html>

