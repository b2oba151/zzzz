<div>
    <nav id="breadcrumb" itemprop="breadcrumb">
        <ol itemscope itemtype="http://schema.org/BreadcrumbList">
            {{-- @dump(count($data)) --}}
            @foreach ($data as $key => $value)
                <li itemprop="itemListElement" itemscope itemtype="http://data-vocabulary.org/ListItem">
                    <a href="{{ route($value->route) }}" itemprop="item">
                        <span itemprop="name">{{ $value->name }}</span>
                        {{-- @dump($key+1) --}}
                        <meta itemprop="position" content="{{ $key + 1 }}" />
                    </a>
                </li>
            @endforeach
        </ol>
    </nav>
</div>
