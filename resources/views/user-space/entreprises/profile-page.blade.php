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
                                <img src="{{ asset('assets/user-space/images/entreprise.png') }}"
                                    class="border w-100 rounded-lg h-100" style="object-fit: cover;" alt=""
                                    srcset="">
                            </p>
                        </div>
                    </div>
                    <div class="col-md-9">
                        <div class="form-group">
                            <label for="lastname">Nom</label>
                            <p class="form-control" id="lastname">
                                POLARIS Transport
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="lastname">Secteur d'activité</label>
                            <p class="form-control" id="lastname">
                                Transport et Logistique
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
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis ex quasi itaque, in
                                placeat iure libero alias nemo nostrum. Corporis officia quasi nemo eum distinctio.
                                Nobis eligendi voluptates esse omnis fuga corporis iure, ratione tenetur laboriosam
                                possimus voluptatum totam ipsum?
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
        'Courriel' => 'degbe@gmail.com',
        'Téléphone' => '+228 90900909',
        'Linkedin' => 'https://linkedin.com/degbe_frederic',
        'Facebook' => 'https://facebook.com/degbe_frederic',
        'Twitter' => 'https://x.com/degbe_frederic',
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
        </div>
    </div>
</div>
