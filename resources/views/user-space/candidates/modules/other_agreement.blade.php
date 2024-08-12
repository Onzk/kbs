<div class="col-sm-6 d-flex align-items-stretch">
    <div class="card w-100 shadow-md border mb-3">
        <div class="row p-3">
            <div class="col-lg-2" style="max-width: 80px">
                <span class="badge h-100 d-flex justify-content-center align-items-center bg-primary rounded"
                    style="font-size: 18px">
                    <svg xmlns="http://www.w3.org/2000/svg" style="width: 50px" fill="none" viewBox="0 0 24 24"
                        stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M9 12.75 11.25 15 15 9.75M21 12c0 1.268-.63 2.39-1.593 3.068a3.745 3.745 0 0 1-1.043 3.296 3.745 3.745 0 0 1-3.296 1.043A3.745 3.745 0 0 1 12 21c-1.268 0-2.39-.63-3.068-1.593a3.746 3.746 0 0 1-3.296-1.043 3.745 3.745 0 0 1-1.043-3.296A3.745 3.745 0 0 1 3 12c0-1.268.63-2.39 1.593-3.068a3.745 3.745 0 0 1 1.043-3.296 3.746 3.746 0 0 1 3.296-1.043A3.746 3.746 0 0 1 12 3c1.268 0 2.39.63 3.068 1.593a3.746 3.746 0 0 1 3.296 1.043 3.746 3.746 0 0 1 1.043 3.296A3.745 3.745 0 0 1 21 12Z" />
                    </svg>
                </span>
            </div>
            <div class="col-lg-10">
                <p class="card-title text-dark">
                    {{ $model->title }}
                </p>
                <p class="card-body p-0">
                    {{ $model->description }}
                </p>
                <p class="card-footer p-0 mb-1">
                    <span class="border text-white bg-dark border-dark rounded p-1">
                        {{ strtoupper($model->type) }}
                    </span>
                </p>
            </div>
        </div>
    </div>
</div>
