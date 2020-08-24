# USING THE GIT REPOSITORY

## Setup your own public github repository

Your first step is to establish a public repository from which i can pull your work into the master repository.

 1. Setup a GitHub account (http://github.com/), if you haven't yet
 2. Fork the BlockchainWalletApi repository (http://github.com/sandrokeil/BlockchainWalletApi)
 3. Clone your fork locally and enter it (use your own GitHub username in the statement below)

    ```sh
    % git clone git@github.com:<username>/BlockchainWalletApi.git
    % cd BlockchainWalletApi
    ```

 4. Add a remote to the canonical BlockchainWalletApi repository, so you can keep your fork
    up-to-date:

    ```sh
    % git remote add upstream https://github.com/sandrokeil/BlockchainWalletApi.git
    % git fetch upstream
    ```

## Keeping Up-to-Date

Pe