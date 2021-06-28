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
 * Enforces that input filter retrieved are either callbacks or instances of InputFilterInterface. Additionally, it
 * registers a number of default input filter which matches the blockchain wallet api service request method name.
 */
class InputFilterPluginManager extends AbstractPluginManager
{
    /**
     * Default set of input filter, note the method name must be without underscore
     *
     * @var array
     */
    protected $factories = array(
        'addressbalance' => '\Sake\BlockchainWalletApi\Service\InputFilter\AddressBalanceFactory',
        'balance'        => '\Sake\BlockchainWalletApi\Service\InputFilter\WalletBalanceFactory',
        'list'           => '\Sake\BlockchainWalletApi\Service\InputFilter\ListAddressesFactory',
        'newaddress'     => '\Sake\BlockchainWalletApi\Service\InputFilter\NewAddressFactory',
        'payment'        => '\Sake\BlockchainWall