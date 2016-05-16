# LaravelTube
[![Build Status](https://travis-ci.org/AlvaradoAdam15/LaravelTube.svg?branch=master)](https://travis-ci.org/AlvaradoAdam15/LaravelTube)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/AlvaradoAdam15/LaravelTube/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/AlvaradoAdam15/LaravelTube/?branch=master)
[![StyleCI](https://styleci.io/repos/56526883/shield)](https://styleci.io/repos/56526883)
[![Coverage Status](https://coveralls.io/repos/github/AlvaradoAdam15/LaravelTube/badge.svg?branch=master)](https://coveralls.io/github/AlvaradoAdam15/LaravelTube?branch=master)

Open source project about sharing videos platform built on Laravel

See demo here:
 -------------

# Installation & use

```bash
git clone https://github.com/AlvaradoAdam15/LaravelTube.git
cd LaravelTube/
composer install
npm install
mv .env.example .env
# Now, configure your file .env with your DATABASE
php artisan migrate:refresh --seed
php artisan key:generate
gulp
php artisan serve
```
## Notes
If you want convert videos to other formats, you need install 'FFMpeg' in your server and configure file config/ffmpeg.php

If you want to upload files with more weight you have to change the settings of your php.ini


#Requirements
This packages use (no need to install):

* [Composer](https://getcomposer.org/)
* [Laravel](http://laravel.com/)
* [AdminLTE](https://github.com/almasaeed2010/AdminLTE). You can see and AdminLTE theme preview at: http://almsaeedstudio.com/preview/
* [ApiGuard](https://github.com/chrisbjr/api-guard)
* [Vue.js](https://vuejs.org/)
* [Ajax and jQuery](http://api.jquery.com/jquery.ajax/)
* [Video.js](http://videojs.com/)
* [FFMpeg](https://github.com/linkthrow/ffmpeg)

## Docs
http://alvaradoadam15.github.io/LaravelTube/api/master/

## Packagist


## More info
http://acacha.org/mediawiki/Usuari:AlvaradoAdam15/Síntesi

## Tests

Execute:

```
phpunit
```

## Social Login
If you want use Social login, you need configure in your file .env:

FACEBOOK_ID=*----*

FACEBOOK_SECRET=*----*

FACEBOOK_URL=http:*----*

TWITTER_ID=*----*

TWITTER_SECRET=*----*

TWITTER_URL=http:*----*

GOOGLE_ID=*----*

GOOGLE_SECRET=*----*

GOOGLE_URL=http:*----*

*----* Is your configuration in:
* https://developers.facebook.com/apps/
* https://apps.twitter.com/
* https://console.developers.google.com

## See also
http://alvaradoadam15.github.io/LaravelTube