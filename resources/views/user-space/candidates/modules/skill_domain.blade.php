<div class="col-sm-3 d-flex align-items-stretch">
    <div class="form-group w-100">
        <div class="card mb-2 shadow-none border">
            <div class="card-header p-2 ">
                <span class="text-bold rounded">{{ $model['label'] }}</span>
            </div>
            <div class="progress bg-slate rounded-0" style="height: 18px;">
                <div class="progress-bar progress-bar-striped"
                    style="border-radius: 0px !important; width:{{ $model['percentage'] }}%"
                    role="progressbar" aria-valuenow="{{ $model['percentage'] }}"
                    aria-valuemin="0" aria-valuemax="100">
                    {{ $model['percentage'] }}%</div>
            </div>
        </div>
    </div>
</div>
