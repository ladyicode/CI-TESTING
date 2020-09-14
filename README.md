
# Blockchain Wallet Api module for Zend Framework 2

> You want an easy client for the blockchain wallet api?

> You want to configure request, call the service and access the response data via objects?

> You want to display bitcoin in mBTC or uBTC?

> This module comes to the rescue!

[![Build Status](https://travis-ci.org/sandrokeil/BlockchainWalletApi.png?branch=master)](https://travis-ci.org/sandrokeil/BlockchainWalletApi)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/sandrokeil/BlockchainWalletApi/badges/quality-score.png?s=e0089b63bdd99801480a5c7aedbda372767990ab)](https://scrutinizer-ci.com/g/sandrokeil/BlockchainWalletApi/)
[![Coverage Status](https://coveralls.io/repos/sandrokeil/BlockchainWalletApi/badge.png)](https://coveralls.io/r/sandrokeil/BlockchainWalletApi)
[![HHVM Status](http://hhvm.h4cc.de/badge/sandrokeil/blockchain-wallet-api.svg)](http://hhvm.h4cc.de/package/sandrokeil/blockchain-wallet-api)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/eb0ea220-d358-431e-8862-1e85c84ad06a/mini.png)](https://insight.sensiolabs.com/projects/eb0ea220-d358-431e-8862-1e85c84ad06a)
[![Latest Stable Version](https://poser.pugx.org/sandrokeil/blockchain-wallet-api/v/stable.png)](https://packagist.org/packages/sandrokeil/blockchain-wallet-api)
[![Dependency Status](https://www.versioneye.com/user/projects/53615c9cfe0d07b45c000082/badge.svg)](https://www.versioneye.com/user/projects/53615c9cfe0d07b45c000082)
[![Total Downloads](https://poser.pugx.org/sandrokeil/blockchain-wallet-api/downloads.png)](https://packagist.org/packages/sandrokeil/blockchain-wallet-api)
[![License](https://poser.pugx.org/sandrokeil/blockchain-wallet-api/license.png)](https://packagist.org/packages/sandrokeil/blockchain-wallet-api)

Zend Framework 2 client library for [blockchain wallet api](https://blockchain.info/en/api/blockchain_wallet_api). The usage is simple. Configure request, call the service and access the response data via objects.

 * **Adapts To Your Needs.** There are several possibilities to configure this module.
 * **Well tested.** Besides unit test and continuous integration/inspection this solution is also ready for production use.
 * **Great foundations.** Based on [Zend Framework 2](https://github.com/zendframework/zf2) and [Easy Config](https://github.com/sandrokeil/EasyConfig)
 * **Every change is tracked**. Want to know whats new? Take a look at [CHANGELOG.md](CHANGELOG.md)
 * **Listen to your ideas.** Have a great idea? Bring your tested pull request or open a new issue. See [CONTRIBUTING.md](CONTRIBUTING.md)

## Installation

Installation of this module uses composer. For composer documentation, please refer to
[getcomposer.org](http://getcomposer.org/).

Put the following into your composer.json

    {
        "require": {
            "sandrokeil/blockchain-wallet-api": "~1.0"
        }
    }

Then add `Sake\BlockchainWalletApi` to your `./config/application.config.php`.

Copy `config/blockchainwalletapi.local.php.dist` to `config/blockchainwalletapi.local.php` and configure the credentials. **Never commit this file to public repositories!**

## Documentation

Please refer to [blockchain wallet api documentation](https://blockchain.info/en/api/blockchain_wallet_api) for request details.

**These request classes matches to api methods**

 * Send => payment
 * SendMany => sendmany
 * WalletBalance => balance
 * ListAddresses => list
 * AddressBalance => address_balance