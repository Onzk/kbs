<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6">
                <h3>Notes & Avis</h3>
                <p class="text-subtitle text-muted">
                    Trouvez ici les avis laissés par ceux qui vous ont déjà contactés.
                </p>
            </div>
            <div class="col-md-6 d-flex justify-content-end align-items-center h-100">
                <span class="text-warning fw-bold h2">
                    4.5
                </span>
                <span class="badge rounded">
                    <i data-feather="star" style="height: 50px;" fill="orange" class=" text-warning p-0 m-0"></i>
                    <i data-feather="star" style="height: 50px;" fill="orange" class=" text-warning p-0 m-0"></i>
                    <i data-feather="star" style="height: 50px;" fill="orange" class=" text-warning p-0 m-0"></i>
                    <i data-feather="star" style="height: 50px;" fill="orange" class=" text-warning p-0 m-0"></i>
                    <i data-feather="star" style="height: 50px;" fill="dark" class=" text-dark p-0 m-0"></i>
                </span>
            </div>
        </div>
    </div>

    

    <!-- Reviews start -->
    <div class="col-12">
        <div class="card h-100">
            <div class="card-header pb-1 pt-2 mb-2 bg-dark">
                <h4 class="card-title text-white">25 Avis</h4>
            </div>
            <div class="card-body pt-3 pb-0">
                <div class="row">
                    @for ($i = 0; $i < 8; $i++)
                    <div class="col-md-6 col-12 mb-3">
                        <div class="form-group shadow">
                            <div class="form-control p-4">
                                <div class="row align-items-center justify-content-start mb-2">
                                    <div class="avatar col-md-1">
                                        <img src="{{ asset('assets/user-space/images/logo.png') }}"
                                            class="border rounded-circle border-primary"
                                            style="width:50px; height: 50px; object-fit: cover;" alt=""
                                            srcset="">
                                    </div>
                                    <div class="col-md-10 mx-1">
                                        <span class="text-primary" style="font-weight: bold; font-size: 18px">
                                            KAPI Consult
                                        </span>
                                        <br>
                                        <span class="text-dark" style="font-size: 12px">
                                            Cabinet d'études et de conseils
                                        </span>
                                    </div>
                                </div>
                                <hr>
                                <p class="align-middle">
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
                                </p>
                                <p>
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
                                </p>
                                <span style="height: 30px" class="text-muted">20 Juin 2024, 7h 08m</span>
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
