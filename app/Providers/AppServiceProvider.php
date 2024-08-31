<?php

namespace App\Providers;

use App\Models\Contrat;
use App\Models\Mission;
use App\Models\Personnel;
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

        // si on fini d'enregistrer un personnel, il cree un matricule en mettant le champ MATRICULE à jour
        Personnel::created(function ($person_mat) {
            $person_mat->update(['matricule' => 'M-000' . $person_mat->id]);
        });

        Contrat::created(function ($contrat_code) {
            $contrat_code->update(['code' => 'CONT-00' . $contrat_code->id]);
        });

        Mission::created(function ($code) {
            $code->update(['code' => 'Miss-00' . $code->id]);
        });
    }
}
