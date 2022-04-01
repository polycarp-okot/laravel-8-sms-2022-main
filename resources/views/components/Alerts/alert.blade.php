@props(['error' => $error])

<div class="alert bg-danger alert-dismissible fade show mt-2">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    <strong>OH N0O!</strong> {{ $error }}.
  </div>
