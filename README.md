<h1>Laravel/Angular themes</h1>

The following demo showcases the use of Laravel as well as Angular 2+ with a Laravel backend. 

Getting started: 
    
    1. Clone this repo in a linux distribution (tested on Windows 10 with Ubuntu 20.04)
    2. Install docker for your environment ( If using Win10/Ubuntu, make sure to point docker to WSL2 for better performance )
    3. Start Docker
    4. Open a terminal in project root
    5. Run the following command: ( docker run --rm \ -v $(pwd):/opt \ -w /opt \ laravelsail/php80-composer:latest \ composer install )
    6. Set an alias via terminal: ( alias sail='bash vendor/bin/sail' )
    7. Start up docker container: ( sail up -d }
    8. After everything starts up, wait about 30seconds. (Mysql container sometimes isn't fully loaded yet)
    9. Set up databases: ( sail artisan migrate )
    10. You're done! Open up http://localhost on Chrome or Firefox and test things out!


Project requirements:

    1. Create a Laravel Project.
    2. Push appropriate files to github/bitbucket.
    3. Create a route that display/update and create data in a database table
    3a. Use a model
    3b. Use Blade Template engine
    4. Create the relevant table as a migration
    5. Display, update and create front end for the data.
    6. The turn around time expectation is 1 week.
    
Extra request: 

    Include dynamic styling via Angular
    
<h2>What's inside?</h2>
<p>This project was built using Laravel Sail to create a dockerized version of a themes picker demo. The site allows you to generate/update/preview color themes for use in other projects. It features a Laravel backend with both a Laravel Blade and Angular front end to showcase both routes and api calls. It is currently set to run locally. This project has only been tested on Windows10 bash (Windows 10 Ubuntu integration) and works well on both Chrome and Firefox.</p>
 
 <p>A simplified Android version is available as well in the Android folder</p>
