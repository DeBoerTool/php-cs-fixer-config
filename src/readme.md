# De Boer Tool PHP-CS-Fixer Config

## Installation

```shell script
composer require --dev dbt/php-cs-fixer-config
```

If you don't already have a `.php_cs.dist` configuration file, create one in your project root:

```shell script
touch .php_cs.dist
```

Then fill it out:

```php
<?php

use Dbt\PhpCsFixerConfig\Loader;
use PhpCsFixer\Finder;

$finder = Finder::create()->in([
    __DIR__ . '/src',
    // Add your own directories here.
]);

// If you want to add your own rules. If you specify a rule that already exists
// in the base ruleset, your local rule will take precedence and override the
// base rule. 
$localRules = require(__DIR __ . '/rules.php');

$loader = Loader::new($finder, $localRules);

// If you want to turn off risky tests.
$loader->disallowRisky();

return $loader->getConfig();
```

## Composer

You can optionally add Composer scripts to your `composer.json` so you don't have to run PHP-CS-Fixer from your vendor directory each time. For example:

```json
{
  "scripts": {
    "cs": "php-cs-fixer fix",
    "cs-dry": "php-cs-fixer fix --dry-run"
  }
}
```

## PHPStorm

https://www.jetbrains.com/help/phpstorm/using-php-cs-fixer.html

# License

MIT. Do as you wish.
