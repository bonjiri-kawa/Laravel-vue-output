@extends('layouts.welcome')

@section('title', 'マイページ')

@section('sidebar')
  @parent

  <p>メインのサイドバー（共通部分）に追加される個別の部分</p>
@endsection

@section('content')
  <p>メインコンテンツ</p>
@endsection

@section('footer')
  @parent

  <script src="dashboard.js"></script>
@endsection

{{-- @extends('layouts.welcome')

@section('title', 'page title')

@section('content')
  <p>この文章が表示したい</p>
@endsection --}}