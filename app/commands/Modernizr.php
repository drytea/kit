<?php

use jyggen\Curl;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Input\InputArgument;

class Modernizr extends Command {

	/**
	 * The console command name.
	 *
	 * @var string
	 */
	protected $name = 'modernizr:publish';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Publish a Modernizr (cdnjs version) package assets to the assets directory.';

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
		$request = Curl::get('http://cdnjs.com/');
		
		$response = $request[0]->getContent();
		
		unset($request);
		
		$modernizr = preg_match(
			'#\<tr(.*?)id\=\"modernizr\"(.*?)\>(.*?)'.
			'\<p\sitemprop\=\"downloadUrl\"(.*?)\>(.*?)\<\/p\>#si',
			$response,
			$matches
		) ? 'http://' . trim(trim(end($matches)), '/') : null;
		
		unset($response);
		
		$request = Curl::get($modernizr);
		
		$response = $request[0]->getContent();
		
		unset($request);
		
		$file = 'public/assets/modernizr.min.js';
		
		if ( File::exist($file) )
		{
			$content = File::get($file);
			
			if ( md5($content) != md5($response) )
			{
				File::put($file, $content);
				
				$this->info('Modernizr updated and published.');
			}
			else
			{
				$this->info('Modernizr up-to-date.');
			}
		}
		else
		{
			if ( ! File::isDirectory('public/assets') || ! File::isDirectory('public/assets/js') )
			{
				$this->call('bootstrap:publish');
			}
			
			File::put($file, $content);
			
			$this->info('Modernizr installed and published.');
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
