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

//Для второй части 
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
//Третья часть 
Container::make('user_meta', 'Test user fields')
    ->add_fields(array(
        Field::make('text', 'crb_some_text', 'Test text under avatar'),

        Field::make( 'complex', 'test_user_complex', 'Test User Complex' )
            ->set_layout( 'tabbed-horizontal' )
	        ->add_fields( array(  
                Field::make('text', 'crb_test_fields', 'Test Fields'),     
            )),       
    ));
?>