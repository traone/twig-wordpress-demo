<?php
/**
 * Created by PhpStorm.
 * User: henryk
 * Date: 7.11.14
 * Time: 11:12
 */

namespace MyCoolProject;

/**
 * Class Twig
 * @package MyCoolProject
 */
class Twig extends \Twig_Environment {

    /**
     * @param \Twig_LoaderInterface $loader
     * @param array $options
     */
    public function __construct(\Twig_LoaderInterface $loader = null, $options = [])
    {
        parent::__construct($loader, $options);

        // Register php and WP functions
        $this->registerUndefinedFunctionCallback(function($name) {

            if (function_exists($name)) {
                return new \Twig_Function_Function($name);
            }

            return false;

        });

        // Prevents pooping out WP doodoo from functions like dynamic_sidebar()
        $this->addFilter('suppress',
            new \Twig_SimpleFilter('suppress', function($args) {
                return;
            })
        );

    }
} 