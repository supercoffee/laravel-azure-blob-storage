# Laravel Azure Blob Storage

This package is a wrapper around the [beberlei/azure-blob-storage](https://github.com/beberlei/azure-blob-storage) library.

## Installation

Install with composer via the command line: 

`composer require supercoffee/azure-blob-storage: *`

Or manually add the requirement in composer.json

    {
        "require": {
            "supercoffee/azure-blob-storage": "*"
        }
    }
    
## Configuration

Add the following to your providers array in app.php: 

    'Supercoffee\AzureBlobStorage\AzureBlobStorageServiceProvider'

and the following key/value pair in your aliases array in app.php

    'BlobStorage'		=> 'Supercoffee\AzureBlobStorage\BlobStorage'
    
## Usage

coming soon