<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/BlockchainWalletApi for the canonical source repository
 * @copyright Copyright (c) 2014 Sandro Keil
 * @license   http://github.com/sandrokeil/BlockchainWalletApi/blob/master/LICENSE.txt New BSD License
 */

namespace Sake\BlockchainWalletApi\Response;

/**
 * Response for new address request
 *
 * This class contains the result data of the new address request
 */
class NewAddress implements ResponseInterface
{
    /**
     * Bitcoin address
     *
     * @var string
     */
    protected $address;

    /**
     * Label e.g. order number
     *
     * @v