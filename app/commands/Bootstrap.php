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
	protected $name = 'kit:bootstrap';

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
		if ( $this->isInstalled() )
		{
			$message = 'Twitter Bootstrap updated and published.';
		}
		else
		{
			$message = 'Twitter Bootstrap installed and published.';
		}

		$arguments = array(
			'package' => 'vendor/twbs/bootstrap/dist',
			'--path'  => '../assets',
		);

		$this->callSilent('asset:publish', $arguments);

		$this->info($message);
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

	/**
	 * Twitter Bootstrap is installed?
	 *
	 * @return boolean
	 */
	protected function isInstalled()
	{
		return File::exists('public/assets/css/bootstrap.min.css') ? true : false;
	}
}
