<?php if( houzez_option('social-footer') != '0' ) { ?>
<div class="footer-social">

	<?php 
	$text_facebook = $text_twitter = $text_instagram = $text_linkedin = $text_googleplus = $text_youtube = $text_pinterest = $text_yelp = $text_behance = $text_tiktok = $text_whatsapp = $text_telegram = $text_skype = '';

	$agent_whatsapp = houzez_option('fs-whatsapp');
	$agent_whatsapp_call = str_replace(array('(',')',' ','-'),'', $agent_whatsapp);

	$icons_class = "mr-2";
	if(houzez_option('ft-bottom') == 'v2') {
		$text_facebook = esc_html__('Facebook', 'houzez'); 
		$text_twitter = esc_html__('Twitter', 'houzez');
		$text_instagram = esc_html__('Instagram', 'houzez'); 
		$text_linkedin = esc_html__('Linkedin', 'houzez');
		$text_googleplus = esc_html__('Google +', 'houzez');
		$text_youtube = esc_html__('Youtube', 'houzez');
		$text_pinterest = esc_html__('Pinterest', 'houzez');
		$text_yelp = esc_html__('Yelp', 'houzez');
		$text_behance = esc_html__('Behance', 'houzez');
		$text_tiktok = esc_html__('TikTok', 'houzez');
		$text_whatsapp = esc_html__('WhatsApp', 'houzez');
		$text_telegram = esc_html__('Telegram', 'houzez');
		$text_skype = esc_html__('Skype', 'houzez');
	}

	if(houzez_option('ft-bottom') == 'v3') {
		$icons_class = "";
	}
	?>

	<?php if( houzez_option('fs-facebook') != '' ){ ?>
	<span>
		<a class="btn-facebook" target="_blank" href="<?php echo esc_url(houzez_option('fs-facebook')); ?>">
			<i class="houzez-icon icon-social-media-facebook <?php echo esc_attr($icons_class); ?>"></i> <?php echo $text_facebook; ?>
		</a>
	</span>
	<?php } ?>

	<?php if( houzez_option('fs-twitter') != '' ){ ?>
	<span>
		<a class="btn-twitter" target="_blank" href="<?php echo esc_url(houzez_option('fs-twitter')); ?>">
			<i class="houzez-icon icon-x-logo-twitter-logo-2 <?php echo esc_attr($icons_class); ?>"></i> <?php echo $text_twitter; ?>
		</a>
	</span>
	<?php } ?>

	<?php if( $agent_whatsapp != '' ){ ?>
	 <span>
		<a target="_blank" class="btn-whatsapp" href="https://wa.me/<?php echo esc_attr( $agent_whatsapp_call ); ?>">
			<i class="houzez-icon icon-messaging-whatsapp <?php echo esc_attr($icons_class); ?>"></i> <?php echo $text_whatsapp; ?>
		</a>
	</span>
	<?php } ?>

	<?php if( houzez_option('fs-tiktok') != '' ){ ?>
	 <span>
		<a target="_blank" class="btn-tiktok" href="<?php echo esc_url(houzez_option('fs-tiktok')); ?>">
			<i class="houzez-icon icon-tiktok-1-logos-24 <?php echo esc_attr($icons_class); ?>"></i> <?php echo $text_tiktok; ?>
		</a>
	</span>
	<?php } ?>

	<?php if( houzez_option('fs-telegram') != '' ){ ?>
	 <span>
		<a target="_blank" class="btn-telegram" href="https://telegram.me/<?php echo esc_attr(houzez_option('fs-telegram')); ?>">
			<i class="houzez-icon icon-telegram-logos-24 <?php echo esc_attr($icons_class); ?>"></i> <?php echo $text_telegram; ?>
		</a>
	</span>
	<?php } ?>

	<?php if( houzez_option('fs-skype') != '' ){ ?>
	 <span>
		<a target="_blank" class="btn-skype" href="skype:<?php echo esc_attr(houzez_option('fs-skype')); ?>?chat/">
			<i class="houzez-icon icon-video-meeting-skype <?php echo esc_attr($icons_class); ?>"></i> <?php echo $text_skype; ?>
		</a>
	</span>
	<?php } ?>

	<?php if( houzez_option('fs-googleplus') != '' ){ ?>
	<span>
		<a class="btn-googleplus" target="_blank" href="<?php echo esc_url(houzez_option('fs-googleplus')); ?>">
			<i class="houzez-icon icon-social-media-google-plus-1 <?php echo esc_attr($icons_class); ?>"></i> <?php echo $text_googleplus; ?>
		</a>
	</span>
	<?php } ?>

	<?php if( houzez_option('fs-linkedin') != '' ){ ?>
	<span>
		<a class="btn-linkedin" target="_blank" href="<?php echo esc_url(houzez_option('fs-linkedin')); ?>">
			<i class="houzez-icon icon-professional-network-linkedin <?php echo esc_attr($icons_class); ?>"></i> <?php echo $text_linkedin; ?>
		</a>
	</span>
	<?php } ?>

	<?php if( houzez_option('fs-instagram') != '' ){ ?>
	<span>
		<a class="btn-instagram" target="_blank" href="<?php echo esc_url(houzez_option('fs-instagram')); ?>">
			<i class="houzez-icon icon-social-instagram <?php echo esc_attr($icons_class); ?>"></i> <?php echo $text_instagram; ?>
		</a>
	</span>
	<?php } ?>

	<?php if( houzez_option('fs-pinterest') != '' ){ ?>
	<span>
		<a class="btn-pinterest" target="_blank" href="<?php echo esc_url(houzez_option('fs-pinterest')); ?>">
			<i class="houzez-icon icon-social-pinterest <?php echo esc_attr($icons_class); ?>"></i> <?php echo $text_pinterest; ?>
		</a>
	</span>
	<?php } ?>

	<?php if( houzez_option('fs-yelp') != '' ){ ?>
	<span>
		<a class="btn-yelp" target="_blank" href="<?php echo esc_url(houzez_option('fs-yelp')); ?>">
			<i class="houzez-icon icon-social-media-yelp <?php echo esc_attr($icons_class); ?>"></i> <?php echo $text_yelp; ?>
		</a>
	</span>
	<?php } ?>

	<?php if( houzez_option('fs-behance') != '' ){ ?>
	<span>
		<a class="btn-behance" target="_blank" href="<?php echo esc_url(houzez_option('fs-behance')); ?>">
			<i class="houzez-icon icon-designer-community-behance <?php echo esc_attr($icons_class); ?>"></i> <?php echo $text_behance; ?>
		</a>
	</span>
	<?php } ?>

	<?php if( houzez_option('fs-youtube') != '' ){ ?>
	<span>
		<a class="btn-youtube" target="_blank" href="<?php echo esc_url(houzez_option('fs-youtube')); ?>">
			<i class="houzez-icon icon-social-video-youtube-clip <?php echo esc_attr($icons_class); ?>"></i> <?php echo $text_youtube; ?>
		</a>
	</span>
	<?php } ?>


</div>
<?php
}
?>