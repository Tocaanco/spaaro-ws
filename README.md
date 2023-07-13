# this package helps to integrate spaaro services in php applications

## Installation


#### First 
you must visit [spaaro](https://app.spaaro.io) and get access key  to use this service
#### You can install the package via composer

```bash
composer require spaaro/spaaro-ws
```

### Publish the configuration file

```bash
php artisan vendor:publish --provider="Spaaro\SpaaroWsServiceProvider"
```

## Access

Add your access key to your `.env` file with key `SPAARO_ACCESS_KEY`

## Usage

You can send message like this
```php
    /**
     * @param string $message 
     * @param string $mobile 
     * @return \Spaaro\Response\WsResponse
     */
    spaaro()->sendMessage('message','mobileNumberWithCountryCode');
```
