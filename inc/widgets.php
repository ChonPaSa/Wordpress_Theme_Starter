<?php
/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function codefish_underscores_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'Right Sidebar', 'codefish-underscores' ),
		'id'            => 'right-sidebar',
		'description'   => esc_html__( 'Add widgets here.', 'codefish-underscores' ),
		'before_widget' => '<section id="%1$s" class="widget %2$s">',
		'after_widget'  => '</section>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
}
add_action( 'widgets_init', 'codefish_underscores_widgets_init' );
