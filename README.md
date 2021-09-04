# Kiddocare Assignment

Thank you for applying to our PHP Developer position at Kiddocare. For our selection process, we would require that you complete this assignment and send them before 5pm, 11th September 2021, Kuala Lumpur time.

Please read the instructions carefully.

## Assignment 1

You are required to make an authentication process for this project. A user should be able to login, access a secure page, and logout. Without a valid login, a user should not be able to access the secure page, and will be redirected to login.php.

Below are the files that must be present in this project.

1. `index.php` -- the secure page
2. `login.php` -- to display the login screen
3. `users.txt` -- conatins user credentials for authentication

### Rules

1. User credentials for authentication must be accessed from `users.txt` file. Do not import this into your MySQL database.
2. Each row in `users.txt` contains the following information `<username>`|`<password>`
3. You are **not allowed** to use any PHP frameworks
4. You are **not allowed** to use Composer to import any external libraries
5. You are **allowed** to use any CSS framework like Tailwind or Bootstrap
6. You are **allowed** to use any frontend Javscript libraries like jQuery or VueJS
7. You are **not allowed** to use NPM, Yarn or any other CLI for frontend libraries.
8. Any frontend libraries for CSS and/or Javascript must be added via CDN. 
9. Your own custom CSS and Javascript files must be added on /css and /js folder respectively

## Assignment 2

Continuing from **Assignment 1**, the secure page is to be developed into a dashboard that displays data from `northwind` database.
