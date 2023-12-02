@extends('app')
@section('content')
<nav id="cssmenu-module-wiki" class="cssmenu cssmenu-right cssmenu-actionslinks">
<ul class="level-0 hidden">
<li>
<a href="{{ asset('wiki.wiki') }}" class="cssmenu-title">Accueil</a>
</li>
<li>
<a href="{{ asset('wiki.explorer') }}" class="cssmenu-title">Explorateur</a>
</li>
</ul>
</nav>

<nav id="breadcrumb" itemprop="breadcrumb">
    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
<li itemprop="itemListElement" itemscope itemtype="http://data-vocabulary.org/ListItem">
           <a href="{{ route('home') }}" itemprop="item">
                <span itemprop="name">Accueil</span>
                <meta itemprop="position" content="1" />
            </a>
</li>

<li itemprop="itemListElement" itemscope itemtype="http://data-vocabulary.org/ListItem"  class="current" >
          <a href="/wiki/installer-et-configurer-un-serveur-tigervnc-sous-calculate" itemprop="item">
            <span itemprop="name">Erreur</span>
            <meta itemprop="position" content="" />
          </a>
        </li>

    </ol>
</nav>
<section id="module-user-error">
<header><h1>Erreur</h1></header>
<div class="content">
<div class="message-helper question">La page que vous demandez n'existe pas ! <b>Ou parceque je ne sais pas quoi mettre pour l'instant</b> &#128521; .</div>
<div class="center">
<strong><a href="javascript:history.back(1);" title="Retour">Retour</a></strong>
</div>
</div>
<footer></footer>
</section>
</div>
</div>
<div class="spacer"></div>
</div>

<div class="spacer"></div>

@include('layouts.wiki_footer')

@endsection
