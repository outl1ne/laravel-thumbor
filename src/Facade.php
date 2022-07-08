<?php

namespace Outl1ne\LaravelThumbor;

use Outl1ne\LaravelThumbor\Url\BuilderFactory;
use Outl1ne\LaravelThumbor\Mocked\Url\BuilderFactory as FakeBuilderFactory;

class Facade extends \Illuminate\Support\Facades\Facade
{
    protected static function getFacadeAccessor()
    {
        $url = config('thumbor.url');
        $key = config('thumbor.key');

        if ($url && $key) {
            return BuilderFactory::class;
        }
        return FakeBuilderFactory::class;
    }
}
