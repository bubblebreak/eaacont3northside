<?php 

    //pageheader
    $siteTitle = 'Stage edited';
 
    include('includes/header.php');
?>

<!-- Include Database connection -->
<?php 

    //Allow artist information to be gathered from the database
    include('includes/connectdb.php');

    // Get data from search area and store it in a variable
    $band =$_POST['band'];    

    //making SQL-query to the database

    // including the artist data
    $artistQuery = "SELECT id, name, genre, members  FROM artist WHERE id='$band'";
    // Execute the SQL-query $artistQuery
    $resultartistQuery = mysqli_query($dbc,$artistQuery);

    // fetch data from the MySQL database - Defining bandinformation
    $row =mysqli_fetch_array($resultartistQuery);


    // Include stage information

    // including the stageartist data
    $stageartistQuery = "SELECT stageid, day, hour FROM stageartist WHERE artistid LIKE '$band'";
    // Execute the SQL-query $stageartistQuery
    $resultstageartistQuery = mysqli_query($dbc,$stageartistQuery);
    
    // Define stage id
    $stageid =mysqli_fetch_array($resultstageartistQuery);


    
    // including the stage data
    $stageQuery = "SELECT color FROM stage WHERE id='$stageid[stageid]'";
    // Execute the SQL-query $stageQuery
    $resultstageQuery = mysqli_query($dbc,$stageQuery);

    $stagename =mysqli_fetch_array($resultstageQuery);
    
    
?>

<article class="introduction">

    <img src="img/logo.png" alt="" class="logo">
  
    <h2 class="">Information for <?php echo $row['name']; ?></h2>

</article>

<div class="row front-page-style border"> 
  <!-- Table to present data -->
    <table>
        <!-- Row 1 -->
        <tr id="tabletitle">
          <th>Artist Name</th>
          <th>Genre</th>
            <th>Performers</th>
        </tr>
  
        <!-- Row 2 -->
        <tr>
          <td class="table-light"><?php echo $row['name']; ?></td>
          <td><?php echo $row['genre']; ?></td>
          <td class="table-light"><?php echo $row['members']; ?></td>
        </tr>
    </table>
    
   <br>
   <br>
   
   <table>
        <!-- Row 1 -->
        <tr id="tabletitle">
          <th>Assigned stage</th>
          <th>Date</th>
          <th>Time</th>
        </tr>
  
        <!-- Row 2 -->
        <tr>
          <td class="searchtable"><?php echo $stagename['color']; ?></td>
          <td class="table-light searchtable"><?php echo $stageid['day']; ?></td>
          <td class="searchtable"><?php echo $stageid['hour']; ?></td>
        </tr>
    </table>
   
   <br>
   <br>

   
    <h3>Search for artist information</h3>
        <form action="searching.php" method="post">
            <select name="band" id="band">
            
        <!-- Include database connection -->        
        <?php 
            
            // making SQL-query to the database
        
            // including the artist data from the full table
            $fullartistQuery = "SELECT id, name FROM artist";
            // Execute the SQL-query $fullartistQuery
            $resultfullartistQuery =mysqli_query($dbc,$fullartistQuery);
                     
            //Looping through php array with artists
            while($fullartists = mysqli_fetch_array($resultfullartistQuery)):
                   
        ?>
               
            <option value="<?php echo $fullartists['id']; ?>"> <?php echo $fullartists['name']; ?></option>
               
        <?php
            //end the loop
            endwhile;   
        ?>
            </select>
        <input type="submit" class="">
        </form>
        
    <br>
    <br>  
      
    <div class="">
            <a href="index.php">Go back</a>
    </div>
   
</div>
    