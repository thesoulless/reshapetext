# Reshape bidirectional text for Laravel 5
## اصلاح متن فارسی روی عکس


[![Latest Version on Packagist][ico-version]][https://packagist.org/packages/thesoulless/reshapetext]
[![Software License][ico-license]](LICENSE.md)

Reshapes a bidirectional text to use with imaging libraries (GD, etc.





## Install

Via Composer

``` bash
$ composer require thesoulless/reshapetext
```

## Usage

``` php
$text = "متن راست به چپ";
$text = \Reshapetext::reshape($text);
```


## Credits

This Laravel package is based on [Persian-Log2Vis](https://github.com/omid/Persian-Log2Vis)
