<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-primary">Profil</h3>
                <p class="text-subtitle text-muted">
                    Voici les détails professionnels vous concernant.
                </p>
            </div>
        </div>
    </div>

    <div class="col-12">
        <span class="badge bg-success rounded text-xs fw-bold mb-3">
            COMPTE ACTIF
        </span>
        <span class="badge bg-success rounded text-xs fw-bold mb-3">
            AUCUN CONTRAT EN COURS
        </span>
        <span class="badge bg-success rounded text-xs fw-bold mb-3">
            ACTUELLEMENT DISPONIBLE
        </span>
    </div>

    <!-- Personnal Informations start -->
    <div class="col-12">
        <div class="card h-100">
            <div class="card-header pb-1 pt-2 mb-2 bg-dark">
                <h4 class="card-title text-white">Informations personnelles</h4>
            </div>
            <div class="card-body pb-2 pt-3">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <p class="w-100">
                                <img src="{{ asset('assets/public/img/avatar.png') }}"
                                    class="border w-100 rounded-lg h-100" style="object-fit: cover;" alt=""
                                    srcset="">
                            </p>
                        </div>
                        <div class="form-group h-100">
                            <span class="badge bg-primary rounded p-2 w-100">
                                <i data-feather="star" width="15" fill="orange" class="text-warning p-0 m-0"></i>
                                <i data-feather="star" width="15" fill="orange" class="text-warning p-0 m-0"></i>
                                <i data-feather="star" width="15" fill="orange" class="text-warning p-0 m-0"></i>
                                <i data-feather="star" width="15" fill="orange" class="text-warning p-0 m-0"></i>
                                <i data-feather="star" width="15" class="p-0 m-0"></i>
                            </span>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="lastname">Nom</label>
                            <p class="form-control" id="lastname">
                                GADJI
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="firstname">Prénoms</label>
                            <p class="form-control" id="firstname">
                                Maturin A.
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="firstname">A Propos</label>
                            <p class="form-control" id="firstname">
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo inventore cupiditate
                                asperiores labore ratione libero rem, ut nemo, laboriosam sed recusandae esse maiores
                                earum reiciendis aut cum quis. Dignissimos, amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo inventore cupiditate
                                asperiores labore ratione libero rem, ut nemo, laboriosam sed recusandae esse maiores
                                earum reiciendis aut cum quis. Dignissimos, amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo inventore cupiditate
                                asperiores labore ratione libero rem, ut nemo, laboriosam sed recusandae esse maiores
                                earum reiciendis aut cum quis. Dignissimos, amet.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Personnal Informations end -->

    <div class="row">
        <div class="col-12 mb-0">
            <!-- Contact start -->
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header pb-1 pt-2 mb-2 bg-dark">
                            <h4 class="card-title text-white">Contacts</h4>
                        </div>
                        <div class="card-body pb-2">
                            <div class="row">
                                @foreach ([
        'Courriel' => 'GADJI@gmail.com',
        'Téléphone' => '+228 90900909',
        'Linkedin' => 'https://linkedin.com/GADJI_frederic',
        'Facebook' => 'https://facebook.com/GADJI_frederic',
        'Twitter' => 'https://x.com/GADJI_frederic',
        'Whatsapp' => '+228 90900909',
    ] as $key => $value)
                                    <div class="col-md-6 col">
                                        <div class="form-group">
                                            <label>{{ $key }}</label>
                                            <p type="text" class="form-control">
                                                {{ $value }}
                                            </p>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact end -->

            <!-- Availability start -->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header pb-1 pt-2 mb-2 bg-dark">
                                <h4 class="card-title text-white">Disponibilités</h4>
                            </div>
                            <div class="card-body pb-0">
                                <div class="row">
                                    @foreach (['02/04/2024 - 02/05/2024', '04/06/2024 - 02/07/2024', '04/06/2024 - 02/07/2024', '04/06/2024 - 02/07/2024', '02/04/2024 - 02/05/2024', '04/06/2024 - 02/07/2024', '04/06/2024 - 02/07/2024', '04/06/2024 - 02/07/2024'] as $value)
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <p type="text" class="form-control text-center">
                                                    {{ $value }}
                                                </p>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Availability end -->

            <!-- Education start -->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header pb-1 pt-2 mb-2 bg-dark">
                                <h4 class="card-title text-white">Education</h4>
                            </div>
                            <div class="card-body pb-0 pt-3">
                                <div class="row">
                                    @foreach ([
        [
            'degree' => 'Licence Professionnelle',
            'institute' => 'ESGIS Business School',
            'start_date' => '10 Septembre 2016',
            'end_date' => '12 Juillet 2019',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam magni fugit inventore repudiandae quos deserunt labore fugiat voluptatum suscipit eos quod animi quaerat omnis sequi delectus quia at, distinctio possimus dicta minus accusamus? Exercitationem dicta aliquam molestias modi maiores. Repellat atque nulla nihil odit sunt.',
        ],
    ] as $value)
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <span
                                                            class="badge bg-primary rounded">{{ $value['institute'] }}</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $value['degree'] }}</h5>
                                                        <p class="card-text">{{ $value['description'] }}</p>
                                                        <p class="card-text text-xs">
                                                            {{ $value['start_date'] . ' - ' . $value['end_date'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <span
                                                            class="badge bg-primary rounded">{{ $value['institute'] }}</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $value['degree'] }}</h5>
                                                        <p class="card-text">{{ $value['description'] }}</p>
                                                        <p class="card-text text-xs">
                                                            {{ $value['start_date'] . ' - ' . $value['end_date'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Education end -->

            <!-- Professionnal experiences start -->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header pb-1 pt-2 mb-2 bg-dark">
                                <h4 class="card-title text-white">Expériences professionnelles</h4>
                            </div>
                            <div class="card-body pb-0 pt-3">
                                <div class="row">
                                    @foreach ([
        [
            'title' => 'Directeur commercial',
            'organization' => 'VLISCO Africa',
            'start_date' => '23 Mai 2020',
            'end_date' => '9 Novembre 2023',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam magni fugit inventore repudiandae quos deserunt labore fugiat voluptatum suscipit eos quod animi quaerat omnis sequi delectus quia at, distinctio possimus dicta minus accusamus? Exercitationem dicta aliquam molestias modi maiores. Repellat atque nulla nihil odit sunt.',
        ],
    ] as $value)
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <span
                                                            class="badge bg-primary rounded">{{ $value['organization'] }}</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $value['title'] }}</h5>
                                                        <p class="card-text">{{ $value['description'] }}</p>
                                                        <p class="card-text text-xs">
                                                            {{ $value['start_date'] . ' - ' . $value['end_date'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <span
                                                            class="badge bg-primary rounded">{{ $value['organization'] }}</span>
                                                    </div>
                                                    <div class="card-body">
                                                        <h5 class="card-title">{{ $value['title'] }}</h5>
                                                        <p class="card-text">{{ $value['description'] }}</p>
                                                        <p class="card-text text-xs">
                                                            {{ $value['start_date'] . ' - ' . $value['end_date'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Professionnal experiences end -->

            <!-- Projects start -->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header pb-1 pt-2 mb-2 bg-dark">
                                <h4 class="card-title text-white">Projets</h4>
                            </div>
                            <div class="card-body pb-0 pt-3">
                                <div class="row">
                                    @foreach ([
        [
            'title' => 'Chaîne d\'approvisionnement de VLISCO',
            'description' => 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aliquam magni fugit inventore repudiandae quos deserunt labore fugiat voluptatum suscipit eos quod animi quaerat omnis sequi delectus quia at, distinctio possimus dicta minus accusamus? Exercitationem dicta aliquam molestias modi maiores. Repellat atque nulla nihil odit sunt.',
        ],
    ] as $value)
                                        <div class="col-sm-4">
                                            <div class="form-group">
                                                <div class="card">
                                                    <div class="card-header bg-primary">
                                                        <span
                                                            class="text-bold text-white rounded">{{ $value['title'] }}</span>
                                                    </div>
                                                    <div class="card-body pt-2">
                                                        <p class="card-text">{{ $value['description'] }}</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Projects end -->

            <!-- Skills start -->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header pb-1 pt-2 mb-2 bg-dark">
                                <h4 class="card-title text-white">Compétences</h4>
                            </div>
                            <div class="card-body pb-0 pt-3">
                                <div class="row">
                                    @foreach ([
        [
            'label' => 'Leadership & Management',
            'percentage' => 99,
        ],
        [
            'label' => 'Eloquence',
            'percentage' => 80,
        ],
    ] as $value)
                                        <div class="col-sm-3">
                                            <div class="form-group">
                                                <div class="card">
                                                    <div class="card-header">
                                                        <span class="text-bold rounded">{{ $value['label'] }}</span>
                                                    </div>
                                                    <div class="progress border-primary bg-gray rounded-0"
                                                        style="height: 16px;">
                                                        <div class="progress-bar progress-bar-striped"
                                                            style="border-radius: 0px !important; width:{{ $value['percentage'] }}%"
                                                            role="progressbar"
                                                            aria-valuenow="{{ $value['percentage'] }}"
                                                            aria-valuemin="0" aria-valuemax="100">
                                                            {{ $value['percentage'] }}%</div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Skills end -->

            <!-- Languages start -->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header pb-1 pt-2 mb-2 bg-dark">
                                <h4 class="card-title text-white">Langues</h4>
                            </div>
                            <div class="card-body pb-2">
                                <div class="row">
                                    <ul class="list-group list-group-flush">
                                        @foreach ([
                                                [
                                                    'label' => 'Français',
                                                    'level' => 'native',
                                                ],
                                                [
                                                    'label' => 'Anglais',
                                                    'level' => 'advanced',
                                                ],
                                                [
                                                    'label' => 'Ewe',
                                                    'level' => 'intermediate',
                                                ],
                                                [
                                                    'label' => 'Allemand',
                                                    'level' => 'novice',
                                                ],
                                            ] as $value)
                                            <li class="list-group-item">
                                                <span class="d-flex justify-content-between align-items-center">
                                                    {{ $value["label"] }}
                                                    <span @class([
                                                        "badge rounded",
                                                        "bg-success" => $value["level"] == "advanced",
                                                        "bg-danger" => $value["level"] == "novice",
                                                        "bg-warning" => $value["level"] == "intermediate",
                                                        "bg-info" => $value["level"] == "native",
                                                        ])>
                                                        @switch($value["level"])
                                                            @case("advanced")Avancé @break
                                                            @case("novice")Débutant @break
                                                            @case("intermediate")Médium @break
                                                            @case("native")Native @break
                                                            @default -
                                                        @endswitch
                                                        </span>
                                                </span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="card">
                            <div class="card-header pb-1 pt-2 mb-2 bg-dark">
                                <h4 class="card-title text-white">Centres d'intérêts</h4>
                            </div>
                            <div class="card-body pb-2 pt-2">
                                <div class="">
                                        @foreach ([
                                                ['label' => 'Football'],
                                                ['label' => 'Jeux Vidéos'],
                                                ['label' => 'Tennis'],
                                                ['label' => 'Basket'],
                                                ['label' => 'Boxe'],
                                            ] as $value)
                                            <span class="badge bg-primary py-2 mb-2 px-4 rounded">
                                                {{ $value["label"] }}
                                            </span>
                                        @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Languages end -->
        </div>
    </div>

</div>
