The solution is to use strict comparison (`===`) instead of loose comparison (`==`).  Strict comparison requires both value and type to be the same.

```php
$value = 0;

if ($value === false) {
  echo 'Value is considered false';
} else {
    echo 'Value is NOT considered false';
}

$value = '0';

if ($value === false) {
  echo 'String value "0" is considered false';
} else {
    echo 'String value "0" is NOT considered false';
}

$value = 'false';

if ($value === false) {
  echo 'String value "false" is considered false.';
} else {
    echo 'String value "false" is NOT considered false.';
}
```