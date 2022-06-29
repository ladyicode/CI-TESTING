<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/BlockchainWalletApi for the canonical source repository
 * @copyright Copyright (c) 2014 Sandro Keil
 * @license   http://github.com/sandrokeil/BlockchainWalletApi/blob/master/LICENSE.txt New BSD License
 */

namespace SakeTest\BlockchainWalletApi\Service;

use Sake\BlockchainWalletApi\Request;
use Sake\BlockchainWalletApi\Response;
use Sake\BlockchainWalletApi\Service\BlockchainWallet;
use Sake\BlockchainWalletApi\Service\BlockchainWalletOptions;
use Zend\Http;
use PHPUnit_Framework_TestCase as TestCase;
use Zend\Http\Response as HttpResponse;
use Zend\ServiceManager\ServiceManager;

/**
 * Class BlockChainWalletTest
 *
 * Tests integrity of \Sake\BlockchainWalletApi\Service\BlockchainWallet
 */
class BlockchainWalletTest extends TestCase
{
    /**
     * Tests send() with address balance request
     *
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::send
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::__construct
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::extractData
     * @group service
     */
    public function testSendWithRequestAddressBalance()
    {
        $service = $this->getStubForTest(file_get_contents(__DIR__ . '/TestAsset/Response/address_balance.txt'));

        $request = new Request\AddressBalance();
        $request->setAddress('efjsdkfjkwefkwejfkesf');

        /* @var $response Response\AddressBalance */
        $response = $service->send($request);

        $this->assertEquals(0, $response->getBalance());

        $this->assertEquals(
            $this->getLastRawRequestExpected(__DIR__ . '/TestAsset/Request/address_balance.txt'),
            $this->getLastRawRequest($service),
            'Requests does not match'
        );
    }

    /**
     * Tests send() with wallet balance request
     *
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::send
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::__construct
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::extractData
     * @group service
     */
    public function testSendWithRequestWalletBalance()
    {
        $service = $this->getStubForTest(file_get_contents(__DIR__ . '/TestAsset/Response/wallet_balance.txt'));

        $request = new Request\WalletBalance();

        /* @var $response Response\WalletBalance */
        $response = $service->send($request);

        $this->assertEquals(0, $response->getBalance());

        $this->assertEquals(
            $this->getLastRawRequestExpected(__DIR__ . '/TestAsset/Request/wallet_balance.txt'),
            $this->getLastRawRequest($service),
            'Requests does not match'
        );
    }

    /**
     * Tests send() with new address request
     *
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::send
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::__construct
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::extractData
     * @group service
     */
    public function testSendWithRequestNewAddress()
    {
        $service = $this->getStubForTest(file_get_contents(__DIR__ . '/TestAsset/Response/new_address.txt'));
        $label = 'Order No : 1234';

        $request = new Request\NewAddress();

        $request->setLabel($label);

        /* @var $response Response\NewAddress */
        $response = $service->send($request);

        $this->assertEquals($label, $response->getLabel());
        $this->assertEquals('18fyqiZzndTxdVo7g9ouRogB4uFj86JJiy', $response->getAddress());

        $this->assertEquals(
            $this->getLastRawRequestExpected(__DIR__ . '/TestAsset/Request/new_address.txt'),
            $this->getLastRawRequest($service),
            'Requests does not match'
        );
    }

    /**
     * Tests send() with list addresses request
     *
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::send
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::__construct
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::extractData
     * @group service
     */
    public function testSendWithRequestListAddresses()
    {
        $service = $this->getStubForTest(file_get_contents(__DIR__ . '/TestAsset/Response/list_addresses.txt'));

        $request = new Request\ListAddresses();

        /* @var $response Response\ListAddresses */
        $response = $service->send($request);

        $addresses = $response->getAddresses();

        $this->assertCount(3, $addresses);
        $this->assertArrayHasKey('1Q1AtvCyKhtveGm3187mgNRh5YcukUWjQC', $addresses);
        $this->assertArrayHasKey('1A8JiWcwvpY7tAopUkSnGuEYHmzGYfZPiq', $addresses);
        $this->assertArrayHasKey('17p49XUC2fw4Fn53WjZqYAm4APKqhNPEkY', $addresses);
        $this->assertInstanceOf('\Sake\BlockchainWalletApi\Response\Address', current($addresses));

        $this->assertEquals(
            $this->getLastRawRequestExpected(__DIR__ . '/TestAsset/Request/list_addresses.txt'),
            $this->getLastRawRequest($service),
            'Requests does not match'
        );
    }

    /**
     * Tests send() with send request
     *
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::send
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::__construct
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::extractData
     * @group service
     */
    public function testSendWithRequestSend()
    {
        $service = $this->getStubForTest(file_get_contents(__DIR__ . '/TestAsset/Response/send.txt'));

        $request = new Request\Send();

        $request->setAmount(10000000);
        $request->setTo('1A8JiWcwvpY7tAopUkSnGuEYHmzGYfZPiq');

        /* @var $response Response\Send */
        $response = $service->send($request);

        $this->assertEquals('Sent 0.1 BTC to 1A8JiWcwvpY7tAopUkSnGuEYHmzGYfZPiq', $response->getMessage());
        $this->assertEquals(
            'f322d01ad784e5deeb25464a5781c3b20971c1863679ca506e702e3e33c18e9c',
            $response->getTxHash()
        );
        $this->assertEquals(
            'Some funds are pending confirmation and cannot be spent yet (Value 0.001 BTC)',
            $response->getNotice()
        );

        $this->assertEquals(
            $this->getLastRawRequestExpected(__DIR__ . '/TestAsset/Request/send.txt'),
            $this->getLastRawRequest($service),
            'Requests does not match'
        );
    }

    /**
     * Tests send() with send many request
     *
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::send
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::__construct
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::extractData
     * @group service
     */
    public function testSendWithRequestSendMany()
    {
        $service = $this->getStubForTest(file_get_contents(__DIR__ . '/TestAsset/Response/send_many.txt'));

        $recipients = array(
            new Request\Recipient('regl4jtwe8flmf23knfsd', 10000),
            new Request\Recipient('23dskflsfuo2u4ourjsd', 20000),
            new Request\Recipient('34tfskdlfcvkdjhvkjwehf', 30000),
        );

        $request = new Request\SendMany();

        $request->setRecipients($recipients);

        /* @var $response Response\Send */
        $response = $service->send($request);

        $this->assertEquals('Sent To Multiple Recipients', $response->getMessage());
        $this->assertEquals(
            'f322d01ad784e5deeb25464a5781c3b20971c1863679ca506e702e3e33c18e9c',
            $response->getTxHash()
        );

        $this->assertEquals(
            $this->getLastRawRequestExpected(__DIR__ . '/TestAsset/Request/send_many.txt'),
            $this->getLastRawRequest($service),
            'Requests does not match'
        );
    }

    /**
     * Tests send() with archive address request
     *
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::send
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::__construct
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::extractData
     * @group service
     */
    public function testSendWithRequestAddressArchive()
    {
        $service = $this->getStubForTest(file_get_contents(__DIR__ . '/TestAsset/Response/address_archive.txt'));
        $address = '18fyqiZzndTxdVo7g9ouRogB4uFj86JJiy';

        $request = new Request\AddressArchive();
        $request->setAddress($address);

        /* @var $response Response\AddressArchive */
        $response = $service->send($request);

        $this->assertEquals($address, $response->getArchived());

        $this->assertEquals(
            $this->getLastRawRequestExpected(__DIR__ . '/TestAsset/Request/address_archive.txt'),
            $this->getLastRawRequest($service),
            'Requests does not match'
        );
    }

    /**
     * Tests send() with unarchive address request
     *
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::send
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::__construct
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::extractData
     * @group service
     */
    public function testSendWithRequestAddressUnarchive()
    {
        $service = $this->getStubForTest(file_get_contents(__DIR__ . '/TestAsset/Response/address_unarchive.txt'));
        $address = '18fyqiZzndTxdVo7g9ouRogB4uFj86JJiy';

        $request = new Request\AddressUnarchive();
        $request->setAddress($address);

        /* @var $response Response\AddressUnarchive */
        $response = $service->send($request);

        $this->assertEquals('18fyqiZzndTxdVo7g9ouRogB4uFj86JJiy', $response->getActive());

        $this->assertEquals(
            $this->getLastRawRequestExpected(__DIR__ . '/TestAsset/Request/address_unarchive.txt'),
            $this->getLastRawRequest($service),
            'Requests does not match'
        );
    }

    /**
     * Tests send() with auto consolidate addresses request
     *
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::send
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::__construct
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::extractData
     * @group service
     */
    public function testSendWithRequestAutoConsolidateAddresses()
    {
        $service = $this->getStubForTest(
            file_get_contents(__DIR__ . '/TestAsset/Response/auto_consolidate_addresses.txt')
        );

        $request = new Request\AutoConsolidateAddresses();
        $request->setDays(10);

        /* @var $response Response\AutoConsolidateAddresses */
        $response = $service->send($request);

        $consolidated = array('18fyqiZzndTxdVo7g9ouRogB4uFj86JJiy', '1Q1AtvCyKhtveGm3187mgNRh5YcukUWjQC');

        $this->assertEquals($consolidated, $response->getConsolidated());

        $this->assertEquals(
            $this->getLastRawRequestExpected(__DIR__ . '/TestAsset/Request/auto_consolidate_addresses.txt'),
            $this->getLastRawRequest($service),
            'Requests does not match'
        );
    }

    /**
     * Test if getUri() returns correct blockchain wallet api uri
     *
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::getUri
     * @dataProvider dataProviderForTestGetUri
     * @group service
     *
     * @param Request\RequestInterface $request
     * @param string $expected Expected uri
     */
    public function testGetUri(Request\RequestInterface $request, $expected)
    {
        $class = new \ReflectionClass('\Sake\BlockchainWalletApi\Service\BlockchainWallet');
        $method = $class->getMethod('getUri');
        $method->setAccessible(true);

        $this->assertEquals($expected, $method->invoke($this->getStubForTest(), $request));
    }

    /**
     * Test if getArguments() returns api arguments
     *
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::getArguments
     * @group service
     */
    public function testGetArguments()
    {
        $class = new \ReflectionClass('\Sake\BlockchainWalletApi\Service\BlockchainWallet');
        $method = $class->getMethod('getArguments');
        $method->setAccessible(true);

        $expected = array(
            'password' => 'mainpwd',
            'second_password' => 'secpwd',
        );

        $this->assertEquals($expected, $method->invoke($this->getStubForTest(), new Request\WalletBalance()));
    }

    /**
     * Test if getUri() returns correct blockchain wallet api uri
     *
     * @covers \Sake\BlockchainWalletApi\Service\BlockchainWallet::extractData
     * @group service
     */
    public function testExtractDataShouldThrowExceptionIfRequestFailed()
    {
        $class = new \ReflectionClass('\Sake\BlockchainWalletApi\Service\BlockchainWallet');
        $method = $class->getMethod('extractData');
        $method->setAccessible(true);

        $response = new HttpResponse();
        $response->setStatusCode(HttpResponse::STATUS_CODE_404);

        $this->setExpectedException('\Sake\BlockchainWalletApi\Exception\RuntimeException', 'Server responde