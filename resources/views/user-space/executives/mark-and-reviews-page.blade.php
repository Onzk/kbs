<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Notes & Avis</h3>
                <p class="text-subtitle text-muted">
                    Trouvez ici les avis laissés par ceux qui vous ont déjà contactés.
                </p>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-start align-items-middle h-100 mb-4">
        <span class="text-warning fw-bold pb-2" style="font-size: 55px">
            4.5
        </span>
        <span class="badge rounded py-2 mt-1">
            <i data-feather="star" style="height: 70px; width: 50px" fill="orange" class="text-warning p-0 m-0"></i>
            <i data-feather="star" style="height: 70px; width: 50px" fill="orange" class="text-warning p-0 m-0"></i>
            <i data-feather="star" style="height: 70px; width: 50px" fill="orange" class="text-warning p-0 m-0"></i>
            <i data-feather="star" style="height: 70px; width: 50px" fill="orange" class="text-warning p-0 m-0"></i>
            <i data-feather="star" style="height: 70px; width: 50px" fill="dark" class="text-dark p-0 m-0"></i>
        </span>
    </div>

    <!-- Reviews start -->
    <div class="col-12">
        <div class="card h-100">
            <div class="card-header pb-1 pt-2 mb-2 bg-dark">
                <h4 class="card-title text-white">25 Avis</h4>
            </div>
            <div class="card-body pt-3">
                <div class="row">
                    @for ($i = 0; $i < 8; $i++)
                    <div class="col-md-6 col-12">
                        <div class="form-group shadow">
                            <div class="form-control p-4">
                                <div class="row align-items-center justify-content-start mb-2">
                                    <div class="avatar col-md-2">
                                        <img src="{{ asset('assets/user-space/images/logo.png') }}"
                                            class="border rounded-circle border-primary"
                                            style="width:80px; height: 80px; object-fit: cover;" alt=""
                                            srcset="">
                                    </div>
                                    <div class="col-md-10">
                                        <span class="text-primary" style="font-weight: bold; font-size: 20px">
                                            KAPI Consult
                                        </span>
                                        <br>
                                        <span class="align-middle">
                                            <i data-feather="star" style="height: 20px; width: 20px" fill="orange"
                                                class="text-warning p-0 m-0"></i>
                                            <i data-feather="star" style="height: 20px; width: 20px" fill="orange"
                                                class="text-warning p-0 m-0"></i>
                                            <i data-feather="star" style="height: 20px; width: 20px" fill="orange"
                                                class="text-warning p-0 m-0"></i>
                                            <i data-feather="star" style="height: 20px; width: 20px" fill="orange"
                                                class="text-warning p-0 m-0"></i>
                                            <i data-feather="star" style="height: 20px; width: 20px" fill="dark"
                                                class="text-dark p-0 m-0"></i>
                                        </span>
                                    </div>
                                </div>
                                <hr>
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo inventore cupiditate
                                asperiores labore ratione libero rem, ut nemo, laboriosam sed recusandae esse
                                maiores
                                earum reiciendis aut cum quis. Dignissimos, amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo inventore cupiditate
                                asperiores labore ratione libero rem, ut nemo, laboriosam sed recusandae esse
                                maiores
                                earum reiciendis aut cum quis. Dignissimos, amet.
                                Lorem ipsum dolor sit amet, consectetur adipisicing elit. Illo inventore cupiditate
                                asperiores labore ratione libero rem, ut nemo, laboriosam sed recusandae esse
                                maiores
                                earum reiciendis aut cum quis. Dignissimos, amet.
                                <hr>
                                <span class="text-muted">20 Juin 2024, 7h 08m</span>
                            </div>
                        </div>
                    </div>
                    @endfor
                </div>
            </div>
        </div>
    </div>
    <!-- Reviews end -->

</div>
