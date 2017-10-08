<?php 

    //Page header
    $siteTitle = 'Northside editing';

    //link to the header
    include('includes/header.php');

?>

<article class="introduction">

    <img src="img/logo.png" alt="" class="logo">
  
    <h2 class="">Northside 2018</h2>

</article>
   
    <div class="row front-page-style border">    
        
    <article>
       
       <h3>Search for artist information</h3>
        <form action="searching.php" method="post">
            <select name="band" id="band">
            
        <!-- Include database connection -->        
        <?php 
            
            // Allow artist information to be collected from the database
            include('includes/connectdb.php');
        
            // making SQL-query to the database
        
            // including the artist data
            $artistQuery = "SELECT id, name FROM artist";
            // Execute the SQL-query $artistQuery
            $resultartistQuery =mysqli_query($dbc,$artistQuery);
                     
            //Looping through php array with artists
            while($row = mysqli_fetch_array($resultartistQuery)):
                   
        ?>
               
            <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
               
        <?php
            //end the loop
            endwhile;   
        ?>
            </select>
            
            <input type="submit" class="">
        </form>
        
        <br>
        <br>
        <br>
        
        <h3>Sign up artist</h3>
        <a href="addartist.php">New Artist</a>
        
        <br>
        <br>
        <br>
        
        <h3>Assign stage to band</h3>
        <a href="assignstage.php">Assign stage</a>
       
    </article>
    
    </div> <!-- END row-->

    
  
<?php 
include('includes/footer.php'); 
?>