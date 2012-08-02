<!DOCTYPE html> 
<html lang="es"> 

<!-- HEAD -->
<head>
	<?php include("../includes/head.php"); ?>
	
	<!-- JQUERY CYCLE -->
	<script type="text/javascript" src="../js/cycle/jquery.cycle.all.js"></script>
	
	<script type="text/javascript">
	$(document).ready(function() {
		$('.indexSlideshow').cycle({
			fx: 'fade' // choose your transition type, ex: fade, scrollUp, shuffle, etc...
		});
		
		$("#red").treeview({
			animated: "fast",
			collapsed: true,
			unique: true,
			persist: "cookie",
			toggle: function() {
				window.console && console.log("%o was toggled", this);
			}
		});

		$("nav ul#red.treeview-red.treeview li.expandable ul li").click(function(){
			$(this).addClass("selected");
		});
	});
	</script>
	
</head>

<body>
	<!-- CONTAINER -->
	<div id="wraper">
		
		<!-- HEADER AND LOGO -->
		<?php include("../includes/header.php"); ?>
		
		<!-- MENU -->
		<?php include("../includes/nav.php"); ?>
		
		<!-- CONTENT -->
		<div id="content">
			<div id="innerContent">
				<h1>Recursos Fotográficos</h1>
				<h2>Departamento de Estudios e Imagen Corporativa</h2>
				<div id="indexslide" class="indexSlideshow">
					<img src="../../images/indexGallery/2b.jpg" width="650" />
					<img src="../../images/indexGallery/3b.jpg" width="650" />
					<img src="../../images/indexGallery/4b.jpg" width="650"  />
				</div>
			</div>
		</div>
		
		<!-- MARGIN AND FOOT -->
		<?php include("../includes/footer.php"); ?>
	</div>
</body>
</html>
