@extends('app')
@section('content')
    <nav id="cssmenu-module-wiki" class="cssmenu cssmenu-right cssmenu-actionslinks">
        <ul class="level-0 hidden">
            <li>
                <a href="wiki.html" class="cssmenu-title">Accueil</a>
            </li>
            <li>
                <a href="explorer.html" class="cssmenu-title">Explorateur</a>
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

            <li itemprop="itemListElement" itemscope itemtype="http://data-vocabulary.org/ListItem">
                <a href="{{ route('home') }}" itemprop="item">
                    <span itemprop="name">Wiki</span>
                    <meta itemprop="position" content="" />
                </a>
            </li>

            <li itemprop="itemListElement" itemscope itemtype="http://data-vocabulary.org/ListItem">
                <a href="{{ route('home') }}" itemprop="item">
                    <span itemprop="name">Généralités système Linux</span>
                    <meta itemprop="position" content="" />
                </a>
            </li>

            <li itemprop="itemListElement" itemscope itemtype="http://data-vocabulary.org/ListItem">
                <a href="{{ route('home') }}" itemprop="item">
                    <span itemprop="name">Amorçage, démarrage du système</span>
                    <meta itemprop="position" content="" />
                </a>
            </li>

            <li itemprop="itemListElement" itemscope itemtype="http://data-vocabulary.org/ListItem" class="current">
                <a href="{{ route('home') }}" itemprop="item">
                    <span itemprop="name">chroot sous Linux : Explications et exemples</span>
                    <meta itemprop="position" content="" />
                </a>
            </li>

        </ol>
    </nav>
    <section id="module-wiki">
        <header>
            <div class="cat-actions">
                <a href="../syndication/rss/wiki/36" aria-label="Syndication"><i class="fa fa-syndication"
                        aria-hidden="true" title="Syndication"></i></a>
                Amorçage, démarrage du système
            </div>
            <h1 itemprop="name">chroot sous Linux : Explications et exemples</h1>
        </header>
        <div id="article-wiki-978" class="article-wiki new-content">
            <div class="elements-container columns-2">
                <div class="spacer"></div>
            </div>
            <div class="wiki-tools-container">
                <nav id="cssmenu-wikitools" class="cssmenu cssmenu-right cssmenu-actionslinks cssmenu-tools">
                    <ul class="level-0 hidden">
                        <li><a href="historya59c.html?id=978" class="cssmenu-title">
                                <i class="fa fa-fw fa-reply" aria-hidden="true"></i> Historique
                            </a></li>
                        <li><a href="printa59c.html?id=978" class="cssmenu-title">
                                <i class="fa fa-fw fa-print" aria-hidden="true"></i> Version imprimable
                            </a></li>
                    </ul>
                </nav>
            </div>
            <div class="spacer"></div>
            <div class="content">
                <!--<span class="wiki-sticky-title blink">Table des matières</span>-->
                <span class="wiki-sticky-title" style="opacity:1;">Table des matières</span>
                <div class="wiki-sticky">
                    <ol class="wiki-list wiki-list-1">
                        <li><a href="#paragraph-introduction">Introduction</a></li>
                        <li><a href="#paragraph-cas-d-utilisation">Cas d'utilisation</a></li>
                        <li><a href="#paragraph-fonctionnement-de-chroot">Fonctionnement de chroot</a></li>
                        <li><a href="#paragraph-exemples">Exemples</a>
                            <ol class="wiki-list wiki-list-2">
                                <li><a href="#paragraph-chroot-d-un-systeme-linux-complet">chroot d'un système Linux complet</a></li>
                            </ol>
                        </li>
                        <li><a href="#paragraph-quitter-le-chroot">Quitter le chroot</a></li>
                    </ol>
                </div>
                <div class="spacer"></div>
                <p style="text-align: center;"><img src="../upload/wiki_divers.png" alt="wiki_divers" title="wiki_divers" />
                </p><br />
                <br />
                <h2 class="formatter-title wiki-paragraph-2" id="paragraph-introduction">Introduction</h2><br />
                <br />
                <h2>Introduction</h2>
<div class="formatter-container formatter-blockquote"><span class="formatter-title title-perso">man chroot :</span>
<div class="formatter-content">chroot - ex&eacute;cuter une commande ou un shell interactif avec un r&eacute;pertoire racine sp&eacute;cial</div>
</div>
<h2><br><br>

                    <div class="spacer"></div>

                    @include('layouts.wiki_footer')
                @endsection
