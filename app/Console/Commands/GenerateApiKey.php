<?php

namespace App\Console\Commands;

use App\Models\ApiKey;
use Illuminate\Support\Str;
use Illuminate\Console\Command;

class GenerateApiKey extends Command
{
    protected $signature = 'make:generate-api-key';
    protected $description = 'Generate and store a new API key';

    public function __construct()
    {
        parent::__construct();
    }

    public function handle()
    {
        $apiKey = ApiKey::create(['key' => Str::random(80)]);

        $this->info('API key generated and stored successfully.');
        $this->info('Generated API key: ' . $apiKey->key);
    }
}
