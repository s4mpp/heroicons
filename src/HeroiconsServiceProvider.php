<?php

namespace S4mpp\Heroicons;

use S4mpp\Heroicons\Icon;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
  
class HeroiconsServiceProvider extends ServiceProvider 
{
	public function boot()
	{
		Blade::component('icon', Icon::class);

		$this->loadViewsFrom(__DIR__.'/../icons', 'heroicons');
	}
}