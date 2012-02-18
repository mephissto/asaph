<div id="title">
	<em>
		<a href="<?php echo Asaph_Config::$feed_url; ?>" target="_blank">flux rss</a>&nbsp;/&nbsp;
		<?php if (Asaph_Config::$twitter_account != "") : ?>
			<a href="<?php echo Asaph_Config::$twitter_account?>" target="_blank">twitter</a>&nbsp;/&nbsp; 
		<?php endif; ?>
		<?php if (count(Asaph_Config::$link1) > 0) : ?>
			<a href="<?php echo Asaph_Config::$link1['url']; ?>" target="_blank"><?php echo Asaph_Config::$link1['title']; ?></a>&nbsp;/&nbsp;
		<?php endif;?>
		<?php if (count(Asaph_Config::$link2) > 0) : ?>
			<a href="<?php echo Asaph_Config::$link2['url']; ?>" target="_blank"><?php echo Asaph_Config::$link2['title']; ?></a>&nbsp;/&nbsp;
		<?php endif;?>
		<?php if (count(Asaph_Config::$link3) > 0) : ?>
			<a href="<?php echo Asaph_Config::$link3['url']; ?>" target="_blank"><?php echo Asaph_Config::$link3['title']; ?></a>&nbsp;/&nbsp;
		<?php endif;?>
		<a href="<?php echo ASAPH_LINK_PREFIX; ?>about">&agrave; propos</a>
	</em>
	<h1><a href="<?php echo Asaph_Config::$absolutePath; ?>"><?php echo htmlspecialchars( Asaph_Config::$title ); ?></a></h1>
</div>