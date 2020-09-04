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

Periodically, you should update your fork to match the canonical BlockchainWalletApi repository. we have
added a remote to the BlockchainWalletApi repository, which allows you to do the following:

```sh
% git checkout master
% git pull upstream master
- OPTIONALLY, to keep your remote up-to-date -
% git push origin
```

If you're tracking other branches -- for example, the "develop" branch, where new feature development occurs --
you'll want to do the same operations for that branch; simply substitute  "develop" for "master".

## Working on BlockchainWalletApi

When working on BlockchainWalletApi, we recommend you do e