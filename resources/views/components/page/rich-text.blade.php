{{--
  メニューの説明文を、読みやすい形に分けて表示する。config の文章（改行区切り）を次のルールで変換する。
  ・「・1回目」の次の行が「【…】」→ 回ごとの予定（ブライダルのプラン）
  ・①〜⑳で始まる行 → 小見出し
  ・「・」「□」で始まる行 → 箇条書き
  ・「※」で始まる行 → 注記
  ・それ以外 → 段落
--}}
@props(['text'])
@php
  $lines = array_values(array_filter(array_map('trim', explode("\n", (string) $text)), fn ($l) => $l !== ''));
  $blocks = [];
  for ($i = 0; $i < count($lines); $i++) {
    $line = $lines[$i];
    if (preg_match('/^・(\d+回目)$/u', $line, $m) && isset($lines[$i + 1]) && preg_match('/^【(.+)】$/u', $lines[$i + 1], $n)) {
      $blocks[] = ['schedule', [$m[1], $n[1]]]; $i++;
    } elseif (preg_match('/^[①-⑳]\s*(.+)$/u', $line, $m)) {
      $blocks[] = ['sub', $m[1]];
    } elseif (preg_match('/^[・□]\s*(.+)$/u', $line, $m)) {
      $blocks[] = ['bullet', $m[1]];
    } elseif (preg_match('/^※\s*(.+)$/u', $line, $m)) {
      $blocks[] = ['note', $m[1]];
    } else {
      $blocks[] = ['p', $line];
    }
  }
  // 続けて並ぶ箇条書き・予定は1つのリストにまとめる
  $grouped = [];
  foreach ($blocks as [$type, $value]) {
    $last = count($grouped) - 1;
    if (in_array($type, ['bullet', 'schedule']) && $last >= 0 && $grouped[$last][0] === $type) {
      $grouped[$last][1][] = $value;
    } else {
      $grouped[] = [$type, in_array($type, ['bullet', 'schedule']) ? [$value] : $value];
    }
  }
@endphp
<div class="p-rich">
  @foreach ($grouped as [$type, $value])
    @if ($type === 'schedule')
      <ol class="p-schedule">
        @foreach ($value as [$round, $content])
          <li><span class="p-schedule__round">{{ $round }}</span><span class="u-phrase">{!! \App\Support\Text::wbr($content) !!}</span></li>
        @endforeach
      </ol>
    @elseif ($type === 'bullet')
      <ul class="p-rich__list">
        @foreach ($value as $item)
          <li>{{ $item }}</li>
        @endforeach
      </ul>
    @elseif ($type === 'sub')
      <p class="p-rich__sub">{{ $value }}</p>
    @elseif ($type === 'note')
      <p class="p-rich__note">※{{ $value }}</p>
    @else
      <p>{{ $value }}</p>
    @endif
  @endforeach
</div>
