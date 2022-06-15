<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">
      {{-- <title>Inertia</title> --}}

      <link rel="stylesheet" crossorigin="anonymous"
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"
            integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor"
      >

      <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.3/font/bootstrap-icons.css">

      <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
      <script src="{{ mix('/js/app.js') }}" defer></script>
      @inertiaHead
</head>
<body>
      @inertia

      <script crossorigin="anonymous"
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2"
      ></script>
</body>
</html>

{{-- @extends('Layouts.modelo1')
@section('title', 'Genérico')

@section('head-content')
      <h1><strong> cabeçalho</strong></h1>
@endsection

@section('content')
      @inertia
@endsection

@section('styles')
      <link href="{{ mix('/css/app.css') }}" rel="stylesheet" />
      @inertiaHead
@endsection

@section('scripts')
      <script src="{{ mix('/js/app.js') }}" defer></script>
@endsection --}}