<?php
/*
Plugin Name: Plugin d'Orelie
Description: Un simple plugin qui permet d'afficher une info.
Version: 1.0
Author: Orelie CANU
License: 
*/

add_shortcode( 'simplon', 'simplon_shortcode' );

if ( !function_exists( 'simplon_shortcode') ) {
    
    function simplon_shortcode() {

        $text = '<hr/>';
        $text .= '<p>';
        $text .= 'Destinée aux chercheurs d’emplois en situation de reconversion, la formation <b>Référent.e Numérique Entreprise </b>prépare en 8 mois aux métiers du numérique et est couronnée par l’obtention de <span style="color:#f00020;">3 certifications.</span><p>
        Le métier de référent.e numérique consiste à accompagner les structures dans la mise en place de solutions numériques adaptées à leurs besoins. 
        La formation est menée conjointement par :<p>
        <ul>
        <li><a href="https://www.insa-rouen.fr/">l’INSA Rouen Normandie ;</li><p>
        <li>le <a href="https://www.cesi.fr/">CESI" ;</li><p>
        <li><a href="https://simplon.com/">Simplon.co.;</li></ul>';
        $text .= '</p>';
        $text .= '<hr/>';

        return $text;
    }
}


