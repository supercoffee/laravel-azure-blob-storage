<?php namespace Supercoffee\AzureBlobStorage;

use Beberlei\AzureBlobStorage\BlobClient;
use Illuminate\Support\ServiceProvider;

class AzureBlobStorageServiceProvider extends ServiceProvider {

	/**
	 * Indicates if loading of the provider is deferred.
	 *
	 * @var bool
	 */
	protected $defer = false;

	/**
	 * Register the service provider.
	 *
	 * @return void
	 */
	public function register()
	{
		$this->app->bind('azure-blob-storage', function($app){
			$url = $app['config']->get('azure-blob-storage::url');
			$accountName = $app['config']->get('azure-blob-storage::account_name');
			$key = $app['config']->get('azure-blob-storage::access_key');

			return new BlobClient($url, $accountName, $key);
		});
	}

	public function boot() {
		$this->package('supercoffee/azure-blob-storage');
	}


}
