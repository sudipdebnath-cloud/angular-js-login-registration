# AngularJS Login and Registration

This project implements a simple user login and registration system using **AngularJS** (via CDN) on the frontend, and **PHP & MySQL** on the backend to handle data and authentication.

---

## Features

- User registration with form validation
- User login and logout functionality
- Session management using PHP
- Data stored in MySQL database
- AngularJS for dynamic frontend experience

---

## Technologies Used

- AngularJS (CDN)
- PHP
- MySQL
- HTML/CSS/JavaScript

---

## File Structure

/ (root)
|-- css/ # Stylesheets
|-- js/ # AngularJS controllers and scripts
|-- angular_db.sql # Exported MySQL database schema and data
|-- db_connection.php # PHP script for database connection
|-- index.php # Main landing page with login/register forms
|-- login.php # Backend login handler
|-- logout.php # Logout script to end user sessions
|-- register.php # Backend registration handler


---

## Setup Instructions

Clone the repository: git clone https://github.com/sudipdebnath-cloud/angular-js-login-registration.git
   
Create the MySQL database:

Use phpMyAdmin, MySQL Workbench, or MySQL CLI to create a new database.

Import the angular_db.sql file into your database to create necessary tables.

Configure database connection:

Open db_connection.php

Update the following variables with your MySQL credentials:

$connect = new PDO("mysql:host=localhost;dbname=angular_db", "root", "");

$host = "localhost";
$username = "root";
$password = "";
$dbname = "angular_db";

Run the project:

Copy the project files to your web server root directory (e.g., htdocs in XAMPP).

Start your Apache and MySQL services.

Open your browser and navigate to http://localhost/angular-js-login-registration/index.php

Usage
Register a new user via the registration form.

Login using your registered credentials.

Logout to end the session.

Contribution
Feel free to fork this repository and submit pull requests for improvements or bug fixes.

License
This project is open-source and free to use.

Contact
Created by Sudip Debnath
GitHub: sudipdebnath-cloud
Portfolio: https://sudipdebnath-cloud.github.io
Email: sudipdebnathofficial@gmail.com
