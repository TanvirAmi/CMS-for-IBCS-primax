<?php
class highway{
public $conn;
public function __construct(){
 $this->conn=mysqli_connect("localhost","root","admin","highway")or die(mysqli_error());
}

//fetching menu from database
public function showMenu(){
 $query=mysqli_query($this->conn,"SELECT * FROM pages WHERE page_status='publish'")or die(mysqli_error($this->conn));
 return mysqli_fetch_all($query,MYSQLI_ASSOC);
}

//fetching conternt
public function showPageContent($page_id){
$query=mysqli_query($this->conn,"SELECT * FROM pages WHERE page_id='$page_id' and page_status='publish'")or die(mysqli_error($this->conn));
return mysqli_fetch_assoc($query);
}

//fetching category
public function showCategory(){
$query=mysqli_query($this->conn,"SELECT * FROM category WHERE cat_status='publish'")or die(mysqli_error($this->conn));
return mysqli_fetch_all($query,MYSQLI_ASSOC);
}

//fetching article by category
public function showArticleByCategory($cat_id){
$query=mysqli_query($this->conn,"SELECT * FROM article WHERE art_status='publish' AND cat_id=$cat_id")or die(mysqli_error($this->conn));
return mysqli_fetch_all($query,MYSQLI_ASSOC);
}

//fetching total article
public function showArticleDetails($art_id){
$query=mysqli_query($this->conn,"SELECT * FROM article WHERE art_status='publish' AND art_id=$art_id")or die(mysqli_error($this->conn));
return mysqli_fetch_assoc($query);
}
}

$obj=new highway;
?>