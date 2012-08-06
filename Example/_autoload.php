<?php
/**
 * @title            Classes loader
 *
 * @author           Pierre-Henry Soria <ph7software@gmail.com>
 * @copyright        (c) 2012, Pierre-Henry Soria. All Rights Reserved.
 * @license          Lesser General Public License; See LICENSE.txt in the root directory.
 * @link             http://github.com/pH-7
 * @package          PH7
 * @version          1.0
 */
namespace PH7;

// Autoloading Classes Files
spl_autoload_register(function($sClass) {
    // Hack to remove namespace and backslash
    $sClass = str_replace(array(__NAMESPACE__ . '\\', '\\'), '/', $sClass);

    if(is_file(dirname(__DIR__) . $sClass . '.class.php')) {
        require dirname(__DIR__) . $sClass . '.class.php';
    }
});
