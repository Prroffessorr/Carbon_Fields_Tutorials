<?php
/**
 * Template name: Term_meta-User_meta
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Carbon_fields
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

<!-- carbon_get_term_meta ( Настройки в категориях) -->
<?php 
$categories = get_categories();

if( $categories ){

	foreach( $categories as $cat ){
        $term_id = $cat->term_id ;
        $term_thumbnail_id = carbon_get_term_meta( $term_id, 'crb_thumb');
        $term_thumbnail_url = wp_get_attachment_image_url( $term_thumbnail_id, 'full' ); ?>

    <div>
        <p style="color:<?php echo carbon_get_term_meta( $term_id, 'crb_title_color') ?>">
        <?php echo $cat->name; ?>
        </p>
        <img width="300" src="<?php echo $term_thumbnail_url; ?>" alt="" />
    
    <?php 
    $complex_test = carbon_get_term_meta( $term_id, 'test_term_complex' );
    foreach ( $complex_test as $complex ) {?>
        <ul>                                            
            <li>
                <?php echo $complex['complex_text'];?>
            </li>
        </ul>
    </div>
<?php }
    }
} ?>

<!-- carbon_get_user_meta (настройка профиля пользователя)-->
<?php
$users = get_users();

foreach( $users as $user ){
	$user_id=$user->ID;?>

    <div> 
    <?php echo get_avatar( $user_id, 96 );?>
    <p><?php echo carbon_get_user_meta($user_id, 'crb_some_text'); ?></p>

    <?php

    $test_user_complex = carbon_get_user_meta( $user_id, 'test_user_complex' );

    foreach ( $test_user_complex as $test ) {?>
       <ul>
            <li>
                <?php echo $test['crb_test_fields']; ?>
            </li>
       </ul>
    </div>

<?php } 
} ?>
</body>
</html>