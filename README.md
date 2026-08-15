# PHP Todo App

A simple Todo List web application built with PHP and MySQL.

## Features

- Create new tasks
- View all tasks
- Edit tasks
- Delete tasks
- Mark tasks as completed
- Change completed tasks back to pending
- Input validation
- Prepared Statements
- MySQL database integration

## Technologies

- PHP
- MySQL
- HTML
- CSS
- XAMPP
- Git
- GitHub

## Project Structure

- `index.php` - Displays all tasks
- `add.php` - Creates a new task
- `edit.php` - Displays the edit form
- `update.php` - Updates a task
- `delete.php` - Deletes a task
- `complete.php` - Marks a task as completed
- `pending.php` - Changes a task back to pending
- `db.php` - Database connection
- `database.sql` - Database schema
- `style.css` - Application styling

## Database Setup

1. Create the database using `database.sql`.
2. Configure your local database connection in `db.php`.
3. Start Apache and MySQL using XAMPP.
4. Place the project inside the XAMPP `htdocs` directory.
5. Open the application in your browser.

## Security

The project uses:

- Prepared Statements to prevent SQL Injection.
- Input validation for user-provided data.
- `htmlspecialchars()` when displaying user input.
- `.gitignore` to prevent database credentials from being uploaded.

## Author

Naziha Bniyan
