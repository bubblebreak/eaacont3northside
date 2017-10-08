<?php 

    //pageheader
    $siteTitle = 'Stage assigned';

    include('includes/header.php');
?>

<?php 

    // Connect to the database
    include('includes/connectdb.php');

    // Get data from submit-form and store it in a variable
    $day =$_POST['day'];
    $hour =$_POST['hour'];
    $stageid =$_POST['stageid'];
    $artistid =$_POST['artistid'];

    // Prepare SQL-Query for insert operation - everything typed within this is all SQL
    $insertQuery = "INSERT INTO stageartist(artistid, stageid, day, hour) VALUES('$artistid','$stageid','$day','$hour')";


    // Execute SQL-query
    mysqli_query($dbc, $insertQuery) or die ('Error querying the SQL-query'); //post error message if any issues occour

?>


<article class="introduction">

    <img src="img/logo.png" alt="" class="logo">
  
    <h2 class="">Success</h2>

</article>

<div class="row front-page-style border">  
   
   <?php 
    
        // including the artist data
        $artistQuery = "SELECT id, name FROM artist WHERE id='$artistid'";
        // Execute the SQL-query $artistQuery
        $resultartistQuery =mysqli_query($dbc,$artistQuery);
                     
        
        $row = mysqli_fetch_array($resultartistQuery);
    ?>
   
    <div class="">
        <h2>You have now successfully assigned a stage to <?php echo $row['name']; ?>.</h2>
    </div> <!-- END panel-body -->
    
    <div class="">
            <a href="index.php">Go back</a>
    </div> <!-- END panel-footer -->
    
</div> <!-- END divspace -->

<?php

    // Close database connection
    mysqli_close($dbc);    

?>


