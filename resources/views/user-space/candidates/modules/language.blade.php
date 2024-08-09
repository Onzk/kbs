<div class="col-lg-3 pb-0">
    <div class="border">
        <span class="fw-bold d-block p-2 text-center">
            {{ $model->title }}
        </span>
        <div class="bg-primary d-flex pb-0 align-items-center">
            <div class="col-4">
                <span class="badge w-100 p-2">
                    Parler : {{ __($model->parse($model->speaking) ?? " - ") }}
                </span>
            </div>
            <div class="col-4">
                <span class="badge w-100 p-2">
                   Ecrire : {{ __($model->parse($model->writing) ?? " - ") }}
                </span>
            </div>
            <div class="col-4">
                <span class="badge w-100 p-2">
                   Lire : {{ __($model->parse($model->reading) ?? " - ") }}
                </span>
            </div>
        </div>
    </div>
</div>
