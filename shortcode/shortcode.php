<?php
function mhevc_shortcode_func($atts, $content=null) {
        extract(shortcode_atts(array(
            "style" => 'square',
            "circle_effects" => 'effect1',
            "square_effects" => 'effect1',
            "square2_effects" => 'effect1',
            "caption_effects" => 'effect1',
            "animation" => 'left_to_right',
            "image" => '',
            "title" => 'Heading Goes Here',
            "description" => 'description goes here',
            "link" => '',
            "css_class" => '',
            
        ), $atts));
		$output = '';
        $image = wp_get_attachment_image_src( $image, 'full' );     
        $link   = vc_build_link( $link );	
        
        if ( $style=='square' && $square_effects=='effect1' ){
    
            $output .= '<div class="ih-item square effect1 left_and_right '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }        
        
        if ( $style=='square' && $square_effects=='effect2' ){
    
            $output .= '<div class="ih-item square effect2 '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }        

        if ( $style=='square' && $square_effects=='effect3' ){
    
            $output .= '<div class="ih-item square effect3 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='square' && $square_effects=='effect4' ){
    
            $output .= '<div class="ih-item square effect4 '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                            <div class="img"><img src="'.$image[0].'"></div>
                            <div class="mask1" style="position: absolute; ; left: auto; right: 0px; top: 0px;"></div>
                            <div class="mask2" style="position: absolute; 
							top: auto; bottom: 0px; left: 0px;"></div>
                            <div class="info" >
                              <h3>'.$title.'</h3>
                              <p>'.$description.'</p>
                </div></a></div>';
        }

        if ( $style=='square' && $square_effects=='effect5' ){
    
            $output .= '<div class="ih-item square effect5 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='square' && $square_effects=='effect6' ){
    
            $output .= '<div class="ih-item square effect6 from_top_and_bottom '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='square' && $square_effects=='effect7' ){
    
            $output .= '<div class="ih-item square effect7 '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }
        
        if ( $style=='square' && $square_effects=='effect8' ){
    
            $output .= '<div class="ih-item square effect8 scale_up '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }
        
        if ( $style=='square' && $square_effects=='effect9' ){
    
            $output .= '<div class="ih-item square effect9 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img src="'.$image[0].'"></div>
                                    <div class="info">
                                    <div class="info-back"  >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></div></a></div>';
        }
        
        if ( $style=='square' && $square_effects=='effect10' ){
    
            $output .= '<div class="ih-item square effect10 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='square' && $square_effects=='effect11' ){
    
            $output .= '<div class="ih-item square effect11 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }
        
        if ( $style=='square' && $square_effects=='effect12' ){
    
            $output .= '<div class="ih-item square effect12 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='square' && $square_effects=='effect13' ){
    
            $output .= '<div class="ih-item square effect13 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='square' && $square_effects=='effect14' ){
    
            $output .= '<div class="ih-item square effect14 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='square' && $square_effects=='effect15' ){
    
            $output .= '<div class="ih-item square effect15 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img"><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }
		
if ( $style=='circle' && $circle_effects=='effect1' ){
    
            $output .= '<div class="ih-item circle effect1 '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <div class="info-back" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></div></a></div>';
        }
        
        if ( $style=='circle' && $circle_effects=='effect2' ){
    
            $output .= '<div class="ih-item circle effect2 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }
                
        if ( $style=='circle' && $circle_effects=='effect3' ){
    
            $output .= '<div class="ih-item circle effect3 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }
        
        if ( $style=='circle' && $circle_effects=='effect4' ){
    
            $output .= '<div class="ih-item circle effect4 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }
        
        if ( $style=='circle' && $circle_effects=='effect5' ){
    
            $output .= '<div class="ih-item circle effect5 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info">
                                <div class="info-back" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></div></a></div>';
        }        
 

        if ( $style=='circle' && $circle_effects=='effect6' ){
    
            $output .= '<div class="ih-item circle effect6 scale_down_up '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='circle' && $circle_effects=='effect7' ){
    
            $output .= '<div class="ih-item circle effect7 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info">
                                <div class="info-back" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></div></a></div>';
        }
        
        if ( $style=='circle' && $circle_effects=='effect8' ){
    
                        $output .= '<div class="ih-item circle effect8 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                                                                <div class="img-container">
                                                                    <div class="img" ><img src="'.$image[0].'"></div>
                                                                </div>
                                                                <div class="info-container">
                                                                    <div class="info" >
                                                                        <h3 >'.$title.'</h3>
                                                                        <p>'.$description.'</p>
                                                                    </div>
                                </div></a></div>';
        }        
        
        if ( $style=='circle' && $circle_effects=='effect9' ){
    
            $output .= '<div class="ih-item circle effect9 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }
                
        if ( $style=='circle' && $circle_effects=='effect10' ){
    
            $output .= '<div class="ih-item circle effect10 top_to_bottom '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }      
          
        if ( $style=='circle' && $circle_effects=='effect11' ){
    
            $output .= '<div class="ih-item circle effect11 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }        
        
        if ( $style=='circle' && $circle_effects=='effect12' ){
    
            $output .= '<div class="ih-item circle effect12 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }

        if ( $style=='circle' && $circle_effects=='effect13' ){
    
            $output .= '<div class="ih-item circle effect13 from_left_and_right '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info">
                                <div class="info-back" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></div></a></div>';
        }
        
        if ( $style=='circle' && $circle_effects=='effect14' ){
    
            $output .= '<div class="ih-item circle effect14 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }        
        
        if ( $style=='circle' && $circle_effects=='effect15' ){
    
            $output .= '<div class="ih-item circle effect15 left_to_right '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }        
        
        if ( $style=='circle' && $circle_effects=='effect16' ){
    
            $output .= '<div class="ih-item circle effect16 left_to_right '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }         
        
        if ( $style=='circle' && $circle_effects=='effect17' ){
    
            $output .= '<div class="ih-item circle effect17 '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }         
        
        if ( $style=='circle' && $circle_effects=='effect18' ){
    
            $output .= '<div class="ih-item circle effect18 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info">
                                <div class="info-back">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></div></a></div>';
        }    
            
        if ( $style=='circle' && $circle_effects=='effect19' ){
    
            $output .= '<div class="ih-item circle effect19 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></a></div>';
        }        

        if ( $style=='circle' && $circle_effects=='effect20' ){
    
            $output .= '<div class="ih-item circle effect20 '.$animation.' '.$css_class.'" ><a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
                            <div class="spinner"></div>
                                <div class="img" ><img src="'.$image[0].'"></div>
                                    <div class="info">
                                <div class="info-back" >
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                    
                    </div></div></a></div>';
        }
		
		/* Caption Effects Start */
		
		 if ( $style=='caption' && $caption_effects=='effect1' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption spaceoutleft-image captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }     
           
        if ( $style=='caption' && $caption_effects=='effect2' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption spaceoutup-image captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }        
        
        if ( $style=='caption' && $caption_effects=='effect3' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption spaceoutdown-image captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }        
        
        if ( $style=='caption' && $caption_effects=='effect4' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption spaceoutright-image captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        } 
        
        if ( $style=='caption' && $caption_effects=='effect5' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box" style="perspective: 2500px; perspective-origin: 50% 50%;">
                <div class="caption flip-image-horizontal captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }        
        
        if ( $style=='caption' && $caption_effects=='effect6' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box" style="perspective: 2500px; perspective-origin: 50% 50%;">
                <div class="caption flip-image-horizontal captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }
        

        if ( $style=='caption' && $caption_effects=='effect7' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box" style="perspective: 2500px; perspective-origin: 50% 50%;">
                <div class="caption page-turn-from-top captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }       
        
                
        if ( $style=='caption' && $caption_effects=='effect8' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box" style="perspective: 2500px; perspective-origin: 50% 50%;">
                <div class="caption page-turn-from-bottom captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }        
        
        if ( $style=='caption' && $caption_effects=='effect9' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption swap-caption captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }        
        
        if ( $style=='caption' && $caption_effects=='effect10' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption rotateup-image captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        } 
        
        
        if ( $style=='caption' && $caption_effects=='effect11' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption rotatedown-image captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }        

        if ( $style=='caption' && $caption_effects=='effect12' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption fall-down-image captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }        
        
        if ( $style=='caption' && $caption_effects=='effect13' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption zoom-image-out-caption-twist captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }                        

        if ( $style=='caption' && $caption_effects=='effect14' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption opendoorup-image captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }        
        
        if ( $style=='caption' && $caption_effects=='effect15' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption tinright-image captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }

        if ( $style=='caption' && $caption_effects=='effect16' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption rotateleft-image captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }

        if ( $style=='caption' && $caption_effects=='effect17' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption opendoorleft-image captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }

        if ( $style=='caption' && $caption_effects=='effect18' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption simple-fade captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }

        if ( $style=='caption' && $caption_effects=='effect19' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption foolish-image captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }

        if ( $style=='caption' && $caption_effects=='effect20' ){
    
            $output .= '<div  class="wcp-caption-plugin '.$css_class.'" >

        <a href="' . $link['url'] . '" title="' . $link['title'] . '" target="' . $link['target'] . '">
        
            <div class="image-caption-box">
                <div class="caption opendoorright-image captiontext" >
                        <div style="display:table; height:100%; width: 100%;">
                            <div style="text-align: center; padding: 5px;" class="centered-text">
                                <h3>'.$title.'</h3>
                                <p>'.$description.'</p>
                            </div>
                        </div>
                </div>
                        <img style=" transition: all 1s ease; animation-duration: 1s;" src="'.$image[0].'" class="wcp-caption-image">

                </div>
            </a>
        </div>';
        }
        
    return $output;
 }




add_shortcode('mhevc-hover', 'mhevc_shortcode_func');