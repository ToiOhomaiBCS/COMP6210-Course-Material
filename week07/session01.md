---
course: COMP6210
week: 07
lesson: "01"
topic: php-unit
---

# Install

* recca0120.vscode-phpunit
* emallin.phpunit

# Testing your code

* `composer require phpunit/phpunit`
* `phpunit --version`
* `composer dump-autoload -o`

```
{
    "require": {
        "phpunit/phpunit": "^8.2"
    },
    "autoload": {
        "psr-4": {
            "App\\": "app"
        }
    }
}
```

```
<xml version="1.0" encoding="UTF-8">
<phpunit bootstrap="vendor/autoload.php"
         colors="true"
         verbose="true"
         stopOnFailure="false">
  <testsuites>
    <testsuite name="Test Suite">
      <directory>tests</directory>
    </testsuite>
  </testsuites>
</phpunit>
```