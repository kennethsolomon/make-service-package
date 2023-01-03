# Installation

### /config/filesystem.php

- Add this inside 'disk' array
- 'services' => [
  'driver' => 'local',
  'root' => 'app/Services',
  'throw' => false,
  ],


### composer require kennethsolomon/make-service

# How to use

### Just type `php artisan make:service FoobarService`
