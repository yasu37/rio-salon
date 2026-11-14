{{-- 施術の流れ。「①クレンジング ②お顔鍼…」の形の文章を、番号付きの手順に分けて表示する。番号がない文章は rich-text で表示する。 --}}
@props(['text'])
@php
  $text = (string) $text;
  $notes = [];
  if (preg_match_all('/※[^\n]+/u', $text, $m)) {
    $notes = array_map(fn ($n) => trim(mb_substr($n, 1)), $m[0]);
    $text = trim(preg_replace('/※[^\n]+/u', '', $text));
  }
  $steps = preg_match('/[①-⑳]/u', $text)
    ? array_values(array_filter(array_map('trim', preg_split('/[①-⑳]/u', $text)), fn ($s) => $s !== ''))
    : [];
@endphp
@if ($steps)
  <ol class="p-steps">
    @foreach ($steps as $step)
      <li><span class="p-steps__num" aria-hidden="true">{{ $loop->iteration }}</span><span class="u-phrase">{!! \App\Support\Text::wbr($step) !!}</span></li>
    @endforeach
  </ol>
@else
  <x-page.rich-text :text="$text" />
@endif
@foreach ($notes as $note)
  <p class="p-rich__note">※{{ $note }}</p>
@endforeach
