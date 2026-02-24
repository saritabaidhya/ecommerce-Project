<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\superAdmin\Setting; 
use App\Models\superAdmin\Utility; 
use App\Models\superAdmin\Grant; 
use App\Models\frontEnd\Connect; 
use Illuminate\Support\Facades\View;
use App\Models\superAdmin\UtilityType;
use App\Models\superAdmin\UtilitysubType;

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
        $settings = Setting::all();
        $menuhards = Utility::where('status' ,1)->where('category' ,1)->limit(3)->get();
        $menusofts = Utility::where('status' ,1)->where('category' ,2)->limit(3)->get();
        $utilitytypes = UtilityType::where('status', 1)->get();
        $utilitysubtypes = UtilitysubType::where('status', 1)->withCount('utilities')->orderBy('order', 'desc')->get();

        $trails = Utility::where('status' ,1)->get();
        $grants = Grant::where('status' ,1)->get();
        $notifications = Connect::latest()->take(5)->get();
        View::share('settings', $settings);
        View::share('notifications', $notifications);
        View::share('menuhards', $menuhards);
         View::share('menusofts', $menusofts);
         View::share('trails', $trails);
         View::share('grants', $grants);
         View::share('utilitytypes', $utilitytypes);
         View::share('utilitysubtypes', $utilitysubtypes);
    }
}
