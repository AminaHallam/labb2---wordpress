<?php 

/*
Plugin name: ahPlugin 
description: Ett plugin för reklam
Version: 1.0
Author: Amina Hallam 
Text Domain: AH-plugin

*/ 


// undviker direkt åtkomst till plugin-filen
defined('ABSPATH') or die('Oups !');




// Publicerar reklamen endast i singlePage för blogginlägg samt single productPage

add_filter('the_content', 'ah_after_post_content'); 


function ah_after_post_content($content){

    if( is_single() ) {

      $promo = '<section style="background: #b9cdeea6; color: black; font-size: 15px; font-weight: bold; padding: 0.5rem; text-align: center; margin: 25px;">';
      $promo .= '<p>Vill du lära dig mer om klättring?  <a href="http://localhost:3000/labb2-AH/produkt/stora-boken-om-klattring/"> Här hittar du instruktionsboken</a> ! 🧗 ;)</p>';
      $promo .= '</section>'; 
      
      $fullcontent = $promo.$content;
  
      return $fullcontent; 

    } else {
      
      return $content; 

    }

  
  }
  

?> 