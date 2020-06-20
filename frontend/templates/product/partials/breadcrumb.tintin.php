<div class="container">
    <div class="row">
        <div class="col">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="/">Produits</a></li>
                    #if (isset($category))
                    <li class="breadcrumb-item"><a href="/?category={{ $category->id }}">{{ $category->name }}</a></li>
                    #endif
                </ol>
            </nav>
        </div>
    </div>
</div>