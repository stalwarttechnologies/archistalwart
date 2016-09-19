<?php $translate['wpml-no'] = mfn_opts_get('translate') ? mfn_opts_get('translate-wpml-no','No translations available for this page') : __('No translations available for this page','betheme'); ?>
<?php if( mfn_opts_get('action-bar')): ?>

<div id="Action_bar">
  <div class="container">
    <div class="column one-fourth”>
      <ul class="contact_details">
        <li class="slogan">design solutions</li>
        <li class="phone"><i class="icon-phone"></i><a href="tel:9999999999">9999999999</a></li>
        <li class="phone"><i class="icon-phone"></i><a href="tel:9999999999">9999999999</a></li>
        <li class="mail"><i class="icon-mail-line"></i><a href="mailto:info@archistalwart.com">info@archistalwart.com</a></li>
      </ul>
    </div>

    <div class="column one-fourth" style=margin-top:10px>
      <p>&lt;?php $translate['wpml-no'] = mfn_opts_get('translate') ? mfn_opts_get('translate-wpml-no','No translations available for this page') : __('No translations available for this page','betheme'); ?&gt;<br>
        &lt;?php if( mfn_opts_get('action-bar')): ?&gt;</p>
      <p>&lt;div id=&quot;Action_bar&quot;&gt;<br>
  &lt;div class=&quot;container&quot;&gt;<br>
  &lt;div class=&quot;column one-fourth&quot; style=&quot;margin-top:10px&quot;&gt;<br>
  &lt;ul class=&quot;contact_details&quot;&gt;<br>
  &lt;?php<br>
        if( $header_slogan = mfn_opts_get( 'header-slogan' ) ){<br>
        echo '&lt;li class=&quot;slogan&quot;&gt;'. $header_slogan .'&lt;/li&gt;';<br>
        }<br>
        if( $header_phone = mfn_opts_get( 'header-phone' ) ){<br>
        echo '&lt;li class=&quot;phone&quot;&gt;&lt;i class=&quot;icon-phone&quot;&gt;&lt;/i&gt;&lt;a href=&quot;tel:'. str_replace(' ', '', $header_phone) .'&quot;&gt;'. $header_phone .'&lt;/a&gt;&lt;/li&gt;';<br>
        } <br>
        /* if( $header_phone_2 = mfn_opts_get( 'header-phone-2' ) ){<br>
        echo '&lt;li class=&quot;phone&quot;&gt;&lt;i class=&quot;icon-phone&quot;&gt;&lt;/i&gt;&lt;a href=&quot;tel:'. str_replace(' ', '', $header_phone_2) .'&quot;&gt;'. $header_phone_2 .'&lt;/a&gt;&lt;/li&gt;'; <br>
        }					*/<br>
        if( $header_email = mfn_opts_get( 'header-email' ) ){<br>
        echo '&lt;li class=&quot;mail&quot;&gt;&lt;i class=&quot;icon-mail-line&quot;&gt;&lt;/i&gt;&lt;a href=&quot;mailto:'. $header_email .'&quot;&gt;'. $header_email .'&lt;/a&gt;&lt;/li&gt;';<br>
        }<br>
        ?&gt;<br>
  &lt;/ul&gt;<br>
  &lt;/div&gt;<br>
  &lt;div class=&quot;column one-fourth&quot; style=&quot;margin-top:10px&quot;&gt; &lt;a id=&quot;search_button&quot; class=&quot;has-input&quot;&gt;<br>
  &lt;form method=&quot;get&quot; id=&quot;searchform&quot; action=&quot;http://archistalwart:8888/&quot;&gt;<br>
  &lt;input type=&quot;text&quot; class=&quot;field&quot; name=&quot;s&quot; id=&quot;s&quot; placeholder=&quot;Search Photos, Products, Designs, and more...&quot; style=width:80%&gt;<br>
  &lt;input type=&quot;submit&quot; class=&quot;submit&quot; value=&quot;&quot; style=&quot;display:none;&quot;&gt;<br>
  &lt;/form&gt;<br>
  &lt;/a&gt; &lt;/div&gt;<br>
  &lt;div class=&quot;column one-fourth&quot; style=&quot;margin-top:20px&quot;&gt; &lt;a href=&quot;#&quot; style=&quot;text-align:center&quot;&gt;DISCOUNTED ITEMS&lt;/a&gt; &lt;/div&gt;<br>
  <br>
  <br>
  &lt;div class=&quot;column one-fourth&quot; style=&quot;margin-top:10px&quot;&gt;<br>
  &lt;?php <br>
        if( has_nav_menu( 'social-menu' ) ){</p>
      <p> // #social-menu<br>
        mfn_wp_social_menu();</p>
      <p> } else {</p>
      <p> $target = mfn_opts_get('social-target') ? 'target=&quot;_blank&quot;' : false;<br>
        <br>
        echo '&lt;ul class=&quot;social&quot;&gt;';<br>
        if( mfn_opts_get('social-skype') ) echo '&lt;li class=&quot;skype&quot;&gt;&lt;a '.$target.' href=&quot;'. mfn_opts_get('social-skype') .'&quot; title=&quot;Skype&quot;&gt;&lt;i class=&quot;icon-skype&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;';<br>
        if( mfn_opts_get('social-facebook') ) echo '&lt;li class=&quot;facebook&quot;&gt;&lt;a '.$target.' href=&quot;'. mfn_opts_get('social-facebook') .'&quot; title=&quot;Facebook&quot;&gt;&lt;i class=&quot;icon-facebook&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;';<br>
        if( mfn_opts_get('social-googleplus') ) echo '&lt;li class=&quot;googleplus&quot;&gt;&lt;a '.$target.' href=&quot;'. mfn_opts_get('social-googleplus') .'&quot; title=&quot;Google+&quot;&gt;&lt;i class=&quot;icon-gplus&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;';<br>
        if( mfn_opts_get('social-twitter') ) echo '&lt;li class=&quot;twitter&quot;&gt;&lt;a '.$target.' href=&quot;'. mfn_opts_get('social-twitter') .'&quot; title=&quot;Twitter&quot;&gt;&lt;i class=&quot;icon-twitter&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;';<br>
        if( mfn_opts_get('social-vimeo') ) echo '&lt;li class=&quot;vimeo&quot;&gt;&lt;a '.$target.' href=&quot;'. mfn_opts_get('social-vimeo') .'&quot; title=&quot;Vimeo&quot;&gt;&lt;i class=&quot;icon-vimeo&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;';<br>
        if( mfn_opts_get('social-youtube') ) echo '&lt;li class=&quot;youtube&quot;&gt;&lt;a '.$target.' href=&quot;'. mfn_opts_get('social-youtube') .'&quot; title=&quot;YouTube&quot;&gt;&lt;i class=&quot;icon-play&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;'; <br>
        if( mfn_opts_get('social-flickr') ) echo '&lt;li class=&quot;flickr&quot;&gt;&lt;a '.$target.' href=&quot;'. mfn_opts_get('social-flickr') .'&quot; title=&quot;Flickr&quot;&gt;&lt;i class=&quot;icon-flickr&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;';<br>
        if( mfn_opts_get('social-linkedin') ) echo '&lt;li class=&quot;linkedin&quot;&gt;&lt;a '.$target.' href=&quot;'. mfn_opts_get('social-linkedin') .'&quot; title=&quot;LinkedIn&quot;&gt;&lt;i class=&quot;icon-linkedin&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;';<br>
        if( mfn_opts_get('social-pinterest') ) echo '&lt;li class=&quot;pinterest&quot;&gt;&lt;a '.$target.' href=&quot;'. mfn_opts_get('social-pinterest') .'&quot; title=&quot;Pinterest&quot;&gt;&lt;i class=&quot;icon-pinterest&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;';<br>
        if( mfn_opts_get('social-dribbble') ) echo '&lt;li class=&quot;dribbble&quot;&gt;&lt;a '.$target.' href=&quot;'. mfn_opts_get('social-dribbble') .'&quot; title=&quot;Dribbble&quot;&gt;&lt;i class=&quot;icon-dribbble&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;';<br>
        if( mfn_opts_get('social-instagram') ) echo '&lt;li class=&quot;instagram&quot;&gt;&lt;a '.$target.' href=&quot;'. mfn_opts_get('social-instagram') .'&quot; title=&quot;Instagram&quot;&gt;&lt;i class=&quot;icon-instagram&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;';<br>
        if( mfn_opts_get('social-behance') ) echo '&lt;li class=&quot;behance&quot;&gt;&lt;a '.$target.' href=&quot;'. mfn_opts_get('social-behance') .'&quot; title=&quot;Behance&quot;&gt;&lt;i class=&quot;icon-behance&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;';<br>
        if( mfn_opts_get('social-tumblr') ) echo '&lt;li class=&quot;tumblr&quot;&gt;&lt;a '.$target.' href=&quot;'. mfn_opts_get('social-tumblr') .'&quot; title=&quot;Tumblr&quot;&gt;&lt;i class=&quot;icon-tumblr&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;';<br>
        if( mfn_opts_get('social-vkontakte') ) echo '&lt;li class=&quot;vkontakte&quot;&gt;&lt;a '.$target.' href=&quot;'. mfn_opts_get('social-vkontakte') .'&quot; title=&quot;VKontakte&quot;&gt;&lt;i class=&quot;icon-vkontakte&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;';<br>
        if( mfn_opts_get('social-viadeo') ) echo '&lt;li class=&quot;viadeo&quot;&gt;&lt;a '.$target.' href=&quot;'. mfn_opts_get('social-viadeo') .'&quot; title=&quot;Viadeo&quot;&gt;&lt;i class=&quot;icon-viadeo&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;';<br>
        if( mfn_opts_get('social-xing') ) echo '&lt;li class=&quot;xing&quot;&gt;&lt;a '.$target.' href=&quot;'. mfn_opts_get('social-xing') .'&quot; title=&quot;Xing&quot;&gt;&lt;i class=&quot;icon-xing&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;';<br>
        if( mfn_opts_get('social-rss') ) echo '&lt;li class=&quot;rss&quot;&gt;&lt;a '.$target.' href=&quot;'. get_bloginfo('rss2_url') .'&quot; title=&quot;RSS&quot;&gt;&lt;i class=&quot;icon-rss&quot;&gt;&lt;/i&gt;&lt;/a&gt;&lt;/li&gt;';<br>
        echo '&lt;/ul&gt;';<br>
  <br>
        }<br>
        ?&gt;<br>
  &lt;/div&gt;<br>
  &lt;/div&gt;<br>
  &lt;/div&gt;<br>
  &lt;?php endif; ?&gt;<br>
  &lt;?php <br>
        if( mfn_header_style( true ) == 'header-overlay' ){<br>
  <br>
        // Overlay ----------<br>
        echo '&lt;div id=&quot;Overlay&quot;&gt;';<br>
        mfn_wp_overlay_menu();<br>
        echo '&lt;/div&gt;';<br>
  <br>
        // Button ----------<br>
        echo '&lt;a class=&quot;overlay-menu-toggle&quot; href=&quot;#&quot;&gt;';<br>
        echo '&lt;i class=&quot;open icon-menu&quot;&gt;&lt;/i&gt;';<br>
        echo '&lt;i class=&quot;close icon-cancel&quot;&gt;&lt;/i&gt;';<br>
        echo '&lt;/a&gt;';<br>
  <br>
        }<br>
        ?&gt;</p>
      <p>&lt;!-- .header_placeholder 4sticky  --&gt;<br>
        &lt;div class=&quot;header_placeholder&quot;&gt;&lt;/div&gt;<br>
        &lt;div id=&quot;Top_bar&quot; class=&quot;loading&quot;&gt;<br>
  &lt;div class=&quot;container&quot;&gt;<br>
  &lt;div class=&quot;column one&quot;&gt;<br>
  &lt;div class=&quot;top_bar_left clearfix&quot;&gt; <br>
  <br>
  &lt;!-- .logo --&gt;<br>
  &lt;div class=&quot;logo&lt;?php if( $textlogo = mfn_opts_get('logo-text') ) echo ' text-logo'; ?&gt;&quot;&gt;<br>
  &lt;?php <br>
        // Logo | Options<br>
        $logo_options = mfn_opts_get( 'logo-link' ) ? mfn_opts_get( 'logo-link' ) : false;<br>
        $logo_before = $logo_after = '';</p>
      <p> // Logo | Link<br>
        if( isset( $logo_options['link'] ) ){<br>
        $logo_before 	= '&lt;a id=&quot;logo&quot; href=&quot;'. get_home_url() .'&quot; title=&quot;'. get_bloginfo( 'name' ) .'&quot;&gt;';<br>
        $logo_after 	= '&lt;/a&gt;';<br>
        } else {<br>
        $logo_before 	= '&lt;span id=&quot;logo&quot;&gt;';<br>
        $logo_after 	= '&lt;/span&gt;';<br>
        }<br>
  <br>
        // Logo | H1<br>
        if( is_front_page() ){<br>
        if( is_array( $logo_options ) &amp;&amp; isset( $logo_options['h1-home'] )){<br>
        $logo_before = '&lt;h1&gt;'. $logo_before;<br>
        $logo_after .= '&lt;/h1&gt;';<br>
        }<br>
        } else {<br>
        if( is_array( $logo_options ) &amp;&amp; isset( $logo_options['h1-all'] )){<br>
        $logo_before = '&lt;h1&gt;'. $logo_before;<br>
        $logo_after .= '&lt;/h1&gt;';<br>
        }<br>
        }<br>
  <br>
        // Logo | Source<br>
        if( $layoutID = mfn_layout_ID() ){<br>
  <br>
        $logo_src 		= get_post_meta( $layoutID, 'mfn-post-logo-img', true );<br>
        $logo_sticky 	= get_post_meta( $layoutID, 'mfn-post-sticky-logo-img', true ) ? get_post_meta( $layoutID, 'mfn-post-sticky-logo-img', true ) : $logo_src;<br>
        $logo_mobile 	= get_post_meta( $layoutID, 'mfn-post-responsive-logo-img', true ) ? get_post_meta( $layoutID, 'mfn-post-responsive-logo-img', true ) : $logo_src;<br>
  <br>
        } else {<br>
  <br>
        $logo_src 		= mfn_opts_get( 'logo-img', THEME_URI .'/images/logo/logo.png' );<br>
        $logo_sticky 	= mfn_opts_get( 'sticky-logo-img' ) ? mfn_opts_get( 'sticky-logo-img' ) : $logo_src;<br>
        $logo_mobile 	= mfn_opts_get( 'responsive-logo-img' ) ? mfn_opts_get( 'responsive-logo-img' ) : $logo_src;<br>
  <br>
        }<br>
  <br>
        // Logo | SVG width<br>
        if( $width = mfn_opts_get( 'logo-width' ) ){<br>
        $width = 'width=&quot;'. $width .'&quot;';<br>
        $class = ' svg';<br>
        } else {<br>
        $width = false;<br>
        $class = false;<br>
        }<br>
  <br>
        // Logo | Print<br>
        echo $logo_before;</p>
      <p> if( $textlogo ){<br>
        <br>
        echo $textlogo;<br>
  <br>
        } else {<br>
  <br>
        echo '&lt;img class=&quot;logo-main scale-with-grid'. $class .'&quot; src=&quot;'. $logo_src .'&quot; alt=&quot;'. mfn_get_attachment_data( $logo_src, 'alt' ) .'&quot; '. $width .'/&gt;';<br>
        echo '&lt;img class=&quot;logo-sticky scale-with-grid'. $class .'&quot; src=&quot;'. $logo_sticky .'&quot; alt=&quot;'. mfn_get_attachment_data( $logo_sticky, 'alt' ) .'&quot; '. $width .'/&gt;';<br>
        echo '&lt;img class=&quot;logo-mobile scale-with-grid'. $class .'&quot; src=&quot;'. $logo_mobile .'&quot; alt=&quot;'. mfn_get_attachment_data( $logo_mobile, 'alt' ) .'&quot; '. $width .'/&gt;';<br>
  <br>
        }<br>
  <br>
        echo $logo_after;<br>
        ?&gt;<br>
  &lt;/div&gt;<br>
  &lt;div class=&quot;menu_wrapper&quot;&gt;<br>
  &lt;?php <br>
        if( ( mfn_header_style( true ) != 'header-overlay' ) &amp;&amp; ( mfn_opts_get( 'menu-style' ) != 'hide' ) ){<br>
  <br>
        // TODO: modify the mfn_header_style() function to be able to find the text 'header-split' in headers array<br>
  <br>
        // #menu --------------------------<br>
        if( in_array( mfn_header_style(), array( 'header-split', 'header-split header-semi', 'header-below header-split' ) ) ){<br>
        // split -------<br>
        mfn_wp_split_menu();<br>
        } else {<br>
        // default -----<br>
        mfn_wp_nav_menu();<br>
        }<br>
  <br>
        // responsive menu button ---------<br>
        $mb_class = '';<br>
        if( mfn_opts_get('header-menu-mobile-sticky') ) $mb_class .= ' is-sticky';</p>
      <p> echo '&lt;a class=&quot;responsive-menu-toggle '. $mb_class .'&quot; href=&quot;#&quot;&gt;';<br>
        if( $menu_text = mfn_opts_get( 'header-menu-text' ) ){<br>
        echo '&lt;span&gt;'. $menu_text .'&lt;/span&gt;';<br>
        } else {<br>
        echo '&lt;i class=&quot;icon-menu&quot;&gt;&lt;/i&gt;';<br>
        } <br>
        echo '&lt;/a&gt;';<br>
  <br>
        }<br>
        ?&gt;<br>
  &lt;/div&gt;<br>
  &lt;div class=&quot;secondary_menu_wrapper&quot;&gt; <br>
  &lt;!-- #secondary-menu --&gt;<br>
  &lt;?php mfn_wp_secondary_menu(); ?&gt;<br>
  &lt;/div&gt;<br>
  &lt;div class=&quot;banner_wrapper&quot;&gt;<br>
  &lt;?php mfn_opts_show( 'header-banner' ); ?&gt;<br>
  &lt;/div&gt;<br>
  &lt;div class=&quot;search_wrapper&quot;&gt; <br>
  &lt;!-- #searchform --&gt;<br>
  <br>
  &lt;?php get_search_form( true ); ?&gt;<br>
  &lt;/div&gt;<br>
  &lt;/div&gt;<br>
  &lt;?php <br>
        if( ! mfn_opts_get( 'top-bar-right-hide' ) ){<br>
        get_template_part( 'includes/header', 'top-bar-right' );<br>
        }<br>
        ?&gt;<br>
  &lt;/div&gt;<br>
  &lt;/div&gt;<br>
  &lt;/div&gt;</p>
    </div>
<div class="column one-fourth">

<a href=#> DISCOUNT </a>
</div>

	
    <div class="column one-fourth">
      <ul id="menu-shopnprofile" class="social-menu">
        <li id="menu-item-135" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-135"><a href="http://archistalwart:8888/cart/">Cart</a></li>
        <li id="menu-item-136" class="menu-item menu-item-type-post_type menu-item-object-page current_page_parent menu-item-136"><a href="http://archistalwart:8888/shop/">Shop</a></li>
        <li id="menu-item-137" class="menu-item menu-item-type-custom menu-item-object-custom menu-item-137"><a href="#">Sign Up</a></li>
      </ul>
    </div>
  </div>

<?php endif; ?>
<?php 
	if( mfn_header_style( true ) == 'header-overlay' ){
		
		// Overlay ----------
		echo '<div id="Overlay">';
			mfn_wp_overlay_menu();
		echo '</div>';
		
		// Button ----------
		echo '<a class="overlay-menu-toggle" href="#">';
			echo '<i class="open icon-menu"></i>';
			echo '<i class="close icon-cancel"></i>';
		echo '</a>';
		
	}
?>

<!-- .header_placeholder 4sticky  -->
<div class="header_placeholder"></div>
<div id="Top_bar" class="loading">
  <div class="container">
    <div class="column one">
      <div class="top_bar_left clearfix"> 
        
        <!-- .logo -->
        <div class="logo<?php if( $textlogo = mfn_opts_get('logo-text') ) echo ' text-logo'; ?>">
          <?php 
						// Logo | Options
						$logo_options = mfn_opts_get( 'logo-link' ) ? mfn_opts_get( 'logo-link' ) : false;
						$logo_before = $logo_after = '';

						// Logo | Link
						if( isset( $logo_options['link'] ) ){
							$logo_before 	= '<a id="logo" href="'. get_home_url() .'" title="'. get_bloginfo( 'name' ) .'">';
							$logo_after 	= '</a>';
						} else {
							$logo_before 	= '<span id="logo">';
							$logo_after 	= '</span>';
						}
						
						// Logo | H1
						if( is_front_page() ){
							if( is_array( $logo_options ) && isset( $logo_options['h1-home'] )){
								$logo_before = '<h1>'. $logo_before;
								$logo_after .= '</h1>';
							}
						} else {
							if( is_array( $logo_options ) && isset( $logo_options['h1-all'] )){
								$logo_before = '<h1>'. $logo_before;
								$logo_after .= '</h1>';
							}
						}
						
						// Logo | Source
						if( $layoutID = mfn_layout_ID() ){
						
							$logo_src 		= get_post_meta( $layoutID, 'mfn-post-logo-img', true );
							$logo_sticky 	= get_post_meta( $layoutID, 'mfn-post-sticky-logo-img', true ) ? get_post_meta( $layoutID, 'mfn-post-sticky-logo-img', true ) : $logo_src;
							$logo_mobile 	= get_post_meta( $layoutID, 'mfn-post-responsive-logo-img', true ) ? get_post_meta( $layoutID, 'mfn-post-responsive-logo-img', true ) : $logo_src;
													
						} else {
						
							$logo_src 		= mfn_opts_get( 'logo-img', THEME_URI .'/images/logo/logo.png' );
							$logo_sticky 	= mfn_opts_get( 'sticky-logo-img' ) ? mfn_opts_get( 'sticky-logo-img' ) : $logo_src;
							$logo_mobile 	= mfn_opts_get( 'responsive-logo-img' ) ? mfn_opts_get( 'responsive-logo-img' ) : $logo_src;
						
						}
						
						// Logo | SVG width
						if( $width = mfn_opts_get( 'logo-width' ) ){
							$width = 'width="'. $width .'"';
							$class = ' svg';
						} else {
							$width = false;
							$class = false;
						}
						
						// Logo | Print
						echo $logo_before;

							if( $textlogo ){
								
								echo $textlogo;
								
							} else {
								
								echo '<img class="logo-main scale-with-grid'. $class .'" src="'. $logo_src .'" alt="'. mfn_get_attachment_data( $logo_src, 'alt' ) .'" '. $width .'/>';
								echo '<img class="logo-sticky scale-with-grid'. $class .'" src="'. $logo_sticky .'" alt="'. mfn_get_attachment_data( $logo_sticky, 'alt' ) .'" '. $width .'/>';
								echo '<img class="logo-mobile scale-with-grid'. $class .'" src="'. $logo_mobile .'" alt="'. mfn_get_attachment_data( $logo_mobile, 'alt' ) .'" '. $width .'/>';
								
							}
							
						echo $logo_after;
					?>
        </div>
        <div class="menu_wrapper">
          <?php 
						if( ( mfn_header_style( true ) != 'header-overlay' ) && ( mfn_opts_get( 'menu-style' ) != 'hide' ) ){
	
							// TODO: modify the mfn_header_style() function to be able to find the text 'header-split' in headers array
							
							// #menu --------------------------
							if( in_array( mfn_header_style(), array( 'header-split', 'header-split header-semi', 'header-below header-split' ) ) ){
								// split -------
								mfn_wp_split_menu();
							} else {
								// default -----
								mfn_wp_nav_menu();
							}
						
							// responsive menu button ---------
							$mb_class = '';
							if( mfn_opts_get('header-menu-mobile-sticky') ) $mb_class .= ' is-sticky';

							echo '<a class="responsive-menu-toggle '. $mb_class .'" href="#">';
								if( $menu_text = mfn_opts_get( 'header-menu-text' ) ){
									echo '<span>'. $menu_text .'</span>';
								} else {
									echo '<i class="icon-menu"></i>';
								}  
							echo '</a>';
							
						}
					?>
        </div>
        <div class="secondary_menu_wrapper"> 
          <!-- #secondary-menu -->
          <?php mfn_wp_secondary_menu(); ?>
        </div>
        <div class="banner_wrapper">
          <?php mfn_opts_show( 'header-banner' ); ?>
        </div>
        <div class="search_wrapper"> 
          <!-- #searchform -->
          
          <?php get_search_form( true ); ?>
        </div>
      </div>
      <?php 
				if( ! mfn_opts_get( 'top-bar-right-hide' ) ){
					get_template_part( 'includes/header', 'top-bar-right' );
				}
			?>
    </div>
  </div>
</div>
