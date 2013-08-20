<?php
// console application configuration
return array(
    'runtimePath' => __DIR__ . '/../runtime',
    'commandMap' => array(
        'dump' => array(
            'class' => 'vendor.crisu83.yii-consoletools.commands.MysqldumpCommand',
            'basePath' => __DIR__ . '/../../',
            'dumpPath' => 'app/tests/_data',
        ),
        'environment' => array(
            'class' => 'vendor.crisu83.yii-consoletools.commands.EnvironmentCommand',
            'basePath' => __DIR__ . '/../../',
            'flushPaths' => array(
                'app/runtime',
                'web/assets',
                'web/css',
                'web/js',
            ),
        ),
        'maintain' => array(
            'class' => 'vendor.crisu83.yii-consoletools.commands.MaintainCommand',
            'basePath' => __DIR__ . '/../../',
            'flushPaths' => array(
                'app/runtime',
                'web/assets',
                'web/css',
                'web/js',
            ),
        ),
        // uncomment the following if you enable the imagemanager extension.
        /*
        'image' => array(
            'class' => 'vendor.crisu83.yii-imagemanager.commands.ImageCommand',
        ),
        */
        'migrate' => array(
            'class' => 'system.cli.commands.MigrateCommand',
            'migrationTable' => 'migration',
        ),
    )
);