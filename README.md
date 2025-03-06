<p align="center">
    <img title="Termii" src="https://termii.com/assets/images/logo.png"/>
</p>

## Termii Laravel Package
Lara-Termii helps you Set up, test, and manage your Termii integration directly in your Laravel App.

[![Total Downloads](https://img.shields.io/packagist/dt/Wallacemyem/lara-termii.svg?style=flat-square)](https://packagist.org/packages/Wallacemyem/lara-termii)


## Installation

You can install the package via composer:

```bash
composer require Wallacemyem/lara-termii
```

## Configuration

1. Add the service provider to `config/app.php` (Laravel will auto-discover it in most cases):

```php
'providers' => [
    // ...
    Wallacemyem\LaraTermii\LaraTermiiServiceProvider::class,
],

'aliases' => [
    // ...
    'LaraTermii' => Wallacemyem\LaraTermii\Facades\LaraTermii::class,
],
```

2. Publish the configuration file:

```bash
php artisan vendor:publish --provider="Wallacemyem\LaraTermii\LaraTermiiServiceProvider"
```

3. Add your Termii API key to your `.env` file:

```env
TERMII_API_KEY=your-api-key-here
```

## Usage

You can use the facade or dependency injection:

```php
// Using facade
use Wallacemyem\LaraTermii\Facades\LaraTermii;

LaraTermii::balance();

// Using dependency injection
use Wallacemyem\LaraTermii\LaraTermii;

public function someMethod(LaraTermii $termii)
{
    $balance = $termii->balance();
}
```

### Check your balance on Termii
- You can check your termii balance.
- Run `$termii->balance()`

### Reports for messages sent across the sms, voice & whatsapp channels
- You can check reports for messages sent across the sms, voice & whatsapp channels.
- Run `$termii->history()`

### Detect if a number is fake or has ported to a new network
- You can check if a number is fake or has ported to a new network.
- Run `$termii->numberStatus($phone_number, $country_code)` and pass appropriate params

### Verify phone numbers and automatically detect their status
- You can verify phone numbers and automatically detect their status.
- Run `$termii->searchNumber($phone_number)` and pass appropriate params

### Retrieve the status of all registered sender ID
- You can retrieve the status of all registered sender IDs.
- Run `$termii->getSenderIds()`

### Request a new sender ID
- You can request a new sender ID.
- Run `$termii->requestSenderId($sender_id, $usecase, $company)` and pass appropriate params

### Send Message
- You can a message.
- Run `$termii->sendMessage(int $to, string $from, string $sms, string $channel = "generic", bool $media = false, string $media_url = null, string $media_caption = null)` and pass appropriate params

### Send OTP
- You can send OTP
- Run `$termii->sendOTP(int $to, string $from, string $message_type, int $pin_attempts, int $pin_time_to_live, int $pin_length, string $pin_placeholder, string $message_text, string $channel = "generic")` and pass appropriate params

### Send Voice OTP
- You can send OTP
- Run `$termii->sendVoiceOTP(int $to, int $pin_attempts, int $pin_time_to_live, int $pin_length)` and pass appropriate params

### Send Voice Call
- You can send OTP
- Run `$termii->sendVoiceCall(int $to, int $code)` and pass appropriate params

### OTP Validation
- You can verify or validate OTP
- Run `$termii->verifyOTP(string $pinId, string $pin) ` pass appropriate params

### Send In-App OTP
- You can send In-App OTP
- Run `$termii->sendInAppOTP(int $to, int $pin_attempts, int $pin_time_to_live, int $pin_length, string $pin_type)` and pass appropriate params

### Sotel eSIMs API
- Coming soon



### Security

If you discover any security related issues, please email adamsohiani@gmail.com instead of using the issue tracker.

## Credits

-   [Wallace Aboiyar](https://github.com/Wallacemyem)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
