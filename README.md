# Team Manager Application

## Overview

The **Team Manager Application** is a web-based tool designed to streamline the management of teams within an organization. It provides features for managing team members, assigning tasks, tracking progress, and generating reports. The application leverages a combination of frontend technologies (HTML, CSS, JavaScript) and backend technologies (PHP, MySQL) to deliver a responsive and user-friendly interface.

## Features

- **User Management**: Add, edit, and remove team members, with role-based access control.
- **Task Assignment**: Easily assign tasks to team members, set deadlines, and monitor progress.
- **Dashboard Overview**: Get a quick overview of team performance and task status on the dashboard.
- **Reporting**: Generate reports to track team productivity and task completion.
- **Responsive Design**: The application is fully responsive, ensuring a smooth experience across devices.

## Requirements

- **Web Server**: Apache or any other compatible web server.
- **PHP**: Version 7.x or later.
- **MySQL**: For database management.
- **Node.js** (Optional): For compiling SASS files if customization is required.

## Installation

1. **Clone the Repository**:

    ```bash
    git clone https://github.com/yourusername/team-manager.git
    cd team-manager
    ```

2. **Set Up the Database**:

   - Create a MySQL database.
   - Import the provided SQL file to set up the database schema and initial data.

    ```sql
    mysql -u username -p database_name < database.sql
    ```

3. **Configure the Application**:

   - Update the database configuration in the `config.php` file with your database details.

    ```php
    $db_host = 'localhost';
    $db_user = 'your_username';
    $db_pass = 'your_password';
    $db_name = 'your_database_name';
    ```

4. **Deploy the Application**:

   - Copy the project files to your web server's root directory (e.g., `/var/www/html/team-manager`).
   - Ensure the web server has write permissions to certain directories if needed (e.g., for file uploads).

5. **Compile SASS (Optional)**:

   If you wish to customize the styles, you can compile the SASS files located in the `scss/` directory.

    ```bash
    npm install
    npm run build-css
    ```

6. **Access the Application**:

   Open your browser and navigate to `http://localhost/team-manager` (or the appropriate URL for your server).

## Project Structure

- **`styles/`**: Contains CSS files, including Bootstrap and custom styles.
- **`scss/`**: SASS files for generating custom CSS.
- **`js/`**: JavaScript files handling frontend interactivity.
- **`images/`**: Image assets used throughout the application.
- **`php/`**: Contains backend PHP scripts managing the application's logic.
- **`database.sql`**: SQL file for setting up the application's database.
- **`config.php`**: Configuration file for database connection and other settings.

## Contributing

Contributions are welcome! Feel free to submit a pull request or open an issue for any suggestions or improvements.

## Acknowledgements

This project was developed to help teams efficiently manage their tasks and improve productivity through streamlined task assignments and progress tracking.
