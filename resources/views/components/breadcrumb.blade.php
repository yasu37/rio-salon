@props(['items'])
<nav class="breadcrumb" aria-label="パンくずリスト">
  <ol>
    <li><a href="/">トップ</a></li>
    @foreach ($items as $item)
      @if (!empty($item['url']))
        <li><a href="{{ $item['url'] }}">{{ $item['name'] }}</a></li>
      @else
        <li @if ($loop->last) aria-current="page" @endif>{{ $item['name'] }}</li>
      @endif
    @endforeach
  </ol>
</nav>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "BreadcrumbList",
  "itemListElement": [
    {
      "@type": "ListItem",
      "position": 1,
      "name": "トップ",
      "item": "https://rio-salon.com/"
    }
    @foreach ($items as $item)
    ,{
      "@type": "ListItem",
      "position": {{ $loop->iteration + 1 }},
      "name": "{{ $item['name'] }}"
      @if (!empty($item['url']))
      ,"item": "https://rio-salon.com{{ $item['url'] }}"
      @endif
    }
    @endforeach
  ]
}
</script>
