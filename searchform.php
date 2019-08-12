<form action="/" method="get">
  <div class="input-group">
    <input class="form-control" type="text" name="s" id="search" placeholder="Search..." value="<?php the_search_query(); ?>" />
    <div class="input-group-append">
      <button type="submit" class="btn btn-primary"><i class="fas fa-search"></i></button>
    </div>
  </div>
</form>