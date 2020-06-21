@extends('layouts.common')

@section('title', "トップページ")

@section('header')
    <div class="header-leftbar">blogのタグ一覧バー(左に現れる)</div>
    <div class="header-rightbar">ポートフォリオのタグ一覧バー(右に現われる)</div>
    <div class="top-header">就活生のためのポートフォリオサイト</div>
@endsection

@section('content')
    <div class="top-content">
      <p class="title">Laravel Blogのトップページです。</p>
      <a href="{{url('/new')}}">新規登録</a>
    </div>
    <div class="main-content">
      <div class="portfolio-article">ポートフォリオの一覧です</div>
      <div class="blog-article">ブログの一覧です</div>
    </div>
    <div class = "sub-content">サブコンテントの一覧です</div>
    <div class="member-list">メンバー紹介です</div>
@endsection


@section('footer')
    <small>copyrights &copy; 2018 kotsuban-teikin All rights Reserved.</small>
@endsection