<?php global $redux_builder_amp; 
$width  = 346;
$height = 188;
if( true == $redux_builder_amp['ampforwp-homepage-posts-image-modify-size'] ){
    $width  = $redux_builder_amp['ampforwp-swift-homepage-posts-width'];
    $height = $redux_builder_amp['ampforwp-swift-homepage-posts-height'];
} ?>
<?php while(amp_loop('start')): ?>
<div class="fsp">
	<?php if(ampforwp_has_post_thumbnail()){ $args = array("tag"=>'div',"tag_class"=>'image-container','image_size'=>'full','image_crop'=>'true','image_crop_width'=>$width,'image_crop_height'=>$height, 'responsive'=> true); ?>
        <div class="fsp-cnt">
            <?php amp_loop_title(); ?>
        </div>
        <div class="pt-dt">
            <?php amp_loop_date(); ?>
            <?php amp_loop_author(); ?>
            <!-- <p>Written by: <a href="<?php echo get_the_author_link(); ?>"><?php amp_loop_author(); ?></a></p> -->
        </div>
        <div class="fsp-img">
    	    <?php amp_loop_image($args); ?>
        </div><?php } ?>
        <div class="fsp-cnt">
            <?php if( ampforwp_check_excerpt() ) { amp_loop_excerpt(20); } ?> 
        </div>
        <div class="fsp-cnt fsp-cat">
            <?php amp_loop_category(); ?>
            <?php amp_tags_list();?>
        </div>
</div>
<?php endwhile; amp_loop('end');  ?>