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
     * @covers \Sake\BlockchainWalletApi\Validato