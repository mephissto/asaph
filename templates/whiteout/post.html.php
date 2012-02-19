<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<title><?php echo htmlspecialchars( Asaph_Config::$title ); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php echo Asaph_Config::$absolutePath; ?>templates/whiteout/whiteout.css" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php echo Asaph_Config::$feed_url; ?>" />
	<link rel="Shortcut Icon" href="<?php echo Asaph_Config::$absolutePath; ?>templates/whiteout/asaph.ico" />
	<script type="text/javascript" src="<?php echo Asaph_Config::$absolutePath; ?>templates/whiteout/whitebox.js"></script>
</head>
<body>

<div id="title">
	<em><a href="<?php echo ASAPH_LINK_PREFIX; ?>about">about</a></em>
	<h1><a href="<?php echo Asaph_Config::$absolutePath; ?>"><?php echo htmlspecialchars( Asaph_Config::$title ); ?></a></h1>
</div>

<div class="post">
	<?php if( $post['image'] ) { ?>
		<a href="<?php echo $post['image']; ?>" rel="whitebox" title="<?php echo $post['title']; ?>">
			<img src="<?php echo $post['image']; ?>" alt="<?php echo $post['title']; ?>"/>
		</a>
	<?php } else { ?>
		<p>
			<a href="<?php echo $post['source']; ?>"><?php echo nl2br($post['title']); ?></a>
		</p>
	<?php } ?>
	<div class="postInfo">
		via: <a href="<?php echo $post['source']; ?>"><?php echo $post['sourceDomain']; ?></a>
	</div>
</div>

<div class="clear"></div>

</body>
</html>