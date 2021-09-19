<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About 

This is a template I created for future uses. This includes a simple task crud and sanctum for authentication

## Usage

- composer install

## List of routes

```php
#public routes
Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);
Route::get('/tasks', [TasksController::class, 'index']);
Route::get('/tasks/{id}', [TasksController::class, 'show']);
Route::get('/tasks/search/{name}', [TasksController::class, 'search']);

#protected routes
Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::post('/tasks', [TasksController::class, 'store']);
    Route::put('/tasks/{id}', [TasksController::class, 'update']);
    Route::delete('/tasks/{id}', [TasksController::class, 'destroy']);
    Route::post('/logout', [AuthController::class, 'logout']);
});
```
## To Do

Use SOLID Principles

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
