<?php
$con = mysqli_connect('localhost','root','toor','record' );
if($con == false){
    // echo "Connection failed";
    ?>
    <script>
        alert('Not Done');
    </script>
    <?php
} else {
    // echo "Success";
    ?>
    <!-- <script>
        alert('Conneted to Database');
    </script> -->
    <?php
}
?>