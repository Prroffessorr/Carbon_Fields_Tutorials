<?php
/**
 * Template name: Main page
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
<!--Стандрартый метод-->
<?php echo carbon_get_post_meta( get_the_ID(), 'test_field_full_format' ); ?>

<!--С использованием упрощения в виде функции-->
<?php 
$id = get_the_ID();					
function post_meta($name)
{
    global $id;				
    if (carbon_get_post_meta($id, $name)) {
        echo carbon_get_post_meta($id, $name);
    }   
}
?>
<?php echo post_meta('test_field_short_format') ?>

<!--Пример использования complex-->
<?php $complex_meta = carbon_get_the_post_meta( 'test_meta_complex' );?>
	<ul>
		<?php foreach ( $complex_meta as $complex ) {?>
			<li><?php echo $complex['meta_complex_text'];?></li>
		<?php }?>
    </ul>
   
<!--Theme option-->
<?php echo carbon_get_theme_option('test_theme_option')?>

<?php $coplex_theme_option = carbon_get_theme_option( 'test_theme_comples' );?>
	<ul>
		<?php foreach ( $coplex_theme_option as $complex ) {?>
			<li><?php echo $complex['theme_complex_text'];?></li>
		<?php }?>
    </ul>
</body>
</html>