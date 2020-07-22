@extends('layouts.common')

@section('title', "トップページ")

@section('content')
    <div class="top-content">
      <p class="title">Laravel Blogのトップページです。</p>
      <div class="welcome-display">welcome画面</div>
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