# Laravel-SMS
Laravel SMS Service Provider

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
