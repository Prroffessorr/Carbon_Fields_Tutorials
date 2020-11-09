<?php
/**
 * Template name: Widget
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Carbon_fields
 */
?>
<!DOCTYPE html>
<html lang="en">
<body>

<!-- Widgets -->
<?php dynamic_sidebar('Example'); ?>   

<!--Comments-->
<?php $comments = get_comments();

foreach( $comments as $comment ){ 

    $test_info    = carbon_get_comment_meta( $comment->comment_ID, 'comment_test_some_text' );
    $rating = carbon_get_comment_meta( $comment->comment_ID, 'comment_test_select' );
 
    echo ' Autor: ' . $comment->comment_author . '<br>';
    echo ' Content: ' . $comment->comment_content . '<br>';

    if ( ! empty( $rating ) ) {
        echo ' Rating: ' .  $rating . '<br>';
    } 

    if ( ! empty( $test_info ) ) {
        echo 'Test Info: ' . $test_info . '<br>';
    } 
   
}
?>
</body>
</html>