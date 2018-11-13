<?php

// autoload_static.php @generated by Composer

namespace Composer\Autoload;

class ComposerStaticInitf156ff11edfaab40b4960b40fb890ed2
{
    public static $classMap = array (
        'ComposerAutoloaderInitf156ff11edfaab40b4960b40fb890ed2' => __DIR__ . '/..' . '/composer/autoload_real.php',
        'Composer\\Autoload\\ClassLoader' => __DIR__ . '/..' . '/composer/ClassLoader.php',
        'Composer\\Autoload\\ComposerStaticInitf156ff11edfaab40b4960b40fb890ed2' => __DIR__ . '/..' . '/composer/autoload_static.php',
        'Libraries\\ComposerTasks' => __DIR__ . '/../..' . '/ComposerTasks.php',
        'Libraries\\Contact' => __DIR__ . '/../..' . '/contact.php',
        'Libraries\\CustomPostTypes' => __DIR__ . '/../..' . '/customposttypes.php',
        'Libraries\\LoadMore' => __DIR__ . '/../..' . '/loadmore.php',
        'Libraries\\Loader' => __DIR__ . '/../..' . '/loader.php',
        'Libraries\\Menu' => __DIR__ . '/../..' . '/menu.php',
        'Libraries\\Options' => __DIR__ . '/../..' . '/options.php',
        'Libraries\\Posts' => __DIR__ . '/../..' . '/posts.php',
        'Libraries\\SitemapGenerator' => __DIR__ . '/../..' . '/sitemapgenerator.php',
        'Libraries\\Widgets' => __DIR__ . '/../..' . '/widgets.php',
    );

    public static function getInitializer(ClassLoader $loader)
    {
        return \Closure::bind(function () use ($loader) {
            $loader->classMap = ComposerStaticInitf156ff11edfaab40b4960b40fb890ed2::$classMap;

        }, null, ClassLoader::class);
    }
}