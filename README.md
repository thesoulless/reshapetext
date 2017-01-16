# Reshape bidirectional text for Laravel 5
## اصلاح متن فارسی روی عکس


[![Packagist](https://img.shields.io/packagist/v/thesoulless/reshapetext.svg?style=flat-square)](https://packagist.org/packages/thesoulless/reshapetext)
[![license](https://img.shields.io/github/license/mashape/apistatus.svg?style=flat-square)](LICENSE.md)

Reshapes a bidirectional text to use with imaging libraries (GD, etc.).





## Install

Via Composer

``` bash
$ composer require thesoulless/reshapetext
```

Add

```
Thesoulless\Reshapetext\ReshapetextServiceProvider::class,
```

to `providers` and

```
'Reshapetext' => Thesoulless\Reshapetext\Facades\Reshapetext::class,
```

to `aliases` section of `config/app.php`

## Usage

``` php
$text = "متن راست به چپ";
$text = \Reshapetext::reshape($text);
```


## Credits

This Laravel package is based on [Persian-Log2Vis](https://github.com/omid/Persian-Log2Vis)
