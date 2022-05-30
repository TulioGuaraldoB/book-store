# Book Store - API

<img src="https://upload.wikimedia.org/wikipedia/commons/thumb/b/b5/Death_Note%2C_Book.svg/1200px-Death_Note%2C_Book.svg.png" width="25%" align="right" />

**book-store** is the Server Side part of a Full-Stack project to semester's final grade. <br/>
Thanks to Professor [Alexandre Gomes](https://github.com/xandygomes) for all the saturday classes.
A simple Laravel Lumen Project.

## Created with: 
[*PHP:*](https://www.php.net/) A popular general-purpose scripting language that is especially suited to web development.

[*MySql:*](https://www.mysql.com/) A relational database management system (RDBMS) developed by Oracle that is based on structured query language (SQL).

[*Composer:*](https://getcomposer.org/) Composer is a tool for dependency management in PHP. It allows you to declare libraries your project depends on and it manages installation and library service updating.

[*Lumen:*](https://lumen.laravel.com/docs/9.x) An open-source PHP HTTP micro-framework created by Taylor Otwell as an alternative to Laravel to meet the demand of lightweight installations.

## Setting Up:
Clone the project to your machine by running:
```
git clone https://github.com/TulioGuaraldoB/book-store.git
```

Then run the command:
```
composer install
```
To build all project dependencies to your project.

<br/>

Create **.env** file then clone all the content from .env.example file.
Then fill the .env variables with your project settings:
- **DB_CONNECTION**
- **DB_HOST**
- **DB_PORT**
- **DB_DATABASE**
- **DB_USERNAME**
- **DB_PASSWORD**

## Running the project:
To run the project at your machine run the following command at your bash:
```
php -S localhost:{YOUR_HTTP_PORT} -t public
```
Change **{YOUR_HTTP_PORT}** by the PORT of your preference. Example: 8080.
