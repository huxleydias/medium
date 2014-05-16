<?php
/**
 * @package WordPress
 * @subpackage Medium WP
*/
define('FS_METHOD','direct');
require('functions/better-excerpts.php');

if ( function_exists( 'add_theme_support' ) )
	add_theme_support( 'post-thumbnails' );
	
if ( function_exists( 'add_image_size' ) ) {
	
	add_image_size( 'featured', 280, 260, true );
	add_image_size('archive-thumb', 100, 100, true);
// add nav menu
// register_nav_menus( array(
//     'menu_superior' => 'Menu Superior',
//     'menu_lateral_categorias' => 'Lateral Categorias',
//     'menu_ebricks' => 'Infeior',
// ) );	
// Limit Post Word Count
function new_excerpt_length($length) {
	return 50;
}
add_filter('excerpt_length', 'new_excerpt_length');

//Replace Excerpt Link
function new_excerpt_more($more) {
       global $post;
	return '...';
}
add_filter('excerpt_more', 'new_excerpt_more');
}	
?>
<?php
// CAMPOS DE PERFIL PERSONALIZADOS
add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );
function my_show_extra_profile_fields( $user ) { ?>
    <h3>Autor Box Informations</h3>
    <table class="form-table">
        <tr>
            <th><label for="twitter">Twitter</label></th>
 
            <td>
                <input type="text" name="twitter" id="twitter" value="<?php echo esc_attr( get_the_author_meta( 'twitter', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description">O seu nome de usuário do Twitter (URL)</span>
            </td>
        </tr>
        <tr>
            <th><label for="facebook">Facebook</label></th>
 
            <td>
                <input type="text" name="facebook" id="facebook" value="<?php echo esc_attr( get_the_author_meta( 'facebook', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description">O seu perfil no Facebook (URL)</span>
            </td>
        </tr>
        <tr>
            <th><label for="gplus">Google+</label></th>
 
            <td>
                <input type="text" name="gplus" id="gplus" value="<?php echo esc_attr( get_the_author_meta( 'gplus', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description">O seu perfil no Google+ (URL)</span>
            </td>
        </tr> 
        <tr>
            <th><label for="linkedin">Linkedin</label></th>
 
            <td>
                <input type="text" name="linkedin" id="linkedin" value="<?php echo esc_attr( get_the_author_meta( 'linkedin', $user->ID ) ); ?>" class="regular-text" /><br />
                <span class="description">O seu perfil no Linkedin (URL)</span>
            </td>
        </tr>     
 
    </table>
<?php } ?>
<?php
// GUARDAR E MANTER INFO DOS CAMPOS
add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );
function my_save_extra_profile_fields( $user_id ) {
    if ( !current_user_can( 'edit_user', $user_id ) )
        return false;
    update_usermeta( $user_id, 'twitter', $_POST['twitter'] );
    update_usermeta( $user_id, 'facebook', $_POST['facebook'] );
    update_usermeta( $user_id, 'gplus', $_POST['gplus'] );
    update_usermeta( $user_id, 'linkedin', $_POST['linkedin'] );
}
?>