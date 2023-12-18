<header id="header">
    <div id="top-header">
        <div id="site-infos">
            <div id="site-logo"></div>
            <div id="site-name-container">
                <a id="site-name" href="{{ route('home') }}">Mon Blog</a>
                <span id="site-slogan"> <pre> Site mémo pense-bête et autre</pre></span>
            </div>
        </div>
        <div id="top-header-content">
            <div role="search" id="module-mini-search" class="float-right">
                <form id="googleSearchForm" role="search" action="https://www.google.com/search" method="get" target="_blank">
                    <div id="mini-search-form" class="input-element-button">
                        <input type="search" id="TxTMiniSearched" title="Votre recherche" name="q" value="" placeholder="Recherche sur google" aria-labelledby="SearchButton">
                        <button id="SearchButton" class="submit" type="submit" name="search_submit"><i class="fa fa-search" aria-hidden="true"></i><span class="sr-only">Rechercher</span></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div id="sub-header">
        <div id="sub-header-content">


            <nav aria-label="navbar" id="cssmenu-1764"
                class="cssmenu cssmenu-horizontal cssmenu-with-submenu">
                <a href="{{ route('home') }}" title="B2oba" class="cssmenu-img cssmenu-img-level-0">
                </a>
                <ul class="level-0">
                    <li>
                        <a href="{{ route('home') }}" title="Lien vers la page Accueil" class="cssmenu-title"><img
                                src="{{ asset('adrien/images/accueil_12.png') }}" alt="" height="12"
                                width="12" /> Accueil</a>
                    </li>


                    <li class="has-sub">
                        <a href="{{ asset('views/news/index') }}" title="Lien vers la page Blogue" class="cssmenu-title"><img
                                src="{{ asset('adrien/images/blogue_12.png') }}" alt="" height="12"
                                width="12" /> Blogue</a>

                        <ul class="level-1">
                            <li>
                                <a href="{{ route('erreur') }}" title="Lien vers la page Tout le blogue"
                                    class="cssmenu-title"><img src="{{ asset('adrien/images/blogue_12.png') }}"
                                        alt="" height="12" width="12" /> Tout le blogue</a>
                            </li>

                            <li>
                                <a href="{{ route('erreur') }}"
                                    title="Lien vers la page Scripts" class="cssmenu-title"><img
                                        src="{{ asset('adrien/images/blogue_12.png') }}" alt="" height="12"
                                        width="12" /> Scripts</a>
                            </li>

                            <li>
                                <a href="{{ route('erreur') }}"
                                    title="Lien vers la page Le sac de chips" class="cssmenu-title"><img
                                        src="{{ asset('adrien/images/blogue_12.png') }}" alt="" height="12"
                                        width="12" /> Le sac de chips</a>
                            </li>
                        </ul>
                    </li>


                    <li class="has-sub">
                        <a href="{{ route('home') }}" title="Lien vers la page Wiki" class="cssmenu-title"><img
                                src="{{ asset('adrien/images/wiki_12.png') }}" alt="" height="12"
                                width="12" /> Wiki</a>

                        <ul class="level-1">

                            @php
                            $categories= App\Models\Category::whereNull('category_id')->get();
                            @endphp

                            @foreach ($categories as $category)
                            <li>
                                <a href="{{ route('home') }}"
                                    title="Lien vers la page {{ $category->name }}" class="cssmenu-title"><img
                                        src="{{ asset($category->icon)  }}" alt=""
                                        height="12" width="12" /> {{ $category->name }}</a>
                            </li>

                            @endforeach
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a href="{{ asset('views/news/index') }}" title="Lien vers la page Université" class="cssmenu-title"><img
                                src="{{ asset('adrien/images/blogue_12.png') }}" alt="" height="12"
                                width="12" /> Université</a>

                                <ul class="level-1">
                                    <li>
                                        <a href="{{ asset('views/news/index') }}" title="Lien vers la page "
                                            class="cssmenu-title"><img src="{{ asset('adrien/images/blogue_12.png') }}"
                                                alt="" height="12" width="12" /> </a>
                                    </li>

                                    <li>
                                        <a href="{{ asset('views/news/12-actus-linuxtricks/index') }}"
                                            title="Lien vers la page " class="cssmenu-title"><img
                                                src="{{ asset('adrien/images/blogue_12.png') }}" alt="" height="12"
                                                width="12" /> </a>
                                    </li>

                                    <li>
                                        <a href="{{ asset('views/news/11-le-sac-de-chips/index') }}"
                                            title="Lien vers la page " class="cssmenu-title"><img
                                                src="{{ asset('adrien/images/blogue_12.png') }}" alt="" height="12"
                                                width="12" /> </a>
                                    </li>
                                </ul>
                    </li>


                    <li>
                        <a href="{{ asset('rechercher-sur-le-site') }}" title="Lien vers la page Rechercher"
                            class="cssmenu-title"><img src="{{ asset('adrien/images/search_12.png') }}" alt=""
                                height="12" width="12" /> Rechercher</a>
                    </li>


                    <li class="has-sub">
                        <span class="cssmenu-title"><img src="{{ asset('adrien/images/a-propos_12.png') }}" alt=""
                                height="12" width="12" />A propos</span>

                        <ul class="level-1">
                            <li>
                                <a href="{{ asset('support-et-contact') }}" title="Lien vers la page Support et Contact"
                                    class="cssmenu-title"><img src="{{ asset('adrien/images/contact_12.png') }}"
                                        alt="" height="12" width="12" /> Support et Contact</a>
                            </li>

                            <li>
                                <a href="https://github.com/b2oba151" title="Lien vers la page Mon Github"
                                    class="cssmenu-title"><img src="{{ asset('adrien/images/web_12.png') }}" alt=""
                                        height="12" width="12" /> Mon Github</a>
                            </li>

                            <li>
                                <a href="https://www.youtube.com/channel/UC3tOxyIdZWnRZlu9Y6f5JnA"
                                    title="Lien vers la page Youtube" class="cssmenu-title"><img
                                        src="{{ asset('adrien/images/web_12.png') }}" alt="" height="12"
                                        width="12" /> Youtube</a>
                            </li>


                            <li class="has-sub">
                                <span class="cssmenu-title"><img src="{{ asset('adrien/images/web_12.png') }}" alt=""
                                        height="12" width="12" />Liens utiles</span>

                                <ul class="level-2">
                                    <li>
                                        <a href="https://www.journalduhacker.net/"
                                            title="Lien vers la page Le journal du hacker"
                                            class="cssmenu-title"><img src="{{ asset('adrien/images/web_12.png') }}"
                                                alt="" height="12" width="12" /> Le journal du
                                            hacker</a>
                                    </li>

                                    <li>
                                        <a href="https://www.kernel.org/" title="Lien vers la page kernel.org"
                                            class="cssmenu-title"><img src="{{ asset('adrien/images/web_12.png') }}"
                                                alt="" height="12" width="12" /> kernel.org</a>
                                    </li>

                                    <li>
                                        <a href="http://pkgs.org/" title="Lien vers la page pkgs.org"
                                            class="cssmenu-title"><img src="{{ asset('adrien/images/web_12.png') }}"
                                                alt="" height="12" width="12" /> pkgs.org</a>
                                    </li>

                                    <li>
                                        <a href="https://docs.fedoraproject.org/fr/fedora/latest/"
                                            title="Lien vers la page Documentation Fedora"
                                            class="cssmenu-title"><img src="{{ asset('adrien/images/web_12.png') }}"
                                                alt="" height="12" width="12" /> Documentation Fedora</a>
                                    </li>

                                    <li>
                                        <a href="https://www.calculate-linux.org/"
                                            title="Lien vers la page CalculateLinux" class="cssmenu-title"><img
                                                src="{{ asset('adrien/images/web_12.png') }}" alt="" height="12"
                                                width="12" /> CalculateLinux</a>
                                    </li>

                                    <li>
                                        <a href="https://www.netmarketshare.com/"
                                            title="Lien vers la page NetMarketShare" class="cssmenu-title"><img
                                                src="{{ asset('adrien/images/web_12.png') }}" alt="" height="12"
                                                width="12" /> NetMarketShare</a>
                                    </li>

                                    <li>
                                        <a href="http://distrowatch.com/" title="Lien vers la page Distrowatch"
                                            class="cssmenu-title"><img src="{{ asset('adrien/images/web_12.png') }}"
                                                alt="" height="12" width="12" /> Distrowatch</a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                </ul>
            </nav>

        </div>
        <div class="spacer"></div>
    </div>
    <div class="spacer"></div>
</header>


<!-- Bootstrap Modal -->
<div class="modal fade" id="googleResultsModal" tabindex="-1" role="dialog" aria-labelledby="googleResultsModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl" role="document">
        <!-- Use 'modal-lg' for large, 'modal-sm' for small, or adjust 'modal-dialog' without additional class for default size -->
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="googleResultsModalLabel">Resultat Google</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <iframe id="googleResultsFrame" width="100%" height="600px" frameborder="0"></iframe>
            </div>
        </div>
    </div>
</div>
