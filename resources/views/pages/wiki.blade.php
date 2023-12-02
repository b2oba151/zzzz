@extends('app')
@section('content')
<nav id="cssmenu-module-wiki" class="cssmenu cssmenu-right cssmenu-actionslinks">
<ul class="level-0 hidden">
<li>
<a href="/wiki/wiki.php" class="cssmenu-title">Accueil</a>
</li>
<li>
<a href="/wiki/explorer.php" class="cssmenu-title">Explorateur</a>
</li>
</ul>
</nav>

<nav id="breadcrumb" itemprop="breadcrumb">
    <ol itemscope itemtype="http://schema.org/BreadcrumbList">
<li itemprop="itemListElement" itemscope itemtype="http://data-vocabulary.org/ListItem">
           <a href="/" itemprop="item">
                <span itemprop="name">Accueil</span>
                <meta itemprop="position" content="1" />
            </a>
</li>

<li itemprop="itemListElement" itemscope itemtype="http://data-vocabulary.org/ListItem"  class="current" >
          <a href="wiki.php" itemprop="item">
            <span itemprop="name">Wiki</span>
            <meta itemprop="position" content="" />
          </a>
        </li>

    </ol>
</nav>
<section id="module-wiki">
<header>
<div class="cat-actions">
<a href="/syndication/rss/wiki/" aria-label="Syndication"><i class="fa fa-syndication" aria-hidden="true" title="Syndication"></i></a>
</div>
<h1>
Wiki
</h1>
</header>
<div class="wiki-tools-container">
<nav id="cssmenu-wikitools" class="cssmenu cssmenu-right cssmenu-actionslinks cssmenu-tools">
<ul class="level-0 hidden">
<li><a href="../wiki/history.php" class="cssmenu-title">
<i class="fa fa-fw fa-reply" aria-hidden="true"></i> Historique
</a></li>
<li><a href="../wiki/property.php?random=1" class="cssmenu-title">
<i class="fa fa-fw fa-random" aria-hidden="true"></i> Page aléatoire
</a></li>
</ul>
</nav>
</div>
<div class="spacer"></div>
<article>
<div class="content">
<fieldset class="formatter-container formatter-fieldset" style="width: 500px; margin:auto; text-align:center"><legend>Accueil wiki</legend><div class="formatter-content"><span style="font-size: 20px;">Bienvenue sur la page d'accueil du wiki.</span><br />
<br />
<em><span style="font-size: 15px;">Pour accéder rapidement aux différentes rubriques du wiki, cliquez sur les icônes dans la mosaïque ci-dessous !</span></em></div></fieldset><br />
<table class="formatter-table" style="border:0px">
    <tr class="formatter-table-row" style="border:0px"><br />
        <td class="formatter-table-col" style="vertical-align: top;padding: 5px;border: 0px"><br />
<span style="font-size: 15px;">Généralités Linux</span><br />
<p style="text-align: center;"><a href="/wiki/generalites-systeme-linux"><img src="/adrien/images/generalites-linux.png" alt="generalites-linux" title="generalites-linux" /></a></p><br />
<fieldset class="formatter-container formatter-fieldset" style=""><legend></legend><div class="formatter-content">Ici, des informations concernant la structure du système d'exploitation Linux.</div></fieldset><br />
                </td>
        <td class="formatter-table-col" style="vertical-align: top;padding: 5px;border: 0px"><br />
<span style="font-size: 15px;">Console</span><br />
<p style="text-align: center;"><a href="/wiki/console"><img src="/adrien/images/console.png" alt="console" title="console" /></a></p><br />
<fieldset class="formatter-container formatter-fieldset" style=""><legend></legend><div class="formatter-content">Catégorie recensant quelques manipulations en console, quelques commandes, et des logiciels utilisables en console uniquement.</div></fieldset><br />
                </td>
        <td class="formatter-table-col" style="vertical-align: top;padding: 5px;border: 0px"><br />
<span style="font-size: 15px;">Services</span><br />
<p style="text-align: center;"><a href="/wiki/services"><img src="/adrien/images/services.png" alt="services" title="services" /></a></p><br />
<fieldset class="formatter-container formatter-fieldset" style=""><legend></legend><div class="formatter-content">Ici, pleins de tutoriels pour la configuration de services pour serveurs. OpenSSH, DNS, DHCP par exemple.</div></fieldset><br />
                </td>
    </tr>
    <tr class="formatter-table-row" style="border:0px"><br />
<br />
        <td class="formatter-table-col" style="vertical-align: top;padding: 5px;border: 0px"><br />
<span style="font-size: 15px;">Gentoo et Calculate Linux</span><br />
<p style="text-align: center;"><a href="/wiki/utiliser-gentoo-et-calculate-linux"><img src="/adrien/images/utiliser-gentoo.png" alt="utiliser-gentoo" title="utiliser-gentoo" /></a></p><br />
<fieldset class="formatter-container formatter-fieldset" style=""><legend></legend><div class="formatter-content">Astuces propres aux distributions Gentoo (et Calculate Linux), ainsi que l'utilisation de leurs outils.</div></fieldset><br />
                </td>
        <td class="formatter-table-col" style="vertical-align: top;padding: 5px;border: 0px"><br />
<span style="font-size: 15px;">Fedora, Red Hat et dérivées</span><br />
<p style="text-align: center;"><a href="/wiki/utiliser-fedora-red-hat-et-derivees"><img src="/adrien/images/utiliser-centos.png" alt="utiliser-centos" title="utiliser-centos" /></a></p><br />
<fieldset class="formatter-container formatter-fieldset" style=""><legend></legend><div class="formatter-content">Astuces propres à la distribution Fedora et au monde Red Hat (RHEL, CentOS Alma Linux).</div></fieldset><br />
                </td>
        <td class="formatter-table-col" style="vertical-align: top;padding: 5px;border: 0px"><br />
<span style="font-size: 15px;">Debian et dérivées</span><br />
<p style="text-align: center;"><a href="/wiki/utiliser-debian-et-derivees"><img src="/adrien/images/utiliser-debian.png" alt="utiliser-debian" title="utiliser-debian" /></a></p><br />
<fieldset class="formatter-container formatter-fieldset" style=""><legend></legend><div class="formatter-content">Astuces propres à la distribution Debian, à son architecture DEB et son gestionnaire de paquetage APT</div></fieldset><br />
                </td>
    </tr>
    <tr class="formatter-table-row" style="border:0px"><br />
        <td class="formatter-table-col" style="vertical-align: top;padding: 5px;border: 0px"><br />
<span style="font-size: 15px;">Scripts et Programmation</span><br />
<p style="text-align: center;"><a href="/wiki/scripts-et-programmation"><img src="/adrien/images/programmation.png" alt="programmation" title="programmation" /></a></p><br />
<fieldset class="formatter-container formatter-fieldset" style=""><legend></legend><div class="formatter-content">Quelques bases à propos de différents langages de programmation (BASH, PERL, etc.)</div></fieldset><br />
                </td>
        <td class="formatter-table-col" style="vertical-align: top;padding: 5px;border: 0px"><br />
<span style="font-size: 15px;">Virtualisation</span><br />
<p style="text-align: center;"><a href="/wiki/virtualisation"><img src="/adrien/images/virtualisation.png" alt="virtualisation" title="virtualisation" /></a></p><br />
<fieldset class="formatter-container formatter-fieldset" style=""><legend></legend><div class="formatter-content">Catégorie répertoriant des astuces les plateformes de Virtualisation (VMware, Proxmox)</div></fieldset><br />
                </td>
        <td class="formatter-table-col" style="vertical-align: top;padding: 5px;border: 0px"><br />
<span style="font-size: 15px;">Windows</span><br />
<p style="text-align: center;"><a href="/wiki/windows"><img src="/adrien/images/windows.png" alt="windows" title="windows" /></a></p><br />
<fieldset class="formatter-container formatter-fieldset" style=""><legend></legend><div class="formatter-content">Catégorie répertoriant des astuces sur Windows Server et Pro. Plutôt orienté entreprise</div></fieldset><br />
                </td>
    </tr>
    <tr class="formatter-table-row" style="border:0px"><br />
        <td class="formatter-table-col" style="vertical-align: top;padding: 5px;border: 0px"><br />
<span style="font-size: 15px;">Interface et session graphique</span><br />
<p style="text-align: center;"><a href="/wiki/linux-graphique"><img src="/adrien/images/environnements-bureau.png" alt="environnements-bureau" title="environnements-bureau" /></a></p><br />
<fieldset class="formatter-container formatter-fieldset" style=""><legend></legend><div class="formatter-content">Catégorie répertoriant les astuces sur Linux en graphique : PulseAudio, KDE, GNOME, XFCE, etc....</div></fieldset><br />
                </td>
        <td class="formatter-table-col" style="vertical-align: top;padding: 5px;border: 0px"><br />
<span style="font-size: 15px;">Logiciels graphiques</span><br />
<p style="text-align: center;"><a href="/wiki/logiciels"><img src="/adrien/images/logiciels.png" alt="logiciels" title="logiciels" /></a></p><br />
<fieldset class="formatter-container formatter-fieldset" style=""><legend></legend><div class="formatter-content">Astuces, manipulations pour se simplifier la vie avec les logiciels "graphiques" tels que Firefox, Thunderbird, et bien d'autres...</div></fieldset><br />
                </td>
        <td class="formatter-table-col" style="vertical-align: top;padding: 5px;border: 0px"><br />
<span style="font-size: 15px;">Autres distribs Linux</span><br />
<p style="text-align: center;"><a href="/wiki/autres-distribs-linux"><img src="/adrien/images/autres-linux.png" alt="autres-linux" title="autres-linux" /></a></p><br />
<fieldset class="formatter-container formatter-fieldset" style=""><legend></legend><div class="formatter-content">Astuces concernant les autres distributions linux (autre que Debian, Gentoo, Fedora/CentOS) et Android.</div></fieldset><br />
                </td>
    </tr>
    <tr class="formatter-table-row" style="border:0px"><br />
        <td class="formatter-table-col" style="vertical-align: top;padding: 5px;border: 0px"><br />
<span style="font-size: 15px;">Hors Linux</span><br />
<p style="text-align: center;"><a href="/wiki/hors-linux"><img src="/adrien/images/hors-linux.png" alt="hors-linux" title="hors-linux" /></a></p><br />
<fieldset class="formatter-container formatter-fieldset" style=""><legend></legend><div class="formatter-content">Catégorie répertoriant quelques astuces ou choses à conserver qui ne sont pas en rapport avec Linux</div></fieldset><br />
                </td>
        <td class="formatter-table-col" style="vertical-align: top;padding: 5px;border: 0px"><br />
<span style="font-size: 15px;">Archives</span><br />
<p style="text-align: center;"><a href="/wiki/archives"><img src="/adrien/images/archives.png" alt="archives" title="archives" /></a></p><br />
<fieldset class="formatter-container formatter-fieldset" style=""><legend></legend><div class="formatter-content">Au lieu de supprimer des articles obsolètes, je les archive dans cette section.</div></fieldset><br />
                </td>
        <td class="formatter-table-col" style="vertical-align: top;padding: 5px;border: 0px"><br />
<span style="font-size: 15px;">En cours de rédaction</span><br />
<p style="text-align: center;"><a href="/wiki/en-cours-de-redaction"><img src="/adrien/images/en-cours-de-redaction.png" alt="en-cours-de-redaction" title="en-cours-de-redaction" /></a></p><br />
<fieldset class="formatter-container formatter-fieldset" style=""><legend></legend><div class="formatter-content">Dans cette catégorie, les articles sont en construction. Attention à ne pas appliquer les procédures.</div></fieldset><br />
                </td>
    </tr>
</table>
<div class="options">
<a href="{{ route('wiki.explorer') }}" title="Explorateur du wiki">
<i class="fa fa-folder-open" aria-hidden="true"></i>
Explorateur du wiki
</a>
</div>
</div>
</article>
<div class="elements-container columns-2">
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
