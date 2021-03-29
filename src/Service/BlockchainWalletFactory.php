<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/BlockchainWalletApi for the canonical source repository
 * @copyright Copyright (c) 2014 Sandro Keil
 * @license   http://github.com/sandrokeil/BlockchainWalletApi/blob/master/LICENSE.txt New BSD License
 */

namespace Sake\BlockchainWalletApi\Service;

use Sake\BlockchainWalletApi\Exception\RuntimeException;
use Sake\EasyConfig\Service\AbstractConfigurableFactory;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 * Blockchain wallet api service factory
 *
 * Creates the blockchain wallet api service with dependencies
 */
class BlockchainWalletFactory extends AbstractConfigurableFactory implements FactoryInterface
{
    /**
     * Config name
     *
     * @var string
     */
    protected $name;

    /**
     *