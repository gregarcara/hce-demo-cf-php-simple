# Helion Code Engine: Simple PHP demo app


This is a simple PHP app for the purpose of testing HCE deployment to Stackato. When deployed, the app simply returns php_info().

## Setup
Assuming [composer](http://getcomposer.org/) (PHP dependency manager) is installed, execute the following from the repo root:

    composer update
    // or
    php composer.phar update

## Execute tests
There are trivial PHPUnit tests (the necessary components are installed by composer). To run the tests:

    ./vendor/bin/phpunit


## Deploy on HPE Helion Stackato
Assuming the Stackato client is installed:

     stackato push -n


