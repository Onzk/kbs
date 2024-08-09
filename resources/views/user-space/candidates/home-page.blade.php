@php($_user = Auth::guard('candidates')->user())
<div class="main-content container-fluid">
    <div class="page-title">
        <h3 class="text-primary">Accueil</h3>
        <p class="text-subtitle text-muted">Bienvenue sur {{ config('app.name') }}.</p>
    </div>
    <section class="section">
        <div class="page-title mt-4">
            <p class="text-subtitle text-muted">Nos nouveaux webinaires</p>
        </div>
        <div class="row">
            @forelse ($webinaries as $webinary)
                @include('user-space.components.webinary')
            @empty
                {{ __("... Aucun nouveau webinaire pour le moment ...") }}
            @endforelse
        </div>
        <div class="page-title mt-4">
            <p class="text-subtitle text-muted">Nos nouvelles publications</p>
        </div>
        <div class="row">
            @for ($i = 0; $i < 4; $i++)
                @include('user-space.components.post')
            @endfor
        </div>
    </section>
</div>
