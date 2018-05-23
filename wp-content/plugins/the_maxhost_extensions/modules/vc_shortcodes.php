<?php
/*-----------------------------------------------------------------------------------*/
/* Start Using Maxhost Shortcodes in the Visual Composer */
/*-----------------------------------------------------------------------------------*/
add_action( 'init', 'maxhost_vc_shortcodes' );
function maxhost_vc_shortcodes() {

/************
Accordion - 1
************/
vc_map( array(
      "name" => esc_html__("FT- Accordion - 1", 'maxhost'),
      "base" => "maxhost_shortcodes_accordion_one",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Displays Accordion -Style 1', 'maxhost'),
      "params" => array(
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Number of Accordion", 'maxhost'),
            "param_name" => "number_of_tabs",
            'admin_label' => true,
            "value" => array(
               esc_html__('One', 'maxhost')=>'1',
			   esc_html__('Two', 'maxhost')=>'2', 
			   esc_html__('Three', 'maxhost')=>'3',
			   esc_html__('Four', 'maxhost')=>'4',
			   esc_html__('Five', 'maxhost')=>'5', 
			   esc_html__('Six', 'maxhost')=>'6',
			   esc_html__('Seven', 'maxhost')=>'7',
			   esc_html__('Eight', 'maxhost')=>'8', 
			   esc_html__('Nine', 'maxhost')=>'9',
			   esc_html__('Ten', 'maxhost')=>'10',
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion one title", 'maxhost'),
            "param_name" => "title1",
            "value" => '',
            "description" => esc_html__("Type Accordion one title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		  array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion one text", 'maxhost'),
            "param_name" => "text1",
            "value" => '',
            "description" => esc_html__("Type Accordion one text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion two title", 'maxhost'),
            "param_name" => "title2",
            "value" => '',
            "description" => esc_html__("Type Accordion two title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion two text", 'maxhost'),
            "param_name" => "text2",
            "value" => '',
            "description" => esc_html__("Type Accordion two text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion three title", 'maxhost'),
            "param_name" => "title3",
            "value" => '',
            "description" => esc_html__("Type Accordion three title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion three text", 'maxhost'),
            "param_name" => "text3",
            "value" => '',
            "description" => esc_html__("Type Accordion three text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion four title", 'maxhost'),
            "param_name" => "title4",
            "value" => '',
            "description" => esc_html__("Type Accordion four title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion four text", 'maxhost'),
            "param_name" => "text4",
            "value" => '',
            "description" => esc_html__("Type Accordion four text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion five title", 'maxhost'),
            "param_name" => "title5",
            "value" => '',
            "description" => esc_html__("Type Accordion five title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion five text", 'maxhost'),
            "param_name" => "text5",
            "value" => '',
            "description" => esc_html__("Type Accordion five text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion six title", 'maxhost'),
            "param_name" => "title6",
            "value" => '',
            "description" => esc_html__("Type Accordion six title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion six text", 'maxhost'),
            "param_name" => "text6",
            "value" => '',
            "description" => esc_html__("Type Accordion six text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion seven title", 'maxhost'),
            "param_name" => "title7",
            "value" => '',
            "description" => esc_html__("Type Accordion seven title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion seven text", 'maxhost'),
            "param_name" => "text7",
            "value" => '',
            "description" => esc_html__("Type Accordion seven text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion eight title", 'maxhost'),
            "param_name" => "title8",
            "value" => '',
            "description" => esc_html__("Type Accordion eight title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion eight text", 'maxhost'),
            "param_name" => "text8",
            "value" => '',
            "description" => esc_html__("Type Accordion eight text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion nine title", 'maxhost'),
            "param_name" => "title9",
            "value" => '',
            "description" => esc_html__("Type Accordion nine title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion nine text", 'maxhost'),
            "param_name" => "text9",
            "value" => '',
            "description" => esc_html__("Type Accordion nine text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion ten title", 'maxhost'),
            "param_name" => "title10",
            "value" => '',
            "description" => esc_html__("Type Accordion ten title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion ten text", 'maxhost'),
            "param_name" => "text10",
            "value" => '',
            "description" => esc_html__("Type Accordion ten text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion eleven title", 'maxhost'),
            "param_name" => "title11",
            "value" => '',
            "description" => esc_html__("Type Accordion eleven title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion eleven text", 'maxhost'),
            "param_name" => "text11",
            "value" => '',
            "description" => esc_html__("Type Accordion eleven text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion twelve title", 'maxhost'),
            "param_name" => "title12",
            "value" => '',
            "description" => esc_html__("Type Accordion twelve title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion twelve text", 'maxhost'),
            "param_name" => "text12",
            "value" => '',
            "description" => esc_html__("Type Accordion twelve text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion thirteen title", 'maxhost'),
            "param_name" => "title13",
            "value" => '',
            "description" => esc_html__("Type Accordion thirteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion thirteen text", 'maxhost'),
            "param_name" => "text13",
            "value" => '',
            "description" => esc_html__("Type Accordion thirteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion fourteen title", 'maxhost'),
            "param_name" => "title14",
            "value" => '',
            "description" => esc_html__("Type Accordion fourteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion fourteen text", 'maxhost'),
            "param_name" => "text14",
            "value" => '',
            "description" => esc_html__("Type Accordion fourteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion fifteen title", 'maxhost'),
            "param_name" => "title15",
            "value" => '',
            "description" => esc_html__("Type Accordion fifteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion fifteen text", 'maxhost'),
            "param_name" => "text15",
            "value" => '',
            "description" => esc_html__("Type Accordion fifteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion sixteen title", 'maxhost'),
            "param_name" => "title16",
            "value" => '',
            "description" => esc_html__("Type Accordion sixteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion sixteen text", 'maxhost'),
            "param_name" => "text16",
            "value" => '',
            "description" => esc_html__("Type Accordion sixteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion seventeen title", 'maxhost'),
            "param_name" => "title17",
            "value" => '',
            "description" => esc_html__("Type Accordion seventeen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion seventeen text", 'maxhost'),
            "param_name" => "text17",
            "value" => '',
            "description" => esc_html__("Type Accordion seventeen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion eighteen title", 'maxhost'),
            "param_name" => "title18",
            "value" => '',
            "description" => esc_html__("Type Accordion eighteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion eighteen text", 'maxhost'),
            "param_name" => "text18",
            "value" => '',
            "description" => esc_html__("Type Accordion eighteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion nineteen title", 'maxhost'),
            "param_name" => "title19",
            "value" => '',
            "description" => esc_html__("Type Accordion nineteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion nineteen text", 'maxhost'),
            "param_name" => "text19",
            "value" => '',
            "description" => esc_html__("Type Accordion nineteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion twenty title", 'maxhost'),
            "param_name" => "title20",
            "value" => '',
            "description" => esc_html__("Type Accordion twenty title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '20'
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion twenty text", 'maxhost'),
            "param_name" => "text20",
            "value" => '',
            "description" => esc_html__("Type Accordion twenty text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '20'
            )
         ),
   )
)
);

/************
Accordion - 2
************/
vc_map( array(
      "name" => esc_html__("FT- Accordion - 2", 'maxhost'),
      "base" => "maxhost_shortcodes_accordion_two",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Displays Accordion -Style 2', 'maxhost'),
      "params" => array(
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Number of Accordion", 'maxhost'),
            "param_name" => "number_of_tabs",
            'admin_label' => true,
            "value" => array(
               esc_html__('One', 'maxhost')=>'1',
			   esc_html__('Two', 'maxhost')=>'2', 
			   esc_html__('Three', 'maxhost')=>'3',
			   esc_html__('Four', 'maxhost')=>'4',
			   esc_html__('Five', 'maxhost')=>'5', 
			   esc_html__('Six', 'maxhost')=>'6',
			   esc_html__('Seven', 'maxhost')=>'7',
			   esc_html__('Eight', 'maxhost')=>'8', 
			   esc_html__('Nine', 'maxhost')=>'9',
			   esc_html__('Ten', 'maxhost')=>'10',
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion one title", 'maxhost'),
            "param_name" => "title1",
            "value" => '',
            "description" => esc_html__("Type Accordion one title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		  array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion one text", 'maxhost'),
            "param_name" => "text1",
            "value" => '',
            "description" => esc_html__("Type Accordion one text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion two title", 'maxhost'),
            "param_name" => "title2",
            "value" => '',
            "description" => esc_html__("Type Accordion two title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion two text", 'maxhost'),
            "param_name" => "text2",
            "value" => '',
            "description" => esc_html__("Type Accordion two text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion three title", 'maxhost'),
            "param_name" => "title3",
            "value" => '',
            "description" => esc_html__("Type Accordion three title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion three text", 'maxhost'),
            "param_name" => "text3",
            "value" => '',
            "description" => esc_html__("Type Accordion three text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion four title", 'maxhost'),
            "param_name" => "title4",
            "value" => '',
            "description" => esc_html__("Type Accordion four title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion four text", 'maxhost'),
            "param_name" => "text4",
            "value" => '',
            "description" => esc_html__("Type Accordion four text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion five title", 'maxhost'),
            "param_name" => "title5",
            "value" => '',
            "description" => esc_html__("Type Accordion five title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion five text", 'maxhost'),
            "param_name" => "text5",
            "value" => '',
            "description" => esc_html__("Type Accordion five text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion six title", 'maxhost'),
            "param_name" => "title6",
            "value" => '',
            "description" => esc_html__("Type Accordion six title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion six text", 'maxhost'),
            "param_name" => "text6",
            "value" => '',
            "description" => esc_html__("Type Accordion six text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion seven title", 'maxhost'),
            "param_name" => "title7",
            "value" => '',
            "description" => esc_html__("Type Accordion seven title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion seven text", 'maxhost'),
            "param_name" => "text7",
            "value" => '',
            "description" => esc_html__("Type Accordion seven text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion eight title", 'maxhost'),
            "param_name" => "title8",
            "value" => '',
            "description" => esc_html__("Type Accordion eight title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion eight text", 'maxhost'),
            "param_name" => "text8",
            "value" => '',
            "description" => esc_html__("Type Accordion eight text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion nine title", 'maxhost'),
            "param_name" => "title9",
            "value" => '',
            "description" => esc_html__("Type Accordion nine title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion nine text", 'maxhost'),
            "param_name" => "text9",
            "value" => '',
            "description" => esc_html__("Type Accordion nine text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion ten title", 'maxhost'),
            "param_name" => "title10",
            "value" => '',
            "description" => esc_html__("Type Accordion ten title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion ten text", 'maxhost'),
            "param_name" => "text10",
            "value" => '',
            "description" => esc_html__("Type Accordion ten text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion eleven title", 'maxhost'),
            "param_name" => "title11",
            "value" => '',
            "description" => esc_html__("Type Accordion eleven title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion eleven text", 'maxhost'),
            "param_name" => "text11",
            "value" => '',
            "description" => esc_html__("Type Accordion eleven text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion twelve title", 'maxhost'),
            "param_name" => "title12",
            "value" => '',
            "description" => esc_html__("Type Accordion twelve title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion twelve text", 'maxhost'),
            "param_name" => "text12",
            "value" => '',
            "description" => esc_html__("Type Accordion twelve text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion thirteen title", 'maxhost'),
            "param_name" => "title13",
            "value" => '',
            "description" => esc_html__("Type Accordion thirteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion thirteen text", 'maxhost'),
            "param_name" => "text13",
            "value" => '',
            "description" => esc_html__("Type Accordion thirteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion fourteen title", 'maxhost'),
            "param_name" => "title14",
            "value" => '',
            "description" => esc_html__("Type Accordion fourteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion fourteen text", 'maxhost'),
            "param_name" => "text14",
            "value" => '',
            "description" => esc_html__("Type Accordion fourteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion fifteen title", 'maxhost'),
            "param_name" => "title15",
            "value" => '',
            "description" => esc_html__("Type Accordion fifteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion fifteen text", 'maxhost'),
            "param_name" => "text15",
            "value" => '',
            "description" => esc_html__("Type Accordion fifteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion sixteen title", 'maxhost'),
            "param_name" => "title16",
            "value" => '',
            "description" => esc_html__("Type Accordion sixteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion sixteen text", 'maxhost'),
            "param_name" => "text16",
            "value" => '',
            "description" => esc_html__("Type Accordion sixteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion seventeen title", 'maxhost'),
            "param_name" => "title17",
            "value" => '',
            "description" => esc_html__("Type Accordion seventeen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion seventeen text", 'maxhost'),
            "param_name" => "text17",
            "value" => '',
            "description" => esc_html__("Type Accordion seventeen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion eighteen title", 'maxhost'),
            "param_name" => "title18",
            "value" => '',
            "description" => esc_html__("Type Accordion eighteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion eighteen text", 'maxhost'),
            "param_name" => "text18",
            "value" => '',
            "description" => esc_html__("Type Accordion eighteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion nineteen title", 'maxhost'),
            "param_name" => "title19",
            "value" => '',
            "description" => esc_html__("Type Accordion nineteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion nineteen text", 'maxhost'),
            "param_name" => "text19",
            "value" => '',
            "description" => esc_html__("Type Accordion nineteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion twenty title", 'maxhost'),
            "param_name" => "title20",
            "value" => '',
            "description" => esc_html__("Type Accordion twenty title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '20'
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion twenty text", 'maxhost'),
            "param_name" => "text20",
            "value" => '',
            "description" => esc_html__("Type Accordion twenty text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '20'
            )
         ),
   )
)
);

/************
Accordion - 3
************/
vc_map( array(
      "name" => esc_html__("FT- Accordion - 3", 'maxhost'),
      "base" => "maxhost_shortcodes_accordion_three",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Displays Accordion -Style 3', 'maxhost'),
      "params" => array(
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Number of Accordion", 'maxhost'),
            "param_name" => "number_of_tabs",
            'admin_label' => true,
            "value" => array(
               esc_html__('One', 'maxhost')=>'1',
			   esc_html__('Two', 'maxhost')=>'2', 
			   esc_html__('Three', 'maxhost')=>'3',
			   esc_html__('Four', 'maxhost')=>'4',
			   esc_html__('Five', 'maxhost')=>'5', 
			   esc_html__('Six', 'maxhost')=>'6',
			   esc_html__('Seven', 'maxhost')=>'7',
			   esc_html__('Eight', 'maxhost')=>'8', 
			   esc_html__('Nine', 'maxhost')=>'9',
			   esc_html__('Ten', 'maxhost')=>'10',
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion one title", 'maxhost'),
            "param_name" => "title1",
            "value" => '',
            "description" => esc_html__("Type Accordion one title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		  array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion one text", 'maxhost'),
            "param_name" => "text1",
            "value" => '',
            "description" => esc_html__("Type Accordion one text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion two title", 'maxhost'),
            "param_name" => "title2",
            "value" => '',
            "description" => esc_html__("Type Accordion two title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion two text", 'maxhost'),
            "param_name" => "text2",
            "value" => '',
            "description" => esc_html__("Type Accordion two text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion three title", 'maxhost'),
            "param_name" => "title3",
            "value" => '',
            "description" => esc_html__("Type Accordion three title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion three text", 'maxhost'),
            "param_name" => "text3",
            "value" => '',
            "description" => esc_html__("Type Accordion three text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion four title", 'maxhost'),
            "param_name" => "title4",
            "value" => '',
            "description" => esc_html__("Type Accordion four title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion four text", 'maxhost'),
            "param_name" => "text4",
            "value" => '',
            "description" => esc_html__("Type Accordion four text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion five title", 'maxhost'),
            "param_name" => "title5",
            "value" => '',
            "description" => esc_html__("Type Accordion five title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion five text", 'maxhost'),
            "param_name" => "text5",
            "value" => '',
            "description" => esc_html__("Type Accordion five text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion six title", 'maxhost'),
            "param_name" => "title6",
            "value" => '',
            "description" => esc_html__("Type Accordion six title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion six text", 'maxhost'),
            "param_name" => "text6",
            "value" => '',
            "description" => esc_html__("Type Accordion six text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion seven title", 'maxhost'),
            "param_name" => "title7",
            "value" => '',
            "description" => esc_html__("Type Accordion seven title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion seven text", 'maxhost'),
            "param_name" => "text7",
            "value" => '',
            "description" => esc_html__("Type Accordion seven text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion eight title", 'maxhost'),
            "param_name" => "title8",
            "value" => '',
            "description" => esc_html__("Type Accordion eight title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion eight text", 'maxhost'),
            "param_name" => "text8",
            "value" => '',
            "description" => esc_html__("Type Accordion eight text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion nine title", 'maxhost'),
            "param_name" => "title9",
            "value" => '',
            "description" => esc_html__("Type Accordion nine title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion nine text", 'maxhost'),
            "param_name" => "text9",
            "value" => '',
            "description" => esc_html__("Type Accordion nine text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion ten title", 'maxhost'),
            "param_name" => "title10",
            "value" => '',
            "description" => esc_html__("Type Accordion ten title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion ten text", 'maxhost'),
            "param_name" => "text10",
            "value" => '',
            "description" => esc_html__("Type Accordion ten text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion eleven title", 'maxhost'),
            "param_name" => "title11",
            "value" => '',
            "description" => esc_html__("Type Accordion eleven title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion eleven text", 'maxhost'),
            "param_name" => "text11",
            "value" => '',
            "description" => esc_html__("Type Accordion eleven text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion twelve title", 'maxhost'),
            "param_name" => "title12",
            "value" => '',
            "description" => esc_html__("Type Accordion twelve title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion twelve text", 'maxhost'),
            "param_name" => "text12",
            "value" => '',
            "description" => esc_html__("Type Accordion twelve text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion thirteen title", 'maxhost'),
            "param_name" => "title13",
            "value" => '',
            "description" => esc_html__("Type Accordion thirteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion thirteen text", 'maxhost'),
            "param_name" => "text13",
            "value" => '',
            "description" => esc_html__("Type Accordion thirteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion fourteen title", 'maxhost'),
            "param_name" => "title14",
            "value" => '',
            "description" => esc_html__("Type Accordion fourteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion fourteen text", 'maxhost'),
            "param_name" => "text14",
            "value" => '',
            "description" => esc_html__("Type Accordion fourteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion fifteen title", 'maxhost'),
            "param_name" => "title15",
            "value" => '',
            "description" => esc_html__("Type Accordion fifteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion fifteen text", 'maxhost'),
            "param_name" => "text15",
            "value" => '',
            "description" => esc_html__("Type Accordion fifteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion sixteen title", 'maxhost'),
            "param_name" => "title16",
            "value" => '',
            "description" => esc_html__("Type Accordion sixteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion sixteen text", 'maxhost'),
            "param_name" => "text16",
            "value" => '',
            "description" => esc_html__("Type Accordion sixteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion seventeen title", 'maxhost'),
            "param_name" => "title17",
            "value" => '',
            "description" => esc_html__("Type Accordion seventeen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion seventeen text", 'maxhost'),
            "param_name" => "text17",
            "value" => '',
            "description" => esc_html__("Type Accordion seventeen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion eighteen title", 'maxhost'),
            "param_name" => "title18",
            "value" => '',
            "description" => esc_html__("Type Accordion eighteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion eighteen text", 'maxhost'),
            "param_name" => "text18",
            "value" => '',
            "description" => esc_html__("Type Accordion eighteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion nineteen title", 'maxhost'),
            "param_name" => "title19",
            "value" => '',
            "description" => esc_html__("Type Accordion nineteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion nineteen text", 'maxhost'),
            "param_name" => "text19",
            "value" => '',
            "description" => esc_html__("Type Accordion nineteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion twenty title", 'maxhost'),
            "param_name" => "title20",
            "value" => '',
            "description" => esc_html__("Type Accordion twenty title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '20'
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion twenty text", 'maxhost'),
            "param_name" => "text20",
            "value" => '',
            "description" => esc_html__("Type Accordion twenty text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '20'
            )
         ),
   )
)
);

/************
Accordion - 4
************/
vc_map( array(
      "name" => esc_html__("FT- Accordion - 4", 'maxhost'),
      "base" => "maxhost_shortcodes_accordion_four",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Displays Accordion -Style 4', 'maxhost'),
      "params" => array(
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Number of Accordion", 'maxhost'),
            "param_name" => "number_of_tabs",
            'admin_label' => true,
            "value" => array(
               esc_html__('One', 'maxhost')=>'1',
			   esc_html__('Two', 'maxhost')=>'2', 
			   esc_html__('Three', 'maxhost')=>'3',
			   esc_html__('Four', 'maxhost')=>'4',
			   esc_html__('Five', 'maxhost')=>'5', 
			   esc_html__('Six', 'maxhost')=>'6',
			   esc_html__('Seven', 'maxhost')=>'7',
			   esc_html__('Eight', 'maxhost')=>'8', 
			   esc_html__('Nine', 'maxhost')=>'9',
			   esc_html__('Ten', 'maxhost')=>'10',
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion one title", 'maxhost'),
            "param_name" => "title1",
            "value" => '',
            "description" => esc_html__("Type Accordion one title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion one icon", 'maxhost'),
            "param_name" => "icon1",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		  array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion one text", 'maxhost'),
            "param_name" => "text1",
            "value" => '',
            "description" => esc_html__("Type Accordion one text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion two title", 'maxhost'),
            "param_name" => "title2",
            "value" => '',
            "description" => esc_html__("Type Accordion two title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion two icon", 'maxhost'),
            "param_name" => "icon2",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion two text", 'maxhost'),
            "param_name" => "text2",
            "value" => '',
            "description" => esc_html__("Type Accordion two text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion three title", 'maxhost'),
            "param_name" => "title3",
            "value" => '',
            "description" => esc_html__("Type Accordion three title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion three icon", 'maxhost'),
            "param_name" => "icon3",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion three text", 'maxhost'),
            "param_name" => "text3",
            "value" => '',
            "description" => esc_html__("Type Accordion three text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion four title", 'maxhost'),
            "param_name" => "title4",
            "value" => '',
            "description" => esc_html__("Type Accordion four title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion four icon", 'maxhost'),
            "param_name" => "icon4",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion four text", 'maxhost'),
            "param_name" => "text4",
            "value" => '',
            "description" => esc_html__("Type Accordion four text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion five title", 'maxhost'),
            "param_name" => "title5",
            "value" => '',
            "description" => esc_html__("Type Accordion five title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion five icon", 'maxhost'),
            "param_name" => "icon5",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion five text", 'maxhost'),
            "param_name" => "text5",
            "value" => '',
            "description" => esc_html__("Type Accordion five text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion six title", 'maxhost'),
            "param_name" => "title6",
            "value" => '',
            "description" => esc_html__("Type Accordion six title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion six icon", 'maxhost'),
            "param_name" => "icon6",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion six text", 'maxhost'),
            "param_name" => "text6",
            "value" => '',
            "description" => esc_html__("Type Accordion six text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion seven title", 'maxhost'),
            "param_name" => "title7",
            "value" => '',
            "description" => esc_html__("Type Accordion seven title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion seven icon", 'maxhost'),
            "param_name" => "icon7",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion seven text", 'maxhost'),
            "param_name" => "text7",
            "value" => '',
            "description" => esc_html__("Type Accordion seven text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion eight title", 'maxhost'),
            "param_name" => "title8",
            "value" => '',
            "description" => esc_html__("Type Accordion eight title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion eight icon", 'maxhost'),
            "param_name" => "icon8",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion eight text", 'maxhost'),
            "param_name" => "text8",
            "value" => '',
            "description" => esc_html__("Type Accordion eight text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion nine title", 'maxhost'),
            "param_name" => "title9",
            "value" => '',
            "description" => esc_html__("Type Accordion nine title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion nine icon", 'maxhost'),
            "param_name" => "icon9",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion nine text", 'maxhost'),
            "param_name" => "text9",
            "value" => '',
            "description" => esc_html__("Type Accordion nine text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion ten title", 'maxhost'),
            "param_name" => "title10",
            "value" => '',
            "description" => esc_html__("Type Accordion ten title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion ten icon", 'maxhost'),
            "param_name" => "icon10",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion ten text", 'maxhost'),
            "param_name" => "text10",
            "value" => '',
            "description" => esc_html__("Type Accordion ten text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion eleven title", 'maxhost'),
            "param_name" => "title11",
            "value" => '',
            "description" => esc_html__("Type Accordion eleven title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion eleven icon", 'maxhost'),
            "param_name" => "icon11",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion eleven text", 'maxhost'),
            "param_name" => "text11",
            "value" => '',
            "description" => esc_html__("Type Accordion eleven text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('11', '12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion twelve title", 'maxhost'),
            "param_name" => "title12",
            "value" => '',
            "description" => esc_html__("Type Accordion twelve title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion twelve icon", 'maxhost'),
            "param_name" => "icon12",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion twelve text", 'maxhost'),
            "param_name" => "text12",
            "value" => '',
            "description" => esc_html__("Type Accordion twelve text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('12', '13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion thirteen title", 'maxhost'),
            "param_name" => "title13",
            "value" => '',
            "description" => esc_html__("Type Accordion thirteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion thirteen icon", 'maxhost'),
            "param_name" => "icon13",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion thirteen text", 'maxhost'),
            "param_name" => "text13",
            "value" => '',
            "description" => esc_html__("Type Accordion thirteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('13', '14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion fourteen title", 'maxhost'),
            "param_name" => "title14",
            "value" => '',
            "description" => esc_html__("Type Accordion fourteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion fourteen icon", 'maxhost'),
            "param_name" => "icon14",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion fourteen text", 'maxhost'),
            "param_name" => "text14",
            "value" => '',
            "description" => esc_html__("Type Accordion fourteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('14', '15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion fifteen title", 'maxhost'),
            "param_name" => "title15",
            "value" => '',
            "description" => esc_html__("Type Accordion fifteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion fifteen icon", 'maxhost'),
            "param_name" => "icon15",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion fifteen text", 'maxhost'),
            "param_name" => "text15",
            "value" => '',
            "description" => esc_html__("Type Accordion fifteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('15', '16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion sixteen title", 'maxhost'),
            "param_name" => "title16",
            "value" => '',
            "description" => esc_html__("Type Accordion sixteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion sixteen icon", 'maxhost'),
            "param_name" => "icon16",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion sixteen text", 'maxhost'),
            "param_name" => "text16",
            "value" => '',
            "description" => esc_html__("Type Accordion sixteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('16', '17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion seventeen title", 'maxhost'),
            "param_name" => "title17",
            "value" => '',
            "description" => esc_html__("Type Accordion seventeen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion seventeen icon", 'maxhost'),
            "param_name" => "icon17",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion seventeen text", 'maxhost'),
            "param_name" => "text17",
            "value" => '',
            "description" => esc_html__("Type Accordion seventeen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('17', '18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion eighteen title", 'maxhost'),
            "param_name" => "title18",
            "value" => '',
            "description" => esc_html__("Type Accordion eighteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion eighteen icon", 'maxhost'),
            "param_name" => "icon18",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('18', '19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion eighteen text", 'maxhost'),
            "param_name" => "text18",
            "value" => '',
            "description" => esc_html__("Type Accordion eighteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('18', '19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion nineteen title", 'maxhost'),
            "param_name" => "title19",
            "value" => '',
            "description" => esc_html__("Type Accordion nineteen title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion nineteen icon", 'maxhost'),
            "param_name" => "icon19",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('19', '20',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion nineteen text", 'maxhost'),
            "param_name" => "text19",
            "value" => '',
            "description" => esc_html__("Type Accordion nineteen text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('19', '20',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion twenty title", 'maxhost'),
            "param_name" => "title20",
            "value" => '',
            "description" => esc_html__("Type Accordion twenty title", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '20'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Accordion twenty icon", 'maxhost'),
            "param_name" => "icon20",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '20'
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Accordion twenty text", 'maxhost'),
            "param_name" => "text20",
            "value" => '',
            "description" => esc_html__("Type Accordion twenty text", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '20'
            )
         ),
   )
)
);

/***********
Ad Block - 1
***********/
vc_map( array(
      "name" => esc_html__("FT- Ad Block", 'maxhost'),
      "base" => "maxhost_ad_block_one",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays Advertisement', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Change Background Image", 'maxhost'),
            "param_name" => "maxhost_shortcodes_bg",
            "value" => '',
            "description" => esc_html__('Put the url of the image to Change background image of Ad block.', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-1", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => esc_html__('Heading Line-1', 'maxhost')
         ),
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-2", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => esc_html__('Heading Line-2', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Bullet Points", 'maxhost'),
            "param_name" => "features_one",
            "description" => esc_html__('Start each point on new line','maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Title", 'maxhost'),
            "param_name" => "price_title",
            "value" => '',
            "description" => esc_html__('Price Title (e.g. Starts at)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Amount", 'maxhost'),
            "param_name" => "price",
            "value" => '',
            "description" => esc_html__('Price Amount with Currency (e.g. $99)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Duration", 'maxhost'),
            "param_name" => "price_duration",
            "value" => '',
            "description" => esc_html__('Price Duration (e.g. /month)', 'maxhost')
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Price Color", 'maxhost'),
			"param_name" => "font_color",
            "value" => array(
			   esc_html__('Choose Price Color', 'maxhost')=>'',
               esc_html__('Black', 'maxhost')=>'font-black-dark',
			   esc_html__('White', 'maxhost')=>'font-white',
            ),
		),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button Label", 'maxhost'),
            "param_name" => "button_label",
			"value" => '',
            "description" => esc_html__('Button label', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button URL", 'maxhost'),
            "param_name" => "button_url",
			"value" => '',
            "description" => esc_html__('Button url.', 'maxhost')
         ),
      )
   )
);

/************
Blog Post - 1
************/
vc_map( array(
      "name" => esc_html__("FT- Blog Posts - 1", 'maxhost'),
      "base" => "maxhost_shortcodes_blog_post_one",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Blog Posts -Style 1', 'maxhost'),
      "params" => array(
          array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-1", 'maxhost'),
            "param_name" => "heading1"
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-2", 'maxhost'),
            "param_name" => "heading2"
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Number of Posts", 'maxhost'),
            "param_name" => "num_post",
			"value" => 2,
			"description" => esc_html__('Number of Posts to Show (e.g. 2)', 'maxhost')
         ),
      )
   )
);

/************
Blog Post - 2
************/
vc_map( array(
      "name" => esc_html__("FT- Blog Posts - 2", 'maxhost'),
      "base" => "maxhost_shortcodes_blog_post_two",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Blog Posts -Style 2', 'maxhost'),
      "params" => array(
          array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Change Parallax Background Image", 'maxhost'),
            "param_name" => "maxhost_shortcodes_parallax_bg",
            "value" => '',
            "description" => esc_html__('Put the url of the image to Change parallax background image.', 'maxhost')
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-1", 'maxhost'),
            "param_name" => "heading1"
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-2", 'maxhost'),
            "param_name" => "heading2"
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Number of Posts", 'maxhost'),
            "param_name" => "num_post",
			"value" => 3,
			"description" => esc_html__('Number of Posts to Show (e.g. 2)', 'maxhost')
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Crossed Shaped Section Top", 'maxhost'),
            "param_name" => "crossed_top",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Crossed Shaped Section Bottom", 'maxhost'),
            "param_name" => "crossed_bottom",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
      )
   )
);

/************
Bullet Points
************/
vc_map( array(
      "name" => esc_html__("FT- Bullet Points", 'maxhost'),
      "base" => "maxhost_shortcodes_bullet_points_one",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Bullet Points', 'maxhost'),
      "params" => array(         
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Choose Style", 'maxhost'),
			"param_name" => "section_style",
            "value" => array(
			   esc_html__('Choose Style', 'maxhost')=>'',
               esc_html__('Style One', 'maxhost')=>'list-group',
			   esc_html__('Style Two', 'maxhost')=>'listitems', 
            ),
		),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Bullet Points", 'maxhost'),
            "param_name" => "bullets",
            "description" => esc_html__('Start each point on new line','maxhost')
         ),
   )
)
);

/*************
Call To Action
*************/
vc_map( array(
      "name" => esc_html__("FT- Call To Action", 'maxhost'),
      "base" => "maxhost_call_to_action",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Call To Action Block', 'maxhost'),
      "params" => array(
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Change Parallax Background Image", 'maxhost'),
            "param_name" => "maxhost_shortcodes_parallax_bg",
            "value" => '',
            "description" => esc_html__('Put the url of the image to Change parallax background image.', 'maxhost')
         ),
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line - 1 (Colored Part)", 'maxhost'),
            "param_name" => "heading1_1st",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line - 1 (Simple Part)", 'maxhost'),
            "param_name" => "heading1_2nd",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line - 2", 'maxhost'),
            "param_name" => "heading2",
            "description" => ''
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Heading", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text Below Heading', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button Label", 'maxhost'),
            "param_name" => "button_label",
            "description" => ''
         ),		
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button URL", 'maxhost'),
            "param_name" => "button_url",
            "description" => ''
         ),
      )
   )
);

/******
Counter
******/
vc_map( array(
      "name" => esc_html__("FT- Counter", 'maxhost'),
      "base" => "maxhost_counter",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Counter Block', 'maxhost'),
      "params" => array(
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Section Heading", 'maxhost'),
            "param_name" => "heading",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("1st Counter Title", 'maxhost'),
            "param_name" => "counter_title1",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("1st Counter Number", 'maxhost'),
            "param_name" => "counter_number1",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("2nd Counter Title", 'maxhost'),
            "param_name" => "counter_title2",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("2nd Counter Number", 'maxhost'),
            "param_name" => "counter_number2",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("3rd Counter Title", 'maxhost'),
            "param_name" => "counter_title3",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("3rd Counter Number", 'maxhost'),
            "param_name" => "counter_number3",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("4th Counter Title", 'maxhost'),
            "param_name" => "counter_title4",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("4th Counter Number", 'maxhost'),
            "param_name" => "counter_number4",
            "description" => ''
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Bottom Text", 'maxhost'),
            "param_name" => "bottom_text",
            "value" => '',
            "description" => esc_html__('Bottom Text of this block.', 'maxhost')
         ),
      )
   )
);

/************
Clients Block
************/
vc_map( array(
      "name" => esc_html__("FT- Clients Block", 'maxhost'),
      "base" => "maxhost_clients_block_one",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays some Client Images', 'maxhost'),
      "params" => array(        
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-1", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => esc_html__('Heading Line-1. You can keep this empty if you wish.', 'maxhost')
         ),
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-2", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => esc_html__('Heading Line-2. You can keep this empty if you wish.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Left Side Image", 'maxhost'),
            "param_name" => "image_seven",
            "value" => '',
            "description" => esc_html__('Attach left side image. Not Mandatory.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Client Image - 1", 'maxhost'),
            "param_name" => "image_one",
            "value" => '',
            "description" => esc_html__('Attach 1st image of this block.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Client Image - 2", 'maxhost'),
            "param_name" => "image_two",
            "value" => '',
            "description" => esc_html__('Attach 2nd image of this block.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Client Image - 3", 'maxhost'),
            "param_name" => "image_three",
            "value" => '',
            "description" => esc_html__('Attach 3rd image of this block.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Client Image - 4", 'maxhost'),
            "param_name" => "image_four",
            "value" => '',
            "description" => esc_html__('Attach 4th image of this block.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Client Image - 5", 'maxhost'),
            "param_name" => "image_five",
            "value" => '',
            "description" => esc_html__('Attach 5th image of this block.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Client Image - 6", 'maxhost'),
            "param_name" => "image_six",
            "value" => '',
            "description" => esc_html__('Attach 6th image of this block.', 'maxhost')
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Implement Dark Pattern Background", 'maxhost'),
            "param_name" => "pt_bg",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
      )
   )
);

/***********************
Content With Image Block
***********************/
vc_map( array(
      "name" => esc_html__("FT- Content With Image Block", 'maxhost'),
      "base" => "maxhost_shortcode_content_with_image",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Simple Content With Image Block', 'maxhost'),
      "params" => array(
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading", 'maxhost'),
            "param_name" => "heading1",
            "description" => ''
         ),	
		array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Upload Top Image", 'maxhost'),
            "param_name" => "image_one",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Image", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text Below Image', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button Label", 'maxhost'),
            "param_name" => "button_label",
            "description" => ''
         ),		
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button URL", 'maxhost'),
            "param_name" => "button_url",
            "description" => ''
         ),
      )
   )
);

/*************************
Content With Bullet Points
*************************/
vc_map( array(
      "name" => esc_html__("FT- Content With Bullet Points", 'maxhost'),
      "base" => "maxhost_shortcode_content_with_bullets",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Simple Content With Bullet Points', 'maxhost'),
      "params" => array(
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading", 'maxhost'),
            "param_name" => "heading1",
            "description" => ''
         ),	
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Image", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text Below Image', 'maxhost')
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Choose Style for Bullet Points", 'maxhost'),
			"param_name" => "section_style",
            "value" => array(
			   esc_html__('Choose Style', 'maxhost')=>'',
               esc_html__('Style One', 'maxhost')=>'list-group',
			   esc_html__('Style Two', 'maxhost')=>'listitems', 
            ),
		),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Bullet Points", 'maxhost'),
            "param_name" => "bullets",
            "description" => esc_html__('Start each point on new line','maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button Label", 'maxhost'),
            "param_name" => "button_label",
            "description" => ''
         ),		
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button URL", 'maxhost'),
            "param_name" => "button_url",
            "description" => ''
         ),
      )
   )
);

/*****************
Domain Package Box
*****************/
vc_map( array(
      "name" => esc_html__("FT- Domain Package Box", 'maxhost'),
      "base" => "maxhost_domain_package_box",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Domain Package Box', 'maxhost'),
      "params" => array(
		array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Upload Top Small Image", 'maxhost'),
            "param_name" => "image_one",
            "value" => '',
            "description" => esc_html__('Image Size should be 75x30.', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Image", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text Below Image', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price with Currency", 'maxhost'),
            "param_name" => "price",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button Label", 'maxhost'),
            "param_name" => "button_label",
            "description" => ''
         ),		
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button URL", 'maxhost'),
            "param_name" => "button_url",
            "description" => esc_html__('Example Register Domain URL: YOUR_WHMCS_PAGE_URL/cart.php?a=add&domain=register','maxhost')
         ),
      )
   )
);

/*********************
Domains Register Block
*********************/
vc_map( array(
      "name" => esc_html__("FT- Domains Register Block", 'maxhost'),
      "base" => "maxhost_domains_register",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Domains Register Block', 'maxhost'),
      "params" => array(
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => esc_html__('Section Heading', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Domain - 1", 'maxhost'),
            "param_name" => "domain1",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Domain - 2", 'maxhost'),
            "param_name" => "domain2",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Domain - 3", 'maxhost'),
            "param_name" => "domain3",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Domain - 4", 'maxhost'),
            "param_name" => "domain4",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Domain - 5", 'maxhost'),
            "param_name" => "domain5",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Register URL", 'maxhost'),
            "param_name" => "register_url",
            "description" => esc_html__('Example Register Domain URL: YOUR_WHMCS_PAGE_URL/cart.php?a=add&domain=register','maxhost')
         ),
      )
   )
);

/******************
Domain Search Block
******************/
   vc_map( array(
      "name" => esc_html__("FT- Domain Search Block", 'maxhost'),
      "base" => "hosting_domain_search",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Domain Search Block', 'maxhost'),
      "params" => array(
         array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Choose Style", 'maxhost'),
			"param_name" => "section_style",
            "value" => array(
			   esc_html__('Choose Style', 'maxhost')=>'',
               esc_html__('Style One', 'maxhost')=>'m-top0 domain-search shape-white',
			   esc_html__('Style Two', 'maxhost')=>'m-top0 domain-search', 
			   esc_html__('Style Three', 'maxhost')=>'m-top5 m-bottom5',
			   esc_html__('Style Four', 'maxhost')=>'m-top0 domain-search white-bg',
			   esc_html__('Style Five', 'maxhost')=>'domain-page-header m-top0',
            ),
		),
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Section Heading", 'maxhost'),
            "param_name" => "section_heading1",
            "value" => '',
            "description" => esc_html__('Section Heading needed for Style Two, Style Three and Style Five.', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Search Field Place Holder Text", 'maxhost'),
            "param_name" => "search_pholder",
            "value" => '',
            "description" => esc_html__('Example place holder: Enter your Domain Name Here.', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Search Button Label", 'maxhost'),
            "param_name" => "button_label",
            "value" => '',
            "description" => esc_html__('Example: Search OR Transfer. Write "Transfer", if you want to use the form for domain Transfer.', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Search Action URL", 'maxhost'),
            "param_name" => "search_action_url",
            "value" => '',
            "description" => esc_html__('Put your WHMCS domain search url. Example: YOUR_WHMCS_SITE_URL/cart.php?a=add&domain=register&query=', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Drop-Down Options (Example: .com)", 'maxhost'),
            "param_name" => "domain",
            "description" => esc_html__('Start each option on new line. Keep this field empty if you are using Style Four.','maxhost')
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Enable Ajax Domain Search", 'maxhost'),
            "param_name" => "ajax_search",
			"value" => array(
				  "" => "true"
			   ),
			"description" => esc_html__("It will show the Domain Search result below the Search Form.", 'maxhost'),
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Ajax Search Purchase Button Label", 'maxhost'),
            "param_name" => "purchase_btn_name",
            "value" => '',
            "description" => esc_html__('Example: Buy Now Or Purchase Now', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Sample Domain - 1", 'maxhost'),
            "param_name" => "sample_domain1",
            "value" => '',
            "description" => esc_html__('Example: .com', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Sample Domain Pricing - 1", 'maxhost'),
            "param_name" => "sample_domain1_pricing",
            "value" => '',
            "description" => esc_html__('Example: $89', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Sample Domain - 2", 'maxhost'),
            "param_name" => "sample_domain2",
            "value" => '',
            "description" => esc_html__('Example: .com', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Sample Domain Pricing - 2", 'maxhost'),
            "param_name" => "sample_domain2_pricing",
            "value" => '',
            "description" => esc_html__('Example: $89', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Sample Domain - 3", 'maxhost'),
            "param_name" => "sample_domain3",
            "value" => '',
            "description" => esc_html__('Example: .com', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Sample Domain Pricing - 3", 'maxhost'),
            "param_name" => "sample_domain3_pricing",
            "value" => '',
            "description" => esc_html__('Example: $89', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Sample Domain - 4", 'maxhost'),
            "param_name" => "sample_domain4",
            "value" => '',
            "description" => esc_html__('Example: .com', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Sample Domain Pricing - 4", 'maxhost'),
            "param_name" => "sample_domain4_pricing",
            "value" => '',
            "description" => esc_html__('Example: $89', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Sample Domain - 5", 'maxhost'),
            "param_name" => "sample_domain5",
            "value" => '',
            "description" => esc_html__('Example: .com', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Sample Domain Pricing - 5", 'maxhost'),
            "param_name" => "sample_domain5_pricing",
            "value" => '',
            "description" => esc_html__('Example: $89', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Small Note", 'maxhost'),
            "param_name" => "small_note",
            "value" => '',
            "description" => esc_html__('Small Note not needed for Style Four.', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Domain Price List URL", 'maxhost'),
            "param_name" => "view_domain_url",
            "value" => '',
            "description" => esc_html__('Make a Domain Pricing page and put the page url here. Needed only for Style Four and Style Five', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Bulk Domain Search URL", 'maxhost'),
            "param_name" => "bulk_domain_url",
            "value" => '',
            "description" => esc_html__('Example Bulk Search URL: YOUR_WHMCS_PAGE_URL/domainchecker.php?search=bulk. Needed only for Style Four and Style Five', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Transfer Domain URL", 'maxhost'),
            "param_name" => "transfer_domain_url",
            "value" => '',
            "description" => esc_html__('Example Transfer Domain URL: YOUR_WHMCS_PAGE_URL/cart.php?a=add&domain=transfer. Needed only for Style Four and Style Five', 'maxhost')
         ),
      )
   )
);

/*****************
Features Block - 1
*****************/
vc_map( array(
      "name" => esc_html__("FT- Features Block - 1", 'maxhost'),
      "base" => "maxhost_features_block_one",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays a Features Section', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Change Parallax Background Image", 'maxhost'),
            "param_name" => "maxhost_shortcodes_parallax_bg",
            "value" => '',
            "description" => esc_html__('Put the url of the image to Change parallax background image.', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Left Heading Line-1", 'maxhost'),
            "param_name" => "left_heading1",
            "value" => '',
            "description" => esc_html__('Left side Heading Line-1', 'maxhost')
         ),
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Left Heading Line-2", 'maxhost'),
            "param_name" => "left_heading2",
            "value" => '',
            "description" => esc_html__('Left side Heading Line-2', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Left Side Image", 'maxhost'),
            "param_name" => "image_one",
            "value" => '',
            "description" => esc_html__('Attach the left side image of this block', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Left Side Bullet Points", 'maxhost'),
            "param_name" => "features_one",
            "description" => esc_html__('Start each point on new line','maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Right Heading Line-1", 'maxhost'),
            "param_name" => "right_heading1",
            "value" => '',
            "description" => esc_html__('Right side Heading Line-1', 'maxhost')
         ),
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Right Heading Line-2", 'maxhost'),
            "param_name" => "right_heading2",
            "value" => '',
            "description" => esc_html__('Right side Heading Line-2', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("1st Domain Name", 'maxhost'),
            "param_name" => "domain_name1",
			"value" => '',
            "description" => esc_html__('Domain Name', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("1st Button Label", 'maxhost'),
            "param_name" => "button_label1",
			"value" => '',
            "description" => esc_html__('Button label', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("1st Button URL", 'maxhost'),
            "param_name" => "button_url1",
			"value" => '',
            "description" => esc_html__('Button url.', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("2nd Domain Name", 'maxhost'),
            "param_name" => "domain_name2",
			"value" => '',
            "description" => esc_html__('Domain Name', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("2nd Button Label", 'maxhost'),
            "param_name" => "button_label2",
			"value" => '',
            "description" => esc_html__('Button label', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("2nd Button URL", 'maxhost'),
            "param_name" => "button_url2",
			"value" => '',
            "description" => esc_html__('Button url.', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("3rd Domain Name", 'maxhost'),
            "param_name" => "domain_name3",
			"value" => '',
            "description" => esc_html__('Domain Name', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("3rd Button Label", 'maxhost'),
            "param_name" => "button_label3",
			"value" => '',
            "description" => esc_html__('Button label', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("3rd Button URL", 'maxhost'),
            "param_name" => "button_url3",
			"value" => '',
            "description" => esc_html__('Button url.', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("4th Domain Name", 'maxhost'),
            "param_name" => "domain_name4",
			"value" => '',
            "description" => esc_html__('Domain Name', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("4th Button Label", 'maxhost'),
            "param_name" => "button_label4",
			"value" => '',
            "description" => esc_html__('Button label', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("4th Button URL", 'maxhost'),
            "param_name" => "button_url4",
			"value" => '',
            "description" => esc_html__('Button url.', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("5th Domain Name", 'maxhost'),
            "param_name" => "domain_name5",
			"value" => '',
            "description" => esc_html__('Domain Name', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("5th Button Label", 'maxhost'),
            "param_name" => "button_label5",
			"value" => '',
            "description" => esc_html__('Button label', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("5th Button URL", 'maxhost'),
            "param_name" => "button_url5",
			"value" => '',
            "description" => esc_html__('Button url.', 'maxhost')
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Crossed Shaped Section Top", 'maxhost'),
            "param_name" => "crossed_top",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Crossed Shaped Section Bottom", 'maxhost'),
            "param_name" => "crossed_bottom",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
      )
   )
);

/*****************
Features Block - 2
*****************/
vc_map( array(
      "name" => esc_html__("FT- Features Block - 2", 'maxhost'),
      "base" => "maxhost_features_block_two",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays a Features Section', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Change Parallax Background Image", 'maxhost'),
            "param_name" => "maxhost_shortcodes_parallax_bg",
            "value" => '',
            "description" => esc_html__('Put the url of the image to Change parallax background image.', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-1", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => esc_html__('Heading Line-1', 'maxhost')
         ),
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-2", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => esc_html__('Heading Line-2', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Title", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text below the title', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Bullet Points", 'maxhost'),
            "param_name" => "features_one",
            "description" => esc_html__('Start each point on new line','maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Bottom Image", 'maxhost'),
            "param_name" => "image_two",
            "value" => '',
            "description" => esc_html__('Attach the bottom image of this block', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Right Side Image", 'maxhost'),
            "param_name" => "image_one",
            "value" => '',
            "description" => esc_html__('Attach the right side image of this block', 'maxhost')
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Crossed Shaped Section Top", 'maxhost'),
            "param_name" => "crossed_top",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Crossed Shaped Section Bottom", 'maxhost'),
            "param_name" => "crossed_bottom",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
         
      )
   )
);

/*****************
Features Block - 3
*****************/
vc_map( array(
      "name" => esc_html__("FT- Features Block - 3", 'maxhost'),
      "base" => "maxhost_features_block_three",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays a Features Section', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Change Parallax Background Image", 'maxhost'),
            "param_name" => "maxhost_shortcodes_parallax_bg",
            "value" => '',
            "description" => esc_html__('Put the url of the image to Change parallax background image.', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Left Heading Line-1", 'maxhost'),
            "param_name" => "left_heading1",
            "value" => '',
            "description" => esc_html__('Left side Heading Line-1', 'maxhost')
         ),
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Left Heading Line-2", 'maxhost'),
            "param_name" => "left_heading2",
            "value" => '',
            "description" => esc_html__('Left side Heading Line-2', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Left Price Title", 'maxhost'),
            "param_name" => "price_title",
            "value" => '',
            "description" => esc_html__('Left side Price Title (e.g. Starts at)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Left Price Amount", 'maxhost'),
            "param_name" => "price",
            "value" => '',
            "description" => esc_html__('Left side Price Amount with Currency (e.g. $99)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Left Price Duration", 'maxhost'),
            "param_name" => "price_duration",
            "value" => '',
            "description" => esc_html__('Left side Price Duration (e.g. /month)', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Left Side Image", 'maxhost'),
            "param_name" => "image_one",
            "value" => '',
            "description" => esc_html__('Attach the left side image of this block', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Left Side Bullet Points", 'maxhost'),
            "param_name" => "features_one",
            "description" => esc_html__('Start each point on new line','maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Right Heading Line-1", 'maxhost'),
            "param_name" => "right_heading1",
            "value" => '',
            "description" => esc_html__('Right side Heading Line-1', 'maxhost')
         ),
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Right Heading Line-2", 'maxhost'),
            "param_name" => "right_heading2",
            "value" => '',
            "description" => esc_html__('Right side Heading Line-2', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Right Side Image - 1", 'maxhost'),
            "param_name" => "image_two",
            "value" => '',
            "description" => esc_html__('Attach 1st image of right side.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Right Side Image - 2", 'maxhost'),
            "param_name" => "image_three",
            "value" => '',
            "description" => esc_html__('Attach 2nd image of right side.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Right Side Image - 3", 'maxhost'),
            "param_name" => "image_four",
            "value" => '',
            "description" => esc_html__('Attach 3rd image of right side.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Right Side Image - 4", 'maxhost'),
            "param_name" => "image_five",
            "value" => '',
            "description" => esc_html__('Attach 4th image of right side.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Right Side Image - 5", 'maxhost'),
            "param_name" => "image_six",
            "value" => '',
            "description" => esc_html__('Attach 5th image of right side.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Right Side Image - 6", 'maxhost'),
            "param_name" => "image_seven",
            "value" => '',
            "description" => esc_html__('Attach 6th image of right side.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Right Side Image - 7", 'maxhost'),
            "param_name" => "image_eight",
            "value" => '',
            "description" => esc_html__('Attach 7th image of right side.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Right Side Image - 8", 'maxhost'),
            "param_name" => "image_nine",
            "value" => '',
            "description" => esc_html__('Attach 8th image of right side.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Right Side Image - 9", 'maxhost'),
            "param_name" => "image_ten",
            "value" => '',
            "description" => esc_html__('Attach 9th image of right side.', 'maxhost')
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Crossed Shaped Section Top", 'maxhost'),
            "param_name" => "crossed_top",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Crossed Shaped Section Bottom", 'maxhost'),
            "param_name" => "crossed_bottom",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
      )
   )
);

/*****************
Features Block - 4
*****************/
vc_map( array(
      "name" => esc_html__("FT- Features Block - 4", 'maxhost'),
      "base" => "maxhost_features_block_four",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays a Features Section', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-1", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => esc_html__('Heading Line-1', 'maxhost')
         ),
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-2", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => esc_html__('Heading Line-2', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Title", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text below the title', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Bullet Points", 'maxhost'),
            "param_name" => "features_one",
            "description" => esc_html__('Start each point on new line','maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Title", 'maxhost'),
            "param_name" => "price_title",
            "value" => '',
            "description" => esc_html__('Price Title (e.g. Starts at)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Amount", 'maxhost'),
            "param_name" => "price",
            "value" => '',
            "description" => esc_html__('Price Amount with Currency (e.g. $99)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Duration", 'maxhost'),
            "param_name" => "price_duration",
            "value" => '',
            "description" => esc_html__('Price Duration (e.g. /month)', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Right Side Image", 'maxhost'),
            "param_name" => "image_one",
            "value" => '',
            "description" => esc_html__('Attach the right side image of this block', 'maxhost')
         ),
      )
   )
);

/*****************
Features Block - 5
*****************/
vc_map( array(
      "name" => esc_html__("FT- Features Block - 5", 'maxhost'),
      "base" => "maxhost_features_block_five",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays a Features Section', 'maxhost'),
      "params" => array(
         array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Left Side Image", 'maxhost'),
            "param_name" => "image_two",
            "value" => '',
            "description" => esc_html__('Attach the left side image of this block', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-1", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => esc_html__('Heading Line-1', 'maxhost')
         ),
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-2", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => esc_html__('Heading Line-2', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Title", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text below the title', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Bullet Points", 'maxhost'),
            "param_name" => "features_one",
            "description" => esc_html__('Start each point on new line','maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Title", 'maxhost'),
            "param_name" => "price_title",
            "value" => '',
            "description" => esc_html__('Price Title (e.g. Starts at)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Amount", 'maxhost'),
            "param_name" => "price",
            "value" => '',
            "description" => esc_html__('Price Amount with Currency (e.g. $99)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Duration", 'maxhost'),
            "param_name" => "price_duration",
            "value" => '',
            "description" => esc_html__('Price Duration (e.g. /month)', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Right Side Image", 'maxhost'),
            "param_name" => "image_one",
            "value" => '',
            "description" => esc_html__('Attach the right side image (image width should not be more than 270px) of this block', 'maxhost')
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Want to remove the top margin?", 'maxhost'),
            "param_name" => "active",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
      )
   )
);

/*****************
Features Block - 6
*****************/
vc_map( array(
      "name" => esc_html__("FT- Features Block - 6", 'maxhost'),
      "base" => "maxhost_features_block_six",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays a Features Section', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Change Parallax Background Image", 'maxhost'),
            "param_name" => "maxhost_shortcodes_parallax_bg",
            "value" => '',
            "description" => esc_html__('Put the url of the image to Change parallax background image.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Left Side Image", 'maxhost'),
            "param_name" => "image_one",
            "value" => '',
            "description" => esc_html__('Attach the left side image of this block', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-1", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => esc_html__('Heading Line-1', 'maxhost')
         ),
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-2 (1st Part)", 'maxhost'),
            "param_name" => "heading2_1st",
            "value" => '',
            "description" => esc_html__('Heading Line-2 (1st Part)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-2 (2nd Part)", 'maxhost'),
            "param_name" => "heading2_2nd",
            "value" => '',
            "description" => esc_html__('Heading Line-2 (2nd Part - Big)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-2 (3rd Part)", 'maxhost'),
            "param_name" => "heading2_3rd",
            "value" => '',
            "description" => esc_html__('Heading Line-2 (3rd Part)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line-3", 'maxhost'),
            "param_name" => "heading3",
            "value" => '',
            "description" => esc_html__('Heading Line-3', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Headings", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text below the headings', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button Label", 'maxhost'),
            "param_name" => "button_label",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button URL", 'maxhost'),
            "param_name" => "button_url",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Crossed Shaped Section Top", 'maxhost'),
            "param_name" => "crossed_top",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Crossed Shaped Section Bottom", 'maxhost'),
            "param_name" => "crossed_bottom",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
      )
   )
);

/*****************
Features Block - 7
*****************/
vc_map( array(
      "name" => esc_html__("FT- Features Block - 7", 'maxhost'),
      "base" => "maxhost_features_block_seven",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays a Features Section', 'maxhost'),
      "params" => array(
         array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Upload Image (Left Section)", 'maxhost'),
            "param_name" => "image_one",
            "value" => '',
            "description" => esc_html__('Attach the left side image of this block', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading (Left Section)", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => esc_html__('Heading', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Title (Left Section)", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text below the title', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Bullet Points (Left Section)", 'maxhost'),
            "param_name" => "features_one",
            "description" => esc_html__('Start each point on new line','maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Title (Left Section)", 'maxhost'),
            "param_name" => "price_title",
            "value" => '',
            "description" => esc_html__('Price Title (e.g. Starts at)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Amount (Left Section)", 'maxhost'),
            "param_name" => "price",
            "value" => '',
            "description" => esc_html__('Price Amount with Currency (e.g. $99)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Duration (Left Section)", 'maxhost'),
            "param_name" => "price_duration",
            "value" => '',
            "description" => esc_html__('Price Duration (e.g. /month)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button Label (Left Section)", 'maxhost'),
            "param_name" => "button_label",
            "value" => '',
            "description" => esc_html__('Button label', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button URL (Left Section)", 'maxhost'),
            "param_name" => "button_url",
            "value" => '',
            "description" => esc_html__('Button url', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Upload Image (Right Section)", 'maxhost'),
            "param_name" => "image_two",
            "value" => '',
            "description" => esc_html__('Attach the right side image of this block', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading (Right Section)", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => esc_html__('Heading', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Title (Right Section)", 'maxhost'),
            "param_name" => "text2",
            "value" => '',
            "description" => esc_html__('Text below the title', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Bullet Points (Right Section)", 'maxhost'),
            "param_name" => "features_two",
            "description" => esc_html__('Start each point on new line','maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Title (Right Section)", 'maxhost'),
            "param_name" => "price_title2",
            "value" => '',
            "description" => esc_html__('Price Title (e.g. Starts at)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Amount (Right Section)", 'maxhost'),
            "param_name" => "price2",
            "value" => '',
            "description" => esc_html__('Price Amount with Currency (e.g. $99)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Duration (Right Section)", 'maxhost'),
            "param_name" => "price_duration2",
            "value" => '',
            "description" => esc_html__('Price Duration (e.g. /month)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button Label (Right Section)", 'maxhost'),
            "param_name" => "button_label2",
            "value" => '',
            "description" => esc_html__('Button label', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button URL (Right Section)", 'maxhost'),
            "param_name" => "button_url2",
            "value" => '',
            "description" => esc_html__('Button url', 'maxhost')
         ),
      )
   )
);

/*****************
Features Block - 8
*****************/
vc_map( array(
      "name" => esc_html__("FT- Features Block - 8", 'maxhost'),
      "base" => "maxhost_features_block_eight",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays a Features Section', 'maxhost'),
      "params" => array(
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Icon (Left Section)", 'maxhost'),
            "param_name" => "icon_one",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://simplelineicons.com/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>'
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Use Font-Awesome Icons instead Simple Line Icons", 'maxhost'),
            "param_name" => "fawesome1",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading (Left Section)", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => esc_html__('Heading', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Title (Left Section)", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text below the title', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button Label (Left Section)", 'maxhost'),
            "param_name" => "button_label",
            "value" => '',
            "description" => esc_html__('Button label', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button URL (Left Section)", 'maxhost'),
            "param_name" => "button_url",
            "value" => '',
            "description" => esc_html__('Button url', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Icon (Right Section)", 'maxhost'),
            "param_name" => "icon_two",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://simplelineicons.com/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>'
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Use Font-Awesome Icons instead Simple Line Icons", 'maxhost'),
            "param_name" => "fawesome2",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading (Right Section)", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => esc_html__('Heading', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Title (Right Section)", 'maxhost'),
            "param_name" => "text2",
            "value" => '',
            "description" => esc_html__('Text below the title', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button Label (Right Section)", 'maxhost'),
            "param_name" => "button_label2",
            "value" => '',
            "description" => esc_html__('Button label', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button URL (Right Section)", 'maxhost'),
            "param_name" => "button_url2",
            "value" => '',
            "description" => esc_html__('Button url', 'maxhost')
         ),
      )
   )
);

/*****************
Features Block - 9
*****************/
vc_map( array(
      "name" => esc_html__("FT- Features Block - 9", 'maxhost'),
      "base" => "maxhost_features_block_nine",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays a Features Section', 'maxhost'),
      "params" => array(
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line 1", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => esc_html__('Heading', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line 2", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => esc_html__('Heading', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Title", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text below the title', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Bullet Points", 'maxhost'),
            "param_name" => "features_one",
            "description" => esc_html__('Start each point on new line','maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Title", 'maxhost'),
            "param_name" => "price_title",
            "value" => '',
            "description" => esc_html__('Price Title (e.g. Starts at)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Amount", 'maxhost'),
            "param_name" => "price",
            "value" => '',
            "description" => esc_html__('Price Amount with Currency (e.g. $99)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price Duration", 'maxhost'),
            "param_name" => "price_duration",
            "value" => '',
            "description" => esc_html__('Price Duration (e.g. /month)', 'maxhost')
         ),
      )
   )
);

/********************
Features with Icons-1
********************/
   vc_map( array(
      "name" => esc_html__("FT- Features with Icons-1", 'maxhost'),
      "base" => "maxhost_shortcodes_iconic_features_one",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Features with Icons - Style 1', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Icon", 'maxhost'),
            "param_name" => "icon",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://simplelineicons.com/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>'
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Use Font-Awesome Icons instead Simple Line Icons", 'maxhost'),
            "param_name" => "fawesome",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Title", 'maxhost'),
            "param_name" => "title",
            "value" => '',
            "description" => esc_html__('Feature Title', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Title", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text below the title', 'maxhost')
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Want to make this feature highlighted?", 'maxhost'),
            "param_name" => "active",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
      )
   )
);

/********************
Features with Icons-2
********************/
   vc_map( array(
      "name" => esc_html__("FT- Features with Icons-2", 'maxhost'),
      "base" => "maxhost_shortcodes_iconic_features_two",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Features with Icons - Style 2', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Icon", 'maxhost'),
            "param_name" => "icon",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://simplelineicons.com/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>'
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Use Font-Awesome Icons instead Simple Line Icons", 'maxhost'),
            "param_name" => "fawesome",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Title", 'maxhost'),
            "param_name" => "title",
            "value" => '',
            "description" => esc_html__('Feature Title', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Title", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text below the title', 'maxhost')
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Font Color", 'maxhost'),
			"param_name" => "font_color",
            "value" => array(
			   esc_html__('Choose Color', 'maxhost')=>'',
               esc_html__('Black', 'maxhost')=>'',
			   esc_html__('White', 'maxhost')=>'font-white',
            ),
		),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Want to make this feature highlighted?", 'maxhost'),
            "param_name" => "active",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
      )
   )
);

/********************
Features with Icons-3
********************/
   vc_map( array(
      "name" => esc_html__("FT- Features with Icons-3", 'maxhost'),
      "base" => "maxhost_shortcodes_iconic_features_three",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Features with Icons - Style 3', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Icon", 'maxhost'),
            "param_name" => "icon",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://simplelineicons.com/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>'
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Use Font-Awesome Icons instead Simple Line Icons", 'maxhost'),
            "param_name" => "fawesome",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Title", 'maxhost'),
            "param_name" => "title",
            "value" => '',
            "description" => esc_html__('Feature Title', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Title", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text below the title', 'maxhost')
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Font Color", 'maxhost'),
			"param_name" => "font_color",
            "value" => array(
			   esc_html__('Choose Color', 'maxhost')=>'',
               esc_html__('Black', 'maxhost')=>'',
			   esc_html__('White', 'maxhost')=>'font-white',
            ),
		),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Want to make this feature highlighted?", 'maxhost'),
            "param_name" => "active",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
      )
   )
);

/********************
Features with Icons-4
********************/
   vc_map( array(
      "name" => esc_html__("FT- Features with Icons-4", 'maxhost'),
      "base" => "maxhost_shortcodes_iconic_features_four",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Features with Icons - Style 4', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Icon", 'maxhost'),
            "param_name" => "icon",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://simplelineicons.com/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>'
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Use Font-Awesome Icons instead Simple Line Icons", 'maxhost'),
            "param_name" => "fawesome",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Title", 'maxhost'),
            "param_name" => "title",
            "value" => '',
            "description" => esc_html__('Feature Title', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Title", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text below the title', 'maxhost')
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Font Color", 'maxhost'),
			"param_name" => "font_color",
            "value" => array(
			   esc_html__('Choose Color', 'maxhost')=>'',
               esc_html__('Black', 'maxhost')=>'',
			   esc_html__('White', 'maxhost')=>'font-white',
            ),
		),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Want to make this feature highlighted?", 'maxhost'),
            "param_name" => "active",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
      )
   )
);

/********************
Features with Icons-5
********************/
   vc_map( array(
      "name" => esc_html__("FT- Features with Icons-5", 'maxhost'),
      "base" => "maxhost_shortcodes_iconic_features_five",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Features with Icons - Style 5', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Icon", 'maxhost'),
            "param_name" => "icon",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://simplelineicons.com/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>'
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Use Font-Awesome Icons instead Simple Line Icons", 'maxhost'),
            "param_name" => "fawesome",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Title", 'maxhost'),
            "param_name" => "title",
            "value" => '',
            "description" => esc_html__('Feature Title', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Title", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text below the title', 'maxhost')
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Font Color", 'maxhost'),
			"param_name" => "font_color",
            "value" => array(
			   esc_html__('Choose Color', 'maxhost')=>'',
               esc_html__('Black', 'maxhost')=>'',
			   esc_html__('White', 'maxhost')=>'font-white',
            ),
		),
      )
   )
);

/********************
Features with Icons-6
********************/
   vc_map( array(
      "name" => esc_html__("FT- Features with Icons-6", 'maxhost'),
      "base" => "maxhost_shortcodes_iconic_features_six",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Features with Icons - Style 6', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Icon", 'maxhost'),
            "param_name" => "icon",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://simplelineicons.com/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>'
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Use Font-Awesome Icons instead Simple Line Icons", 'maxhost'),
            "param_name" => "fawesome",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Title", 'maxhost'),
            "param_name" => "title",
            "value" => '',
            "description" => esc_html__('Feature Title', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Title", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text below the title', 'maxhost')
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Want to make this feature highlighted?", 'maxhost'),
            "param_name" => "active",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
      )
   )
);

/********************
Features with Icons-7
********************/
   vc_map( array(
      "name" => esc_html__("FT- Features with Icons-7", 'maxhost'),
      "base" => "maxhost_shortcodes_iconic_features_seven",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Features with Icons - Style 7', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Icon", 'maxhost'),
            "param_name" => "icon",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://simplelineicons.com/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>'
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Use Font-Awesome Icons instead Simple Line Icons", 'maxhost'),
            "param_name" => "fawesome",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Title", 'maxhost'),
            "param_name" => "title",
            "value" => '',
            "description" => esc_html__('Feature Title', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text Below Title", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => esc_html__('Text below the title', 'maxhost')
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Want to make this feature highlighted?", 'maxhost'),
            "param_name" => "active",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
      )
   )
);

/*************
Features Table
*************/
vc_map( array(
      "name" => esc_html__("FT- Features Table", 'maxhost'),
      "base" => "maxhost_shortcodes_features_table",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays Table of Hosting Features', 'maxhost'),
      "params" => array(
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Table Titles", 'maxhost'),
            "param_name" => "features1",
            "description" => esc_html__('Start each title on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("1st Row Features", 'maxhost'),
            "param_name" => "features2",
            "description" => esc_html__('1st row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("2nd Row Features", 'maxhost'),
            "param_name" => "features3",
            "description" => esc_html__('2nd row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("3rd Row Features", 'maxhost'),
            "param_name" => "features4",
            "description" => esc_html__('3rd row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("4th Row Features", 'maxhost'),
            "param_name" => "features5",
            "description" => esc_html__('4th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("5th Row Features", 'maxhost'),
            "param_name" => "features6",
            "description" => esc_html__('5th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("6th Row Features", 'maxhost'),
            "param_name" => "features7",
            "description" => esc_html__('6th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("7th Row Features", 'maxhost'),
            "param_name" => "features8",
            "description" => esc_html__('7th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("8th Row Features", 'maxhost'),
            "param_name" => "features9",
            "description" => esc_html__('8th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("9th Row Features", 'maxhost'),
            "param_name" => "features10",
            "description" => esc_html__('9th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("10th Row Features", 'maxhost'),
            "param_name" => "features11",
            "description" => esc_html__('10th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("11th Row Features", 'maxhost'),
            "param_name" => "features11",
            "description" => esc_html__('11th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("12th Row Features", 'maxhost'),
            "param_name" => "features12",
            "description" => esc_html__('12th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("13th Row Features", 'maxhost'),
            "param_name" => "features13",
            "description" => esc_html__('13th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("14th Row Features", 'maxhost'),
            "param_name" => "features14",
            "description" => esc_html__('14th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("15th Row Features", 'maxhost'),
            "param_name" => "features15",
            "description" => esc_html__('15th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("16th Row Features", 'maxhost'),
            "param_name" => "features16",
            "description" => esc_html__('16th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("17th Row Features", 'maxhost'),
            "param_name" => "features17",
            "description" => esc_html__('17th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("18th Row Features", 'maxhost'),
            "param_name" => "features18",
            "description" => esc_html__('18th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("19th Row Features", 'maxhost'),
            "param_name" => "features19",
            "description" => esc_html__('19th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("20th Row Features", 'maxhost'),
            "param_name" => "features20",
            "description" => esc_html__('20th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("21st Row Features", 'maxhost'),
            "param_name" => "features21",
            "description" => esc_html__('21st row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("22nd Row Features", 'maxhost'),
            "param_name" => "features22",
            "description" => esc_html__('22nd row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("23rd Row Features", 'maxhost'),
            "param_name" => "features23",
            "description" => esc_html__('23rd row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("24th Row Features", 'maxhost'),
            "param_name" => "features24",
            "description" => esc_html__('24th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("25th Row Features", 'maxhost'),
            "param_name" => "features25",
            "description" => esc_html__('25th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("26th Row Features", 'maxhost'),
            "param_name" => "features26",
            "description" => esc_html__('26th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("27th Row Features", 'maxhost'),
            "param_name" => "features27",
            "description" => esc_html__('27th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("28th Row Features", 'maxhost'),
            "param_name" => "features28",
            "description" => esc_html__('28th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("29th Row Features", 'maxhost'),
            "param_name" => "features29",
            "description" => esc_html__('29th row Features of the table. Start each feature on new line','maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("30th Row Features", 'maxhost'),
            "param_name" => "features30",
            "description" => esc_html__('30th row Features of the table. Start each feature on new line','maxhost')
         ),
      )
   )
);

/********
Heading-1
********/
vc_map( array(
      "name" => esc_html__("FT- Heading-1", 'maxhost'),
      "base" => "maxhost_shortcodes_title_one",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Custom Heading of Maxhost -Style 1', 'maxhost'),
      "params" => array(         
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Left Side Title", 'maxhost'),
            "param_name" => "left_text",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Right Side Text", 'maxhost'),
            "param_name" => "right_text",
            "value" => '',
            "description" => ''
         ),
   )
)
);

/********
Heading-2
********/
vc_map( array(
      "name" => esc_html__("FT- Heading-2", 'maxhost'),
      "base" => "maxhost_shortcodes_title_two",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Custom Heading of Maxhost -Style 2', 'maxhost'),
      "params" => array(         
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line 1", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line 2", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => ''
         ),
   )
)
);

/********
Heading-3
********/
vc_map( array(
      "name" => esc_html__("FT- Heading-3", 'maxhost'),
      "base" => "maxhost_shortcodes_title_three",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Custom Heading of Maxhost -Style 3', 'maxhost'),
      "params" => array(         
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line 1", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line 2", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Black or White?", 'maxhost'),
			"param_name" => "font_color",
            "value" => array(
			   esc_html__('Choose Color', 'maxhost')=>'',
               esc_html__('Black', 'maxhost')=>'black',
			   esc_html__('White', 'maxhost')=>'white',
            ),
		),
   )
)
);

/********
Heading-4
********/
vc_map( array(
      "name" => esc_html__("FT- Heading-4", 'maxhost'),
      "base" => "maxhost_shortcodes_title_four",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Custom Heading of Maxhost -Style 4', 'maxhost'),
      "params" => array(         
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Text", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Black or White?", 'maxhost'),
			"param_name" => "font_color",
            "value" => array(
			   esc_html__('Choose Color', 'maxhost')=>'',
               esc_html__('Black', 'maxhost')=>'black-dark',
			   esc_html__('White', 'maxhost')=>'white',
            ),
		),
   )
)
);

/********
Heading-5
********/
vc_map( array(
      "name" => esc_html__("FT- Heading-5", 'maxhost'),
      "base" => "maxhost_shortcodes_title_five",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Custom Heading of Maxhost -Style 5', 'maxhost'),
      "params" => array(         
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line 1", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line 2", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Black or White?", 'maxhost'),
			"param_name" => "font_color",
            "value" => array(
			   esc_html__('Choose Color', 'maxhost')=>'',
               esc_html__('Black', 'maxhost')=>'black',
			   esc_html__('White', 'maxhost')=>'white',
            ),
		),
   )
)
);

/********
Heading-6
********/
vc_map( array(
      "name" => esc_html__("FT- Heading-6", 'maxhost'),
      "base" => "maxhost_shortcodes_title_six",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Custom Heading of Maxhost -Style 6', 'maxhost'),
      "params" => array(         
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line 1", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line 2", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Black or White?", 'maxhost'),
			"param_name" => "font_color",
            "value" => array(
			   esc_html__('Choose Color', 'maxhost')=>'',
               esc_html__('Black', 'maxhost')=>'black',
			   esc_html__('White', 'maxhost')=>'white',
            ),
		),
   )
)
);

/********
Heading-7
********/
vc_map( array(
      "name" => esc_html__("FT- Heading-7", 'maxhost'),
      "base" => "maxhost_shortcodes_title_seven",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Custom Heading of Maxhost -Style 7', 'maxhost'),
      "params" => array(         
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => ''
         ),
   )
)
);

/********
Heading-8
********/
vc_map( array(
      "name" => esc_html__("FT- Heading-8", 'maxhost'),
      "base" => "maxhost_shortcodes_title_eight",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Custom Heading of Maxhost -Style 8', 'maxhost'),
      "params" => array(         
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading (Bold Part)", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading (Thin Part)", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Font Color of Thin Part", 'maxhost'),
			"param_name" => "font_color",
            "value" => array(
			   esc_html__('Choose Color', 'maxhost')=>'',
               esc_html__('Black', 'maxhost')=>'black',
			   esc_html__('White', 'maxhost')=>'white',
			   esc_html__('Grey', 'maxhost')=>'grey',
            ),
		),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Heading (Bottom Paragraph Part)", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => ''
         ),
   )
)
);

/********
Heading-9
********/
vc_map( array(
      "name" => esc_html__("FT- Heading-9", 'maxhost'),
      "base" => "maxhost_shortcodes_title_nine",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Custom Heading of Maxhost -Style 9', 'maxhost'),
      "params" => array(         
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading (Bold Part)", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading (Thin Part)", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Font Color of Thin Part", 'maxhost'),
			"param_name" => "font_color",
            "value" => array(
			   esc_html__('Choose Color', 'maxhost')=>'',
               esc_html__('Black', 'maxhost')=>'black',
			   esc_html__('White', 'maxhost')=>'white',
			   esc_html__('Grey', 'maxhost')=>'grey',
            ),
		),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Heading (Bottom Paragraph Part)", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => ''
         ),
   )
)
);

/**********
Heading Top
**********/
vc_map( array(
      "name" => esc_html__("FT- Heading Top", 'maxhost'),
      "base" => "maxhost_shortcodes_heading_top",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Top Heading - Suited at the Top of the Page', 'maxhost'),
      "params" => array(         
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line - 1", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Heading Line - 2", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => ''
         ),
   )
)
);

/****************
Horizontal Tabs-1
****************/
vc_map( array(
      "name" => esc_html__("FT- Horizontal Tabs-1", 'maxhost'),
      "base" => "maxhost_shortcodes_htab",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Horizontal Tabs -Style 1', 'maxhost'),
      "params" => array(
          array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Number of Tabs", 'maxhost'),
            "param_name" => "number_of_tabs",
            'admin_label' => true,
            "value" => array(
               esc_html__('One', 'maxhost')=>'1',
			   esc_html__('Two', 'maxhost')=>'2', 
			   esc_html__('Three', 'maxhost')=>'3',
			   esc_html__('Four', 'maxhost')=>'4',
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-1 Heading", 'maxhost'),
            "param_name" => "title1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-1 Icon", 'maxhost'),
            "param_name" => "icon1",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Tab-1 Image", 'maxhost'),
            "param_name" => "image1",
            "value" => '',
            "description" => esc_html__('Attach Tab 1 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-1 Title (Colored)", 'maxhost'),
            "param_name" => "title_one1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-1 Title (White)", 'maxhost'),
            "param_name" => "title_two1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-1 Text", 'maxhost'),
            "param_name" => "text1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-1 Bullet Points", 'maxhost'),
            "param_name" => "bullets1",
            "description" => esc_html__('Start each bullet point on new line','maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-1 Bottom Note", 'maxhost'),
            "param_name" => "bottom_note1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-2 Heading", 'maxhost'),
            "param_name" => "title2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-2 Icon", 'maxhost'),
            "param_name" => "icon2",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
						)
            )
         ),		 
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Tab-2 Image", 'maxhost'),
            "param_name" => "image2",
            "value" => '',
            "description" => esc_html__('Attach Tab 2 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-2 Title (Colored)", 'maxhost'),
            "param_name" => "title_one2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-2 Title (White)", 'maxhost'),
            "param_name" => "title_two2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-2 Text", 'maxhost'),
            "param_name" => "text2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-2 Bullet Points", 'maxhost'),
            "param_name" => "bullets2",
            "description" => esc_html__('Start each bullet point on new line','maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-2 Bottom Note", 'maxhost'),
            "param_name" => "bottom_note2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-3 Heading", 'maxhost'),
            "param_name" => "title3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-3 Icon", 'maxhost'),
            "param_name" => "icon3",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Tab-3 Image", 'maxhost'),
            "param_name" => "image3",
            "value" => '',
            "description" => esc_html__('Attach Tab 3 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-3 Title (Colored)", 'maxhost'),
            "param_name" => "title_one3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-3 Title (White)", 'maxhost'),
            "param_name" => "title_two3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-3 Text", 'maxhost'),
            "param_name" => "text3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-3 Bullet Points", 'maxhost'),
            "param_name" => "bullets3",
            "description" => esc_html__('Start each bullet point on new line','maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-3 Bottom Note", 'maxhost'),
            "param_name" => "bottom_note3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-4 Heading", 'maxhost'),
            "param_name" => "title4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '4'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-4 Icon", 'maxhost'),
            "param_name" => "icon4",
            "value" => '',
            "description" => esc_html__('Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '4'
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Tab-4 Image", 'maxhost'),
            "param_name" => "image4",
            "value" => '',
            "description" => esc_html__('Attach Tab 4 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '4'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-4 Title (Colored)", 'maxhost'),
            "param_name" => "title_one4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '4'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-4 Title (White)", 'maxhost'),
            "param_name" => "title_two4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '4'
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-4 Text", 'maxhost'),
            "param_name" => "text4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '4'
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-4 Bullet Points", 'maxhost'),
            "param_name" => "bullets4",
            "description" => esc_html__('Start each bullet point on new line','maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '4'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-4 Bottom Note", 'maxhost'),
            "param_name" => "bottom_note4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '4'
            )
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Curved Shaped Section Top", 'maxhost'),
            "param_name" => "shape_top",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
      )
   )
);

/****************
Horizontal Tabs-2
****************/
vc_map( array(
      "name" => esc_html__("FT- Horizontal Tabs-2", 'maxhost'),
      "base" => "maxhost_shortcodes_htab_two",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Horizontal Tabs -Style 2', 'maxhost'),
      "params" => array(
          array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Number of Tabs", 'maxhost'),
            "param_name" => "number_of_tabs",
            'admin_label' => true,
            "value" => array(
               esc_html__('One', 'maxhost')=>'1',
			   esc_html__('Two', 'maxhost')=>'2', 
			   esc_html__('Three', 'maxhost')=>'3',
			   esc_html__('Four', 'maxhost')=>'4',
			   esc_html__('Five', 'maxhost')=>'5', 
			   esc_html__('Six', 'maxhost')=>'6',
			   esc_html__('Seven', 'maxhost')=>'7',
			   esc_html__('Eight', 'maxhost')=>'8', 
			   esc_html__('Nine', 'maxhost')=>'9',
			   esc_html__('Ten', 'maxhost')=>'10',
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-1 Title", 'maxhost'),
            "param_name" => "title1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-1 Text", 'maxhost'),
            "param_name" => "text1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Tab-1 Image", 'maxhost'),
            "param_name" => "image1",
            "value" => '',
            "description" => esc_html__('Attach Tab 1 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-2 Title", 'maxhost'),
            "param_name" => "title2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-2 Text", 'maxhost'),
            "param_name" => "text2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Tab-2 Image", 'maxhost'),
            "param_name" => "image2",
            "value" => '',
            "description" => esc_html__('Attach Tab 2 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-3 Title", 'maxhost'),
            "param_name" => "title3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-3 Text", 'maxhost'),
            "param_name" => "text3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Tab-3 Image", 'maxhost'),
            "param_name" => "image3",
            "value" => '',
            "description" => esc_html__('Attach Tab 3 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-4 Title", 'maxhost'),
            "param_name" => "title4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-4 Text", 'maxhost'),
            "param_name" => "text4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Tab-4 Image", 'maxhost'),
            "param_name" => "image4",
            "value" => '',
            "description" => esc_html__('Attach Tab 4 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-5 Title", 'maxhost'),
            "param_name" => "title5",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-5 Text", 'maxhost'),
            "param_name" => "text5",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Tab-5 Image", 'maxhost'),
            "param_name" => "image5",
            "value" => '',
            "description" => esc_html__('Attach Tab 5 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-6 Title", 'maxhost'),
            "param_name" => "title6",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-6 Text", 'maxhost'),
            "param_name" => "text6",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Tab-6 Image", 'maxhost'),
            "param_name" => "image6",
            "value" => '',
            "description" => esc_html__('Attach Tab 6 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-7 Title", 'maxhost'),
            "param_name" => "title7",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-7 Text", 'maxhost'),
            "param_name" => "text7",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Tab-7 Image", 'maxhost'),
            "param_name" => "image7",
            "value" => '',
            "description" => esc_html__('Attach Tab 7 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-8 Title", 'maxhost'),
            "param_name" => "title8",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-8 Text", 'maxhost'),
            "param_name" => "text8",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Tab-8 Image", 'maxhost'),
            "param_name" => "image8",
            "value" => '',
            "description" => esc_html__('Attach Tab 8 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-9 Title", 'maxhost'),
            "param_name" => "title9",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-9 Text", 'maxhost'),
            "param_name" => "text9",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9',
								'10',
						)
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Tab-9 Image", 'maxhost'),
            "param_name" => "image9",
            "value" => '',
            "description" => esc_html__('Attach Tab 9 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Tab-10 Title", 'maxhost'),
            "param_name" => "title10",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '10'
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Tab-10 Text", 'maxhost'),
            "param_name" => "text10",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '10'
            )
         ),
		  array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Tab-10 Image", 'maxhost'),
            "param_name" => "image10",
            "value" => '',
            "description" => esc_html__('Attach Tab 10 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '10'
            )
         ),
      )
   )
);

/*************
Image Carousel
*************/
vc_map( array(
      "name" => esc_html__("FT- Image Carousel", 'maxhost'),
      "base" => "maxhost_shortcodes_image_carousel",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays a Carousel with Image', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Carousel Heading", 'maxhost'),
            "param_name" => "section_heading",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Number of Slides", 'maxhost'),
            "param_name" => "number_of_tabs",
            'admin_label' => true,
            "value" => array(
               esc_html__('One', 'maxhost')=>'1',
			   esc_html__('Two', 'maxhost')=>'2', 
			   esc_html__('Three', 'maxhost')=>'3',
			   esc_html__('Four', 'maxhost')=>'4',
			   esc_html__('Five', 'maxhost')=>'5',
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Image URL of Slide - 1", 'maxhost'),
            "param_name" => "image0",
            "value" => '',
            "description" => esc_html__('Input image url of your slide. Image Size should be same for all slides.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Image URL of Slide - 2", 'maxhost'),
            "param_name" => "image1",
            "value" => '',
            "description" => esc_html__('Input image url of your slide. Image Size should be same for all slides.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Image URL of Slide - 3", 'maxhost'),
            "param_name" => "image2",
            "value" => '',
            "description" => esc_html__('Input image url of your slide. Image Size should be same for all slides.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Image URL of Slide - 4", 'maxhost'),
            "param_name" => "image3",
            "value" => '',
            "description" => esc_html__('Input image url of your slide. Image Size should be same for all slides.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Image URL of Slide - 5", 'maxhost'),
            "param_name" => "image4",
            "value" => '',
            "description" => esc_html__('Input image url of your slide. Image Size should be same for all slides.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),       
      )
   )
);

/************
Mega Menu - 1
************/
   vc_map( array(
      "name" => esc_html__("FT- Mega Menu - List Items", 'maxhost'),
      "base" => "maxhost_shortcodes_megamenu_one",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('List items for Mega Menu', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu Title", 'maxhost'),
            "param_name" => "menu_title",
            "value" => '',
            "description" => esc_html__('Menu Title', 'maxhost')
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Menu Title Color", 'maxhost'),
			"param_name" => "font_color",
            "value" => array(
			   esc_html__('Choose Menu Title Color', 'maxhost')=>'',
               esc_html__('Black', 'maxhost')=>'font-black',
			   esc_html__('White', 'maxhost')=>'font-white',
            ),
		),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Column Width", 'maxhost'),
			"param_name" => "col_width",
            "value" => array(
               esc_html__('Full Width', 'maxhost')=>'col-sm-12',
			   esc_html__('One Half', 'maxhost')=>'col-sm-6', 
			   esc_html__('One Third', 'maxhost')=>'col-sm-4',
			   esc_html__('One Fourth', 'maxhost')=>'col-sm-3',
            ),
		),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Number of Menus", 'maxhost'),
            "param_name" => "number_of_menus",
            'admin_label' => true,
            "value" => array(
               esc_html__('One', 'maxhost')=>'1',
			   esc_html__('Two', 'maxhost')=>'2', 
			   esc_html__('Three', 'maxhost')=>'3',
			   esc_html__('Four', 'maxhost')=>'4',
			   esc_html__('Five', 'maxhost')=>'5', 
			   esc_html__('Six', 'maxhost')=>'6',
			   esc_html__('Seven', 'maxhost')=>'7',
			   esc_html__('Eight', 'maxhost')=>'8', 
			   esc_html__('Nine', 'maxhost')=>'9',
			   esc_html__('Ten', 'maxhost')=>'10',
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 1", 'maxhost'),
            "param_name" => "menu1",
            "value" => '',
            "description" => esc_html__("Input Menu 1", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 1 URL", 'maxhost'),
            "param_name" => "menu1_url",
            "value" => '',
            "description" => esc_html__("Input Menu 1 URL", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 1 Icon", 'maxhost'),
            "param_name" => "icon1",
            "value" => '',
            "description" => esc_html__('Leave it blank if you do not want icon for menus. Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 2", 'maxhost'),
            "param_name" => "menu2",
            "value" => '',
            "description" => esc_html__("Input Menu 2", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 2 URL", 'maxhost'),
            "param_name" => "menu2_url",
            "value" => '',
            "description" => esc_html__("Input Menu 2 URL", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 2 Icon", 'maxhost'),
            "param_name" => "icon2",
            "value" => '',
            "description" => esc_html__('Leave it blank if you do not want icon for menus. Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 3", 'maxhost'),
            "param_name" => "menu3",
            "value" => '',
            "description" => esc_html__("Input Menu 3", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 3 URL", 'maxhost'),
            "param_name" => "menu3_url",
            "value" => '',
            "description" => esc_html__("Input Menu 3 URL", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 3 Icon", 'maxhost'),
            "param_name" => "icon3",
            "value" => '',
            "description" => esc_html__('Leave it blank if you do not want icon for menus. Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 4", 'maxhost'),
            "param_name" => "menu4",
            "value" => '',
            "description" => esc_html__("Input Menu 4", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 4 URL", 'maxhost'),
            "param_name" => "menu4_url",
            "value" => '',
            "description" => esc_html__("Input Menu 4 URL", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 4 Icon", 'maxhost'),
            "param_name" => "icon4",
            "value" => '',
            "description" => esc_html__('Leave it blank if you do not want icon for menus. Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 5", 'maxhost'),
            "param_name" => "menu5",
            "value" => '',
            "description" => esc_html__("Input Menu 5", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 5 URL", 'maxhost'),
            "param_name" => "menu5_url",
            "value" => '',
            "description" => esc_html__("Input Menu 5 URL", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 5 Icon", 'maxhost'),
            "param_name" => "icon5",
            "value" => '',
            "description" => esc_html__('Leave it blank if you do not want icon for menus. Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 6", 'maxhost'),
            "param_name" => "menu6",
            "value" => '',
            "description" => esc_html__("Input Menu 6", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 6 URL", 'maxhost'),
            "param_name" => "menu6_url",
            "value" => '',
            "description" => esc_html__("Input Menu 6 URL", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 6 Icon", 'maxhost'),
            "param_name" => "icon6",
            "value" => '',
            "description" => esc_html__('Leave it blank if you do not want icon for menus. Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 7", 'maxhost'),
            "param_name" => "menu7",
            "value" => '',
            "description" => esc_html__("Input Menu 7", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('7',
								'8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 7 URL", 'maxhost'),
            "param_name" => "menu7_url",
            "value" => '',
            "description" => esc_html__("Input Menu 7 URL", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 7 Icon", 'maxhost'),
            "param_name" => "icon7",
            "value" => '',
            "description" => esc_html__('Leave it blank if you do not want icon for menus. Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('7',
								'8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 8", 'maxhost'),
            "param_name" => "menu8",
            "value" => '',
            "description" => esc_html__("Input Menu 8", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('8',
								'9',
								'10',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 8 URL", 'maxhost'),
            "param_name" => "menu8_url",
            "value" => '',
            "description" => esc_html__("Input Menu 8 URL", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 8 Icon", 'maxhost'),
            "param_name" => "icon8",
            "value" => '',
            "description" => esc_html__('Leave it blank if you do not want icon for menus. Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('8',
								'9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 9", 'maxhost'),
            "param_name" => "menu9",
            "value" => '',
            "description" => esc_html__("Input Menu 9", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('9',
								'10',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 9 URL", 'maxhost'),
            "param_name" => "menu9_url",
            "value" => '',
            "description" => esc_html__("Input Menu 9 URL", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 9 Icon", 'maxhost'),
            "param_name" => "icon9",
            "value" => '',
            "description" => esc_html__('Leave it blank if you do not want icon for menus. Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => array('9',
								'10',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 10", 'maxhost'),
            "param_name" => "menu10",
            "value" => '',
            "description" => esc_html__("Input Menu 10", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => '10'
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 10 URL", 'maxhost'),
            "param_name" => "menu10_url",
            "value" => '',
            "description" => esc_html__("Input Menu 10 URL", 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => '10'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu 10 Icon", 'maxhost'),
            "param_name" => "icon10",
            "value" => '',
            "description" => esc_html__('Leave it blank if you do not want icon for menus. Icon list - ', 'maxhost').'<a href="http://fortawesome.github.io/Font-Awesome/icons/" target="_blank">'.esc_html__('refer here', 'maxhost').'</a>',
			'dependency' => array(
               'element'=>'number_of_menus',
               'value' => '10'
            )
         ),
      )
   )
);

/************
Mega Menu - 2
************/
   vc_map( array(
      "name" => esc_html__("FT- Mega Menu - Image", 'maxhost'),
      "base" => "maxhost_shortcodes_megamenu_two",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Image for Mega Menu', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu Title", 'maxhost'),
            "param_name" => "menu_title",
            "value" => '',
            "description" => esc_html__('Menu Title', 'maxhost')
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Menu Title Color", 'maxhost'),
			"param_name" => "font_color",
            "value" => array(
			   esc_html__('Choose Menu Title Color', 'maxhost')=>'',
               esc_html__('Black', 'maxhost')=>'font-black',
			   esc_html__('White', 'maxhost')=>'font-white',
            ),
		),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Column Width", 'maxhost'),
			"param_name" => "col_width",
            "value" => array(
               esc_html__('Full Width', 'maxhost')=>'col-sm-12',
			   esc_html__('One Half', 'maxhost')=>'col-sm-6', 
			   esc_html__('One Third', 'maxhost')=>'col-sm-4',
			   esc_html__('One Fourth', 'maxhost')=>'col-sm-3',
            ),
		),
		array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Image", 'maxhost'),
            "param_name" => "image_one",
            "value" => '',
            "description" => esc_html__('Upload main image. 280x185 sized image would be best fit for One Fourth column.', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Image Hyperlink", 'maxhost'),
            "param_name" => "image_one_hp",
            "value" => '',
            "description" => ''
         ),
	   )
   )
);

/************
Mega Menu - 3
************/
   vc_map( array(
      "name" => esc_html__("FT- Mega Menu - Paragraph", 'maxhost'),
      "base" => "maxhost_shortcodes_megamenu_three",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Paragraph for Mega Menu', 'maxhost'),
      "params" => array(
         array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Column Width", 'maxhost'),
			"param_name" => "col_width",
            "value" => array(
               esc_html__('Full Width', 'maxhost')=>'col-sm-12',
			   esc_html__('One Half', 'maxhost')=>'col-sm-6', 
			   esc_html__('One Third', 'maxhost')=>'col-sm-4',
			   esc_html__('One Fourth', 'maxhost')=>'col-sm-3',
            ),
		),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Menu Title", 'maxhost'),
            "param_name" => "menu_title",
            "value" => '',
            "description" => esc_html__('Menu Title', 'maxhost')
         ),
		array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => '',
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Font Color", 'maxhost'),
			"param_name" => "font_color",
            "value" => array(
			   esc_html__('Choose Font Color', 'maxhost')=>'',
               esc_html__('Black', 'maxhost')=>'font-black',
			   esc_html__('White', 'maxhost')=>'font-white',
            ),
		),
	   )
   )
);

/********************
Offers Carousel Block
********************/
vc_map( array(
      "name" => esc_html__("FT- Offers Carousel Block", 'maxhost'),
      "base" => "maxhost_offers_carousel",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays a Carousel with Features/Offers', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Change Parallax Background Image", 'maxhost'),
            "param_name" => "maxhost_shortcodes_parallax_bg",
            "value" => '',
            "description" => esc_html__('Put the url of the image to Change parallax background image.', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Section Heading Line-1", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => esc_html__('Heading Line-1', 'maxhost')
         ),
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Section Heading Line-2", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => esc_html__('Heading Line-2', 'maxhost')
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Number of Slides", 'maxhost'),
            "param_name" => "number_of_tabs",
            'admin_label' => true,
            "value" => array(
               esc_html__('One', 'maxhost')=>'1',
			   esc_html__('Two', 'maxhost')=>'2', 
			   esc_html__('Three', 'maxhost')=>'3',
			   esc_html__('Four', 'maxhost')=>'4',
			   esc_html__('Five', 'maxhost')=>'5',
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Title (Bold Part) of Slide - 1", 'maxhost'),
            "param_name" => "text_heading_bold0",
            "value" => '',
            "description" => '',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Title (Thin Part) of Slide - 1", 'maxhost'),
            "param_name" => "text_heading_thin0",
            "value" => '',
            "description" => '',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text of Slide - 1", 'maxhost'),
            "param_name" => "text0",
            "value" => '',
            "description" => '',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Bullet Points of Slide - 1", 'maxhost'),
            "param_name" => "features_one0",
            "description" => esc_html__('Start each point on new line','maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Image URL of Slide - 1", 'maxhost'),
            "param_name" => "image0",
            "value" => '',
            "description" => esc_html__('Input image url of your product.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Price Title of Slide - 1", 'maxhost'),
            "param_name" => "price_title0",
            "value" => '',
            "description" => esc_html__('Price Title (e.g. Starts at)', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Price of Slide - 1", 'maxhost'),
            "param_name" => "price0",
            "value" => '',
            "description" => esc_html__('Price with Currency (e.g. $99)', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Price Duration of Slide - 1", 'maxhost'),
            "param_name" => "price_duration0",
            "value" => '',
            "description" => esc_html__('Price Duration (e.g. /mo)', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1', '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Title (Bold Part) of Slide - 2", 'maxhost'),
            "param_name" => "text_heading_bold1",
            "value" => '',
            "description" => '',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Title (Thin Part) of Slide - 2", 'maxhost'),
            "param_name" => "text_heading_thin1",
            "value" => '',
            "description" => '',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text of Slide - 2", 'maxhost'),
            "param_name" => "text1",
            "value" => '',
            "description" => '',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Bullet Points of Slide - 2", 'maxhost'),
            "param_name" => "features_one1",
            "description" => esc_html__('Start each point on new line','maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Image URL of Slide - 2", 'maxhost'),
            "param_name" => "image1",
            "value" => '',
            "description" => esc_html__('Input image url of your product.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Price Title of Slide - 2", 'maxhost'),
            "param_name" => "price_title1",
            "value" => '',
            "description" => esc_html__('Price Title (e.g. Starts at)', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Price of Slide - 2", 'maxhost'),
            "param_name" => "price1",
            "value" => '',
            "description" => esc_html__('Price with Currency (e.g. $99)', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Price Duration of Slide - 2", 'maxhost'),
            "param_name" => "price_duration1",
            "value" => '',
            "description" => esc_html__('Price Duration (e.g. /mo)', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '2', '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Title (Bold Part) of Slide - 3", 'maxhost'),
            "param_name" => "text_heading_bold2",
            "value" => '',
            "description" => '',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Title (Thin Part) of Slide - 3", 'maxhost'),
            "param_name" => "text_heading_thin2",
            "value" => '',
            "description" => '',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text of Slide - 3", 'maxhost'),
            "param_name" => "text2",
            "value" => '',
            "description" => '',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Bullet Points of Slide - 3", 'maxhost'),
            "param_name" => "features_one2",
            "description" => esc_html__('Start each point on new line','maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Image URL of Slide - 3", 'maxhost'),
            "param_name" => "image2",
            "value" => '',
            "description" => esc_html__('Input image url of your product.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Price Title of Slide - 3", 'maxhost'),
            "param_name" => "price_title2",
            "value" => '',
            "description" => esc_html__('Price Title (e.g. Starts at)', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Price of Slide - 3", 'maxhost'),
            "param_name" => "price2",
            "value" => '',
            "description" => esc_html__('Price with Currency (e.g. $99)', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Price Duration of Slide - 3", 'maxhost'),
            "param_name" => "price_duration2",
            "value" => '',
            "description" => esc_html__('Price Duration (e.g. /mo)', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '3', '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Title (Bold Part) of Slide - 4", 'maxhost'),
            "param_name" => "text_heading_bold3",
            "value" => '',
            "description" => '',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Title (Thin Part) of Slide - 4", 'maxhost'),
            "param_name" => "text_heading_thin3",
            "value" => '',
            "description" => '',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '4', '5',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text of Slide - 4", 'maxhost'),
            "param_name" => "text3",
            "value" => '',
            "description" => '',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '4', '5',)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Bullet Points of Slide - 4", 'maxhost'),
            "param_name" => "features_one3",
            "description" => esc_html__('Start each point on new line','maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Image URL of Slide - 4", 'maxhost'),
            "param_name" => "image3",
            "value" => '',
            "description" => esc_html__('Input image url of your product.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Price Title of Slide - 4", 'maxhost'),
            "param_name" => "price_title3",
            "value" => '',
            "description" => esc_html__('Price Title (e.g. Starts at)', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Price of Slide - 4", 'maxhost'),
            "param_name" => "price3",
            "value" => '',
            "description" => esc_html__('Price with Currency (e.g. $99)', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Price Duration of Slide - 4", 'maxhost'),
            "param_name" => "price_duration3",
            "value" => '',
            "description" => esc_html__('Price Duration (e.g. /mo)', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array( '4', '5',)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Title (Bold Part) of Slide - 5", 'maxhost'),
            "param_name" => "text_heading_bold4",
            "value" => '',
            "description" => '',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Title (Thin Part) of Slide - 5", 'maxhost'),
            "param_name" => "text_heading_thin4",
            "value" => '',
            "description" => '',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Text of Slide - 5", 'maxhost'),
            "param_name" => "text4",
            "value" => '',
            "description" => '',
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Bullet Points of Slide - 5", 'maxhost'),
            "param_name" => "features_one4",
            "description" => esc_html__('Start each point on new line','maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Image URL of Slide - 5", 'maxhost'),
            "param_name" => "image4",
            "value" => '',
            "description" => esc_html__('Input image url of your product.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Price Title of Slide - 5", 'maxhost'),
            "param_name" => "price_title4",
            "value" => '',
            "description" => esc_html__('Price Title (e.g. Starts at)', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Price of Slide - 5", 'maxhost'),
            "param_name" => "price4",
            "value" => '',
            "description" => esc_html__('Price with Currency (e.g. $99)', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Product Price Duration of Slide - 5", 'maxhost'),
            "param_name" => "price_duration4",
            "value" => '',
            "description" => esc_html__('Price Duration (e.g. /mo)', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Change White Font", 'maxhost'),
            "param_name" => "no_white_font",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Crossed Shaped Section Top", 'maxhost'),
            "param_name" => "crossed_top",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Crossed Shaped Section Bottom", 'maxhost'),
            "param_name" => "crossed_bottom",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),        
      )
   )
);

/**********
Page Header
**********/
vc_map( array(
      "name" => esc_html__("FT- Page Header", 'maxhost'),
      "base" => "maxhost_shortcode_page_header",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Page Header', 'maxhost'),
      "params" => array(
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Change Parallax Background Image", 'maxhost'),
            "param_name" => "maxhost_shortcodes_parallax_bg",
            "value" => '',
            "description" => esc_html__('Put the url of the image to Change parallax background image.', 'maxhost')
         ),
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line - 1", 'maxhost'),
            "param_name" => "heading1",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Heading Line - 2", 'maxhost'),
            "param_name" => "heading2",
            "description" => ''
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Show Breadcrumb?", 'maxhost'),
            "param_name" => "breadcrumb",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
      )
   )
);

/*****************
Portfolio Standard
*****************/
vc_map( array(
      "name" => esc_html__("FT- Portfolio Items", 'maxhost'),
      "base" => "maxhost_shortcodes_portfolio_one",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Add Portfolio Items', 'maxhost'),
      "params" => array(
         array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Portfolio Columns", 'maxhost'),
			"param_name" => "section_style",
            "value" => array(
			   esc_html__('Choose Number of Columns', 'maxhost')=>'',
               esc_html__('4 Columns', 'maxhost')=>4,
			   esc_html__('3 Columns', 'maxhost')=>3,
			   esc_html__('2 Columns', 'maxhost')=>2, 
            ),
			"description" => esc_html__('IMPORTANT: If you choose 2 columns or 3 columns, please make sure you have also chosen same columns (2 or 3) in the Appearance -> Theme-Options -> Other Settings -> Portfolio Columns. Otherwise 2 columns or 3 columns will not work.','maxhost')
		),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Item Filter Categories", 'maxhost'),
            "param_name" => "features",
            "description" => esc_html__('Input each Category on New Line. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design.','maxhost')
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Number of Items", 'maxhost'),
            "param_name" => "number_of_items",
            'admin_label' => true,
            "value" => array(
               esc_html__('One', 'maxhost')=>'1',
			   esc_html__('Two', 'maxhost')=>'2', 
			   esc_html__('Three', 'maxhost')=>'3',
			   esc_html__('Four', 'maxhost')=>'4',
			   esc_html__('Five', 'maxhost')=>'5', 
			   esc_html__('Six', 'maxhost')=>'6',
			   esc_html__('Seven', 'maxhost')=>'7',
			   esc_html__('Eight', 'maxhost')=>'8', 
			   esc_html__('Nine', 'maxhost')=>'9',
			   esc_html__('Ten', 'maxhost')=>'10',
			   esc_html__('Eleven', 'maxhost')=>'11',
			   esc_html__('Twelve', 'maxhost')=>'12', 
			   esc_html__('Thirteen', 'maxhost')=>'13',
			   esc_html__('Fourteen', 'maxhost')=>'14',
			   esc_html__('Fifteen', 'maxhost')=>'15', 
			   esc_html__('Sixteen', 'maxhost')=>'16',
			   esc_html__('Seventeen', 'maxhost')=>'17',
			   esc_html__('Eighteen', 'maxhost')=>'18', 
			   esc_html__('Nineteen', 'maxhost')=>'19',
			   esc_html__('Twenty', 'maxhost')=>'20',
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-1 Title", 'maxhost'),
            "param_name" => "item_title1",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-1 Category", 'maxhost'),
            "param_name" => "item_cat1",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-1 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features1",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-1 Image URL", 'maxhost'),
            "param_name" => "item_img1",
            "value" => '',
            "description" => esc_html__('Input Item 1 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-1 More Info URL", 'maxhost'),
            "param_name" => "more_url1",
            "value" => '',
            "description" => esc_html__('Input Item 1 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-2 Title", 'maxhost'),
            "param_name" => "item_title2",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-2 Category", 'maxhost'),
            "param_name" => "item_cat2",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-2 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features2",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-2 Image URL", 'maxhost'),
            "param_name" => "item_img2",
            "value" => '',
            "description" => esc_html__('Input Item 2 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-2 More Info URL", 'maxhost'),
            "param_name" => "more_url2",
            "value" => '',
            "description" => esc_html__('Input Item 2 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('2',
								'3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-3 Title", 'maxhost'),
            "param_name" => "item_title3",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-3 Category", 'maxhost'),
            "param_name" => "item_cat3",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-3 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features3",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-3 Image URL", 'maxhost'),
            "param_name" => "item_img3",
            "value" => '',
            "description" => esc_html__('Input Item 3 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-3 More Info URL", 'maxhost'),
            "param_name" => "more_url3",
            "value" => '',
            "description" => esc_html__('Input Item 3 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('3',
								'4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-4 Title", 'maxhost'),
            "param_name" => "item_title4",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-4 Category", 'maxhost'),
            "param_name" => "item_cat4",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-4 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features4",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-4 Image URL", 'maxhost'),
            "param_name" => "item_img4",
            "value" => '',
            "description" => esc_html__('Input Item 4 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-4 More Info URL", 'maxhost'),
            "param_name" => "more_url4",
            "value" => '',
            "description" => esc_html__('Input Item 4 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('4',
								'5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-5 Title", 'maxhost'),
            "param_name" => "item_title5",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-5 Category", 'maxhost'),
            "param_name" => "item_cat5",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-5 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features5",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-5 Image URL", 'maxhost'),
            "param_name" => "item_img5",
            "value" => '',
            "description" => esc_html__('Input Item 5 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-5 More Info URL", 'maxhost'),
            "param_name" => "more_url5",
            "value" => '',
            "description" => esc_html__('Input Item 5 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('5',
								'6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-6 Title", 'maxhost'),
            "param_name" => "item_title6",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-6 Category", 'maxhost'),
            "param_name" => "item_cat6",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-6 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features6",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-6 Image URL", 'maxhost'),
            "param_name" => "item_img6",
            "value" => '',
            "description" => esc_html__('Input Item 6 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-6 More Info URL", 'maxhost'),
            "param_name" => "more_url6",
            "value" => '',
            "description" => esc_html__('Input Item 6 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('6',
								'7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-7 Title", 'maxhost'),
            "param_name" => "item_title7",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-7 Category", 'maxhost'),
            "param_name" => "item_cat7",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-7 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features7",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-7 Image URL", 'maxhost'),
            "param_name" => "item_img7",
            "value" => '',
            "description" => esc_html__('Input Item 7 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-7 More Info URL", 'maxhost'),
            "param_name" => "more_url7",
            "value" => '',
            "description" => esc_html__('Input Item 7 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('7',
								'8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-8 Title", 'maxhost'),
            "param_name" => "item_title8",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-8 Category", 'maxhost'),
            "param_name" => "item_cat8",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-8 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features8",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-8 Image URL", 'maxhost'),
            "param_name" => "item_img8",
            "value" => '',
            "description" => esc_html__('Input Item 8 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-8 More Info URL", 'maxhost'),
            "param_name" => "more_url8",
            "value" => '',
            "description" => esc_html__('Input Item 8 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('8',
								'9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-9 Title", 'maxhost'),
            "param_name" => "item_title9",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('9',
								'10','11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-9 Category", 'maxhost'),
            "param_name" => "item_cat9",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-9 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features9",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-9 Image URL", 'maxhost'),
            "param_name" => "item_img9",
            "value" => '',
            "description" => esc_html__('Input Item 9 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-9 More Info URL", 'maxhost'),
            "param_name" => "more_url9",
            "value" => '',
            "description" => esc_html__('Input Item 9 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('9',
								'10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-10 Title", 'maxhost'),
            "param_name" => "item_title10",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-10 Category", 'maxhost'),
            "param_name" => "item_cat10",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-10 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features10",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-10 Image URL", 'maxhost'),
            "param_name" => "item_img10",
            "value" => '',
            "description" => esc_html__('Input Item 10 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-10 More Info URL", 'maxhost'),
            "param_name" => "more_url10",
            "value" => '',
            "description" => esc_html__('Input Item 10 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('10',
								'11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-11 Title", 'maxhost'),
            "param_name" => "item_title11",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-11 Category", 'maxhost'),
            "param_name" => "item_cat11",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-11 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features11",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-11 Image URL", 'maxhost'),
            "param_name" => "item_img11",
            "value" => '',
            "description" => esc_html__('Input Item 11 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-11 More Info URL", 'maxhost'),
            "param_name" => "more_url11",
            "value" => '',
            "description" => esc_html__('Input Item 11 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('11',
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-12 Title", 'maxhost'),
            "param_name" => "item_title12",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-12 Category", 'maxhost'),
            "param_name" => "item_cat12",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-12 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features12",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-12 Image URL", 'maxhost'),
            "param_name" => "item_img12",
            "value" => '',
            "description" => esc_html__('Input Item 12 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-12 More Info URL", 'maxhost'),
            "param_name" => "more_url12",
            "value" => '',
            "description" => esc_html__('Input Item 12 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'12',
								'13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-13 Title", 'maxhost'),
            "param_name" => "item_title13",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-13 Category", 'maxhost'),
            "param_name" => "item_cat13",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-13 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features13",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-13 Image URL", 'maxhost'),
            "param_name" => "item_img13",
            "value" => '',
            "description" => esc_html__('Input Item 13 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-13 More Info URL", 'maxhost'),
            "param_name" => "more_url13",
            "value" => '',
            "description" => esc_html__('Input Item 13 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('13',
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-14 Title", 'maxhost'),
            "param_name" => "item_title14",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-14 Category", 'maxhost'),
            "param_name" => "item_cat14",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-14 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features14",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-14 Image URL", 'maxhost'),
            "param_name" => "item_img14",
            "value" => '',
            "description" => esc_html__('Input Item 14 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-14 More Info URL", 'maxhost'),
            "param_name" => "more_url14",
            "value" => '',
            "description" => esc_html__('Input Item 14 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'14',
								'15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-15 Title", 'maxhost'),
            "param_name" => "item_title15",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-15 Category", 'maxhost'),
            "param_name" => "item_cat15",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-15 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features15",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-15 Image URL", 'maxhost'),
            "param_name" => "item_img15",
            "value" => '',
            "description" => esc_html__('Input Item 15 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-15 More Info URL", 'maxhost'),
            "param_name" => "more_url15",
            "value" => '',
            "description" => esc_html__('Input Item 15 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('15',
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-16 Title", 'maxhost'),
            "param_name" => "item_title16",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-16 Category", 'maxhost'),
            "param_name" => "item_cat16",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-16 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features16",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-16 Image URL", 'maxhost'),
            "param_name" => "item_img16",
            "value" => '',
            "description" => esc_html__('Input Item 16 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-16 More Info URL", 'maxhost'),
            "param_name" => "more_url16",
            "value" => '',
            "description" => esc_html__('Input Item 16 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'16',
								'17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-17 Title", 'maxhost'),
            "param_name" => "item_title17",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-17 Category", 'maxhost'),
            "param_name" => "item_cat17",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-17 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features17",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('17',
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-17 Image URL", 'maxhost'),
            "param_name" => "item_img17",
            "value" => '',
            "description" => esc_html__('Input Item 17 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-17 More Info URL", 'maxhost'),
            "param_name" => "more_url17",
            "value" => '',
            "description" => esc_html__('Input Item 17 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('17',
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-18 Title", 'maxhost'),
            "param_name" => "item_title18",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-18 Category", 'maxhost'),
            "param_name" => "item_cat18",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-18 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features18",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'18',
								'19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-18 Image URL", 'maxhost'),
            "param_name" => "item_img18",
            "value" => '',
            "description" => esc_html__('Input Item 18 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-18 More Info URL", 'maxhost'),
            "param_name" => "more_url18",
            "value" => '',
            "description" => esc_html__('Input Item 18 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array(
								'18',
								'19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-19 Title", 'maxhost'),
            "param_name" => "item_title19",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-19 Category", 'maxhost'),
            "param_name" => "item_cat19",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-19 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features19",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('19',
								'20',
						)
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-19 Image URL", 'maxhost'),
            "param_name" => "item_img19",
            "value" => '',
            "description" => esc_html__('Input Item 19 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-19 More Info URL", 'maxhost'),
            "param_name" => "more_url19",
            "value" => '',
            "description" => esc_html__('Input Item 19 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => array('19',
								'20',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-20 Title", 'maxhost'),
            "param_name" => "item_title20",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => '20'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-20 Category", 'maxhost'),
            "param_name" => "item_cat20",
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => '20'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-20 Category Classes for Filter", 'maxhost'),
            "param_name" => "item_features20",
			"description" => esc_html__('Separate each Category by SPACE. IMPORTANT: To let the filter work Do Not use any space in category name. For example: Input Web-Design instead of Web Design. And the names should exactly match the categories you put in the top field "Item Filter Categories".','maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => '20'
            )
         ),
		  array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-20 Image URL", 'maxhost'),
            "param_name" => "item_img20",
            "value" => '',
            "description" => esc_html__('Input Item 20 image url', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => '20'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Item-20 More Info URL", 'maxhost'),
            "param_name" => "more_url20",
            "value" => '',
            "description" => esc_html__('Input Item 20 more info url. Make a details page of this item using "FT- Portfolio Single" element and use that page url here.', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_items',
               'value' => '20'
            )
         ),
      )
   )
);

/***************
Portfolio Single
***************/
   vc_map( array(
      "name" => esc_html__("FT- Portfolio Single", 'maxhost'),
      "base" => "maxhost_shortcodes_portfolio_single",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Portfolio Project Details Block', 'maxhost'),
      "params" => array(        
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Main Image", 'maxhost'),
            "param_name" => "image_one",
            "value" => '',
            "description" => esc_html__('Upload main image. 1170x500 sized image would be best fit.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Additional Image-1", 'maxhost'),
            "param_name" => "image_two",
            "value" => '',
            "description" => esc_html__('Upload additional image. Use same size image as Main image.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Additional Image-2", 'maxhost'),
            "param_name" => "image_three",
            "value" => '',
            "description" => esc_html__('Upload additional image. Use same size image as Main image.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Additional Image-3", 'maxhost'),
            "param_name" => "image_four",
            "value" => '',
            "description" => esc_html__('Upload additional image. Use same size image as Main image.', 'maxhost')
         ),
		 array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Additional Image-4", 'maxhost'),
            "param_name" => "image_five",
            "value" => '',
            "description" => esc_html__('Upload additional image. Use same size image as Main image.', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Project Desctiption Title", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Project Desctiption", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Project Details Title", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Project Date", 'maxhost'),
            "param_name" => "date",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Client Name", 'maxhost'),
            "param_name" => "author",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Project Categories", 'maxhost'),
            "param_name" => "features",
            "value" => '',
            "description" => esc_html__("Separate each category by comma.", 'maxhost'),
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button Label", 'maxhost'),
            "param_name" => "button_label",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button URL", 'maxhost'),
            "param_name" => "button_url",
            "value" => '',
            "description" => ''
         ),
      )
   )
);

/****************
Pricing Table - 1
****************/
vc_map( array(
      "name" => esc_html__("FT- Pricing table - 1", 'maxhost'),
      "base" => "maxhost_shortcodes_pricing_one",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays pricing Table - Style 1', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Pracing Plan name", 'maxhost'),
            "param_name" => "plane_name",
            "value" => '',
            "description" => esc_html__('Pricing Plan name', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price", 'maxhost'),
            "param_name" => "price",
			"value" => '',
            "description" => esc_html__('Price with Currency (e.g. $99)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Duration", 'maxhost'),
            "param_name" => "duration",
			"value" => '',
            "description" => esc_html__('Duration (e.g. month)', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Features", 'maxhost'),
            "param_name" => "features",
            "description" => esc_html__('Start each feature on new line','maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button Label", 'maxhost'),
            "param_name" => "button_text",
			"value" => '',
            "description" => esc_html__('Button label', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button URL", 'maxhost'),
            "param_name" => "button_url",
			"value" => '',
            "description" => esc_html__('Button url.', 'maxhost')
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Want to make this table highlighted?", 'maxhost'),
            "param_name" => "active",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
      )
   )
);

/****************
Pricing Table - 2
****************/
vc_map( array(
      "name" => esc_html__("FT- Pricing table - 2", 'maxhost'),
      "base" => "maxhost_shortcodes_pricing_two",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays pricing Table - Style 2', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Pracing Plan name", 'maxhost'),
            "param_name" => "plane_name",
            "value" => '',
            "description" => esc_html__('Pricing Plan name', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price", 'maxhost'),
            "param_name" => "price",
			"value" => '',
            "description" => esc_html__('Price with Currency (e.g. $99)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Duration", 'maxhost'),
            "param_name" => "duration",
			"value" => '',
            "description" => esc_html__('Duration (e.g. month)', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Features", 'maxhost'),
            "param_name" => "features",
            "description" => esc_html__('Start each feature on new line','maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button Label", 'maxhost'),
            "param_name" => "button_text",
			"value" => '',
            "description" => esc_html__('Button label', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button URL", 'maxhost'),
            "param_name" => "button_url",
			"value" => '',
            "description" => esc_html__('Button url.', 'maxhost')
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Want to make this table highlighted?", 'maxhost'),
            "param_name" => "active",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
      )
   )
);

/****************
Pricing Table - 3
****************/
vc_map( array(
      "name" => esc_html__("FT- Pricing table - 3", 'maxhost'),
      "base" => "maxhost_shortcodes_pricing_three",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays pricing Table - Style 3', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Pracing Plan name", 'maxhost'),
            "param_name" => "plane_name",
            "value" => '',
            "description" => esc_html__('Pricing Plan name', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price", 'maxhost'),
            "param_name" => "price",
			"value" => '',
            "description" => esc_html__('Price without Currency (e.g. 99)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Currency", 'maxhost'),
            "param_name" => "currency",
			"value" => '',
            "description" => esc_html__('Currency (e.g. $)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Duration", 'maxhost'),
            "param_name" => "duration",
			"value" => '',
            "description" => esc_html__('Duration (e.g. month)', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Features", 'maxhost'),
            "param_name" => "features",
            "description" => esc_html__('Start each feature on new line','maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button Label", 'maxhost'),
            "param_name" => "button_text",
			"value" => '',
            "description" => esc_html__('Button label', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button URL", 'maxhost'),
            "param_name" => "button_url",
			"value" => '',
            "description" => esc_html__('Button url.', 'maxhost')
         ),
      )
   )
);

/****************
Pricing Table - 4
****************/
vc_map( array(
      "name" => esc_html__("FT- Pricing table - 4", 'maxhost'),
      "base" => "maxhost_shortcodes_pricing_four",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Displays pricing Table - Style 4', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Pracing Plan name", 'maxhost'),
            "param_name" => "plane_name",
            "value" => '',
            "description" => esc_html__('Pricing Plan name', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Price", 'maxhost'),
            "param_name" => "price",
			"value" => '',
            "description" => esc_html__('Price with Currency (e.g. $99)', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Duration", 'maxhost'),
            "param_name" => "duration",
			"value" => '',
            "description" => esc_html__('Duration (e.g. month)', 'maxhost')
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Features", 'maxhost'),
            "param_name" => "features",
            "description" => esc_html__('Start each feature on new line','maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button Label", 'maxhost'),
            "param_name" => "button_text",
			"value" => '',
            "description" => esc_html__('Button label', 'maxhost')
         ),
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Button URL", 'maxhost'),
            "param_name" => "button_url",
			"value" => '',
            "description" => esc_html__('Button url.', 'maxhost')
         ),
      )
   )
);

/***********
Skills Block
***********/
vc_map( array(
      "name" => esc_html__("FT- Skills Block", 'maxhost'),
      "base" => "maxhost_shortcodes_skills",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Displays Skills in Percentage', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Section Heading", 'maxhost'),
            "param_name" => "section_heading",
            "value" => '',
            "description" => esc_html__('Example: Our Skills', 'maxhost'),
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Skill - 1", 'maxhost'),
            "param_name" => "heading1",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Percentage of the above Skill", 'maxhost'),
            "param_name" => "progress1",
            "value" => '',
            "description" => esc_html__('Put a Number between 1 to 100. Example: 99, 75 etc.', 'maxhost'),
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Skill - 2", 'maxhost'),
            "param_name" => "heading2",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Percentage of the above Skill", 'maxhost'),
            "param_name" => "progress2",
            "value" => '',
            "description" => esc_html__('Put a Number between 1 to 100. Example: 99, 75 etc.', 'maxhost'),
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Skill - 3", 'maxhost'),
            "param_name" => "heading3",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Percentage of the above Skill", 'maxhost'),
            "param_name" => "progress3",
            "value" => '',
            "description" => esc_html__('Put a Number between 1 to 100. Example: 99, 75 etc.', 'maxhost'),
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Skill - 4", 'maxhost'),
            "param_name" => "heading4",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Percentage of the above Skill", 'maxhost'),
            "param_name" => "progress4",
            "value" => '',
            "description" => esc_html__('Put a Number between 1 to 100. Example: 99, 75 etc.', 'maxhost'),
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Skill - 5", 'maxhost'),
            "param_name" => "heading5",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Percentage of the above Skill", 'maxhost'),
            "param_name" => "progress5",
            "value" => '',
            "description" => esc_html__('Put a Number between 1 to 100. Example: 99, 75 etc.', 'maxhost'),
         ),
   )
)
);

/***
Team
***/
vc_map( array(
      "name" => esc_html__("FT- Team Member", 'maxhost'),
      "base" => "maxhost_team_one",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'description' => esc_html__('Team Member Details', 'maxhost'),
      "params" => array(
		array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Member Name", 'maxhost'),
            "param_name" => "name",
            "description" => ''
         ),	
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Member Designation", 'maxhost'),
            "param_name" => "designation",
            "description" => ''
         ),	
		array(
            "type" => "attach_image",            
            "class" => "",
            "heading" => esc_html__("Upload Member Image", 'maxhost'),
            "param_name" => "image_one",
            "value" => '',
            "description" => ''
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("Desctiption", 'maxhost'),
            "param_name" => "text",
            "value" => '',
            "description" => ''
         ),		
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Facebook URL", 'maxhost'),
            "param_name" => "fb_url",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Twitter URL", 'maxhost'),
            "param_name" => "tw_url",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Google Plus URL", 'maxhost'),
            "param_name" => "gp_url",
            "description" => ''
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Linkedin URL", 'maxhost'),
            "param_name" => "ln_url",
            "description" => ''
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Make this Member Highlighted?", 'maxhost'),
            "param_name" => "active",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
		 array(
            "type" => "checkbox",            
            "class" => "",
            "heading" => esc_html__("Check this if you use 1/3 column for this member", 'maxhost'),
            "param_name" => "one_third",
			"value" => array(
				  "" => "false"
			   ),
			"description" => '',
         ),
      )
   )
);

/**************
Testimonial - 1
**************/
vc_map( array(
      "name" => esc_html__("FT- Testimonial - 1", 'maxhost'),
      "base" => "maxhost_shortcodes_testimonial_one",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Testimonial -Style 1', 'maxhost'),
      "params" => array(
          array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Change Parallax Background Image", 'maxhost'),
            "param_name" => "maxhost_shortcodes_parallax_bg",
            "value" => '',
            "description" => esc_html__('Put the url of the image to Change parallax background image.', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Section Heading Line 1", 'maxhost'),
            "param_name" => "section_heading",
            "value" => '',
            "description" => esc_html__('Heading Line 1', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Section Heading Line 2", 'maxhost'),
            "param_name" => "section_heading2",
            "value" => '',
            "description" => esc_html__('Heading Line 2', 'maxhost')
         ),
		 array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Choose Section Heading Style", 'maxhost'),
			"param_name" => "tytle_style",
            "value" => array(
			   esc_html__('Choose Style', 'maxhost')=>'',
               esc_html__('Style 1', 'maxhost')=>'',
			   esc_html__('Style 2', 'maxhost')=>'title-line-shape m-bottom3',
            ),
		),
		  array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Number of Reviews", 'maxhost'),
            "param_name" => "number_of_tabs",
            'admin_label' => true,
            "value" => array(
               esc_html__('One', 'maxhost')=>'1',
			   esc_html__('Two', 'maxhost')=>'2', 
			   esc_html__('Three', 'maxhost')=>'3',
			   esc_html__('Four', 'maxhost')=>'4',
			   esc_html__('Five', 'maxhost')=>'5',
            )
         ),
		  
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 1", 'maxhost'),
            "param_name" => "client_name0",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 1", 'maxhost'),
            "param_name" => "company_name0",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 1 Says", 'maxhost'),
            "param_name" => "text0",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 2", 'maxhost'),
            "param_name" => "client_name1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 2", 'maxhost'),
            "param_name" => "company_name1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 2 Says", 'maxhost'),
            "param_name" => "text1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 3", 'maxhost'),
            "param_name" => "client_name2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 3", 'maxhost'),
            "param_name" => "company_name2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 3 Says", 'maxhost'),
            "param_name" => "text2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 4", 'maxhost'),
            "param_name" => "client_name3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 4", 'maxhost'),
            "param_name" => "company_name3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 4 Says", 'maxhost'),
            "param_name" => "text3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 5", 'maxhost'),
            "param_name" => "client_name4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 5", 'maxhost'),
            "param_name" => "company_name4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 5 Says", 'maxhost'),
            "param_name" => "text4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
      )
   )
);

/**************
Testimonial - 2
**************/
vc_map( array(
      "name" => esc_html__("FT- Testimonial - 2", 'maxhost'),
      "base" => "maxhost_shortcodes_testimonial_two",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Testimonial -Style 2', 'maxhost'),
      "params" => array(
          array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Change Background Image", 'maxhost'),
            "param_name" => "maxhost_shortcodes_parallax_bg",
            "value" => '',
            "description" => esc_html__('Put the url of the image to Change background image.', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Section Heading Line - 1", 'maxhost'),
            "param_name" => "section_heading",
            "value" => '',
            "description" => esc_html__('Heading line 1', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Section Heading Line - 2", 'maxhost'),
            "param_name" => "section_heading2",
            "value" => '',
            "description" => esc_html__('Heading line 2', 'maxhost')
         ),
		  array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Number of Reviews", 'maxhost'),
            "param_name" => "number_of_tabs",
            'admin_label' => true,
            "value" => array(
               esc_html__('One', 'maxhost')=>'1',
			   esc_html__('Two', 'maxhost')=>'2', 
			   esc_html__('Three', 'maxhost')=>'3',
			   esc_html__('Four', 'maxhost')=>'4',
			   esc_html__('Five', 'maxhost')=>'5',
            )
         ),
		  
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 1", 'maxhost'),
            "param_name" => "client_name0",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 1", 'maxhost'),
            "param_name" => "company_name0",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 1 Says", 'maxhost'),
            "param_name" => "text0",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 2", 'maxhost'),
            "param_name" => "client_name1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 2", 'maxhost'),
            "param_name" => "company_name1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 2 Says", 'maxhost'),
            "param_name" => "text1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 3", 'maxhost'),
            "param_name" => "client_name2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 3", 'maxhost'),
            "param_name" => "company_name2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 3 Says", 'maxhost'),
            "param_name" => "text2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 4", 'maxhost'),
            "param_name" => "client_name3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 4", 'maxhost'),
            "param_name" => "company_name3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 4 Says", 'maxhost'),
            "param_name" => "text3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 5", 'maxhost'),
            "param_name" => "client_name4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 5", 'maxhost'),
            "param_name" => "company_name4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 5 Says", 'maxhost'),
            "param_name" => "text4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
      )
   )
);

/**************
Testimonial - 3
**************/
vc_map( array(
      "name" => esc_html__("FT- Testimonial - 3", 'maxhost'),
      "base" => "maxhost_shortcodes_testimonial_three",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Testimonial -Style 3', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Section Heading Line - 1", 'maxhost'),
            "param_name" => "section_heading",
            "value" => '',
            "description" => esc_html__('Heading line 1', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Section Heading Line - 2", 'maxhost'),
            "param_name" => "section_heading2",
            "value" => '',
            "description" => esc_html__('Heading line 2', 'maxhost')
         ),
		  array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Number of Reviews", 'maxhost'),
            "param_name" => "number_of_tabs",
            'admin_label' => true,
            "value" => array(
               esc_html__('One', 'maxhost')=>'1',
			   esc_html__('Two', 'maxhost')=>'2', 
			   esc_html__('Three', 'maxhost')=>'3',
			   esc_html__('Four', 'maxhost')=>'4',
			   esc_html__('Five', 'maxhost')=>'5',
            )
         ),
		  
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 1", 'maxhost'),
            "param_name" => "client_name0",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 1", 'maxhost'),
            "param_name" => "company_name0",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Image of Client - 1", 'maxhost'),
            "param_name" => "image0",
            "value" => '',
            "description" => esc_html__('Put the url of the client - 1 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 1 Says", 'maxhost'),
            "param_name" => "text0",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 2", 'maxhost'),
            "param_name" => "client_name1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 2", 'maxhost'),
            "param_name" => "company_name1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Image of Client - 2", 'maxhost'),
            "param_name" => "image1",
            "value" => '',
            "description" => esc_html__('Put the url of the client - 2 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 2 Says", 'maxhost'),
            "param_name" => "text1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 3", 'maxhost'),
            "param_name" => "client_name2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 3", 'maxhost'),
            "param_name" => "company_name2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Image of Client - 3", 'maxhost'),
            "param_name" => "image2",
            "value" => '',
            "description" => esc_html__('Put the url of the client - 3 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 3 Says", 'maxhost'),
            "param_name" => "text2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 4", 'maxhost'),
            "param_name" => "client_name3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 4", 'maxhost'),
            "param_name" => "company_name3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Image of Client - 4", 'maxhost'),
            "param_name" => "image3",
            "value" => '',
            "description" => esc_html__('Put the url of the client - 4 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 4 Says", 'maxhost'),
            "param_name" => "text3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 5", 'maxhost'),
            "param_name" => "client_name4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 5", 'maxhost'),
            "param_name" => "company_name4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Image of Client - 5", 'maxhost'),
            "param_name" => "image4",
            "value" => '',
            "description" => esc_html__('Put the url of the client - 5 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 5 Says", 'maxhost'),
            "param_name" => "text4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
      )
   )
);

/**************
Testimonial - 4
**************/
vc_map( array(
      "name" => esc_html__("FT- Testimonial - 4", 'maxhost'),
      "base" => "maxhost_shortcodes_testimonial_four",
      "icon" => plugins_url( 'images/vc.png', __FILE__ ),
      "class" => "",
      "category" => esc_html__('by Fluent-Themes Shortcodes', 'maxhost'),
      'admin_enqueue_js' => '',
      'admin_enqueue_css' => '',
      'description' => esc_html__('Testimonial -Style 4', 'maxhost'),
      "params" => array(
         array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Section Heading Line - 1", 'maxhost'),
            "param_name" => "section_heading",
            "value" => '',
            "description" => esc_html__('Heading line 1', 'maxhost')
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Section Heading Line - 2", 'maxhost'),
            "param_name" => "section_heading2",
            "value" => '',
            "description" => esc_html__('Heading line 2', 'maxhost')
         ),
		  array(
            "type" => "dropdown",            
            "class" => "",
            "heading" => esc_html__("Number of Reviews", 'maxhost'),
            "param_name" => "number_of_tabs",
            'admin_label' => true,
            "value" => array(
               esc_html__('One', 'maxhost')=>'1',
			   esc_html__('Two', 'maxhost')=>'2', 
			   esc_html__('Three', 'maxhost')=>'3',
			   esc_html__('Four', 'maxhost')=>'4',
			   esc_html__('Five', 'maxhost')=>'5',
            )
         ),
		  
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 1", 'maxhost'),
            "param_name" => "client_name0",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 1", 'maxhost'),
            "param_name" => "company_name0",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Image of Client - 1", 'maxhost'),
            "param_name" => "image0",
            "value" => '',
            "description" => esc_html__('Put the url of the client - 1 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 1 Says", 'maxhost'),
            "param_name" => "text0",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('1',
								'2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 2", 'maxhost'),
            "param_name" => "client_name1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 2", 'maxhost'),
            "param_name" => "company_name1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Image of Client - 2", 'maxhost'),
            "param_name" => "image1",
            "value" => '',
            "description" => esc_html__('Put the url of the client - 2 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 2 Says", 'maxhost'),
            "param_name" => "text1",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('2',
								'3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 3", 'maxhost'),
            "param_name" => "client_name2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 3", 'maxhost'),
            "param_name" => "company_name2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Image of Client - 3", 'maxhost'),
            "param_name" => "image2",
            "value" => '',
            "description" => esc_html__('Put the url of the client - 3 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 3 Says", 'maxhost'),
            "param_name" => "text2",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('3',
								'4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 4", 'maxhost'),
            "param_name" => "client_name3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 4", 'maxhost'),
            "param_name" => "company_name3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Image of Client - 4", 'maxhost'),
            "param_name" => "image3",
            "value" => '',
            "description" => esc_html__('Put the url of the client - 4 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 4 Says", 'maxhost'),
            "param_name" => "text3",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => array('4',
								'5',
						)
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Name of Client - 5", 'maxhost'),
            "param_name" => "client_name4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Company of Client - 5", 'maxhost'),
            "param_name" => "company_name4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "textfield",            
            "class" => "",
            "heading" => esc_html__("Image of Client - 5", 'maxhost'),
            "param_name" => "image4",
            "value" => '',
            "description" => esc_html__('Put the url of the client - 5 image', 'maxhost'),
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
		 array(
            "type" => "textarea",            
            "class" => "",
            "heading" => esc_html__("What Client - 5 Says", 'maxhost'),
            "param_name" => "text4",
			'dependency' => array(
               'element'=>'number_of_tabs',
               'value' => '5'
            )
         ),
      )
   )
);

}