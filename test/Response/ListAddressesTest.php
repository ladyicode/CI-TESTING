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