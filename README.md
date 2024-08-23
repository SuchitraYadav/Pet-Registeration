# Pet Care Management System

## Overview
The Pet Care Management System is a web-based application designed to help pet owners manage various aspects of pet care, including registration, login, and maintenance of pet and owner information. The application provides an intuitive interface for users to manage their pets, schedule walking services, consult veterinarians, and more. The backend of the application is powered by a MySQL database hosted on XAMPP.

## Features
* User Registration and Login: Users can register themselves by providing their details and logging in with valid credentials.
* Pet Owner Management: Users can add, update, and view their information, such as address, city, state, and zip code.
* Pet Management: Users can add and manage details about their pets, such as species, age, color, weight, and vaccination status.
* Service Navigation: The application provides easy navigation for services like pet walking, veterinary consultation, food options, and more.

## Installation

1. Clone the repository

2. Setup the database:
* Install XAMPP.
* Start the Apache and MySQL services from the XAMPP Control Panel.
* Open phpMyAdmin and create a database named loginn.
* Import the provided SQL files to set up the database tables.

3. Configure the project:
Ensure that the database credentials in your PHP files match the setup in your MySQL server (default is usually root with no password).

## Usage

### Registration and Login

* Registration: Users need to provide their name, ID, contact number, and a password to register.
* Login: Registered users can log in using their username and password.
  
### Pet Owner and Pet Management

* Owner Information: After logging in, users can add their address details, including city, state, and zip code.
* Pet Details: Users can add pet details like species, age, color, weight, and vaccination status.
  
### Navigation and Services

* Main Navigation: The navigation bar allows users to access different services such as pet walking, veterinary consultation, food, and more.
* Logout: Users can securely log out from their session.
  
### Code Structure

* index.php: The homepage of the application.
* registration.php: Handles user registration.
* login.php: Handles user login.
* owner.php: Manages pet owner details.
* petdetails.php: Manages pet details.
* category.php: Provides navigation to various pet services.
* styles.css: Contains all CSS for the frontend styling.
* catphp.php: Includes PHP logic for category selection.
  

## Technologies Used

### Frontend:
* HTML5
* CSS3
* JavaScript

### Backend:
* PHP
* MySQL (via XAMPP)

### Database:
* MySQL

### Server:
* XAMPP (Apache)
