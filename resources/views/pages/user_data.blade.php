
<div class="container">

  @foreach($users as $key)
        <div class="col-lg 3 col-md-3  col-sm-12 col-xs-12">
            <div class="card card-inverse card-success text-center">
              <div class="card text-white bg-primary mb-3" style="max-width: 18rem;">
                  <h5 class="card-title">{{ $key->name }}</h5>
                  <p class="card-text">{{ $key->quotes }}</p>
              </div>
            </div>
        </div>
  @endforeach
</div>
