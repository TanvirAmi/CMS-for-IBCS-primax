
<div id="content" class="span10">
	  <div class="row-fluid sortable">	
	  <?php
					if(@$_REQUEST['resource_id']=='category'){
           ?>
						<div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-list-alt"></i> Categories</h2>
						
					</div>
					<div class="box-content">
                   
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Sl No.</th>
								  <th>Category Name</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                   <?php $i=1;
				   foreach($admin->showCategory() as $val){
				   extract($val);
				   
				   ?>
							<tr>
								<td><?php echo $i++; ?></td>
								<td class="center"><?php echo $cat_name; ?></td>
								<td class="center"><?php echo $cat_status; ?></td>
								
								<td class="center">
									
									<a class="btn btn-success" href="cat_edit.php?category_id=<?php echo $cat_id; ?>&resource_id=category">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="#">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
					  <?php
							//  }
							  }
							  ?>
					
							 <tr>
								  
								  <th colspan="5" style="text-align:right; padding-right:45px;"><a href="add_cat.php" class="btn btn-primary">Add New category</a></th>
							  </tr>
							
						  </tbody>
					  </table> 
						
					</div>
                        <?php
}
?>
				</div>
				
				<?php	
					
					if(@$_REQUEST['resource_id']=='article'){
					if(isset($_REQUEST['del_id'])){
					if($admin->deleteArticle($_REQUEST['del_id'])){
					  echo "successfully deleted";
					  }
					  }
						?>
						
                      <div class="box span12">
					<div class="box-header well" data-original-title>
						<h2><i class="icon-edit"></i> Articles</h2>
						
					</div>
					<div class="box-content">
                   
						<table class="table table-striped table-bordered bootstrap-datatable datatable">
						  <thead>
							  <tr>
								  <th>Sl no.</th>
								  <th>Article Title</th>
								  <th>Category</th>
								  <th>Status</th>
								  <th>Actions</th>
							  </tr>
						  </thead>   
						  <tbody>
                          <?php
						  $j=1;
						  $articles=$admin->showArticles();
						  foreach($articles as $article){
							  extract($article);
						  ?>
							<tr>
								<td><?php echo $j++; ?></td>
								<td class="center"><?php echo $art_title; ?></td>
								<td class="center">
                                <?php
								$cat_name=$admin->showCatNamebyId($cat_id);
								
								?>
                                <?php echo $cat_name['cat_name']; ?>
                                </td>
								
                               <td class="center"><?php echo $art_status; ?></td>
								<td class="center">
									<a class="btn btn-success" href="http://localhost//logical-coding/index.php?art_id=<?php echo $art_id;?>" target="_blank">
										<i class="icon-zoom-in icon-white"></i>  
										View                                            
									</a>
									<a class="btn btn-info" href="edit.php?article_id=<?php echo $art_id; ?>&resource_id=article">
										<i class="icon-edit icon-white"></i>  
										Edit                                            
									</a>
									<a class="btn btn-danger" href="home.php?del_id=<?php echo $art_id; ?>&resource_id=article">
										<i class="icon-trash icon-white"></i> 
										Delete
									</a>
								</td>
							</tr>
							
                        <?php
					
						  }
						  ?>
                          
                           <tr>
								  
								  <th colspan="5" style="text-align:right; padding-right:45px;"><a href="add.php" class="btn btn-primary">Add New Article</a></th>
							  </tr>
						  </tbody>
					  </table>  
                            
					</div>
					    
						  
				

</div>
				<?php
				}
				if(!isset($_REQUEST['resource_id'])){
				?>
				<h2 class="text-success">Admin Home</h2>
				<p class="text-info" >Hi its me <strong>Tanvir</strong>....</p>
				<p class="text-info">I have made this admin template using..</p>
				<p class="text-info">Bootstarp..with jQuery & rich javascript plugin</p>
				  <ul class="socialicons">
                	<li><a href="#" class="social-text"><strong>JOIN WITH</strong></a></li>
                	<li><a href="http://facebook.com/tanvir.ami" class="social-facebook"></a></li>
                    <li><a href="#" class="social-twitter"></a></li>
                    <li><a href="#" class="social-in"></a></li>
                    <li><a href="#" class="social-googleplus"></a></li>
                </ul>
				
				<?php
				}
				?>
				</div>