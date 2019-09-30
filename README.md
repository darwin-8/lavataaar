# Laravel Avataaars

Uses [getavataaars](https://getavataaars.com/) service and provides interface for work with **avataaars.io** api.


This package allows you :
* Generate random styles.
* Generate styles with selected options.
* Generate styles for gender.

## Installation

#### Dependencies:

* [PHP 5.4](https://www.php.net/releases/5_4_0.php)
* [illuminate support](https://github.com/illuminate/support)


#### Installation:

**-** Require the package via Composer
```bash
composer require darwin-8/lavataaar
```

## Usage

Just make Avataaar instance and asc *get()* method to get random img (string)

```php
$avataaar = new \Avataaar\Avataaar(['host' => 'https://avataadfars.io']);

$avataaar->get();
```

You can use *only()* and *except()* methods to set styles you want, or don`t want to see in img. Dont forget use get() method then!
 
```php
$avataaar = new \Avataaar\Avataaar(['host' => 'https://avataadfars.io']);

$avataaar->only(['topType' => ["ShortHairDreads01", "ShortHairDreads02", "ShortHairFrizzle"]])
         ->except(['topType' => ["ShortHairDreads02"]])
         ->get();
```

For addition you can use *girl()* and *guy()* methods to set styles for girl or boy. Dont forget use get() method then!
 
```php
$avataaar = new \Avataaar\Avataaar(['host' => 'https://avataadfars.io']);

$avataaar->girl()->only(['skinColor' => ['Brown']])->get();
```
