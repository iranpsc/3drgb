<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::directive('hasRole', function (string $role) {
            return "<?php if(Auth::user()->hasRole({$role})): ?>";
        });

        Blade::directive('endHasRole', function () {
            return '<?php endif; ?>';
        });
    }
}
