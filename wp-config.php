
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
