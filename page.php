<?php include 'inc/header.php'; ?>
<?php 
	if(!isset($_GET['pageid']) || $_GET['pageid'] == NULL){
		header("Location:404.php");
	} else {
		$id = $_GET['pageid'];
	}
?>

<div class="contentsection contemplete clear">
		<div class="maincontent clear">
			<div class="about">
		<?php 
			$pagequery = "SELECT * FROM tbl_page WHERE id = '$id'";
			$pagedetails = $db->select($pagequery);
			if($pagedetails){
				while($result = $pagedetails->fetch_assoc()){

		?>       
				<h2><?php echo $result['name']; ?></h2>
				<p>
					Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.
				</p>

				<p>
					Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here. Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.Some text will be go here.
				</p>
		</div>
	</div>
<?php } } else {header("Location:404.php"); } ?>
<?php include 'inc/sidebar.php'; ?>
<?php include 'inc/footer.php'; ?>