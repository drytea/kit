kit
=========

[![Build Status](https://travis-ci.org/ogunkarakus/kit.svg)](https://travis-ci.org/ogunkarakus/kit)
[![Dependency Status](https://www.versioneye.com/user/projects/53656259fe0d07d7270000d7/badge.png)](https://www.versioneye.com/user/projects/53656259fe0d07d7270000d7)
[![Total Downloads](https://img.shields.io/packagist/dm/ogunkarakus/kit.svg)](https://packagist.org/packages/ogunkarakus/kit)

A sample application for beginning development with Laravel 4.

## Install kit with Composer

```shell
# Install Composer
curl -sS https://getcomposer.org/installer | php

# Create kit project with Composer
php composer.phar create-project -s dev ogunkarakus/kit kit --prefer-source --dev

# Reload app/storage directory permissions
cd kit/app/storage && sudo chmod 777 * && sudo chmod 666 */* && cd ../../../
```
