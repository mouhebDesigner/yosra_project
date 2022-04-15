<div class="support-area support-area-design-2">
    <div class="container">
        <div class="row">
            <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                <div class="section-title text-center">
                    <h1>Catégorie de forum</h1>
                </div>
            </div>
        </div>
        <div class="row mt-50">
            @foreach(App\Models\Categorie::all() as $categorie)
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12">
                <div class="support-box support-box-design-2">
                    <div class="support-icon-wrap">
                        <img src="{{ asset('front/assets/images/icons/support-icon-1.svg') }}" alt="">
                    </div>
                    <div class="support-content text-center">
                        <h2><a href="#">{{ $categorie->label }}</a></h2>
                        <a href="{{ url('forums/'.$categorie->id.'/categorie') }}" class="read-btn">Voir Sujets</a>
                    </div>
                    <span>{{ count($categorie->sujest()) }} Sujets</span>
                </div>
            </div>
            @endforeach
            
        </div>
        <div class="row mt-26">
            <div class="btn-wrap btn-wrap-center">
                <a class="common-btn btn-style-3" href="{{ url('forums') }}">Voir tous</a>
            </div>
        </div>
    </div>
</div>
