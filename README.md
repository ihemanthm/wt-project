# WT-project

This is a simple web page created using HTML, CSS, PHP, JavaScript, and MySQLi as a part of our academic project.

## Features

- Responsive design
- Interactive user interface with Bootstrap
- Database integration with MySQLi
- Server-side scripting with PHP

## Technologies Used

- HTML
- CSS
- Bootstrap
- PHP
- JavaScript
- MySQLi
## Pre requirements

- You need to install XAMPP server application for both windows and Ubuntu.
- You need to complete the server setup as well as database setup.
- Make sure that you have your database login credentials.
- Start the server as well as database.Modify the `config.php` file by replacing the credentials with your credentials.
- Create a database named wt using the following mysql query
  ```bash
    CREATE DATABASE wt;
  ```
- Create a table named students as
  ```bash
    CREATE TABLE students(
     id varchar(10) PRIMARY KEY,
     name varchar(50),
     gender varchar(10),
     dob DATE,
     phone BIGINT,
     email varchar(100),
     password varchar(100),
     year INT,
     section char(1));
  ```
- create another table named faculty as
  ```bash
    CREATE TABLE faculty(
     id varchar(10) PRIMARY KEY,
     name varchar(50),
     gender varchar(10),
     phone BIGINT,
     email varchar(100),
     password varchar(100),
     subject varchar(20));
  ```
- create another table named reviews as
  ```bash
    CREATE TABLE reviews(
      sno INT AUTO_INCREMENT PRIMARY KEY,
      id VARCHAR(10),
      name VARCHAR(50),
      email VARCHAR(100),
      phone BIGINT,
      content VARCHAR(1000),
      time_stamp DATETIME NOT NULL);
  ```
## For Beginners

<img align="right" width="300" src="./assets/screenshot1.png" alt="Download zip file" />

- Firstly Clone this repository into your local storage.To do that go to https://github.com/ihemanthm/wt-project ,and there click on the Code button.

- Once you clicked that button you will find a Download Zip option.Click that to download the zip file of this project.

- Now you have the source code in you laptop as a zip file.

- Extract the contents of that zip file and then rename the folder name from "wt-project-main" to "wt-project"

<img align="right" width="300" src="./assets/screenshot2.png" alt="Modify config.php file" />

- Now move this wt-folder to `/opt/lampp/htdocs` location if you are using ubuntu or to `C:\xampp\htdocs` if you are using windows.

- Now goto https://localhost/phpmyadmin in your browser to create a database and some tables whose schema is mentioned above.

- Open the `cofig.php` file and replace the credentials with your database credentials and also replace the database name with the one you have.

## Installation

1.  Fork this repository
2.  Clone this repository:

    ```bash
    git clone git@github.com:@username/wt-project.git
    ```
    replace your github username in place of @username.
    You can find and copy this url at the code section in ssh tab in your repositories section.
3. If you can't do so,just install the zip file of this code and extract its contents.
4. Set up your local server environment (e.g., XAMPP, WAMP, MAMP).
   
5. Update the database configuration in `config.php` file.

6. Open the project in your web browser (place your files in /opt/lampp/htdocs if you are using ubuntu or else C:\\xampp\htdocs\ in windows) .

## Usage

1. Start your local server environment,probably XAMPP server.
2. Make sure that you placed the project directory in /htdocs forlder.
3. Open the project in your web browser.(ex: localhost/wt-project/inde.html)
4. Explore the web page and interact with its features.

## Contributing

Contributions are welcome! Please follow these guidelines:

- Fork the repository
- Create a new branch (`git checkout -b feature`)
- Make your changes
- Commit your changes (`git commit -m 'Add new feature'`)
- Push to the branch (`git push origin feature`)
- Create a new Pull Request

## Team WTF

- [Mannar GSS](https://github.com/mannar-165)
- [Tharun Y](https://github.com/TharunYetti)
- [Hemanth Kumar M](https://github.com/ihemanthm)
