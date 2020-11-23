
<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/BlockchainWalletApi for the canonical source repository
 * @copyright Copyright (c) 2014 Sandro Keil
 * @license   http://github.com/sandrokeil/BlockchainWalletApi/blob/master/LICENSE.txt New BSD License
 */

namespace Sake\BlockchainWalletApi\Request;

/**
 * Request for address balance method
 *
 * This class handles data for address balance request
 */
class AddressBalance implements RequestInterface
{
    /**
     * Minimum number of confirmations required. 0 for unconfirmed.
     *
     * @var int
     */
    protected $confirmations = 0;

    /**
     * Bitcoin address
     *
     * @var string
     */
    protected $address;

    /**
     * Service method
     *
     * @return string
     */
    public function getMethod()
    {
        return 'address_balance';
    }

    /**
     * Return the arguments for the server's method. If the method does not require any arguments, return an empty
     * array!
     *
     * @return array Arguments
     */
    public function getArguments()
    {
        return array(
            'address' => $this->address,
            'confirmations' => $this->confirmations
        );
    }

    /**
     * Set bitcoin address to retrieve balance
     *
     * @param string $address
     */
    public function setAddress($address)