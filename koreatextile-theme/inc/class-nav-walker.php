<?php
/**
 * Custom Walker_Nav_Menu for BEM class output.
 * Outputs: nav__item, nav__item--active, nav__link
 */
class KoreaTextile_Walker extends Walker_Nav_Menu {

    public function start_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '<ul class="nav__submenu">';
    }

    public function end_lvl( &$output, $depth = 0, $args = null ) {
        $output .= '</ul>';
    }

    public function start_el( &$output, $data_object, $depth = 0, $args = null, $current_object_id = 0 ) {
        $classes = array( 'nav__item' );

        if ( in_array( 'current-menu-item', $data_object->classes, true ) ||
             in_array( 'current_page_item', $data_object->classes, true ) ) {
            $classes[] = 'nav__item--active';
        }

        $output .= '<li class="' . esc_attr( implode( ' ', $classes ) ) . '">';
        $output .= '<a href="' . esc_url( $data_object->url ) . '" class="nav__link">';
        $output .= esc_html( $data_object->title );
        $output .= '</a>';
    }

    public function end_el( &$output, $data_object, $depth = 0, $args = null ) {
        $output .= '</li>';
    }
}
