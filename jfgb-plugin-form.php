<?php
/**
 * Plugin Name: JFGB Plugin Form
 * Author: Jesús Francisco Gómez Bethencourt
 * Descripcion: Plugin para crear un formulario personalizado. Utiliza el shortcode [jfgb_plugin_form] 
 */

 //Define el shortcode que pinta el formulario
 add_shortcode('jfgb_plugin_form','JFGB_Plugin_form');

 function JFGB_Plugin_form()
 {
    ob_start();
    ?>
    <form action="<?php get_the_permalink(); ?>" method="post" class="cuestionario">
        <div class="form-input">
            <label for="laisla">Isla</label>
            <input type="text" name="nombre" required="required">
        </div>
    </form>
    <?php
    return ob_get_clean();
 }
?>