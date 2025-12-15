LaraEstate
A simple, robust Real Estate application built with Laravel and Bootstrap. This project demonstrates core web development concepts including MVC architecture, CRUD operations, Image Uploading, and User Authentication.

Features
User Authentication: Secure Login and Registration system.

Property Listings: View all available houses with images and prices.

Property Management:

Create: Upload new properties with photos.

Read: View detailed property pages.

Update: Edit property details and prices.

Delete: Remove sold properties from the listing.

Image Handling: Secure file storage and public linking.

Prerequisites
Before running this project, ensure you have the following installed:

XAMPP (PHP >= 8.1 & MySQL)

Composer (PHP Dependency Manager)

Web Browser (Chrome/Edge/Firefox)

Installation Guide
Follow these steps to set up the project on your local machine.

1. Clone the Repository
Open your terminal and run:

Bash

git clone https://github.com/kazmisohail/LaraEstate.git
cd LaraEstate
2. Install Dependencies
Download the necessary Laravel libraries:

Bash

composer install
3. Environment Setup
Duplicate the example environment file:

Bash

cp .env.example .env
4. 🗄️ Database Setup (Important!)
We follow a "One Database, One User" security policy. Do not use the root account.

Open phpMyAdmin (http://localhost/phpmyadmin).

Create the Database:

Name: lara_estate

Collation: utf8mb4_unicode_ci

Create the Specific User:

Go to User Accounts > Add user account.

User name: lara_user (or your preferred name)

Password: secure_password (choose a strong password)

Grant all privileges on database "lara_estate": Check the box that says "Grant all privileges on database lara_estate".

Update your .env file: Open the .env file in VS Code and update the database section to match the user you just created:

Ini, TOML

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=lara_estate
DB_USERNAME=lara_user      <-- The specific user you created
DB_PASSWORD=secure_password <-- The password you set
5. Generate App Key
This key encrypts your user sessions and passwords.

Bash

php artisan key:generate
6. Run Migrations
Build the tables in your database:

Bash

php artisan migrate
7. Link Storage (For Images)
Create the shortcut so public users can see uploaded images:

Bash

php artisan storage:link
Running the Project
Start the local development server:

Bash

php artisan serve
Open your browser and visit: http://127.0.0.1:8000

Testing the App
Register: Click "Register" in the top right to create an account.

Add Property: Once logged in, click "+ Sell House".

Upload: Fill in the details and upload a JPG/PNG image.

Edit/Delete: Go to the details page of your property to modify or remove it.

Project Structure
app/Models - Contains the Database Models (User, Property).

app/Http/Controllers - Contains the logic (PropertyController, AuthController).

resources/views - Contains the HTML/Blade files.

routes/web.php - Contains all the URL definitions.

License
This project is for educational purposes.