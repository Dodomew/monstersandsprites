<!DOCTYPE html>
<html>
    
    <head>
        
        <meta charset="utf-8">
        <title>Niels Uiterwijk Programmer Portfolio</title>
        <meta name="description" content="Portfolio site of Niels Uiterwijk, programmer">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" />
        <link href="<?php bloginfo('template_directory');?>/style.css" rel="stylesheet">
        <script src="https://code.jquery.com/jquery-3.1.1.slim.min.js"   integrity="sha256-/SIrNqv8h6QGKDuNoLGA4iret+kyesCkHGzVUUV0shc="   crossorigin="anonymous"></script>
        <?php wp_head();?>
        
    </head>
    
    <body>
        
        <div class="header">
            
            <div class="header-title">
            
                <h1>Niels Uiterwijk</h1>
            
            </div>
            
            <div class="mobile-menu">
                
                <div class="dropdown">
                        
                    <button onclick="myFunction()" class="dropbtn"></button>
                        
                    <div id="myDropdown" class="dropdown-content">
                          
                        <a href="#"><?php wp_list_pages( '&title_li='); ?></a>
                          
                    </div>
                        
                </div>
                
            </div>
            
            <ul class="menu-desktop">

                <li><a href="#"><?php wp_list_pages( '&title_li='); ?></a></li>

            </ul>
            
        </div>
        
        <div class="header-invisible"></div>
