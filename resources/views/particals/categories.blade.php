<section class="brands-carousel" id="category-field">
    <div id="owl-brands" class="owl-brands owl-carousel">
        @foreach($categories as $category)
        <div class="owl-stage-outer">
            <div class="owl-stage" style="padding-left: 1px; padding-right: 1px;">
                <div class="owl-item" style="width: 233.6px;">
                    <div class="item">
                        <a href="javascript:void(0)" class="category-show" data-id="{{ $category->id }}">
                            <figure>
                                <img src="{{ URL::to('assets/images/category/'. $category->path) }}" alt="Acer" title="{{ $category->name }}" width="200" height="60" class="img-responsive">
                            </figure>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</section>
@push('scripts')
    <script>
        $('.category-show').on('click', function(e){

        var id = $(this).data('id');
        window.location.href = "/category/" + id;
    });
    </script>
@endpush
