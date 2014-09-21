<?php
class Admin{
	public $conn;
	
	public function __construct(){
		session_start();
		$this->conn=mysqli_connect("localhost","root","","highway");	
	}
	
	public function checkUser($username,$password){
			$query=mysqli_query($this->conn,"SELECT * FROM users WHERE username='$username' AND password='".sha1($password)."' AND status='active'") or die(mysqli_error($this->conn));
			
			$row=mysqli_fetch_assoc($query);
			$_SESSION['uname']=$row['username'];
			return true;
			
	}
	
	public function showCategory(){
	$query=mysqli_query($this->conn,"SELECT * FROM category")or die(mysqli_error($this->conn));
	return mysqli_fetch_all($query,MYSQLI_ASSOC);
	}
	
	public function showArticles(){
	$query=mysqli_query($this->conn,"SELECT * FROM article") or die(mysqli_error($this->conn));
	return mysqli_fetch_all($query,MYSQLI_ASSOC);
	}
	
	public function showCatNamebyId($cat_id){
	 $query=mysqli_query($this->conn,"SELECT cat_name FROM category WHERE cat_id='$cat_id' ")or die(mysqli_error($this->conn));
	 return mysqli_fetch_assoc($query);
	}
	
	public function editArticle($art_id){
	$query=mysqli_query($this->conn,"SELECT * FROM article WHERE  art_id='$art_id'") or die(mysqli_error($this->conn));
	return mysqli_fetch_assoc($query);
	}
	
	// public function updateArticle($art_id,$cat_id,$art_title,$art_content,$art_status){
	// $query=mysqli_query($this->conn,"UPDATE articles SET cat_id='$cat_id', art_title='$art_title', art_content='$art_content' AND art_status='$art_status'")or 
	// die(mysqli_error($this->conn));
	
	// {return true;}
	// }
	
	public function updateArticle($art_id,$cat_id,$art_title,$art_content,$art_status){
		
		$query=mysqli_query($this->conn,"UPDATE article SET cat_id = $cat_id, art_title = '".mysqli_real_escape_string($this->conn,$art_title)."', art_content = '".mysqli_real_escape_string($this->conn,$art_content)."', art_status = '$art_status' WHERE art_id=$art_id") or die(mysqli_error($this->conn));
		if($query){
			return true;	
		}
		else{
			return false;	
		}
	}
	
	public function addArticle($cat_id,$art_title,$art_content,$art_status){
	$query=mysqli_query($this->conn,"INSERT INTO article SET cat_id=$cat_id, art_title='".mysqli_real_escape_string($this->conn,$art_title)."',art_content='".mysqli_real_escape_string($this->conn,$art_content)."', art_status='$art_status'") or die(mysqli_error($this->conn));
	   if($query){
	   return true;
	   }
	   else{
	   return false;
	   }
	}
	
	public function deleteArticle($art_id){
	 $query=mysqli_query($this->conn,"DELETE FROM article WHERE art_id='$art_id'")or die(mysqli_error($this->conn));
	 return true;
	}
	
     public function editCategory($cat_id){
	 $query=mysqli_query($this->conn,"SELECT * FROM category WHERE cat_id='$cat_id'") or die(mysqli_error($this->conn));
	 return mysqli_fetch_assoc($query);
	}
	
		public function updateCategory($cat_id, $cat_name){
	$query=mysqli_query($this->conn,"UPDATE category SET cat_name = '".mysqli_real_escape_string($this->conn,$cat_name)."' WHERE cat_id='$cat_id'")or die(mysqli_error($this->conn));
	return true;
	}
	
	public function showPages(){
	$query=mysqli_query($this->conn,"SELECT * FROM pages")or die(mysqli_error($this->conn));
	return mysqli_fetch_all($query,MYSQLI_ASSOC);
	}
	
	public function addCategory($cat_name){
	$query=mysqli_query($this->conn,"INSERT INTO category SET  cat_name='$cat_name'")or die(mysqli_error($this->conn));
	return true;
	}
	
	
	
	
	}
	$admin=new Admin;
	?>