<?php

namespace Pseux\Version;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Blade;

class VersionServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
		Blade::directive('version', function ($expression) {
			return "<?php echo $expression . '?v=' . filemtime(public_path($expression)); ?>";
		});
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
