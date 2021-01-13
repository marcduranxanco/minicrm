
# Mini CRM
Marc Duran

## Objectives
# Auth Objectives
- Use Laravel make:auth as default Bootstrap-based design theme, but remove ability to register

```
composer require laravel/ui
php artisan ui bootstrap --auth
```

- Basic Laravel Auth: ability to log in as administrator
- Use Laravel make:auth as default Bootstrap-based design theme, but remove ability to register
- Use database seeds to create first user with email admin@admin.com and password “password”
# CRUD Objectives
- CRUD functionality (Create / Read / Update / Delete) for two menu items: Companies and Employees.
- Companies DB table consists of these fields:
    - Name (required)
    - Email
    - logo (minimum 100×100)
    - website
- Employees DB table consists of these fields:
    - First name (required)
    - last name (required)
    - Company (foreign key to Companies)
    - Email
    - phone
- Use database migrations to create those schemas above
- Store companies logos in storage/app/public folder and make them accessible from public
- Use basic Laravel resource controllers with default methods – index, create, store etc.
- Use Laravel’s validation function, using Request classes
- Use Laravel’s pagination for showing Companies/Employees list, 10 entries per page
