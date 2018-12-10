# SimpleFactory
Basic Factory code for php 
Add an automatic class.

# Start Php Serve
php -S localhost:1234

# Add Project

```php
require_once  __DIR__ ."/vendor/autoload.php";
```

# Use
Add your class to the classes folder.
```php
use App\factory;
$test = factory::load("testme");
```
**Output**

`Test is worked`




