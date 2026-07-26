@extends('errors.layout')

@section('title', 'ページの有効期限が切れました')
@section('code', '419')
@section('heading', 'ページの有効期限が切れました')
@section('message')
  ページを開いたまま時間が経過したため、操作を受け付けられませんでした。<br>
  お手数ですが、トップページからやり直してください。
@endsection
