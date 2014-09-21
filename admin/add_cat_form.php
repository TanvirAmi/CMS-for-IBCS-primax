
<div class="box-content">

<?php
if(isset($_REQUEST['add'])){
extract($_REQUEST);
if($admin->addCategory($cat_name)){
?>

<?php //header('location:home.php?resource_id=category'); 
echo "updated"; ?>

<?php
}
}

//extract($a);
?>
						<form class="form-horizontal" action="add_cat.php" method="post">
						  <fieldset>
							<legend>add category</legend>
							<div class="control-group">
							  <label class="control-label" for="typeahead">Category name: </label>
							  <div class="controls">
								<input type="text" class="span6 typeahead" id="typeahead"  data-provide="typeahead" data-items="4" name="cat_name">
								
							  </div>
							</div>
							<input type="hidden" name="resource_id" value="category">
							<div class="form-actions">
							  <button type="submit" class="btn btn-success" name="add" value="save">add</button>
							  <button type="reset" class="btn">Cancel</button>
							</div>
							
							</fieldset>
						</form> 
				
						
					</div>
				</div><!--/span-->

			</div>