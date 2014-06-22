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
/* Adding Image Upload Fields */
add_action( 'show_user_profile', 'my_show_extra_profile_fields' );
add_action( 'edit_user_profile', 'my_show_extra_profile_fields' );

function my_show_extra_profile_fields( $user ) 
{ 
?>

    <h3>Profile Images</h3>

    <style type="text/css">
        .fh-profile-upload-options th,
        .fh-profile-upload-options td,
        .fh-profile-upload-options input {
            vertical-align: top;
        }

        .user-preview-image {
            display: block;
            height: auto;
            float: left;
            width: 100px
        }

    </style>

    <table class="form-table fh-profile-upload-options">
        <tr>
            <th>
                <label for="image">Imagem do Perfil</label>
            </th>

            <td>
                <input type="text" name="image" id="image" value="<?php echo esc_attr( get_the_author_meta( 'image', $user->ID ) ); ?>" class="regular-text" />
                <input type='button' class="button-primary" value="Upload Image" id="uploadimage"/><br />

                <span class="description">faça upload de uma imagem para seu perfil.</span>
            </td>
             <td>
                 <img class="user-preview-image" src="<?php echo esc_attr( get_the_author_meta( 'image', $user->ID ) ); ?>">
            </td>
        </tr>

        
    </table>

    <script type="text/javascript">
        (function( $ ) {
            $( '#uploadimage' ).on( 'click', function() {
                tb_show('test', 'media-upload.php?type=image&TB_iframe=1');

                window.send_to_editor = function( html ) 
                {
                    imgurl = $( 'img',html ).attr( 'src' );
                    $( '#image' ).val(imgurl);
                    tb_remove();
                }

                return false;
            });

            $( 'input#sidebarUploadimage' ).on('click', function() {
                tb_show('', 'media-upload.php?type=image&TB_iframe=true');

                window.send_to_editor = function( html ) 
                {
                    imgurl = $( 'img', html ).attr( 'src' );
                    $( '#sidebarimage' ).val(imgurl);
                    tb_remove();
                }

                return false;
            });
        })(jQuery);
    </script>

<?php 
}
add_action( 'admin_enqueue_scripts', 'enqueue_admin' );

function enqueue_admin()
{
    wp_enqueue_script( 'thickbox' );
    wp_enqueue_style('thickbox');

    wp_enqueue_script('media-upload');
}
// salvando
add_action( 'personal_options_update', 'my_save_extra_profile_fields' );
add_action( 'edit_user_profile_update', 'my_save_extra_profile_fields' );

function my_save_extra_profile_fields( $user_id ) {

    if ( !current_user_can( 'edit_user', $user_id ) )
{
        return false;
    }

update_user_meta( $user_id, 'image', $_POST[ 'image' ] );
}