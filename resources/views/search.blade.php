@extends('layouts.search-layout')

@section('content')
<div id="search-container">
  <div id="" class="container">
    <h2 class="text-center">Search</h2>
    <div id="search-form" class="col-xs-8 col-xs-offset-2">
      <input class="col-xs-11" type="text" autocomplete="off" id="search-box"/>
      <a class="col-xs-1"><i class="fa fa-search fa-lg" aria-hidden="true"></i></a>
    </div>

    <div class="clearfix"></div>
    <div id="search-results">

    </div>
    {{-- <pre id="container"></pre> --}}
  </div>
</div>


@endsection
