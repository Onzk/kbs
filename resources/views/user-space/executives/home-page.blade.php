<div class="main-content container-fluid">
    <div class="page-title">
        <h3 class="text-primary">Accueil</h3>
        <p class="text-subtitle text-muted">Vos activités récentes sont indiquées ici.</p>
    </div>
    <section class="section">
        <div class="row">
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Total Contrats</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>8</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Contrats en cours</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>1</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Contrats Achevés</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>2</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-3">
                <div class="card card-statistic">
                    <div class="card-body p-0">
                        <div class="d-flex flex-column">
                            <div class='px-3 py-3 d-flex justify-content-between'>
                                <h3 class='card-title'>Contrats Annulés</h3>
                                <div class="card-right d-flex align-items-center">
                                    <p>5 </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="page-title mt-4">
            <p class="text-subtitle text-muted">Nos nouveaux webinaires</p>
        </div>
        <div class="row">
            @for ($i = 0; $i < 3; $i++)
                @include('user-space.components.webinary')
            @endfor
        </div>
        <div class="page-title mt-4">
            <p class="text-subtitle text-muted">Nos nouvelles publications</p>
        </div>
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                @include('user-space.components.post')
            @endfor
        </div>
    </section>
</div>
