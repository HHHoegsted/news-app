# News-app

This is a simple news-app to show my capabilities in simple Laravel with Bootstrap, and creating and running Docker containers. 
I have coded all custom parts of this project.

## Starting up the project

* git clone
* docker-compose up -d --build
* cd src
* cp .env.example .env
* composer install
* npm install
* npm run dev
* docker-compose run --rm artisan migrate:fresh --seed
* http://localhost:8081

## Running Artisan, Composer and NPM

* docker-compose run --rm artisan ...
* docker-compose run --rm composer ...
* docker-compose run --rm npm ...

Or, you could make an alias in your .bashrc for the first part of the command like this:
alias dcr='docker-compose run -rm'