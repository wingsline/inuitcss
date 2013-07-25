## Wingsline/inuitcss

[inuit.css](http://inuitcss.com/) html, form helpers and pagination for [Laravel 4](http://laravel.com)


### Requirements

- PHP 5.3+
- Laravel 4


### Installation

Wingsline/inuitcss is available on Packagist ([wingsline/inuitcss](http://packagist.org/packages/wingsline/inuitcss))
and as such installable via [Composer](http://getcomposer.org/).

If you do not use Composer, you can grab the code from GitHub, and use any
PSR-0 compatible autoloader (e.g. the [Symfony2 ClassLoader component](https://github.com/symfony/ClassLoader))
to load Wingsline/Inuitcss classes.


### Form elements

In order to use inuitcss styled form elements replace the following alias in the app/config/app.php:

	'Form'            => 'Illuminate\Support\Facades\Form'
	
with

	'Form'            => 'Wingsline\Inuitcss\Facades\Form'
	
	
So when in example you call Form::text() a text field will be generated, BUT the text field will have the
```text-input``` class added to it automatically.

Currently the following elements will have the text-input added to it: 

- Form::text()
- Form::password()
- Form::email()
- Form::textarea()

Also there is a Form::extraHelp() available to add help text displayed after a field when that field is in focus (see [forms](http://jsfiddle.net/inuitcss/MhHHU/)):

	Form::extraHelp('.edu emails only')
	

#### Highlight label in case of a validation error

You can also highlight a label of an input element when a validation error occurs. Simply add the $errors from the view into the Form::open().

	
	Form::open(array('errors' => $errors))
	
	
The default css class is `error`, but if you want to change that add the errors like this:

	
	Form::open(array('errors' => array($errors, 'mycustomclass')))
	

### Pagination

After installation add the Wingsline/InuitcssServiceProvider to the config/app.php's service providers:
	
	'Wingsline\Inuitcss\InuitcssServiceProvider'
		
		
then change the config/view.php `pagination` value to one of the following views:



#### slider:

Show the most links with text labels

 	'pagination' => 'inuitcss::pagination.slider'
 		

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
