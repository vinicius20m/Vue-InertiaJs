@extends('Layouts.modelo1')
@section('title', 'Início/Home')

@section('head-content')
      <h1 class="text-end">Home</h1>
@endsection

@section('content')
      <h3 class="text-center">hello World!!</h3>
      <a href="{{route('inertia')}}">Inertia</a>
@endsection

@section('scripts')
      <script>
            console.log('tudo certo por aqui!!');
      </script>
@endsection