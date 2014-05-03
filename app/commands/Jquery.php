<?php

use jyggen\Curl;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class Jquery extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'kit:jquery';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Publish a jQuery (code.jquery.com version) package assets to the public directory.';

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
		$request = Curl::get('http://code.jquery.com/jquery.min.js');

		$response = $request[0]->getContent();

		$file = 'public/assets/jquery.min.js';

		if ( File::exists($file) )
		{
			$content = File::get($file);

			if ( md5($content) != md5($response) )
			{
				File::put($file, $content);
				
				$this->info('jQuery updated and published.');
			}
			else
			{
				$this->info('jQuery up-to-date.');
			}
		}
		else
		{
			if ( ! File::isDirectory('public/assets') )
			{
				$this->call('bootstrap:publish');
			}
			else
			{
				File::makeDirectory('public/assets/js', 0755, true);
			}

			File::put($file, $content);

			$this->info('jQuery installed and published.');
		}
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
