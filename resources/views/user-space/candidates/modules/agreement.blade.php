<div class="col-sm-6 d-flex align-items-stretch">
    <div class="card w-100 border mb-3">
        <div class="row p-3">
            <div class="col-lg-2" style="max-width: 80px">
                <span class="badge h-100 d-flex justify-content-center align-items-center bg-primary rounded"
                    style="font-size: 18px">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M4.26 10.147a60.438 60.438 0 0 0-.491 6.347A48.62 48.62 0 0 1 12 20.904a48.62 48.62 0 0 1 8.232-4.41 60.46 60.46 0 0 0-.491-6.347m-15.482 0a50.636 50.636 0 0 0-2.658-.813A59.906 59.906 0 0 1 12 3.493a59.903 59.903 0 0 1 10.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.717 50.717 0 0 1 12 13.489a50.702 50.702 0 0 1 7.74-3.342M6.75 15a.75.75 0 1 0 0-1.5.75.75 0 0 0 0 1.5Zm0 0v-3.675A55.378 55.378 0 0 1 12 8.443m-7.007 11.55A5.981 5.981 0 0 0 6.75 15.75v-1.5" />
                    </svg>
                </span>
            </div>
            <div class="col-lg-10">
                <p class="card-title text-dark">
                    {{ $model->level }}
                </p>
                <p class="card-body p-0">
                    {{ $model->domain }}
                </p>
                <p class="card-footer p-0 mb-1">
                    <span class="border text-white bg-dark border-dark rounded p-1">
                        {{ $model->insitute }}
                    </span>
                    &nbsp;
                    <span class="border text-white bg-dark border-dark rounded p-1">
                        {{ $model->year }}
                    </span>
                    &nbsp;
                    <span class="border text-white bg-dark border-dark rounded p-1">
                        {{ $model->country }}
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>
