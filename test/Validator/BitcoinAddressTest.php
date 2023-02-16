<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/BlockchainWalletApi for the canonical source repository
 * @copyright Copyright (c) 2014 Sandro Keil
 * @license   http://github.com/sandrokeil/BlockchainWalletApi/blob/master/LICENSE.txt New BSD License
 */

namespace SakeTest\BlockchainWalletApi\Validator;

use PHPUnit_Framework_TestCase as TestCase;
use Sake\BlockchainWalletApi\Validator\BitcoinAddress;
use Zend\Stdlib\ArrayUtils;

/**
 * Class BitcoinAddressTest
 *
 * Tests integrity of \Sake\BlockchainWalletApi\Validator\BitcoinAddress
 */
class BitcoinAddressTest extends TestCase
{
    /**
     * Tests if isValid checks bitcoin address format
     *
     * @dataProvider dataProviderForTestIsValid
     * @group validator
     *
     * @covers \Sake\BlockchainWalletApi\Validator\BitcoinAddress::isValid
     * @covers \Sake\BlockchainWalletApi\Validator\BitcoinAddress::decode
     * @covers \Sake\BlockchainWalletApi\Validator\BitcoinAddress::encodeHex
     */
    public function testIsValid($address, $expected)
    {
        $cut = new BitcoinAddress();

        if ('exception' === $expected) {
            $this->setExpectedException(
                '\Sake\BlockchainWalletApi\Validator\Exception\ValidatorException',
                'Could not decode bitcoin address'
            );
            $cut->isValid($address);
        } else {
            $this->assertEquals($expected, $cut->isValid($address));
        }
    }

    /**
     * Tests if isValid returns false
     *
     * @group validator
     *
     * @covers \Sake\BlockchainWalletApi\Validator\BitcoinAddress::isValid
     */
    public function testIsValidWithWrongChecksum()
    {
        $cut = $this->getMock('\Sake\BlockchainWalletApi\Validator\BitcoinAddress', array('decode'));

        $cut->expects($this->once())
            ->method('decode')
   