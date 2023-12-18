<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    protected $categoriesWithChildren = [
        'Généralités Linux' => [
            'Amorçage, démarrage du système',
            'Commandes de base',
            'Gestion des disques et stockage',
            'Gestion des services',
            'Gestion des utilisateurs et droits',
            'Gestion du réseau',
            'Kernel',
            'Matériel, Hardware',
            'Performance et optimisation',
            'Sécurité',
            'Services de base',
        ],
        'Console' => [
            'Logiciels en ligne de commande',
            'Logiciels multimédia en console'
        ],
        'Services et Serveurs' => [
            'Serveurs Base de données',
            'Serveurs Web'
        ],
        'Fedora, Red Hat et dérivées' => [
            'Fedora Workstation et Serveur',
            'Red Hat et dérivées version SERVEUR',
            'Red Hat et dérivées version STATION DE TRAVAIL'
        ],
        'Debian et dérivées' => [
            'Administrer son serveur en web avec cockpit (Debian)',
            'Debian 10 : Installer et utiliser PostgreSQL',
            'Debian : Installer ou Migrer vers Debian sid',
            'Debian : Activer les mises à jour automatique avec unattended-upgrades',
            'Debian : Configurer les sources, Activer non-free et contrib',
            'Debian : Installer Docker',
            'Debian : Installer les pilotes NVidia',
            'Debian : Installer Nextcloud',
            'Debian : Installer son serveur de visioconférence jitsi-meet',
            'Debian : Installer un serveur DHCP',
            'Debian : Installer un serveur LAMP (Apache MariaDB PHP)',
            'Debian : Installer un serveur NFS',
            'Debian : Installer une version plus récente de PHP',
            'Debian : Installer VirtualBox',
            'Debian : Les interfaces réseau',
            'Debian : Mettre à niveau de bullseye 11 vers bookworm 12',
            'Gestion des logiciels avec APT',
            'Installer les additions invité VirtualBox dans Debian',
            'Linux Mint : Installer GNOME',
            'Linux Mint : Utiliser le Firefox d\'Ubuntu par défaut',
            'Mettre à niveau Linux Mint vers une nouvelle version',
            'Mettre à niveau Ubuntu vers une nouvelle version',
            'nala : Un frontend à apt, coloré et lisible',
            'Sauvegarder/Restaurer la liste des paquets deb',
            'Ubuntu : Installer Anydesk',
            'Ubuntu : Installer Chromium de Debian au lieu du SNAP',
            'Ubuntu : Installer Firefox en DEB plutôt que SNAP',
            'Ubuntu : Restaurer le bureau GNOME vanilla',
            'Ubuntu : Supprimer et bloquer les SNAPS',
            'Ubuntu Server : Les interfaces réseaux avec netplan',
            'Ubuntu, Mint : Installer Microsoft Edge',
            'Ubuntu, Mint : Installer Teamviewer',
            'Ubuntu, Mint : Installer Vivaldi'
        ],
        'Scripts et Programmation' => [
            'Améliorer les performances des jeux sous Linux',
            'BASH - Mémo pour scripter',
            'BASH - Sauvegarder son site et sa base de données',
            'BASH - Sauvegarder Zabbix',
            'BASH : Aspirer les photos d\'un site tumblr',
            'BASH : Épurer les noyaux Debian Ubuntu et Mint',
            'BASH : Sortir un mot aléatoire du dictionnaire',
            'BASH : Tester si un répertoire contient des fichiers',
            'BASH : Tester si un script est lancé en root',
            'BASH, MariaDB : Lister les tables d\'une base et compter leurs enregistrements',
            'HTML + JS + CSS : Afficher l\'heure sur une page HTML',
            'HTML + JS + CSS : Créer un bouton "Vers le haut" sur son site',
            'HTML + JS : Un faux formulaire pour rediriger une recherche à l\'extérieur',
            'HTML + PHP + MYSQL : Modèle de page UTF-8',
            'HTML : Formulaires Exemples',
            'iptables : Port Knocking pour ouvrir SSH',
            'JAVASCRIPT - Afficher une photo aléatoirement',
            'JAVASCRIPT - Créer une fonction sleep simple',
            'JAVASCRIPT : Envoyer un formulaire et l\'effacer après',
            'PERL : Mémo pour scripter',
            'PHP - Lancer des processus shell dans une page php',
            'PHP - Passer de mysql à mysqli, requêtes de base',
            'PHP - Quelques fonctions utiles',
            'PHP - rediriger sur une page après traitement',
            'PHP - Téléverser un fichier sur le serveur',
            'PHP - Variables $_SERVER et toutes les infos sur PHP',
            'PHP : Chiffrer et déchiffrer des données',
            'PHP : Exemples avec PDO pour interroger une base MariaDB',
            'PHPTOP : Une page PHP pour monitorer votre serveur',
            'PowerShell : Chiffrer les mots de passe dans les scripts (SecureString et Credentials)',
            'shc : Compiler un script bash',
            'SQLITE : L\'essentiel sur cette base de données (CLI, SQL, PHP)',
            'TamperMonkey : Forcer Facebook à afficher les plus récents',
            'VBS : Kill Windows Update Service',
            'WEB : Formulaires asynchrone de connexion en AJAX et JSON'
        ],
        'Virtualisation' => [],
        'Windows' => [],
        'Interface et session graphiques' => [
            'Alléger et accélérer KDE : Quelques astuces',
            'Fluxbox : Installation et personnalisation',
            'GDM : Astuces diverses',
            'Générateur de fichier Desktop',
            'GNOME / GTK : Changer le thème des applications à la volée',
            'GNOME : Créer un fond d\'écran animé (Diaporama ou Cycle journalier)',
            'GNOME : Intégrer son compte Microsoft Exchange sous Linux',
            'GNOME : Quelques extensions sympa',
            'MATE Desktop : Quelques astuces',
            'mtpfs : Montez vos périphériques MTP sous Linux',
            'notify-send : Envoyez des notifications sur votre bureau',
            'Optimiser Linux pour un PC (Portable)',
            'Pulseaudio : Trucs et astuces',
            'Redshift : Un logiciel qui ajuste la température de l\'écran (mode nuit)',
            'Réinitialiser son environnement de bureau par défaut',
            'Script GNOME : Passer de Adwaita Light à Dark automatiquement',
            'Steam sur Linux : Solutions aux problèmes',
            '[GNOME] Problèmes et Erreurs connues',
            '[KDE5] Créer une action pour ouvrir Dolphin en Root',
            '[KDE] Affiner la configuration (hors apparence)',
            '[KDE] Autoriser root à se connecter en graphique',
            '[KDE] Noms de thèmes complets !',
            '[KDE] problème et erreurs connues'
        ],
        'Logiciels graphiques' => [

            'Chrome Chromium Iron Vivaldi Opera : Personnalisation et Extensions',
            'Conky, des variables système sur le bureau !',
            'FIREFOX : Désactiver la télémétrie',
            'Firefox : Personnalisation et Extensions',
            'Flatpak : Les commandes essentielles',
            'Fortinet : Se connecter au VPN SSL Fortinet sous Linux',
            'GIMP - Réaliser un fondu entre deux images',
            'Icecast : Créer un serveur de stream musical',
            'KDE : Problèmes et solutions !',
            'LibreOffice Calc : Que le point du pavé numérique soit accepté comme virgule !',
            'Pika Backup : La sauvegarde graphique avec la puissance de borg',
            'Thunderbird : Quelques extensions et personnalisations ....',
            'TOR - Quelques infos',
            '[Applications] Quelles applications pour quels besoins ?'
        ],
        'Autres distributions' => [

            'Alpine Linux : Gestion des packages avec apk',
            'Alpine Linux : Guide d\'installation',
            'Alpine Linux : Installer un environnement de bureau (Xfce)',
            'Android : Installer un serveur SSH (NO ROOT) et transférer des fichiers',
            'Androïd TV : Installer des APK Androïd (FireStick TV Amazon et Chromecast)',
            'Arch : Gérer ses logiciels avec pacman',
            'Arch : Installer un serveur LAMP',
            'Arch Linux : Paramétrer AUR et installer pamac',
            'CLONEZILLA : Cloner Windows sur un disque plus petit',
            'Linux : Images ISO des systèmes',
            'Mageia : Compiler ses propres paquets rpm avec Mageia',
            'Mageia : Créer son propre dépôt RPM',
            'Mageia : Installer Bumblebee pour les cartes Optimus',
            'Mageia : Installer et configurer un serveur tigervnc',
            'Mageia : Utilisation d\'URPMI',
            'Manjaro : Basculer de branche (stable, testing, unstable)',
            'OpenSUSE : Upgrader son système',
            'Upgrader Mageia'
        ],
        'Hors Linux' => [],
        'Archives' => [],
        'En rédaction' => [],
        'Atélier' => []
    ];


    protected $categoryIcon=[
        'Wiki'=>"adrien/images/generalites-linux_12.png",
        'Généralités Linux'=>"adrien/images/generalites-linux_12.png",
        'Console'=>"adrien/images/console_12.png",
        'Services et Serveurs'=>"adrien/images/services_12.png",
        'Fedora, Red Hat et dérivées'=>"adrien/images/utiliser-centos_12.png",
        'Debian et dérivées'=>"adrien/images/utiliser-debian_12.png",
        'Scripts et Programmation'=>"adrien/images/programmation_12.png",
        'Virtualisation'=>"adrien/images/virtualisation_12.png",
        'Windows'=>"adrien/images/windows_12.png",
        'Interface et session graphiques'=>"adrien/images/environnements-bureau_12.png",
        'Logiciels graphiques'=>"adrien/images/logiciels_12.png",
        'Autres distributions'=>"adrien/images/autres-linux_12.png",
        'Hors Linux'=>"adrien/images/hors-linux_12.png",
        'Archives'=>"adrien/images/archives_12.png",
        'En rédaction'=>"adrien/images/en-cours-de-redaction_12.png",
        'Atélier'=>"adrien/images/articles_12.png"
    ];
    public function run()
    {
        foreach ($this->categoriesWithChildren as $key => $value) {
            if (is_array($value)) {
                Category::create(['name' => $key, 'category_id' => null,'icon' => $this->categoryIcon[$key] ?? null]);
            }
        }

        $principalCategories = Category::all();
        foreach ($principalCategories as $category) {
            $this->createCategories($this->categoriesWithChildren[$category->name], $category->id);
        }
    }

    protected function createCategories($categories, $category_id)
    {
        foreach ($categories as $key => $value) {
            if (is_array($value)) {
                $category = Category::create(['name' => $key, 'category_id' => $category_id, 'icon' => $this->categoryIcon[$key] ?? null]);
                $this->createCategories($value, $category->id);
            } else {
                Category::create(['name' => $value, 'category_id' => $category_id, 'icon' => $this->categoryIcon[$key] ?? null]);
            }
        }
    }
}
