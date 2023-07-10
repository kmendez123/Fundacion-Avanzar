<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInit942dcc3c35f10fbffcda7ea19b7a1b4b
{
    private static $loader;

    public static function loadClassLoader($class)
    {
        if ('Composer\Autoload\ClassLoader' === $class) {
            require __DIR__ . '/ClassLoader.php';
        }
    }

    /**
     * @return \Composer\Autoload\ClassLoader
     */
    public static function getLoader()
    {
        if (null !== self::$loader) {
            return self::$loader;
        }

        require __DIR__ . '/platform_check.php';

        spl_autoload_register(array('ComposerAutoloaderInit942dcc3c35f10fbffcda7ea19b7a1b4b', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInit942dcc3c35f10fbffcda7ea19b7a1b4b', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInit942dcc3c35f10fbffcda7ea19b7a1b4b::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
