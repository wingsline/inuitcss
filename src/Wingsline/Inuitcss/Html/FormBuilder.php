<?php namespace Wingsline\Inuitcss\Html;

use Illuminate\Routing\UrlGenerator;
use Illuminate\Html\HtmlBuilder as Html;
use Illuminate\Session\Store as Session;

class FormBuilder extends \Illuminate\Html\FormBuilder
{

    /**
     * Class name for text style input elements
     */
    const TEXT_INPUT_CLASS = 'text-input';

    /**
     * Holds the validation errors
     *
     * @var \Illuminate\Support\MessageBag
     */
    protected $validationErrors;

    /**
     * Css classname to be added for the label
     *
     * @var string
     */
    protected $errorCssClass = 'error';

    /**
     * The reserved form open attributes.
     *
     * @var array
     */
    protected $reserved = array('method', 'url', 'route', 'action', 'files', 'errors');

    /**
     * Open up a new HTML form.
     *
     * @param  array   $options
     * @return string
     */
    public function open(array $options = array())
    {
        if (isset($options['errors'])) {
            settype($options['errors'], 'array');
            $this->setErrors($options['errors'][0]);
            if (isset($options['errors'][1])) {
                $this->errorCssClass = $options['errors'][1];
            }
            unset($options['errors']);
        }

        return parent::open($options);
    }

    /**
     * Sets the errors message bag
     *
     * @param \Illuminate\Support\MessageBag $errors
     */
    public function setErrors(\Illuminate\Support\MessageBag $errors)
    {
        $this->validationErrors = $errors;
    }

    /**
     * Create a form label element.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  array   $options
     * @return string
     */
    public function label($name, $value = null, $options = array())
    {
        if ($this->validationErrors && $this->validationErrors->has($name)) {
            $options = $this->addClass($options, $this->errorCssClass);
        }
        return parent::label($name, $value, $options);
    }

    /**
     * Creates the extra-help for inuitcss.
     *
     * @param  string  $name
     * @param  array   $options
     * @return string
     */
    public function extraHelp($name, $options = array())
    {
        $options = $this->addClass($options, 'extra-help');
        $options = $this->html->attributes($options);
        return '<small'.$options.'>'.e($name).'</small>';
    }

    /**
     * Create a text input field.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  array   $options
     * @return string
     */
    public function text($name, $value = null, $options = array())
    {
        return parent::text($name, $value, $this->addClass($options, static::TEXT_INPUT_CLASS));
    }

    /**
     * Create a password input field.
     *
     * @param  string  $name
     * @param  array   $options
     * @return string
     */
    public function password($name, $options = array())
    {
        return parent::password($name, $this->addClass($options, static::TEXT_INPUT_CLASS));
    }

    /**
     * Create an e-mail input field.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  array   $options
     * @return string
     */
    public function email($name, $value = null, $options = array())
    {
        return parent::email($name, $value, $this->addClass($options, static::TEXT_INPUT_CLASS));
    }

    /**
     * Create a textarea input field.
     *
     * @param  string  $name
     * @param  string  $value
     * @param  array   $options
     * @return string
     */
    public function textarea($name, $value = null, $options = array())
    {
        return parent::textarea($name, $value, $this->addClass($options, static::TEXT_INPUT_CLASS));
    }

    /**
     * Adds a class name to the element's options
     *
     * @param array  $options   Array of options
     * @param string $className Name of the css class
     */
    public function addClass(array $options = array(), $className = '')
    {
        if (isset($options['class'])) {
            $options['class'] .= ' ' . $className;
        } else {
            $options['class'] = $className;
        }
        return $options;
    }
}
