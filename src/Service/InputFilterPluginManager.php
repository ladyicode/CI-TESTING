<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/BlockchainWalletApi for the canonical source repository
 * @copyright Copyright (c) 2014 Sandro Keil
 * @license   http://github.com/sandrokeil/BlockchainWalletApi/blob/master/LICENSE.txt New BSD License
 */

namespace Sake\BlockchainWalletApi\Service;

use Sake\BlockchainWalletApi\Exception;
use Zend\InputFilter\InputFilterInterface;
use Zend\ServiceManager\AbstractPluginManager;

/**
 * Plugin manager implementation for input filter.
 *
 * Enforces that input filter retrieved are either callbacks or instances of InputFilte