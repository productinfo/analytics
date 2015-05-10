<?php
/**
 * @link      https://dukt.net/craft/analytics/
 * @copyright Copyright (c) 2015, Dukt
 * @license   https://dukt.net/craft/analytics/docs/license
 */

return array(

    // Settings

    'Google Analytics Account' => "Compte Google Analytics",
    'You are authenticated to Google Analytics with the following account' => "Vous êtes connecté à Google Analytics avec le compte suivant",
    'Disconnect' => "Déconnexion",
    'Select an Analytics web profile to associate with your Craft website' => "Sélectionnez un profil web Analytics à associer à votre site Craft",
    'Web Profile' => "Profil Web",
    'Plugin Settings' => "Paramètres du plugin",
    'Select' => "Sélectionner",
    'Enable real-time' => "Activer le temps réel",
    'Real-Time Refresh Interval' => "Interval de rafraîchissement du temps réel",
    'Interval in seconds between requests to real-time API' => "Interval en secondes entre les requêtes vers l'API temps réel",
    'You need to connect Craft to a Google account in order to get started.' => "Pour commencer, connectez Craft à Google Analytics",
    'Getting errors trying to connect' => "Vous avez des problèmes pour vous connecter",
    'Connect to Google Analytics' => "Connexion à Analytics",
    'OAuth Not Installed' => "OAuth n'est pas installé",
    'Manage plugins' => "Gérer les plugins",
    'OAuth is installed but is disabled. Please enable it.' => "OAuth est installé mais désactivé. Veuillez l'activer",
    'Check Google API key & secret in OAuth settings' => "Vérifiez la clé et le code secret dans les paramètres OAuth",
    'OAuth plugin is present but not installed. Please install & enable it.' => "Le plugin OAuth est présent mais n'est pas installé. Veuillez l'installer",
    'Analytics plugin requires OAuth plugin for Craft.' => "Le plugin Analytics requiert le plugin OAuth pour Craft.",
    'Download OAuth plugin' => "Télécharger le plugin OAuth",

    // Interface

    'Error' => "Erreur",
    'Area' => "Chronologie",
    'Counter' => "Statistique",
    'Table' => "Tableau",
    'Pie' => "Diagramme",
    'Geo' => "Geo Map",
    'Pin/Unpin Widget' => "Épingler/Désépingler le widget",
    'Open in Google Analytics' => "Ouvrir dans Google Analytics",
    'No data.' =>  "Aucune donnée.",
    'Currently' => "Actuellement",
    'Active visitors on your website' => "Visiteurs actifs sur votre site",
    'New' => "Nouveaux",
    'Returning' => "Connus",
    'Week' => "Semaine",
    'Month' => "Mois",
    'Year' => "Année",
    'Acquisition' => "Acquisition",
    'All Pages' => "Toutes les pages",
    'All Referrals' => "Tous les sites référents",
    'All Traffic' => "Tout le traffic",
    'Audience' => "Audience",
    'Behavior' => "Comportement",
    'Browser & OS' => "Navigateur & Système d'exploitation",
    'Campaigns' => "Campagnes",
    'Channels' => "Canaux",
    'Chart' => "Graphique",
    'Content' => "Contenu",
    'Conversions' => "Conversions",
    'Dimension' => "Dimension",
    'Events' => "Événements",
    'Exit Pages' => "Pages de sortie",
    'Goals' => "Objectifs",
    'Keywords' => "Mots clés",
    'Landing Pages' => "Pages de destination",
    'Language' => "Language",
    'Location' => "Zone géographique",
    'Locations' => "Zones géographiques",
    'Metric' => "Statistique",
    'Mobile' => "Mobile",
    'Network' => "Réseau",
    'New vs Returning' => "Nouveaux visiteurs vs connus",
    'Overview' => "Vue d'ensemble",
    'Period' => "Période",
    'Real-Time' => "Temps réel",
    'Site Search' => "Recherche sur site",
    'Social Networks' => "Réseaux Sociaux",
    'Sources' => "Sources",
    'this week' => "cette semaine",
    'this month' => "ce mois-ci",
    'this year' => "cette année",
    'Visitors' => "Visiteurs",
    'Analytics is not configured, please select a profile in <a href="{url}">Analytics plugin settings</a>.' => 'Analytics n’est pas configuré, sélectionnez un profil dans les <a href="{url}">paramètres du plugin</a>.',


    // Dimensions & Metrics

    'ga:avgDomainLookupTime' => "Temps moy. de recherche du domaine (s)",
    'ga:avgDomContentLoadedTime' => "Temps moy. de chargement du contenu du document (s)",
    'ga:avgDomInteractiveTime' => "Temps moy. avant interactivité du documents (s)",
    'ga:avgEventValue' => "Valeur moyenne", // why is is event value and not just value ?
    'ga:avgPageDownloadTime' => "Temps de téléchargement moyen de la page (s)",
    'ga:avgPageLoadTime' => "Temps de chargement moyen de la page (s)",
    'ga:avgRedirectionTime' => "Temps de redirection moyenne (s)",
    'ga:avgSearchDepth' => "Étendue moyenne de la recherche",
    'ga:avgSearchDuration' => "Temps après recherche",
    'ga:avgSearchResultViews' => "Pages vues (résultats) par recherche", // ?
    'ga:avgServerConnectionTime' => "Temps moyen de connexion au serveur (s)",
    'ga:avgServerResponseTime' => "Temps de réponse moyen du serveur (s)",
    'ga:avgSessionDuration' => "Durée moy. sessions",
    'ga:avgTimeOnPage' => "Temps moyen passé sur la page",
    'ga:bounceRate' => "Taux de rebond",
    'ga:browser' => "Navigateur",
    'ga:campaign' => "Campagne",
    'ga:campaignCode' => "Code de la campagne",
    'ga:channelGrouping' => "Groupe de canaux", // Groupe de canaux par défaut ?
    'ga:city' => "Ville",
    'ga:continent' => "Continent",
    'ga:country' => "Pays/Territoire",
    'ga:deviceCategory' => "Catégorie d'appareil",
    'ga:eventAction' => "Action d'événement",
    'ga:eventCategory' => "Catégorie d'événement",
    'ga:eventLabel' => "Libellé d'événement",
    'ga:eventsPerSessionWithEvent' => "Événements/Session avec événement",
    'ga:eventValue' => "Valeur de l'événement",
    'ga:exitPagePath' => "Page de sortie",
    'ga:exitRate' => "Sorties (en %)",
    'ga:exits' => "Sorties",
    'ga:flashVersion' => "Version Flash",
    'ga:fullReferrer' => "URL de provenance",
    'ga:goalAbandonRateAll' => "Taux d'abandon global",
    'ga:goalCompletionLocation' => "URL de réalisation de l'objectif",
    'ga:goalCompletionsAll' => "Objectifs réalisés",
    'ga:goalConversionRateAll' => "Taux de conversion par objectif",
    'ga:goalValueAll' => "Valeur de l'objectif",
    'ga:goalValueAllPerSearch' => "Valeur de l'objectif par recherche",
    'ga:hasSocialSourceReferral' => "Site référent source de réseau social",
    'ga:hostname' => "Nom d'hôte",
    'ga:itemQuantity' => "Quantité",
    'ga:javaEnabled' => "Compatibilité avec le langage Java",
    'ga:keyword' => "Mot clé",
    'ga:landingPagePath' => "Page de destination",
    'ga:language' => "Langue",
    'ga:medium' => "Support",
    'ga:mobileDeviceBranding' => "Marque de l'appareil",
    'ga:mobileDeviceInfo' => "Infos sur l'appareil mobile",
    'ga:mobileDeviceMarketingName' => "Dénomination commerciale",
    'ga:mobileDeviceModel' => "Modèle d'appareil mobile",
    'ga:mobileInputSelector' => "Sélecteur de saisie sur l'appareil",
    'ga:networkLocation' => "Fournisseur de services",
    'ga:nextPagePath' => "Chemin de la page suivante",
    'ga:operatingSystem' => "Système d'exploitation",
    'ga:pageDepth' => "Nombre de pages",
    'ga:pageLoadSample' => "Exemple de chargement de page",
    'ga:pagePath' => "Page",
    'ga:pagePathLevel1' => "Chemin de la page, niveau 1",
    'ga:pagePathLevel2' => "Chemin de la page, niveau 2",
    'ga:pagePathLevel3' => "Chemin de la page, niveau 3",
    'ga:pagePathLevel4' => "Chemin de la page, niveau 4",
    'ga:pageTitle' => "Titre de page",
    'ga:pageviews' => "Pages vues",
    'ga:pageviewsPerSession' => "Pages/session",
    'ga:percentNewSessions' => "% nouvelles sessions",
    'ga:percentSearchRefinements' => "Précision des recherches (%)",
    'ga:percentSessionsWithSearch' => "% sessions avec recherche",
    'ga:previousPagePath' => "Chemin de la page précédente",
    'ga:referralPath' => "Chemin du site référent",
    'ga:revenuePerItem' => "Chiffre d'affaire par produit",
    'ga:screenColors' => "Couleurs d'écrans",
    'ga:screenResolution' => "Résolution d'écran",
    'ga:searchCategory' => "Catégorie de recherche sur site",
    'ga:searchDestinationPage' => "Page de destination",
    'ga:searchDuration' => "Temps après recherche",
    'ga:searchExitRate' => "Sorties après recherche (%)",
    'ga:searchExits' => "Sorties après recherche",
    'ga:searchGoalConversionRateAll' => "Taux de conversion par objectif pour Site Search",
    'ga:searchKeyword' => "Terme de recherche",
    'ga:searchResultViews' => "Pages vues (résultats) par recherche",
    'ga:searchSessions' => "Sessions avec recherche",
    'ga:searchStartPage' => "Page d'accueil",
    'ga:searchUniques' => "Nombre total de recherches uniques",
    'ga:searchUsed' => "État de la recherche sur site",
    'ga:secondPagePath' => "Deuxième page",
    'ga:sessions' => "Sessions",
    'ga:sessionsWithEvent' => "Sessions avec événement",
    'ga:socialNetwork' => "Réseau social",
    'ga:source' => "Source",
    'ga:sourceMedium' => "Source/Support",
    'ga:subContinent' => "Sous-continent",
    'ga:totalEvents' => "Nombre total d'événements",
    'ga:uniqueEvents' => "Événements uniques",
    'ga:uniquePageviews' => "Consultations uniques",
    'ga:uniquePurchases' => "Achats uniques",
    'ga:userType' => "Type d'utilisateur",


    // Realtime Dimensions & Metrics

    'rt:activeUsers' => "Utilisateurs actifs",
    'rt:campaign' => "Campagne",
    'rt:city' => "Ville",
    'rt:country' => "Pays/Territoire",
    'rt:eventAction' => "Action d'événement",
    'rt:eventCategory' => "Catégorie d'événement",
    'rt:eventLabel' => "Libellé d'événement",
    'rt:goalCompletionsAll' => "Objectifs réalisés",
    'rt:goalId' => "ID de l'objectif",
    'rt:goalValueAll' => "Valeur de l'objectif",
    'rt:keyword' => "Mot clé",
    'rt:medium' => "Support",
    'rt:pagePath' => "Page",
    'rt:pageTitle' => "Titre de page",
    'rt:pageviews' => "Pages vues",
    'rt:referralPath' => "Chemin du site référent",
    'rt:region' => "Région",
    'rt:source' => "Source",
    'rt:totalEvents' => "Nombre total d'événements",
    'rt:userType' => "Type d'utilisateur",
);