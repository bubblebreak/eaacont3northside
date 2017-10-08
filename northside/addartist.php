<?php 

    //Page header
    $siteTitle = 'Include new artist';

    //link to the header
    include('includes/header.php');

?>

<article class="introduction">

   <img src="img/logo.png" alt="" class="logo">
    
    <h2 class="">Include new artists</h2>

</article>
   
<div class="row front-page-style border">  


   <!-- form:post with Emmet-->
   <form action="addingartist.php" method="post">
       
       <div class="">   
           <label for="artistname">Artistname:</label>
           <br>
           <input type="text" name="artistname" id="artistname" class="" placeholder="Artist name" required>
           <!-- END artistname-field -->
       </div> <!-- END form-group artistname -->
          
       <div class="">
           <label for="genre">Genre:</label>
           <br>
           <input type="text" name="genre" id="genre" class="" placeholder="Genre" required>
           <!-- END genre -->
        </div> <!-- END form-group genre -->
              
        <div class="">
           <label for="members">How many people will perform, including band:</label>
           <br>
           <input type="number" name="members" id="members" class="" min="0" max="99" step="1" value="1" required>
           <!-- END members-field -->
        </div> <!-- END form-group members -->
            
           <input type="submit" value="submit" class="submit">
           
   </form> <!-- END form -->
   
   <div class="">
            <a href="index.php">Go back</a>
    </div>

</div>

<?php 
include('includes/footer.php'); 
?>

