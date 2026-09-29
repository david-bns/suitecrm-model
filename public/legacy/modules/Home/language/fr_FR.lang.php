<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SuiteCRM Ltd.
 * Copyright (C) 2011 - 2025 SuiteCRM Ltd.
 *
 * This program is free software; you can redistribute it and/or modify it under
 * the terms of the GNU Affero General Public License version 3 as published by the
 * Free Software Foundation with the addition of the following permission added
 * to Section 15 as permitted in Section 7(a): FOR ANY PART OF THE COVERED WORK
 * IN WHICH THE COPYRIGHT IS OWNED BY SUGARCRM, SUGARCRM DISCLAIMS THE WARRANTY
 * OF NON INFRINGEMENT OF THIRD PARTY RIGHTS.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU Affero General Public License for more
 * details.
 *
 * You should have received a copy of the GNU Affero General Public License along with
 * this program; if not, see http://www.gnu.org/licenses or write to the Free
 * Software Foundation, Inc., 51 Franklin Street, Fifth Floor, Boston, MA
 * 02110-1301 USA.
 *
 * You can contact SugarCRM, Inc. headquarters at 10050 North Wolfe Road,
 * SW2-130, Cupertino, CA 95014, USA. or at email address contact@sugarcrm.com.
 *
 * The interactive user interfaces in modified source and object code versions
 * of this program must display Appropriate Legal Notices, as required under
 * Section 5 of the GNU Affero General Public License version 3.
 *
 * In accordance with Section 7(b) of the GNU Affero General Public License version 3,
 * these Appropriate Legal Notices must retain the display of the "Powered by
 * SugarCRM" logo and "Supercharged by SuiteCRM" logo. If the display of the logos is not
 * reasonably feasible for technical reasons, the Appropriate Legal Notices must
 * display the words "Powered by SugarCRM" and "Supercharged by SuiteCRM".
 */

if (!defined('sugarEntry') || !sugarEntry) {
    die('Not A Valid Entry Point');
}

$mod_strings = array(
    'LBL_MODULE_NAME' => 'Accueil',
    'LBL_NEW_FORM_TITLE' => 'New Contact',
    'LBL_FIRST_NAME' => 'Prénom :',
    'LBL_LAST_NAME' => 'Nom de famille :',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_PHONE' => 'Phone:',
    'LBL_EMAIL_ADDRESS' => 'Adresse électronique :',
    'LBL_MY_PIPELINE_FORM_TITLE' => 'Mon Portefeuille',
    'LBL_PIPELINE_FORM_TITLE' => 'Pipeline By Sales Stage',
    'LBL_RGraph_PIPELINE_FORM_TITLE' => 'Pipeline By Sales Stage',
    'LNK_NEW_CONTACT' => 'Créer un Contact',
    'LNK_NEW_ACCOUNT' => 'Créer un compte',
    'LNK_NEW_OPPORTUNITY' => 'Créer une affair',
    'LNK_NEW_LEAD' => 'Créer un prospect',
    'LNK_NEW_CASE' => 'Créer un cas',
    'LNK_NEW_NOTE' => 'Créer une note ou une pièce jointe',
    'LNK_NEW_CALL' => 'Enregistrer un appel',
    'LNK_NEW_EMAIL' => 'Archiver E-mail',
    'LNK_NEW_MEETING' => 'Organiser une réunion',
    'LNK_NEW_TASK' => 'Planifier une tâche',
    'LNK_NEW_BUG' => 'Report Bug',
    'LNK_NEW_SEND_EMAIL' => 'Rédiger E-mail',
    'LBL_NO_ACCESS' => 'Vous n&#39;avez pas accès à cet espace. Veuillez contacter votre administrateur pour en connaître la raison.',
    'LBL_NO_RESULTS_IN_MODULE' => '-- Pas de résultats --',
    'LBL_NO_RESULTS' => '<h2>Aucun résultat trouvé. Veuillez effectuer une nouvelle recherche.</h2><br>',
    'LBL_NO_RESULTS_TIPS' => '<h3>Aide à la recherche :</h3><ul><li>Assurez vous d&#39;avoir sélectionnées les catégories appropriées ci-dessus.</li><li>Élargissez vos critères de recherche.</li><li>Si vous ne trouvez aucun résultat, essayez la recherche avancée du module.</li></ul>',

    'LBL_ADD_DASHLETS' => 'Add SuiteCRM Dashlets',
    'LBL_WEBSITE_TITLE' => 'Website',
    'LBL_RSS_TITLE' => 'Flux de news',
    'LBL_CLOSE_DASHLETS' => 'Fermer',
    'LBL_OPTIONS' => 'Options',
    // dashlet search fields
    'LBL_TODAY' => 'Aujourd&#39;hui',
    'LBL_YESTERDAY' => 'Yesterday',
    'LBL_TOMORROW' => 'Demain',
    'LBL_NEXT_WEEK' => 'Next Week',
    'LBL_LAST_7_DAYS' => 'Last 7 Days',
    'LBL_NEXT_7_DAYS' => 'Next 7 Days',
    'LBL_LAST_MONTH' => 'Last Month',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_LAST_YEAR' => 'Last Year',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_LAST_30_DAYS' => 'Last 30 Days',
    'LBL_NEXT_30_DAYS' => 'Next 30 Days',
    'LBL_THIS_MONTH' => 'This Month',
    'LBL_THIS_YEAR' => 'This Year',

    'LBL_MODULES' => 'Modules',
    'LBL_CHARTS' => 'Graphiques',
    'LBL_TOOLS' => 'Tools',
    'LBL_WEB' => 'Web',
    'LBL_SEARCH_RESULTS' => 'Résultats de la Recherche',

    // Dashlet Categories
    'dashlet_categories_dom' => array(
        'Module Views' => 'Vue Modules',
        'Portal' => 'Portail',
        'Charts' => 'Graphiques',
        'Tools' => 'Tools',
        'Miscellaneous' => 'Divers'
    ),
    'LBL_ADDING_DASHLET' => 'Ajout un dashlet...',
    'LBL_ADDED_DASHLET' => 'SuiteCRM Dashlet Added',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Are you sure you want to remove this SuiteCRM Dashlet?',
    'LBL_REMOVING_DASHLET' => 'Suppression du Dashlet...',
    'LBL_REMOVED_DASHLET' => 'SuiteCRM Dashlet Removed',
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filters',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Only My Items',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titre',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Display Rows',

    'LBL_DASHLET_DELETE' => 'Supprimer le Dashlet',
    'LBL_DASHLET_REFRESH' => 'Rafraîchir le Dashlet',
    'LBL_DASHLET_EDIT' => 'Editer le Dashlet',

    // Default out-of-box names for tabs
    'LBL_HOME_PAGE_1_NAME' => 'Mon CRM',
    'LBL_CLOSE_SITEMAP' => 'Fermer',

    'LBL_SEARCH' => 'Search',
    'LBL_CLEAR' => 'Clear',

    'LBL_BASIC_CHARTS' => 'Graphique basique',

    'LBL_DASHLET_SEARCH' => 'Recherche de Dashlets',

//ABOUT page
    'LBL_VERSION' => 'Version',
    'LBL_BUILD' => 'version de construction',

    'LBL_SOURCE_SUGAR' => 'SugarCRM Inc - fournisseurs de la plateforme CE',

    'LBL_DASHLET_TITLE' => 'Mes sites',
    'LBL_DASHLET_OPT_TITLE' => 'Titre',
    'LBL_DASHLET_INCORRECT_URL' => 'URL incorrecte',
    'LBL_DASHLET_OPT_URL' => 'URL',
    'LBL_DASHLET_OPT_HEIGHT' => 'Hauteur du Dashlet (en pixels)',
    'LBL_DASHLET_SUITE_NEWS' => 'SuiteCRM Actualités',
    'LBL_DASHLET_DISCOVER_SUITE' => 'Découvrir SuiteCRM',
    'LBL_BASIC_SEARCH' => 'Filtre rapide' /*for 508 compliance fix*/,
    'LBL_ADVANCED_SEARCH' => 'Filtre avancé' /*for 508 compliance fix*/,
    'LBL_TOUR_HOME' => 'Icône Accueil',
    'LBL_TOUR_HOME_DESCRIPTION' => 'Retour rapide à l\'accueil du tableau de bord en un seul clic.',
    'LBL_TOUR_MODULES' => 'Modules',
    'LBL_TOUR_MODULES_DESCRIPTION' => 'Tous vos modules importants sont ici.',
    'LBL_TOUR_MORE' => 'Plus de modules',
    'LBL_TOUR_MORE_DESCRIPTION' => 'Le reste des modules est ici.',
    'LBL_TOUR_SEARCH' => 'Recherche en plein texte (Full Text)',
    'LBL_TOUR_SEARCH_DESCRIPTION' => 'Les recherches précises fournissent de meilleurs résultats.',
    'LBL_TOUR_NOTIFICATIONS' => 'Notifications',
    'LBL_TOUR_NOTIFICATIONS_DESCRIPTION' => 'Notifications de SuiteCRM iraient ici.',
    'LBL_TOUR_PROFILE' => 'Profile',
    'LBL_TOUR_PROFILE_DESCRIPTION' => 'Profil, reglages et deconnexion.',
    'LBL_TOUR_QUICKCREATE' => 'Quick Create',
    'LBL_TOUR_QUICKCREATE_DESCRIPTION' => 'Créer rapidement des documents sans changer d\'ecran.',
    'LBL_TOUR_FOOTER' => 'Pied de page dépliable. ',
    'LBL_TOUR_FOOTER_DESCRIPTION' => 'Déplier ou replier le pied de page facilement.',
    'LBL_TOUR_CUSTOM' => 'Applications personnalisées',
    'LBL_TOUR_CUSTOM_DESCRIPTION' => 'Les intégrations personnalisées se trouveront ici.',
    'LBL_TOUR_BRAND' => 'Votre marque',
    'LBL_TOUR_BRAND_DESCRIPTION' => 'Votre logo se place ici.Survolez avec la souris pour plus d\'informations.',
    'LBL_TOUR_WELCOME' => 'Bienvenue dans SuiteCRM',
    'LBL_TOUR_WATCH' => 'Regardez les nouveautés de SuiteCRM',
    'LBL_TOUR_FEATURES' => '<ul style=""><li class="icon-ok">Nouvelle barre de navigation</li><li class="icon-ok">Nouveau pied de page dépliable</li><li class="icon-ok">Recherche améliorée</li><li class="icon-ok">Nouveau menu actions</li></ul><p>et beaucoup plus !</p>',
    'LBL_TOUR_VISIT' => 'Pour plus d\'informations, merci de visiter notre application.',
    'LBL_TOUR_DONE' => 'C\'est fait !',
    'LBL_TOUR_REFERENCE_1' => 'Vous pouvez toujours faire référence à notre',
    'LBL_TOUR_REFERENCE_2' => 'à l\'aide du "Lien Support" dans l\'onglet profil.',
    'LNK_TOUR_DOCUMENTATION' => 'documentation',
    'LBL_TOUR_CALENDAR_URL_1' => 'Voulez-vous partager votre calendrier SuiteCRM avec d\'autres applications, tels que Microsoft Outlook ou Exchange? Si oui, vous avez une nouvelle URL, plus sécurisé, qui comprend une clé personnelle pour éviter la publication non autorisée de votre calendrier.',
    'LBL_TOUR_CALENDAR_URL_2' => 'Récupérer votre nouvelle URL de calendrier partagé.',
    'LBL_CONTRIBUTORS' => 'Contributeurs',
    'LBL_ABOUT_SUITE' => 'A propos de SuiteCRM',
    'LBL_PARTNERS' => 'Partenaires',
    'LBL_EDIT_ALL_RECURRENCES' => 'Editer toutes les récurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Supprimer toutes les récurrences',
    'LBL_CONFIRM_REMOVE' => 'Are you sure you want to remove the record?',
    
    'LBL_MAINTAINER_SUITECRM' => 'SuiteCRM is written and maintained by SuiteCRM Ltd',
    'LBL_CONTRIBUTOR_SUITECRM' => 'SuiteCRM - CRM Open Source pour le monde',
    'LBL_CONTRIBUTOR_SECURITY_SUITE' => 'SecuritySuite par Jason Eggers',
    'LBL_CONTRIBUTOR_JJW_GMAPS' => 'JJWDesign Google Maps par Jeffrey J. Walters',
    'LBL_CONTRIBUTOR_CONSCIOUS' => 'SuiteCRM Logo Design contributed by Conscious Solutions',
    'LBL_CONTRIBUTOR_RESPONSETAP' => 'Contribution to SuiteCRM by ResponseTap',
    'LBL_CONTRIBUTOR_GMBH' => 'Workflow de champs calculés fournis par diligent technology & business consulting GmbH',

    'LBL_LANGUAGE_ABOUT' => 'Au sujet des traductions SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_ABOUT' => 'Traduction collaborative par la communauté de SuiteCRM',
    'LBL_LANGUAGE_COMMUNITY_PACKS' => 'Traductions créées à l’aide de Crowdin',

    'LBL_ABOUT_SUITE_2' => 'SuiteCRM est publié sous une licence Open Source - GPL3',
    'LBL_ABOUT_SUITE_4' => 'Tout le code de SuiteCRM, géré et développé par ce projet, sera publié sous licence Open Source - GPL3',
    'LBL_ABOUT_SUITE_5' => 'L\'assistance sur SuiteCRM est disponible gratuitement ou par des options payantes',

    'LBL_SUITE_PARTNERS' => 'Nous avons des partenaires loyaux et passionnés d\'Open Source. Retrouvez la liste complète de ces partenaires sur notre site internet.',

    'LBL_SAVE_BUTTON' => 'Sauvegarder',
    'LBL_DELETE_BUTTON' => 'Supprimer',
    'LBL_APPLY_BUTTON' => 'Apply',
    'LBL_SEND_INVITES' => 'Enregistrer & envoyer des invitations',
    'LBL_CANCEL_BUTTON' => 'Annuler',
    'LBL_CLOSE_BUTTON' => 'Fermer',

    'LBL_CREATE_NEW_RECORD' => 'Create Activity',
    'LBL_CREATE_CALL' => 'Enregistrer un appel',
    'LBL_CREATE_MEETING' => 'Organiser une réunion',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'Récurrence',

    'LBL_REPEAT_TYPE' => 'Repeat',
    'LBL_REPEAT_INTERVAL' => 'Every',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'After',
    'LBL_REPEAT_OCCURRENCES' => 'récurrences',
    'LBL_REPEAT_END_BY' => 'By',
    'LBL_REPEAT_DOW' => 'On',
    'LBL_REPEAT_UNTIL' => 'Répéter jusqu&#39;à',
    'LBL_REPEAT_COUNT' => 'Nombre de récurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Your request was going to create more than $limit meetings.',

    //Events
    'LNK_EVENT' => 'Evènement',
    'LNK_EVENT_VIEW' => 'View Event',
    'LBL_DATE' => 'Date :',
    'LBL_DURATION' => 'Durée :',
    'LBL_NAME' => 'Titre : ',
    'LBL_HOUR_ABBREV' => 'hour',
    'LBL_HOURS_ABBREV' => 'heures',
    'LBL_MINSS_ABBREV' => 'minutes',
    'LBL_LOCATION' => 'Localisation :',
    'LBL_STATUS' => 'Status:',
    'LBL_DESCRIPTION' => 'Description : ',
    //End Events

    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_INVALID_REQUEST' => 'Erreur lors de la recherche. La syntaxe de votre requête est peut-être incorrecte.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH_ENGINE_NOT_FOUND' => 'Impossible de trouver le moteur de recherche. Essayez à nouveau.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_NO_NODES_AVAILABLE' => 'Impossible de se connecter au serveur Elasticsearch.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_SEARCH' => 'Erreur interne dans la recherche.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_DEFAULT' => 'Une erreur inconnue s’est produite lors de l’exécution de la recherche.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_END_MESSAGE' => 'Si le problème persiste, veuillez contacter un administrateur. De plus amples informations sont disponibles dans les logs.',
    'LBL_ELASTIC_SEARCH_EXCEPTION_MISSING_INDEX' => 'L\'index de recherche d\'un ou plusieurs modules n\'a pas pu être trouvé. Veuillez vous assurer que crontab est configuré et en cours d\'exécution, ouvrez la configuration d\'Elasticsearch et cliquez sur "Planifier l\'indexation complète", et envisagez de créer une tâche planifiée "Indexation Elasticsearch" si elle n\'existe pas.',

    'LBL_ELASTIC_SEARCH_DEFAULT' => 'Aucun résultat correspondant à vos critères. Essayez d\'élargir votre recherche.',

    // Portal Labels
    'LBL_AOP_DISABLED' => 'AOP is disabled, please enable via settings',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Failed to create portal user',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Failed to enable portal user',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Failed to disable portal user',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Created portal user',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Enabled portal user',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Disabled portal user',

    'LNK_TASK_VIEW' => 'View Task',
);
