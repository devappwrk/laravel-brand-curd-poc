<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About Admin Panel



https://www.loom.com/share/3a1b64b2fc8942d391d44d91aedd7997


Admin-panel to manage Phones:
Basically, project to manage Phone brands and their products. Mini-CRM.
Required at least:
Basic Laravel Auth: ability to log in as administrator - 10
Use database seeds to create first user with email admin@admin.com and password “password” - 10
CRUD functionality (Create / Read / Update / Delete) for two menu items: Brand and Product. 10
Brand DB table consists of these fields: Name (required), website, 
Product DB table consists of these fields: name (required), Model no (required), Brand (foreign key to Brand),  5
Use database migrations to create those schemas above
Use basic Laravel resource controllers with default methods – index, create, store etc.10 
Use Laravel’s validation function, using Request classes
Use Laravel’s pagination for showing Brands/Products list, 10 entries per page
Use Laravel make:auth as default Bootstrap-based design theme, but remove ability to register
Extra Task:
Make the project multi-language (using resources/lang folder)