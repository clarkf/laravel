## Laravel PHP Framework - PSR0 Fork

This repository serves to be a project template for a Laravel project
utilizing PSR-0 as the main loading mechanism, instead of the default
classmap.


To get started, clone this repository somewhere:

```sh
$ git clone https://github.com/clarkf/laravel.git ./MyGreatProject/
```

That's it, you can now proceed as if you had cloned the official laravel
repo.  Don't forget to `composer install`!

You will notice that many of the default directories generally listed
under the `app` directory are not there, and there is a new folder named
`App` (yes, `app/App`).  This is the directory that, by default is
autoloaded using PSR-0. For more information regarding PSR-0 and
autoloading, see Jeffrey Way's wonderful Laracast episode, [Namespacing
Primer](https://laracasts.com/lessons/namespacing-primer).

The other major difference is the way that testing is set up.  Following
the pattern used by [composer/composer](https://github.com/composer/composer),
tests are under a top-level directory called `tests`, which, itself is a
namespace that's available only during unit testing. Some find this
useful, some don't.  Add your unit tests to `tests/App/Tests`, or add
`tests` back to the classmap.

## Why?

For projects of any significant size, having all of your classes
class-mapped becomes confusing and difficult to manage.  PSR-0 allows
you to use your own organizational conventions.

* Want to use the ["Repository Pattern"](http://vimeo.com/53029232) so
  that you can sanely unit test?  Create an `App\Repositories`
  (`app/App/Repositories`) namespace and get cooking.
* Want to separate your application into separate modules by concern?
  Create `App\Blog\Models`, `App\Products\Controllers`,
  `App\Forum\Commands`, whatever you want!
* Have extensive support classes that don't necessarily fit into the
  Model/View/Controller concept?  Create an `App\Support` namespace and
  code away.

## Features

* [PSR-0](http://www.php-fig.org/psr/psr-0/) autoloading out of the box
* `artisan migrate:make` command automagically places migrations in
  `app/App/Database/Migrations`, and `artisan migrate` runs migrations
  from the new source by default.

## Official Source

The official Laravel repository can be found at
[laravel/framework](http://www.github.com/laravel/framework).  The
offficial 'quickstart' repository can be found at
[laravel/laravel](https://github.com/laravel/laravel).

Documentation for the entire framework can be found on the [Laravel website](http://laravel.com/docs).
