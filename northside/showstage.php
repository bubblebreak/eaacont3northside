<?php 

    //Page header
    $siteTitle = 'Stage information';
  
    //link to the header
    include('includes/header.php');

?>

<?php 

    //Allow artist information to be gathered from the database
    include('includes/connectdb.php');

    // making SQL-query to the database
    // Gathering ALL data

    // including the artist data
    $artistQuery = "SELECT id, name, genre, members  FROM artist";
    // Execute the SQL-query $artistQuery
    $resultartistQuery = mysqli_query($dbc,$artistQuery);

    // including the stageartist data
    $stageartistQuery = "SELECT id, artistid, stageid, day, hour FROM stageartist";
    // Execute the SQL-query $stageartistQuery
    $resultstageartistQuery = mysqli_query($dbc,$stageartistQuery);
    
   

    // All artist data
    $artist =mysqli_fetch_array($resultartistQuery);

    // All stageartist data
    $stageartist =mysqli_fetch_array($resultstageartistQuery);



    // Blue stage
    $bluestageQuery = "SELECT id, color, size, location FROM stage WHERE id=1";
    // Execute the SQL-query $stageQuery
    $resultbluestageQuery = mysqli_query($dbc,$bluestageQuery);
    $bluestage =mysqli_fetch_array($resultbluestageQuery);

    // Red stage
    $redstageQuery = "SELECT id, color, size, location FROM stage WHERE id=2";
    // Execute the SQL-query $stageQuery
    $resultredstageQuery = mysqli_query($dbc,$redstageQuery);
    $redstage =mysqli_fetch_array($resultredstageQuery);

    // Green stage
    $greenstageQuery = "SELECT id, color, size, location FROM stage WHERE id=3";
    // Execute the SQL-query $stageQuery
    $resultgreenstageQuery = mysqli_query($dbc,$greenstageQuery);
    $greenstage =mysqli_fetch_array($resultgreenstageQuery);

    // Yellow stage
    $yellowstageQuery = "SELECT id, color, size, location FROM stage WHERE id=4";
    // Execute the SQL-query $stageQuery
    $resultyellowstageQuery = mysqli_query($dbc,$yellowstageQuery);
    $yellowstage =mysqli_fetch_array($resultyellowstageQuery);
    
?>


<article class="introduction">

    <img src="img/logo.png" alt="" class="logo">
  
    <h2 class="">Stage information</h2>

</article>

<div class="row front-page-style border" id="stagetable"> 
  <!-- Table to present data -->
    <table>
        
        <tr id="tabletitle">
          <th>Stage</th>
          <th>Location</th>
          <th>Size</th>
          <th>Artist</th>
        </tr>
  
        <!-- Row 1 -->
        <tr>
          <td class="table-light showtable"><?php echo $bluestage['color']; ?></td>
          <td class="showtable"><?php echo $bluestage['location']; ?></td>
          <td class="table-light showtable"><?php echo $bluestage['size']; ?></td>
          <td class="showtable">blabla</td>
        </tr>
        
        <!-- Row 2 -->
        <tr>
          <td class="table-light showtable"><?php echo $redstage['color']; ?></td>
          <td class="showtable"><?php echo $redstage['location']; ?></td>
          <td class="table-light showtable"><?php echo $redstage['size']; ?></td>
          <td class="showtable">blabla</td>
        </tr>
        
        <!-- Row 3 -->
        <tr>
          <td class="table-light showtable"><?php echo $greenstage['color']; ?></td>
          <td class="showtable"><?php echo $greenstage['location']; ?></td>
          <td class="table-light showtable"><?php echo $greenstage['size']; ?></td>
          <td class="showtable">blabla</td>
        </tr>
        
        <!-- Row 4 -->
        <tr>
          <td class="table-light showtable"><?php echo $yellowstage['color']; ?></td>
          <td class="showtable"><?php echo $yellowstage['location']; ?></td>
          <td class="table-light showtable"><?php echo $yellowstage['size']; ?></td>
          <td class="showtable">blabla</td>
        </tr>
    </table>
    
   <br>
   <br>
   
      
    <div class="">
            <a href="index.php">Go back</a>
    </div>
   
</div>
    