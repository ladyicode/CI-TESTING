<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/BlockchainWalletApi for the canonical source repository
 * @copyright Copyright (c) 2014 Sandro Keil
 * @license   http://github.com/sandrokeil/BlockchainWalletApi/blob/master/LICENSE.txt New BSD License
 */

namespace SakeTest\BlockchainWalletApi;

// set error reporting
error_reporting(E_ALL | E_STRICT);

chdir(dirname(__DIR__));

if (!file_exists('vendor/autoload.php')) {
    throw new \RuntimeException(
        'Unable to loa