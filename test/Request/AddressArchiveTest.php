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
use Sake\BlockchainWalletApi\Request\AddressArchive;

/**
 * Class AddressArchiveTest
 *
 * Tests integrity of \Sake\BlockchainWalletApi\Request\AddressArchive
 */
class AddressArchiveTest extends TestCase
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
        $cut = new AddressArchive();
        $this->assertInstanc