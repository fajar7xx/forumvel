<div>
    <!-- He who is contented is rich. - Laozi -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            <strong>Sukses</strong>
            {{session('success')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
{{--        <div class="callout callout-info border-left-color">--}}
{{--            <strong>Sukses</strong>--}}
{{--            {{session('success')}}--}}
{{--        </div>--}}
    @elseif(session('deleted'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Deleted</strong>
            {{session('deleted')}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif
</div>
