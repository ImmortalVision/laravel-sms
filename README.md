# Laravel-SMS
Laravel SMS Service Provider

## Installation

Run the following command in your laravel directory:

```composer require pezhvak/laravel-sms```

## Setup

1. In `/config/app.php`, add the following to `providers`:
  
  ```
  Pezhvak\SMS\SmsServiceProvider::class,
  ```
  and the following to `aliases`:
  ```
  'SMS' => Pezhvak\SMS\Facades\SMS::class,
  ```
2. Run `php artisan vendor:publish`.
3. Enter your api data in `/config/SMS.php`.

## Usage
