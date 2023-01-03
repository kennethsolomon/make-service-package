# Installation

### Type `composer require kennethsolomon/make-service`

# How to use

### Just type `php artisan make:service FoobarService`

# Inside Controller you can use

- Import FoobarService in your controller -> `use App\Services\FoobarService;`
- `$FoobarService = FoobarService::getInstance();`
- `$FoobarService->foo()` # Asumming that there has foo() method inside your service

or

```php
  protected $FoobarService;

  public function __construct(FoobarService $FoobarService)
  {
    $this->FoobarService = $FoobarService;
  }
```

- `$this->FoobarService->bar()` # Assuming that there has bar() method inside your service
