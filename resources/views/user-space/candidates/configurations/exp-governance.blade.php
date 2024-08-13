@php($_user = Auth::guard('candidates')->user())
<div class="main-content container-fluid">
    <div class="page-title">
        <div class="row">
            <div class="col-12 col-md-9 order-md-1 order-last">
                <h3 class="text-primary">Expériences en Gouvernance</h3>
                <p class="text-subtitle text-muted">
                    Dites vos expériences en matière de gouvernance ainsi que comment cela vous permettra d'être
                    efficace en entreprise.
                </p>
            </div>
        </div>
    </div>

    <div class="col-12">
        <div class="row">
            <div class="col-md-12">
                <div class="card w-100">
                    <div class="card-header p-2 mb-4 w-100 bg-primary">
                        <span class="text-sm px-2 text-white">Expériences</span>
                    </div>
                    <div class="card-body">
                        <form wire:submit.prevent="updateExpGov">
                            <div class="form-group">
                                <label
                                    class="alert alert-dark bg-primary text-white text-center fw-bold w-100 mb-0 rounded-none"
                                    for="full0">{{ __('Votre expérience en matière de gouvernance') }}
                                    <span class="text-white">*</span>
                                </label>
                                <div wire:ignore>
                                    <div id="full0"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label
                                    class="alert alert-dark bg-primary text-white text-center fw-bold w-100 mb-0 rounded-none"
                                    for="full1">{{ __("Comment votre expérience et vos compétences vous permettraient-elles de contribuer au succès de l'entreprise ?") }}
                                    <span class="text-white">*</span>
                                </label>
                                <div wire:ignore>
                                    <div id="full1"></div>
                                </div>
                            </div>
                            <div class="mt-4">
                                <span wire:loading.disabled
                                    wire:click="$set('expgov_state.governance_experience', editor0.getLength() === 1 ? null : editor0.container.querySelectorAll('.ql-editor > p')[0].innerHTML)">
                                    <button type="submit" wire:loading.disabled wire:target="updateExpGov"
                                        wire:click="$set('expgov_state.motivation', editor1.getLength() === 1 ? null : editor1.container.querySelectorAll('.ql-editor > p')[0].innerHTML)"
                                        class="btn col-md-3 icon icon-left btn-primary">
                                        <div class="spinner-border spinner-border-sm text-white" wire:loading
                                            wire:target="updateExpGov" role="status"></div>
                                        <span wire:loading.remove wire:target="updateExpGov">
                                            Confirmer
                                        </span>
                                    </button>
                                </span>
                                <button type="reset" wire:click.prevent="reload" wire:loading.disabled
                                    wire:target="updateExpGov" class="btn icon icon-left btn-light">
                                    Annuler
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('assets/user-space/vendors/quill/quill.min.js') }}"></script>
    <script src="{{ asset('assets/user-space/js/pages/multi-form-editor.js') }}"></script>
    @include('components.alert')
</div>
