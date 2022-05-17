<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Log;
use Laravel\Scout\EngineManager;
use Laravel\Scout\Engines\MeiliSearchEngine;
use MeiliSearch\Client;
use MeiliSearch\Endpoints\Indexes;

// Sync search indexes
// Ref https://github.com/meilisearch/meilisearch-laravel-scout/wiki/Indexes-settings-using-model

class ScoutSync extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'scout:sync {model? : Class name of model to update settings}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sync your configuration with meilisearch';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->client = app(EngineManager::class)->driver('meilisearch');
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        if ($namespace = $this->argument('model')) {
            $model = new $namespace;
            $this->syncModel($model);
            return;
        }

        $this->syncAll();
        return Command::SUCCESS;
    }

    private function syncModel($model): void
    {
        if ($this->hasSettings($model)) {
            $this->updateSettings($model);
        }
    }

    private function syncAll(): void
    {
        collect(scandir(app_path('Models')))->each(
            function ($path) {
                if ($path === '.' || $path === '..') {
                    return true;
                }

                $namespace = 'App\Models\\' . substr($path, 0, -4);
                $model = new $namespace;
                $this->syncModel($model);
            }
        );
    }

    private function updateSettings($model): void
    {
        $index = $this->client->index($model->searchableAs());
        collect($model->meilisearchSettings)->each(
            function ($value, $key) use ($index) {
                $status = $index->{$key}($value);
                $this->line("{$key} has been updated, updateId: {$status['updateId']}");
            }
        );
    }

    private function hasSettings($model): bool
    {
        return in_array(Searchable::class, class_uses($model)) && property_exists($model, 'meilisearchSettings');
    }
}
