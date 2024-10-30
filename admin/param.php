<?php

function mhevc_param_VC() {
    vc_map( 
    
        array(
            "name" => __( "Maria Hover Items", "mhevc" ),
            "base" => "mhevc-hover",
            "class" => "",
			"icon"        => "maria_wapper_icon",
            "category" => __( "Maria Hover", "mhevc"),
            "description" => __( "", "mhevc"),
            "params" => array(
             array(
                "type" => "attach_image",
                "heading" => __("Image", "mhevc"),
                "param_name" => "image",
                "admin_label"		=> true,
                "value" => "",
                //"description" => __("select image for hover", "mhevc")
            ),            
                
             array(
                "type" => "textfield",
                "heading" => __("Heading", "mhevc"),
                "param_name" => "title",
                "admin_label"		=> true,
				 "value" => "Title Here",
                //"description" => __("select image for hover", "mhevc")
            ), 
                            
             array(
                "type" => "textarea",
                "heading" => __("Description", "mhevc"),
                "param_name" => "description",
                "admin_label"		=> true,
				"value" => "Title Here",
                "dependency"        => array( 'element' => "style", 'value' => array('square', 'circle', 'caption') ),
            ), 
            array(
                "type" => "vc_link",
                "heading" => __("Link", "mhevc"),
                "param_name" => "link",
                "admin_label"		=> true,
                "description" => __("keep blank if you don't want", "mhevc"),
                
            ), 
			
            
            
            array(
                "type"              => "dropdown",
                "heading"           => __( "Select Style", "mhevc" ),
                "param_name"        => "style",
                "value"             => array(
					__( 'Square', "mhevc" )		=> "square",
                    __( 'Circle', "mhevc" )		=> "circle",
                    __( 'Caption', "mhevc" )		=> "caption",
					//__( 'Square 2', "mhevc" )		=> "square2",
                  //  __( 'Jibon (Pro Only)', "mhevc" )		=> "jibon",
                 //   __( 'Others (Pro Only)', "mhevc" )		=> "others",                      

                ),
                "admin_label"		=> true,
                "description"       => __( "Select the style for the hover effect.", "mhevc" ),	
            ),
            
            array(
                "type"              => "dropdown",
                "heading"           => __( "Select Effect", "mhevc" ),
                "param_name"        => "square_effects",
                "value"             => array(
                    __( 'Effect 1', "mhevc" )		    => "effect1",
                    __( 'Effect 2', "mhevc" )		    => "effect2",
                    __( 'Effect 3', "mhevc" )		    => "effect3",
                    __( 'Effect 4', "mhevc" )		    => "effect4",
                    __( 'Effect 5', "mhevc" )		    => "effect5",
                    __( 'Effect 6', "mhevc" )	    	=> "effect6",
                    __( 'Effect 7', "mhevc" )	    	=> "effect7",
                    __( 'Effect 8', "mhevc" )	    	=> "effect8",
                    __( 'Effect 9', "mhevc" )	    	=> "effect9",
                    __( 'Effect 10', "mhevc" )		=> "effect10",
                    __( 'Effect 11', "mhevc" )		=> "effect11",
                    __( 'Effect 12', "mhevc" )		=> "effect12",
                    __( 'Effect 13', "mhevc" )		=> "effect13",
                    __( 'Effect 14', "mhevc" )		=> "effect14",
                    __( 'Effect 15', "mhevc" )		=> "effect15",

                ),
                "dependency"        => array( 'element' => "style", 'value' => array('square') ),
            ),       
            array(
                "type"              => "dropdown",
                "heading"           => __( "Select Effect", "mhevc" ),
                "param_name"        => "circle_effects",
                "value"             => array(
                    __( 'Effect 1', "mhevc" )		    => "effect1",
                    __( 'Effect 2', "mhevc" )		    => "effect2",
                    __( 'Effect 3', "mhevc" )		    => "effect3",
                    __( 'Effect 4', "mhevc" )		    => "effect4",
                    __( 'Effect 5', "mhevc" )		    => "effect5",
                    __( 'Effect 6', "mhevc" )	    	=> "effect6",
                    __( 'Effect 7', "mhevc" )	    	=> "effect7",
                    __( 'Effect 8', "mhevc" )	    	=> "effect8",
                    __( 'Effect 9', "mhevc" )	    	=> "effect9",
                    __( 'Effect 10', "mhevc" )		=> "effect10",
                    __( 'Effect 11', "mhevc" )		=> "effect11",
                    __( 'Effect 12', "mhevc" )		=> "effect12",
                    __( 'Effect 13', "mhevc" )		=> "effect13",
                    __( 'Effect 14', "mhevc" )		=> "effect14",
                    __( 'Effect 15', "mhevc" )		=> "effect15",
                    __( 'Effect 16', "mhevc" )		=> "effect16",
                    __( 'Effect 17', "mhevc" )		=> "effect17",
                    __( 'Effect 18', "mhevc" )		=> "effect18",
                    __( 'Effect 19', "mhevc" )		=> "effect19",
                    __( 'Effect 20', "mhevc" )		=> "effect20",

                ),
                "dependency"        => array( 'element' => "style", 'value' => array('circle') ),
            ),  

            array(
                "type"              => "dropdown",
                "heading"           => __( "Select Animation Direction", "mhevc" ),
                "param_name"        => "animation",
                //"width"             => 150,
                "value"             => array(
                    __( 'Left To Right', "mhevc" )		    => "left_to_right",
                    __( 'Right To Left', "mhevc" )		    => "right_to_left",
                    __( 'Top To Bottom', "mhevc" )		    => "top_to_bottom",
                    __( 'Bottom To Top', "mhevc" )		    => "bottom_to_top",

                ),
                "dependency"        => array( 'element' => "style", 'value' => array('square', 'circle') ),
            ),	
            array(
                "type"              => "dropdown",
                "heading"           => __( "Select Effect", "mhevc" ),
                "param_name"        => "caption_effects",
                "value"             => array(
                    __( 'Effect 1', "mhevc" )		    => "effect1",
                    __( 'Effect 2', "mhevc" )		    => "effect2",
                    __( 'Effect 3', "mhevc" )		    => "effect3",
                    __( 'Effect 4', "mhevc" )		    => "effect4",
                    __( 'Effect 5', "mhevc" )		    => "effect5",
                    __( 'Effect 6', "mhevc" )	    	=> "effect6",
                    __( 'Effect 7', "mhevc" )	    	=> "effect7",
                    __( 'Effect 8', "mhevc" )	    	=> "effect8",
                    __( 'Effect 9', "mhevc" )	    	=> "effect9",
                    __( 'Effect 10', "mhevc" )		=> "effect10",
                    __( 'Effect 11', "mhevc" )		=> "effect11",
                    __( 'Effect 12', "mhevc" )		=> "effect12",
                    __( 'Effect 13', "mhevc" )		=> "effect13",
                    __( 'Effect 14', "mhevc" )		=> "effect14",
                    __( 'Effect 15', "mhevc" )		=> "effect15",
                    __( 'Effect 16', "mhevc" )		=> "effect16",
                    __( 'Effect 17', "mhevc" )		=> "effect17",
                    __( 'Effect 18', "mhevc" )		=> "effect18",
                    __( 'Effect 19', "mhevc" )		=> "effect19",
                    __( 'Effect 20', "mhevc" )		=> "effect20",

                ),
                "dependency"        => array( 'element' => "style", 'value' => array('caption') ),
            ),
			
            )
        ) 
    
    );
}
add_action( 'vc_before_init', 'mhevc_param_VC' );

