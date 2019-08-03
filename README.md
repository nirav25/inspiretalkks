inspiretalks

first open terminal and enter this command

composer update

# if ypu can't find .env file than just copy all code of .env.example file and past in new file name as .env

in .env file line no. 9 to 14 are for cofigure database

DB_CONNECTION=mysql   (database type)
DB_HOST=localhost     
DB_PORT=3306
DB_DATABASE=inspiretalks   (database name)
DB_USERNAME=root           (db username)
DB_PASSWORD=               (password if you set)

then run command

php artisan migrate

password(12345678): $2y$10$Tzq78qWccfYSIRDdu5SpPuXwqKSXYsSwhyINdVexw4uTjxeG7yxeu 

postman link:

https://www.getpostman.com/collections/04797a3854df0a54f1b7