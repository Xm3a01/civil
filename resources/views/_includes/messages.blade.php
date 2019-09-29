@if(Session::has('success'))

<div class="alert alert-success" role="alert">
  <strong>Success:</strong> {{ Session::get('success') }}
</div>

@endif

<!-- Gives an error notification if the post was failed to saved (Server Side Validation) -->
@if(count($errors) > 0)

<div class="alert alert-danger" role="alert">
  <strong>Errors:</strong>
  <ul>
      @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
      @endforeach
  </ul>
  <span data-dismis="x">x</span>
</div>

@endif