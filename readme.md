Wordpress Site Instructions

-----Installations-----

--Install Php--
	http://php.net/downloads.php 
1. Download newest version of php
2. Extract the files from zip
3. Configure php.ini file
4. Enable mysql extension 
5. Add 90 seconds for runout time instead of 30 seconds. 
6. Add \php to the path environment 
7. Test a php file to check: <?php phpinfo(); ?>

--Install MySQL--
https://www.mysql.com/downloads/ 
	Make sure to select the old security option (both options have long paragraphs, you want the bottom part) security 
1. Make sure to get MySQL Server
2. Start download
3. Extract ZIP
4. Installer Steps - Find latest products
    a) Check boxes to connect to Internet and Fetch product update information.
5. Setup Type
    a) Server Only or Developer Default
6. Check Requirements
    a) Wait until all requirements are checked and fully installed
7. Installation 
    a) Execute all installations until they have a green check next to all them
8. Configuration 
    a) Configuration Overview. Click Next button to configure MySQL Database Server 
    b) Add user
        i) Root and “password”
9. Complete
    a) Click finish to finish the MySQL installation

--Install Phpstorm--
1. Get JetBrains Student License before installing PhpStorm
2. Download Windows/Mac version of PhpStorm
3. Run/Execute file
4. Welcome Page
    a) Next 
5. Install location
    a) Choose program location 
6. Installation options
    a) Next 
7. Choose start menu folder 
    a) Install 
    b) Wait for installation to be completed
8. Complete PhpStorm Setup
    a) Check Run PhpStorm and Finish 
9. Sign into PhpStorm with student license information 

--Download Wordpress--
1. https://wordpress.org/download/ 
2. Extract download into phpstorm
3. Open file in phpstorm
4. Find wp-config-sample.php
5. Copy and paste into the same folder with new name wp-config.php <br>
    5. If wp-config-sample.php was opened, close it
6. Go into view > tool windows > database
7. On the right hand side, a [Window] will appear. Click the little plus
8. In the drop down, select Data Source > MySQL
9. The console (labeled localhost with a dolphin icon) paste in the following commands 
    9. CREATE DATABASE wordpress;
    9. CREATE USER 'wordpressuser'@'localhost' IDENTIFIED BY 'password';
    9. GRANT ALL PRIVILEGES ON wordpress.* TO 'wordpressuser'@'localhost';
    9. FLUSH PRIVILEGES;
        9. Note that wordpress, wordpressuser and password can be whatever you want it to be (within constraints). Password is recommended to remain password 
10. Go into wp-config.php and change the following
    9. Database_name_here to ‘wordpress
    9. Username_here to ‘wordperssuser’
    9. Password_here to ‘password’
11. Save
12. Go to the top menu bar and go to Run>Edit Configurations 
    9. Click the plus and select PHP Built-in Web Server 
    9. Change the root to the file holding the wp-config inside 
    9. An error message will pop up at the bottom, click ‘Fix’
    9. Find your php executable and click it, and apply and ok
    9. Change localhost port to 8080 
    9. OPTIONAL Give it a name
    9. Hit ok
13. Go into Run and hit the green arrow / Run
14. Select the option clicked ‘untitled’ or whatever you named the configurations 
15. Go into your web browser and go to localhost:8080
    9. Pick a language 
16. Register 
    9. Pick any username you want but password should be password
17. Congratulations!

<b><u>Git Collaboration</u></b>

Create github account 
<br> 1. Sign up for github by following the instructions 

Download GIT
https://git-scm.com/downloads
1. Run application 
2. Accept license and continue 
3. Destination location of program 
4. Verify components and click next
5. Adjusting your path environment 
    5. Select use git from git bash only or use git from windows command prompt
6. Click next until install page. Install the program and wait for loading to finish 
7. Completing the GIT setup wizard
    3. Choose for desktop shortcut and finish setup

Attach Github to PhpStorm
1. Go into File > Settings
2. In the pop up, go to Version Control > GitHub
    1. Host should be github.com
    2. Login is github username
    3. Password is github password
2. Test

Create a repository
1. Click the ‘+’ near the top right, next to the profile page
2. Select ‘New Repository’ 
3. Give repository name 
    4. Optional, add .gitignore


Connect Repository to PHPStorm
1. Go into VCS > Checkout from Version Control > Git
2. Paste in the repository url
3. Test
4.  Hit ok / Clone

Add Collaborators
1. Enter the repository you wish to add a collaborator to.
2. On the same line as 'code', 'issues', etc, there should be an option called 'Settings.' Click it.
3. On the left hand side there’s a menu, go to collaborators
4. Enter your password
5. Add in as many collaborators as you have
6. Get your collaborators to accept the request. 

Branches in PHPStorm
1. On the project, go into VCS > Git > Branches 
2. On the menu that pops up, click the ‘+ New Branch’
3. If you have a branch you wish to select, those will appear
    4. If it will not let you, it’s likely because you have changes that you haven’t saved, so make sure to save and push those to where they need to go, or go into VCS > Git > Stash Changes and it will save them to the side
4. One person should be the one to send all changes to the master.
