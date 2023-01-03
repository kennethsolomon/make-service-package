<?php

namespace KennethSolomon\MakeService\Console;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;

class MakeServiceCommand extends Command
{
	/**
	 * The name and signature of the console command.
	 *
	 * @var string
	 */
	protected $signature = 'make:service {file_name}';

	/**
	 * The console command description.
	 *
	 * @var string
	 */
	protected $description = 'Create Service File';

	/**
	 * Execute the console command.
	 *
	 * @return int
	 */
	public function handle()
	{
		Storage::disk('services')->put($this->argument('file_name') . '.php', $this->services());
	}

	public function services()
	{
		return
			'<?php
namespace App\Services;
class ' . $this->argument('file_name') . '
{
    private static $instance = null;
    public static function getInstance()
    {
        if (self::$instance == null) {
            self::$instance = new self;
        }
        return self::$instance;
    }
    public function Foobar()
    {
        // Code Here..
    }
}';
	}
}
