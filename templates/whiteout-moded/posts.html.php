<?php include_once ('header.html.php');?>
<body>

<?php include_once ('menu.html.php')?>

<?php foreach( $posts as $p ) { ?>
	<div class="post">
		<?php if( $p['image'] ) { ?>
			<a href="<?php echo $p['image']; ?>" rel="prettyPhoto" title="">
				<img src="<?php echo $p['thumb']; ?>" alt="<?php echo $p['title']; ?>"/>
			</a>
		<?php } else { ?>
			<p>
				<a href="<?php echo $p['source']; ?>"><?php echo nl2br($p['title']); ?></a>
			</p>
		<?php } ?>
		<div class="postInfo">
			<a href="<?php echo $asaph->getPostUrl($p); ?>">&#35;</a> via: <a href="<?php echo $p['source']; ?>"><?php echo $p['sourceDomain']; ?></a>
		</div>
	</div>
<?php } ?>
<div class="clear"></div>

<div id="pages">
	<div class="pageInfo">
		page <?php echo $pages['current']; ?> of <?php echo $pages['total']; ?>
	</div>
	
	<div class="pageLinks">

		<?php if( $pages['current'] > 1) { ?>
			<a href="<?php echo ASAPH_LINK_PREFIX ?>page/1">&nbsp;&laquo;&nbsp;</a>
		<?php } else { ?>
			&nbsp;&laquo;&nbsp;
		<?php } ?>

		<?php if( $pages['prev'] ) { ?>
			<a href="<?php echo ASAPH_LINK_PREFIX.'page/'.$pages['prev']?>">&laquo; prev</a>
		<?php } else { ?>
			&laquo; prev
		<?php } ?>
		/
		<?php if( $pages['next'] ) { ?>
			<a href="<?php echo ASAPH_LINK_PREFIX.'page/'.$pages['next']?>">next &raquo;</a>
		<?php } else { ?>
			next &raquo;
		<?php } ?>
		
		<?php if( $pages['current'] < $pages['total'] ) { ?>
			<a href="<?php echo ASAPH_LINK_PREFIX.'page/'.$pages['total']?>">&nbsp;&raquo;&nbsp;</a>
		<?php } else {?>
			&nbsp;&raquo;&nbsp;
		<?php } ?>
	
	</div>
	<div class="clear"></div>
</div>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $("a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'facebook',
    	social_tools:false
    });
  });
</script>

</body>
</html>