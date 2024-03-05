@extends('template.index')

@section('content')
<div class="container">
  {{-- Intro text --}}
  <div>
    <h1>Portfolio</h1>
    <p>A master piece in progress 👩🏻‍🎨🎨</p>
  </div>

  {{-- TODO: Filter --}}

  {{-- Projects list --}}
  <div class="portfolio-gallery">

    @foreach ($collection as $item)
    <x-portfolio.gallery-photo :image="$item['image']" :alt="$item['alt']" :link="$item['link']" />
    @endforeach

  </div>
</div>
@endsection