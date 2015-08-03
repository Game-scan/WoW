# WoW

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]



Librairy that make easier the use of the API WoW. Just provide credentials and use class to gather data from api.

## Install

Via Composer

``` bash
$ composer require game-scan/wow
```

## Requirement

Set .env file with api credential.

```
WOW_API_KEY=SET_YOUR_API_KEY
``` 

You could get an api key on [Battle net developper website](https://dev.battle.net/)
## Usage

For instance go get player data you could use the following exemple
``` php
$api = (new GameScan\WoW\WowApiRequest(new GameScan\WoW\ApiConfiguration()));
$api->setHost(new GameScan\WoW\HostInformation\EuHostInformation());
$player = new GameScan\WoW\Entity\Player($api, $playerRealm , $playerName);
$playerThumbnailUrl = "http://eu.battle.net/static-render/eu/"  . $player->thumbnail();
$playerIlvl = $player->averageItemLevel();
$playerLevel = $player->level();
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email contact@game-scan.com instead of using the issue tracker.

## Credits

- [Kandran][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/Game-Scan/WoW.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/Game-scan/WoW/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/Game-Scan/WoW.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/Game-Scan/WoW.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/Game-Scan/WoW.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/Game-Scan/WoW
[link-travis]: https://travis-ci.org/Game-Scan/WoW
[link-scrutinizer]: https://scrutinizer-ci.com/g/Game-Scan/WoW/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/Game-Scan/WoW
[link-downloads]: https://packagist.org/packages/Game-Scan/WoW
[link-author]: https://github.com/kandran
[link-contributors]: ../../contributors
