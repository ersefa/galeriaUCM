<!DOCTYPE html> 
<html lang="es"> 

<!-- HEAD -->
<head>
	<?php include("../includes/head.php"); ?>
	
	<?php
		/* Image Fetching */
		function getImages(){
			$result = "{";
			for($i=1; $i<=$_GET['num']; $i++) {
				$result .= "'slides" . $_GET['id'] . "/" . $i .".jpg':{caption: 'Foto". $i . "' }," . "\n"; 
			}
			$result = substr($result, 0, -2);
			$result .= "}";
			echo $result;
		}
	?>
	
	<script type="text/javascript">		
		/* Images array */		
		var data = <?php getImages(); ?>;
	
		/* Slideshow */
	 	window.addEvent('domready', function(){
			var myShow = new Slideshow('show', data, { 
				captions: true, 
				controller: true, 
				delay: 3000, 
				height: 350, 
				width:500, 
				hu: '', 
				thumbnails: true, 
				linked: false, 
				resize: false, 
				overlap: false
			});

		/* Navigation menu */
		$("#red").treeview({
			animated: "fast",
			collapsed: true,
			unique: true,
			persist: "cookie",
			toggle: function() {
				window.console && console.log("%o was toggled", this);
			}
		});
		
	});

	$(document).ready(function(){
		$('nav li li').click(function(){
			$(this).css("color", "#FF8000");
		});
	});
	</script>
</head>

<body> 
	<!-- CONTAINER -->
	<div id="wraper">
		
		<!-- HEADER AND LOGO -->
		<?php include("../includes/header.php");?>
		
		<!-- MENU -->
		<?php include("../includes/nav.php"); ?>
		
		<!-- CONTENT -->
		<div id="content">
			<div id="innerContent">
			<h1><?php echo $_GET['name'];?></h1>
					<div id="show" class="slideshow">
					<a rel="lightbox">
						<img width="400" height="300" />
					</a>
				</div>
			</div>
		</div>
		
		<!-- MARGIN AND FOOT -->
		<?php include("../includes/footer.php"); ?>
	</div>
	
</body>

</html>
