<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/BlockchainWalletApi for the canonical source repository
 * @copyright Copyright (c) 2014 Sandro Keil
 * @license   http://github.com/sandrokeil/BlockchainWalletApi/blob/master/LICENSE.txt New BSD License
 */

namespace Sake\BlockchainWalletApi\Service;

use Zend\Http\Request;
use Zend\ServiceManager\ServiceLocatorInterface;
use Zend\Stdlib\AbstractOptions;
use Zend\Stdlib\Hydrator\ClassMethods;
use Zend\Stdlib\Hydrator\HydratorInterface;

/**
 * Blockchain wallet api service options
 *
 * Contains configuration for the blockchain wallet api service e.g. passwords.
 */
class BlockchainWalletOptions extends AbstractOptions
{
    /**
     * Service url
     *
     * @var string
     */
    protected $url;

    /**
     * Request method
     *
     * @var string
     */
    protected $httpMethod = Request::METHOD_GET;

    /**
     * Wallet identifier
     *
     * @var string
     */
    protected $guid;

    /**
     * Main password
     *
     * @var string
     */
    protected $mainPassword;

    /**
     * Second password
     *
 