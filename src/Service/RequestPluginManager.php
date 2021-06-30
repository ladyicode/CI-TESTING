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
use Sake\BlockchainWalletApi\Request\RequestInterface;
use Zend\ServiceManager\AbstractPluginManager;

/**
 * Plugin manager implementation for requests.
 *
 * Enforces that requests retrieved are either callbacks or instances of RequestInterface. Additionally, it
 * registers a number of default requests which matches the blockchain wallet api service request method name.
 */
class RequestPluginManager extends AbstractPluginManager
{
    /**
     * Default set of requests, note the method name must be without underscore
     *
     * @var array
     */
    protected $invokableClasses = array(
        'addressbalance' => '\Sake\BlockchainWalletApi\Request\AddressBalance',
        'balance'        => '\Sake\BlockchainWalletApi\Request\WalletBalance',
        'list'           => '\S