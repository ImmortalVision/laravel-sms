[![Join the chat at https://gitter.im/immortalvision/laravel-sms](https://badges.gitter.im/Join%20Chat.svg)](https://gitter.im/immortalvision/laravel-sms?utm_source=badge&utm_medium=badge&utm_campaign=pr-badge&utm_content=badge)

# Laravel-SMS
Laravel SMS Service Provider


![Laravel 5.2](https://img.shields.io/badge/Laravel-5.2-f4645f.svg)
![Laravel 5.1](https://img.shields.io/badge/Laravel-5.1-f4645f.svg)
![Laravel 5.0](https://img.shields.io/badge/Laravel-5.0-f4645f.svg)
![Laravel 4.2](https://img.shields.io/badge/Laravel-4.2-f4645f.svg)
[![Latest Stable Version](https://poser.pugx.org/immortalvision/laravel-sms/v/stable.svg)](https://packagist.org/packages/mariuzzo/laravel-js-localization)
[![Total Downloads](https://poser.pugx.org/immortalvision/laravel-sms/downloads.svg)](https://packagist.org/packages/mariuzzo/laravel-js-localization)
[![License](https://poser.pugx.org/immortalvision/laravel-sms/license.svg)](https://packagist.org/packages/mariuzzo/laravel-js-localization)

## Installation

Run the following command in your laravel directory:

```composer require immortalvision/laravel-sms```

## Setup

1. In `/config/app.php`, add the following to `providers`:
  
  ```
  ImmortalVision\SMS\SmsServiceProvider::class,
  ```
  and the following to `aliases`:
  ```
  'SMS' => ImmortalVision\SMS\Facades\SMS::class,
  ```
2. Run `php artisan vendor:publish`.
3. Enter your api data in `/config/SMS.php`.

## Usage
