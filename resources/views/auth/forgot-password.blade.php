<form action="{{ route('user-space.home') }}">
    <div class="form-group position-relative has-icon-left">
        <label for="email">Courriel</label>
        <div class="position-relative">
            <input type="email" class="form-control" placeholder="Courriel" id="email">
            <div class="form-control-icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    class="feather feather-mail">
                    <path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"></path>
                    <polyline points="22,6 12,13 2,6"></polyline>
                </svg>
            </div>
        </div>
    </div>
    <div class="clearfix mt-4">
        <button class="btn btn-primary w-100">Confirmer</button>
    </div>
</form>
