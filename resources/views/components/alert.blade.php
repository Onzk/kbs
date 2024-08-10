<div style="cursor: pointer;">
    @if (session('success'))
        <div class="m-4 alert hide-scrollbar alert-success fade-in"
            style="max-width:450px; max-height: 200px; overflow-y: scroll; max-height:450px; position: fixed; right:0px; bottom:0px; z-index: 10;"
            onclick="this.style.display='none'">
            <p class="p-1 d-flex justify-content-start align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round"
                    @class([])>
                    <path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"></path>
                    <polyline points="22 4 12 14.01 9 11.01"></polyline>
                </svg>
                <span @class(['mx-2', ])>
                    {{ session('success') }}
                </span>
            </p>
        </div>
    @elseif(session('warning'))
        <div class="m-4 alert hide-scrollbar alert-warning"
            style="max-width:450px; max-height: 200px; overflow-y: scroll; position: fixed; right:0px; bottom:0px; z-index: 10;"
            onclick="this.style.display='none'">
            <p class="p-0 d-flex justify-content-start align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    @class([])>
                    <path d="M10.29 3.86L1.82 18a2 2 0 0 0 1.71 3h16.94a2 2 0 0 0 1.71-3L13.71 3.86a2 2 0 0 0-3.42 0z">
                    </path>
                    <line x1="12" y1="9" x2="12" y2="13"></line>
                    <line x1="12" y1="17" x2="12.01" y2="17"></line>
                </svg>
                <span @class(['mx-2', ])>
                    {{ session('warning') }}
                </span>
            </p>
        </div>
    @elseif(session('error') || $errors->any())
        <div class="m-4 alert hide-scrollbar alert-danger"
            style="max-width:450px; max-height: 200px; overflow-y: scroll; position: fixed; right:0px; bottom:0px; z-index: 10;"
            onclick="this.style.display='none'">
            <p class="p-0 d-flex justify-content-start align-items-center">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                    @class([])>
                    <polygon points="7.86 2 16.14 2 22 7.86 22 16.14 16.14 22 7.86 22 2 16.14 2 7.86 7.86 2"></polygon>
                    <line x1="15" y1="9" x2="9" y2="15"></line>
                    <line x1="9" y1="9" x2="15" y2="15"></line>
                </svg>
                <span @class(['mx-2', ])>
                    {{ session('error') ?? $errors->all()[0] }}
                </span>
            </p>
        </div>
    @endif
</div>
