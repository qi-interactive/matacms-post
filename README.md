MATA CMS Post
==========================================

![MATA CMS Module](https://s3-eu-west-1.amazonaws.com/qi-interactive/assets/mata-cms/gear-mata-logo%402x.png)


Post module allows to manage posts in MATA CMS.


Installation
------------

- Add the application using composer:

```json
"matacms/matacms-post": "~1.0.0"
```

Client
------

Post Client extends [`matacms\clients`](https://github.com/qi-interactive/matacms-base/blob/master/clients/SimpleClient.php).

In addition, it exposes the following methods:

```php
public function findByURI($uri) {}
```
Returns Post entity with specified URI.

```php
public function findAll() {}
```
Returns all published Post entities using [`caching dependency`](https://github.com/qi-interactive/matacms-cache/blob/master/caching/MataLastUpdatedTimestampDependency.php)

```php
public function getFindAllQuery() {}
```
Returns all published Post entities without caching.


Changelog
---------

## 1.0.3-alpha, August 21, 2015

- Added datetime field for PublicationDate

## 1.0.2-alpha, May 22, 2015

- README.md updated with PostClient usage.

## 1.0.1-alpha, May 21, 2015

- composer.json update.
- README.md updated

## 1.0.0-alpha, May 18, 2015

- Initial release.
