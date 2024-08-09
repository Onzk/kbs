@php($_user = Auth::guard('candidates')->user())
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-6 order-md-1 order-last">
                <h3 class="text-primary">Contact</h3>
                <p class="text-subtitle text-muted">
                    Définissez les informations nécessaires pour vous contacter.
                </p>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12 mb-0">
            <div class="row">
                <div class="col">
                    <div class="card">
                        <div class="card-header pb-1 pt-2 mb-2 bg-dark">
                            <h4 class="card-title text-white">Moyens de contact</h4>
                        </div>
                        <form class="card-body">
                            <div class="row mb-4">
                                @foreach ([
        'Courriel' => ['email', 'GADJI@gmail.com'],
        'Téléphone' => ['text', '+228 90900909'],
        'Linkedin' => ['url', 'https://linkedin.com/GADJI_frederic'],
        'Facebook' => ['url', 'https://facebook.com/GADJI_frederic'],
        'Twitter' => ['url', 'https://x.com/GADJI_frederic'],
        'Whatsapp' => ['text', '+228 90900909'],
    ] as $key => $value)
                                    <div class="col-sm-6 col-12">
                                        <div class="form-group">
                                            <label for="{{ $key }}">{{ $key }}</label>
                                            <input type="{{ $value[0] }}" value="{{ $value[1] }}" placeholder="{{ $key }}" class="form-control"/>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <div class="mt-4">
                                <button type="submit" class="btn col-md-3 icon icon-left btn-primary">
                                    Confirmer
                                </button>
                                <button type="reset" class="btn icon icon-left btn-light">
                                    Annuler
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>
