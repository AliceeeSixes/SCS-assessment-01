# Netmatters Homepage Recreation

## Overview
This project is a recreation of the homepage of web development firm Netmatters, the original version of which can be found here: https://www.netmatters.co.uk/

This project uses HTML, CSS (using SASS), JavaScript (using jQuery), PHP (written using version 8.3.6), and SQL

## Running this project locally
This project uses a MYSQL database. This must be set up, and the appropraite details must be placed into a .env file. An example .env is provided in the project.
The steps for running thsi project locally are:
1. Set up a local MYSQL database with a table `MESSAGES` which has fields `NAME, COMPANY, EMAIL, PHONE, MESSAGE, MARKETING`
2. Place the databse connection details into a .env file following the example provided
3. Host both the PHP code and the MYSQL database.
