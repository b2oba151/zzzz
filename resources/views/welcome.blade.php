@extends('app')

@section('content')
            <nav id="breadcrumb" itemprop="breadcrumb">
                <ol itemscope itemtype="http://schema.org/BreadcrumbList">
                    <li itemprop="itemListElement" itemscope itemtype="http://data-vocabulary.org/ListItem">
                        <a href="{{ route('home') }}" itemprop="item">
                            <span itemprop="name">Accueil</span>
                            <meta itemprop="position" content="1" />
                        </a>
                    </li>

                    <li itemprop="itemListElement" itemscope itemtype="http://data-vocabulary.org/ListItem"
                        class="current">
                        <a href="bienvenue-sur-linuxtricks.html" itemprop="item">
                            <span itemprop="name">Diarra Boubacar</span>
                            <meta itemprop="position" content="" />
                        </a>
                    </li>

                </ol>
            </nav>
            <section id="module-pages">
                <header>
                    <h1>Diarra Boubacar</h1>
                </header>
                <div id="article-pages-2" class="article-pages">
                    <div class="actions">
                    </div>
                    <div class="content">
                        <div class="spacer"></div>
                        <p style="text-align: center;">
                        <table class="formatter-table">
                            <tr class="formatter-table-row">
                                <th class="formatter-table-head" colspan="2">Accès rapide aux principales
                                    rubriques</th>
                            </tr>
                            <tr class="formatter-table-row">
                                <td class="formatter-table-col"><a href="{{ route('erreur') }}"><img
                                            src="{{ asset('adrien/images/icone_blogue.png') }}" alt="icone_blogue"
                                            title="icone_blogue" style="width:200px;" /></a></td>
                                <td class="formatter-table-col"><a href="{{ route('wiki.wiki') }}"><img
                                            src="{{ asset('adrien/images/icone_wiki.png') }}" alt="icone_wiki"
                                            title="icone_wiki" style="width:200px;" /></a></td>
                            </tr>
                        </table>
                        </p><br />
                        <br />
                        <fieldset class="formatter-container formatter-fieldset" style="">
                            <legend>Les sections du site</legend>
                            <div class="formatter-content"><br />
                                Le site est composé de 3 parties : Le Blogue le Wiki et l'Université.<br />
                                <br />
                                <strong>Le Blogue :</strong><br />
                                C'est l'espace où il y'a Ehhhhh....je ne sais pas pour l'instant. Mais en tout cas il y'aura plusieurs sections dans le blogue.<br />
                                <ul class="formatter-ul">
                                    <li class="formatter-li"> <strong>Scripts</strong> : Rubrique du
                                        bloque traitant de mes scripts pour q'on soit de plus en plus fainéant et laisser la machine tout faire a notre place.
                                    </li>
                                    <li class="formatter-li"> <strong>Actus Linuxtricks</strong> : Actualités de
                                        tout ce qui se rapporte à Linuxtricks en général. Site, Youtube, Miroir
                                        Calculate Linux, etc...
                                    </li>
                                    <li class="formatter-li"> <strong>Le sac de chips</strong> : Catégorie
                                        fourre-tout du blogue, avec tout ce qui ne concerne pas les logiciels libres.<br />
                                    </li>
                                </ul><br />
                                <br />
                                <strong>Le Wiki :</strong><br />
                                C'est l'espace tutoriel, composé de plusieurs rubriques où les tutos sont rangés par
                                catégorie.<br />
                                <br />
                                <br />
                                <strong>Université :</strong><br />
                                C'est l'espace où vous trouverez mes cours et formations univairsitaires.<br />
                                <br />
                            </div>
                        </fieldset><br />
                        <br />
                        <br />
                        <fieldset class="formatter-container formatter-fieldset" style="">
                            <legend>Pourquoi Ce Blog ?</legend>
                            <div class="formatter-content"><br />
                                <div class="formatter-container formatter-blockquote"><span
                                        class="formatter-title title-perso">Aristote :</span>
                                    <div class="formatter-content">Savoir, c'est se souvenir.</div>
                                </div><br />
                                En effet, savoir des choses, c'est bien. S'en souvenir, c'est mieux.<br />
                                Selon un proverbe latin d'Horace : <em><strong>verba volant, scripta manent</strong></em> Si vous n'avez pas compris c est pas grave cest :<em><strong>Les paroles s'envolent, les écrits
                                        restent.</strong></em>.<br />
                                Le site est là pour recenser des astuces personnelles, des
                                manipulations, que j'ai réalisées sous GNU/Linux et Windows(qui n'est pas vraiment dans mon coeur).<br />
                                Quatre distributions sont abordées dans ce site : Fedora et Red Hat, Gentoo, Debian
                                (Ubuntu), Windows Server (2012/2016/2019/2022)<br />
                                <br />
                                Toutes ces informations sont réunies dans un <strong>wiki</strong>, accessible via
                                le lien <a href="{{ asset('views/wiki/index.blade.php') }}">"Wiki"</a> dans la barre supérieure.<br />
                                Ce wiki est organisé par rubriques, pour plus de clarté et facilité de
                                recherche.<br />
                                <br />
                                Ce site est uniquement destiné à moi même, pour retrouver partout, où
                                que je sois les manipulations que je sais faire ou que j'ai apprises. J'écoute évidemment toute critique quant à l'organisation du site et des potentielles erreurs.
                            </div>
                        </fieldset><br />
                        <br />
                        <br />
                        <fieldset class="formatter-container formatter-fieldset" style="">
                            <legend>Infrastructure du Site ?</legend>
                            <div class="formatter-content"><br />
                                Aujourd'hui, l'infrastructure du site se compose(ra) de :<br />
                                - Un domaine diarraboubacar.memo.com <b>Incha'Allah </b><br />
                                - 1 VPS  propulsant la prod du site<br />
                                - 1 VPS (plus petit) propulsant le backup<br /></div>
                        </fieldset><br />
                        <br />
                        <br />
                        <fieldset class="formatter-container formatter-fieldset" style="">
                            <legend>Qui suis-je ?</legend>
                            <div class="formatter-content"><br />
                                J'étais un utilisateur habituel de  Unix/Linux depuis 2015.<br />
                                Actuellement en master <b>MIAGE</b> (Master de méthodes informatiques appliquées à la gestion des entreprises).<br />
                                Au travers des anneés je suis passer par differents distributions Linux telleque LinuxMint, Ubuntu, Debian, Kali, Arch, CentOs, Calculate Linux.<br />
                                Maintenant, je suis sur fedoda39 <br />

                                Bien qu'orienté Developpement et Administrations système , je script en
                                BASH , Python et PowerShell (Mon cote fainéantiste).<br />
                                Vous pouvez d'ailleurs retrouver mes projets sur le site <a
                                    href="https://github.com/b2oba151">github (b2oba151)</a> !<br />
                                Retrouvez-moi sur <a href="https://twitter.com/">Twitter</a> et ma chaine
                                vidéo <a
                                    href="https://www.youtube.com/@bouadiarra/featured">Youtube</a>

                                <br />
                                Vous pouvez me contacter par le biais du site, via l'icône "Contact" dans la barre
                                de menu supérieure.<br />
                                <br />
                                <p style="text-align: center;"><img src="{{ asset('images/smileys/64.gif') }}" alt=":magic:"
                                        title=":magic:" class="smiley" /></p>
                            </div>
                        </fieldset><br />
                        <br />
                        <p style="text-align: center;"><em>Bonne visite du Site Web.</em></p>
                        <div class="spacer"></div>
                    </div>
                    <aside>
                        <div id="more-element-sharing-container" class="more-element more-element-sharing">
                            <div class="sharing-button">
                                <a href="#" aria-label="Menu réseaux sociaux"
                                    onclick="open_submenu('more-element-sharing-container');return false;"><i
                                        class="fa fa-share-alt" aria-hidden="true"
                                        title="Menu réseaux sociaux"></i></a>
                            </div>
                            <ul class="sharing-elements-list">
                                <li class="sharing-element sharing-element-facebook">
                                    <a href="https://www.facebook.com/"
                                        title="Partager sur Facebook" class="facebook"
                                        onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><i
                                            class="fab fa-fw fa-facebook-f" aria-hidden="true"></i>
                                        <span class="sr-only">Partager sur Facebook</span></a>
                                </li>
                                <li class="sharing-element sharing-element-twitter">
                                    <a href="https://twitter.com/"
                                        title="Partager sur Twitter" class="twitter"
                                        onclick="javascript:window.open(this.href, '', 'menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=500,width=700');return false;"><i
                                            class="fab fa-fw fa-twitter" aria-hidden="true"></i>
                                        <span class="sr-only">Partager sur Twitter</span></a>
                                </li>
                                <li class="sharing-element sharing-element-mail">
                                    <a href="mailto:bodiarra20@gmail.com.com"
                                        title="Partager par Email" class="mail"><i class="fa fa-fw fa-envelope"
                                            aria-hidden="true"></i><span class="sr-only">Partager par email</span>
                                        <span class="sr-only">Partager par Email</span></a>
                                </li>
                                <li class="sharing-element sharing-element-print">
                                    <a href="#" title="Version imprimable" class="print"
                                        onclick="javascript:window.print()"><i class="fa fa-fw fa-print"
                                            aria-hidden="true"></i><span class="sr-only">Imprimer</span>
                                        <span class="sr-only">Version imprimable</span></a>
                                </li>
                            </ul>
                        </div>
                    </aside>
                </div>
                <footer class="center"><span class="page-count-hit">&nbsp;</span></footer>
            </section>


@endsection


