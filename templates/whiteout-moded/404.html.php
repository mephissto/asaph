<?php include_once ('header.html.php');?>
<body>

<?php include_once ('menu.html.php')?>

<div class="error">
		<h2>404</h2>
		<div class="singlePostInfo">
			Error 404 : the page you are looking for does not exist.
		</div>
</div>
<div class="clear"></div>

<div id="pages">
	<div class="pageInfo">
		<a href="<?php echo ASAPH_LINK_PREFIX.'page/'.$currentPage; ?>">&larr; back</a>
	</div>
</div>

</body>
</html>