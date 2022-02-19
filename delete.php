 <?php
    $sucsess = "";
    include 'View.php';
    mysqli_select_db($con, $query);
    $sql = "DELETE FROM `record` where User_ID = '" . $UserID . "'";
    $query = mysqli_query($con, $sql);
    if (!$query) {
        echo "Query does not work." . mysqli_error($con);
        die;
    } else {
        // echo "Data successfully delete.";
        echo "<script>alert('Data successfully delete.');</script>";
        // $sucsees = "Data successfully delete.";
    }
    ?>

 <!-- <html>
 <style>
     .sucsess {
         color: black;
         text-align: center;
     }
 </style>

 <body>
     <div class="sucsess"><?php echo $sucsess; ?></div>>
 </body>

 </html>
  -->