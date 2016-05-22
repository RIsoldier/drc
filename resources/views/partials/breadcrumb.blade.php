<div class="tp-breadcrumb">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="card-panel">
          <ol class="breadcrumb">
            <li>Home</li>
            <li class="">{{ ucfirst(\Request::route()->getName()) }}</li>
            @if (\Request::route()->getName() === 'procedures')
              @foreach ($procedures as $procedure)
                <li class="active">{{ $procedure->name }}</li>
              @endforeach
            @endif
          </ol>
        </div>
      </div>
    </div>
  </div>
</div>