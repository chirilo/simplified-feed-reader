<?php
    /**
    * For the sake of clarity, instead of a custom script, I just used simplepie 
    * @author Chi Rilo <chithewebdeveloper@gmail.com>
    * @since Feb 10, 2016
    */

    //get the simplepie library
    require_once('inc/simplepie.inc');
    
    //grab the feed
    $feed = new SimplePie();
    
    // cached copy of php atom feed
    $feed->set_feed_url(array(
    	'http://php.net/feed.atom'
    ));
    
    //enable caching
    $feed->enable_cache(true);
    
    //provide the caching folder
    $feed->set_cache_location('cache');
    
    //set the amount of seconds you want to cache the feed
    $feed->set_cache_duration(10);
    
    //init the process
    $feed->init();
    
    //let simplepie handle the content type (atom, RSS...)
    $feed->handle_content_type();

?>
				
<?php if ($feed->error): ?>
  <p><?php echo $feed->error; ?></p>
<?php endif; ?>

<?php foreach ($feed->get_items() as $item): ?>

	<div class="chunk">

		<h4 style="background:url(<?php $feed = $item->get_feed(); echo $feed->get_favicon(); ?>) no-repeat; text-indent: 25px; margin: 0 0 10px;"><a href="<?php echo $item->get_permalink(); ?>"><?php echo $item->get_title(); ?></a></h4>

		<p class="footnote">Source: <a href="<?php $feed = $item->get_feed(); echo $feed->get_permalink(); ?>"><?php $feed = $item->get_feed(); echo $feed->get_title(); ?></a> | <?php echo $item->get_date('j M Y | g:i a T'); ?></p>
		     
	</div>

<?php endforeach; ?>