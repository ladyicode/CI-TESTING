<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/BlockchainWalletApi for the canonical source repository
 * @copyright Copyright (c) 2014 Sandro Keil
 * @license   http://github.com/sandrokeil/BlockchainWalletApi/blob/master/LICENSE.txt New BSD License
 */

namespace Sake\BlockchainWalletApi\Validator;

use Sake\BlockchainWalletApi\Validator\Exception\ValidatorException;
use Zend\Validator\AbstractValidator;

/**
 * Validates a bitcoin address
 *
 * For more details see https://en.bitcoin.it/wiki/Address#Address_validation
 */
class BitcoinAddress extends AbstractValidator
{
    /**#@+
     * Validity constants
     * @var string
     */
    const INVALID        = 'dateInvalid';
    const INVALID_VERSION   = 'bitcionAddressInvalidVersion';
    /**#@-*/

    /**
     * Validation failure message template definitions
     *
     * @var array
     */
    protected $messageTemplates = array(
        self::INVALID      => "The input is not a valid bitcoi