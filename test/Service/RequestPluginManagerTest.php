
<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/BlockchainWalletApi for the canonical source repository
 * @copyright Copyright (c) 2014 Sandro Keil
 * @license   http://github.com/sandrokeil/BlockchainWalletApi/blob/master/LICENSE.txt New BSD License
 */

namespace SakeTest\BlockchainWalletApi\Service;

use Sake\BlockchainWalletApi\Service\RequestPluginManager;
use Zend\Http;
use PHPUnit_Framework_TestCase as TestCase;

/**
 * Class RequestPluginManagerTest
 *
 * Tests integrity of \Sake\BlockchainWalletApi\Service\RequestPluginManager
 */
class RequestPluginManagerTest extends TestCase
{
    /**
     * Tests validatePlugin() throws no exception for available request classes
     *
     * @dataProvider dataProviderForTestValidatePlugin
     *
     * @covers \Sake\BlockchainWalletApi\Service\RequestPluginManager::validatePlugin
     * @group service
     */
    public function testValidatePlugin($plugin, $expected)
    {
        $manager = new RequestPluginManager();
