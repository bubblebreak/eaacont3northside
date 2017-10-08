<?php 

    //pageheader
    $siteTitle = 'Artist included';
 
    include('includes/header.php');
?>
<?php 

    // Connect to the database
    include('includes/connectdb.php');

    // Get data from submit-form and store it in a variable
    $artistname =$_POST['artistname'];
    $genre =$_POST['genre'];
    $members =$_POST['members'];

    // Prepare SQL-Query for insert operation - everything typed within this is all SQL
    $query = "INSERT INTO artist(name,genre,members) VALUES('$artistname', '$genre', '$members')";

    // Execute SQL-query
    mysqli_query($dbc, $query) or die ('Error querying the SQL-query'); //post error message if any issues occour

?>

<article class="introduction">

    <img src="img/logo.png" alt="" class="logo">
  
    <h2 class="">Success</h2>

</article>

<div class="row front-page-style border">  
    
    <div class="">
        <h2>You have now successfully added <?php echo $artistname; ?> to the artist archive.</h2>
    </div> <!-- END panel-body -->
    
    <div class="">
            <a href="index.php">Go back</a>
    </div> <!-- END panel-footer -->
    
</div> <!-- END divspace -->

<?php

    // Close database connection
    mysqli_close($dbc);    

?>


