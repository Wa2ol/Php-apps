<?php

// autoload_real.php @generated by Composer

class ComposerAutoloaderInitcba3e0ec9bc4df63f2e106f02e85b5da
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

        spl_autoload_register(array('ComposerAutoloaderInitcba3e0ec9bc4df63f2e106f02e85b5da', 'loadClassLoader'), true, true);
        self::$loader = $loader = new \Composer\Autoload\ClassLoader(\dirname(__DIR__));
        spl_autoload_unregister(array('ComposerAutoloaderInitcba3e0ec9bc4df63f2e106f02e85b5da', 'loadClassLoader'));

        require __DIR__ . '/autoload_static.php';
        call_user_func(\Composer\Autoload\ComposerStaticInitcba3e0ec9bc4df63f2e106f02e85b5da::getInitializer($loader));

        $loader->register(true);

        return $loader;
    }
}
