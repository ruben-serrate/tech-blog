Wordpress as a composer dependancy.
===================================

##Update process:
0. Back up the database, the update process will probably write something it.
1. Go to https://github.com/WordPress/WordPress/tree/master and make a note of the latest tag. 
2. Update composer.json, replace current tag with latest version (lines 13 and 17)
3. cd to root folder and run 'composer update'
4. Login to the admin panel, it wil probably ask to update database. 
5. Wordpress should be updated now!

##Deployment process:
1. In the repository's root folder, run composer install. Composer will create a `wordpress` folder with WP in it.
2. Follow normal WP migration process: https://codex.wordpress.org/Moving_WordPress , keeping in mind that the wp-config.php file is in the root folder.