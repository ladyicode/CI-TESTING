
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
 * Request for payment method
 *
 * This class handles data for payment request
 */
class Send implements RequestInterface
{
    /**
     * Recipient Bitcoin Address
     *
     * @var string
     */
    protected $to;

    /**
     * Amount to send in satoshi
     *
     * @var int
     */
    protected $amount;

    /**
     * Send from a specific Bitcoin Address (Optional)
     *
     * @var string
     */
    protected $from;

    /**
     * "true" or "false" indicating whether the transaction should be sent through a shared wallet. Fees apply.
     * (Optional)
     *
     * @var bool
     */
    protected $shared;

    /**
     * Transaction fee value in satoshi (Must be greater than default fee) (Optional)
     *
     * @var int
     */
    protected $fee;

    /**
     * A public note to include with the transaction (Optional)
     *
     * @var string
     */
    protected $note;

    /**
     * Service method
     *
     * @return string
     */
    public function getMethod()
    {
        return 'payment';
    }

    /**
     * Returns arguments if set
     *