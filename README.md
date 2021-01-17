
# Mini CRM
Marc Duran

## Objectives
### Auth Objectives
:heavy_check_mark: Use Laravel make:auth as default Bootstrap-based design theme, but remove ability to register

```
composer require laravel/ui
php artisan ui bootstrap --auth
```
:heavy_check_mark: Basic Laravel Auth: ability to log in as administrator

### DB Objectives
```
Companies DB table consists of these fields:
    · Name (required)
    · Email
    · logo (minimum 100×100)
    · website
Employees DB table consists of these fields:
    · First name (required)
    · last name (required)
    · Company (foreign key to Companies)
    · Email
    · phone
```
:heavy_check_mark: Use database migrations to create those schemas above
```
php artisan make:migration create_companies_table
php artisan make:migration create_employees_table
...
php artisan migrate
```
Model creation:
```
php artisan make:model Company
php artisan make:model Employee
```
:heavy_check_mark: Use database seeds to create first user with email admin@admin.com and password “password”
```
php artisan make:seeder UserAdminSeeder
...
php artisan db:seed --class=UserAdminSeeder
```

# CRUD Objectives
:heavy_check_mark: CRUD functionality (Create / Read / Update / Delete) for two menu items: Companies and Employees.
:heavy_check_mark: Use basic Laravel resource controllers with default methods – index, create, store etc.
```
php artisan make:controller CompanyController --resource --model=Company
php artisan make:controller EmployeeController --resource --model=Employee
```

- Use Laravel’s validation function, using Request classes
- Use Laravel’s pagination for showing Companies/Employees list, 10 entries per page

- Store companies logos in storage/app/public folder and make them accessible from public
```
php artisan storage:link
```
