[![Build Status](https://secure.travis-ci.org/JeroenDeDauw/SimpleCache.png?branch=master)](http://travis-ci.org/JeroenDeDauw/SimpleCache)

About
=====

Small library defining a minimalistic caching interface and provides some basic implementations.

Installation
============

You can use [Composer](http://getcomposer.org/) to download and install
this package as well as its dependencies. Alternatively you can simply clone
the git repository and take care of loading yourself.

### Composer

To add this package as a local, per-project dependency to your project, simply add a
dependency on `JeroenDeDauw/SimpleCache` to your project's `composer.json` file.
Here is a minimal example of a `composer.json` file that just defines a dependency on
SimpleCache 1.0:

    {
        "require": {
            "jeroen-de-dauw/simple-cache": "1.0.*"
        }
    }

### Manuel

Get the SimpleCache code, either via git, or some other means. Also get all dependencies.
You can find a list of the dependencies in the "require" section of the composer.json file.
Load all dependencies and the load the SimpleCache library by including its entry point:
SimpleCache.php.


Links
-----

* [SimpleCache on Packagist](https://packagist.org/packages/jeroen-de-dauw/simple-cache)
* [Latest version of the readme file](https://github.com/JeroenDeDauw/SimpleCache/blob/master/README.md)