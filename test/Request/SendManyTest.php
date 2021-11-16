
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
use Sake\BlockchainWalletApi\Request\Recipient;
use Sake\BlockchainWalletApi\Request\SendMany;

/**
 * Class SendManyTest
 *
 * Tests integrity of \Sake\BlockchainWalletApi\Request\SendMany
 */
class SendManyTest extends TestCase
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
        $cut = new SendMany();
        $this->assertInstanceOf('\Sake\BlockchainWalletApi\Request\RequestInterface', $cut);
    }

    /**
     * Tests if getMethod returns the correct api method
     *
     * @group request
     *
     * @covers \Sake\BlockchainWalletApi\Request\SendMany::getMethod
     */
    public function testGetMethod()
    {
        $cut = new SendMany();
        $this->assertEquals('sendmany', $cut->getMethod());
    }

    /**
     * Tests if request can be configured via setter
     *
     * @group request
     *
     * @covers \Sake\BlockchainWalletApi\Request\SendMany::setRecipients
     * @covers \Sake\BlockchainWalletApi\Request\SendMany::getRecipients
     * @covers \Sake\BlockchainWalletApi\Request\SendMany::setFee
     * @covers \Sake\BlockchainWalletApi\Request\SendMany::getFee
     * @covers \Sake\BlockchainWalletApi\Request\SendMany::setFrom
     * @covers \Sake\BlockchainWalletApi\Request\SendMany::getFrom
     * @covers \Sake\BlockchainWalletApi\Request\SendMany::setNote
     * @covers \Sake\BlockchainWalletApi\Request\SendMany::getNote
     * @covers \Sake\BlockchainWalletApi\Request\SendMany::setShared