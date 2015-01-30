<?php
/**
 * Front to the WordPress application. This file doesn't do anything, but loads
 * wp-blog-header.php which does and tells WordPress to load the theme.
 *
 * @package WordPress
 */

/**
 * Tells WordPress to load the WordPress theme and output it.
 *
 * @var bool
 */

define('WP_USE_THEMES', false);

/** Loads the WordPress Environment and Template */

require('../wp-blog-header.php');

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>The Won Cause by Barbara A Gannon</title>
	<style type="text/css">
		@import url("../css/reset.css");
		@import url("../css/styles.css");
		@import url("../css/index.css");
	</style>
</head>

<body>
	<div id="page_container">
    	<div id="header_container">
            <h1>The Won Cause by Barbara A. Gannon</h1>
            <p id="description">
            	The Won Cause is a book about black and white Civil War veterans and their comradeship in the Grand Army of the Republic (GAR)—the Union Army’s largest veterans’ organization. You may not know the GAR, but you do know its modern counterparts: the American Legion, the Veterans of Foreign Wars, and the Iraq and Afghanistan Veterans of America. The GAR was the precursor of these groups, the first nationwide veterans’ organization. It originated in the immediate aftermath of the Civil War when a handful of Union Army veterans formed the first GAR post, or local veterans’ group, in Decatur, Illinois. From these small beginnings, the GAR grew until it enrolled hundreds of thousands of black and white members in posts all across America. The GAR welcomed former soldiers and sailors who had received an honorable discharge from the U.S. Army or Navy during the Civil War. During its heyday, the GAR was the nation’s largest social and charitable organization, with all the political power inherent in representing such a large membership. Remarkably, the largest and most powerful social organization of the nineteenth century was an interracial group.
            </p>
            
        	<div id="mural">
            	<img src="images/mural_opaque.png" alt="The Won Cause Mural" title="The Won Cause Mural" />
            </div><!--nav_container-->
		<?php
			include("../navigation.php");
		?>
        </div><!--header_container-->
		<div id="content_container">
      	<?php
      		include_once("../left_bar.php");	
      		include_once("../right_bar.php");
     	?>
	        <div id="blog_container">
	        <?php
				if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<div class="title">
					<?php the_title(); ?>
				</div>
				<div class="content">
					<?php the_content(); ?>
				</div>
				<?php endwhile; else: ?>
				<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
        	</div><!--book_container-->         
        </div><!--content_container-->
        <div class="clear"></div>
		<?php
			include_once("../footer.php");
		?>
    </div>
</body>
</html>