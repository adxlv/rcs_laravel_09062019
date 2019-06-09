<div class="col-md-4">
  <div class="card mb-4 shadow-sm">
    
    <img src="{{ $postItem->img_url }}" style="width:100%;height:auto;" alt="Bildes nav!">
    
    <div class="card-body">
        
      <p class="card-text">{{ $postItem->title }}</p>
      <div class="d-flex justify-content-between align-items-center">
        <div class="btn-group">
          
        </div>
        <small class="text-muted">9 mins</small>
      </div>

    </div>
      <a href="/blog/{{ $postItem->id }}">link</a>
  </div>
</div>
