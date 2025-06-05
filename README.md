<p align="center">
  <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="300"/>
</p>

<h1 align="center">HireHub - Job Portal in Laravel</h1>

<p align="center">
  <i>Modern web-based Job Portal system built with Laravel</i>
</p>

---

# HireHub - Job Portal in Laravel

HireHub is a web-based Job Portal developed using the Laravel PHP framework. It provides a platform where job seekers can register, build resumes, and apply for job openings, while companies can post and manage job listings efficiently.

## 🚀 Features

- 👤 User Registration and Login
- 🧾 Resume Builder Functionality
- 🏢 Company-side Job Posting and Management
- 📄 Admin Panel to Manage Job Listings, Users, and Companies
- 🔍 Job Search and Filtering by Category & Location
- 📑 Job Applications Tracking by User & Company
- 📊 Active vs Inactive User Reports (PDF export using DOMPDF)
- 🛡️ Middleware-based Session Checking for Admin/Agency Panels

## 🛠️ Tech Stack

- **Backend**: Laravel (PHP)
- **Frontend**: Blade Templating, Bootstrap, jQuery
- **Database**: MySQL
- **PDF Generation**: DOMPDF
- **Authentication**: Laravel Auth with Middleware
- **Others**: Ajax, Session Handling, Validation, Error Handling (try-catch)

## 📂 Folder Structure (Key Folders)
├── app/
│ ├── Http/
│ │ └── Controllers/
│ │ └── AdminControllers/
├── database/
│ └── migrations/
├── public/
├── resources/
│ └── views/
│ ├── auth/
│ └── admin/
├── routes/
│ └── web.php


## 🧑‍💻 How to Run the Project Locally

# Step 1: Clone the repository
git clone https://github.com/Sohailshaikh5656/HireHub.git

# Step 2: Navigate into the folder
cd HireHub

# Step 3: Install PHP dependencies
composer install

# Step 4: Create a .env file and configure your database
cp .env.example .env
# Update DB_DATABASE, DB_USERNAME, and DB_PASSWORD

# Step 5: Generate application key
php artisan key:generate

# Step 6: Run migrations
php artisan migrate

# Step 7: Serve the application
php artisan serve


🙋‍♂️ Author
Shaikh Sohel
🎓 MCA @ LJ Campus | BCA @ Govt. K.K. Shastri College
💼 Trained in Laravel, Django, Node.js, Flutter

...
