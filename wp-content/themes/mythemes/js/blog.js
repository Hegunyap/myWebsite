function wpb_hook_javascript() {
    $(function() {
        $( 'ul.nav li' ).on( 'click', function() {
              $( this ).parent().find( 'li.active' ).removeClass( 'active' );
              $( this ).addClass( 'active' );
        });
    });
}

add_action('wp_head', 'wpb_hook_javascript');
