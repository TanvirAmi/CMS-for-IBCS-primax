   <?php
					if(isset($_REQUEST['art_id'])){
						extract($_REQUEST);
						if($admin->updateArticle($art_id,$cat_id,$art_title,$art_content,$art_status)){
							?>
							<?php //header('location:home.php?resource_id=article');
							echo "Updated"; 
							?>
<?php
}
}
?>

<?php 
if(isset($_REQUEST['article_id'])){
$article=$admin->editArticle($_REQUEST['article_id']);

?>
 <div class="box-content">

						<form class="form-horizontal" action="edit.php">
						  <fieldset>
							<legend>Edit Article</legend>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Article title </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="art_title" value="<?php echo $article['art_title']; ?>"'>
								
							  </div>
							</div>
							
							<div class="control-group">
								<label class="control-label" for="selectError">Select Category</label>
								<div class="controls">
								  <select id="selectError" name="cat_id" data-rel="chosen">
									
                                    <option value="">Select Category</option>
									<?php
									$categories=$admin->showCategory();
									foreach($categories as $category){
										?>
                                        <option <?php if($category['cat_id']==$article['cat_id']){?> selected <?php } ?> value="<?php echo $category['cat_id'];?>"><?php echo $category['cat_name']; ?></option>
                                        <?php
									}
									?>
									
								  </select>
								</div>
							  </div> 
					
					
								<div class="control-group">
							  <label class="control-label" for="textarea2">Article content</label>
							  <div class="controls">
								<textarea class="cleditor" name="art_content" id="textarea2" rows="3"><?php echo $article['art_content'];?></textarea>
							  </div>
							</div>
								<div class="control-group">
								<label class="control-label" for="selectError">Select status</label>
								<div class="controls">
								  <select id="selectError2" name="art_status" data-rel="chosen">
									
                                    <option value="">Select Status</option>
									
                                        <option <?php if($article['art_status']=='publish'){?> selected <?php } ?>  value="Publish">Publish</option>
                                        <option  <?php if($article['art_status']=='unpublish'){?> selected <?php } ?>value="Unpublish">Unpublish</option>
                                        
									
								  </select>
								  <input type="hidden" name="art_id" value="<?php echo $article['art_id']; ?>">
                                  <input type="hidden" name="resource_id" value="article">
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="update" value="save">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>   
						<?php
						}
						//}
						?>

					</div>
				</div><!--/span-->

			</div>

	
		

	