<?php
	include __DIR__."/inc/header.inc.php";
    $heading = "File Upload Project";

?>

<div class="container">
        <div class="row bg-success">
            <!-- for left aside  -->
            <div class = "col-md-3 bg-light"></div>
            <div class = "col-md-6 bg-dark">
            <div class="form-group text-white bg-primary mb-3 p-2"><span><h1 class="text-center mb-20"><?=$heading;?></h1> </span></div>
                <form class="bg-light p-20 border border-4 shadow-sm" action="upload.php" method="POST" enctype="multipart/form-data"> 
                  <!-- For input fieldset  -->
                    <fieldset class="bg-light m-5 " >
                    <div class="row mb-3">
                        <label for="file">Choose a file:</label>
                        <input type="file" class="form-control-md" id="exampleFormControlInput1" placeholder="Choose a file" name="file" required><br>
                    </div>
                   </fieldset> 
                        <!-- For submit field set  -->
                    <fieldset class="center bg-light m-5">
                        <div class="row mb-3 form-control-md"><input type="submit" value="Upload" name= "submit"></div>
                    </fieldset>
            </div>
             <!-- For write aside -->
            <div class = "col-md-3 bg-light" ></div>
            
                </div>
            </div>
           
        
    <?=include __DIR__. "/inc/footer.inc.php";?>

   