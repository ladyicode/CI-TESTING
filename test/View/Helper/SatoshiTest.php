<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/BlockchainWalletApi for the canonical source repository
 * @copyright Copyright (c) 2014 Sandro Keil
 * @license   http://github.com/sandrokeil/BlockchainWalletApi/blob/master/LICENSE.txt New BSD License
 */

namespace SakeTest\BlockchainWalletApi\View\Helper;

use PHPUnit_Framework_TestCase as TestCase;
use Sake\BlockchainWalletApi\View\Helper\Satoshi;

/**
 * Class SatoshiTest
 *
 * Tests integrity of \Sake\BlockchainWalletApi\View\Helper\Satoshi
 */
class SatoshiTest extends TestCase
{
    /**
     * Tests if __invoke returns bitcoin value set by defaultUnit
     *
     * @dataProvider dataProviderForInvokeFormatBitcoin
     * @group view
     *
     * @covers \Sake\BlockchainWalletApi\View\Helper\Satoshi::__invoke
     * @covers \Sake\BlockchainWalletApi\View\H