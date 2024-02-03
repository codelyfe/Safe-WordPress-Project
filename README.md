# Safe WordPress Project ( Guide ) 2024
How can we build a safer WordPress for everyone?

# .htaccess
1. Limit Access to wp-admin Directory
2. Prevent Directory Browsing
3. Protect .htaccess File
4. Block Suspicious IP Addresses
5. Prevent PHP Execution in Certain Directories
6. Force HTTP
7. Protecting wp-config.php
8. Security Headers

# wp-config.php
Safely configure your /wp-config.php file using the methods provided. ( May need to edit the configurations to work with your WordPress website. )

# /wp-content/
1. /uploads/ - Added .htaccess
2. /plugins/ - Custom Plugins

# Other Tips
1. Change passwords often.
2. Backup File Directory and Database everytime you make major changes.

# Recommended Plugins
1. WordFence - FREE VERSION - https://www.wordfence.com/products/wordfence-free/
2. Patchstack - FREE VERSION - https://wordpress.org/plugins/patchstack/

# Helpful Links
1. FAQ - My Site Was Hacked - https://wordpress.org/documentation/article/faq-my-site-was-hacked/
2. Salt Shaker - https://api.wordpress.org/secret-key/1.1/salt/
3. WordPress XML-RPC Validation Service - https://xmlrpc-check.hostpress.me/


# Suspicious Files
1. th3_alpha.php - https://wordpress.org/support/topic/suspected-malware-attack/

 
# Manually backing up a WordPress site involves exporting your database and saving your website files. Here's a step-by-step guide on how to do this:

## Database Backup:

Access your database:

Log in to your hosting account's control panel (e.g., cPanel).

Find the "phpMyAdmin" tool and open it.

Select your WordPress database:

On the left side, you'll see a list of databases. Click on the one associated with your WordPress site.

Export the database:

Click on the "Export" tab.
Choose the "Quick" or "Custom" export method. Quick is usually sufficient.
Click "Go" to download the SQL file.

## File Backup:

Access your site files:

Use an FTP client (e.g., FileZilla) or your hosting's file manager to connect to your site's server.

Locate and download your WordPress files:

Navigate to the root directory of your WordPress installation (where you see folders like wp-content, wp-admin, and wp-includes).

Download all the files and folders in the root directory.

## Additional Content:

Theme and Plugin Files:

If you have custom themes or plugins, you may want to back up their directories from the wp-content/themes and wp-content/plugins folders.
Uploads Folder:

If your uploads (images, videos, etc.) are stored in the wp-content/uploads folder, you might want to back up this directory as well.
Important Notes:

Save your backup files in a secure location.

Regularly update your backups, especially before making significant changes to your site.

Use a reliable plugin or service for automated backups if you prefer a more straightforward solution.

## Restoring from Backup:
To restore your site, you would typically reverse the process, importing the database and uploading the files to your server.
