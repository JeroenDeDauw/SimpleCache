# SimpleCache

Small library defining a minimalistic caching interface and provides some basic implementations.

[![Build Status](https://secure.travis-ci.org/JeroenDeDauw/SimpleCache.png?branch=master)](http://travis-ci.org/JeroenDeDauw/SimpleCache)
[![Coverage Status](https://coveralls.io/repos/JeroenDeDauw/SimpleCache/badge.png?branch=master)](https://coveralls.io/r/JeroenDeDauw/SimpleCache?branch=master)
[![Dependency Status](https://www.versioneye.com/user/projects/52828fb8632bac53e30000a0/badge.png)](https://www.versioneye.com/user/projects/52828fb8632bac53e30000a0)

[![Latest Stable Version](https://poser.pugx.org/jeroen-de-dauw/simple-cache/version.png)](https://packagist.org/packages/jeroen-de-dauw/simple-cache)
[![Download count](https://poser.pugx.org/jeroen-de-dauw/simple-cache/d/total.png)](https://packagist.org/packages/jeroen-de-dauw/simple-cache)

## Installation

You can use [Composer](http://getcomposer.org/) to download and install
this package as well as its dependencies. Alternatively you can simply clone
the git repository and take care of loading yourself.

### Composer

To add this package as a local, per-project dependency to your project, simply add a
dependency on `jeroen-de-dauw/simple-cache` to your project's `composer.json` file.
Here is a minimal example of a `composer.json` file that just defines a dependency on
SimpleCache 1.0:

    {
        "require": {
            "jeroen-de-dauw/simple-cache": "1.0.*"
        }
    }

### Manual

Get the SimpleCache code, either via git, or some other means. Also get all dependencies.
You can find a list of the dependencies in the "require" section of the composer.json file.
Load all dependencies and the load the SimpleCache library by including its entry point:
SimpleCache.php.

## Authors

Ask has been written by [Jeroen De Dauw](https://www.mediawiki.org/wiki/User:Jeroen_De_Dauw)
as hobby project.

## Release notes

### 1.0.3 (2013-08-07)

* Removed pointless code from CombinatoryCache
* Added missing test for CombinatoryCache

### 1.0.2 (2013-08-07)

* Fixed bug in MediaWikiCache::has
* Added unit tests for MediaWikiCache

### 1.0.1 (2013-07-15)

* Added optional expiryTime parameter to the constructor of MediaWikiCache.

### 1.0 (2013-07-05)

* Initial release.

## Links

* [SimpleCache on Packagist](https://packagist.org/packages/jeroen-de-dauw/simple-cache)
* [SimpleCache on Ohloh](https://www.ohloh.net/p/simplecache)
* [TravisCI build status](http://travis-ci.org/JeroenDeDauw/SimpleCache)
* [Code coverage status](https://coveralls.io/r/JeroenDeDauw/SimpleCache?branch=master)
