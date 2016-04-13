UNiDAYS &reg; Tech Blog
=======================

Wordpress instalation is managed via composer. 

##Update process:
0. Back up the database, the update process will probably modify it.
1. Go to https://github.com/WordPress/WordPress/tree/master and make a note of the latest tag. 
2. Update composer.json, replace current tag with latest version (lines 13 and 17)
3. cd to root folder and run 'composer update'
4. Login to the admin panel, it wil probably ask to update database. 
5. Wordpress should be updated now!

##Deployment process:
1. In the repository's root folder, run composer install. Composer will create a wordpress folder with WP in it.
2. Create a new "wp-config.php" inside the wordpress folder containing just these lines:
```
<?php
require(__DIR__.'/../wp-config.php');
/*  actual wp-config lives in the repository's root folder, 
    wordpress folder is not source controlled as it's managed via composer*/
```
3. Follow normal WP migration process: https://codex.wordpress.org/Moving_WordPress , keeping in mind that wp-config file that needs editing is in the root folder, not in /wordpress.