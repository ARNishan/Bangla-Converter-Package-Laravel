<?php
namespace ArNishan\BanglaConverter;
use Illuminate\Support\ServiceProvider;
use ArNishan\BanglaConverter\Translate;

class TranslatorServiceProvider extends ServiceProvider{

    public function boot()
    {
        require __DIR__ . '/../vendor/autoload.php';

    }

    public function register()
    {
        $this->app->bind('translate', function() {
            return new Translate();
        });

    }

}
