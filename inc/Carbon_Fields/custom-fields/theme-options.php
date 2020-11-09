<?php 
use Carbon_Fields\Container;

use Carbon_Fields\Field;

//Для первой части
Container::make( 'post_meta','Настройки'  )
    ->show_on_template('Pages/Main Page.php')
    ->add_fields( array(
        Field::make( 'text', 'test_field_full_format', 'Test full' )
        ->set_width( 50 ),
        Field::make( 'text', 'test_field_short_format', 'Test short' )
        ->set_width( 50 ),

        Field::make( 'complex', 'test_meta_complex', 'Test meta complex' )
            ->set_layout( 'tabbed-horizontal' )
             ->add_fields( array(  
                Field::make( 'text', 'meta_complex_text', 'Test meta text' )
             ))
));

Container::make( 'theme_options','Options'  )
    ->add_fields( array(
        Field::make( 'text', 'test_theme_option', 'Test Theme Options' ),

        Field::make( 'complex', 'test_theme_comples', 'Test theme complex' )
            ->set_layout( 'tabbed-horizontal' )
             ->add_fields( array(  
                Field::make( 'text', 'theme_complex_text', 'Test theme text' )
             ))
));

//term_meta 
Container::make( 'term_meta',  'Test term_taxonomy'  )
    ->where( 'term_taxonomy', '=', 'category' )
    ->add_fields( array(
        Field::make( 'color', 'crb_title_color', 'Test Title Color'  ),
        Field::make( 'image', 'crb_thumb',  'Test Thumbnail'  ),

        Field::make( 'complex', 'test_term_complex', 'Test Complex' )
            ->set_layout( 'tabbed-horizontal' )
	        ->add_fields( array(  
            Field::make( 'text', 'complex_text', 'Test Complex Text' ),        
        )),
));
//user_meta 
Container::make('user_meta', 'Test user fields')
    ->add_fields(array(
        Field::make('text', 'crb_some_text', 'Test text under avatar'),

        Field::make( 'complex', 'test_user_complex', 'Test User Complex' )
            ->set_layout( 'tabbed-horizontal' )
	        ->add_fields( array(  
                Field::make('text', 'crb_test_fields', 'Test Fields'),     
            )),       
    ));

//Comment meta
Container::make( 'comment_meta', __( 'Test comment' ) )
    ->add_fields( array(
    
        Field::make( 'select', 'comment_test_select', __( 'Comment test select' ) )
        ->set_width( 50 )
        ->set_options( array(
            '1' => 1,
            '2' => 2,
            '3' => 3,
            '4' => 4,
            '5' => 5,
        ) ),

        Field::make( 'text', 'comment_test_some_text', __( 'Comment test text' ) )
        ->set_width( 50 ),
    ) );
?>