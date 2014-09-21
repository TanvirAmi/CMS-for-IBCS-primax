
						<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list-alt"></i>pages</h2>
						
					</div>
					<div class="box-content">
                   
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Sl No.</th>
								  <th>page Name</th>
								 
								  <th>page status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                   <?php $i=1;
				   $menu=$admin->showPages();
				   foreach($menu as $val){
				   extract($val);
				   
				   ?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td class="center"><?php echo $page_name; ?></td>
								
								<td class="center"><?php echo $page_status; ?></td>
								
								<td class="center">
									
									<a class="btn btn-success" href="cat_edit.php?category_id=<?php $cat_id; ?>&resource_id=page">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
					
					
							 <tr>
								  
								<!--  <th colspan="5" style="text-align:right; padding-right:45px;"><a href="add_cat.php" class="btn btn-primary">Add New category</a></th> -->
							  </tr>
							
						  </tbody>
					  </table> 
						
					</div>
                        <?php
}
?>