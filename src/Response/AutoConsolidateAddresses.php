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
 * Response for archive address request
 *
 * This class contains the result data of the archive address request
 */
class AutoConsolidateAddresses implements ResponseInterface
{
    /**
     * List of consolidated addresses
     *
     * @var array
     */
    protected $consolidated = array();

    /**
     *