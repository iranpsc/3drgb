<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;
use Livewire\Livewire;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Blade::directive('hasRole', fn ($role) => "<?php if(auth()->check() && auth()->user()->hasRole({$role})): ?>");
        Blade::directive('endHasRole', fn () => '<?php endif; ?>');
        
        Livewire::addPersistentMiddleware([
            \App\Http\Middleware\Admin::class,
        ]);
    }
}
