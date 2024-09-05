<?php

namespace App\Providers;

use App\Models\Contrat;
use App\Models\Mission;
use App\Models\Paiement;
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

        Contrat::created(function ($contrat) {
            $contrat->update(['code' => 'CONT-00' . $contrat->id]);
        });

        Paiement::created(function ($paie) {
            $paie->update(['code' => 'PAI-00' . $paie->id]);

            //Calcul des indemnités
            $paie->update(['total_indemnite' => $paie->prime_anciennete + $paie->prime_logement + $paie->prime_transport + $paie->prime_divers]);

            //Calcul de salaire brut
            $paie->update(['salaire_brut' => $paie->sal_base + $paie->total_indemnite]);

            //Calcul du retenues sur salaire
            $paie->update(['total_retenue' => $paie->uits + $paie->cotisation_sociale + $paie->impot + $paie->avance_pret + $paie->mutuelle_payee]);

            //Salaire net à payer
            $paie->update(['sal_net' => $paie->salaire_brut - $paie->total_retenue]);
        });
        
        Mission::created(function ($code) {
            $code->update(['code' => 'Miss-00' . $code->id]);
        });
    }
}