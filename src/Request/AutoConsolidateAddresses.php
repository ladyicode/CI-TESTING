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
 * Request for auto_consolidate method
 *
 * This class handles data for archive address request
 */
class AutoConsolidateAddresses implements RequestInterface
{
    /**
     * Addresses which have not receive