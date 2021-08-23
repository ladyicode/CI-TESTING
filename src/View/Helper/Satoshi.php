<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/BlockchainWalletApi for the canonical source repository
 * @copyright Copyright (c) 2014 Sandro Keil
 * @license   http://github.com/sandrokeil/BlockchainWalletApi/blob/master/LICENSE.txt New BSD License
 */

namespace Sake\BlockchainWalletApi\View\Helper;

use Zend\View\Helper\AbstractHelper;

/**
 * Satoshi view helper
 *
 * Converts satoshi to other format e.g. btc
 */
class Satoshi extends AbstractHelper
{
    /**
     * Value is converted to BTC
   