<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;
use App\Models\Eleve;
use App\Models\Frais;
use App\Models\Option;
use App\Models\Section;
use App\Models\Promotion;
use App\Models\Paiement;

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
        Schema::defaultStringLength(200);

        Route::bind('Frais', function($id){
            return Frais::findOrFail($id);
        });
        Route::bind('Eleve', function($id){
            return Eleve::findOrFail($id);
        });
        Route::bind('Option', function($id){
            return Option::findOrFail($id);
        });
        Route::bind('Promotion', function($id){
            return Promotion::findOrFail($id);
        });
        Route::bind('Section', function($id){
            return Section::findOrFail($id);
        });
        Route::bind('Paiement', function($id){
            return Paiement::findOrFail($id);
                });



    }
}
