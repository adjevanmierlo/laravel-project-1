@extends('footer')
@extends('layout')
<canvas id="canvas"></canvas>
@section('content')

<link href="{{ asset('css/home.css') }}" rel="stylesheet">

<body class="bg-color-home">
  <title>
    < home>
  </title>
  <div class="container">
    <div class="col-12 text-block">
      <h1>Hi, i'm <mark class="name">Adje van Mierlo.</mark></h1>
      <P>
        < a developer ready to make new things>
      </P>
      <a href="About" class="btn btn-outline-primary">Get to know me.
      </a>
    </div>
  </div>
  @endsection
