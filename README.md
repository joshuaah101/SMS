# Welcome to NOUN ATTENDANCE MANAGEMENT

## About

This app is created as a web management application for noun. It focuses on handling all registration process,
attendance registering, creation of faculty, programs, departments, semesters, records for each semester and attendance
under each semester record. It also provides ability for inapp notification but due to the scope of the project, email
notification is not implemented.

## Frameworks

This project is build using Angular 13 framework of javascript and Laravel framework of php.

## Installation

Before Installation, make sure your local machine has [nodejs]('https://nodejs.org/en/download/') installed
and [composer]('https://getcomposer.org/download').

1. Extract all the content of this application into your local server folder e.g If you have xampp installed on your pc,
   then you should copy the project folder to your htdocs folder but if you are using wamp, copy it to your www folder
   in your wamp server.

2. Go to your ```localhost/phpmyadmin``` and create a new empty database called
   ```laravel_noun```
3. Open a terminal in the root folder of this project and test if your npm and composer is working by first typing the
   codes below:

```
npm -v
composer -v
```

This two commands should show you the current versions of both apps installed on your machine else read up on how to fix
issues on that.

4. Once your composer and nodeJs is working fine, run the following commands in two separate terminals in the root
   folder of the project.

```
composer install
npm i && npm run prod
```

this commands will compile the assets of the app and install it in the project folder. Also navigate to resources/angular folder and run ```npm i && npm i @angular/cli -g``` to provide you with the angular command cli for compiling angular assets

5. If commands run well without any error, then install demo records for testing purposes by running the command
   ```php artisan migrate:fresh --seed``` in the terminal

6. If the command runs successfully without any errors, run ```php artisan storage:link``` to link  your storage folder to your public folder. Last step is to run two commands in the two separate
   terminals to help you test the project in the browser.

```
php artisan serve
cd resources/angular && ng serve
```

This two commands will run the project app and keep them open as long as you do not close them. This concludes the steps
for testing your app on your local machine. 
