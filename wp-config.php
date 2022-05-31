
# BEGIN rlrssslReallySimpleSSL
<IfModule mod_rewrite.c>
RewriteEngine on
RewriteCond %{HTTPS} !=on [NC]
RewriteCond %{REQUEST_URI} !^/\.well-known/acme-challenge/
RewriteRule ^(.*)$ https://%{HTTP_HOST}/$1 [R=301,L]
</IfModule>

# Configurracion ssl en wp-config
define('SP_REQUEST_URL', ($_SERVER['HTTPS'] ? 'https://' : 'http://') . $_SERVER['HTTP_HOST']);
define('WP_SITEURL', SP_REQUEST_URL);
define('WP_HOME', SP_REQUEST_URL);


/* Force SSL on Login Pages */ 
define( 'FORCE_SSL_LOGIN', true ); 
/* Force SSL for Admin Backend */ 
define( 'FORCE_SSL_ADMIN', true );
/* Set Maximum Number of Revisions. */ 
define( 'WP_POST_REVISIONS', '10' );
/* Compress All CSS Files */ 
define( 'COMPRESS_CSS', true ); 
/* Compress All JS Files */ 
define( 'COMPRESS_SCRIPTS', true ); 
/* Turn On GZIP Compression */ 
define( 'ENFORCE_GZIP', true );

/* Desactivar las actualziaciones automaticas */
define( 'AUTOMATIC_UPDATER_DISABLED', true );
/* Desactivar las actualziaciones del core */
define( 'WP_AUTO_UPDATE_CORE', false );
