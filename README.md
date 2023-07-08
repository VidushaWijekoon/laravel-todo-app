Folder Structure

1.  App > Console > Kernel.php (Use For schedule / Every Month or Every Minute need make some update, do actions)
2.  App > Exceptions = (Error Handling)
3.  App > HTTP = Middleware > (Authentication)
4.  App > Models (Interact with Database)
5.  database > seesder > insert Dataset
6.  database > factories > create sample datas
7.  RouterServiceProvider > we can create URL directions

Laravel Jetstream UI Auth

create all the functions in services
and using throught facade

Use Facades for improve the security
create facede
create folder name

1. main folder
2. Facade Folder -> Bridge as a Data Tranfer
3. Services Folder -> All the actions happening
4. update composer.json -> inside autoload -> "domain\\": "domain/" composer dump-autoload

Laravel API

Create API php artisan make:controller API/TodoController --api
postman
create
body accept - application/json -> row change into json

relationship

seeders
only can create limited

fakers
usefull for testing purpose
