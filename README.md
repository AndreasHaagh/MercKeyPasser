# MercKeyPasser

Here is how you get the code enviorment on your pc to work.

## Set up

### First setting up the code repo

If you are a new developer, clik on the button that says "Branch: master". 
In the textbox that says "Find or create a branch..." type your name and click "Create branch (Your name) from 'master'".
After your branch has been created, click on the "clone or download" button and copy the url.
Find your faverorite git client or terminal and clone it to your pc.

### Set up developer enviroment

We use XAMPP for our developer eniroment.

Download XAMPP here and install it: https://www.apachefriends.org/index.html
After it is downloaded edit the httpd.conf, that can be done by click the config button in XAMPP and selecting it.
you need to change the "DocumentRoot" (It should be the second one if you search for it) and the "Directory" path. (The "Directory" path can be found under "DocumentRoot").
The path need to be chaged to the folder where you clone the code from github.

Optional: It can be a good ideer to change the port for XAMPP aswell.

After you are done with the config files press the start buttons on "Apache" and "MySql".

### Create the Database

Open up your faverorite sql tool and run the file "createDB.sql" in the "sql" folder in the code files.

If you're in need of some test data in the Database there is a file called "testData.sql" in "sql" folder you can run to fil the Database.

## Complete a task?

First you need to commit and push the changes to your branch. Then pull the master branch and see it is stil working.
If it is stil working then merge the master branch and your branch together on your branch.
Then link to the commit you made in the trello task and move it to the "review" list in trello.