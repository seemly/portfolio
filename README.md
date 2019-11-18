=======
Cubex Application Skeleton Project
========

[![Latest Stable Version](https://poser.pugx.org/cubex/application-skeleton/version.png)](https://packagist.org/packages/cubex/application-skeleton)
[![Total Downloads](https://poser.pugx.org/cubex/application-skeleton/d/total.png)](https://packagist.org/packages/cubex/application-skeleton)
[![Build Status](https://travis-ci.org/cubex/application-skeleton.png)](https://travis-ci.org/cubex/skeleton)
[![Dependency Status](https://www.versioneye.com/php/cubex:application-skeleton/badge.png)](https://www.versioneye.com/php/cubex:application-skeleton)
[![HHVM Status](http://hhvm.h4cc.de/badge/cubex/application-skeleton.png)](http://hhvm.h4cc.de/package/cubex/application-skeleton)
[![Coverage Status](https://coveralls.io/repos/cubex/application-skeleton/badge.png)](https://coveralls.io/r/cubex/application-skeleton)

##Installation
###Getting the base project
[Composer](http://getcomposer.org/) is a dependency management library for PHP, which you can use to download the Cubex Framework, and example project.

Start by [downloading Composer](http://getcomposer.org/download/) onto your computer.

Once composer is installed, to clone the base cubex project, you simply need to run

    composer create-project cubex/application-skeleton myproject
replacing **myproject** with the name of the project folder you wish to work with.

###Getting your web environment setup
There are various ways in which you can get your cubex project running on a web server.

- Virtual Host
- htaccess
- Raw PHP
- PHP Development Server

Each environment requires you setup the Cubex Environmental variable, which is **CUBEX_ENV**, with the exception of the //PHP Development Web Server// which will apply "development" as default environment.

Configurations for the various options can be found below.  Once you have your environment setup, you should be able to navigate to your configured path, and see the sample project.

###Setting Your Virtual Host

    <VirtualHost *:80>
        SetEnv CUBEX_ENV development

        DocumentRoot "project_path/public"
        ServerName cubex.local
        ServerAlias www.cubex.local
        ErrorLog "logs/cubex-error.log"
        CustomLog "logs/cubex-access.log" common

        RewriteEngine on
        RewriteRule ^(.*)$        /index.php  [L,QSA]
    </VirtualHost>

###htaccess

    SETENV CUBEX_ENV development

    RewriteEngine on
    RewriteBase /
    RewriteRule ^(.*)$        index.php  [L,QSA]

###Raw PHP

Within **public/index.php** before initiating cubex, you can put the environment directly into php with

    putenv("CUBEX_ENV=development");

###PHP Development Server

Running the following command within the root of your project will allow you to access this project with http://localhost:8080

    php -S 0.0.0.0:8080 public/index.php

