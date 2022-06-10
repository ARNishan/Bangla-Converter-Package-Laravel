# Bangla-Converter-Package-Laravel

[![GitHub issues](https://img.shields.io/github/issues/ARNishan/Bangla-Converter-Package-Laravel)](https://github.com/ARNishan/Bangla-Converter-Package-Laravel/issues)
[![GitHub forks](https://img.shields.io/github/forks/ARNishan/Bangla-Converter-Package-Laravel)](https://github.com/ARNishan/Bangla-Converter-Package-Laravel/network)
[![GitHub stars](https://img.shields.io/github/stars/ARNishan/Bangla-Converter-Package-Laravel)](https://github.com/ARNishan/Bangla-Converter-Package-Laravel/stargazers)
[![GitHub license](https://img.shields.io/github/license/ARNishan/Bangla-Converter-Package-Laravel)](https://github.com/ARNishan/Bangla-Converter-Package-Laravel)

Bangla/Bengali string transformation library which can convert Bangla string Unicode/Avro to Bijoy and also Bijoy to Avro

## Installation

### Laravel
Require this package in your composer.json and update composer. This will download the package and the libraries also.

    composer require ar_nishan/bangla_converter

## Using

Just create a Translate Class instance and then call the predefined function.

```php
    $translator = new \ArNishan\BanglaConverter\Translate;
    $translator->unicodeToBijoy('আমার সোনার বাংলা');
    $translator->bijoyToUnicode('Avgvi ‡mvbvi evsjv');
    
```

Or use the facade:

```php
    use ArNishan\BanglaConverter\Facade\Translator;
    $translator = Translator::unicodeToBijoy('আমার সোনার বাংলা');
    $translator = Translator::bijoyToUnicode('Avgvi ‡mvbvi evsjv');

```

### License

This Bangla Converter for Laravel is open-sourced software licensed under the [MIT license](http://opensource.org/licenses/MIT)
