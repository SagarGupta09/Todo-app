# Laravel ToDo App

A simple **ToDo application** built with Laravel featuring **manual authentication** and **role-based access control**.

## Features

- Manual authentication system (login/register)
- Role-based access: Admin and User
- Admin can view and manage all users' tasks
- Users can view and manage only their own tasks
- Task management: Create, Update, Delete, Change Status
- Clean and structured workflow

## Installation

1. Clone the repository:
   ```bash
   git clone <repository-url>
   cd todo
Install dependencies:

composer install

Copy .env.example to .env and configure your database:

cp .env.example .env
php artisan key:generate


Run migrations:

php artisan migrate


Serve the application:

php artisan serve

Usage

Register as a user or admin (you can manually set role in database for admin)

Admin can view all tasks of all users

Users can view only their own tasks

Use the buttons to create, update, delete, or change the status of tasks
