<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3>Profil</h3>
                <p class="text-subtitle text-muted">
                    Voici les détails professionnels vous concernant.
                </p>
            </div>
        </div>
    </div>
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Informations personnelles</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-3">
                        <div class="form-group">
                            <label for="basicInput">Photo de Profil</label>
                            <p class="w-100">
                                <img src="{{ asset('assets/public/img/avatar.png') }}"
                                    class="border w-100 rounded-lg"
                                    style="object-fit: cover;" alt=""
                                    srcset="">
                            </p>
                        </div>
                        <div class="form-group">
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
                                DEGBE
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="firstname">Prénoms</label>
                            <p class="form-control" id="firstname">
                                Frédéric A.
                            </p>
                        </div>
                        <div class="form-group">
                            <label for="firstname">Etats</label>
                            <p id="firstname" class="form-control">
                                <span class="badge bg-success rounded px-2 py-1 text-xs fw-bold">COMPTE ACTIF</span>
                                <span class="badge bg-info rounded px-2 py-1 text-xs fw-bold">AUCUN CONTRAT EN COURS</span>
                                <span class="badge bg-success rounded px-2 py-1 text-xs fw-bold">ACTUELLEMENT DISPONIBLE</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Basic Inputs end -->

    <!-- Input Style start -->
    <section id="input-style">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Styles</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p>To set rounded border to input box, use <code>.round</code> class and
                                    to set square border to input box, use <code>.sqaure</code> class
                                    alongwith
                                    <code>.form-control</code> class.
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="roundText">Rounded Input</label>
                                    <input type="text" id="roundText" class="form-control round"
                                        placeholder="Rounded Input">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="squareText">Square Input</label>
                                    <input type="text" id="squareText" class="form-control square"
                                        placeholder="Square Input">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Input Style end -->

    <!-- Horizontal Input start -->
    <section id="horizontal-input">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Horizontal Input</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p>To make label in center of form-control, use <code>.col-form-label</code>
                                    class with
                                    <code>&lt;label&gt;</code> element. This is default bootstrap class.
                                </p>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-3">
                                        <label class="col-form-label">First Name</label>
                                    </div>
                                    <div class="col-lg-10 col-9">
                                        <input type="text" id="first-name" class="form-control" name="fname"
                                            placeholder="First Name">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group row align-items-center">
                                    <div class="col-lg-2 col-3">
                                        <label class="col-form-label">Last Name</label>
                                    </div>
                                    <div class="col-lg-10 col-9">
                                        <input type="text" id="last-name" class="form-control" name="fname"
                                            placeholder="Last Name">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Horizontal Input end -->

    <!-- Basic File Browser start -->
    <section id="input-file-browser">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">File Input</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 col-md-12">
                                <p>Default</p>
                                <div class="form-file">
                                    <input type="file" class="form-file-input" id="customFile">
                                    <label class="form-file-label" for="customFile">
                                        <span class="form-file-text">Choose file...</span>
                                        <span class="form-file-button">Browse</span>
                                    </label>
                                </div>
                            </div>
                            <div class="col-lg-6 col-md-12">
                                <p>With Icon And Button Color</p>
                                <div class="form-file">
                                    <input type="file" class="form-file-input" id="customFile">
                                    <label class="form-file-label" for="customFile">
                                        <span class="form-file-text">Choose file...</span>
                                        <span class="form-file-button btn-primary "><i
                                                data-feather="upload"></i></span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Basic File Browser end -->

    <!-- Input with Icons start -->
    <section id="input-with-icons">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input with Icons</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p>For Input Box with icon use <code>.position-relative</code> class with
                                    <code>.form-group</code> and use class <code>.has-icon-left</code> or
                                    <code>.has-icon-right</code> class for icon on
                                    left side.
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <h6>Left Icon</h6>
                                <div class="form-group position-relative has-icon-left">
                                    <input type="text" class="form-control" placeholder="Input with icon left">
                                    <div class="form-control-icon">
                                        <i data-feather="user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <h6>Right Icon</h6>
                                <div class="form-group position-relative has-icon-right">
                                    <input type="text" class="form-control"
                                        placeholder="Icon Right, Default Input">
                                    <div class="form-control-icon">
                                        <i data-feather="file"></i>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Input with Icons end -->

    <!-- Input Sizing start -->
    <section id="input-sizing">
        <div class="row match-height">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Control Sizing Option</h4>
                    </div>

                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p>For different sizes of Input, Use classes like
                                    <code>.form-control-lg</code> &amp;
                                    <code>.form-control-sm</code> for Large, Small input box.
                                </p>
                            </div>
                            <div class="col-sm-4">
                                <h6>Large</h6>
                                <input class="form-control form-control-lg" type="text" placeholder="Large Input">
                            </div>
                            <div class="col-sm-4">
                                <h6>Default</h6>
                                <input class="form-control" type="text" placeholder="Default Input">
                            </div>
                            <div class="col-sm-4">
                                <h6>Small</h6>
                                <input class="form-control form-control-sm" type="text" placeholder="Small Input">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Input Sizing end -->

    <!-- validations start -->
    <section id="input-validation">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Input Validation States</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-12">
                                <p>You can indicate invalid and valid form fields with
                                    <code>.is-invalid</code> and
                                    <code>.is-valid</code>. Note that <code>.invalid-feedback</code> is also
                                    supported
                                    with these classes.
                                </p>
                            </div>
                            <div class="col-sm-6">
                                <label for="valid-state">Valid State</label>
                                <input type="text" class="form-control is-valid" id="valid-state"
                                    placeholder="Valid" value="Valid" required>
                                <div class="valid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    This is valid state.
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <label for="invalid-state">Invalid State</label>
                                <input type="text" class="form-control is-invalid" id="invalid-state"
                                    placeholder="Invalid" value="Invalid" required>
                                <div class="invalid-feedback">
                                    <i class="bx bx-radio-circle"></i>
                                    This is invalid state.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
