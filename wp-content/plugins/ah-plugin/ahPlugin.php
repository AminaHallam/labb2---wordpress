<?php 

/*
Plugin name: AH-Plugin 
description: Ett plugin för reklam
Version: 1.0
Author: Amina Hallam 
Text Domain: AH-plugin

*/ 


// undviker direkt åtkomst till plugin-filen
defined('ABSPATH') or die('Oups !');





function ah_add_promo($the_content){

    if( is_home() ) {

        $the_content = '<section style="background: #dfad9b61; padding: 2rem; text-align: center;">';
        $the_content .= '<p>Vill du lära dig mer om klättring ? <a href="http://localhost:3000/labb2-AH/produkt/stora-boken-om-klattring/">Här hittar du instruktionsboken</a> ! ;)</p>';
        $the_content .= '</section>'; 
        
    }; 

    return $the_content;

}

add_filter('the_content', 'ah_add_promo');




?> 