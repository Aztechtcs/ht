<?php
// VC_row customization

vc_add_param("vc_row", array(
   "type" => "textfield",
   "class" => "",
   "heading" => esc_html__("Want to have top padding?",'maxhost'),
   "param_name" => "top_padding",
   "value" => "",
   "description" => esc_html__("Input top padding in pixel (i.e 50px).", "maxhost"),
));

vc_add_param("vc_row", array(
   "type" => "textfield",
   "class" => "",
   "heading" => esc_html__("Want to have bottom padding?",'maxhost'),
   "param_name" => "bottom_padding",
   "value" => "",
   "description" => esc_html__("Input bottom padding in pixel (i.e 50px).", "maxhost"),
));

vc_add_param("vc_row", array(
   "type" => "textfield",
   "class" => "",
   "heading" => esc_html__("Want to have left padding?",'maxhost'),
   "param_name" => "zleft_padding",
   "value" => "",
   "description" => esc_html__("Input left padding in pixel (i.e 50px).", "maxhost"),
));

vc_add_param("vc_row", array(
   "type" => "textfield",
   "class" => "",
   "heading" => esc_html__("Want to have right padding?",'maxhost'),
   "param_name" => "zright_padding",
   "value" => "",
   "description" => esc_html__("Input right padding in pixel (i.e 50px).", "maxhost"),
));

// VC_column_text customization

vc_add_param("vc_column_text", array(
   "type" => "colorpicker",
   "class" => "",
   "heading" => esc_html__("Play text color", "maxhost"),
   "param_name" => "txt_color",
   "value" => "",
   "description" => '',
));

/****************************************************
Removing default templates and adding custom template
****************************************************/
add_filter( 'vc_load_default_templates', 'my_custom_template_modify_array' ); // Remove default templates
function my_custom_template_modify_array( $data ) {
    return array(); // This will remove all default templates. Basically you should use native PHP functions to modify existing array and then return it.
}

add_action( 'vc_load_default_templates_action','maxhost_custom_template_one_for_vc' ); // Adding Custom template
function maxhost_custom_template_one_for_vc() {
    $data               = array(); // Create new array
    $data['name']       = esc_html__( 'Maxhost Home Style - 1', 'maxhost' ); // Assign name for your custom template
    $data['weight']     = 0; // Weight of your template in the template list
    $data['image_path'] = get_template_directory_uri().'/vc_templates/images/custom_template_thumbnail.jpg';
    $data['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row_content_no_spaces"][vc_column][rev_slider_vc alias="home_style_1"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][hosting_domain_search section_style="m-top0 domain-search shape-white" search_pholder="Enter Your Domain Name Here" button_label="Search Here" search_action_url="http://fluentthemes.com/wp/maxhost/whmcs/domainchecker.php?systpl=maxhost" sample_domain1=".com" sample_domain1_pricing="$3.95" sample_domain2=".org" sample_domain2_pricing="$5.95" sample_domain3=".info" sample_domain3_pricing="$7.95" sample_domain4=".net" sample_domain4_pricing="$6.95" sample_domain5=".biz" sample_domain5_pricing="$4.95" small_note="All prices per annum" domain=".com
.org
.net
.info
.biz
.co
.co.uk"][/vc_column][/vc_row][vc_row][vc_column][maxhost_shortcodes_title_one left_text="We offer
Awesome Services" right_text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua mollit anim Ut enim ad minim veniam laboreua et dolore."][/vc_column][/vc_row][vc_row][vc_column width="1/3"][maxhost_shortcodes_iconic_features_one icon="user" title="Easy to Manage" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa."][maxhost_shortcodes_iconic_features_one icon="pencil" title="Backup Available" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa." active="false"][/vc_column][vc_column width="1/3"][maxhost_shortcodes_iconic_features_one icon="laptop" title="Secure Your Website" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa."][maxhost_shortcodes_iconic_features_one icon="phone" title="24/7 Customer Support" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa."][/vc_column][vc_column width="1/3"][vc_single_image image="23" img_size="full"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_shortcodes_htab number_of_tabs="4" icon1="bargraph" image1="25" icon2="browser " image2="30" icon3="layers " image3="25" icon4="focus" image4="30" title1="Unlimited Traffic" title_one1="Get Started!" title_two1="Today's Offers" text1="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet." bullets1="Unlimited Disk Space
Free Domain Registration
99.99% Uptime Guarantee
Unlimited Databases List
Unlimited Domains
24/7 Full Online Support" bottom_note1="Starts at $9.99/month" title2="High Level Security" title_one2="High Level Security" title_two2="Get Started!" text2="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet." bullets2="Free Domain Registration
Unlimited Disk Space
99.99% Uptime Guarantee
Unlimited Databases List
Unlimited Domains
24/7 Full Online Support" bottom_note2="Starts at $50.99/year" title3="Experienced Staff" title_one3="Get Started!" title_two3="Today's Offers" text3="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet." bullets3="Free Domain Registration
Unlimited Disk Space
Unlimited Databases List
99.99% Uptime Guarantee
Unlimited Domains
24/7 Full Online Support" bottom_note3="Starts at $50.99/year" title4="Backups Available" title_one4="Get Started!" title_two4="Today's Offers" text4="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet." bullets4="Unlimited Disk Space
Free Domain Registration
Unlimited Databases List
99.99% Uptime Guarantee
Unlimited Domains
24/7 Full Online Support" bottom_note4="Starts at $9.99/month"][/vc_column][/vc_row][vc_row top_padding="30px"][vc_column][maxhost_shortcodes_title_one left_text="Select your
Hosting platforms" right_text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua mollit anim Ut enim ad minim veniam laboreua et dolore."][/vc_column][/vc_row][vc_row][vc_column width="1/4"][maxhost_shortcodes_pricing_one plane_name="SHARED HOSTING" price="$9.9" duration="month" button_text="Order Now" button_url="#" features="5 GB Storage
Unlimited projects
15 Email Accounts
2 Domain Hosted Support
24/7 Full Support"][/vc_column][vc_column width="1/4"][maxhost_shortcodes_pricing_one plane_name="Reseller Hosting" price="$11.9" duration="month" button_text="Order Now" button_url="#" active="false" features="10 GB Storage
Unlimited projects
25 Email Accounts
2 Domain Hosted Support
24/7 Full Support"][/vc_column][vc_column width="1/4"][maxhost_shortcodes_pricing_one plane_name="Dedicated Hosting" price="$21.9" duration="month" button_text="Order Now" button_url="#" features="30 GB Storage
Unlimited projects
35 Email Accounts
2 Domain Hosted Support
24/7 Full Support"][/vc_column][vc_column width="1/4"][maxhost_shortcodes_pricing_one plane_name="Unlimited HOSTING" price="$41.9" duration="month" button_text="Order Now" button_url="#" features="Unlimited GB Storage
Unlimited projects
Unlimited Email Accounts
Unlimited Domain Hosted Support
24/7 Full Support"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_features_block_one left_heading1="Host with us" left_heading2="SPEED UP YOUR SITE" image_one="27" right_heading1="New domains" right_heading2="available" domain_name1=".com" button_label1="Buy $9.99" button_url1="#" domain_name2=".net" button_label2="Buy $9.99" button_url2="#" domain_name3=".org" button_label3="Buy $9.99" button_url3="#" domain_name4=".biz" button_label4="Buy $9.99" button_url4="#" domain_name5=".info" button_label5="Buy $9.99" button_url5="#" features_one="Effective Control Panel
Nextgen Hosting
Dedicated Support
Extended Speed
Completely Secured
Simple Configuration"][/vc_column][/vc_row][vc_row][vc_column width="1/2"][maxhost_shortcodes_blog_post_one num_post="2" heading1="latest news" heading2="from our blog"][/vc_column][vc_column width="1/2"][vc_empty_space height="70px"][maxhost_shortcodes_title_six heading1="Have any" heading2="Questions?"][maxhost_shortcodes_accordion_one number_of_tabs="3" title1="Awesome Client Support" text1="Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod hsa no tempor incididunt labore dolore magna aliqua. Sed ipsum consectetur its adipisicing elit sed do eiusmod tempor incididunt labo dolore. amet consectetur adipisicing eil sed deiusmod hsa no tempor incididun." title2="Secure Your Website" text2="Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod hsa no tempor incididunt labore dolore magna aliqua. Sed ipsum consectetur its adipisicing elit sed do eiusmod tempor incididunt labo dolore. amet consectetur adipisicing eil sed deiusmod hsa no tempor incididun." title3="24/7 Customer Support" text3="Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod hsa no tempor incididunt labore dolore magna aliqua. Sed ipsum consectetur its adipisicing elit sed do eiusmod tempor incididunt labo dolore. amet consectetur adipisicing eil sed deiusmod hsa no tempor incididun."][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_shortcodes_testimonial_one section_heading="WHAT PEOPLE SAY ABOUT US" number_of_tabs="3" client_name0="John Deo" company_name0="from examedia" text0="Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing Nulla amet elt wisi bulum Integer luctus et." client_name1="Jane Doe" company_name1="from axamedie" text1="Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing Nulla amet elt wisi bulum Integer luctus et." client_name2="John Doe" company_name2="from examedia" text2="Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing Nulla amet elt wisi bulum Integer luctus et."][/vc_column][/vc_row][vc_row top_padding="80px"][vc_column][maxhost_clients_block_one heading1="Find out our" heading2="PRECIOUS CLIENTS" image_seven="43" image_one="44" image_two="45" image_three="46" image_four="47" image_five="46" image_six="48"][/vc_column][/vc_row]
CONTENT;
  
    vc_add_default_templates( $data );
}

add_action( 'vc_load_default_templates_action','maxhost_custom_template_two_for_vc' ); // Adding Custom template
function maxhost_custom_template_two_for_vc() {
    $data               = array(); // Create new array
    $data['name']       = esc_html__( 'Maxhost Home Style - 2', 'maxhost' ); // Assign name for your custom template
    $data['weight']     = 0; // Weight of your template in the template list
    $data['image_path'] = get_template_directory_uri().'/vc_templates/images/custom_template_thumbnail.jpg';
    $data['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row_content_no_spaces"][vc_column][rev_slider_vc alias="home_style_2"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][hosting_domain_search section_style="m-top5 m-bottom5" section_heading1="CHECK YOUR DOMAIN" search_pholder="Enter your Domain Name here.." button_label="Search" search_action_url="http://fluentthemes.com/wp/maxhost/whmcs/domainchecker.php?systpl=maxhost" sample_domain1=".com" sample_domain1_pricing="$3.95" sample_domain2=".org" sample_domain2_pricing="$5.95" sample_domain3=".info" sample_domain3_pricing="$7.95" sample_domain4=".net" sample_domain4_pricing="$6.95" sample_domain5=".biz" sample_domain5_pricing="$4.95" small_note="Domains only from $3.95/per year" view_domain_url="#" bulk_domain_url="#" transfer_domain_url="#" domain=".com
.org
.net
.info
.biz
.co
.co.uk"][/vc_column][/vc_row][vc_row top_padding="20px"][vc_column][maxhost_shortcodes_title_three heading1="What's New" heading2="Special Features" left_text="We offer
Awesome Services" right_text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua mollit anim Ut enim ad minim veniam laboreua et dolore."][/vc_column][/vc_row][vc_row][vc_column width="1/3"][maxhost_shortcodes_iconic_features_two icon="user" title="Easy to Manage" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa."][maxhost_shortcodes_iconic_features_two icon="pencil" title="Marketing Services" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa." active="false"][/vc_column][vc_column width="1/3"][maxhost_shortcodes_iconic_features_two icon="cloud-upload" title="Data on Cloudfront" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa."][maxhost_shortcodes_iconic_features_two icon="speedometer " title="Parallels Plesk Panel" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa."][/vc_column][vc_column width="1/3"][maxhost_shortcodes_iconic_features_two icon="reload " title="Secure &amp; Fast loading" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa."][maxhost_shortcodes_iconic_features_two icon="call-in" title="24/7 Customer Support" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa."][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_offers_carousel heading1="What's New" heading2="Special offers" number_of_tabs="2" text_heading_bold0="Get Started!" text_heading_thin0="Today's Offers" text0="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet." image0="http://fluentthemes.com/wp/maxhost/wp-content/uploads/2016/04/site-img82.png" price_title0="Starts at" price0="$9.95" price_duration0="/mo" text_heading_bold1="Get Started!" text_heading_thin1="Today's Offers" text1="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet." image1="http://fluentthemes.com/wp/maxhost/wp-content/uploads/2016/04/site-img82.png" price_title1="Starts at" price1="$11.9" price_duration1="/mo" crossed_top="false" crossed_bottom="false" features_one0="Unlimited Disk Space
Free Domain Registration
99.99% Uptime Guarantee
Unlimited Databases List
Unlimited Domains
24/7 Full Online Support
Free Domain Registration
99.99% Uptime Guarantee" features_one1="Free Domain Registration
Unlimited Disk Space
99.99% Uptime Guarantee
Unlimited Databases List
Unlimited Domains
24/7 Full Online Support
99.99% Uptime Guarantee
Free Domain Registration"][/vc_column][/vc_row][vc_row top_padding="30px"][vc_column][maxhost_shortcodes_title_three heading1="Select your" heading2="Hosting platforms" left_text="Select your
Hosting platforms" right_text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua mollit anim Ut enim ad minim veniam laboreua et dolore."][/vc_column][/vc_row][vc_row bottom_padding="20px"][vc_column width="1/4"][maxhost_shortcodes_pricing_three plane_name="SHARED HOSTING" price="$9.9" duration="month" button_text="Order Now" button_url="#" features="5 GB Storage
Unlimited projects
15 Email Accounts
2 Domain Hosted Support
24/7 Full Support"][/vc_column][vc_column width="1/4"][maxhost_shortcodes_pricing_three plane_name="Reseller Hosting" price="$11.9" duration="month" button_text="Order Now" button_url="#" active="false" features="10 GB Storage
Unlimited projects
25 Email Accounts
2 Domain Hosted Support
24/7 Full Support"][/vc_column][vc_column width="1/4"][maxhost_shortcodes_pricing_three plane_name="Dedicated Hosting" price="$21.9" duration="month" button_text="Order Now" button_url="#" features="30 GB Storage
Unlimited projects
35 Email Accounts
2 Domain Hosted Support
24/7 Full Support"][/vc_column][vc_column width="1/4"][maxhost_shortcodes_pricing_three plane_name="Unlimited HOSTING" price="$41.9" duration="month" button_text="Order Now" button_url="#" features="Unlimited GB Storage
Unlimited projects
Unlimited Email Accounts
Unlimited Domain Hosted Support
24/7 Full Support"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_features_block_two heading1="We Teach the web world" heading2="desktops, mobiles, Tablets" text="Excepteur sit occaecat cupidatan is proident, onetl sunt in culpa Ut enim ad minim venam, quis nostrud enim ad Lorem ipsum dolor sit ame elit." image_two="472" image_one="473" crossed_top="false" crossed_bottom="false" features_one="Excepteur sit occaecat cupidatan
Cupidatan Excepteur sit occaecat
Onetl sunt in culpa Ut enim ad minim venam
Quis nostrud enim ad Lorem ipsum dolor
Consectetur adipisicing elit Atque aliquam"][/vc_column][/vc_row][vc_row top_padding="40px" bottom_padding="40px"][vc_column width="1/2"][maxhost_shortcodes_title_six heading1="Have any" heading2="Questions?"][maxhost_shortcodes_accordion_two number_of_tabs="4" title1="Awesome Client Support" text1="Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod hsa no tempor incididunt labore dolore magna aliqua. Sed ipsum consectetur its adipisicing elit sed do eiusmod tempor incididunt labo dolore. amet consectetur adipisicing eil sed deiusmod hsa no tempor incididun." title2="Secure Your Website" text2="Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod hsa no tempor incididunt labore dolore magna aliqua. Sed ipsum consectetur its adipisicing elit sed do eiusmod tempor incididunt labo dolore. amet consectetur adipisicing eil sed deiusmod hsa no tempor incididun." title3="24/7 Customer Support" text3="Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod hsa no tempor incididunt labore dolore magna aliqua. Sed ipsum consectetur its adipisicing elit sed do eiusmod tempor incididunt labo dolore. amet consectetur adipisicing eil sed deiusmod hsa no tempor incididun." title4="free website optimization" text4="Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod hsa no tempor incididunt labore dolore magna aliqua. Sed ipsum consectetur its adipisicing elit sed do eiusmod tempor incididunt labo dolore. amet consectetur adipisicing eil sed deiusmod hsa no tempor incididun."][/vc_column][vc_column width="1/2"][maxhost_shortcodes_testimonial_two section_heading="WHAT PEOPLE SAYs" section_heading2="Testimonials" number_of_tabs="3" client_name0="John Doe" company_name0="from examedia" text0="Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod hsa no tempor incididunt labore dolore magna aliqua. Sed ipsum consectetur its adipisicing elit sed do eiusmod tempor incididunt labo dolore. amet consectetur adipisicing eil sed adipisicing elitadipisicing elit adipisicing elit incididun adipisicing eiusmod elit." client_name1="Michel" company_name1="from examedia" text1="Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod hsa no tempor incididunt labore dolore magna aliqua. Sed ipsum consectetur its adipisicing elit sed do eiusmod tempor incididunt labo dolore. amet consectetur adipisicing eil sed adipisicing elitadipisicing elit adipisicing elit incididun adipisicing eiusmod elit." client_name2="Jane Doe" company_name2="from examedia" text2="Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod hsa no tempor incididunt labore dolore magna aliqua. Sed ipsum consectetur its adipisicing elit sed do eiusmod tempor incididunt labo dolore. amet consectetur adipisicing eil sed adipisicing elitadipisicing elit adipisicing elit incididun adipisicing eiusmod elit."][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_shortcodes_blog_post_two num_post="3" crossed_top="false" crossed_bottom="false" heading1="latest news" heading2="from our blog"][/vc_column][/vc_row][vc_row top_padding="60px"][vc_column][maxhost_clients_block_one heading1="Find out our" heading2="PRECIOUS CLIENTS" image_seven="43" image_one="44" image_two="45" image_three="46" image_four="47" image_five="46" image_six="48"][/vc_column][/vc_row]
CONTENT;
  
    vc_add_default_templates( $data );
}

add_action( 'vc_load_default_templates_action','maxhost_custom_template_three_for_vc' ); // Adding Custom template
function maxhost_custom_template_three_for_vc() {
    $data               = array(); // Create new array
    $data['name']       = esc_html__( 'Maxhost Home Style - 3', 'maxhost' ); // Assign name for your custom template
    $data['weight']     = 0; // Weight of your template in the template list
    $data['image_path'] = get_template_directory_uri().'/vc_templates/images/custom_template_thumbnail.jpg';
    $data['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row_content_no_spaces"][vc_column][rev_slider_vc alias="home_style_3"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][hosting_domain_search section_style="m-top0 domain-search" section_heading1="CHECK YOUR DOMAIN" search_pholder="Enter your Domain Name here" button_label="Search Here" search_action_url="http://fluentthemes.com/wp/maxhost/whmcs/domainchecker.php?systpl=maxhost" small_note="Domains only from $1.95/per year" domain=".com
.net
.org
.info
.biz
co.uk"][/vc_column][/vc_row][vc_row top_padding="50px"][vc_column][maxhost_shortcodes_title_five heading1="WHAT we DO" heading2="Awesome Services"][/vc_column][/vc_row][vc_row bottom_padding="30px"][vc_column width="1/3"][maxhost_shortcodes_iconic_features_three icon="bargraph" title="Easy to Manage" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa officia deserunt mollit."][/vc_column][vc_column width="1/3"][maxhost_shortcodes_iconic_features_three icon="lifesaver " title="Secure Your Website" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa officia deserunt mollit." active="false"][/vc_column][vc_column width="1/3"][maxhost_shortcodes_iconic_features_three icon="clock " title="24/7 Customer Support" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa officia deserunt mollit."][/vc_column][/vc_row][vc_row full_width="stretch_row" parallax="content-moving" parallax_image="80" parallax_speed_bg="4.5" top_padding="80px" bottom_padding="45px"][vc_column][maxhost_shortcodes_title_five heading1="WHAT we DO" heading2="Awesome Services" font_color="white"][vc_row_inner][vc_column_inner width="1/3"][maxhost_shortcodes_pricing_two plane_name="SHARED HOSTING" price="$20 " duration="PER MONTH" button_text="Order Now" button_url="#" active="false" features="5 GB Storage
Unlimited projects
15 Email Accounts
2 Domain Hosted Support
24/7 Full Support"][/vc_column_inner][vc_column_inner width="1/3"][maxhost_shortcodes_pricing_two plane_name="Reseller Hosting" price="$70 " duration="PER MONTH" button_text="Order Now" button_url="#" features="10 GB Storage
Unlimited projects
25 Email Accounts
20 Domain Hosted Support
24/7 Full Support"][/vc_column_inner][vc_column_inner width="1/3"][maxhost_shortcodes_pricing_two plane_name="Dedicated Hosting" price="$110 " duration="PER MONTH" button_text="Order Now" button_url="#" features="Unlimited GB Storage
Unlimited projects
Unlimited Email Accounts
Unlimited Domain Hosted Support
24/7 Full Support"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row top_padding="70px"][vc_column][maxhost_shortcodes_title_six heading1="WHAT WILL YOU DO WITH YOUR DOMAIN" heading2="LAUNCH YOUR SITE WITH Us" font_color="black"][/vc_column][/vc_row][vc_row bottom_padding="30px"][vc_column width="1/2"][maxhost_shortcodes_iconic_features_four icon="cloud-upload" title="Easy to Manage" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui quis pellentesque vestibulum, nulla ante aliquet turpis."][maxhost_shortcodes_iconic_features_four icon="plane " title="Technical Service" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui quis pellentesque vestibulum, nulla ante aliquet turpis." active="false"][maxhost_shortcodes_iconic_features_four icon="mouse " title="Website Optimization" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui quis pellentesque vestibulum, nulla ante aliquet turpis."][/vc_column][vc_column width="1/2"][vc_single_image image="28" img_size="full"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_features_block_three left_heading1="the best web hosting" left_heading2="powerful vps hosting" price_title="Starts at" price="$ 9.99" price_duration="/mo" image_one="89" right_heading1="we are Trusted Company" right_heading2="1,00,000+ Happy Customers" image_two="90" image_three="91" image_four="92" image_five="93" image_six="94" image_seven="90" image_eight="91" image_nine="92" image_ten="94" features_one="Unlimited Disk Space
Unlimited Databases List
Free Domain Registration
Unlimited Databases List
99.99% Up-time Guarantee
24/7 Full Online Support"][/vc_column][/vc_row][vc_row top_padding="70px"][vc_column width="1/3"][maxhost_shortcodes_iconic_features_four icon="cloud-upload" title="Easy to Manage" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui elit."][maxhost_shortcodes_iconic_features_four icon="paper-plane" title="Technical Service" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui elit." active="false"][maxhost_shortcodes_iconic_features_four icon="settings" title="Website Optimization" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui elit."][/vc_column][vc_column width="1/3"][maxhost_shortcodes_htab_two number_of_tabs="3" image1="97" image2="98" image3="97" title1="Shared" text1="Excepteur sit occaecat cupidatan is proident, one sunt in culpa elit. Fusce dignissim purus enim, nec dignissim elit sollicitudin id." title2="VPS" text2="VPS epteur sit occaecat cupidatan is proident, one sunt in culpa elit. Fusce dignissim purus enim, nec dignissim elit sollicitudin id." title3="Dedicated" text3="Dedicated sit occaecat cupidatan is proident, one sunt in culpa elit. Fusce dignissim purus enim, nec dignissim elit sollicitudin id."][/vc_column][vc_column width="1/3"][maxhost_ad_block_one heading1="Need a" heading2="Reliable Hosting?" price_title="Best offer" price="$3.25*" price_duration="/month" button_label="Order Now" button_url="#" features_one="Free Domain
50 GB Disk Space
500 GB Bandwidth
Reliable Support"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_shortcodes_testimonial_three section_heading="Testimonials" section_heading2="What People Says" number_of_tabs="3" image0="http://fluentthemes.com/wp/maxhost/wp-content/uploads/2016/04/site-img3.jpg" image1="http://fluentthemes.com/wp/maxhost/wp-content/uploads/2016/04/site-img3.jpg" image2="http://fluentthemes.com/wp/maxhost/wp-content/uploads/2016/04/site-img3.jpg" client_name0="John Doe" company_name0="from examedia" text0="Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing Nulla amet elt wisi bulum Integer luctus et malesuada fames Aliquam erat ac ipsum dipiscing.

Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing." client_name1="Jane Doe" company_name1="from examedia" text1="Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing Nulla amet elt wisi bulum Integer luctus et malesuada fames Aliquam erat ac ipsum dipiscing.

Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing." client_name2="Jane Doe" company_name2="from examedia" text2="Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing Nulla amet elt wisi bulum Integer luctus et malesuada fames Aliquam erat ac ipsum dipiscing.

Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing."][/vc_column][/vc_row][vc_row top_padding="70px" bottom_padding="10px"][vc_column][maxhost_shortcodes_title_five heading1="WHAT we DO" heading2="Awesome Services"][/vc_column][/vc_row][vc_row][vc_column][vc_single_image image="103" img_size="full" alignment="center"][/vc_column][/vc_row]
CONTENT;
  
    vc_add_default_templates( $data );
}

add_action( 'vc_load_default_templates_action','maxhost_custom_template_four_for_vc' ); // Adding Custom template
function maxhost_custom_template_four_for_vc() {
    $data               = array(); // Create new array
    $data['name']       = esc_html__( 'Maxhost Home Style - 4', 'maxhost' ); // Assign name for your custom template
    $data['weight']     = 0; // Weight of your template in the template list
    $data['image_path'] = get_template_directory_uri().'/vc_templates/images/custom_template_thumbnail.jpg';
    $data['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row_content_no_spaces"][vc_column][rev_slider_vc alias="home_style_4"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][hosting_domain_search section_style="m-top0 domain-search white-bg" section_heading1="CHECK YOUR DOMAIN" search_pholder="Enter your Domain Name here.." button_label="Search Here" sample_domain1=".com" sample_domain1_pricing="$3.95" sample_domain2=".org" sample_domain2_pricing="$5.95" sample_domain3=".info" sample_domain3_pricing="$7.95" sample_domain4=".net" sample_domain4_pricing="$6.95" sample_domain5=".biz" sample_domain5_pricing="$4.95" small_note="*All prices per annum" view_domain_url="#" bulk_domain_url="#" transfer_domain_url="#" domain=".com
.org
.net
.info
.biz
.co
.co.uk"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" bottom_padding="50px"][vc_column][maxhost_features_block_four heading1="What's New" heading2="Today's Best Offers" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa elit. Fusce dignissim enim, nec dignissim elit sollicitudin id. Nunc efficitur tincidunt et." price_title="Starts at" price="$9.99" price_duration="/month" image_one="116" features_one="Unlimited Disk Space
Free Domain Registration
Unlimited Databases List
Free Domain Registration
Unlimited Databases List
99.99% Uptime Guarantee"][/vc_column][/vc_row][vc_row full_width="stretch_row" parallax="content-moving" parallax_image="118" parallax_speed_bg="4.5" top_padding="70px" bottom_padding="50px"][vc_column][maxhost_shortcodes_title_three heading1="RIGHT PRICES" heading2="Hosting Packages" font_color="white"][vc_row_inner][vc_column_inner width="1/4"][maxhost_shortcodes_pricing_one plane_name="SHARED HOSTING" price="$9.9" duration="/ month" button_text="Order Now" button_url="#" features="5 GB Storage
Unlimited projects
15 Email Accounts
2 Domain Hosted Support
24/7 Full Support"][/vc_column_inner][vc_column_inner width="1/4"][maxhost_shortcodes_pricing_one plane_name="Reseller Hosting" price="$10.9" duration="/ month" button_text="Order Now" button_url="#" features="10 GB Storage
Unlimited projects
25 Email Accounts
2 Domain Hosted Support
24/7 Full Support"][/vc_column_inner][vc_column_inner width="1/4"][maxhost_shortcodes_pricing_one plane_name="Dedicated Hosting" price="$11.9" duration="/ month" button_text="Order Now" button_url="#" features="30 GB Storage
Unlimited projects
35 Email Accounts
2 Domain Hosted Support
24/7 Full Support"][/vc_column_inner][vc_column_inner width="1/4"][maxhost_shortcodes_pricing_one plane_name="Unlimited HOSTING" price="$13.9" duration="/ month" button_text="Order Now" button_url="#" features="Unlimited GB Storage
Unlimited projects
Unlimited Email Accounts
Unlimited Domain Hosted Support
24/7 Full Support"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row top_padding="80px" bottom_padding="30px"][vc_column width="1/3"][maxhost_shortcodes_iconic_features_five icon="bargraph " title="Backup Available" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim Ut minim veniam laboreua dolore magna aliqua."][maxhost_shortcodes_iconic_features_five icon="size-actual" title="Data Enctyption" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim Ut minim veniam laboreua dolore magna aliqua."][/vc_column][vc_column width="1/3"][maxhost_shortcodes_iconic_features_five icon="support " title="Secure Your Website" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim Ut minim veniam laboreua dolore magna aliqua."][maxhost_shortcodes_iconic_features_five icon="settings " title="Technical Service" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim Ut minim veniam laboreua dolore magna aliqua."][/vc_column][vc_column width="1/3"][maxhost_shortcodes_iconic_features_five icon="pencil " title="Server Management" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim Ut minim veniam laboreua dolore magna aliqua."][maxhost_shortcodes_iconic_features_five icon="call-in" title="24/7 Customer Support" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim Ut minim veniam laboreua dolore magna aliqua."][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_shortcodes_htab number_of_tabs="4" icon1="bargraph" image1="25" icon2="browser " image2="30" icon3="layers " image3="25" icon4="focus" image4="30" title1="Unlimited Traffic" title_one1="Get Started!" title_two1="Today's Offers" text1="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet." bullets1="Unlimited Disk Space
Free Domain Registration
99.99% Uptime Guarantee
Unlimited Databases List
Unlimited Domains
24/7 Full Online Support" bottom_note1="Starts at $9.99/month" title2="High Level Security" title_one2="High Level Security" title_two2="Get Started!" text2="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet." bullets2="Free Domain Registration
Unlimited Disk Space
99.99% Uptime Guarantee
Unlimited Databases List
Unlimited Domains
24/7 Full Online Support" bottom_note2="Starts at $50.99/year" title3="Experienced Staff" title_one3="Get Started!" title_two3="Today's Offers" text3="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet." bullets3="Free Domain Registration
Unlimited Disk Space
Unlimited Databases List
99.99% Uptime Guarantee
Unlimited Domains
24/7 Full Online Support" bottom_note3="Starts at $50.99/year" title4="Backups Available" title_one4="Get Started!" title_two4="Today's Offers" text4="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet." bullets4="Unlimited Disk Space
Free Domain Registration
Unlimited Databases List
99.99% Uptime Guarantee
Unlimited Domains
24/7 Full Online Support" bottom_note4="Starts at $9.99/month"][/vc_column][/vc_row][vc_row top_padding="70px"][vc_column width="1/3"][maxhost_shortcodes_title_four heading1="Our Services" font_color="black-dark"][maxhost_shortcodes_iconic_features_four icon="cloud-upload" title="Easy to Manage" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui elit."][maxhost_shortcodes_iconic_features_four icon="paper-plane" title="Technical Service" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui elit." active="false"][maxhost_shortcodes_iconic_features_four icon="settings" title="Website Optimization" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui elit."][/vc_column][vc_column width="1/3"][maxhost_shortcodes_image_carousel section_heading="Our Works" number_of_tabs="3" image0="http://fluentthemes.com/wp/maxhost/wp-content/uploads/2016/04/site-img17.jpg" image1="http://fluentthemes.com/wp/maxhost/wp-content/uploads/2016/04/site-img18.jpg" image2="http://fluentthemes.com/wp/maxhost/wp-content/uploads/2016/04/site-img19.jpg"][/vc_column][vc_column width="1/3"][maxhost_shortcodes_title_four heading1="What We Do" font_color="black-dark"][maxhost_shortcodes_iconic_features_four icon="settings" title="Website Optimization" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui elit."][maxhost_shortcodes_iconic_features_four icon="users" title="24/7 Customer Support" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui elit."][maxhost_shortcodes_iconic_features_four icon="paper-plane" title="Technical Service" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui elit." active="false"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_features_block_five heading1="What's New" heading2="Reseller Hosting" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa elit. Fusce dignissim purus enim et." price_title="Starts at" price="$9.99" price_duration="/month" image_one="128" features_one="Unlimited Disk Space
Unlimited Databases List
Free Domain Registration
99.99% Uptime Guarantee"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_shortcodes_testimonial_four section_heading="Testimonials" section_heading2="What People Says" number_of_tabs="3" image0="http://fluentthemes.com/wp/maxhost/wp-content/uploads/2016/04/site-img3.jpg" image1="http://fluentthemes.com/wp/maxhost/wp-content/uploads/2016/04/site-img3.jpg" image2="http://fluentthemes.com/wp/maxhost/wp-content/uploads/2016/04/site-img3.jpg" client_name0="John Doe" company_name0="from examedia" text0="Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing Nulla amet elt wisi bulum Integer luctus et malesuada fames Aliquam erat ac ipsum dipiscing." client_name1="Jane Doe" company_name1="from examedia" text1="Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing Nulla amet elt wisi bulum Integer luctus et malesuada fames Aliquam erat ac ipsum dipiscing." client_name2="Jane Doe" company_name2="from examedia" text2="Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing Nulla amet elt wisi bulum Integer luctus et malesuada fames Aliquam erat ac ipsum dipiscing."][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_clients_block_one image_one="90" image_two="91" image_three="92" image_four="93" image_five="91" image_six="94" pt_bg="false"][/vc_column][/vc_row]
CONTENT;
  
    vc_add_default_templates( $data );
}

add_action( 'vc_load_default_templates_action','maxhost_custom_template_five_for_vc' ); // Adding Custom template
function maxhost_custom_template_five_for_vc() {
    $data               = array(); // Create new array
    $data['name']       = esc_html__( 'Maxhost Home Style - 5', 'maxhost' ); // Assign name for your custom template
    $data['weight']     = 0; // Weight of your template in the template list
    $data['image_path'] = get_template_directory_uri().'/vc_templates/images/custom_template_thumbnail.jpg';
    $data['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row_content_no_spaces"][vc_column][rev_slider_vc alias="home_style_5"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][hosting_domain_search section_style="m-top0 domain-search" section_heading1="CHECK YOUR DOMAIN" search_pholder="Enter your Domain Name here" button_label="Search Here" small_note="Domains only from $1.95/per year" domain=".com
.net
.org
.info
.biz
co.uk"][/vc_column][/vc_row][vc_row top_padding="50px" bottom_padding="30px"][vc_column width="1/3"][maxhost_shortcodes_iconic_features_five icon="bargraph " title="Backup Available" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim Ut minim veniam laboreua dolore magna aliqua."][maxhost_shortcodes_iconic_features_five icon="size-actual" title="Data Enctyption" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim Ut minim veniam laboreua dolore magna aliqua."][/vc_column][vc_column width="1/3"][maxhost_shortcodes_iconic_features_five icon="support " title="Secure Your Website" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim Ut minim veniam laboreua dolore magna aliqua."][maxhost_shortcodes_iconic_features_five icon="settings " title="Technical Service" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim Ut minim veniam laboreua dolore magna aliqua."][/vc_column][vc_column width="1/3"][maxhost_shortcodes_iconic_features_five icon="pencil " title="Server Management" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim Ut minim veniam laboreua dolore magna aliqua."][maxhost_shortcodes_iconic_features_five icon="call-in" title="24/7 Customer Support" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim Ut minim veniam laboreua dolore magna aliqua."][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_features_block_seven image_one="313" heading1="Website Builder" text="A complete website solution for your business or personal websites packed with unlimited flexibility" price_title="Starting at just" price="$9.75" price_duration="/mo" button_label="Ordrer Now" button_url="#" image_two="314" heading2="Web Hosting" text2="A complete website solution for your business or personal websites packed with unlimited flexibility" price_title2="Starting just at" price2="$9.75" price_duration2="/mo" button_label2="Ordrer Now" button_url2="#" features_one="100% Unlimited disk space
100% Unlimited bandwidth
FREE Host unlimited domains
24/7 Free domain registration
FREE Host unlimited domains
24/7 Free domain registration" features_two="100% Unlimited disk space
100% Unlimited bandwidth
FREE Host unlimited domains
FREE Host unlimited domains
24/7 Free domain registration"][/vc_column][/vc_row][vc_row top_padding="80px" bottom_padding="30px"][vc_column][maxhost_shortcodes_title_five heading1="Select your" heading2="Hosting platforms" font_color="black"][/vc_column][/vc_row][vc_row bottom_padding="20px"][vc_column width="1/4"][maxhost_shortcodes_pricing_one plane_name="SHARED HOSTING" price="$9.9" duration="month" button_text="Order Now" button_url="#" features="5 GB Storage
Unlimited projects
15 Email Accounts
2 Domain Hosted Support
24/7 Full Support"][/vc_column][vc_column width="1/4"][maxhost_shortcodes_pricing_one plane_name="Reseller Hosting" price="$11.9" duration="month" button_text="Order Now" button_url="#" active="false" features="10 GB Storage
Unlimited projects
25 Email Accounts
2 Domain Hosted Support
24/7 Full Support"][/vc_column][vc_column width="1/4"][maxhost_shortcodes_pricing_one plane_name="Dedicated Hosting" price="$21.9" duration="month" button_text="Order Now" button_url="#" features="30 GB Storage
Unlimited projects
35 Email Accounts
2 Domain Hosted Support
24/7 Full Support"][/vc_column][vc_column width="1/4"][maxhost_shortcodes_pricing_one plane_name="Unlimited HOSTING" price="$41.9" duration="month" button_text="Order Now" button_url="#" features="Unlimited GB Storage
Unlimited projects
Unlimited Email Accounts
Unlimited Domain Hosted Support
24/7 Full Support"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_features_block_six image_one="292" heading1="GET STARTING TODAY" heading2_1st="Get" heading2_2nd="30%" heading2_3rd="Off" heading3="Deploy a Cloud Server in Minutes" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim Ut minim veniam laboreua dolore magna aliqua. Consequuntur magni dolores eos ratione voluptatem nesciunt natus error voluptatem accusantium tempo doloremque." button_label="Order Now" button_url="#"][/vc_column][/vc_row][vc_row][vc_column][maxhost_counter bottom_text="A complete website solution for your business" heading="Network Performance" counter_title1="Private Peers & Growing" counter_number1="488" counter_title2="Network Centres" counter_number2="145" counter_title3="Network Centres" counter_number3="365" counter_title4="Countries with Customers" counter_number4="1023"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_shortcodes_testimonial_one maxhost_shortcodes_parallax_bg="http://fluentthemes.com/wp/maxhost/wp-content/uploads/2016/04/parallax-bg5.jpg" section_heading="Testimonials" section_heading2="What People Says" tytle_style="title-line-shape m-bottom3" number_of_tabs="3" client_name0="John Deo" company_name0="from examedia" text0="Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing Nulla amet elt wisi bulum Integer luctus et." client_name1="John Doe" company_name1="from examedia" text1="Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing Nulla amet elt wisi bulum Integer luctus et." client_name2="Jane Doe" company_name2="from examedia" text2="Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing Nulla amet elt wisi bulum Integer luctus et."][/vc_column][/vc_row][vc_row top_padding="60px"][vc_column][maxhost_shortcodes_title_five heading1="find out our" heading2="precious clients" font_color="black"][maxhost_clients_block_one image_one="44" image_two="45" image_three="46" image_four="47" image_five="46" image_six="48"][/vc_column][/vc_row]
CONTENT;
  
    vc_add_default_templates( $data );
}

add_action( 'vc_load_default_templates_action','maxhost_custom_template_six_for_vc' ); // Adding Custom template
function maxhost_custom_template_six_for_vc() {
    $data               = array(); // Create new array
    $data['name']       = esc_html__( 'Maxhost Home Style - 6', 'maxhost' ); // Assign name for your custom template
    $data['weight']     = 0; // Weight of your template in the template list
    $data['image_path'] = get_template_directory_uri().'/vc_templates/images/custom_template_thumbnail.jpg';
    $data['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row_content_no_spaces"][vc_column][rev_slider_vc alias="home_style_6"][/vc_column][/vc_row][vc_row top_padding="70px" bottom_padding="40px"][vc_column width="2/3"][maxhost_shortcodes_title_eight heading1="Get Started!" heading2="Quick and Easy" text="Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi."][vc_empty_space height="25px"][vc_row_inner][vc_column_inner width="1/2"][maxhost_shortcodes_iconic_features_seven icon="user" title="Easy to Manage" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa." active="false"][maxhost_shortcodes_iconic_features_seven icon="pencil" title="Backup Available" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa."][/vc_column_inner][vc_column_inner width="1/2"][maxhost_shortcodes_iconic_features_seven icon="desktop" title="Secure Your Website" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa."][maxhost_shortcodes_iconic_features_seven icon="phone" title="24/7 Customer Support" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa."][/vc_column_inner][/vc_row_inner][/vc_column][vc_column width="1/3"][vc_single_image image="595" img_size="full"][/vc_column][/vc_row][vc_row full_width="stretch_row" parallax="content-moving" parallax_image="269" parallax_speed_bg="3.5"][vc_column][hosting_domain_search section_style="domain-page-header m-top0" section_heading1="FIND YOUR PERFECT DOMAIN NAME" search_pholder="Enter your Domain Name here" button_label="Search Here" sample_domain1=".com" sample_domain1_pricing="$2.99" sample_domain2=".net" sample_domain2_pricing="$3.99" sample_domain3=".org" sample_domain3_pricing="$4.99" sample_domain4=".in" sample_domain4_pricing="$5.99" view_domain_url="#" bulk_domain_url="#" transfer_domain_url="#"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_features_block_eight icon_one="bargraph" heading1="Web Hosting" text="Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation laboris nisi." button_label="Read More" button_url="#" icon_two="layers" heading2="Domain Name" text2="Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation laboris nisi." button_label2="Read More" button_url2="#"][/vc_column][/vc_row][vc_row top_padding="70px"][vc_column width="1/2"][maxhost_features_block_nine heading1="What's New" heading2="SHARED HOSTING" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa eliusce dignissim purus enim, nec dignissim elit sollicitudin id. Nunc efficitur tincidunt et." price_title="Starts at" price="$99" price_duration="/month" features_one="Unlimited Disk Space
Unlimited Databases List
Free Domain Registration
Unlimited Databases List
Free Domain Registration
99.99% Uptime Guarantee"][/vc_column][vc_column width="1/2"][vc_single_image image="601" img_size="full"][/vc_column][/vc_row][vc_row top_padding="70px"][vc_column width="1/2"][vc_single_image image="602" img_size="full"][/vc_column][vc_column width="1/2"][maxhost_features_block_nine heading1="What's New" heading2="Reseller Hosting" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa eliusce dignissim purus enim, nec dignissim elit sollicitudin id. Nunc efficitur tincidunt et." price_title="Starts at" price="$99" price_duration="/month" features_one="Unlimited Disk Space
Unlimited Databases List
Free Domain Registration
Unlimited Databases List
Free Domain Registration
99.99% Uptime Guarantee"][/vc_column][/vc_row][vc_row top_padding="70px"][vc_column width="1/2"][maxhost_features_block_nine heading1="What's New" heading2="Dedicated Servers" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa eliusce dignissim purus enim, nec dignissim elit sollicitudin id. Nunc efficitur tincidunt et." price_title="Starts at" price="$99" price_duration="/month" features_one="Unlimited Disk Space
Unlimited Databases List
Free Domain Registration
Unlimited Databases List
Free Domain Registration
99.99% Uptime Guarantee"][/vc_column][vc_column width="1/2"][vc_single_image image="603" img_size="full"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces" top_padding="20px"][vc_column][maxhost_call_to_action text="Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam." heading1_1st="24/7" heading1_2nd="CUSTOMER SERVICE" heading2="SUPPORTED BY PROFESSIONALS" button_label="Call Us Now!" button_url="#"][/vc_column][/vc_row][vc_row top_padding="70px"][vc_column width="1/3"][maxhost_shortcodes_title_four heading1="Our Services" font_color="black-dark"][maxhost_shortcodes_iconic_features_four icon="cloud-upload" title="Easy to Manage" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui elit."][maxhost_shortcodes_iconic_features_four icon="paper-plane" title="Technical Service" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui elit." active="false"][maxhost_shortcodes_iconic_features_four icon="settings" title="Website Optimization" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui elit."][/vc_column][vc_column width="1/3"][maxhost_shortcodes_image_carousel section_heading="Our Works" number_of_tabs="3" image0="http://fluentthemes.com/wp/maxhost/wp-content/uploads/2016/04/site-img17.jpg" image1="http://fluentthemes.com/wp/maxhost/wp-content/uploads/2016/04/site-img18.jpg" image2="http://fluentthemes.com/wp/maxhost/wp-content/uploads/2016/04/site-img19.jpg"][/vc_column][vc_column width="1/3"][maxhost_shortcodes_title_four heading1="What We Do" font_color="black-dark"][maxhost_shortcodes_iconic_features_four icon="settings" title="Website Optimization" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui elit."][maxhost_shortcodes_iconic_features_four icon="users" title="24/7 Customer Support" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui elit."][maxhost_shortcodes_iconic_features_four icon="paper-plane" title="Technical Service" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa dui elit." active="false"][/vc_column][/vc_row]
CONTENT;
  
    vc_add_default_templates( $data );
}

add_action( 'vc_load_default_templates_action','maxhost_custom_template_seven_for_vc' ); // Adding Custom template
function maxhost_custom_template_seven_for_vc() {
    $data               = array(); // Create new array
    $data['name']       = esc_html__( 'Maxhost Home Style - 7', 'maxhost' ); // Assign name for your custom template
    $data['weight']     = 0; // Weight of your template in the template list
    $data['image_path'] = get_template_directory_uri().'/vc_templates/images/custom_template_thumbnail.jpg';
    $data['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $data['content']    = <<<CONTENT
       [vc_row full_width="stretch_row_content_no_spaces"][vc_column][rev_slider_vc alias="home_style_7"][/vc_column][/vc_row][vc_row top_padding="70px"][vc_column][maxhost_shortcodes_title_nine heading1="What" heading2="We Do?" text="Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."][/vc_column][/vc_row][vc_row][vc_column width="1/3"][maxhost_shortcodes_iconic_features_six icon="user" title="Easy to Manage" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim." active="false"][maxhost_shortcodes_iconic_features_six icon="pencil" title="Marketing Services" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim."][/vc_column][vc_column width="1/3"][maxhost_shortcodes_iconic_features_six icon="speedometer " title="Parallels Plesk Panel" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim."][maxhost_shortcodes_iconic_features_six icon="reload " title="Secure & Fast loading" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim."][/vc_column][vc_column width="1/3"][maxhost_shortcodes_iconic_features_six icon="cloud-upload" title="Data on Cloudfront" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim."][maxhost_shortcodes_iconic_features_six icon="call-in" title="24/7 Customer Support" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim."][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_features_block_seven image_one="313" heading1="Website Builder" text="A complete website solution for your business or personal websites packed with unlimited flexibility" price_title="Starting at just" price="$9.75" price_duration="/mo" button_label="Ordrer Now" button_url="#" image_two="314" heading2="Web Hosting" text2="A complete website solution for your business or personal websites packed with unlimited flexibility" price_title2="Starting just at" price2="$9.75" price_duration2="/mo" button_label2="Ordrer Now" button_url2="#" features_one="100% Unlimited disk space
100% Unlimited bandwidth
FREE Host unlimited domains
24/7 Free domain registration
FREE Host unlimited domains
24/7 Free domain registration" features_two="100% Unlimited disk space
100% Unlimited bandwidth
FREE Host unlimited domains
FREE Host unlimited domains
24/7 Free domain registration"][/vc_column][/vc_row][vc_row top_padding="70px" bottom_padding="10px"][vc_column][maxhost_shortcodes_title_nine heading1="Choose" heading2="hosting plan" text="Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."][vc_row_inner][vc_column_inner width="1/3"][maxhost_shortcodes_pricing_four plane_name="SHARED HOSTING" price="$20 " duration="PER MONTH" button_text="Order Now" button_url="#" features="5 GB Storage
Unlimited projects
15 Email Accounts
2 Domain Hosted Support
24/7 Full Support"][/vc_column_inner][vc_column_inner width="1/3"][maxhost_shortcodes_pricing_four plane_name="Reseller Hosting" price="$70 " duration="PER MONTH" button_text="Order Now" button_url="#" features="10 GB Storage
Unlimited projects
25 Email Accounts
20 Domain Hosted Support
24/7 Full Support"][/vc_column_inner][vc_column_inner width="1/3"][maxhost_shortcodes_pricing_four plane_name="Dedicated Hosting" price="$110 " duration="PER MONTH" button_text="Order Now" button_url="#" features="Unlimited GB Storage
Unlimited projects
Unlimited Email Accounts
Unlimited Domain Hosted Support
24/7 Full Support"][/vc_column_inner][/vc_row_inner][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_call_to_action text="Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam." heading1_1st="24/7" heading1_2nd="CUSTOMER SERVICE" heading2="SUPPORTED BY PROFESSIONALS" button_label="Call Us Now!" button_url="#"][/vc_column][/vc_row][vc_row top_padding="70px"][vc_column][maxhost_shortcodes_title_nine heading1="Hosting" heading2="Services" text="Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam."][/vc_column][/vc_row][vc_row][vc_column width="1/4"][maxhost_shortcode_content_with_bullets text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim." section_style="listitems" heading1="Web Hosting" bullets="Your Business Name
Select Domain Name
Microsoft Hosting Support" button_label="Read More" button_url="#"][/vc_column][vc_column width="1/4"][maxhost_shortcode_content_with_bullets text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim." section_style="listitems" heading1="Server Solutions" bullets="Your Business Name
Select Domain Name
Microsoft Hosting Support" button_label="Read More" button_url="#"][/vc_column][vc_column width="1/4"][maxhost_shortcode_content_with_bullets text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim." section_style="listitems" heading1="Virtual Hosting" bullets="Your Business Name
Select Domain Name
Microsoft Hosting Support" button_label="Read More" button_url="#"][/vc_column][vc_column width="1/4"][maxhost_shortcode_content_with_bullets text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim." section_style="listitems" heading1="Email Solutions" bullets="Your Business Name
Select Domain Name
Microsoft Hosting Support" button_label="Read More" button_url="#"][/vc_column][/vc_row][vc_row full_width="stretch_row_content_no_spaces"][vc_column][maxhost_features_block_six image_one="292" heading1="GET STARTING TODAY" heading2_1st="Get" heading2_2nd="30%" heading2_3rd="Off" heading3="Deploy a Cloud Server in Minutes" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa qui officia deserunt mollit anim Ut minim veniam laboreua dolore magna aliqua. Consequuntur magni dolores eos ratione voluptatem nesciunt natus error voluptatem accusantium tempo doloremque." button_label="Order Now" button_url="#"][/vc_column][/vc_row][vc_row top_padding="70px"][vc_column][maxhost_clients_block_one heading1="Find out our" heading2="PRECIOUS CLIENTS" image_seven="43" image_one="44" image_two="45" image_three="46" image_four="47" image_five="46" image_six="48"][/vc_column][/vc_row]
CONTENT;
  
    vc_add_default_templates( $data );
}

add_action( 'vc_load_default_templates_action','maxhost_custom_template_eight_for_vc' ); // Adding Custom template
function maxhost_custom_template_eight_for_vc() {
    $data               = array(); // Create new array
    $data['name']       = esc_html__( 'Maxhost Home Style - Boxed', 'maxhost' ); // Assign name for your custom template
    $data['weight']     = 0; // Weight of your template in the template list
    $data['image_path'] = get_template_directory_uri().'/vc_templates/images/custom_template_thumbnail.jpg';
    $data['custom_class'] = 'custom_template_for_vc_custom_template'; // CSS class name
    $data['content']    = <<<CONTENT
       [vc_row][vc_column][rev_slider_vc alias="home_style_1"][/vc_column][/vc_row][vc_row][vc_column][hosting_domain_search section_style="m-top0 domain-search shape-white" search_pholder="Enter Your Domain Name Here" button_label="Search Here" search_action_url="http://fluentthemes.com/wp/maxhost/whmcs/domainchecker.php?systpl=maxhost" sample_domain1=".com" sample_domain1_pricing="$3.95" sample_domain2=".org" sample_domain2_pricing="$5.95" sample_domain3=".info" sample_domain3_pricing="$7.95" sample_domain4=".net" sample_domain4_pricing="$6.95" sample_domain5=".biz" sample_domain5_pricing="$4.95" small_note="All prices per annum" domain=".com
.org
.net
.info
.biz
.co
.co.uk"][/vc_column][/vc_row][vc_row][vc_column][maxhost_shortcodes_title_one left_text="We offer
Awesome Services" right_text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua mollit anim Ut enim ad minim veniam laboreua et dolore."][/vc_column][/vc_row][vc_row zleft_padding="15px" zright_padding="15px"][vc_column width="1/3"][maxhost_shortcodes_iconic_features_one icon="user" title="Easy to Manage" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa."][maxhost_shortcodes_iconic_features_one icon="pencil" title="Backup Available" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa." active="false"][/vc_column][vc_column width="1/3"][maxhost_shortcodes_iconic_features_one icon="laptop" title="Secure Your Website" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa."][maxhost_shortcodes_iconic_features_one icon="phone" title="24/7 Customer Support" text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa."][/vc_column][vc_column width="1/3"][vc_single_image image="23" img_size="full"][/vc_column][/vc_row][vc_row][vc_column][maxhost_shortcodes_htab number_of_tabs="4" icon1="bargraph" image1="25" icon2="browser " image2="30" icon3="layers " image3="25" icon4="focus" image4="30" title1="Unlimited Traffic" title_one1="Get Started!" title_two1="Today's Offers" text1="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet." bullets1="Unlimited Disk Space
Free Domain Registration
99.99% Uptime Guarantee
Unlimited Databases List
Unlimited Domains
24/7 Full Online Support" bottom_note1="Starts at $9.99/month" title2="High Level Security" title_one2="High Level Security" title_two2="Get Started!" text2="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet." bullets2="Free Domain Registration
Unlimited Disk Space
99.99% Uptime Guarantee
Unlimited Databases List
Unlimited Domains
24/7 Full Online Support" bottom_note2="Starts at $50.99/year" title3="Experienced Staff" title_one3="Get Started!" title_two3="Today's Offers" text3="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet." bullets3="Free Domain Registration
Unlimited Disk Space
Unlimited Databases List
99.99% Uptime Guarantee
Unlimited Domains
24/7 Full Online Support" bottom_note3="Starts at $50.99/year" title4="Backups Available" title_one4="Get Started!" title_two4="Today's Offers" text4="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet." bullets4="Unlimited Disk Space
Free Domain Registration
Unlimited Databases List
99.99% Uptime Guarantee
Unlimited Domains
24/7 Full Online Support" bottom_note4="Starts at $9.99/month"][/vc_column][/vc_row][vc_row top_padding="30px"][vc_column][maxhost_shortcodes_title_one left_text="Select your
Hosting platforms" right_text="Excepteur sit occaecat cupidatan is proident, one sunt in culpa Ut enim ad minim veniam, quis nostrud enim ad Lorem ipsum dolor sit amet conse ctetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua mollit anim Ut enim ad minim veniam laboreua et dolore."][/vc_column][/vc_row][vc_row zleft_padding="15px" zright_padding="15px"][vc_column width="1/4"][maxhost_shortcodes_pricing_one plane_name="SHARED HOSTING" price="$9.9" duration="month" button_text="Order Now" button_url="#" features="5 GB Storage
Unlimited projects
15 Email Accounts
2 Domain Hosted Support
24/7 Full Support"][/vc_column][vc_column width="1/4"][maxhost_shortcodes_pricing_one plane_name="Reseller Hosting" price="$11.9" duration="month" button_text="Order Now" button_url="#" active="false" features="10 GB Storage
Unlimited projects
25 Email Accounts
2 Domain Hosted Support
24/7 Full Support"][/vc_column][vc_column width="1/4"][maxhost_shortcodes_pricing_one plane_name="Dedicated Hosting" price="$21.9" duration="month" button_text="Order Now" button_url="#" features="30 GB Storage
Unlimited projects
35 Email Accounts
2 Domain Hosted Support
24/7 Full Support"][/vc_column][vc_column width="1/4"][maxhost_shortcodes_pricing_one plane_name="Unlimited HOSTING" price="$41.9" duration="month" button_text="Order Now" button_url="#" features="Unlimited GB Storage
Unlimited projects
Unlimited Email Accounts
Unlimited Domain Hosted Support
24/7 Full Support"][/vc_column][/vc_row][vc_row][vc_column][maxhost_features_block_one left_heading1="Host with us" left_heading2="SPEED UP YOUR SITE" image_one="27" right_heading1="New domains" right_heading2="available" domain_name1=".com" button_label1="Buy $9.99" button_url1="#" domain_name2=".net" button_label2="Buy $9.99" button_url2="#" domain_name3=".org" button_label3="Buy $9.99" button_url3="#" domain_name4=".biz" button_label4="Buy $9.99" button_url4="#" domain_name5=".info" button_label5="Buy $9.99" button_url5="#" features_one="Effective Control Panel
Nextgen Hosting
Dedicated Support
Extended Speed
Completely Secured
Simple Configuration"][/vc_column][/vc_row][vc_row zleft_padding="15px" zright_padding="15px"][vc_column width="1/2"][maxhost_shortcodes_blog_post_one num_post="2" heading1="latest news" heading2="from our blog"][/vc_column][vc_column width="1/2"][vc_empty_space height="70px"][maxhost_shortcodes_title_six heading1="Have any" heading2="Questions?"][maxhost_shortcodes_accordion_one number_of_tabs="3" title1="Awesome Client Support" text1="Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod hsa no tempor incididunt labore dolore magna aliqua. Sed ipsum consectetur its adipisicing elit sed do eiusmod tempor incididunt labo dolore. amet consectetur adipisicing eil sed deiusmod hsa no tempor incididun." title2="Secure Your Website" text2="Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod hsa no tempor incididunt labore dolore magna aliqua. Sed ipsum consectetur its adipisicing elit sed do eiusmod tempor incididunt labo dolore. amet consectetur adipisicing eil sed deiusmod hsa no tempor incididun." title3="24/7 Customer Support" text3="Lorem ipsum dolor sit amet consectetur adipisicing eil sed deiusmod hsa no tempor incididunt labore dolore magna aliqua. Sed ipsum consectetur its adipisicing elit sed do eiusmod tempor incididunt labo dolore. amet consectetur adipisicing eil sed deiusmod hsa no tempor incididun."][/vc_column][/vc_row][vc_row][vc_column][maxhost_shortcodes_testimonial_one section_heading="WHAT PEOPLE SAY ABOUT US" number_of_tabs="3" client_name0="John Deo" company_name0="from examedia" text0="Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing Nulla amet elt wisi bulum Integer luctus et." client_name1="Jane Doe" company_name1="from axamedie" text1="Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing Nulla amet elt wisi bulum Integer luctus et." client_name2="John Doe" company_name2="from examedia" text2="Nulla imperdiet sit amet magna. Vesti bulum elt dapibus, mauris nec malesuada fames ac turpis velit, nhoncus eu, luctus et interdum adipiscing wisi bulum elt dapibus, mauris malesuada fames Aliquam erat ac ipsum dipiscing Nulla amet elt wisi bulum Integer luctus et."][/vc_column][/vc_row][vc_row top_padding="80px"][vc_column][maxhost_clients_block_one heading1="Find out our" heading2="PRECIOUS CLIENTS" image_seven="43" image_one="44" image_two="45" image_three="46" image_four="47" image_five="46" image_six="48"][/vc_column][/vc_row]
CONTENT;
  
    vc_add_default_templates( $data );
}