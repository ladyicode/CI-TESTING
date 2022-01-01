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
use Sake\BlockchainWalletApi\Response\Address;
use Sake\BlockchainWalletApi\Response\ListAddresses;

/**
 * Class ListAddressesTest
 *
 * Tests integrity of \Sake\BlockchainWalletApi\Response\ListAddresses
 */
class ListAddressesTest extends TestCase
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
        $cut = new ListAddresses();
        $this->assertInstanceOf('\Sake\BlockchainWalletApi\Response\ResponseInterface', $cut);
    }

    /**
     * Tests if response can be configured via setter
     *
     * @dataProvider dataProviderForTestIfResponseDataCanBeSet
     * @group response
     *
     * @covers \Sake\BlockchainWalletApi\Response\ListAddresses::setAddresses
     * @cover