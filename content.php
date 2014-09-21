      <div id="main">
	  
	  <?php
	  if(isset($_REQUEST['cat_id'])){
	  $article=$obj->showArticleByCategory($_REQUEST['cat_id']);
	  foreach($article as $val){
	  extract($val);
	  ?>
        <div class="post"> <a name="TemplateInfo"></a>
          <h1><?php echo $art_title; ?></h1>
          <?php
	$str=explode(' ',$art_content);
	
	if(count($str)>50){
	$sub_art=array_slice($str,0,50);
	
	$new_art=implode(' ',$sub_art);
	
	echo $new_art;
	
}		
?>

          <p class="post-footer align-right"> <a href="index.php?art_id=<?php echo $art_id; ?>" class="readmore">Read more</a> <a href="#" class="comments">Comments (7)</a> <span class="date">Nov 11, 2006</span> </p>
        </div>
		<?php
		}
		}
		?>
		
		<?php 
		if(isset($_REQUEST['art_id'])){
		$article=$obj->showArticleDetails($_REQUEST['art_id']);
		extract($article);
		?>
		<div class="post"> <a name="TemplateInfo"></a>
          <h1><?php echo $art_title; ?></h1>
		  <?php echo $art_content; ?>
		   <p class="post-footer align-right"> <a href="#" class="comments">Comments (7)</a> <span class="date">Nov 11, 2006</span> </p>
        </div>
<?php
}
?>
  
      </div>