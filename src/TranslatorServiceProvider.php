<?php
namespace ArNishan\BanglaConverter;
use Illuminate\Support\ServiceProvider;
use ArNishan\BanglaConverter\Translate;

class TranslatorServiceProvider extends ServiceProvider{

    public function boot()
    {

    }

    public function register()
    {
        $this->app->bind('translate', function() {
            return new Translate();
        });

    }

}
