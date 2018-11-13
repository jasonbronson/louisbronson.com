<?php



namespace Libraries;

class Menu {

    public static function getMenu(){
        $menuLocations = get_nav_menu_locations();
        $menuID = $menuLocations['header-menu']; 
        $menu = wp_get_nav_menu_items($menuID); 
        
        $count = 0;
        $submenu = false;
        $menu_list = '';
        $submenuClass = '';
         
        foreach( $menu as $navItem ) {
             //var_dump($navItem);
            
            $link = $navItem->url;
            $title = $navItem->title;
             
            if ( !$navItem->menu_item_parent ) {
                $parent_id = $navItem->ID;
                 
                //Check if submenu exists on next item
                if ( $menu[ $count + 1 ]->menu_item_parent == $parent_id ) { 
                    $menu_list .= '<li class="nav-item dropdown">' ."\n";
                    $menu_list .= '<a href="'.$link.'" class="nav-link dropdown-toggle" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">'.$title.'</a>' ."\n";
                }else{
                    $menu_list .= '<li class="nav-item">' ."\n";
                    $menu_list .= '<a href="'.$link.'" class="title nav-link">'.$title.'</a>' ."\n";
                }
                
            }
 
            if ( $parent_id == $navItem->menu_item_parent ) {
 
                if ( !$submenu ) {
                    $submenu = true;
                    $menu_list .= '<div class="dropdown-menu" aria-labelledby="navbarDropdown">' ."\n";
                }
 
                //$menu_list .= '<li class="nav-item">' ."\n";
                $menu_list .= '<a href="'.$link.'" class="title dropdown-item">'.$title.'</a>' ."\n";
                //$menu_list .= '</li>' ."\n";
                     
                if ( $menu[ $count + 1 ]->menu_item_parent != $parent_id && $submenu ){
                    $menu_list .= '</div>' ."\n";
                    $submenu = false;
                }
 
            }
            
            if ( $menu[ $count + 1 ]->menu_item_parent != $parent_id ) { 
                
                $menu_list .= '</li>' ."\n";      
                $submenu = false;
            }
 
            $count++;
        }
         
        
 
    
        echo $menu_list;

            //echo '<li class="nav-item"><a href="'.$navItem->url.'" title="'.$navItem->title.'" class="nav-link">'.$navItem->title.'</a></li>';
        
        

    }

}