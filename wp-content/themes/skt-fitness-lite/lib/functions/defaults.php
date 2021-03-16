<?php
function complete_option_defaults() {
	$defaults = array(
		'converted' => '',
		'site_layout_id' => 'site_full',
		'woo_shop_page_layout_id' => 'wooshop_layout3',
		'woo_single_product_layout_id' => 'woosingle_layout3',
		'single_post_layout_id' => 'single_layout1',
		'header_layout_id' => 'header_layout2',
		'center_width' => 83.50,
		'content_bg_color' => '#ffffff',
		'divider_icon' => 'fa-stop',
		'head_transparent' => '1',
		'trans_header_color' => '#fff',
		'totop_id' => '1',
		'footer_text_id' => __('<div class="col-6">&copy; Copyright 2020. <span>SKT Fitness</span>. All Rights Reserved</div><div class="col-6">Design By <span> SKTThemes</span></div>', 'complete'),
		'phntp_text_id' => __('Have Any Questions?', 'complete'),
		'emltp_text' => __('<i class="fa fa-envelope" aria-hidden="true"></i> support@sitename.com', 'complete'),
		'sintp_text' => __('<i class="fa fa-phone" aria-hidden="true"></i> 800 2345 6789', 'complete'),
		'suptp_text' => __('[social_area]
			[social icon="facebook" link="#"]
			[social icon="twitter" link="#"]
			[social icon="google-plus" link="#"]
			[social icon="linkedin" link="#"]
		[/social_area]', 'complete'),
		'footmenu_id' => '1',
		'copyright_center' => '',
		'copyright_bg_color' => '#0f0f0f',
		
		
		
		'custom_slider' => '',
		
		'slider_type_id' => 'static',
		
		'slideefect' => 'fade',
		'slideanim' => '700',
		'slidepause' => '4000',
		'slidenav' => 'true',
		'slidepage' => 'false',
		
		'n_slide_time_id' => '6000',
		'slide_height' => '500px',
		'slidefont_size_id' => '36px',
		'slider_txt_hide' => '',
		
		'slide_image1' => ''.get_template_directory_uri().'/images/slides/slider1.jpg',
        'slide_title1' => '<span>Get in Shape & </span>Be Healthy',
        'slide_desc1' => '3D is a powerful approach to non-surgical<br>face and body treatments.',
        'slide_link1' => '#',
        'slide_btn1' => 'Read More',
        
        'slide_image2' => ''.get_template_directory_uri().'/images/slides/slider2.jpg',
        'slide_title2' => '<span>Get in Shape & </span>Be Healthy',
        'slide_desc2' => '3D is a powerful approach to non-surgical<br>face and body treatments.',
        'slide_link2' => '#',
        'slide_btn2' => 'Read More',
        
        'slide_image3' => ''.get_template_directory_uri().'/images/slides/slider3.jpg',
        'slide_title3' => '<span>Get in Shape & </span>Be Healthy',
        'slide_desc3' => '3D is a powerful approach to non-surgical<br>face and body treatments.',
        'slide_link3' => '#',
        'slide_btn3' => 'Read More',

		'post_info_id' => '1',
		'post_nextprev_id' => '1',
		'post_comments_id' => '1',
		'page_header_color' => '#545556',
		'pageheader_bg_image' => ''.get_template_directory_uri().'/images/default-header-img.jpg',
		'hide_pageheader' => '',
		'page_header_txtcolor' => '#555555',
		
		'post_header_color' => '#545556',
		'postheader_bg_image' => ''.get_template_directory_uri().'/images/default-header-img.jpg',
		'hide_postheader' => '',		

		'blog_cat_id' => '',
		'blog_num_id' => '9',
		'blog_layout_id' => '',
		'show_blog_thumb' => '1',
		
		'sec_color_id' => '#e73a34',
		'submnu_textcolor_id' => '#282828',
		'submnbg_color_id' => '#ffffff',
		'mnshvr_color_id' => '#222',
		'mobbg_color_id' => '#282828',
		'mobbgtop_color_id' => '#e73a34',
		'mobmenutxt_color_id' => '#ffffff',
		'mobmenutxt_active_color_id' => '#e73a34',
		
		'mobtoggle_color_id' => '#e73a34',
		'mobtoggleinner_color_id' => '#ffffff',
		
		'sectxt_color_id' => '#ffffff',
		'content_font_id' =>  array('font-family' => 'Assistant', 'font-size' => '16px'),
		'primtxt_color_id' => '#2b2b2b',
		'logo_image_id' => array('url'=>''.get_template_directory_uri().'/images/logo.png'),
		'logo_font_id' => array('font-family' => 'Assistant', 'font-size' => '36px'),
		'logo_color_id' => '#343434',
		
		'logo_image_height' => '40px;',
		'logo_image_width' => '198px;',
		'logo_margin_top' => '30px;',
		
		'tpbt_font_id' => array('font-family' => 'Assistant', 'font-size' => '16px'),
		'tpbt_color_id' => '#ffffff',
		'tpbt_hvcolor_id' => '#edecec',	
		
		'sldtitle_font_id' => array('font-family' => 'Assistant', 'font-size' => '90px'),
		'slddesc_font_id' => array('font-family' => 'Poppins', 'font-size' => '19px'),
		'sldbtn_font_id' => array('font-family' => 'Assistant', 'font-size' => '17px'),
		
		'slidetitle_color_id' => '#ffffff',	
		'slddesc_color_id' => '#ffffff',	
		'sldbtntext_color_id' => '#232323',
		'sldbtn_color_id' => '#fff',
		'sldbtn_hvtextcolor_id' => '#ffffff',
		'sldbtn_hvcolor_id' => '#282828',
		'slideshadow_color_id' => '#040608',
		'slidetitleshadow_color_id' => '#000',

		'slide_pager_color_id' => '#ffffff',	
		'slide_active_pager_color_id' => '#e73a34',
		'slider_wave_color' => '#F6F9FE',
			
		'global_link_color_id' => '#030305',
		'global_link_hvcolor_id' => '#685031',		
		
		'global_h1_color_id' => '#282828',
		'global_h1_hvcolor_id' => '#e73a34',	
		'global_h2_color_id' => '#282828',
		'global_h2_hvcolor_id' => '#e73a34',
		'global_h3_color_id' => '#282828',
		'global_h3_hvcolor_id' => '#e73a34',
		'global_h4_color_id' => '#282828',
		'global_h4_hvcolor_id' => '#e73a34',
		'global_h5_color_id' => '#282828',
		'global_h5_hvcolor_id' => '#e73a34',
		'global_h6_color_id' => '#282828',
		'global_h6_hvcolor_id' => '#e73a34',	
		
		'post_meta_color_id' => '#606060',
		'team_box_color_id' => '#19232f',
		'team_box_title_id' => '#fff',
		'team_box_designation_id' => '#959595',
		
		'social_text_color_id' => '#fff',
		'social_icon_color_id' => '#202020',
		'social_hover_icon_color_id' => '#e73a34',
		'testimonialbox_color_id' => '#fff',		
		'testimonialbox_txt_color' => '#fb393a',
		'testimonialbox_deg_color' => '#6a6a6a',
		'testimonialbox_cont_color' => '#6a6a6a',
		'testimonial_pager_color_id' => '#fff',
		'testimonialbox_border_color' => '#313131',
		'testimonial_activepager_color_id' => '#e73a34',
		'gallery_filtertxt_color_id' => '#19232f',
		'gallery_activefiltertxt_color_id' => '#e63b34',
		'gallery_title_color_id' => '#cecfd1',
		'gallery_title_bg_color_id' => '#e63b34',
		'gallery_timefiltertxt_color_id' => '#19232f',
		'skillsbar_bgcolor_id' => '#f8f8f8',
		'skillsbar_text_color_id' => '#ffffff',								
		'global_h1_font_id' => array('font-family' => 'Assistant', 'font-size' => '32px'),
		'global_h2_font_id' => array('font-family' => 'Assistant', 'font-size' => '24px'),
		'global_h3_font_id' => array('font-family' => 'Assistant', 'font-size' => '24px'),
		'global_h4_font_id' => array('font-family' => 'Assistant', 'font-size' => '13px'),
		'global_h5_font_id' => array('font-family' => 'Assistant', 'font-size' => '11px'),
		'global_h6_font_id' => array('font-family' => 'Assistant', 'font-size' => '9px'),
		
		'contact_title' => 'Contact Info',
		'contact_address' => 'Donec ultricies mattis nulla Australia',
		'contact_phone' => '0789 256 321',
		'contact_email' => 'info@companyname.com',
		'contact_company_url' => 'http://demo.com',
		'contact_google_map' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d336003.6066860609!2d2.349634820486094!3d48.8576730786213!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47e66e1f06e2b70f%3A0x040b82c3688c9460!2sParis%2C+France!5e0!3m2!1sen!2sin!4v1433482358672',
		
		'head_bg_trans' => '1',
		'head_color_id' => '#fff',
		'head_info_color_id' => '#222',
		'head_info_bg_trans' => '1',
		'header_border_color' => '#dddddd',
		'menutxt_color_id' => '#3d3d3d',
		'menutxt_color_hover' => '#e73a34',
		'menutxt_color_active' => '#e73a34',
		'menu_quote_color_top' => '#17d9f6',
		'menu_quote_color_bottom' => '#1b80e9',
		'menu_size_id' => '16px',
		'sidebar_color_id' => '#FFFFFF',
		'sidebarborder_color_id' => '#eeeff5',
		'sidebar_tt_color_id' => '#666666',
		'sidebartxt_color_id' => '#999999',
		'sidebarlink_color_id' => '#e73a34',
		'sidebarlink_hover_color_id' => '#999999',
		'flipbg_front_color_id' => '#ffffff',
		'flipbg_back_color_id' => '#f7f7f7',
		'flipborder_front_color_id' => '#e0e0e0',
		'flipborder_back_color_id' => '#000000',
		'divider_color_id' => '#8c8b8b',
		'wgttitle_size_id' => '16px',
		'timebox_color_id' => '#ffffff',
		'timeboxborder_color_id' => '#dedede',
		'gridbox_color_id' => '#ffffff',
		'gridboxborder_color_id' => '#cccccc',
		
		'service_box_bg' => '#e73a34',
		'service_box_bg_hover' => '#685031',
		'box_color_text' => '#ffffff',
		'go_bg_color' => '#ffffff',
		'box_right_border' => '#30a0fd',
		
		'expand_bg_color' => '#e73a34',
		'expand_text_color' => '#000000',
		
		'h_seprator_color' => '#e73a34',
		'h_seprator_text_color' => '#000000',
		
		'square_bg_color' => '#ffffff',
		'square_bg_hover_color' => '#79ab9f',
		'square_title_color' => '#000000',
		
		'style3_bg_color' => '#ffffff',
		'style3_hover_bg_color' => '#9f9f9f',
		'style3_border_color' => '#eaeaea',
		
		'perfect_bg_color' => '#ffffff',
		'perfect_border_color' => '#eaeaea',
		'perfect_hover_border_color' => '#e73a34',
 
		'foot_layout_id' => '3',
		'footer_color_id' => '#141414',
		'footer_bg_image' => '',
		'footwdgtxt_color_id' => '#c7c7c7',
		'footer_title_color' => '#fff',
		'footer_title_border_color' => '#fff',
		'ptitle_font_id' =>  array('font-family' => 'Assistant', 'subsets'=>'latin'),
		'mnutitle_font_id' =>  array('font-family' => 'Poppins', 'subsets'=>'latin'),
		'title_txt_color_id' => '#666666',
		'link_color_id' => '#3590ea',
		'link_color_hover' => '#1e73be',
		'txt_upcase_id' => '',
		'mnutxt_upcase_id' => '0',
		'copyright1_bg_color' => '#0f0f0f',
		'copyright_txt_color' => '#cecece',
		
		//Footer Info Box
		'footer_infobox_border_color' => '#435f8e',
		
		'footer_menu_color' => '#c7c7c7',
		'footer_menu_hover_color' => '#e73a34',
		
		//Featured Box
		'featured_section_title' => __('Featured Boxes', 'complete'),
		'homeblock_bg_setting' => '',
		'ftd_bg_video' => '',
		'homeblock_title_color' => '#000000',
		'homeblock_color_id' => '#f2f2f2',
		'featured_image_height' => '70px;',
		'featured_image_width' => '70px;',
		'featured_excerpt' => '35',
		'featured_block_bg' => '#ffffff',
		'featured_block_button' => __('Read More', 'complete'),
		'recentpost_block_button' => __('Read More', 'complete'),
		
		'featured_block_button_bg' => '#e73a34',
		'featured_block_hover_button_bg' => '#141414',
		
		//Footer Column 1
		'foot_cols1_title' => __('SKT FITNESS', 'complete'),
		'foot_cols1_content' => '<p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vivamus condiintum mauris a quam sodales rutrum. Donec non placerat urna.<br><br> Vivamus condiintum mauris a quam sodales rutrum. Donec non placerat urna.</p>',
		//Footer Column 1
		
		//Footer Column 2
		'foot_cols2_title' => __('QUICK LINKS', 'complete'),
		'foot_cols2_content' => '[footermenu menu="footer"]',
		//Footer Column 2
		
		//Footer Column 3
		'foot_cols3_title' => __('CONTACT INFO', 'complete'),
		'foot_cols3_content' => 'Street 238,52 tempor <br> Donec ultricies mattis nulla, suscipit risus tristique utmattis nulla.[space height="25"]<p style="margin-bottom: 0px;"><span style="margin-right: 30px;">Phone:</span>+1 500 000 0000</p><p style="margin-bottom: 0px;"><span style="margin-right: 34px;">E-mail:</span>demo@lorem.com</a></p><p style="margin-bottom: 0px;"><span style="margin-right: 23px;">Website:</span>http://demo.com</a></p>',
		//Footer Column 3
		
		'footer_logo_id' =>array( 'url'=> ''.get_template_directory_uri().'/images/footer-logo.png' ),
		'footer_social_icon' => __('[social_area][social icon="facebook" link="#"][social icon="twitter" link="#"][social icon="google-plus" link="#"][social icon="linkedin" link="#"][social icon="pinterest" link="#"][social icon="youtube" link="#"][/social_area]','complete'),
		
		'hide_foot_infobox' => '',

		
		'social_button_style' => 'simple',
		'social_show_color' => '',
		'social_bookmark_pos' => 'footer',
		'social_bookmark_size' => 'normal',
		'social_single_id' => '1',
		'social_page_id' => '',
		
		'post_lightbox_id' => '1',
		'post_gallery_id' => '1',
		'cat_layout_id' => '4',
		'hide_mob_slide' => '',
		'hide_mob_rightsdbr' => '',
		'hide_mob_page_header' => '1',
		'custom-css' => 'span.desc{display: none;}',
	);
	
      $options = get_option('complete',$defaults);

      //Parse defaults again - see comments
      $options = wp_parse_args( $options, $defaults );

	return $options;
}?>