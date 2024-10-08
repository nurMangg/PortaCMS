![PortaCMS](https://github.com/user-attachments/assets/66646522-7382-48cd-b376-ff81ea94d332)


# PORTA CMS

PortaCMS is a custom-built content management system (CMS) designed specifically for managing portfolio websites. It leverages the powerful Laravel framework and includes several key plugins to enhance its functionality, making it easier to manage content efficiently.




## Screenshots

![App Screenshoot Portfolio](https://github.com/user-attachments/assets/69f6eb4e-35cb-472e-a6d2-e12894a32d5e)

![APP Screenshoot CMS](https://github.com/user-attachments/assets/ffd05a92-a1de-4eb3-bb07-d3773ebf3723)

## Documentation

## Prerequisites

- [Laravel](https://laravel.com/docs/9.x) (Laravel 9)
- [PHP](https://www.php.net/manual/en/install.php) (version 8.2 or later)
- [Composer](https://getcomposer.org/download/) (dependency manager for PHP)
- [MySQL](https://dev.mysql.com/downloads/installer/) or any compatible database

## Cloning the Repository


   **Clone the repository**:
   ```bash
      git clone https://github.com/nurMangg/PortaCMS.git
   ```

   **Composer Install  or Update**:
   ```bash
      composer install & composer update
   ```

   **PHP Artisan key generate**:
   ```bash
      php artisan key:generate
   ```

   **Import Database Portfolio_cms.sql** :
   ```bash
      Import file .sql in project to your database
   ```

   **Duplicate file .env.example and rename to .env**: 
   - Open the .env file in the project root directory and configure your database settings
   ```bash
      DB_CONNECTION=mysql
      DB_HOST=127.0.0.1
      DB_PORT=3306
      DB_DATABASE=your_database_name
      DB_USERNAME=your_database_username
      DB_PASSWORD=your_database_password
   ```

   **Set Public Disk** :
   ```bash
      php artisan storage:link
   ```

   **Finally, Run the Application** :
   ```bash
      php artisan serve
   ```

   - Login : admin@gmail.com
   - Password : admin123

   


## Authors

- [@nurmangg](https://www.github.com/nurmangg) (Build CMS)
- [@codewithsadee](https://github.com/codewithsadee/vcard-personal-portfolio) (Build Porto)

