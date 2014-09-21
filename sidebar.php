<div id="sidebar">
      <!--  <div class="sidebox">
		
	<!--	<ul class="socialicons">
                	<p><a href="#" class="social-text">Join with:</a></li>
                	<li><a href="http://facebook.com/tanvir.ami" class="social-facebook"></a></li>
                    <li><a href="#" class="social-twitter"></a></li>
                    <li><a href="#" class="social-in"></a></li>
                    <li><a href="#" class="social-googleplus"></a></li>
                </ul>
				
     <!--     <h1>Short About</h1>  
          
        </div> -->
        <div class="sidebox">
          <h1 class="clear">Category</h1>
          <ul class="sidemenu">
           
           <?php
		   foreach($obj->showCategory() as $val){
		   extract($val)
		   ?>
		   <li><a href="index.php?cat_id=<?php echo $cat_id; ?> " ><?php echo $cat_name; ?></a></li>
		   <?php
		   }
		   ?>
          </ul>
        </div>
        <div class="sidebox">
          <h1>Sponsors</h1>
          <ul class="sidemenu">
            <li><a href="#" class="top">IBCS-PRIMAX</a></li>
            <li><a href="#">w3programmers</a></li>
            <li><a href="#">logical-coding</a></li>

          </ul>
        </div>