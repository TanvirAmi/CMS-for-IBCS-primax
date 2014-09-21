<div id="main">
<?php
if(isset($_REQUEST['page_id'])){
$row=$obj->showPageContent($_REQUEST['page_id']);
?>
<?php echo $row['page_content']; ?>
<?php
}
?>
</div>