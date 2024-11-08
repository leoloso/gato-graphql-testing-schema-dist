<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitf338466c30a6686798b01d50d39f3c98
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

        spl_autoload_register(array('ComposerAutoloaderInitf338466c30a6686798b01d50d39f3c98', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitf338466c30a6686798b01d50d39f3c98', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitf338466c30a6686798b01d50d39f3c98::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
