<?php

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class Bootstrap extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'bootstrap:publish';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Publish a Twitter Bootstrap package assets to the public directory.';

	/**
	 * Create a new command instance.
	 *
	 * @return void
	 */
	public function __construct()
	{
		parent::__construct();
	}

	/**
	 * Execute the console command.
	 *
	 * @return mixed
	 */
	public function fire()
	{
		if ( File::isDirectory('public/assets') )
		{
			File::deleteDirectory('public/assets');
		}
		
		$base_vendor_directory = 'vendor/twbs/bootstrap/dist/';
		$base_package_directory = '../assets/';
		
		$vendor_directories = array(
			'css' => $base_vendor_directory.'css',
			'fonts' => $base_vendor_directory.'fonts',
			'js' => $base_vendor_directory.'js',
		);
		
		$package_directories = array(
			'css' => $base_package_directory.'css',
			'fonts' => $base_package_directory.'fonts',
			'js' => $base_package_directory.'js',
		);
		
		$this->call('asset:publish', array(
					'package' => $package_directories['css'],
					'--path'  => $vendor_directories['css']
				)
		);
		
		$this->call('asset:publish', array(
					'package' => $package_directories['fonts'],
					'--path'  => $vendor_directories['fonts']
				)
		);
		
		$this->call('asset:publish', array(
					'package' => $package_directories['js'],
					'--path'  => $vendor_directories['js']
				)
		);
	}

	/**
	 * Get the console command arguments.
	 *
	 * @return array
	 */
	protected function getArguments()
	{
		return array();
	}

	/**
	 * Get the console command options.
	 *
	 * @return array
	 */
	protected function getOptions()
	{
		return array();
	}

}
