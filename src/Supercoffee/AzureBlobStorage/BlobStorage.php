<?php namespace Supercoffee\AzureBlobStorage;
use Illuminate\Support\Facades\Facade;

class BlobStorage extends Facade{

    protected static function getFacadeAccessor() {
        return 'azure-blob-storage';
    }

}