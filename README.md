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

php migrate

