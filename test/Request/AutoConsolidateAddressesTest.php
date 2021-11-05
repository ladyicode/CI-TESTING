<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/BlockchainWalletApi for the canonical source repository
 * @copyright Copyright (c) 2014 Sandro Keil
 * @license   http://github.com/sandrokeil/BlockchainWalletApi/blob/master/LICENSE.txt New BSD License
 */

namespace SakeTest\BlockchainWalletApi\Request;

use PHPUnit_Framework_TestCase as TestCase;
use Sake\BlockchainWalletApi\Request\AutoConsolidateAddresses;

/**
 * Class AutoConsolidateAddressesTest
 *
 * Tests integrity of \Sake\BlockchainWalletApi\Request\AutoConsolidateAddresses
 */
class AutoConsolidateAddressesTest extends TestCase
{
    /**
     * Tests if class implements request interface
     *
     * @group request
     *
     * @codeCoverageIgnore
     */
    public function testIsRequestClass()
    {
        $cut = new AutoConsolidateAddresses();
        $this->assertInstanceOf('\Sake\BlockchainWalletApi\Request\RequestInterface', $cut);
    }

    /**
