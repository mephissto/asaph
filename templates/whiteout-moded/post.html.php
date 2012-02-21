<?php include_once ('header.html.php');?>
<body>

<?php include_once ('menu.html.php')?>

<div class="singlePost">
	<?php if( $post['image'] ) { ?>
		<h2><?php echo nl2br($post['title']); ?></h2>
		<div class="singlePostInfo">
			Posted by <?php echo $post['user']; ?> - <?php echo date( Asaph_Config::$date_format, $post['created'] ); ?><br/>
			via: <a href="<?php echo $post['source']; ?>"><?php echo $post['sourceDomain']; ?></a>
		</div>
		<br/>
		<a href="<?php echo $post['image']; ?>" title="<?php echo $post['title']; ?>">
			<img src="<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>"/>
		</a>
	<?php } else { ?>
		<p>
			<a href="<?php echo $post['source']; ?>"><?php echo nl2br($post['title']); ?></a>
		</p>
	<?php } ?>
</div>
<div class="clear"></div>

<div id="pages">
	<div class="pageInfo">
		<a href="<?php echo ASAPH_LINK_PREFIX.'page/'.$currentPage; ?>">&larr; back</a>
	</div>
</div>
<br/>
</body>
</html>