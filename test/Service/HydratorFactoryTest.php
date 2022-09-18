<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/HydratorApi for the canonical source repository
 * @copyright Copyright (c) 2014 Sandro Keil
 * @license   http://github.com/sandrokeil/HydratorApi/blob/master/LICENSE.txt New BSD License
 */

namespace SakeTest\BlockchainWalletApi\Service;

use Sake\BlockchainWalletApi\Service\HydratorFactory;
use SakeTest\BlockchainWalletApi\Service\AbstractFactoryTestCase as TestCase;

/**
 * Class BlockChainWalletFactoryTest
 *
 * Tests integrity of \Sake\BlockchainWalletApi\Service\HydratorFactory
 */
class HydratorFactoryTestTestCase extends TestCase
{
    /**
     * Tests createService() returns a valid and configured service instance.
     *
     * @covers \Sake\BlockchainWalletApi\Service\HydratorFactory::createService
     * @group factory
     */
    publi