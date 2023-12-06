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
                                <li><a href="#paragraph-chroot-d-un-systeme-linux-complet">chroot d'un système Linux
                                        complet</a></li>
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
                <div class="formatter-container formatter-blockquote"><span class="formatter-title title-perso">man chroot
                        :</span>
                    <div class="formatter-content">chroot - exécuter une commande ou un shell interactif avec un répertoire
                        racine spécial</div>
                </div><br />
                <br />
                Le concept de chroot, qui signifie "change root", est une fonctionnalité dans les systèmes d'exploitation de
                type Unix, dont Linux. Il permet à un processus de changer son répertoire racine, créant ainsi un
                environnement isolé et restreint pour son exécution.<br />
                <br />
                On va voir l'utilisation de chroot, son fonctionnement et quelques exemples pratiques pour illustrer son
                utilité.<br />
                <br />
                <h2 class="formatter-title wiki-paragraph-2" id="paragraph-cas-d-utilisation">Cas d'utilisation</h2><br />
                <br />
                Chroot peut être utilisé dans plusieurs cas :<br />
                <br />
                <strong>En tant que bascule d'environnement </strong>pour prendre le contrôle d'une installation Linux
                depuis un autre système. Cela peut se faire depuis le média d"installation d'une distribution linux (live
                USB), ou depuis un autre système installé en double démarrage.<br />
                <br />
                <strong>En tant que prison </strong>pour empêcher un utilisateur de remonter dans l'arborescence pour
                l'emprisonner dans un répertoire spécifique. Cela peut être utilisé avec un serveur FTP pour que les
                utilisateurs ne remontent pas dans l'arborescence du système.<br />
                <br />
                <strong>En tant qu'environnement de développement isolé</strong> afin que les développeurs puissent
                développer avec différentes versions de bibliothèques sans affecter le système global. Ils pourront
                installer des dépendances spécifiques à un projet sans altérer le système principal.<br />
                <br />
                <h2 class="formatter-title wiki-paragraph-2" id="paragraph-fonctionnement-de-chroot">Fonctionnement de
                    chroot</h2><br />
                <br />
                La commande chroot modifie le répertoire racine pour le processus en cours d'exécution et de ses
                descendants.<br />
                En gros, les processus lancés dedans et ses enfants perçoivent un nouvel environnement racine, isolé du
                reste du système. Le chemin du nouveau répertoire racine est spécifié en argument de la commande
                chroot.<br />
                <br />
                La commande chroot s'utilise ainsi :<br />
                <br />
                <div class="formatter-container formatter-code code-BASH"><span class="formatter-title">Code BASH :</span>
                    <div class="formatter-content">
                        <pre style="display:inline;"><pre class="bash" style="font-family:monospace;"><span style="color: #c20cb9; font-weight: bold;">chroot</span> <span style="color: #000000; font-weight: bold;">/</span>nouvelle<span style="color: #000000; font-weight: bold;">/</span>racine <span style="color: #000000; font-weight: bold;">/</span>usb<span style="color: #000000; font-weight: bold;">/</span>bin<span style="color: #000000; font-weight: bold;">/</span>commande_a_lancer</pre>
                        </pre>
                    </div>
                </div><br />
                <br />
                <h2 class="formatter-title wiki-paragraph-2" id="paragraph-exemples">Exemples</h2><br />
                <br />
                <h3 class="formatter-title wiki-paragraph-3" id="paragraph-chroot-d-un-systeme-linux-complet">chroot d'un
                    système Linux complet</h3><br />
                <br />
                Le prérequis est de démarrer sur un autre système Linux :<br />
                - Le média de la même distribution dans le cas d'une réparation<br />
                - Depuis un autre système Linux installé en dualboot, c'est aussi possible<br />
                <br />
                On va créer un point de montage dans <strong>/mnt/linux</strong> par exemple, mais on peut tout à fait créer
                un point de montage où on veut.<br />
                <br />
                On identifiera avec la commande suivante les partitions et leur taille :<br />
                <div class="formatter-container formatter-code code-BASH"><span class="formatter-title">Code BASH :</span>
                    <div class="formatter-content">
                        <pre style="display:inline;"><pre class="bash" style="font-family:monospace;">lsblk</pre>
                        </pre>
                    </div>
                </div><br />
                <br />
                <div class="formatter-container formatter-code code-BASH"><span class="formatter-title">Code BASH :</span>
                    <div class="formatter-content">
                        <pre style="display:inline;"><pre class="bash" style="font-family:monospace;">NAME   MAJ:MIN RM  SIZE RO TYPE MOUNTPOINTS
sda      <span style="color: #000000;">8</span>:<span style="color: #000000;">0</span>    <span style="color: #000000;">0</span>   90G  <span style="color: #000000;">0</span> disk
├─sda1   <span style="color: #000000;">8</span>:<span style="color: #000000;">1</span>    <span style="color: #000000;">0</span>   35G  <span style="color: #000000;">0</span> part
├─sda2   <span style="color: #000000;">8</span>:<span style="color: #000000;">2</span>    <span style="color: #000000;">0</span>   53G  <span style="color: #000000;">0</span> part
└─sda3   <span style="color: #000000;">8</span>:<span style="color: #000000;">3</span>    <span style="color: #000000;">0</span>    2G  <span style="color: #000000;">0</span> part </pre>
                        </pre>
                    </div>
                </div><br />
                <br />
                Ici : sda1 est ma racine à 35Go, sda2 est le /home et sda3 est le swap.<br />
                Pour plus de détails (systèmes de fichiers, labels, UUID, ...) on peut utiliser :<br />
                <div class="formatter-container formatter-code code-BASH"><span class="formatter-title">Code BASH :</span>
                    <div class="formatter-content">
                        <pre style="display:inline;"><pre class="bash" style="font-family:monospace;">lsblk <span style="color: #660033;">-f</span></pre>
                        </pre>
                    </div>
                </div><br />
                <br />
                <br />
                Ensuite, on va monter la racine du système concerné dans la future arborescence :<br />
                <br />
                <span class="message-helper notice">Dans cet exemple, j'utilise /dev/sda1 qui est la partition racine,
                    évidemment, remplacez en fonction de votre cas.</span><br />
                <br />
                <div class="formatter-container formatter-code code-BASH"><span class="formatter-title">Code BASH :</span>
                    <div class="formatter-content">
                        <pre style="display:inline;"><pre class="bash" style="font-family:monospace;"><span style="color: #c20cb9; font-weight: bold;">mount</span> <span style="color: #000000; font-weight: bold;">/</span>dev<span style="color: #000000; font-weight: bold;">/</span>sda1 <span style="color: #000000; font-weight: bold;">/</span>mnt<span style="color: #000000; font-weight: bold;">/</span>linux</pre>
                        </pre>
                    </div>
                </div><br />
                <br />
                Ensuite, montez si vous en avez l'utilité d'autres partitions (/boot ou /home etc ... )<br />
                <br />
                Exemple avec <strong>/home</strong> en <strong>/dev/sda2</strong><br />
                <br />
                <div class="formatter-container formatter-code code-BASH"><span class="formatter-title">Code BASH :</span>
                    <div class="formatter-content">
                        <pre style="display:inline;"><pre class="bash" style="font-family:monospace;"><span style="color: #c20cb9; font-weight: bold;">mount</span> <span style="color: #000000; font-weight: bold;">/</span>dev<span style="color: #000000; font-weight: bold;">/</span>sda2 <span style="color: #000000; font-weight: bold;">/</span>mnt<span style="color: #000000; font-weight: bold;">/</span>linux<span style="color: #000000; font-weight: bold;">/</span>home</pre>
                        </pre>
                    </div>
                </div><br />
                <br />
                Ensuite, il ne faut pas oublier de monter les dossiers spéciaux nécessaires au fonctionnement du système
                dans le cas d'une réparation de celui-ci :<br />
                <br />
                <div class="formatter-container formatter-code code-BASH"><span class="formatter-title">Code BASH :</span>
                    <div class="formatter-content">
                        <pre style="display:inline;"><pre class="bash" style="font-family:monospace;"><span style="color: #c20cb9; font-weight: bold;">mount</span> <span style="color: #660033;">--bind</span> <span style="color: #000000; font-weight: bold;">/</span>dev <span style="color: #000000; font-weight: bold;">/</span>mnt<span style="color: #000000; font-weight: bold;">/</span>linux<span style="color: #000000; font-weight: bold;">/</span>dev
<span style="color: #c20cb9; font-weight: bold;">mount</span> <span style="color: #660033;">-t</span> proc <span style="color: #000000; font-weight: bold;">/</span>proc <span style="color: #000000; font-weight: bold;">/</span>mnt<span style="color: #000000; font-weight: bold;">/</span>linux<span style="color: #000000; font-weight: bold;">/</span>proc
<span style="color: #c20cb9; font-weight: bold;">mount</span> <span style="color: #660033;">-t</span> sysfs <span style="color: #000000; font-weight: bold;">/</span>sys <span style="color: #000000; font-weight: bold;">/</span>mnt<span style="color: #000000; font-weight: bold;">/</span>linux<span style="color: #000000; font-weight: bold;">/</span>sys</pre>
                        </pre>
                    </div>
                </div><br />
                <br />
                Enfin, basculer vers le nouveau système avec la commande <strong>chroot</strong> vue précédemment. On va
                appeler un shell bash dans ce cas :<br />
                <br />
                <div class="formatter-container formatter-code code-BASH"><span class="formatter-title">Code BASH :</span>
                    <div class="formatter-content">
                        <pre style="display:inline;"><pre class="bash" style="font-family:monospace;"><span style="color: #c20cb9; font-weight: bold;">chroot</span> <span style="color: #000000; font-weight: bold;">/</span>mnt <span style="color: #000000; font-weight: bold;">/</span>bin<span style="color: #000000; font-weight: bold;">/</span><span style="color: #c20cb9; font-weight: bold;">bash</span> </pre>
                        </pre>
                    </div>
                </div><br />
                <br />
                Le prompt change alors et vous pouvez maintenant effectuer des opérations comme si vous étiez dans votre
                système installé directement.<br />
                Par exemple : réparer le chargeur d'amorçage, mettre à jour le système, ou réinitialiser des mots de
                passe.<br />
                <br />
                <br />
                <h2 class="formatter-title wiki-paragraph-2" id="paragraph-quitter-le-chroot">Quitter le chroot</h2><br />
                <br />
                Pour sortir de l'environnement du chroot, il suffit sumplement de quitter le système chrooté avec la
                commande<br />
                <br />
                <div class="formatter-container formatter-code code-BASH"><span class="formatter-title">Code BASH :</span>
                    <div class="formatter-content">
                        <pre style="display:inline;"><pre class="bash" style="font-family:monospace;"><span style="color: #7a0874; font-weight: bold;">exit</span></pre>
                        </pre>
                    </div>
                </div><br />
                <br />
                Puis une fois revenu sur le système live, démonter tous les systèmes de fichiers précédemment montés :<br />
                <br />
                Commencer par les dossiers spéciaux :<br />
                <br />
                <div class="formatter-container formatter-code code-BASH"><span class="formatter-title">Code BASH :</span>
                    <div class="formatter-content">
                        <pre style="display:inline;"><pre class="bash" style="font-family:monospace;"><span style="color: #c20cb9; font-weight: bold;">umount</span> <span style="color: #000000; font-weight: bold;">/</span>mnt<span style="color: #000000; font-weight: bold;">/</span>linux<span style="color: #000000; font-weight: bold;">/</span>dev
<span style="color: #c20cb9; font-weight: bold;">umount</span> <span style="color: #000000; font-weight: bold;">/</span>mnt<span style="color: #000000; font-weight: bold;">/</span>linux<span style="color: #000000; font-weight: bold;">/</span>proc
<span style="color: #c20cb9; font-weight: bold;">umount</span> <span style="color: #000000; font-weight: bold;">/</span>mnt<span style="color: #000000; font-weight: bold;">/</span>linux<span style="color: #000000; font-weight: bold;">/</span>sys</pre>
                        </pre>
                    </div>
                </div><br />
                <br />
                Puis par les partitions additionnelles :<br />
                <br />
                <div class="formatter-container formatter-code code-BASH"><span class="formatter-title">Code BASH :</span>
                    <div class="formatter-content">
                        <pre style="display:inline;"><pre class="bash" style="font-family:monospace;"><span style="color: #c20cb9; font-weight: bold;">umount</span> <span style="color: #000000; font-weight: bold;">/</span>mnt<span style="color: #000000; font-weight: bold;">/</span>linux<span style="color: #000000; font-weight: bold;">/</span>home</pre>
                        </pre>
                    </div>
                </div><br />
                <br />
                Et enfin la racine :<br />
                <br />
                <div class="formatter-container formatter-code code-BASH"><span class="formatter-title">Code BASH :</span>
                    <div class="formatter-content">
                        <pre style="display:inline;"><pre class="bash" style="font-family:monospace;"><span style="color: #c20cb9; font-weight: bold;">umount</span> <span style="color: #000000; font-weight: bold;">/</span>mnt<span style="color: #000000; font-weight: bold;">/</span>linux</pre>
                        </pre>
                    </div>
                </div><br />
                <br />
                <span class="message-helper notice">On pourra tout démonter d'un coup avec l'option -R de la commande
                    umount qui fait les démontages de façon récursive :<br />
                    <div class="formatter-container formatter-code code-BASH"><span class="formatter-title">Code BASH
                            :</span>
                        <div class="formatter-content">
                            <pre style="display:inline;"><pre class="bash" style="font-family:monospace;"><span style="color: #c20cb9; font-weight: bold;">umount</span> <span style="color: #660033;">-R</span> <span style="color: #000000; font-weight: bold;">/</span>mnt<span style="color: #000000; font-weight: bold;">/</span>linux</pre>
                            </pre>
                        </div>
                    </div>
                </span><br />
                <br />
                Et voilà !<br />
                Quand on redémarrera sur le système que l'on a précédemment chrooté, on verra l'impact des modifications
                réalisées pendant le chroot.<br />
                <div class="spacer"></div>
                <div id="more-element-sharing-container" class="more-element more-element-sharing">

                    <div class="spacer"></div>

                    @include('layouts.wiki_footer')
                @endsection
