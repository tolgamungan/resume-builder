# PHP-Laravel Resume Builder App

## ℹ️ Overview
** A resume builder app that you can build resumes, view/delete past resumes, view/edit/delete resume items **

## 🚀 Quick Start

npm install && npm run dev

composer install

composer dump-autoload

.env.example -> .env and change to sqlite

create database.sqlite in database

php artisan key:generate

php artisan migrate

## Some useful commands

laravel new resume-builder
-Build new application

composer require laravel/ui
-Get the laravel user interface tools

php artisan ui vue --auth
-Get the laravel Vue authentication

npm install && npm run dev * 2

php artisan serve
-Serve the site on localhost

php artisan make:migration create_resumeItems_table --create=resume_items
-Build the database table to hold resume items

php artisan make:migration create_generatedResumes_table --create=generatedResumes
-Build the database table to hold resumes

php artisan make:migration create_resumeRelations_table --create=resumeRelations
-Build the database table to hold the relations between resume items and resumes

php artisan make:seeder ResumeItemsTableSeeder
-Create a seeder for our resume items table

php artisan migrate
-Migrate the tables into the databas

composer dump-autoload
-Clear the autoloader

php artisan db:seed
-Seed the database with seeders

php artisan make:controller ResumeController
-Make a controller for our resume work

php artisan make:controller ManagerController
-Make a controller for our admin end

php artisan route:list
-Check existing routes 


## ✍️ Author

**Tolga Mungan**

* Website: [tolgamungan](https://tolgamungan.com)
* LinkedIn: [tmungann](https://www.linkedin.com/in/tmungan/)
* Twitter: [@tolgamungan](https://twitter.com/tmungann)

> [Buy me a coffee ☕](https://www.buymeacoffee.com/tolgamungan) and **support further development**!

## Licence

Released under [The MIT License](LICENCE)