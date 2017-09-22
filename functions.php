<?php  

// Change the Login Logo

function my_login_logo() { ?>
    <style type="text/css">
        #login h1 a, .login h1 a {
            background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/images/site-login-logo.png);
		height:65px;
		width:320px;
		background-size: 80px 80px;
		background-repeat: no-repeat;
        	padding-bottom: 20px;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

// Change the link values so the logo links to your WordPress site

function my_login_logo_url() {
    return home_url();
}
add_filter( 'login_headerurl', 'my_login_logo_url' );

function my_login_logo_url_title() {
    return 'Pittsburgh Firefighters';
}
add_filter( 'login_headertitle', 'my_login_logo_url_title' );

// Re-direct specifc user roles

function members_login_redirect($redirect_to, $request, $user)
{
    $role = 'member'; // other roles can be added
    if ( in_array( 'member', (array) $user->roles ) )
    {
        return './members';
    }
}

add_filter( 'login_redirect', 'members_login_redirect', 10, 3);

