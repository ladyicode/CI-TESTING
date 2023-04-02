
<?php
/**
 * Sake
 *
 * @link      http://github.com/sandrokeil/BlockchainWalletApi for the canonical source repository
 * @copyright Copyright (c) 2014 Sandro Keil
 * @license   http://github.com/sandrokeil/BlockchainWalletApi/blob/master/LICENSE.txt New BSD License
 */

return array(
    'sake_bwa' => array(
        'connection' => array(
            'default' => array(
                'options' => array(
                    // see \Sake\BlockchainWalletApi\Service\BlockchainWalletOptions for all configurations
                    'url' => 'https://blockchain.info/de/merchant/', // note on your country
                    'guid' => 'your My Wallet identifier (found on the login page)',
                    'main_password' => 'Your Main My wallet password',
                    'second_password' => 'Your second My Wallet password if double encryption is enabled',
                ),
            )
        )
    )
);