mkdir var/www/wordpress
cd /var/www/wordpress
mv /wp-config.php ./
wp core download --allow-root
wp core install --url="https://localhost" --title="oui ldauga" --admin_user=$ADMIN_USER --admin_password=$ADMIN_PASSWORD --admin_email=$ADMIN_EMAIL --allow-root
wp user create $USER_NAME $USER_EMAIL --user_pass=$USER_PASSWORD --role=editor --allow-root

chown www-data:www-data /var/www
chmod 744 /var/www

mkdir -p /run/php/
exec php-fpm7.3 -F