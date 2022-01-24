
<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/BlockchainWalletApi for the canonical source repository
 * @copyright Copyright (c) 2014 Sandro Keil
 * @license   http://github.com/sandrokeil/BlockchainWalletApi/blob/master/LICENSE.txt New BSD License
 */

namespace SakeTest\BlockchainWalletApi\Service;

use Sake\BlockchainWalletApi\Service\BlockchainWalletOptions;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Class BlockChainWalletTest
 *
 * Tests integrity of \Sake\BlockchainWalletApi\Service\BlockchainWalletOptions
 */
class BlockchainWalletOptionsTest extends TestCase
{
    /**
     * Tests setGuid() and getGuid() should work as expected
     *
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWalletOptions::setGuid
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWalletOptions::getGuid
     * @group service
     */
    public function testSetGuid()
    {
        $cut = new BlockchainWalletOptions();
        $value = '123123123';

        $cut->setGuid($value);

        $this->assertEquals($value, $cut->getGuid());
    }

    /**
     * Tests setHttpMethod() and getHttpMethod() should work as expected
     *
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWalletOptions::setHttpMethod
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWalletOptions::getHttpMethod
     * @group service
     */
    public function testSetHttpMethod()
    {