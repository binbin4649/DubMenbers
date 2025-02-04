<?php
declare(strict_types=1);
/**
 * baserCMS :  Based Website Development Project <https://basercms.net>
 * Copyright (c) NPO baser foundation <https://baserfoundation.org/>
 *
 * @copyright     Copyright (c) NPO baser foundation
 * @link          https://basercms.net baserCMS Project
 * @since         5.0.7
 * @license       https://basercms.net/license/index.html MIT License
 */

/**
 * Test suite bootstrap for DubMenbers.
 *
 * This function is used to find the location of CakePHP whether CakePHP
 * has been installed as a dependency of the plugin, or the plugin is itself
 * installed as a dependency of an application.
 */
$findRoot = function ($root) {
    do {
        $lastRoot = $root;
        $root = dirname($root);
        if (is_dir($root . '/vendor/cakephp/cakephp')) {
            return $root;
        }
    } while ($root !== $lastRoot);

    throw new Exception('Cannot find the root of the application, unable to run tests');
};
$root = $findRoot(__FILE__);
unset($findRoot);

chdir($root);

require_once $root . '/vendor/autoload.php';

/**
 * Define fallback values for required constants and configuration.
 * To customize constants and configuration remove this require
 * and define the data required by your plugin here.
 */
if (file_exists($root . '/config/bootstrap.php')) {
    require $root . '/config/bootstrap.php';
}

\Cake\Datasource\ConnectionManager::drop('default');
\Cake\Datasource\ConnectionManager::drop('test');
\Cake\Core\Configure::load('install');
\Cake\Datasource\ConnectionManager::setConfig(\Cake\Core\Configure::consume('Datasources'));

/**
 * Load schema from a SQL dump file.
 *
 * If your plugin does not use database fixtures you can
 * safely delete this.
 *
 * If you want to support multiple databases, consider
 * using migrations to provide schema for your plugin,
 * and using \Migrations\TestSuite\Migrator to load schema.
 */
(new \Migrations\TestSuite\Migrator())->run(['plugin' => 'DubMenbers']);