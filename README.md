# SEE https://github.com/alex4108/visitor-management/

# visitor-management-project
## Visitor Management System
---------------------------------
Back end - php and mysql

Front end - HTML and CSS

Requiremrnts:
* php
* web server (nginx, httpd)
* mysql-server or mariadb-server
* php-mysqli
_Originally Linux + XAMPP server_

# Installation

1. Clone or download this repo to the intended directory of your webserver.
1. Install dependencies if not present
1. Edit `config.php` to match your database connection parameters.  Ensure you have an empty database for this application. (`CREATE DATABASE 'project';`)
1. Install the schema: `$(php -r 'include("config.php"); foreach( get_defined_constants() as $key => $item ) { if ( substr( $key, 0, 3 ) == "DB_" ) { print "export "; print $key; print "="; print $item; print "\n"; } }') && mysql -u ${DB_USERNAME} -h ${DB_SERVER} -p${DB_PASSWORD} ${DB_DATABASE} < vms_db.sql`
1. The app should now be available at your webserver.
