<footer>
    <div class="footer clearfix mb-0 text-muted">
        <div class="col-md-12 text-center text-md-center mb-3 mb-md-0">
            {{ \Carbon\Carbon::now()->year }}
            &copy; <a href="{{ route('public.home.index') }}" class="text-primary fw-bold">{{ config('app.name') }}</a>, Tout droit réservé.
        </div>
    </div>
</footer>
