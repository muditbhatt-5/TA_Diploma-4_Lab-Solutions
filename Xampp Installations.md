# XAMPP Installation Guide

## Introduction
XAMPP is a free and open-source cross-platform web server solution package developed by Apache Friends. It consists mainly of the Apache HTTP Server, MariaDB database, and interpreters for scripts written in PHP and Perl.

## Prerequisites
- A computer running Windows, Linux, or macOS
- An internet connection

## Step 1: Download XAMPP
1. Go to the official XAMPP website: [https://www.apachefriends.org](https://www.apachefriends.org)
2. Select the version suitable for your operating system (Windows, Linux, or macOS)
3. Download the installer

## Step 2: Install XAMPP
1. Open the downloaded installer.
2. If prompted by the system (User Account Control on Windows), click "Yes".
3. Follow the installation wizard:
   - Select components (Apache, MySQL, PHP, etc.). You can leave the defaults.
   - Choose the installation directory (default is usually `C:\xampp` on Windows).
   - Click "Next" and wait for the installation to complete.

## Step 3: Start XAMPP
1. Launch XAMPP Control Panel.
2. Start the Apache and MySQL modules by clicking the "Start" button next to each.
3. Check if the server is running by visiting [http://localhost](http://localhost) in your web browser.

## Step 4: Test PHP
1. Go to the XAMPP installation directory (e.g., `C:\xampp\htdocs`).
2. Create a new file named `test.php`.
3. Add the following code:
   ```php
   <?php
   echo "XAMPP is working!";
   ?>
   ```
4. Visit `http://localhost/test.php` in your browser. You should see "XAMPP is working!"

## Troubleshooting
- **Port issues:** Ensure no other applications (e.g., Skype) are using port 80 or 443.
- **Permission issues:** On Linux or macOS, use `sudo` if you face permission errors.

## Uninstalling XAMPP
1. Stop all running modules.
2. Open the XAMPP uninstaller or delete the installation folder manually.
3. Optionally, remove any associated databases or configuration files.

## Conclusion
You now have a working XAMPP installation! Happy coding! 🚀

