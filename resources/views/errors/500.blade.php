@extends('errors.layout')

@section('title', 'エラーが発生しました')
@section('code', '500')
@section('heading', '一時的にご利用いただけません')
@section('message')
  申し訳ございません。ただいまサイト内でエラーが発生しております。<br>
  しばらく時間をおいてから、あらためてお試しください。<br>
  お急ぎの場合は、お電話にてお問い合わせください。
@endsection
