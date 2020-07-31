# Random Names Generator

Small library that generates a **Docker** like random name from the list of adjectives and surnames of famous people in the science and tech world.



#### Examples

- inspiring-wozniak
- nifty-einstein
- nervous.carson
- goofy-cartwright-93
- dazzling.austin.12837



## Installation

This package uses [composer](https://getcomposer.org/) so you can just add `nordpeak/names-generator`  as a dependency to your `composer.json` file or execute the following command:

```php
composer require nordpeak/names-generator
```



## Usage

Nothing too fancy here.

``` php
use Nordpeak\NamesGenerator;

// default behaviour
NamesGenerator::generate(); // => "inspiring-wozniak"

// change delimiter 
NamesGenerator::generate(["delimiter" => "."]); // => "nifty.einstein"
  
// with additional random token 
NamesGenerator::generate(["token" => 5]); // => "quirky-hoover-82736"
```



## Options

The following options are available:

```php
NamesGenerator::generate([
  "delimiter" => "-",
  "token" => 4
]);
```



## Credits

Heavily inspired and sourced from the docker namesgenerator library.

https://github.com/moby/moby/tree/master/pkg/namesgenerator



Code and setup based on atrox/haikunator library.

https://packagist.org/packages/atrox/haikunator