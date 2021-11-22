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
use Sake\BlockchainWalletApi\Request\Send;

/**
 * Class SendTest
 *
 * Tests integrity of \Sake\BlockchainWalletApi\Request\Send
 */
class SendTest extends TestCase
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
        $cut = new Send();
        $this->assertInstanceOf('\Sake\BlockchainWalletApi\Request\RequestInterface', $cut);
    }

    /**
     * Tests if getMethod returns the correct api method
     *
     * @group request
     *
     * @covers \Sake\BlockchainWallet