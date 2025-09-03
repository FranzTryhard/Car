## About CAR MODELS API

The Cars Model API allows developers to access and manage detailed information about different car models, including their specifications, performance, pricing, founder and availability. This API is designed for applications such as car dealership systems, automotive comparison apps, rental services, and online marketplaces.


## Project Overview
This API returns JSON data about cars. It has two main functions:
List all the cars available.
Return a random car from the list.

## Installation and Setup
This project uses Laravel 12.26.4 and PHP 8.2.12 (as per Laravel documentation).
The project files are stored locally in the htdocs folder of XAMPP.

## Requirements
PHP 8.2.12 or higher
Laravel 12.26.4
MySQL server (via XAMPP)

## Setup Steps
Clone this repository into your XAMPP htdocs folder.
Copy .env.example to .env and update database credentials if needed.
Run database migrations and seeders:

   ```bash
   php artisan migrate --seed
Start XAMPP and ensure MySQL service is running.

Start the Laravel server:

bash
Copy code
php artisan serve
API Endpoints
HTTP Method    URL    Description
GET    /api/cars    Get a list of all cars
GET    /api/cars/random    Get a random car from the list

Running the Project
Make sure XAMPP is running with MySQL.

Run php artisan serve to start the Laravel development server.

Testing
Test the API endpoints by visiting the URLs in your browser or using tools like Postman.

Database Migrations & Seeders
To create database tables and seed sample data, run:

bash
Copy code
php artisan migrate --seed
Dependencies
Laravel 12.26.4

PHP 8.2.12


<img width="1250" height="787" alt="image" src="https://github.com/user-attachments/assets/62c5776e-3ef6-48d5-bc2e-ff8adabc1a93" />
<img width="878" height="552" alt="image" src="https://github.com/user-attachments/assets/e4c179f5-0449-409a-aedf-9b33e5fa9689" />

