## Wingsline/inuitcss

[inuit.css](http://inuitcss.com/) helpers and pagination for [Laravel 4](http://laravel.com)


### Requirements

- PHP 5.3+
- Laravel 4


### Installation

Wingsline/inuitcss is available on Packagist ([wingsline/inuitcss](http://packagist.org/packages/wingsline/inuitcss))
and as such installable via [Composer](http://getcomposer.org/).

If you do not use Composer, you can grab the code from GitHub, and use any
PSR-0 compatible autoloader (e.g. the [Symfony2 ClassLoader component](https://github.com/symfony/ClassLoader))
to load Wingsline/Inuitcss classes.

### Usage

After installation add the Wingsline/InuitcssServiceProvider to the config/app.php's service providers:
	
	'Wingsline\Inuitcss\InuitcssServiceProvider'
		
		
then change the config/view.php `pagination` value to one of the following views:



#### slider:

Show the most links with text labels

 	'pagination' => 'inuitcss::pagination.slidernotext'
 		

![slider](http://inuitcss.wingsline.net/img/slider.png "slider")


#### simpleslider:

Shows the slider pagination except the first and last page links

	'pagination' => 'inuitcss::pagination.simpleslider'


![simpleslider](http://inuitcss.wingsline.net/img/simpleslider.png "simpleslider")


#### slidernotext:

Shows the slider but without text labels

	'pagination' => 'inuitcss::pagination.slidernotext'


![slidernotext](http://inuitcss.wingsline.net/img/slidernotext.png "slidernotext")


#### simple

Just the basic previous and next links.

	'pagination' => 'inuitcss::pagination.simple'


![simpleslider](http://inuitcss.wingsline.net/img/simple.png "slider")


### Language

The language keys for the pagination (```app/lang/en/pagination.php```) should look similar to this:

	<?php 

	return array(
	
		'previous' => '&lsaquo; Previous',

	    'next'     => 'Next &rsaquo;',

	    'first'    => 'First',

	    'last'     => 'Last',
	    
    );
    
 

### License

Wingsline/Inuitcss is open-sourced software license under the [MIT license](http://opensource.org/licenses/MIT)
