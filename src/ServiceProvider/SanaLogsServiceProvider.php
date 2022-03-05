<?php

namespace swappco\SanaLogs\ServiceProvider;

use Illuminate\Support\ServiceProvider;
use SwappCo\SanaLogs\app\View\components\logo;
use SwappCo\SanaLogs\SanaLogs;

class SanaLogsServiceProvider extends ServiceProvider
{

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('SanaLogs', function () {
            return new SanaLogs();
        });
        $this->mergeConfigFrom(__DIR__ . '/../config/logging.php', 'SanaLogs');

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {

        $this->_loadComponenet();
        $this->_loadRoute();
        $this->_LoadViews();
        $this->_loadMigration();
        $this->_PublishConfig();
        $this->_PublishView();
        $this->_PublishMigrations();
//        $this->_PublishPublicAssets();


    }

    private function _loadRoute(): void
    {
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    private function _LoadViews(): void
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'x');
    }

    private function _loadMigration(): void
    {
        $this->loadMigrationsFrom(__DIR__ . '/../database/migrations/');

    }

    private function _PublishConfig(): void
    {
        $this->publishes([
            __DIR__ . '/../config/logging.php' => config_path('logging.php')
        ], 'swappco-SanaLogs-Config');
    }

    private function _PublishView(): void
    {
        $this->publishes([
            __DIR__ . '/../resources/views' => resource_path('views/vendor/SanaLogs')
        ], 'swappco-sana-views');
    }

    private function _PublishMigrations(): void
    {
        $this->publishes([
            __DIR__ . '/../database/migrations' => database_path('migrations')
        ], 'swappco-sana-migrations');
    }

    private function _PublishPublicAssets(): void
    {

        $this->publishes([
            __DIR__ . '/../resources/assets' => public_path('vendor/SanaLogs/assets')
        ], 'swappco-sana-assets');
    }

    private function _loadComponenet(): void
    {
        $this->loadViewComponentsAs('SanaLogs', [
            logo::class
        ]);
    }
}
