# zenstruck\string-twig

[![Build Status](http://img.shields.io/travis/kbond/string-twig.svg?style=flat-square)](https://travis-ci.org/kbond/string-twig)
[![Scrutinizer Code Quality](http://img.shields.io/scrutinizer/g/kbond/string-twig.svg?style=flat-square)](https://scrutinizer-ci.com/g/kbond/string-twig/)
[![Code Coverage](http://img.shields.io/scrutinizer/coverage/g/kbond/string-twig.svg?style=flat-square)](https://scrutinizer-ci.com/g/kbond/string-twig/)
[![Latest Stable Version](http://img.shields.io/packagist/v/zenstruck/string-twig.svg?style=flat-square)](https://packagist.org/packages/zenstruck/string-twig)
[![License](http://img.shields.io/packagist/l/zenstruck/string-twig.svg?style=flat-square)](https://packagist.org/packages/zenstruck/string-twig)

Twig integration for [zenstruck/string](https://github.com/kbond/string).

## Installation

    composer require zenstruck/string-twig

## Manual Setup

See [the Twig documentation for more information](http://twig.sensiolabs.org/doc/api.html#using-extensions)

```php
use Zenstruck\String\Bridge\Twig\StringExtension;

$twig->addExtension(new StringExtension());
```

## Add to a Symfony Project

Add to your `config.yml`:

```yaml
services:
    zenstruck.string.twig_extension:
        class: Zenstruck\String\Bridge\Twig\StringExtension
        public: false
        tags:
            - { name: twig.extension }
```

## Usage

For full function documentation, see [zenstruck\string](https://github.com/kbond/string).

```jinja
{{ remove_whitespace('  foo   bar') }} {# 'foo bar' #}

{{ null_trim('   ') }} {# null #}

{{ truncate_word('      foo       bar  baz', 10) }} {# 'foo bar..' #}
```
