<?php 
global $post, $ele_thumbnail_size, $image_size; 
if ( houzez_site_width() == '1210px' ) {
	$image_size = 'houzez-item-image-4';
} else {
	$image_size = 'houzez-gallery';
}
?>
<div class="item-listing-wrap hz-item-gallery-js item-listing-wrap-v4 card" data-hz-id="hz-<?php esc_attr_e($post->ID); ?>" <?php houzez_property_gallery($image_size); ?>>
	<div class="item-wrap item-wrap-v4 h-100">
		<div class="d-flex align-items-center h-100">
			<div class="item-header">
				<?php get_template_part('template-parts/listing/partials/item-featured-label'); ?>
				<?php get_template_part('template-parts/listing/partials/item-labels'); ?>
				<?php get_template_part('template-parts/listing/partials/item-price'); ?>
				<?php get_template_part('template-parts/listing/partials/item-tools'); ?>
				<?php get_template_part('template-parts/listing/partials/item-image-v4'); ?>
				<div class="preview_loader"></div>
			</div><!-- item-header -->	
			<div class="item-body flex-grow-1">
				<?php get_template_part('template-parts/listing/partials/item-labels'); ?>
				<?php get_template_part('template-parts/listing/partials/item-title'); ?>
				<?php get_template_part('template-parts/listing/partials/item-price'); ?>
				<?php get_template_part('template-parts/listing/partials/item-address'); ?>
				<?php 
				if( houzez_option('des_item_v4', 0) ) {?>
					<div class="item-short-description"><?php echo houzez_get_excerpt(30); ?></div>
				<?php
				}?>
				<?php get_template_part('template-parts/listing/partials/item-features-v1'); ?>
				<?php get_template_part('template-parts/listing/partials/item-btn'); ?>
				<?php get_template_part('template-parts/listing/partials/item-author'); ?>
				<?php get_template_part('template-parts/listing/partials/item-date'); ?>
			</div><!-- item-body -->

			<?php if(houzez_option('disable_date', 1) || houzez_option('disable_agent', 1)) { ?>
			<div class="item-footer clearfix">
				<?php get_template_part('template-parts/listing/partials/item-author'); ?>
				<?php get_template_part('template-parts/listing/partials/item-date'); ?>
			</div>
			<?php } ?>
		</div><!-- d-flex -->
	</div><!-- item-wrap -->
</div><!-- item-listing-wrap -->