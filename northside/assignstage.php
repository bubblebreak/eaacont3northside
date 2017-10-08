<?php 

    //Page header
    $siteTitle = 'Assign stage';
 
    //link to the header
    include('includes/header.php');

?>

<article class="introduction">

    <img src="img/logo.png" alt="" class="logo">
  
    <h2 class="">Assign a band a stage</h2>

</article>

<div class="row front-page-style border">  

   <form action="assigningstage.php" method="post">
          
       <div class="">
        <label for="day">Day:</label>
           <br>
        <input type="date" name="day" id="day" class="" placeholder="day" required>
        <!-- END day -->
        </div> <!-- END form-group day -->
             
              
        <div class="">
        <label for="hour">When:</label>
           <br>
        <input type="time" name="hour" id="hour" class="" placeholder="hour" required>
        <!-- END hour-field -->
        </div> <!-- END form-group hour -->
            
        <!-- Include Database connection -->
               <?php 

                    //Allow artist and stage to be gathered from the database
                    include('includes/connectdb.php');

                    //making SQL-query to the database

                    // including the artist data
                    $artistQuery = "SELECT id, name FROM artist";
                    // Execute the SQL-query $artistQuery
                    $resultartistQuery = mysqli_query($dbc,$artistQuery);

                    // including the stage data
                    $stageQuery = "SELECT id, color FROM stage";
                    // Execute the SQL-query $stageQuery
                    $resultstageQuery = mysqli_query($dbc,$stageQuery);
               ?>

       
        <div class="">
        <label for="stage">Stage:</label>
            <br>
        <select name="stageid" id="stageid" class="">

                   <?php
                        //Looping through php array with platforms
                        while($row = mysqli_fetch_array($resultstageQuery)):

                   ?>

                   <option value="<?php echo $row['id']; ?>"> <?php echo $row['color']; ?></option> 

                   <?php
                        //end the loop
                        endwhile;   
                   ?>
               
        </select>
        </div> <!-- END form-group stage-->
          
           
        <div class="">
        <label for="artist">Artist:</label>
           <br>
        <select name="artistid" id="artistid" class="">

               <?php                   
                   //Looping through php array with artists
                    while($row = mysqli_fetch_array($resultartistQuery)):
                   
               ?>
               
               <option value="<?php echo $row['id']; ?>"> <?php echo $row['name']; ?></option>
               
               <?php
                    //end the loop
                    endwhile;   
               ?>
               
        </select>
        </div> <!-- END form-group Publishers-->
           
           <br>
           <br>
           
        <input type="submit" value="submit" class="submit">
           
   </form> <!-- END form -->
   
   <div class="">
            <a href="index.php">Go back</a>
    </div>

</div>
<?php 
include('includes/footer.php'); 
?>

