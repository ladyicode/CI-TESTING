<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/BlockchainWalletApi for the canonical source repository
 * @copyright Copyright (c) 2014 Sandro Keil
 * @license   http://github.com/sandrokeil/BlockchainWalletApi/blob/master/LICENSE.txt New BSD License
 */

namespace SakeTest\BlockchainWalletApi\Response;

use PHPUnit_Framework_TestCase as TestCase;
use Sake\BlockchainWalletApi\Response\WalletBalance;

/**
 * Class WalletBalanceTest
 *
 * Tests integrity of \Sake\BlockchainWalletApi\Response\WalletBalance
 */
class WalletBalanceTest extends TestCase
{
    /**
     * Tests if class implements response interface
     *
     * @group response
     *
     * @codeCoverageIgnore
     */
    public function testIsResponseClass()
    {
        $cut = new WalletBalance();
        $this->assertInstanceOf('\Sake\BlockchainWalletApi\Response\ResponseInterface', $cut);
    }

    /**
     * Tests if getMethod returns the correct api method
     *
     * @dataProvider dataProviderForTestIfResponseDataCanBeSet
     * @group response
     *
     * @covers \Sake\BlockchainWalletApi\Response\WalletBalance::getBalance
     * @covers \Sake\BlockchainWalletApi\Response\WalletBalance::setBalance
     */
    publi