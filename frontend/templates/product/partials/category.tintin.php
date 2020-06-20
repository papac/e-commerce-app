<div class="col-12 col-sm-3">
    <div class="card bg-light mb-3">
        <div class="card-header bg-primary text-white text-uppercase"><i class="fa fa-list"></i> Categories</div>
        <ul class="list-group category_block">
            #loop($categories as $category)
            <li class="list-group-item {{ $category_active_id == $category->id ? 'active' : '' }}"><a href="/?category={{ $category->id }}">{{ $category->name }}</a></li>
            #endloop
        </ul>
    </div>
</div>