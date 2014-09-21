
<div class="box-content">

<?php
if(isset($_REQUEST['cat_id'])){
extract($_REQUEST);
if($admin->updateCategory($cat_id,$cat_name)){
//header('location:home.php?resource_id=category');
echo "updated";
?>

<?php
}
}
if(isset($_REQUEST['category_id'])){
$category=$admin->editCategory($_REQUEST['category_id']);
//extract($a);
?>
						<form class="form-horizontal" action="cat_edit.php" method="post">
						  <fieldset>
							<legend>Edit category</legend>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Category name: </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="cat_name" value="<?php echo $category['cat_name']; ?>">
								<input type="hidden" name="cat_id" value="<?php echo $category['cat_id']; ?>">
                                  <input type="hidden" name="resource_id" value="category">
							  </div>
							</div>
							
							<div class="form-actions">
							  <button type="submit" class="btn btn-primary" name="update" value="save">Save changes</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
							
							</fieldset>
						</form> 
						<?php
						}
						?>
						
					</div>
				</div><!--/span-->

			</div>