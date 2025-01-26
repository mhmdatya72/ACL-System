# ACL System - Laravel

This is an Access Control List (ACL) system built with Laravel. It allows for managing groups, permissions, and linking users to specific permissions via a user-friendly web interface.

## Features

- Group management (Add, Edit, Delete groups).
- Permission management (Add, Edit, Delete permissions).
- Assign permissions to groups dynamically.
- Link users to specific permissions.
- Full security and access control using Laravel middleware.

## Requirements

- PHP 8.0 or higher.
- Composer.
- MySQL (or any supported database by Laravel).

## Installation Instructions

### 1. Clone the repository

1. Clone the repository:
    ```sh
    git clone https://github.com/mhmdatya72/ACL-System.git
    ```

2. Install dependencies:
    ```sh
    composer install
    ```

3. Create a new database in MySQL (e.g., acl_system).

4. Update the database connection settings in the `.env` file:
    ```makefile
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=acl_system
    DB_USERNAME=root
    DB_PASSWORD=your_password
    ```

5. Run migrations to create the database tables:
    ```sh
    php artisan migrate
    ```

6. Seed the database with default values (groups, permissions):
    ```sh
    php artisan db:seed
    ```
    This will populate your database with sample groups and permissions.

7. Start the development server:
    ```sh
    php artisan serve
    ```

## How to Use

### Manage Groups

- You can view all groups via the "Group Management" page.
- Add a new group by clicking the "Add New Group" button.
- Edit or delete groups directly from the table.

### Manage Permissions

- You can add and edit permissions within the app.
- For each group, you can assign specific permissions via the "Manage Permissions" page.

### Security

- All operations are protected by middleware to ensure only authorized users can make changes.

## Technologies Used

- Laravel 10.x
- Blade Templates
- MySQL Database
- Bootstrap (for UI styling)

