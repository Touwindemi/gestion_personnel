@extends('layouts.master')

@section('content')
    <div class="container-xl px-4 mt-4">
        <div class="row">
            <div class="col-xl-4">
                <!-- Profile picture card-->
                <div class="card mb-4 mb-xl-0">
                    <div class="card-header">Profile Picture</div>
                    <div class="card-body">
                        <!-- Profile picture image-->
                        <div class="d-flex justify-content-center">
                            @if ($finds->photo == '')
                                <img class="img-account-profile rounded-circle mb-2"
                                    src="{{ asset('asset/assets/img/demo/user-placeholder.svg') }}" alt="logo user" />
                            @else
                                <img class="img-account-profile rounded-circle mb-2"
                                    src="{{ asset('storage') . '/' . $finds->Agent->photo }}" alt="logo user" />
                            @endif
                        </div>
                        <!-- Profile picture help block-->
                        <div class="small font-italic text-muted mb-4 text-center">{{ $finds->Agent->matricule }}</div>
                        <!-- Profile picture upload button-->
                    </div>
                </div>
            </div>
            <div class="col-xl-8">
                <!-- Account details card-->
                <div class="card mb-4">
                    <div class="card-header">Detail du contrat</div>
                    <div class="card-body">
                        <form>
                            <!-- Form Row-->
                            <div class="row">
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>N° sécurité sociale</label>
                                        <input class="form-control" type="text" value="{{ $finds->Agent->num_secu_social }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Nom</label>
                                        <input class="form-control" type="text" value="{{ $finds->Agent->nom }}" readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Prénoms</label>
                                        <input class="form-control" type="text" value="{{ $finds->Agent->prenom }}" readonly />
                                    </div>
                                </div>
                            </div>
                            <div class="row">

                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Date de maissance</label>
                                        <input class="form-control" type="date" value="{{ $finds->Agent->date_nais }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Genre</label>
                                        <input class="form-control" type="text" value="{{ $finds->Agent->genre }}" readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Résidence</label>
                                        <input class="form-control" type="text" value="{{ $finds->Agent->residence }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Date d'embauche</label>
                                        <input class="form-control" type="date" value="{{ $finds->Agent->date_embauche }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Catégorie</label>
                                        <input class="form-control" type="text" value="{{ $finds->Agent->categorie }}"
                                            readonly />
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-12">
                                    <div class="mb-3">
                                        <label>Téléphone</label>
                                        <input class="form-control" type="number" value="{{ $finds->Agent->telephone }}"
                                            readonly />
                                    </div>
                                </div>


                                <hr>
                                <div class="row">
                                    <div class="col-lg-4 col-md-12">
                                        <div class="mb-3">
                                            <label>Code</label>
                                            <input class="form-control" type="text" value="{{ $finds->code }}"
                                                readonly />
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="mb-3">
                                            <label>Nature</label>
                                            <input class="form-control" type="text" value="{{ $finds->nature }}" readonly />
                                        </div>
                                    </div>
                                    <div class="col-lg-4 col-md-12">
                                        <div class="mb-3">
                                            <label>Statut</label>
                                            <input class="form-control" type="text" value="{{ $finds->statut }}" readonly />
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
    
                                    <div class="col-lg-12 col-md-12">
                                        <div class="mb-3">
                                            <label>Date de signature</label>
                                            <input class="form-control" type="date" value="{{ $finds->date_signature }}"
                                                readonly />
                                        </div>
                                    </div>
                                    
                                <!-- Form Group (email address)-->
                                <div class="row text-center mt-5">
                                    <div class="col-lg-4">
                                        <button class="btn btn-warning" type="button" data-bs-toggle="modal"
                                            data-bs-target="#formPasswordBackdrop">Modifier</button>
                                    </div>
                                    <div class="col-lg-4">
                                        <button class="btn btn-danger" type="button" data-bs-toggle="modal"
                                            data-bs-target="#formPasswordBackdrop">Supprimer</button>
                                    </div>
                                    <div class="col-lg-4">
                                        <a class="btn btn-success" type="button" href="{{ url('imprimer_contrat/' . $finds->id) }}">Imprimer</a>
                                    </div>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
