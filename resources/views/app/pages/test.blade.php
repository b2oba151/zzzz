@extends('app')
@section('content')
@php
$data = collect([
    (object)[
        'name' => "Accueil",
        'route' => "home",
    ],
    (object)[
        'name' => "Wiki",
        'route' => "home",
    ],
    (object)[
        'name' => "Generalite systeme linux",
        'route' => "home",
    ],
    (object)[
        'name' => "Amorçage, démarrage du système linux",
        'route' => "home",
    ],
    (object)[
        'name' => "chroot sous linux",
        'route' => "home",
    ],
]);
@endphp

{{-- la file d'ariane --}}
<x-breadcrumb :data="$data" />

<x-pages-header  postCategorie="Amorçage, démarrage du système" title="chroot sous Linux : Explications et exemples"  />
<x-wiki-pages-components.espace />

<x-table-of-contents >
    <x-wiki-pages-components.li-wiki-page title="Introduction"/>
    <x-wiki-pages-components.li-wiki-page title="Cas d'utilisation"/>
    <x-wiki-pages-components.li-wiki-page  title="Fonctionnement de chroot"/>
    <x-wiki-pages-components.li-wiki-page title="Exemples"/>
        <x-wiki-pages-components.ol-wiki-page >
            <x-wiki-pages-components.li-wiki-page id="paragraph-chroot-d-un-systeme-linux-complet" title="chroot d'un système Linux complet"/>
        </x-wiki-pages-components.ol-wiki-page>
    <x-wiki-pages-components.li-wiki-page id="paragraph-quitter-le-chroot" title="Quitter le chroot"/>
</x-table-of-contents>

<x-wiki-pages-components.post-first-image-wiki-page src="../upload/wiki_divers.png" title="wiki_divers" alt="wiki_divers" />

<x-wiki-pages-components.titre1 title="Introduction">
    <x-wiki-pages-components.note title="man chroot">
        chroot - exécuter une commande ou un shell interactif avec un répertoire racine spécial
    </x-wiki-pages-components.note>
    Le concept de chroot, qui signifie "change root", est une fonctionnalité dans les systèmes d'exploitation de type Unix, dont Linux. Il permet à un processus de changer son répertoire racine, créant ainsi un environnement isolé et restreint pour son exécution.<br /><br />
    On va voir l'utilisation de chroot, son fonctionnement et quelques exemples pratiques pour illustrer son utilité<br /><br />
</x-wiki-pages-components.titre1>

<x-wiki-pages-components.titre1 title="Cas d'utilisation">
    <br />
    Chroot peut être utilisé dans plusieurs cas :<br />
    <br />
    <strong>En tant que bascule d'environnement </strong>pour prendre le contrôle d'une installation Linux depuis un autre système. Cela peut se faire depuis le média d"installation d'une distribution linux (live
    USB), ou depuis un autre système installé en double démarrage.<br /><br />
    <strong>En tant que prison </strong>pour empêcher un utilisateur de remonter dans l'arborescence pour
    l'emprisonner dans un répertoire spécifique. Cela peut être utilisé avec un serveur FTP pour que les
    utilisateurs ne remontent pas dans l'arborescence du système.<br /><br />
    <strong>En tant qu'environnement de développement isolé</strong> afin que les développeurs puissent
    développer avec différentes versions de bibliothèques sans affecter le système global. Ils pourront
    installer des dépendances spécifiques à un projet sans altérer le système principal.<br /><br />
</x-wiki-pages-components.titre1>

<x-wiki-pages-components.bash title="Fonctionnement de chroot">
    <br />
    La commande chroot modifie le répertoire racine pour le processus en cours d'exécution et de ses descendants.<br />
    En gros, les processus lancés dedans et ses enfants perçoivent un nouvel environnement racine, isolé du restedu système. Le chemin du nouveau répertoire racine est spécifié en argument de la commande chroot.<br /><br />
    La commande chroot s'utilise ainsi :<br />
    <x-wiki-pages-components.bash/>



</x-wiki-pages-components.titre1>




@endsection
