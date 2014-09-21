<?php
if(isset($_REQUEST['add'])){
extract($_REQUEST);
if($admin->addArticle($cat_id,$art_title,$art_content,$art_status)){
?>

<?php
header('location:home.php?resource_id=article');

}
}
?>
 <div class="box-content">
						<form class="form-horizontal" action="add.php">
						  <fieldset>
							<legend>Edit Article</legend>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Article title </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="art_title">
								
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
                                        <option  value="<?php echo $category['cat_id'];?>"><?php echo $category['cat_name']; ?></option>
                                        <?php
									}
									?>
									
								  </select>
								</div>
							  </div> 
					
					
								<div class="control-group">
							  <label class="control-label" for="textarea2">Article content</label>
							  <div class="controls">
								<textarea class="cleditor" id="textarea2" name="art_content" rows="3"></textarea>
							  </div>
							</div>
								<div class="control-group">
								<label class="control-label" for="selectError">Select status</label>
								<div class="controls">
								  <select id="selectError2" name="art_status" data-rel="chosen">
									
                                    <option value="">Select Status</option>
									
                                        <option   value="Publish">Publish</option>
                                        <option  value="Unpublish">Unpublish</option>
                                        
									
								  </select>
								  
                                  <input type="hidden" name="resource_id" value="article">
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="add" value="save">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
						  </fieldset>
						</form>  

			

					</div>
				</div><!--/span-->

			</div>

					
		
		

	