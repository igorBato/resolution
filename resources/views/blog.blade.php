{{--
  Template Name: Blog
--}}

@extends('layouts.blog')

@section('content')
  @include('partials.blog-navigation')
  @include('partials.articles')
@endsection
