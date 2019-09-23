<?php
namespace Ngant\Admin_package\Providers;

use Illuminate\Support\ServiceProvider;

class AdminServiceProvider extends ServiceProvider
{
/**
   * Bootstrap the application services.
   *
   * @return void
   */
  public function boot()
  {
      // load routes
      $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

      // load view files
      $this->loadViewsFrom(__DIR__.'/../views', 'admin');

      // publish files
      $this->publishes([
      __DIR__.'/../views' => resource_path('views/vendor/admin'),
    ]);
  }

  /**
   * Register the application services.
   *
   * @return void
   */
  public function register()
  {
  }
}