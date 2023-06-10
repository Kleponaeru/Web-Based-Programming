<div>
    @foreach ($art as $a)
    <div class="card border">
        <div class="card-header bg-success text-light justify-content-center d-flex">
          <strong>Latest Article</strong>     
        </div>
        <div class="card-body">
          <h5 class="card-title">{{ $a -> judul }}</h5>
          <p class="card-text">{{ $a -> deskripsi }}</p>
        </div>
      </div>
    @endforeach
    
</div>
