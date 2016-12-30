 ```
    ___        _                     _         _  _      __                                 _
   /   \ __ _ | |_  __ _  ___   ___ | |_  ___ | || |    / /   __ _  _ __  __ _ __   __ ___ | |
  / /\ // _` || __|/ _` |/ __| / _ \| __|/ __|| || |_  / /   / _` || '__|/ _` |\ \ / // _ \| |
 / /_//| (_| || |_| (_| |\__ \|  __/| |_ \__ \|__   _|/ /___| (_| || |  | (_| | \ V /|  __/| |
/___,'  \__,_| \__|\__,_||___/ \___| \__||___/   |_|  \____/ \__,_||_|   \__,_|  \_/  \___||_|
                                           DATA.OKFN COLLECTION - bluora/laravel-datasets-okfn
```

Provides datasets from [data.okfn.org](http://data.okfn.org/data) to be used with [H&H|Digital's Laravel Datasets Package](https://github.com/bluora/laravel-datasets).

[![Latest Stable Version](https://poser.pugx.org/bluora/laravel-datasets-okfn/v/stable.svg)](https://packagist.org/packages/bluora/laravel-datasets) [![StyleCI](https://styleci.io/repos/x/shield?branch=master)](https://styleci.io/repos/x) [![Built for Laravel](https://img.shields.io/badge/Built_for-Laravel-green.svg)](https://laravel.com/) [![License](https://poser.pugx.org/bluora/laravel-datasets/license.svg)](https://packagist.org/packages/bluora/laravel-datasets)

## Install

Via composer:

$ composer require bluora/laravel-datasets-okfn

## Configuration

Enable this dataset collection by editing config/dataset.php:

```php
return [
    'source' => [
        ...
        'bluora/laravel-datasets-okfn',
        ...
    ],
];
```

## Contributing

Please see [CONTRIBUTING](https://github.com/bluora/laravel-datasets/blob/master/CONTRIBUTING.md) for details.

## Credits

* [Rocco Howard](https://github.com/therocis)
* [All Contributors](https://github.com/bluora/laravel-datasets-okfn/contributors)

## License

The MIT License (MIT). Please see [License File](https://github.com/bluora/laravel-datasets/blob/master/LICENSE) for more information.
