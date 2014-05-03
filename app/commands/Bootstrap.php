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
		if ( File::isDirectory(dirname('public/assets')) )
		{
			File::deleteDirectory(dirname('public/assets'));
		}
		
		$this->call('asset:publish', array('argument' => '../assets/css', '--path' => 'vendor/twbs/bootstrap/dist/css'));
		$this->call('asset:publish', array('argument' => '../assets/fonts', '--path' => 'vendor/twbs/bootstrap/dist/fonts'));
		$this->call('asset:publish', array('argument' => '../assets/js', '--path' => 'vendor/twbs/bootstrap/dist/js'));
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
