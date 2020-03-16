<?php
    // Connect to MySQL
    include("connect.php");

    // Prepare the SQL statement
      date_default_timezone_set('Asia/karachi');
     $dateS = date('m/d/Y h:i:s', time());
    echo $dateS;
    $SQL = "INSERT INTO gsm_data (date,country,Brand,Operator,MCC,MNC,LAC,CellID) VALUES ('$dateS' ,'".$_GET["Country"]."','".$_GET["Brand"]."' ,'".$_GET["Operator"]."' ,'".$_GET["MCC"]."' ,'".$_GET["MNC"]."','".$_GET["LAC"]."','".$_GET["CellID"]."')";     

    // Execute SQL statement
    $insert=mysqli_query($con,$SQL);

    // Go to the review_data.php (optional)
    header("Location: index.php");
?>