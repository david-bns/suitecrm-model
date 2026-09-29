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

//the left value is the key stored in the db and the right value is ie display value
//to translate, only modify the right value in each key/value pair
$app_list_strings = array(
//e.g. auf Deutsch 'Contacts'=>'Contakten',
    'language_pack_name' => 'Français (France) - fr_FR',
    'moduleList' => array(
        'Home' => 'Accueil',
        'ResourceCalendar' => 'Calendrier des ressources',
        'Contacts' => 'Contacts',
        'Accounts' => 'Comptes',
        'Alerts' => 'Alertes',
        'Opportunities' => 'Affaires',
        'Cases' => 'Cases',
        'Notes' => 'Notes',
        'Calls' => 'Appels',
        'TemplateSectionLine' => 'Ligne de séparation de section',
        'Calls_Reschedule' => 'Replanifier les appels',
        'Emails' => 'E-mails',
        'EAPM' => 'EAPM',
        'Meetings' => 'Réunions',
        'Tasks' => 'Tâches',
        'Calendar' => 'Calendrier',
        'Leads' => 'Prospects',
        'Currencies' => 'Devises',
        'Activities' => 'Activités',
        'Bugs' => 'Anomalies',
        'Feeds' => 'Flux RSS',
        'iFrames' => 'Portail',
        'TimePeriods' => 'Périodes',
        'ContractTypes' => 'Types de contrat',
        'Schedulers' => 'Planificateurs',
        'Project' => 'Projets',
        'ProjectTask' => 'Tâches du Projet',
        'Campaigns' => 'Campagnes',
        'CampaignLog' => 'Logs des Campagnes',
        'Documents' => 'Documents',
        'DocumentRevisions' => 'Versions de Document',
        'Connectors' => 'Paramètres des Connecteurs',
        'Roles' => 'Rôles',
        'Notifications' => 'Notifications',
        'Sync' => 'Synchronisation',
        'CalendarAccount' => 'Calendar Accounts',
        'Users' => 'Utilisateurs',
        'Employees' => 'Employés',
        'Administration' => 'Administration',
        'ACLRoles' => 'Rôles',
        'InboundEmail' => 'Compte d\'E-mail entrant',
        'Releases' => 'Versions',
        'Prospects' => 'Cibles',
        'Queues' => 'Files d\'attente',
        'EmailMarketing' => 'E-mail marketing',
        'EmailTemplates' => 'Email - Modèles',
        'ProspectLists' => 'Cibles - Listes',
        'SavedSearch' => 'Recherches sauvegardées',
        'UpgradeWizard' => 'Assistant de mise à jour',
        'Trackers' => 'Tracker(s)',
        'TrackerSessions' => 'Suivi des sessions',
        'TrackerQueries' => 'Suivi des requêtes',
        'FAQ' => 'FAQ',
        'Newsletters' => 'Newsletters',
        'SugarFeed' => 'Flux activités internes',
        'SugarFavorites' => 'Favoris SuiteCRM',

        'OAuthKeys' => 'OAuth Clé Consommateur',
        'OAuthTokens' => 'Jetons OAuth',
        'OAuth2Clients' => 'Clients OAuth',
        'OAuth2Tokens' => 'OAuth Tokens',
        'OAuth2AuthCodes' => 'OAuth Authorization Codes',
    ),

    'moduleListSingular' => array(
        'Home' => 'Accueil',
        'Dashboard' => 'Tableau de bord',
        'Contacts' => 'Contact',
        'Accounts' => 'Compte',
        'Opportunities' => 'Affaires',
        'Cases' => 'Cas',
        'Notes' => 'Notes',
        'Calls' => 'Appel',
        'Emails' => 'E-mail',
        'EmailTemplates' => 'Modèle d\'E-mail',
        'Meetings' => 'Réunion',
        'Tasks' => 'Tâche',
        'Calendar' => 'Calendrier',
        'Leads' => 'Prospect',
        'Activities' => 'Activités',
        'History' => 'Historique',
        'Bugs' => 'Anomalie',
        'KBDocuments' => 'Base de connaissance',
        'Feeds' => 'Flux RSS',
        'iFrames' => 'Mes sites',
        'TimePeriods' => 'Périodes',
        'Project' => 'Projet',
        'ProjectTask' => 'Tâches projet',
        'Prospects' => 'Cible',
        'Campaigns' => 'Campagne',
        'Documents' => 'Document',
        'Sync' => 'Synchronisation',
        'Users' => 'Utilisateur',
        'SugarFavorites' => 'Favoris SuiteCRM',

    ),

    'checkbox_dom' => array(
        '' => '',
        '1' => 'Oui',
        '2' => 'Non',
    ),

    //e.g. en français 'Analyst'=>'Analyste',
    'account_type_dom' => array(
        '' => '',
        'Analyst' => 'Analyst',
        'Competitor' => 'Competitor',
        'Customer' => 'Customer',
        'Integrator' => 'Integrator',
        'Investor' => 'Investor',
        'Partner' => 'Partner',
        'Press' => 'Press',
        'Prospect' => 'Prospect',
        'Reseller' => 'Reseller',
        'Other' => 'Autre',
    ),
    //e.g. en español 'Apparel'=>'Ropa',
    'industry_dom' => array(
        '' => '',
        'Apparel' => 'Textile',
        'Banking' => 'Banque',
        'Biotechnology' => 'Biotechnologie',
        'Chemicals' => 'Industrie chimique',
        'Communications' => 'Communication',
        'Construction' => 'Construction - BTP',
        'Consulting' => 'Conseil',
        'Education' => 'Formation',
        'Electronics' => 'Informatique - Electronique',
        'Energy' => 'Énergie',
        'Engineering' => 'Ingénierie',
        'Entertainment' => 'Culture-Loisirs',
        'Environmental' => 'Environnement',
        'Finance' => 'Finance',
        'Government' => 'Administration',
        'Healthcare' => 'Santé',
        'Hospitality' => 'Accueil',
        'Insurance' => 'Assurances',
        'Machinery' => 'Industrie lourde',
        'Manufacturing' => 'Production',
        'Media' => 'Média',
        'Not For Profit' => 'Sans but lucratif',
        'Recreation' => 'Loisir',
        'Retail' => 'Commerce de détail',
        'Shipping' => 'Transport',
        'Technology' => 'Technologie',
        'Telecommunications' => 'Télécommunications',
        'Transportation' => 'Transports',
        'Utilities' => 'Services',
        'Other' => 'Autre',
    ),
    'lead_source_default_key' => 'Auto-généré',
    'lead_source_dom' => array(
        '' => '',
        'Cold Call' => 'Appel de prospection',
        'Existing Customer' => 'Client existant',
        'Self Generated' => 'Auto-généré',
        'Employee' => 'Employé',
        'Partner' => 'Partner',
        'Public Relations' => 'Relation publique',
        'Direct Mail' => 'Mailing',
        'Conference' => 'Conférence',
        'Trade Show' => 'Salon',
        'Web Site' => 'Site web',
        'Word of mouth' => 'Recommandé',
        'Email' => 'Adresse E-mail',
        'Campaign' => 'Campagne',
        'Other' => 'Autre',
    ),
    'opportunity_type_dom' => array(
        '' => '',
        'Existing Business' => 'Existing Business',
        'New Business' => 'New Business',
    ),
    'roi_type_dom' => array(
        'Revenue' => 'Revenu',
        'Investment' => 'Investissement',
        'Expected_Revenue' => 'Recettes attendues',
        'Budget' => 'Budget',

    ),
    'subpanel_pagination_type' => [
        'pagination' => 'Pagination',
        'load-more' => 'Charger plus'
    ],
    'listview_pagination_type' => [
        'pagination' => 'Pagination',
        'load-more' => 'Charger plus'
    ],
    'record_modal_pagination_type' => [
        'pagination' => 'Pagination',
        'load-more' => 'Charger plus'
    ],
    //Note:  do not translate opportunity_relationship_type_default_key
//       it is the key for the default opportunity_relationship_type_dom value
    'opportunity_relationship_type_default_key' => 'Décideur Principal',
    'opportunity_relationship_type_dom' => array(
        '' => '',
        'Primary Decision Maker' => 'Décideur principal',
        'Business Decision Maker' => 'Acheteur',
        'Business Evaluator' => 'Chef de projet',
        'Technical Decision Maker' => 'Responsable technique',
        'Technical Evaluator' => 'Utilisateur',
        'Executive Sponsor' => 'Sponsor',
        'Influencer' => 'Influenceur',
        'Other' => 'Autre',
    ),
    //Note:  do not translate case_relationship_type_default_key
//       it is the key for the default case_relationship_type_dom value
    'case_relationship_type_default_key' => 'Contact principal',
    'case_relationship_type_dom' => array(
        '' => '',
        'Primary Contact' => 'Contact principal',
        'Alternate Contact' => 'Autre contact',
    ),
    'payment_terms' => array(
        '' => '',
        'Net 15' => '15 jours net',
        'Net 30' => '30 jours net',
    ),
    'sales_stage_default_key' => 'Prospection',
    'sales_stage_dom' => array(
        'Prospecting' => 'Prospection',
        'Qualification' => 'Qualification',
        'Needs Analysis' => 'Analyse des besoins',
        'Value Proposition' => 'Chiffrage',
        'Id. Decision Makers' => 'Identifier les décideurs',
        'Perception Analysis' => 'Evaluation',
        'Proposal/Price Quote' => 'Devis / Proposition',
        'Negotiation/Review' => 'Négociation',
        'Closed Won' => 'Gagné',
        'Closed Lost' => 'Perdu',
    ),
    'sales_probability_dom' => // keys must be the same as sales_stage_dom
        array(
            'Prospecting' => '10',
            'Qualification' => '20',
            'Needs Analysis' => '25',
            'Value Proposition' => '30',
            'Id. Decision Makers' => '40',
            'Perception Analysis' => '50',
            'Proposal/Price Quote' => '65',
            'Negotiation/Review' => '80',
            'Closed Won' => '100',
            'Closed Lost' => '0',
        ),
    'activity_dom' => array(
        'Call' => 'Appel',
        'Meeting' => 'Réunion',
        'Task' => 'Tâches',
        'Email' => 'Adresse E-mail',
        'Note' => 'Note',
    ),
    'salutation_dom' => array(
        '' => '',
        'Mr.' => 'Monsieur',
        'Ms.' => 'Mme',
        'Mrs.' => 'Madame',
        'Miss' => 'Mlle',
        'Dr.' => 'Docteur',
        'Prof.' => 'Professeur',
    ),

    'redirect_uri_type_dom' => [
        'pretty_url' => 'Pretty URL (/ep/)',
        'query_string' => 'Query String (index.php?entryPoint=)'
    ],

    //time is in seconds; the greater the time the longer it takes;
    'reminder_max_time' => 90000,
    'reminder_time_options' => array(
        60 => '1 minute avant',
        300 => '5 minutes avant',
        600 => '10 minutes avant',
        900 => '15 minutes avant',
        1800 => '30 minutes avant',
        3600 => '1 heure avant',
        7200 => '2 heures avant',
        10800 => '3 heures avant',
        18000 => '5 heures avant',
        86400 => '1 jour avant',
    ),

    // snooze for alerts
    'snooze_alert_timer' => array(
        60 => 'Répéter dans 1 minute',
        300 => 'Répéter dans 5 minutes',
        600 => 'Répéter dans 10 minutes',
        900 => 'Répéter dans 15 minutes',
        1800 => 'Répéter dans 30 minutes',
        3600 => 'Répéter dans 1 heure',
        7200 => 'Répéter dans 2 heures',
        10800 => 'Répéter dans 3 heures',
        18000 => 'Répéter dans 5 heures',
        86400 => 'Répéter dans 1 jour',
    ),

    'snooze_alert_timer_simple' => array(
        60 => '1 min',
        300 => '5 mins',
        600 => '10 mins',
        900 => '15 mins',
        1800 => '30 mins',
        3600 => '1 hour',
        7200 => '2 hours',
        10800 => '3 hours',
        18000 => '5 heures',
        86400 => '1 day',
    ),

    'task_priority_default' => 'Medium',
    'task_priority_dom' => array(
        'High' => 'High',
        'Medium' => 'Medium',
        'Low' => 'Low',
    ),
    'task_status_default' => 'Non démarré',
    'task_status_dom' => array(
        'Not Started' => 'Non démarré',
        'In Progress' => 'En traitement',
        'Completed' => 'Réalisée',
        'Pending Input' => 'Pending Input',
        'Deferred' => 'Reportée',
    ),
    'meeting_status_default' => 'Planifié',
    'meeting_status_dom' => array(
        'Planned' => 'Planifiée',
        'Held' => 'Tenue',
        'Not Held' => 'Annulée',
    ),
    'extapi_meeting_password' => array(
        'WebEx' => 'WebEx',
    ),
    'meeting_type_dom' => array(
        'Other' => 'Autre',
        'Sugar' => 'SuiteCRM',
    ),
    'call_status_default' => 'Planifiée',
    'call_status_dom' => array(
        'Planned' => 'Planifiée',
        'Held' => 'Tenue',
        'Not Held' => 'Annulée',
    ),
    'call_direction_default' => 'Sortant',
    'call_direction_dom' => array(
        'Inbound' => 'Entrant',
        'Outbound' => 'Sortant',
    ),
    'lead_status_dom' => array(
        '' => '',
        'New' => 'New',
        'Assigned' => 'Attribué',
        'In Process' => 'En cours',
        'Converted' => 'Converti',
        'Recycled' => 'Réactivé',
        'Dead' => 'Mort',
    ),
    'case_priority_default_key' => 'P2',
    'case_priority_dom' => array(
        'P1' => 'High',
        'P2' => 'Medium',
        'P3' => 'Low',
    ),
    'user_type_dom' => array(
        'RegularUser' => 'Utilisateur normal',
        'Administrator' => 'Administrateur',
    ),
    'user_status_dom' => array(
        'Active' => 'Activé',
        'Inactive' => 'Désactivé',
    ),
    'user_factor_auth_interface_dom' => array(
        'FactorAuthEmailCode' => 'Code par E-mail',
    ),
    'employee_status_dom' => array(
        'Active' => 'Activé',
        'Terminated' => 'Inactif',
        'Leave of Absence' => 'Absence temporaire',
    ),
    'messenger_type_dom' => array(
        '' => '',
        'MSN' => 'MSN',
        'Yahoo!' => 'Yahoo!',
        'AOL' => 'AOL',
    ),
    'project_task_priority_options' => array(
        'High' => 'High',
        'Medium' => 'Medium',
        'Low' => 'Low',
    ),
    'project_task_priority_default' => 'Medium',

    'project_task_status_options' => array(
        'Not Started' => 'Non démarré',
        'In Progress' => 'En cours',
        'Completed' => 'Réalisée',
        'Pending Input' => 'Pending Input',
        'Deferred' => 'Reportée',
    ),
    'project_task_utilization_options' => array(
        '0' => 'aucun',
        '25' => '25',
        '50' => '50',
        '75' => '75',
        '100' => '100',
    ),

    'project_status_dom' => array(
        'Draft' => 'Brouillon',
        'In Review' => 'En relecture',
        'Underway' => 'En cours',
        'On_Hold' => 'Suspendu',
        'Completed' => 'Réalisée',
    ),
    'project_status_default' => 'Brouillon',

    'project_duration_units_dom' => array(
        'Days' => 'Jour(s)',
        'Hours' => 'Heure(s)',
    ),

    'activity_status_type_dom' => array(
        '' => '--Aucun(e)--',
        'active' => 'Activé',
        'inactive' => 'Inactif',
    ),

    // Note:  do not translate record_type_default_key
    //        it is the key for the default record_type_module value
    'record_type_default_key' => 'Comptes',
    'record_type_display' => array(
        '' => '',
        'Accounts' => 'Compte',
        'Opportunities' => 'Opportunity',
        'Cases' => 'Ticket',
        'Leads' => 'Lead',
        'Contacts' => 'Contact', // cn (11/22/2005) added to support Emails

        'Bugs' => 'Anomalie',
        'Project' => 'Project',

        'Prospects' => 'Cible',
        'ProjectTask' => 'Project Task',

        'Tasks' => 'Tâche',

        'AOS_Contracts' => 'Contrat',
        'AOS_Invoices' => 'Facture',
        'AOS_Quotes' => 'Devis',
        'AOS_Products' => 'Produit',

    ),

    'record_type_display_notes' => array(
        'Accounts' => 'Compte',
        'Contacts' => 'Contact',
        'Opportunities' => 'Opportunity',
        'Campaigns' => 'Campagne',
        'Tasks' => 'Tâche',
        'Emails' => 'Adresse E-mail',

        'Bugs' => 'Anomalie',
        'Project' => 'Project',
        'ProjectTask' => 'Project Task',
        'Prospects' => 'Cible',
        'Cases' => 'Ticket',
        'Leads' => 'Lead',

        'Meetings' => 'Réunion',
        'Calls' => 'Appel',

        'AOS_Contracts' => 'Contract',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Quote',
        'AOS_Products' => 'Produit',
    ),

    'parent_type_display' => array(
        'Accounts' => 'Compte',
        'Contacts' => 'Contact',
        'Tasks' => 'Tâche',
        'Opportunities' => 'Opportunity',

        'Bugs' => 'Bug',
        'Cases' => 'Ticket',
        'Leads' => 'Lead',

        'Project' => 'Project',
        'ProjectTask' => 'Project Task',

        'Prospects' => 'Cible',

        'AOS_Contracts' => 'Contract',
        'AOS_Invoices' => 'Invoice',
        'AOS_Quotes' => 'Quote',
        'AOS_Products' => 'Produit',

    ),
    'parent_line_items' => array(
        'AOS_Quotes' => 'Devis',
        'AOS_Invoices' => 'Factures',
        'AOS_Contracts' => 'Contrats',
    ),
    'issue_priority_default_key' => 'Medium',
    'issue_priority_dom' => array(
        'Urgent' => 'Urgent',
        'High' => 'High',
        'Medium' => 'Medium',
        'Low' => 'Low',
    ),
    'issue_resolution_default_key' => '',
    'issue_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Accepted',
        'Duplicate' => 'Dupliquer',
        'Closed' => 'Closed',
        'Out of Date' => 'Périmé',
        'Invalid' => 'Invalid',
    ),

    'issue_status_default_key' => 'New',
    'issue_status_dom' => array(
        'New' => 'New',
        'Assigned' => 'Attribué',
        'Closed' => 'Closed',
        'Pending' => 'Pending',
        'Rejected' => 'Rejected',
    ),

    'bug_priority_default_key' => 'Medium',
    'bug_priority_dom' => array(
        'Urgent' => 'Urgent',
        'High' => 'High',
        'Medium' => 'Medium',
        'Low' => 'Low',
    ),
    'bug_resolution_default_key' => '',
    'bug_resolution_dom' => array(
        '' => '',
        'Accepted' => 'Accepted',
        'Duplicate' => 'Doublon',
        'Fixed' => 'Fixé',
        'Out of Date' => 'Périmé',
        'Invalid' => 'Invalid',
        'Later' => 'Reporté',
    ),
    'bug_status_default_key' => 'New',
    'bug_status_dom' => array(
        'New' => 'New',
        'Assigned' => 'Attribué',
        'Closed' => 'Closed',
        'Pending' => 'Pending',
        'Rejected' => 'Rejected',
    ),
    'bug_type_default_key' => 'Suivi bugs',
    'bug_type_dom' => array(
        'Defect' => 'Défaut',
        'Feature' => 'Fonctionnalité',
    ),
    'case_type_dom' => array(
        'Administration' => 'Administration',
        'Product' => 'Produit',
        'User' => 'Utilisateur',
    ),

    'source_default_key' => '',
    'source_dom' => array(
        '' => '',
        'Internal' => 'Interne',
        'Forum' => 'Forum',
        'Web' => 'Web',
        'InboundEmail' => 'Adresse E-mail',
    ),

    'file_field_storage_type_dom' => [
        'private-documents' => 'Private Documents',
        'public-documents' => 'Public Documents',
        'archived-documents' => 'Archived Documents',
    ],


    'image_field_storage_type_dom' => [
        'private-images' => 'Private Images',
        'public-images' => 'Public Images',
    ],

    'product_category_default_key' => '',
    'product_category_dom' => array(
        '' => '',
        'Accounts' => 'Comptes',
        'Activities' => 'Activités',
        'Bugs' => 'Anomalies',
        'Calendar' => 'Calendrier',
        'Calls' => 'Appels',
        'Campaigns' => 'Campagnes',
        'Cases' => 'Tickets',
        'Contacts' => 'Contacts',
        'Currencies' => 'Devises',
        'Dashboard' => 'Tableau de bord',
        'Documents' => 'Documents',
        'Emails' => 'E-mails',
        'Feeds' => 'Flux',
        'Forecasts' => 'Prévisions',
        'Help' => 'Aide',
        'Home' => 'Accueil',
        'Leads' => 'Prospects',
        'Meetings' => 'Réunions',
        'Notes' => 'Notes',
        'Opportunities' => 'Affaires',
        'Outlook Plugin' => 'Plugin Outlook',
        'Projects' => 'Projets',
        'Quotes' => 'Devis',
        'Releases' => 'Versions',
        'RSS' => 'Flux RSS',
        'Studio' => 'Studio',
        'Upgrade' => 'Mise à Jour',
        'Users' => 'Utilisateurs',
    ),
    /*Added entries 'Queued' and 'Sending' for 4.0 release..*/
    'campaign_status_dom' => array(
        'Planning' => 'Planifiée',
        'Active' => 'Actif',
        'Inactive' => 'Désactivé',
        'Complete' => 'Terminé',
        //'In Queue' => 'In Queue',
        //'Sending' => 'Sending',
    ),
    'campaign_type_dom' => array(
        '' => '',
        'Telesales' => 'Téléprospection',
        'Mail' => 'Courrier',
        'Email' => 'Adresse E-mail',
        'Print' => 'Imprimer',
        'Web' => 'Web',
        'Radio' => 'Bouton Radio',
        'Television' => 'Télévision',
        'NewsLetter' => 'Newsletter',
        'Survey' => 'Sondage',
    ),

    'newsletter_frequency_dom' => array(
        '' => '',
        'Weekly' => 'Hebdomadaire',
        'Monthly' => 'Mensuel',
        'Quarterly' => 'Trimestrielle',
        'Annually' => 'Annuelle',
    ),

    'notifymail_sendtype' => array(
        'SMTP' => 'SMTP',
    ),
    'dom_cal_month_long' => array(
        '0' => '',
        '1' => 'Janvier',
        '2' => 'Février',
        '3' => 'Mars',
        '4' => 'Avril',
        '5' => 'Mai',
        '6' => 'Juin',
        '7' => 'Juillet',
        '8' => 'Août',
        '9' => 'Septembre',
        '10' => 'Octobre',
        '11' => 'Novembre',
        '12' => 'Décembre',
    ),
    'dom_cal_month_short' => array(
        '0' => '',
        '1' => 'Jan',
        '2' => 'Fév',
        '3' => 'Mars',
        '4' => 'Avr',
        '5' => 'May',
        '6' => 'Juin',
        '7' => 'Juil',
        '8' => 'Août',
        '9' => 'Sept',
        '10' => 'Oct',
        '11' => 'Nov',
        '12' => 'Déc',
    ),
    'dom_cal_day_long' => array(
        '0' => '',
        '1' => 'Le dimanche',
        '2' => 'Le lundi',
        '3' => 'Le mardi',
        '4' => 'Le mercredi',
        '5' => 'Le jeudi',
        '6' => 'Le vendredi',
        '7' => 'Le samedi',
    ),
    'dom_cal_day_short' => array(
        '0' => '',
        '1' => 'Dim',
        '2' => 'Lun',
        '3' => 'Mar',
        '4' => 'Mer',
        '5' => 'Jeu',
        '6' => 'Ven',
        '7' => 'Sam',
    ),
    'dom_meridiem_lowercase' => array(
        'am' => 'am',
        'pm' => 'pm',
    ),
    'dom_meridiem_uppercase' => array(
        'AM' => 'AM',
        'PM' => 'PM',
    ),

    'dom_inbound_email_account_types' => [
        'personal' => 'Personnel',
        'group' => 'Groupe',
        'bounce' => 'Non remis',
    ],

    'dom_inbound_email_auth_types' => [
        'basic' => 'Authentification basique',
        'oauth' => 'OAuth',
    ],

    'dom_outbound_email_auth_types' => [
        'no_auth' => 'No Auth',
        'basic' => 'Authentification basique',
        'oauth' => 'OAuth',
    ],

    'dom_external_oauth_connection_types' => [
        'personal' => 'Personal',
        'group' => 'Group',
    ],

    'dom_external_oauth_provider_types' => [
        'personal' => 'Personal',
        'group' => 'Group',
    ],

    'dom_manual_migration_tasks_types' => [
        'background' => 'Background Process',
        'immediate' => 'Immediate',
    ],

    'dom_manual_migration_tasks_statuses' => [
        'initial' => 'Initial',
        'pending' => 'Pending',
        'running' => 'Running',
        'failed' => 'Failed',
        'completed_with_failures' => 'Completed With Failures',
        'completed' => 'Réalisée'
    ],

    'dom_processes_types' => [
        'background' => 'Background Process',
        'immediate' => 'Immediate',
    ],

    'dom_processes_statuses' => [
        'initial' => 'Initial',
        'pending' => 'Pending',
        'running' => 'Running',
        'failed' => 'Failed',
        'completed_with_failures' => 'Completed With Failures',
        'completed' => 'Réalisée'
    ],

    'dom_async_task_phases' => [
        '' => '',
        'queueing' => 'Queueing',
        'processing' => 'Processing',
        'finalizing' => 'Finalizing',
        'completed' => 'Réalisée',
    ],

    'dom_outbound_email_account_types' => [
        'user' => 'Personal',
        'group' => 'Group',
        'system' => 'Administration du système',
        'system-override' => 'Remplacer le système',
    ],

    'dom_inbound_email_account_status' => [
        'Active' => 'Activé',
        'Inactive' => 'Désactivé',
    ],

    'dom_email_body_filtering_option' => [
      'multi' => 'Recherche multi-mots',
      'single' => 'Recherche par mot unique',
    ],

    'dom_email_types' => array(
        'out' => 'Envoyé',
        'archived' => 'Archivé',
        'draft' => 'Brouillon',
        'inbound' => 'Inbound',
        'campaign' => 'Campagne',
    ),
    'dom_email_status' => array(
        'archived' => 'Archived',
        'closed' => 'Closed',
        'draft' => 'Brouillon',
        'read' => 'Lu',
        'replied' => 'Répondu',
        'sent' => 'Sent',
        'send_error' => 'Erreurs d&#39;envoi',
        'unread' => 'Non Lu',
    ),
    'dom_email_archived_status' => array(
        'archived' => 'Archived',
    ),

    'dom_email_server_type' => array(
        '' => '--None--',
        'imap' => 'IMAP',
    ),
    'dom_mailbox_type' => array(/*''           => '--None Specified--',*/
        'pick' => '--None--',
        'createcase' => 'Créer un cas',
        'bounce' => 'Gestion des Rebonds',
    ),
    'dom_email_distribution' => array(
        '' => '--None--',
        'direct' => 'Assignation directe',
        'roundRobin' => 'Round-Robin',
        'leastBusy' => 'Moins chargé',
    ),
    'dom_email_errors' => array(
        1 => 'Ne sélectionner qu’un seul utilisateur lors de l’affectation directe des éléments.',
        2 => 'Vous devez affecter uniquement des éléments contrôlés lors de l’affectation directe des éléments.',
    ),
    'dom_email_bool' => array(
        'bool_true' => 'Yes',
        'bool_false' => 'Non',
    ),
    'dom_int_bool' => array(
        1 => 'Yes',
        0 => 'Non',
    ),
    'dom_int_bool_string' => array(
        '1' => 'Yes',
        '0' => 'Non',
    ),
    'dom_switch_bool' => array(
        'on' => 'Yes',
        'off' => 'Non',
        '' => 'Non',
    ),

    'dom_email_link_type' => array(
        'sugar' => 'Client de messagerie SuiteCRM',
        'mailto' => 'Client E-mail Externe',
    ),

    'dom_editor_type' => array(
        'none' => 'Direct HTML',
        'tinymce' => 'TinyMCE',
    ),

    'dom_email_editor_option' => array(
        '' => 'Format d\'E-mail par défaut',
        'html' => 'E-mail HTML',
        'plain' => 'E-mail Texte Brut',
    ),

    'schedulers_times_dom' => array(
        'not run' => 'Temps d&#39;execution dépassé, Non Executé',
        'ready' => 'Prêt',
        'in progress' => 'En cours',
        'failed' => 'Echec',
        'completed' => 'Réalisée',
        'no curl' => 'Non exécuté : cURL non disponible',
    ),

    'scheduler_status_dom' => array(
        'Active' => 'Activé',
        'Inactive' => 'Désactivé',
    ),

    'scheduler_period_dom' => array(
        'min' => 'Minute(s)',
        'hour' => 'Hours',
    ),
    'document_category_dom' => array(
        '' => '',
        'Marketing' => 'Marketing',
        'Knowledege Base' => 'Base de connaissances',
        'Sales' => 'Sales',
    ),

    'email_category_dom' => array(
        '' => '',
        'Archived' => 'Archived',
        // TODO: add more categories here...
    ),

    'document_subcategory_dom' => array(
        '' => '',
        'Marketing Collateral' => 'Marketing Collateral',
        'Product Brochures' => 'Product Brochures',
        'FAQ' => 'FAQ',
    ),

    'document_status_dom' => array(
        'Active' => 'Activé',
        'Draft' => 'Brouillon',
        'FAQ' => 'FAQ',
        'Expired' => 'Expired',
        'Under Review' => 'Under Review',
        'Pending' => 'Pending',
    ),
    'document_template_type_dom' => array(
        '' => '',
        'mailmerge' => 'Fusion d\'E-mails',
        'eula' => 'Licence d\'utilisation',
        'nda' => 'Accord de confidentialité',
        'license' => 'Termes de Licence',
    ),
    'dom_meeting_accept_options' => array(
        'accept' => 'Accepter',
        'decline' => 'Décliner',
        'tentative' => 'Incertain',
    ),
    'dom_meeting_accept_status' => array(
        'accept' => 'Accepted',
        'decline' => 'Refusé',
        'tentative' => 'Tentative',
        'none' => 'Aucun',
    ),
    'duration_intervals' => array(
        '0' => '00',
        '15' => '15',
        '30' => '30',
        '45' => '45',
    ),
    'repeat_type_dom' => array(
        '' => 'Aucun',
        'Daily' => 'Quotidien',
        'Weekly' => 'Weekly',
        'Monthly' => 'Mensuel',
        'Yearly' => 'Annuel',
    ),

    'repeat_intervals' => array(
        '' => '',
        'Daily' => 'jour(s)',
        'Weekly' => 'semaine(s)',
        'Monthly' => 'mois',
        'Yearly' => 'année(s)',
    ),

    'duration_dom' => array(
        '' => 'Aucun',
        '900' => '15 minutes',
        '1800' => '30 minutes',
        '2700' => '45 minutes',
        '3600' => '1 heure',
        '5400' => '1.5 heures',
        '7200' => '2 heures',
        '10800' => '3 heures',
        '21600' => '6 heures',
        '86400' => '1 jour',
        '172800' => '2 jours',
        '259200' => '3 jours',
        '604800' => '1 semaine',
    ),


//prospect list type dom
    'prospect_list_type_dom' => array(
        'default' => 'Par défaut',
        'seed' => 'Financement',
        'exempt_domain' => 'Liste d\'exclusion par domaine',
        'exempt_address' => 'Liste d\'exclusion par adresses E-mails',
        'exempt' => 'Liste d\'exclusion par ID',
        'test' => 'Test',
    ),

    'email_settings_num_dom' => array(
        '10' => '10',
        '20' => '20',
        '50' => '50',
    ),
    'email_marketing_status_dom' => array(
        '' => '',
        'active' => 'Activé',
        'draft' => 'Brouillon',
        'scheduled' => 'Scheduled',
        'pending_send' => 'Pending Send',
        'aborted' => 'Aborted',
        'sending' => 'Sending',
        'sent' => 'Sent',
        'paused' => 'Paused',
    ),
    'email_marketing_duplicate_dom' => [
        'email' => 'Prevent sending to duplicate records and email addresses',
        'record' => 'Prevent sending to duplicate records',
    ],
    'email_marketing_queueing_status_dom' => array(
        'not_started' => 'Non démarré',
        'in_progress' => 'En cours',
        'finished' => 'Finished',
    ),
    'email_marketing_type_dom' => array(
        'legacy' => 'Legacy',
        'marketing' => 'Marketing',
        'survey' => 'Sondage',
        'transactional' => 'Transactional',
    ),

    'campainglog_activity_type_dom' => array(
        '' => '',
        'targeted' => 'Sent/Attempted',
        'send error' => 'Rebonds, Autres',
        'invalid email' => 'Rebonds, E-mails invalides',
        'link' => 'Liens cliqués',
        'viewed' => 'Messages lus',
        'removed' => 'Désinscription',
        'lead' => 'Prospects créés',
        'contact' => 'Contacts créés',
        'blocked' => 'Supprimés par adresse ou domaine',
        'Survey' => 'Réponse au sondage',
    ),

    'campainglog_target_type_dom' => array(
        'Contacts' => 'Contacts',
        'Users' => 'Utilisateurs',
        'Prospects' => 'Cibles',
        'Leads' => 'Prospects',
        'Accounts' => 'Comptes',
    ),
    'merge_operators_dom' => array(
        'like' => 'contient',
        'exact' => 'est exactement',
        'start' => 'commence par',
    ),

    'custom_fields_importable_dom' => array(
        'true' => 'Yes',
        'false' => 'Non',
        'required' => 'Requis',
    ),

    'custom_fields_merge_dup_dom' => array(
        0 => 'Désactivé',
        1 => 'Activé',
        2 => 'Filtre',
        3 => 'Filtre sélectionné par défaut',
        4 => 'Filtre uniquement',
    ),

    'projects_priority_options' => array(
        'high' => 'High',
        'medium' => 'Medium',
        'low' => 'Low',
    ),

    'projects_status_options' => array(
        'notstarted' => 'Non démarré',
        'inprogress' => 'En cours',
        'completed' => 'Réalisée',
    ),
    // strings to pass to Flash charts
    'chart_strings' => array(
        'expandlegend' => 'Afficher la légende',
        'collapselegend' => 'Cacher la légende',
        'clickfordrilldown' => 'Cliquer pour développer',
        'detailview' => 'Plus de détails...',
        'piechart' => 'Graphique en camembert',
        'groupchart' => 'Groupe de graphique',
        'stackedchart' => 'Graphique empilé',
        'barchart' => 'Histogramme',
        'horizontalbarchart' => 'Diagramme horizontal',
        'linechart' => 'Graphique courbe',
        'noData' => 'Donnée non disponible',
        'print' => 'Print',
        'pieWedgeName' => 'sections',
    ),
    'release_status_dom' => array(
        'Active' => 'Activé',
        'Inactive' => 'Désactivé',
    ),
    'email_settings_for_ssl' => array(
        '0' => '',
        '1' => 'SSL',
        '2' => 'TLS',
    ),
    'import_enclosure_options' => array(
        '\'' => 'Apostrophe (&#39;)',
        '"' => 'Guillemet double (&#34;)',
        '' => 'Aucun',
        'other' => 'Autre :',
    ),
    'import_delimeter_options' => array(
        ',' => ',',
        ';' => ';',
        '\t' => '\t',
        '.' => '.',
        ':' => ':',
        '|' => '|',
        'other' => 'Autre :',
    ),
    'link_target_dom' => array(
        '_blank' => 'Nouvelle fenêtre',
        '_self' => 'Fenêtre courante',
    ),
    'dashlet_auto_refresh_options' => array(
        '-1' => '-1',
        '30' => 'Toutes les 30 secondes',
        '60' => 'Toutes les minutes',
        '180' => 'Toutes les 3 minutes',
        '300' => 'Toutes les 5 minutes',
        '600' => 'Toutes les 10 minutes',
    ),
    'dashlet_auto_refresh_options_admin' => array(
        '-1' => 'Jamais',
        '30' => 'Every 30 seconds',
        '60' => 'Every 1 minute',
        '180' => 'Every 3 minutes',
        '300' => 'Every 5 minutes',
        '600' => 'Every 10 minutes',
    ),
    'date_range_search_dom' => array(
        '=' => 'Le',
        'not_equal' => 'Différent du',
        'greater_than' => 'Après',
        'less_than' => 'Avant le',
        'last_7_days' => 'Dans les 7 derniers jours',
        'next_7_days' => 'Dans les 7 prochains jours',
        'last_30_days' => 'Dans les 30 derniers jours',
        'next_30_days' => 'Dans les 30 prochains jours',
        'last_month' => 'Le mois dernier',
        'this_month' => 'Ce Mois-ci',
        'next_month' => 'Mois Suivant',
        'last_year' => 'L&#39;année dernière',
        'this_year' => 'Cette Année',
        'next_year' => 'Année Suivante',
        'between' => 'Entre',
    ),
    'numeric_range_search_dom' => array(
        '=' => 'Equals',
        'not_equal' => 'Différent de',
        'greater_than' => 'Supérieur à',
        'greater_than_equals' => 'Supérieur ou égal à',
        'less_than' => 'Inférieur à',
        'less_than_equals' => 'Inférieur ou égal à',
        'between' => 'Is Between',
    ),
    'lead_conv_activity_opt' => array(
        'copy' => 'Copier',
        'move' => 'Déplacer',
        'donothing' => 'Ne rien faire',
    ),
);

$app_strings = array(
    'LBL_SEARCH_RESULTS_TITLE' => 'Résultats',
    'ERR_SEARCH_INVALID_QUERY' => 'Erreur lors de la recherche. La syntaxe de votre requête est peut-être incorrecte.',
    'ERR_SEARCH_NO_RESULTS' => 'Aucun résultat correspondant à vos critères. Essayez d\'élargir votre recherche.',
    'LBL_SEARCH_PERFORMED_IN' => 'Recherche effectuée en',
    'LBL_EMAIL_CODE' => 'Code par E-mail :',
    'LBL_SEND' => 'Envoyer',
    'LBL_SEND_BUTTON_TITLE' => 'Send',
    'LBL_LOGOUT' => 'Déconnexion',
    'LBL_LOGOUT_SUCCESS' => 'Déconnexion réussie',
    'LBL_LOGGED_OUT_MESSAGE' => 'Vous avez été déconnecté',
    'LBL_LOGIN_AGAIN' => 'Pour vous reconnecter ',
    'LBL_TOUR_NEXT' => 'Suivant',
    'LBL_TOUR_SKIP' => 'Passer',
    'LBL_TOUR_BACK' => 'Précédent',
    'LBL_TOUR_TAKE_TOUR' => 'Faire le tour',
    'LBL_MOREDETAIL' => 'Plus de détails', /*for 508 compliance fix*/
    'LBL_EDIT_INLINE' => 'Editer à la volée', /*for 508 compliance fix*/
    'LBL_VIEW_INLINE' => 'Vue', /*for 508 compliance fix*/
    'LBL_BASIC_SEARCH' => 'Filter', /*for 508 compliance fix*/
    'LBL_Blank' => ' ', /*for 508 compliance fix*/
    'LBL_ID_FF_ADD' => 'Ajouter', /*for 508 compliance fix*/
    'LBL_ID_FF_ADD_EMAIL' => 'Ajouter une adresse E-mail', /*for 508 compliance fix*/
    'LBL_HIDE_SHOW' => 'Masquer/Afficher', /*for 508 compliance fix*/
    'LBL_DELETE_INLINE' => 'Supprimer', /*for 508 compliance fix*/
    'LBL_ID_FF_CLEAR' => 'Vider', /*for 508 compliance fix*/
    'LBL_ID_FF_VCARD' => 'vCard', /*for 508 compliance fix*/
    'LBL_ID_FF_REMOVE' => 'Supprimer', /*for 508 compliance fix*/
    'LBL_ID_FF_REMOVE_EMAIL' => 'Supprimer l’adresse E-mail', /*for 508 compliance fix*/
    'LBL_ID_FF_OPT_OUT' => 'Désinscription',
    'LBL_ID_FF_INVALID' => 'Rendre non-valide',
    'LBL_ADD' => 'Ajouter', /*for 508 compliance fix*/
    'LBL_COMPANY_LOGO' => 'Logo société', /*for 508 compliance fix*/
    'LBL_CONNECTORS_POPUPS' => 'Popups des connecteurs',
    'LBL_CLOSEINLINE' => 'Fermer',
    'LBL_VIEWINLINE' => 'Vue',
    'LBL_INFOINLINE' => 'Info',
    'LBL_PRINT' => 'Print',
    'LBL_HELP' => 'Aide',
    'LBL_ID_FF_SELECT' => 'Sélectionner',
    'DEFAULT' => 'Basique',
    'LBL_SORT' => 'Tri',
    'LBL_EMAIL_SMTP_SSL_OR_TLS' => 'Activer SMTP au travers de SSL ou TLS ?',
    'LBL_NO_ACTION' => 'Aucune action avec ce nom : %s',
    'LBL_NO_SHORTCUT_MENU' => 'Aucune action n’est disponible.',
    'LBL_NO_DATA' => 'Aucune donnée',

    'LBL_ROUTING_FLAGGED' => 'Ajouter un drapeau',
    'LBL_ROUTING_TO' => 'de',
    'LBL_ROUTING_TO_ADDRESS' => 'à l&#39;adresse',
    'LBL_ROUTING_WITH_TEMPLATE' => 'avec le modèle',

    'NTC_OVERWRITE_ADDRESS_PHONE_CONFIRM' => 'Vous avez des valeurs pour les champs numéro de téléphone et adresse. Pour remplacer ces valeurs avec celles du compte que vous avez sélectionné, cliquez sur OK. Pour garder les valeurs actuelles, cliquez sur Annuler.',
    'LBL_DROP_HERE' => '[Déposer ici]',
    'LBL_EMAIL_ACCOUNTS_GMAIL_DEFAULTS' => 'Mettre Gmail par défaut',
    'LBL_EMAIL_ACCOUNTS_NAME' => 'Nom',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND' => 'Serveur SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPASS' => 'Mot de passe SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPPORT' => 'Port SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPSERVER' => 'Serveur SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPUSER' => 'Utilisateur SMTP',
    'LBL_EMAIL_ACCOUNTS_SMTPDEFAULT' => 'Par défaut',
    'LBL_EMAIL_WARNING_MISSING_USER_CREDS' => 'Vous avez oublié de définir l\'utilisateur et le mot de passe SMTP',
    'LBL_OAUTH_CONNECTION_NOT_SET' => 'Veuillez définir une connexion OAuth externe.',
    'LBL_EMAIL_PASSWORD_NOT_SET' => 'Attention : aucun mot de passe n\'a été défini.',
    'LBL_EMAIL_WARNING_MISSING_CREDS' => 'Avertissement: Identifiants manquants',
    'LBL_EMAIL_ACCOUNTS_SUBTITLE' => 'Définissez les paramètres des comptes E-mails que vous souhaitez visualiser dans votre CRM.',
    'LBL_EMAIL_ACCOUNTS_OUTBOUND_SUBTITLE' => 'Définissez les paramètres des serveurs SMTP disponibles pour les envois d\'E-mails depuis votre CRM.',
    'ERR_TIMEOUT' => "Forced failure on timeout",
    'LBL_EMAIL_ADDRESS_BOOK_ADD' => 'Terminé',
    'LBL_EMAIL_ADDRESS_BOOK_CLEAR' => 'Clear',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_TO' => 'A :',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_CC' => 'Cc :',
    'LBL_EMAIL_ADDRESS_BOOK_ADD_BCC' => 'Cci :',
    'LBL_EMAIL_ADDRESS_BOOK_ADRRESS_TYPE' => 'A / Cc / Cci',
    'LBL_EMAIL_ADDRESS_BOOK_EMAIL_ADDR' => 'Adresse email',
    'LBL_EMAIL_ADDRESS_BOOK_FILTER' => 'Filter',
    'LBL_EMAIL_ADDRESS_BOOK_NAME' => 'Nom',
    'LBL_EMAIL_ADDRESS_BOOK_NOT_FOUND' => 'Aucune adresse trouvée',
    'LBL_EMAIL_ADDRESS_BOOK_SAVE_AND_ADD' => 'Sauvegarder et ajouter au carnet d\'adresse',
    'LBL_EMAIL_ADDRESS_BOOK_SELECT_TITLE' => 'Carnet d\'adresses',
    'LBL_EMAIL_ADDRESS_BOOK_TITLE' => 'Carnet d\'adresses',
    'LBL_EMAIL_REMOVE_SMTP_WARNING' => 'Attention, le SMTP que vous voulez supprimer est asssocié à un compte E-mail. Voulez-vous continuer ?',
    'LBL_EMAIL_ADDRESSES' => 'Adresses électroniques',
    'LBL_EMAIL' => 'Adresse E-mail',
    'LBL_EMAIL_ADDRESS_PRIMARY' => 'Adresse électronique',
    'LBL_EMAIL_ADDRESS_OPT_IN' => 'Vous avez confirmé que votre adresse E-mail a été ajoutée dans : ',
    'LBL_EMAIL_ADDRESS_OPT_IN_ERR' => 'Incapable de confirmer l’adresse e-mail',
    'LBL_EMAIL_ARCHIVE_TO_SUITE' => 'Importer dans SuiteCRM',
    'LBL_EMAIL_ASSIGNMENT' => 'Affectation',
    'LBL_EMAIL_ATTACH_FILE_TO_EMAIL' => 'Pièce(s) jointe(s)',
    'LBL_EMAIL_ATTACHMENT' => 'Attach',
    'LBL_EMAIL_ATTACHMENTS' => 'Pièce(s) jointe(s)',
    'LBL_EMAIL_ATTACHMENTS2' => 'A partir des documents SuiteCRM',
    'LBL_EMAIL_ATTACHMENTS3' => 'Modèles d\'attachements',
    'LBL_EMAIL_ATTACHMENTS_FILE' => 'Fichier',
    'LBL_EMAIL_ATTACHMENTS_DOCUMENT' => 'Document',
    'LBL_EMAIL_BCC' => 'Cci',
    'LBL_EMAIL_CANCEL' => 'Annuler/Fermer',
    'LBL_EMAIL_CC' => 'CC',
    'LBL_EMAIL_CHARSET' => 'Encodage',
    'LBL_EMAIL_CHECK' => 'Relever les E-mails',
    'LBL_EMAIL_CHECKING_NEW' => 'Relever les nouveaux E-mails',
    'LBL_EMAIL_CHECKING_DESC' => 'Un instant s’il vous plaît... <br><br>S\'il s’agit de la première vérification pour le compte de messagerie, cela peut prendre un certain temps.',
    'LBL_EMAIL_CLOSE' => 'Fermer',
    'LBL_EMAIL_COFFEE_BREAK' => 'Recherche de nouveaux E-mails. Le traitement de boîtes E-mails volumineuses prend plus de temps. Veuillez patienter.',

    'LBL_EMAIL_COMPOSE' => 'Adresse E-mail',
    'LBL_EMAIL_COMPOSE_ERR_NO_RECIPIENTS' => 'Votre E-mail est sans destinataire.',
    'LBL_EMAIL_COMPOSE_NO_BODY' => 'Le contenu du mail est vide. Envoyer tout de même ?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT' => 'Le sujet de votre E-mail est vide. Envoyer tout de même ?',
    'LBL_EMAIL_COMPOSE_NO_SUBJECT_LITERAL' => '(Aucun object)',
    'LBL_EMAIL_COMPOSE_INVALID_ADDRESS' => 'Veuillez saisir une adresse E-mail valide pour les champs A, CC et CCI',

    'LBL_EMAIL_CONFIRM_CLOSE' => 'Supprimer cet E-mail?',
    'LBL_EMAIL_CONFIRM_DELETE_SIGNATURE' => 'Voulez-vous vraiment supprimer cette signature ?',

    'LBL_EMAIL_SENT_SUCCESS' => 'E-mail envoyé',

    'LBL_EMAIL_CREATE_NEW' => '-- Créer depuis --',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS' => 'Multiples',
    'LBL_EMAIL_MULT_GROUP_FOLDER_ACCOUNTS_EMPTY' => 'Vide',
    'LBL_EMAIL_DATE_SENT_BY_SENDER' => 'Date d\'envoi',
    'LBL_EMAIL_DATE_TODAY' => 'Aujourd&#39;hui',
    'LBL_EMAIL_DELETE' => 'Supprimer',
    'LBL_EMAIL_DELETE_CONFIRM' => 'Voulez-vous vraiment supprimer le(s) message(s) sélectionné(s) ?',
    'LBL_EMAIL_DELETE_SUCCESS' => 'E-mail(s) supprimé(s) avec succès.',
    'LBL_EMAIL_DELETING_MESSAGE' => 'Suppression des messages',
    'LBL_EMAIL_DETAILS' => 'Détails',

    'LBL_EMAIL_EDIT_CONTACT_WARN' => 'Seule l\'adresse principale est utilisée quand vous travaillez avec les contacts.',

    'LBL_EMAIL_EMPTYING_TRASH' => 'Vider la poubelle',
    'LBL_EMAIL_DELETING_OUTBOUND' => 'Suppression des messages envoyés',
    'LBL_EMAIL_CLEARING_CACHE_FILES' => 'Vidage des fichiers du cache',
    'LBL_EMAIL_EMPTY_MSG' => 'Aucun E-mail à afficher.',
    'LBL_EMAIL_EMPTY_ADDR_MSG' => 'Aucune adresse E-mail à afficher.',

    'LBL_EMAIL_ERROR_ADD_GROUP_FOLDER' => 'Le nom du dossier doit être unique et non vide. Veuillez essayer à nouveau.',
    'LBL_EMAIL_ERROR_DELETE_GROUP_FOLDER' => 'Impossible de supprimer le dossier. Ce dossier où l\'un de ses sous-dossier est associé à une boîte E-mail.',
    'LBL_EMAIL_ERROR_CANNOT_FIND_NODE' => 'Ne peut pas déterminer le dossier lié au contexte. Essayer de nouveau.',
    'LBL_EMAIL_ERROR_CHECK_IE_SETTINGS' => 'Vérifiez vos paramètres.',
    'LBL_EMAIL_ERROR_DESC' => 'Erreurs détectées : ',
    'LBL_EMAIL_DELETE_ERROR_DESC' => 'Vous n&#39;avez pas accès à cette zone. Veuillez contacter votre adminisatrateur si vous pensez que vous devriez avoir accès.',
    'LBL_EMAIL_ERROR_DUPE_FOLDER_NAME' => 'Les noms de dossier de SuiteCRM doivent être uniques.',
    'LBL_EMAIL_ERROR_EMPTY' => 'Veuillez saisir des critères de recherche.',
    'LBL_EMAIL_ERROR_GENERAL_TITLE' => 'Une erreur est survenue',
    'LBL_EMAIL_ERROR_MESSAGE_DELETED' => 'Message supprimé du serveur',
    'LBL_EMAIL_ERROR_IMAP_MESSAGE_DELETED' => 'Chaque message est supprimé du serveur ou déplacé vers un dossier différent',
    'LBL_EMAIL_ERROR_MAILSERVERCONNECTION' => 'Impossible d&#39;accéder au Serveur Mail. Veuillez contacter un administrateur du Serveur Mail.',
    'LBL_EMAIL_ERROR_MOVE' => 'Le déplacement des E-mails entre serveurs et / ou comptes n\'est pas encore supporté.',
    'LBL_EMAIL_ERROR_MOVE_TITLE' => 'Erreur lors du déplacement',
    'LBL_EMAIL_ERROR_NAME' => 'Nom requis',
    'LBL_EMAIL_ERROR_FROM_ADDRESS' => 'Adresse émetteur requise. Veuillez saisir une adresse valide.',
    'LBL_EMAIL_ERROR_NO_FILE' => 'Veuillez ajouter un fichier',
    'LBL_EMAIL_ERROR_SERVER' => 'L\'adresse du serveur E-mail est requise.',
    'LBL_EMAIL_ERROR_SAVE_ACCOUNT' => 'Le compte mail n&#39;a pas pu être sauvegardé.',
    'LBL_EMAIL_ERROR_TIMEOUT' => 'Le serveur de mail a mis trop de temps à répondre',
    'LBL_EMAIL_ERROR_USER' => 'Identifiant de connexion requis',
    'LBL_EMAIL_ERROR_PORT' => 'Port du serveur mail requis',
    'LBL_EMAIL_ERROR_PROTOCOL' => 'Protocole du serveur mail requis',
    'LBL_EMAIL_ERROR_MONITORED_FOLDER' => 'Dossier monitoré requis',
    'LBL_EMAIL_ERROR_TRASH_FOLDER' => 'Dossier Poubelle requis',
    'LBL_EMAIL_ERROR_VIEW_RAW_SOURCE' => 'Information indisponible',
    'LBL_EMAIL_ERROR_NO_OUTBOUND' => 'Le SMTP n&#39;est pas configuré.',
    'LBL_EMAIL_ERROR_SENDING' => 'Erreur envoi d’E-mail. S’il vous plaît contactez votre administrateur pour assistance.',
    'LBL_EMAIL_FOLDERS' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', '') . 'Dossiers',
    'LBL_EMAIL_FOLDERS_SHORT' => SugarThemeRegistry::current()->getImage('icon_email_folder', 'align=absmiddle border=0', null, null, '.gif', ''),
    'LBL_EMAIL_FOLDERS_ADD' => 'Ajouter',
    'LBL_EMAIL_FOLDERS_ADD_DIALOG_TITLE' => 'Ajouter un dossier',
    'LBL_EMAIL_FOLDERS_RENAME_DIALOG_TITLE' => 'Renommer un dossier',
    'LBL_EMAIL_FOLDERS_ADD_NEW_FOLDER' => 'Sauvegarder',
    'LBL_EMAIL_FOLDERS_ADD_THIS_TO' => 'Dossier Parent',
    'LBL_EMAIL_FOLDERS_CHANGE_HOME' => 'Ce dossier ne peut être modifié',
    'LBL_EMAIL_FOLDERS_DELETE_CONFIRM' => 'Voulez-vous vraiment supprimer ce dossier ?\nCeci est irréversible.\nLa suppression d&#39;un dossier entraîne la suppression de tous ses sous-dossiers !',
    'LBL_EMAIL_FOLDERS_NEW_FOLDER' => 'Nom du Dossier',
    'LBL_EMAIL_FOLDERS_NO_VALID_NODE' => 'Veuillez sélectionner un dossier pour effectuer cette action.',
    'LBL_EMAIL_FOLDERS_TITLE' => 'Gestion des dossiers',

    'LBL_EMAIL_FORWARD' => 'Transférer',
    'LBL_EMAIL_DELIMITER' => '::;::',
    'LBL_EMAIL_DOWNLOAD_STATUS' => 'Téléchargement de l\'E-mail [[count]] sur [[total]]',
    'LBL_EMAIL_FROM' => 'Expéditeur',
    'LBL_EMAIL_GROUP' => 'Groupe',
    'LBL_EMAIL_UPPER_CASE_GROUP' => 'Group',
    'LBL_EMAIL_HOME_FOLDER' => 'Accueil',
    'LBL_EMAIL_IE_DELETE' => 'Suppression du compte',
    'LBL_EMAIL_IE_DELETE_SIGNATURE' => 'Effacement de la signature',
    'LBL_EMAIL_IE_DELETE_CONFIRM' => 'Voulez-vous vraiment supprimer ce compte ?',
    'LBL_EMAIL_IE_DELETE_SUCCESSFUL' => 'Suppression effectuée.',
    'LBL_EMAIL_IE_SAVE' => 'Sauvegarde des infos',
    'LBL_EMAIL_IMPORTING_EMAIL' => 'Importer l\'E-mail',
    'LBL_EMAIL_IMPORT_EMAIL' => 'Importer dans SuiteCRM',
    'LBL_EMAIL_IMPORT_SETTINGS' => 'Import',
    'LBL_EMAIL_INVALID' => 'Invalid',
    'LBL_EMAIL_LOADING' => 'Chargement...',
    'LBL_EMAIL_MARK' => 'Marquer',
    'LBL_EMAIL_MARK_FLAGGED' => 'Avec Marquage',
    'LBL_EMAIL_MARK_READ' => 'Comme Lu',
    'LBL_EMAIL_MARK_UNFLAGGED' => 'Sans Marquage',
    'LBL_EMAIL_MARK_UNREAD' => 'Comme Non-lu',
    'LBL_EMAIL_ASSIGN_TO' => 'Assigner à',

    'LBL_EMAIL_MENU_ADD_FOLDER' => 'Créer un dossier',
    'LBL_EMAIL_MENU_COMPOSE' => 'Envoyé à',
    'LBL_EMAIL_MENU_DELETE_FOLDER' => 'Supprimer le dossier',
    'LBL_EMAIL_MENU_EMPTY_TRASH' => 'Corbeille vide',
    'LBL_EMAIL_MENU_SYNCHRONIZE' => 'Synchroniser',
    'LBL_EMAIL_MENU_CLEAR_CACHE' => 'Nettoyer les fichiers de cache',
    'LBL_EMAIL_MENU_REMOVE' => 'Supprimer',
    'LBL_EMAIL_MENU_RENAME_FOLDER' => 'Rename Folder',
    'LBL_EMAIL_MENU_RENAMING_FOLDER' => 'Renommer le dossier',
    'LBL_EMAIL_MENU_MAKE_SELECTION' => 'Veuillez effectuer une sélection pour réaliser cette action.',

    'LBL_EMAIL_MENU_HELP_ADD_FOLDER' => 'Créer un dossier (distant ou dans SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_DELETE_FOLDER' => 'Supprimer un dossier (distant ou dans SuiteCRM)',
    'LBL_EMAIL_MENU_HELP_EMPTY_TRASH' => 'Vider toutes les corbeilles de ce compte',
    'LBL_EMAIL_MENU_HELP_MARK_READ' => 'Marquer ces E-mails comme lus',
    'LBL_EMAIL_MENU_HELP_MARK_UNFLAGGED' => 'Enlever les Drapeaux de ces E-mails',
    'LBL_EMAIL_MENU_HELP_RENAME_FOLDER' => 'Renommer un dossier (distant ou dans SuiteCRM)',

    'LBL_EMAIL_MESSAGES' => 'messages',

    'LBL_EMAIL_ML_NAME' => 'Nom de liste de diffusion',
    'LBL_EMAIL_ML_ADDRESSES_1' => 'Sélectionner l\'adresse d\'une liste de diffusion',
    'LBL_EMAIL_ML_ADDRESSES_2' => 'Adresse de liste de diffusion disponible',

    'LBL_EMAIL_MULTISELECT' => '<b>Ctrl-Clic</b> pour une sélection multiple<br />(Pour Mac utiliser <b>CMD-Clic</b>)',

    'LBL_EMAIL_NO' => 'Non',
    'LBL_EMAIL_NOT_SENT' => 'Le système ne peut satisfaire votre demande. Veuillez contacter l\'administrateur de votre système.',

    'LBL_EMAIL_OK' => 'Ok',
    'LBL_EMAIL_ONE_MOMENT' => 'Veuillez patienter...',
    'LBL_EMAIL_OPEN_ALL' => 'Ouvrir dans un onglet',
    'LBL_EMAIL_OPTIONS' => 'Options',
    'LBL_EMAIL_QUICK_COMPOSE' => 'Création rapide',
    'LBL_EMAIL_OPT_OUT' => 'Désinscrit',
    'LBL_EMAIL_OPT_OUT_AND_INVALID' => 'Désinscrit et adresses invalides',
    'LBL_EMAIL_PERFORMING_TASK' => 'Action en cours',
    'LBL_EMAIL_PRIMARY' => 'Principal',
    'LBL_EMAIL_PRINT' => 'Print',

    'LBL_EMAIL_QC_BUGS' => 'Anomalie',
    'LBL_EMAIL_QC_CASES' => 'Ticket',
    'LBL_EMAIL_QC_LEADS' => 'Lead',
    'LBL_EMAIL_QC_CONTACTS' => 'Contact',
    'LBL_EMAIL_QC_TASKS' => 'Tâche',
    'LBL_EMAIL_QC_OPPORTUNITIES' => 'Opportunity',
    'LBL_EMAIL_QUICK_CREATE' => 'Créer Rapidement',

    'LBL_EMAIL_REBUILDING_FOLDERS' => 'Mise à jour des dossiers',
    'LBL_EMAIL_RELATE_TO' => 'Champ relatif',
    'LBL_EMAIL_VIEW_RELATIONSHIPS' => 'Voir les relations',
    'LBL_EMAIL_RECORD' => 'Enregistrement de l\'E-mail',
    'LBL_EMAIL_REMOVE' => 'Supprimer',
    'LBL_EMAIL_REPLY' => 'Répondre',
    'LBL_EMAIL_REPLY_ALL' => 'Répondre à tous',
    'LBL_EMAIL_REPLY_TO' => 'Répondre à',
    'LBL_EMAIL_RETRIEVING_MESSAGE' => 'Récupérer le message',
    'LBL_EMAIL_RETRIEVING_RECORD' => 'Récupération de l\'E-mail enregistré',
    'LBL_EMAIL_SELECT_ONE_RECORD' => 'Merci de sélectionner un seul enregistrement !',
    'LBL_EMAIL_RETURN_TO_VIEW' => 'Retourner au module précédent ?',
    'LBL_EMAIL_REVERT' => 'Revenir',
    'LBL_EMAIL_RELATE_EMAIL' => 'E-mail relié',

    'LBL_EMAIL_RULES_TITLE' => 'Gestion des règles',

    'LBL_EMAIL_SAVE' => 'Sauvegarder',
    'LBL_EMAIL_SAVE_AND_REPLY' => 'Sauvegarder &amp; Refaire',
    'LBL_EMAIL_SAVE_DRAFT' => 'Sauvegarder en brouillon',
    'LBL_EMAIL_DRAFT_SAVED' => 'Draft has been saved.',

    'LBL_EMAIL_SEARCH' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null, null,    '.gif', ''),
    'LBL_EMAIL_SEARCH_SHORT' => SugarThemeRegistry::current()->getImage('Search', 'align=absmiddle border=0', null,        null, '.gif', ''),
    'LBL_EMAIL_SEARCH_DATE_FROM' => 'Date de début',
    'LBL_EMAIL_SEARCH_DATE_UNTIL' => 'Date de fin',
    'LBL_EMAIL_SEARCH_NO_RESULTS' => 'Aucun résultat pour vos critères de recherche.',
    'LBL_EMAIL_SEARCH_RESULTS_TITLE' => 'Résultats de recherche',

    'LBL_EMAIL_SELECT' => 'Select',

    'LBL_EMAIL_SEND' => 'Send',
    'LBL_EMAIL_SENDING_EMAIL' => 'Envoi du Message',

    'LBL_EMAIL_SETTINGS' => 'Paramètres',
    'LBL_EMAIL_SETTINGS_TITLE' => 'Paramètres emails',
    'LBL_EMAIL_SETTINGS_ACCOUNTS' => 'Comptes E-mail',
    'LBL_EMAIL_SETTINGS_ADD_ACCOUNT' => 'Effacer le formulaire',
    'LBL_EMAIL_SETTINGS_CHECK_INTERVAL' => 'Relever les nouveaux e-mails',
    'LBL_EMAIL_SETTINGS_FROM_ADDR' => 'De (adresse)',
    'LBL_EMAIL_SETTINGS_FROM_TO_EMAIL_ADDR' => 'Adresse email pour la notification de test :',
    'LBL_EMAIL_SETTINGS_FROM_ADDR_NOT_SET' => 'From address and/or From name not set',
    'LBL_EMAIL_SETTINGS_FROM_NAME' => 'Nom de',
    'LBL_EMAIL_SETTINGS_REPLY_TO_ADDR' => 'Répondre',
    'LBL_EMAIL_SETTINGS_FULL_SYNC' => 'Synchroniser tout les comptes',
    'LBL_EMAIL_TEST_NOTIFICATION_SENT' => 'Un E-mail a été envoyé. Vérifiez si vous avez bien reçu cet E-mail.',
    'LBL_EMAIL_TEST_SEE_FULL_SMTP_LOG' => 'Voir le journal SMTP complet',
    'LBL_EMAIL_SETTINGS_FULL_SYNC_WARN' => 'Voulez-vous effectuer une synchronisation complète ? Pour les comptes volumineux cela peut prendre plusieurs minutes.',
    'LBL_EMAIL_SUBSCRIPTION_FOLDER_HELP' => 'Maintenez enfoncée la touche Shift ou la touche Ctrl pour sélectionner plusieurs dossiers',
    'LBL_EMAIL_SETTINGS_GENERAL' => 'Général',
    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_CREATE' => 'Créer un "dossier de groupe"',

    'LBL_EMAIL_SETTINGS_GROUP_FOLDERS_EDIT' => 'Éditer le "dossier de groupe"',

    'LBL_EMAIL_SETTINGS_NAME' => 'Nom du compte E-mail',
    'LBL_EMAIL_SETTINGS_REQUIRE_REFRESH' => 'Définir le nombre d\'E-mails par page. Un rafraichissement de la page est nécessaire pour visualiser la modification.',
    'LBL_EMAIL_SETTINGS_RETRIEVING_ACCOUNT' => 'Récupére les infos',
    'LBL_EMAIL_SETTINGS_SAVED' => 'Vos paramètres ont été enregistrés.',
    'LBL_EMAIL_SETTINGS_SEND_EMAIL_AS' => 'Envoyer les E-mails en texte brut uniquement',
    'LBL_EMAIL_SETTINGS_SHOW_NUM_IN_LIST' => 'Nombre d\'E-mails par page',
    'LBL_EMAIL_SETTINGS_TITLE_LAYOUT' => 'Affichage',
    'LBL_EMAIL_SETTINGS_TITLE_PREFERENCES' => 'Préférences',
    'LBL_EMAIL_SETTINGS_USER_FOLDERS' => 'Dossier(s) "Perso" disponible(s)',
    'LBL_EMAIL_ERROR_PREPEND' => 'Une erreur email s\'est produite :',
    'LBL_EMAIL_INVALID_PERSONAL_OUTBOUND' => 'Serveur SMTP sélectionné invalide pour votre compte E-mail. Configurer le serveur SMTP ou en choisir un autre',
    'LBL_EMAIL_INVALID_SYSTEM_OUTBOUND' => 'Vous n\'avez pas configuré le serveur SMTP pour votre compte E-mail. Configurez ou choisissez un serveur SMTP pour le compte E-mail.',
    'LBL_DEFAULT_EMAIL_SIGNATURES' => 'Signature par défaut',
    'LBL_EMAIL_SIGNATURES' => 'Signatures',
    'LBL_SMTPTYPE_GMAIL' => 'Gmail',
    'LBL_SMTPTYPE_YAHOO' => 'Yahoo! Mail',
    'LBL_SMTPTYPE_EXCHANGE' => 'Microsoft Exchange',
    'LBL_SMTPTYPE_OTHER' => 'Autre',
    'LBL_EMAIL_SPACER_MAIL_SERVER' => '[ Dossiers distants ]',
    'LBL_EMAIL_SPACER_LOCAL_FOLDER' => '[dossiers SuiteCRM]',
    'LBL_EMAIL_SUBJECT' => 'Sujet',
    'LBL_EMAIL_SUCCESS' => 'Succès',
    'LBL_EMAIL_SUITE_FOLDER' => 'Dossier SuiteCRM',
    'LBL_EMAIL_TEMPLATE_EDIT_PLAIN_TEXT' => 'Le modèle d\'E-mail est vide',
    'LBL_EMAIL_TEMPLATES' => 'Modèles',
    'LBL_EMAIL_TO' => 'A',
    'LBL_EMAIL_VIEW' => 'Vue',
    'LBL_EMAIL_VIEW_HEADERS' => 'Voir l\'en-tête',
    'LBL_EMAIL_VIEW_RAW' => 'Voir format brut',
    'LBL_EMAIL_VIEW_UNSUPPORTED' => 'Cette fonctionnalité n\'est pas supportée quand vous utilisez le protocole POP3.',
    'LBL_DEFAULT_LINK_TEXT' => 'Lien texte par défaut.',
    'LBL_EMAIL_YES' => 'Yes',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS' => 'Envoyer un E-mail de test',
    'LBL_EMAIL_TEST_OUTBOUND_SETTINGS_SENT' => 'E-mail de test envoyé !',
    'LBL_EMAIL_MESSAGE_NO' => 'Message N°',
    'LBL_EMAIL_IMPORT_SUCCESS' => 'Import terminé',
    'LBL_EMAIL_IMPORT_FAIL' => 'Échec de l\'import. Le message est peut être déjà importé, ou bien il a été supprimé du serveur',

    'LBL_LINK_NONE' => 'Aucun',
    'LBL_LINK_ALL' => 'Tous',
    'LBL_LINK_RECORDS' => 'Enregister',
    'LBL_LINK_SELECT' => 'Select',
    'LBL_LINK_ACTIONS' => 'ACTIONS',
    'LBL_CLOSE_ACTIVITY_HEADER' => 'Confirmation',
    'LBL_CLOSE_ACTIVITY_CONFIRM' => 'Souhaitez-vous vous terminer cette activité (#module#) ?',
    'LBL_INVALID_FILE_EXTENSION' => 'Extension de fichier invalide',

    'ERR_AJAX_LOAD' => 'Une erreur est survenue :',
    'ERR_AJAX_LOAD_FAILURE' => 'Il y a eu une erreur lors du traitement de votre demande, veuillez réessayer ultérieurement.',
    'ERR_AJAX_LOAD_FOOTER' => 'Si cette erreur persiste, veuillez demander à votre administrateur de désactiver Ajax pour ce module',
    'ERR_DECIMAL_SEP_EQ_THOUSANDS_SEP' => 'Le séparateur des décimales ne peut pas être le même que celui des milliers.\\n\\n  Merci de modifier ces valeurs.',
    'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
    'ERR_EXPORT_DISABLED' => 'Exports Désactivés.',
    'ERR_EXPORT_TYPE' => 'Erreur d&#39;exportation',
    'ERR_INVALID_EMAIL_ADDRESS' => 'adresse E-mail invalide.',
    'ERR_INVALID_FILE_REFERENCE' => 'Référence Fichier Invalide',
    'ERR_NO_HEADER_ID' => 'Cette fonctionnalité n&#39;est pas supportée dans ce thème.',
    'ERR_NOT_ADMIN' => 'Accès non autorisé à l&#39;administration.',
    'ERR_UNAUTHORIZED_PAGE_ACCESS' => 'Vous n\'êtes pas autorisé à voir cette page. Veuillez contacter votre administrateur système.',
    'ERR_UNAUTHORIZED_PAGE_ACCESS_TO_HOME_PAGE' => 'Vous n\'êtes pas autorisé à voir cette page. Redirection vers la Page d\'Accueil...',
    'ERR_MISSING_REQUIRED_FIELDS' => 'Champ(s) obligatoire(s) :',
    'ERR_INVALID_REQUIRED_FIELDS' => 'Champ(s) obligatoire(s) invalide(s) :',
    'ERR_INVALID_VALUE' => 'Valeur incorrecte :',
    'ERR_NO_SUCH_FILE' => 'Le fichier n&#39;existe pas sur le système',
    'ERR_NO_SINGLE_QUOTE' => 'Impossible d&#39;utiliser le simple guillemet pour',
    'ERR_NOTHING_SELECTED' => 'Merci de sélectionner un élément pour continuer.',
    'ERR_SELF_REPORTING' => 'Un utilisateur ne peut pas se reporter à lui-même.',
    'ERR_SQS_NO_MATCH_FIELD' => 'Pas de correspondance pour le champ : ',
    'ERR_SQS_NO_MATCH' => 'Pas de correspondance',
    'ERR_ADDRESS_KEY_NOT_SPECIFIED' => 'Veuillez spécifier une &#39;clé&#39; d&#39;index dans les paramètres d&#39;affichage pour les Meta-données',
    'ERR_EXISTING_PORTAL_USERNAME' => 'Erreur : Le nom du portail est déjà attribué à un autre contact.',
    'ERR_COMPATIBLE_PRECISION_VALUE' => 'La valeur du champ n&#39;est pas compatible avec le format défini',
    'ERR_EXTERNAL_API_SAVE_FAIL' => 'Une erreur s&#39;est produite lorsque vous tentez de sauvegarder lien externe.',
    'ERR_NO_DB' => 'Connexion impossible à la base de données. Veuillez consulter suitecrm.log pour plus de détails.',
    'ERR_DB_FAIL' => 'Défaillance de la base de données. Veuillez consulter suitecrm.log pour plus de détails.',
    'ERR_DB_VERSION' => 'Les fichiers SuiteCRM {0} sont utilisables uniquement avec une base de données SuiteCRM {1}.',

    'LBL_ACCOUNT' => 'Compte',
    'LBL_ACCOUNTS' => 'Comptes',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_ACCUMULATED_HISTORY_BUTTON_KEY' => 'H',
    'LBL_ACCUMULATED_HISTORY_BUTTON_LABEL' => 'Voir résumé',
    'LBL_ACCUMULATED_HISTORY_BUTTON_TITLE' => 'View Summary',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_ADD_DOCUMENT' => 'Ajouter un Document',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_KEY' => 'L',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL' => 'Ajouter à une Liste de Cibles',
    'LBL_ADD_TO_PROSPECT_LIST_BUTTON_LABEL_ACCOUNTS_CONTACTS' => 'Ajouter des Contacts à la liste des cibles',
    'LBL_ADDITIONAL_DETAILS_CLOSE_TITLE' => 'Cliquer pour Fermer',
    'LBL_ADDITIONAL_DETAILS' => 'Informations complémentaires',
    'LBL_ADMIN' => 'Administration',
    'LBL_ALT_HOT_KEY' => '',
    'LBL_ARCHIVE' => 'Archiver',
    'LBL_ASSIGNED_TO_USER' => 'Assigné à l\'utilisateur',
    'LBL_ASSIGNED_TO' => 'Assigné à :',
    'LBL_BACK' => 'Revenir en arrière',
    'LBL_BILLING_ADDRESS' => 'Adresse de Facturation',
    'LBL_QUICK_CREATE' => 'Créer ',
    'LBL_BROWSER_TITLE' => 'SuiteCRM - CRM Open Source',
    'LBL_BUGS' => 'Anomalies',
    'LBL_BY' => 'par',
    'LBL_CALLS' => 'Appels',
    'LBL_CAMPAIGNS_SEND_QUEUED' => 'Envoyer les E-mails en file d\'attente',
    'LBL_CAMPAIGNS_SEND_NEXT_BATCH' => 'Send Next Batch of Queued Emails',
    'LBL_SENT_NEXT_BATCH' => 'Batch sent successfully',
    'LBL_SUBMIT_BUTTON_LABEL' => 'Envoyer',
    'LBL_CASE' => 'Ticket',
    'LBL_CASES' => 'Tickets',
    'LBL_CHANGE_PASSWORD' => 'Changer le mot de passe',
    'LBL_CHARSET' => 'UTF-8',
    'LBL_CHARTS' => 'Graphiques',
    'LBL_QUICK_CHARTS' => 'Graphiques rapides',
    'LBL_QUICK_HISTORY' => 'Echéancier',
    'LBL_CHECKALL' => 'Tout cocher',
    'LBL_CITY' => 'City',
    'LBL_CLEAR_BUTTON_LABEL' => 'Clear',
    'LBL_CLEAR_BUTTON_TITLE' => 'Clear',
    'LBL_CLEARALL' => 'Tout effacer',
    'LBL_CLOSE_BUTTON_TITLE' => 'Fermer',
    'LBL_CLOSE_AND_CREATE_BUTTON_LABEL' => 'Fermer et créer un nouveau',
    'LBL_CLOSE_AND_CREATE_BUTTON_TITLE' => 'Close and Create New',
    'LBL_CLOSE_AND_CREATE_BUTTON_KEY' => 'C',
    'LBL_OPEN_ITEMS' => 'Ouvrir les articles',
    'LBL_COMPOSE_EMAIL_BUTTON_KEY' => 'L',
    'LBL_COMPOSE_EMAIL_BUTTON_LABEL' => 'Rédiger E-mail',
    'LBL_COMPOSE_EMAIL_BUTTON_TITLE' => 'Envoyer E-mail',
    'LBL_SEARCH_DROPDOWN_YES' => 'Yes',
    'LBL_SEARCH_DROPDOWN_NO' => 'Non',
    'LBL_CONTACT_LIST' => 'Liste des Contacts',
    'LBL_CONTACT' => 'Contact',
    'LBL_CONTACTS' => 'Contacts',
    'LBL_CONTRACT' => 'Contract',
    'LBL_CONTRACTS' => 'Contrats',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATE_BUTTON_LABEL' => 'Créer',
    'LBL_CREATED_BY_USER' => 'Créé par l\'utilisateur',
    'LBL_CREATED_BY' => 'Créé par',
    'LBL_CREATED_USER' => 'Créé par l\'utilisateur',
    'LBL_CREATED' => 'Créé par',
    'LBL_CURRENT_USER_FILTER' => 'My Items',
    'LBL_CURRENCY' => 'Currency:',
    'LBL_DOCUMENTS' => 'Documents',
    'LBL_DATE_ENTERED' => 'Date Created:',
    'LBL_DATE_MODIFIED' => 'Date de modification :',
    'LBL_EDIT_BUTTON' => 'Modifier',
    'LBL_DUPLICATE_BUTTON' => 'Doublon',
    'LBL_DELETE_BUTTON' => 'Supprimer',
    'LBL_DELETE' => 'Supprimer',
    'LBL_DELETED' => 'Supprimé',
    'LBL_LIMIT' => 'Limit: ',
    'LBL_DIRECT_REPORTS' => 'Rapports directs',
    'LBL_DONE_BUTTON_LABEL' => 'Done',
    'LBL_DONE_BUTTON_TITLE' => 'Done',
    'LBL_FAVORITES' => 'Favoris',
    'LBL_VCARD' => 'vCard',
    'LBL_EMPTY_VCARD' => 'Veuillez sélectionner un fichier vCard',
    'LBL_EMPTY_REQUIRED_VCARD' => 'vCard ne dispose pas de tous les champs requis pour ce module. Veuillez vous référer à suitecrm.log pour plus de détails.',
    'LBL_VCARD_ERROR_FILESIZE' => 'Le fichier envoyé dépasse la limite de 30000 bytes spécifiée dans le formulaire HTML.',
    'LBL_VCARD_ERROR_DEFAULT' => 'Une erreur s\'est produite lors de l\'envoi du fichier vCard. Veuillez-vous référer à suitecrm.log pour plus de détails.',
    'LBL_IMPORT_VCARD' => 'Importer une vCard :',
    'LBL_IMPORT_VCARD_BUTTON_LABEL' => 'Importer vCard',
    'LBL_IMPORT_VCARD_BUTTON_TITLE' => 'Import vCard',
    'LBL_VIEW_BUTTON' => 'Vue',
    'LBL_EMAIL_PDF_BUTTON_LABEL' => 'Email en PDF',
    'LBL_EMAIL_PDF_BUTTON_TITLE' => 'Message en PDF',
    'LBL_EMAILS' => 'E-mails',
    'LBL_EMPLOYEES' => 'Employés',
    'LBL_ENTER_DATE' => 'Préciser la date',
    'LBL_EXPORT' => 'Exporter',
    'LBL_FAVORITES_FILTER' => 'My Favorites',
    'LBL_GO_BUTTON_LABEL' => 'Démarrer',
    'LBL_HIDE' => 'Masquer',
    'LBL_HISTORY' => 'Historique',
    'LBL_NEW' => 'New',
    'LBL_ID' => 'ID',
    'LBL_IMPORT' => 'Importer',
    'LBL_IMPORT_STARTED' => 'Import démarré : ',
    'LBL_LAST_VIEWED' => 'Dernières consultations',
    'LBL_LAST_VIEWED_NO_RESULT' => 'No Recently Viewed Items',
    'LBL_LEADS' => 'Prospects',
    'LBL_LESS' => 'Moins',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CAMPAIGNLOG' => 'Log des campagnes',
    'LBL_CAMPAIGN_CONTACT' => 'Campagnes',
    'LBL_CAMPAIGN_ID' => 'campaign_id',
    'LBL_CAMPAIGN_NONE' => 'Indéfini',
    'LBL_CAMPAIGN_CHARTS' => 'Campaign Charts',
    'LBL_EMAIL_MARKETING_CHARTS' => 'Email Marketing Charts',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Message Queue',
    'LBL_CAMPAIGN_SEND_STATUS' => 'Campaign Send Status',
    'LBL_CAMPAIGN_SEND_ERROR_THRESHOLD_EXCEEDED' => 'Error threshold per batch (%d) reached: %s',
    'LBL_CAMPAIGN_SEND_FAILURE_THRESHOLD_EXCEEDED' => 'Failure threshold per batch of %d exceeded',
    'LBL_EMAIL_MARKETING_SEND_STATUS' => 'Email Marketing Send Status',
    'LBL_CAMPAIGN_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Campaign Response By Recipient Activity',
    'LBL_EMAIL_MARKETING_RESPONSE_BY_RECIPIENT_ACTIVITY' => 'Email Marketing Response By Recipient Activity',
    'LBL_LOG_ENTRIES_TARGETED_TITLE' => 'Sent/Attempted',
    'LBL_LOG_ENTRIES_SEND_ERROR_TITLE' => 'Rebonds, Autres',
    'LBL_LOG_ENTRIES_BOUNCED_TITLE' => 'Bounced Messages',
    'LBL_LOG_ENTRIES_INVALID_EMAIL_TITLE' => 'Bounced Messages, Invalid Email',
    'LBL_LOG_ENTRIES_LINK_TITLE' => 'Click-thru Link',
    'LBL_LOG_ENTRIES_VIEWED_TITLE' => 'Viewed Message',
    'LBL_LOG_ENTRIES_REMOVED_TITLE' => 'Désinscrit',
    'LBL_LOG_ENTRIES_LEAD_TITLE' => 'Leads Created',
    'LBL_CAMPAIGN_LEAD_SUBPANEL_TITLE' => 'Prospects',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Affaires',
    'LBL_LOG_ENTRIES_CONTACT_TITLE' => 'Contacts Created',
    'LBL_LOG_ENTRIES_BLOCKED_TITLE' => 'Suppressed/Blocked',
    'LBL_THEME' => 'Thème :',
    'LBL_FOUND_IN_RELEASE' => 'Trouvé dans la Release',
    'LBL_FIXED_IN_RELEASE' => 'Corrigé dans la Release',
    'LBL_IN_EVERYWHERE' => 'Partout',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_ASSIGNED_USER' => 'Utilisateur',
    'LBL_LIST_CONTACT_NAME' => 'Nom du contact',
    'LBL_LIST_CONTACT_ROLE' => 'Rôle Contact',
    'LBL_LIST_DATE_ENTERED' => 'Date de création',
    'LBL_LIST_EMAIL' => 'Adresse E-mail',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_OF' => 'de',
    'LBL_LIST_PHONE' => 'Téléphone',
    'LBL_LIST_RELATED_TO' => 'Relatif à',
    'LBL_LIST_USER_NAME' => 'Nom d\'utilisateur',
    'LBL_LISTVIEW_NO_SELECTED' => 'Vous devez sélectionner au moins 1 enregistrement.',
    'LBL_LISTVIEW_TWO_REQUIRED' => 'Vous devez sélectionner au moins 2 enregistrements.',
    'LBL_LISTVIEW_OPTION_SELECTED' => 'Enregistrements Sélectionnés',
    'LBL_LISTVIEW_SELECTED_OBJECTS' => 'Sélectionné(s) : ',

    'LBL_LOCALE_NAME_EXAMPLE_FIRST' => 'Antoine',
    'LBL_LOCALE_NAME_EXAMPLE_LAST' => 'Dupont',
    'LBL_LOCALE_NAME_EXAMPLE_SALUTATION' => 'Docteur',
    'LBL_LOCALE_NAME_EXAMPLE_TITLE' => 'Code Monkey Extraordinaire',
    'LBL_COPY' => 'Copy',
    'LBL_CANCEL' => 'Annuler',
    'LBL_CONFIRM' => 'Confirm',
    'LBL_SNOOZE' => 'Répéter',
    'LBL_SNOOZE_INLINE_CONFIRM' => 'Rappel ? ({{preferences.snooze_alert_timer|enum:snooze_alert_timer_simple}})',
    'LBL_DISMISS' => 'Rejeter',
    'LBL_DISMISS_INLINE_CONFIRM' => 'Rejeter ?',
    'LBL_DISMISS_ALL_INLINE_CONFIRM' => 'Tout rejeter ?',
    'LBL_DISMISS_ALL_DRAFTS_CONFIRM' => 'Dismiss all drafts?',
    'NTC_DISMISS_CONFIRMATION' => 'Êtes-vous sûr de vouloir supprimer cette alerte ?',
    'NTC_DISMISS_ALL_CONFIRMATION' => 'Êtes-vous sûr de vouloir supprimer toutes les alertes ?',
    'LBL_ALERT_DISMISS_SUCCESS' => 'L\'alerte a été supprimée avec succès',
    'LBL_ALERT_DISMISS_ERROR' => 'Erreur lors de la suppression de l\'alerte',
    'LBL_ALERT_DISMISS_ALL_SUCCESS' => 'Alertes supprimées avec succès',
    'LBL_DISMISS_ALL' => 'Tout supprimer',
    'LBL_DISMISS_SUCCESS' => 'Successfully Dismissed',
    'LBL_VERIFY' => 'Vérification',
    'LBL_RESEND' => 'Renvoyer',
    'LBL_RECORD_DOES_NOT_EXIST' => 'Error retrieving record. This record may be deleted or you may not be authorized to view it.',
    'LBL_PROFILE' => 'Profil',
    'LBL_PROFILE_EDIT' => 'Modifier le profil',
    'LBL_MAILMERGE' => 'Publipostage',
    'LBL_MASS_UPDATE' => 'Mise à jour globale',
    'LBL_NO_MASS_UPDATE_FIELDS_AVAILABLE' => 'Il n&#39;y a pas de champs disponibles pour la mise à jour globale',
    'LBL_OPT_OUT_FLAG_PRIMARY' => 'Opt-out E-mail principal',
    'LBL_OPT_IN_FLAG_PRIMARY' => 'Opt-out E-mail principal',
    'LBL_MEETINGS' => 'Réunions',
    'LBL_MEETING_GO_BACK' => 'Retourner à la réunion',
    'LBL_MEMBERS' => 'Membres',
    'LBL_MEMBER_OF' => 'Membre de',
    'LBL_MODIFIED_BY_USER' => 'Modifié par l\'utilisateur',
    'LBL_MODIFIED_USER' => 'Modifié par l\'utilisateur',
    'LBL_MODIFIED' => 'Modifié par',
    'LBL_MODIFIED_NAME' => 'Modifié par (Nom)',
    'LBL_MORE' => 'Options',
    'LBL_MY_ACCOUNT' => 'Mon Compte',
    'LBL_NAME' => 'Nom',
    'LBL_NEW_BUTTON_KEY' => 'N',
    'LBL_NEW_BUTTON_LABEL' => 'Créer',
    'LBL_NEW_BUTTON_TITLE' => 'Créer',
    'LBL_EDIT' => 'Modifier',
    'LBL_NEXT_BUTTON_LABEL' => 'Suivant',
    'LBL_NONE' => '--None--',
    'LBL_NOTES' => 'Notes',
    'LBL_OPPORTUNITIES' => 'Affaires',
    'LBL_OPPORTUNITY_NAME' => 'Nom Affaire',
    'LBL_OPPORTUNITY' => 'Opportunity',
    'LBL_OR' => 'OU',
    'LBL_PANEL_OVERVIEW' => 'Aperçu',
    'LBL_PANEL_ASSIGNMENT' => 'AUTRE',
    'LBL_PANEL_ADVANCED' => 'PLUS D\'INFORMATIONS',
    'LBL_PARENT_TYPE' => 'Type de parent',
    'LBL_PARENT_FIELD_DYNAMIC_LABEL' => '{{fields.parent_type.value}}',
    'LBL_PERCENTAGE_SYMBOL' => '%',
    'LBL_POSTAL_CODE' => 'Code postal :',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Ville (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pays (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Code postal (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Région (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Rue 2 (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Rue 3 (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Rue (adresse principale) :',
    'LBL_PRIMARY_ADDRESS' => 'Adresse principale :',

    'LBL_PROSPECTS' => 'Prospects',
    'LBL_PRODUCTS' => 'Produits',
    'LBL_PROJECT_TASKS' => 'Tâches du projet',
    'LBL_PROJECTS' => 'Projets',
    'LBL_QUOTES' => 'Devis',

    'LBL_RELATED' => 'Lié à',
    'LBL_RELATED_RECORDS' => 'Enregistrements rattachés',
    'LBL_REMOVE' => 'Supprimer',
    'LBL_REPORTS_TO' => 'Rend compte à',
    'LBL_REQUIRED_SYMBOL' => '*',
    'LBL_REQUIRED_TITLE' => 'Indique les champs obligatoires',
    'LBL_EMAIL_DONE_BUTTON_LABEL' => 'Done',
    'LBL_FULL_FORM_BUTTON_KEY' => 'L',
    'LBL_FULL_FORM_BUTTON_LABEL' => 'Vue Complète',
    'LBL_FULL_FORM_BUTTON_TITLE' => 'Full Form',
    'LBL_SAVE_NEW_BUTTON_LABEL' => 'Enregistrer et créer un nouveau',
    'LBL_SAVE_NEW_BUTTON_TITLE' => 'Save & Create New',
    'LBL_SAVE_OBJECT' => 'Sauvegarder {0}',
    'LBL_SEARCH_BUTTON_KEY' => 'Q',
    'LBL_SEARCH_BUTTON_LABEL' => 'Rechercher',
    'LBL_SEARCH_BUTTON_TITLE' => 'Search',
    'LBL_FILTER' => 'Filter',
    'LBL_CLEAR_FILTER' => 'Réinitialiser les filtres',
    'LBL_FILTER_MODULES' => 'Filter Modules',
    'LBL_SEARCH' => 'Search',
    'LBL_SEARCH_ALT' => '',
    'LBL_SEARCH_MORE' => 'suivant(s)',
    'LBL_UPLOAD_IMAGE_FILE_INVALID' => 'Format de fichier invalide, seules des images peuvent être téléchargées.',
    'LBL_SELECT_BUTTON_KEY' => 'T',
    'LBL_SELECT_BUTTON_LABEL' => 'Select',
    'LBL_SELECT_BUTTON_TITLE' => 'Select',
    'LBL_BROWSE_DOCUMENTS_BUTTON_LABEL' => 'Parcourir',
    'LBL_BROWSE_DOCUMENTS_BUTTON_TITLE' => 'Browse Documents',
    'LBL_SELECT_CONTACT_BUTTON_KEY' => 'T',
    'LBL_SELECT_CONTACT_BUTTON_LABEL' => 'Sélectionner Contact',
    'LBL_SELECT_CONTACT_BUTTON_TITLE' => 'Select Contact',
    'LBL_SELECT_REPORTS_BUTTON_LABEL' => 'Sélectionner depuis un Rapport',
    'LBL_SELECT_REPORTS_BUTTON_TITLE' => 'Sélectionner Rapports',
    'LBL_SELECT_USER_BUTTON_KEY' => 'U - majuscule',
    'LBL_SELECT_USER_BUTTON_LABEL' => 'Sélectionner Utilisateur',
    'LBL_SELECT_USER_BUTTON_TITLE' => 'Select User',
    // Clear buttons take up too many keys, lets default the relate and collection ones to be empty
    'LBL_ACCESSKEY_CLEAR_RELATE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_RELATE_TITLE' => 'Effacer la sélection',
    'LBL_ACCESSKEY_CLEAR_RELATE_LABEL' => 'Effacer la sélection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_TITLE' => 'Effacer la sélection',
    'LBL_ACCESSKEY_CLEAR_COLLECTION_LABEL' => 'Effacer la sélection',
    'LBL_ACCESSKEY_SELECT_FILE_KEY' => 'F',
    'LBL_ACCESSKEY_SELECT_FILE_TITLE' => 'Sélectionnez un fichier',
    'LBL_ACCESSKEY_SELECT_FILE_LABEL' => 'Sélectionner un fichier',
    'LBL_ACCESSKEY_CLEAR_FILE_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_FILE_TITLE' => 'Supprimer le fichier',
    'LBL_ACCESSKEY_CLEAR_FILE_LABEL' => 'Supprimer le fichier',

    'LBL_ACCESSKEY_SELECT_USERS_KEY' => 'U - majuscule',
    'LBL_ACCESSKEY_SELECT_USERS_TITLE' => 'Select User',
    'LBL_ACCESSKEY_SELECT_USERS_LABEL' => 'Select User',
    'LBL_ACCESSKEY_CLEAR_USERS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_USERS_TITLE' => 'Vider Utilisateur',
    'LBL_ACCESSKEY_CLEAR_USERS_LABEL' => 'Clear User',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_KEY' => 'A',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_TITLE' => 'Sélectionner Compte',
    'LBL_ACCESSKEY_SELECT_ACCOUNTS_LABEL' => 'Select Account',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_TITLE' => 'Supprimer le compte',
    'LBL_ACCESSKEY_CLEAR_ACCOUNTS_LABEL' => 'Supprimer le compte',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_KEY' => 'M',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_TITLE' => 'Sélectionner une campagne',
    'LBL_ACCESSKEY_SELECT_CAMPAIGNS_LABEL' => 'Sélectionner une campagne',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_TITLE' => 'Supprimer la campagne',
    'LBL_ACCESSKEY_CLEAR_CAMPAIGNS_LABEL' => 'Supprimer la campagne',
    'LBL_ACCESSKEY_SELECT_CONTACTS_KEY' => 'C',
    'LBL_ACCESSKEY_SELECT_CONTACTS_TITLE' => 'Select Contact',
    'LBL_ACCESSKEY_SELECT_CONTACTS_LABEL' => 'Select Contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_TITLE' => 'Supprimer le contact',
    'LBL_ACCESSKEY_CLEAR_CONTACTS_LABEL' => 'Supprimer le contact',
    'LBL_ACCESSKEY_SELECT_TEAMSET_KEY' => 'Z',
    'LBL_ACCESSKEY_SELECT_TEAMSET_TITLE' => 'Sélectionner une équipe',
    'LBL_ACCESSKEY_SELECT_TEAMSET_LABEL' => 'Sélectionner une équipe',
    'LBL_ACCESSKEY_CLEAR_TEAMS_KEY' => ' ',
    'LBL_ACCESSKEY_CLEAR_TEAMS_TITLE' => 'Supprimer l\'équipe',
    'LBL_ACCESSKEY_CLEAR_TEAMS_LABEL' => 'Supprimer l\'équipe',
    'LBL_SERVER_RESPONSE_RESOURCES' => 'Ressources utilisées pour construire cette page (requêtes, fichiers)',
    'LBL_SERVER_RESPONSE_TIME_SECONDS' => 'secondes.',
    'LBL_SERVER_RESPONSE_TIME' => 'Temps de réponse du serveur :',
    'LBL_SERVER_MEMORY_BYTES' => 'octets',
    'LBL_SERVER_MEMORY_USAGE' => 'Utilisation de la mémoire serveur : {0} ({1})',
    'LBL_SERVER_MEMORY_LOG_MESSAGE' => 'Utilisation de la mémoire : - module : {0} - action {1}',
    'LBL_SERVER_PEAK_MEMORY_USAGE' => 'Utilisation maximale de la mémoire serveur : {0} ({1})',
    'LBL_SHIPPING_ADDRESS' => 'Adresse de livraison',
    'LBL_SHOW' => 'Voir',
    'LBL_STATE' => 'State:',
    'LBL_STATUS_UPDATED' => 'Votre statut pour cet évènement a été mis à jour !',
    'LBL_STATUS' => 'Status:',
    'LBL_STREET' => 'Rue',
    'LBL_SUBJECT' => 'Sujet',

    'LBL_INBOUNDEMAIL_ID' => 'Compte E-mail (ID)',

    'LBL_ALL_SCHEDULERS' => 'All Schedulers',
    'LBL_LEGACY_SCHEDULERS' => 'Legacy Schedulers',
    'LBL_SCHEDULERS' => 'Planificateurs',
    'LBL_RUN_LEGACY_SCHEDULERS' => 'Running Legacy Schedulers',
    'LBL_LEGACY_SCHEDULERS_RUN_SUCCESSFULLY' => 'Legacy Schedulers run successfully!',
    'LBL_RUN_SCHEDULERS' => 'Running Schedulers',
    'LBL_LEGACY_SCHEDULER_FAILED' => 'Not all Schedulers were successful. See Logs.',
    'LBL_PASSED' => 'Passed',
    'LBL_FAILED' => 'Failed',

    'LBL_SCENARIO_SALES' => 'Sales',
    'LBL_SCENARIO_MARKETING' => 'Marketing',
    'LBL_SCENARIO_FINANCE' => 'Finance',
    'LBL_SCENARIO_SERVICE' => 'Service',
    'LBL_SCENARIO_PROJECT' => 'Gestion de projet',

    'LBL_SCENARIO_SALES_DESCRIPTION' => 'Ce scénario facilite la gestion des articles en vente',
    'LBL_SCENARIO_MAKETING_DESCRIPTION' => 'Ce scénario facilite la gestion des éléments liés au marketing',
    'LBL_SCENARIO_FINANCE_DESCRIPTION' => 'Ce scénario facilite la gestion des éléments liés à la finance',
    'LBL_SCENARIO_SERVICE_DESCRIPTION' => 'Ce scénario facilite la gestion des éléments liés aux services',
    'LBL_SCENARIO_PROJECT_DESCRIPTION' => 'Ce scénario facilite la gestion des éléments liés aux projets',

    'LBL_SYNC' => 'Synchronisation',
    'LBL_TABGROUP_ALL' => 'Tous',
    'LBL_TABGROUP_ACTIVITIES' => 'Activités',
    'LBL_TABGROUP_COLLABORATION' => 'Collaboration',
    'LBL_TABGROUP_MARKETING' => 'Marketing',
    'LBL_TABGROUP_OTHER' => 'Autre',
    'LBL_TABGROUP_SALES' => 'Sales',
    'LBL_TABGROUP_SUPPORT' => 'Assistance',
    'LBL_TASKS' => 'Tâches',
    'LBL_THOUSANDS_SYMBOL' => 'K',
    'LBL_TRACK_EMAIL_BUTTON_LABEL' => 'Archiver E-mail',
    'LBL_TRACK_EMAIL_BUTTON_TITLE' => 'Archiver E-mail',
    'LBL_TOO_MANY_ADDRESSES' => 'You have selected too many email addresses.',
    'LBL_NO_ADDRESSES_SELECTED' => 'Please select an address to send to.',
    'LBL_NOT_ALL_SENT' => 'Not all Emails sent. See logs for more info.',
    'LBL_NOT_VALID_TARGETS' => 'No targets validated to send to.',
    'LBL_ALL_EMAILS_SENT' => 'All test Emails sent successfully',
    'LBL_UNDELETE_BUTTON_LABEL' => 'Restaurer',
    'LBL_UNDELETE_BUTTON_TITLE' => 'Undelete',
    'LBL_UNDELETE_BUTTON' => 'Undelete',
    'LBL_UNDELETE' => 'Undelete',
    'LBL_UNSYNC' => 'Dessynchroniser',
    'LBL_UPDATE' => 'Enregistrer',
    'LBL_USER_LIST' => 'Liste des Utilisateurs',
    'LBL_USERS' => 'Utilisateurs',
    'LBL_VERIFY_EMAIL_ADDRESS' => 'Vérification parmi les messages existants...',
    'LBL_VERIFY_PORTAL_NAME' => 'Vérification parmi les noms de portail existants...',
    'LBL_VIEW_IMAGE' => 'voir',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Failed to create portal user',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Created portal user',

    'LNK_ABOUT' => 'A propos',
    'LNK_ADVANCED_FILTER' => 'Filtre avancé',
    'LNK_BASIC_FILTER' => 'Filtre rapide',
    'LBL_ADVANCED_SEARCH' => 'Filtre avancé',
    'LBL_QUICK_FILTER' => 'Filtre rapide',
    'LBL_BASIC_FILTER' => 'Filtre basique',
    'LBL_QUICK' => 'Rapide',
    'LNK_SEARCH_NONFTS_VIEW_ALL' => 'Voir tous',
    'LNK_CLOSE' => 'Fermer',
    'LBL_MODIFY_CURRENT_FILTER' => 'Modifier le filtre en cours',
    'LNK_SAVED_VIEWS' => 'Recherches sauvegardées',
    'LNK_DELETE' => 'Supprimer',
    'LNK_EDIT' => 'Modifier',
    'LNK_GET_LATEST' => 'Obtenir le dernier',
    'LNK_GET_LATEST_TOOLTIP' => 'Remplacer par la dernière version',
    'LNK_HELP' => 'Aide',
    'LNK_CREATE' => 'Créer',
    'LNK_LIST_END' => 'Fin',
    'LNK_LIST_NEXT' => 'Suivant',
    'LNK_LIST_PREVIOUS' => 'Précédent',
    'LNK_LIST_RETURN' => 'Retour à la Liste',
    'LNK_LIST_START' => 'Continuer',
    'LNK_LOAD_SIGNED' => 'Signé',
    'LNK_LOAD_SIGNED_TOOLTIP' => 'Remplacer par le document signé',
    'LNK_PRINT' => 'Print',
    'LNK_BACKTOTOP' => 'Retour en Haut',
    'LNK_REMOVE' => 'Supprimer',
    'LNK_RESUME' => 'Reprise',
    'LNK_VIEW_CHANGE_LOG' => 'Voir Journal des modifications',
    'LBL_CHANGE_LOG' => 'Journal des modifications',

    'NTC_CLICK_BACK' => 'Merci de cliquer sur le bouton "Précédent" de votre navigateur et de corriger le problème.',
    'NTC_DATE_FORMAT' => '(aaaa-mm-jj)',
    'NTC_DELETE_CONFIRMATION_MULTIPLE' => 'Voulez-vous vraiment supprimer les enregistrements sélectionnés ?',
    'NTC_SEND_QUEUED_CAMPAIGN_EMAILS' => 'Send Next Batch of Queued Campaign Emails?',
    'NTC_SNOOZE_CONFIRMATION' => 'Êtes-vous sûr de vouloir reporter ?',
    'NTC_TEMPLATE_IS_USED' => 'Ce modèle est utilisé par au moins un E-mail lié aux Campagnes. Êtes-vous sûr(e) de vouloir le supprimer ?',
    'NTC_TEMPLATES_IS_USED' => 'Les modèles suivants sont utilisés par des E-mails liés aux Campagnes. Êtes-vous sûr(e) de vouloir les supprimer ?' . PHP_EOL,
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_ABORT_CONFIRMATION' => 'Are you sure you want to abort?',
    'LBL_EMAIL_MARKETING_NOT_SENT' => 'Email Marketing status is not Sent, cannot reschedule',
    'NTC_RESUME_CONFIRMATION' => 'Resuming will re-queue failed recipients and continue sending.',
    'LBL_EMAIL_MARKETING_NOT_PAUSED' => 'Email Marketing status is not Paused, cannot resume',
    'LBL_CAMPAIGN_PAUSED_THRESHOLD' => 'This campaign has been paused —',
    'LBL_CAMPAIGN_PAUSED_DYNAMIC_LABEL' => '{{ fields.email-marketing-pause-reason.value }}',
    'NTC_SCHEDULE_CONFIRMATION' => "When Scheduled, The Sending Process will begin once the Scheduled Run Date has been reached.",
    'NTC_DELETE_TEST_ENTRIES' => 'Scheduling will Delete Test Entries.',
    'NTC_DELETE_TEST_ENTRIES_CONFIRMATION' => 'Are you sure you want to delete test entries?',
    'NTC_PROCEED' => 'Would you like to proceed?',
    'NTC_UNSCHEDULE_CONFIRMATION' => 'Unscheduling will set the Status to "Draft".',
    'NTC_UNSCHEDULE_CONFIRMATION_OTHER' => 'The Sending Process will no longer begin, unless Re-Scheduled.',
    'NTC_DELETE_CONFIRMATION_NUM' => 'Voulez-vous vraiment supprimer les ',
    'NTC_UPDATE_CONFIRMATION_NUM' => 'Voulez-vous vraiment mettre à jour tous les enregistrements sélectionnés (',
    'NTC_DELETE_SELECTED_RECORDS' => ' enregistrement(s) sélectionné(s) ?',
    'NTC_LOGIN_MESSAGE' => 'Merci de vous authentifier.',
    'NTC_NO_ITEMS_DISPLAY' => 'none',
    'NTC_REMOVE_CONFIRMATION' => 'Voulez-vous vraiment supprimer cette relation?',
    'NTC_REQUIRED' => 'Indicates required field',
    'NTC_TIME_FORMAT' => '(24:00)',
    'NTC_WELCOME' => 'Bienvenue',
    'NTC_YEAR_FORMAT' => '(aaaa)',
    'WARN_UNSAVED_CHANGES' => 'Vous êtes sur le point de quitter cet enregistrement sans sauvegarder vos modifications. Etes-vous sûr de vouloir quitter cet enregistrement ?',
    'ERROR_NO_RECORD' => 'Erreur de récupération de l&#39;enregistrement. Cet enregistrement est peut être supprimé ou vous n&#39;avez pas le droit de le visualiser.',
    'LBL_TEMPLATE_CONFIRMATION' => 'Apply new Email Template? (This will override your current email body and subject field)',
    'WARN_BROWSER_VERSION_WARNING' => '<p><b>Attention :</b>Le navigateur ou la version du navigateur que vous utilisez n&#39;est pas supporté.</p><p>Les navigateurs suivants sont recommandés :</p><ul><li>Internet Explorer 9</li><li>Mozilla Firefox 14, 15 </li><li>Safari 6</li><li>Google Chrome 22 (ou dernière version)</li></ul>',
    'WARN_BROWSER_IE_COMPATIBILITY_MODE_WARNING' => '<b>Attention :</b> Votre navigateur est en mode de compatibilité ce qui n&#39;est pas supporté.',
    'ERROR_TYPE_NOT_VALID' => 'Erreur. Ce type n&#39;est pas valide.',
    'ERROR_NO_BEAN' => 'Echec pour obtenir un bean.',
    'LBL_DUP_MERGE' => 'Recherche de doublons',
    'LBL_MANAGE_SUBSCRIPTIONS' => 'Newsletters',
    'LBL_MANAGE_SUBSCRIPTIONS_FOR' => 'Gestion des Newsletters de',
    // Ajax status strings
    'LBL_LOADING' => 'Chargement...',
    'LBL_SEARCHING' => 'Recherche en cours...',
    'LBL_SAVING_LAYOUT' => 'Sauvegarde de la mise en page...',
    'LBL_SAVED_LAYOUT' => 'Nouvelle disposition sauvegardée.',
    'LBL_SAVED' => 'Sauvegardé',
    'LBL_SAVING' => 'Sauvegarde en cours',
    'LBL_DISPLAY_COLUMNS' => 'Colonnes affichées',
    'LBL_HIDE_COLUMNS' => 'Colonnes masquées',
    'LBL_COLUMNS' => 'Colonnes',
    'LBL_SEARCH_CRITERIA' => 'Critère de recherche',
    'LBL_SAVED_VIEWS' => 'Vues sauvegardées',
    'LBL_PROCESSING_REQUEST' => 'Traitement en cours...',
    'LBL_REQUEST_PROCESSED' => 'Done',
    'LBL_AJAX_FAILURE' => 'Erreur Ajax',
    'LBL_MERGE_DUPLICATES' => 'Fusionner',
    'LBL_SAVED_FILTER_SHORTCUT' => 'Mes filtres',
    'LBL_SEARCH_POPULATE_ONLY' => 'Lancer une recherche en utilisant le formulaire de recherche ci-dessus',
    'LBL_DETAILVIEW' => 'Vue Détail',
    'LBL_LISTVIEW' => 'Vue Liste',
    'LBL_EDITVIEW' => 'Vue Edition',
    'LBL_BILLING_STREET' => 'Rue (adresse facturation) :',
    'LBL_SHIPPING_STREET' => 'Street:',
    'LBL_SEARCHFORM' => 'Formulaire de recherche',
    'LBL_SAVED_SEARCH_ERROR' => 'Merci de fournir un nom pour cette vue.',
    'LBL_DISPLAY_LOG' => 'Afficher les Logs',
    'ERROR_JS_ALERT_SYSTEM_CLASS' => 'System',
    'ERROR_JS_ALERT_TIMEOUT_TITLE' => 'Session Expirée',
    'ERROR_JS_ALERT_TIMEOUT_MSG_1' => 'Votre session va expirer dans 2 minutes. Veuillez sauvegarder votre travail.',
    'ERROR_JS_ALERT_TIMEOUT_MSG_2' => 'Votre session a expiré.',
    'MSG_JS_ALERT_MTG_REMINDER_AGENDA' => "\nAgenda: ",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING' => 'Réunion',
    'MSG_JS_ALERT_MTG_REMINDER_CALL' => 'Appel',
    'MSG_JS_ALERT_MTG_REMINDER_TIME' => 'Heure : ',
    'MSG_JS_ALERT_MTG_REMINDER_LOC' => 'Emplacement : ',
    'MSG_JS_ALERT_MTG_REMINDER_DESC' => 'Description : ',
    'MSG_JS_ALERT_MTG_REMINDER_STATUS' => 'Statut : ',
    'MSG_JS_ALERT_MTG_REMINDER_RELATED_TO' => 'Relatif à : ',
    'MSG_JS_ALERT_MTG_REMINDER_CALL_MSG' => "\nClick OK to view this call or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_MEETING_MSG' => "\nClick OK to view this meeting or click Cancel to dismiss this message.",
    'MSG_JS_ALERT_MTG_REMINDER_NO_EVENT_NAME' => 'Evènement',
    'MSG_JS_ALERT_MTG_REMINDER_NO_DESCRIPTION' => 'L’événement n\'est pas configuré.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_LOCATION' => 'L\'emplacement n\'est pas défini.',
    'MSG_JS_ALERT_MTG_REMINDER_NO_START_DATE' => 'La date de début n\'est pas définie.',
    'MSG_LIST_VIEW_NO_RESULTS_BASIC' => 'Aucun résultat.',
    'MSG_LIST_VIEW_NO_RESULTS_CHANGE_CRITERIA' => 'Aucun résultat trouvé... Peut-être en changeant un critère de recherche et essayer à nouveau ?',
    'MSG_LIST_VIEW_NO_RESULTS' => 'Aucun résultat pour <item1>',
    'MSG_LIST_VIEW_NO_RESULTS_SUBMSG' => 'Créé <item1> comme un nouveau <item2>',
    'MSG_LIST_VIEW_CHANGE_SEARCH' => 'ou modifier vos critères de recherche',
    'MSG_EMPTY_LIST_VIEW_NO_RESULTS' => 'Vous n&#39;avez aucun résultat accessible. <item2> ou réalisez un <item3> maintenant.',

    // contextMenu strings
    'LBL_ADD_TO_FAVORITES' => 'Ajouter à mes favoris',
    'LBL_CREATE_CONTACT' => 'Créer Contact',
    'LBL_CREATE_CASE' => 'Créer un cas',
    'LBL_CREATE_NOTE' => 'Créer Note',
    'LBL_CREATE_OPPORTUNITY' => 'Créer Affaire',
    'LBL_SCHEDULE_CALL' => 'Journal d\'appel',
    'LBL_SCHEDULE_MEETING' => 'Organiser une réunion',
    'LBL_CREATE_TASK' => 'Créer Tâche',
    //web to lead
    'LBL_GENERATE_WEB_TO_LEAD_FORM' => 'Afficher le Formulaire',
    'LBL_SAVE_WEB_TO_LEAD_FORM' => 'Enregistrer le formulaire Web',
    'LBL_AVAILABLE_FIELDS' => 'Champs disponibles',
    'LBL_FIRST_FORM_COLUMN' => 'Première colonne du formulaire',
    'LBL_SECOND_FORM_COLUMN' => 'Seconde colonne du formulaire',
    'LBL_ASSIGNED_TO_REQUIRED' => 'Champ obligatoire manquant : attribué à',
    'LBL_RELATED_CAMPAIGN_REQUIRED' => 'Champ obligatoire manquant : campagne associée',
    'LBL_TYPE_OF_PERSON_FOR_FORM' => 'Formulaire web à créer ',
    'LBL_TYPE_OF_PERSON_FOR_FORM_DESC' => 'Envoyer ce formulaire créera ',

    'LBL_ADD_ALL_LEAD_FIELDS' => 'Ajouter tous les champs',
    'LBL_RESET_ALL_LEAD_FIELDS' => 'Réinitialiser tous les champs',
    'LBL_REMOVE_ALL_LEAD_FIELDS' => 'Supprimer tous les champs',
    'LBL_NEXT_BTN' => 'Suivant',
    'LBL_ONLY_IMAGE_ATTACHMENT' => 'Seuls les fichiers de type image peuvent être joints : JPG, PNG.',
    'LBL_TRAINING' => 'Forum communautaire',
    'ERR_MSSQL_DB_CONTEXT' => 'modification du contexte de la base de données en',
    'ERR_MSSQL_WARNING' => 'Attention :',

    //Meta-Data framework
    'ERR_CANNOT_CREATE_METADATA_FILE' => 'Erreur : Fichier [[file]] manquant.  Impossible de le créer car il n&#39;y a pas de fichier HTML correspondant.',
    'ERR_CANNOT_FIND_MODULE' => 'Erreur : Ce Module [module] n&#39;existe pas.',
    'LBL_ALT_ADDRESS' => 'Autres adresses :',
    'ERR_SMARTY_UNEQUAL_RELATED_FIELD_PARAMETERS' => 'Erreur : Le nombre d&#39;arguments est différent entre les éléments &#39;key&#39; et &#39;copy&#39; dans le tableau des paramètres d&#39;affichage.',

    /* MySugar Framework (for Home and Dashboard) */
    'LBL_DASHLET_CONFIGURE_GENERAL' => 'General',
    'LBL_DASHLET_CONFIGURE_FILTERS' => 'Filtres',
    'LBL_DASHLET_CONFIGURE_MY_ITEMS_ONLY' => 'Mes Eléments seulement',
    'LBL_DASHLET_CONFIGURE_TITLE' => 'Titre',
    'LBL_DASHLET_CONFIGURE_DISPLAY_ROWS' => 'Afficher les lignes',

    // MySugar status strings
    'LBL_MAX_DASHLETS_REACHED' => 'Vous avez atteint le nombre maximal de dashlets autorisés par votre administrateur. Merci de supprimer un dashlet pour en ajouter d\'autres.',
    'LBL_ADDING_DASHLET' => 'Ajout de Dashlet...',
    'LBL_ADDED_DASHLET' => 'Dashlet ajouté',
    'LBL_REMOVE_DASHLET_CONFIRM' => 'Etes-vous certain de vouloir supprimer le Dashlet ?',
    'LBL_REMOVING_DASHLET' => 'Suppression du Dashlet...',
    'LBL_REMOVED_DASHLET' => 'Dashlet supprimé',
    'LBL_MAX_DASHLET_COLUMNS' => "Maximum of %s columns can be displayed.",
    'LBL_RETRIEVING_XML_DATA' => "There was a problem retrieving the XML data:\n",

    // MySugar Menu Options

    'LBL_LOADING_PAGE' => 'Chargement en cours, veuillez patienter...',

    'LBL_RELOAD_PAGE' => 'Veuillez <a href="javascript: window.location.reload()"> recharger la fenêtre</a> pour utiliser ce Dashlet.',
    'LBL_ADD_DASHLETS' => 'Ajouter un Dashlet',
    'LBL_CLOSE_DASHLETS' => 'Fermer',
    'LBL_OPTIONS' => 'Options',
    'LBL_1_COLUMN' => '1 colonne',
    'LBL_2_COLUMN' => '2 colonnes',
    'LBL_3_COLUMN' => '3 colonnes',
    'LBL_PAGE_NAME' => 'Nom de l&#39;onglet',

    'LBL_SEARCH_RESULTS' => 'Search Results',
    'LBL_SEARCH_MODULES' => 'Modules',
    'LBL_SEARCH_TOOLS' => 'Outils',
    'LBL_SEARCH_HELP_TITLE' => 'Conseils de recherche',
    /* End MySugar Framework strings */

    'LBL_NO_IMAGE' => 'Pas d&#39;image',

    'LBL_MODULE' => 'Module',

    //adding a label for address copy from left
    'LBL_COPY_ADDRESS_FROM_LEFT' => 'Copier l&#39;adresse depuis la gauche :',
    'LBL_SAVE_AND_CONTINUE' => 'Sauvegarder et aller au suivant',

    'LBL_SEARCH_HELP_TEXT' => '<p><br /><strong>Gestion des Multi-sélections</strong></p><ul><li>Cliquer sur les valeurs pour sélectionner les attributs.</li><li>Ctrl-clic pour faire une sélection multiple. Pour les utilisateurs Mac utiliser CMD-clic.</li><li>Pour sélectionner toutes les valeurs entres deux attributs cliquer sur la première valeur et cliquer sur la dernière valeur en maintenant la touche shift enfoncée.</li></ul><p><strong>Recherche avancée &amp; options de mise en page</strong><br><br>Utiliser les <b>Options</b> afin de sauvegarder un jeu de paramètres de recherche et/ou une mise en page personnalisée en vue Liste pour obtenir rapidement la recherche désirée les prochaines fois. Vous pouvez sauvegarder un nombre illimité de recherches et mises en page personnalisées. Le nom de toutes les recherches sauvegardées apparaît dans la liste des recherches sauvegardées, avec la dernière recherche en haut de la liste.<br><br>Pour personnaliser la mise en page de la Vue Liste, utiliser les colonnes cachées &amp; colonnes visibles afin de sélectionner les champs à afficher dans les résultats de recherche. Par exemple, vous pouvez afficher ou cacher des détails comme le nom de l&#39;enregistrement, l&#39;utilisateur assigné et l&#39;équipe assignée dans les résultats de recherche. Pour ajouter une colonne à la vue Liste, sélectionner les champs dans la liste colonnes cachées et utiliser la flèche gauche pour le déplacer dans la liste colonnes visibles. Pour supprimer une colonne de la vue Liste, sélectionnez-la dans la liste des colonnes affichées et utiliser la flèche droite pour la déplacer dans la liste des colonnes cachées.<br><br>Si vous sauvegardez les paramètres de mise en page, vous pourrez les charger à tout moment pour voir les résultats de recherche dans la mise en page personnalisée.<br><br>Pour sauvegarder et mettre à jour une recherche et/ou une mise en page:<ol><li>Entrer un nom pour les résultats de recherche dans le champ <b>Sauvegarder cette recherche comme</b> et cliquer sur <b>Sauvegarder</b>. Le nom apparaît maintenant dans la liste des Recherches Sauvegardées adjacente au bouton <b>Vider</b>.</li><li>Pour voir une recherche sauvegardée, sélectionnez-en une dans le liste des Recherches Sauvegardées. Les résultats de recherche sont affichés dans la Vue Liste.</li><li>Pour mettre à jour les propriétés d&#39;une recherche sauvegardée, sélectionnez là dans la liste, entrer le nouveau critère de recherche et/ou les options de mise en page dans la zone de Recherche Avancée, et cliquer sur <b>Mettre à jour</b> puis sur <b>Modifier la Recherche Courante</b>.</li><li>Pour supprimer une recherche sauvegardée, sélectionner-la dans la liste des Recherches Sauvegardées, cliquer sur <b>Supprimer</b> puis sur <b>Modifier la Recherche Courante</b>, et ensuite cliquer sur <b>OK</b> pour confirmer la suppression.</li></ol>',

    //resource management
    'ERR_QUERY_LIMIT' => 'Erreur : Le nombre limite de requêtes ($limit) a été atteint pour le module $module .',
    'ERROR_NOTIFY_OVERRIDE' => 'Erreur : ResourceObserver->notify() doit être surchargé.',

    //tracker labels
    'ERR_MONITOR_FILE_MISSING' => 'Erreur : Impossible de faire un suivi car le fichier metadata est vide ou n&#39;existe pas.',
    'ERR_MONITOR_NOT_CONFIGURED' => 'Erreur : Aucun suivi n&#39;a été configuré pour le nom demandé',
    'ERR_UNDEFINED_METRIC' => 'Erreur : Impossible de positionner une valeur pour une métrique indéfinie',
    'ERR_STORE_FILE_MISSING' => 'Erreur : Impossible de trouver le fichier de stockage de l&#39;implémentation',

    'LBL_MONITOR_ID' => 'Identifiant de Suivi',
    'LBL_USER_ID' => 'Utilisateur (ID)',
    'LBL_MODULE_NAME' => 'Nom du module',
    'LBL_ITEM_ID' => 'Identifiant Enregistrement',
    'LBL_ITEM_SUMMARY' => 'Description Enregistrement',
    'LBL_ACTION' => 'Action',
    'LBL_SESSION_ID' => 'Identifiant Session',
    'LBL_BREADCRUMBSTACK_CREATED' => 'BreadCrumbStack crée pour l\'ID utilisateur {0}',
    'LBL_VISIBLE' => 'Enregistrement Visible',
    'LBL_DATE_LAST_ACTION' => 'Date dernière action',

    //jc:#12287 - For javascript validation messages
    'MSG_IS_NOT_BEFORE' => 'n&#39;est pas avant',
    'MSG_IS_MORE_THAN' => 'est plus grand que',
    'MSG_SHOULD_BE' => 'devrait être',
    'MSG_OR_GREATER' => 'ou plus grand que',

    'LBL_LIST' => 'Listing',
    'LBL_CREATE_BUG' => 'Créer Bug',

    'LBL_OBJECT_IMAGE' => 'Image',
    //jchi #12300
    'LBL_MASSUPDATE_DATE' => 'Sélectionner une date',

    'LBL_VALIDATE_RANGE' => 'n&#39;est pas dans la plage valide',
    'LBL_CHOOSE_START_AND_END_DATES' => 'Veuillez choisir à la fois une date de début et de fin',
    'LBL_CHOOSE_START_AND_END_ENTRIES' => 'Veuillez choisir à la fois des valeurs de début et de fin',

    //jchi #  20776
    'LBL_DROPDOWN_LIST_ALL' => 'Tous',

    //Connector
    'ERR_CONNECTOR_FILL_BEANS_SIZE_MISMATCH' => 'Erreur : Le nombre d&#39;entrées paramétrées dans l&#39;objet ne correspond pas avec le nomdre d&#39;entrées présentes dans le résultat obtenu depuis le connecteur.',
    'ERR_MISSING_MAPPING_ENTRY_FORM_MODULE' => 'Erreur : L\'association des champs pour ce module est manquant.',
    'ERROR_UNABLE_TO_RETRIEVE_DATA' => 'Erreur : Impossible de récupérer les données pour le connecteur {0}. Le service est peut être inaccessible ou les paramètres de configuration que vous avez spécifiés sont peut être invalides. Message d\'erreur du connecteur : ({1}).',

    // fastcgi checks
    'LBL_FASTCGI_LOGGING' => 'Pour une utilisation optimale de IIS/FastCGI, positionnez le paramètre fastcgi.logging à 0 dans votre fichier php.ini.',

    //Collection Field
    'LBL_COLLECTION_NAME' => 'Nom',
    'LBL_COLLECTION_PRIMARY' => 'Primary',
    'ERROR_MISSING_COLLECTION_SELECTION' => 'Champ obligatoire vide',

    //MB -Fixed Bug #32812 -Max
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_DESCRIPTION' => 'Description',

    'LBL_YESTERDAY' => 'hier',
    'LBL_TODAY' => 'aujourd&#39;hui',
    'LBL_TOMORROW' => 'demain',
    'LBL_NEXT_WEEK' => 'prochaine semaine',
    'LBL_NEXT_MONDAY' => 'prochain lundi',
    'LBL_NEXT_FRIDAY' => 'prochain vendredi',
    'LBL_TWO_WEEKS' => '2 semaines',
    'LBL_NEXT_MONTH' => 'prochain mois',
    'LBL_FIRST_DAY_OF_NEXT_MONTH' => 'premier jour du mois prochain',
    'LBL_THREE_MONTHS' => '3 mois',
    'LBL_SIXMONTHS' => '6 mois',
    'LBL_NEXT_YEAR' => 'année prochaine',

    //Datetimecombo fields
    'LBL_HOURS' => 'Hours',
    'LBL_MINUTES' => 'Minutes',
    'LBL_MERIDIEM' => 'Méridien',
    'LBL_DATE' => 'Date',
    'LBL_DASHLET_CONFIGURE_AUTOREFRESH' => 'Rafraîchissement automatique',

    'LBL_DURATION_DAY' => 'jour',
    'LBL_DURATION_HOUR' => 'heures',
    'LBL_DURATION_MINUTE' => 'minute',
    'LBL_DURATION_DAYS' => 'jours',
    'LBL_DURATION_HOURS' => 'Durée (heures)',
    'LBL_DURATION_MINUTES' => 'Durée (minutes)',

    //Calendar widget labels
    'LBL_CHOOSE_MONTH' => 'Choisir le mois',
    'LBL_ENTER_YEAR' => 'Entrer l&#39;année',
    'LBL_ENTER_VALID_YEAR' => 'Veuillez saisir une année valide',

    //File write error label
    'ERR_FILE_WRITE' => 'Erreur : impossible d&#39;écrire le fichier {0}. Veuillez vérifier les droits et permissions sur les fichiers.',
    'ERR_FILE_NOT_FOUND' => 'Erreur : impossible de charger le fichier {0}. Veuillez vérifier les droits et permissions sur les fichiers.',

    'LBL_AND' => 'et',

    // File fields
    'LBL_SEARCH_EXTERNAL_API' => 'Fichier issu d\'une source externe',
    'LBL_EXTERNAL_SECURITY_LEVEL' => 'Sécurité',

    //IMPORT SAMPLE TEXT
    'LBL_IMPORT_SAMPLE_FILE_TEXT' => '"Ceci est un fichier d&#39;import basique qui fournit un exemple du contenu attendu d&#39;un fichier prêt à être importé."<br />"Ce fichier est un fichier .csv délimité par un point-virgule utilisant des guillemets comme qualificateur de champ."<br /><br />"La ligne d&#39;entête est la toute première ligne du fichier et elle contient le nom des champs tels que vous les verriez dans l&#39;application."<br />"Ces libellés sont utilisés pour le mapping de données du fichier avec les données de votre SuiteCRM."<br /><br />"Remarques: Le noms des champs en base de données peuvent aussi être utilisés en ligne d&#39;entête. Ceci est pratique si vous utilisez phpMyAdmin ou un autre outil de gestion de base de données pour fournir des données à importer."<br />"L&#39;ordre des champs n&#39;est pas critique puisque le process d&#39;import fait correspondre les données à partir des champs définis dans la ligne d&#39;entête."<br /><br /><br />"Pour utiliser ce modèle de fichier, faites les choses suivantes:"<br />"1. Enlever les données d&#39;exemple"<br />"2. Enlever le texte d&#39;aide que vous êtes en train de lire"<br />"3. Insérer vos propres données dans les colonnes appropriées"<br />"4. Sauvegarder le fichier sur votre ordinateur local"<br />"5. Cliquez sur les options d&#39;import du menu d&#39;actions dans l&#39;application et choisissez le fichier à transmettre"',
    //define labels to be used for overriding local values during import/export

    'LBL_NOTIFICATIONS_NONE' => 'Aucune notification',
    'ERR_NOTIFICATIONS_MARK_AS_READ' => 'Erreur lors de la tentative de marquer les notifications comme lues',
    'ERR_FIELD_LOGIC_BACKEND_CALCULATION' => 'Erreur en tentant de récupérer la valeur',
    'LBL_FAILED_TO_UPDATE_TEMPLATE_VARIABLES' => 'Failed to update template variables',
    'LBL_ALT_SORT_DESC' => 'Tri descendant',
    'LBL_ALT_SORT_ASC' => 'Tri Ascendant',
    'LBL_ALT_SORT' => 'Sort',
    'LBL_ALT_SHOW_OPTIONS' => 'Afficher options',
    'LBL_ALT_HIDE_OPTIONS' => 'Masquer options',
    'LBL_ALT_MOVE_COLUMN_LEFT' => 'Déplacer l&#39;entrée vers la liste de gauche',
    'LBL_ALT_MOVE_COLUMN_RIGHT' => 'Déplacer l&#39;entrée vers la liste de droite',
    'LBL_ALT_MOVE_COLUMN_UP' => 'Déplacer l&#39;entrée vers le haut de la liste',
    'LBL_ALT_MOVE_COLUMN_DOWN' => 'Déplacer l&#39;entrée vers le bas de la liste',
    'LBL_ALT_INFO' => 'Information',
    'MSG_DUPLICATE' => 'L&#39;enregistrement {0} que vous allez créer est probablement un doublon d&#39;un enregistrement {0} existant. Les enregistrements {1} contenant le même nom sont listés ci-dessous.<br>Cliquez sur Créer {1} pour créer cet enregistrement {0}, ou sélectionnez un enregistrement {0} listé ci-dessous.',
    'MSG_SHOW_DUPLICATES' => 'L&#39;enregistrement {0} que vous allez créer est probablement un doublon d&#39;un enregistrement {0} existant. Les enregistrements {1} contenant le même nom sont listés ci-dessous.  Cliquez sur Sauvegarder pour créer cet enregistrement {0}, ou sur Annuler pour retourner au module sans créer cet enregistrement.',
    'LBL_EMAIL_TITLE' => 'adresse e-mail',
    'LBL_EMAIL_OPT_TITLE' => 'adresse E-mail désinscrite',
    'LBL_EMAIL_INV_TITLE' => 'adresse E-mail invalide',
    'LBL_EMAIL_PRIM_TITLE' => 'Transformer en adresse E-mail principale',
    'LBL_SELECT_ALL_TITLE' => 'Sélectionner tous',
    'LBL_SELECT_THIS_ROW_TITLE' => 'Sélectionner cette ligne',

    //for upload errors
    'UPLOAD_ERROR_TEXT' => 'ERREUR : Une erreur est survenue pendant le transfert. Code erreur : {0} - {1}',
    'UPLOAD_ERROR_TEXT_SIZEINFO' => 'ERREUR : Une erreur est survenue pendant le transfert. Code erreur : {0} - {1}. La variable PHP upload_maxsize a pour valeur {2} ',
    'UPLOAD_ERROR_HOME_TEXT' => 'ERREUR : Une erreur est survenue pendant votre transfert, veuillez contacter un administrateur pour obtenir de l&#39;aide.',
    'UPLOAD_MAXIMUM_EXCEEDED' => 'La taille de l&#39;upload ({0} octets) dépasse le maximum autorisé : {1} octets',
    'UPLOAD_REQUEST_ERROR' => 'Une erreur est survenue. Veuillez rafraîchir cette page et essayer de nouveau',

    //508 used Access Keys
    'LBL_EDIT_BUTTON_KEY' => 'i',
    'LBL_EDIT_BUTTON_LABEL' => 'Modifier',
    'LBL_EDIT_BUTTON_TITLE' => 'Modifier',
    'LBL_DUPLICATE_BUTTON_KEY' => 'u',
    'LBL_DUPLICATE_BUTTON_LABEL' => 'Doublon',
    'LBL_DUPLICATE_BUTTON_TITLE' => 'Doublon',
    'LBL_DISABLE_USER_2FA' => 'Disable 2FA',
    'LBL_DELETE_BUTTON_KEY' => 'd',
    'LBL_DELETE_BUTTON_LABEL' => 'Supprimer',
    'LBL_DELETE_BUTTON_TITLE' => 'Supprimer',
    'LBL_BULK_ACTION_BUTTON_LABEL' => 'Action par lot',
    'LBL_BULK_ACTION_BUTTON_LABEL_MOBILE' => 'Action',
    'LBL_TOO_FEW_SELECTED' => 'Nombre d\'enregistrements sélectionnés invalide. Vous devez sélectionner au minimum {min} enregistrements.',
    'LBL_TOO_MANY_SELECTED' => 'Nombre d\'enregistrements sélectionnés invalide. Vous devez sélectionner au maximum {max} enregistrements.',
    'LBL_SELECT_ALL_NOT_ALLOWED' => 'La sélection de tous les enregistrements n\'est pas disponible pour cette action. Veuillez sélectionner des enregistrements individuels.',
    'LBL_MISSING_HANDLER_DATA' => 'Erreur inattendue. Il manque des données de gestion des actions de masse dans réponse',
    'LBL_MISSING_HANDLER' => 'Erreur inattendue. Aucun gestionnaire défini pour l\'action de sélection en masse',
    'LBL_MISSING_HANDLER_DATA_ROUTE' => 'Erreur inattendue. Route d\'action de masse manquante',
    'LBL_ACTION_ERROR' => 'Erreur inattendue lors de l\'appel de l\'action',
    'LBL_BULK_ACTION_ERROR' => 'Erreur inattendue lors de l\'appel de l\'action',
    'LBL_BULK_ACTION_DELETE_SUCCESS' => 'Enregistrement(s) supprimé(s) avec succès',
    'LBL_BULK_ACTION_MASS_UPDATE_CONFIRMATION' => 'Êtes-vous sûr de vouloir mettre à jour les enregistrements sélectionnés ?',
    'LBL_BULK_ACTION_MASS_UPDATE_SUCCESS' => 'Tous les enregistrements ont été mis à jour avec succès',
    'LBL_BULK_ACTION_MASS_UPDATE_PARTIAL_SUCCESS' => 'Succès partiel. Certains enregistrements n\'ont pas été mis à jour. Veuillez vérifier le journal',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_FIELDS' => 'Aucun champ à mettre à jour',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_RECORDS' => 'Aucun enregistrement à mettre à jour',
    'LBL_BULK_ACTION_MASS_UPDATE_NO_ACLS' => 'Privilège insuffisant, sauvegarde non autorisée',
    'LBL_UNEXPECTED_ERROR' => 'Erreur inattendue. Impossible d\'effectuer l\'action.',
    'LBL_RECORD_DELETE_SUCCESS' => 'Enregistrement supprimé avec succès',
    'LBL_RECORD_DELETE_ALL_SUCCESS' => 'Enregistrements supprimés avec succès',
    'LBL_RECORD_SNOOZE_SUCCESS' => 'Notification reportée',
    'LBL_ERROR_SAVING' => 'Une erreur s\'est produite lors de l\'enregistrement des données.',
    'LBL_SAVE_BUTTON_KEY' => 'a',
    'LBL_SAVE_BUTTON_LABEL' => 'Sauvegarder',
    'LBL_NEW_EM_SURVEY' => 'New Survey Email',
    'LBL_NEW_EM_TRANSACTIONAL' => 'New Transactional Email',
    'LBL_NEW_EM_MARKETING' => 'New Marketing Email',
    'LBL_NEW_SURVEY' => 'New Survey',
    'LBL_WEB_TO_LEAD' => 'New Web to Person Form',
    'LBL_TYPE' => 'Type',
    'LBL_DATE_START' => 'Date de début',
    'LBL_SEND_DATE' => 'Send Date',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Schedule',
    'LBL_UNABLE_TO_UNSCHEDULE' => 'Unable to unschedule as not scheduled',
    'LBL_SAVE_BUTTON_TITLE' => 'Sauvegarder',
    'LBL_SAVE_CONTINUE_LABEL' => 'Save And Continue',
    'LBL_CANCEL_BUTTON_KEY' => 'l',
    'LBL_CANCEL_BUTTON_LABEL' => 'Annuler',
    'LBL_CANCEL_BUTTON_TITLE' => 'Annuler',
    'LBL_FIRST_INPUT_EDIT_VIEW_KEY' => '7',
    'LBL_ADV_SEARCH_LNK_KEY' => '8',
    'LBL_FIRST_INPUT_SEARCH_KEY' => '9',

    'ANNUAL_REVENUE_BY_ACCOUNTS' => 'Revenu annuel par comptes',
    'PIPELINE_BY_SALES_STAGE' => 'Pipeline By Sales Stage',
    'LEADS_BY_SOURCE' => 'Prospects par origine',
    'LEADS_BY_STATUS' => 'Prospects par statut',
    'ACCOUNT_TYPES_PER_MONTH' => 'Nouveaux comptes par mois',

    'ERR_CONNECTOR_NOT_ARRAY' => 'tableau du connecteur dans {0} défini incorrectement ou est vide et ne peut être utilisé.',
    'ERR_SUHOSIN' => 'Le flux de téléchargement est bloqué par Suhosin, veuillez ajouter &quot;télécharger&quot; à suhosin.executor.include.whitelist (Voir suitecrm.log pour plus d\'informations)',
    'ERR_BAD_RESPONSE_FROM_SERVER' => 'Réponse erronée du serveur',
    'LBL_ACCOUNT_PRODUCT_QUOTE_LINK' => 'Quote',
    'LBL_ACCOUNT_PRODUCT_SALE_PRICE' => 'Prix de vente',
    'LBL_EMAIL_CHECK_INTERVAL_DOM' => array(
        '-1' => 'Manuellement',
        '5' => 'Every 5 minutes',
        '15' => 'Toutes les 15 minutes',
        '30' => 'Toutes les 30 minutes',
        '60' => 'Toutes les heures',
    ),

    'ERR_A_REMINDER_IS_EMPTY_OR_INCORRECT' => 'Erreur un rappel est vide ou incorrect',
    'ERR_REMINDER_IS_NOT_SET_POPUP_OR_EMAIL' => 'Rappel par popup ou par E-mail non défini.',
    'ERR_NO_INVITEES_FOR_REMINDER' => 'Aucun invité pour ce rappel.',
    'LBL_DELETE_REMINDER_CONFIRM' => 'Le rappel n’inclut pas les invités, vous souhaitez supprimer le rappel ?',
    'LBL_DELETE_REMINDER' => 'Supprimer le rappel',
    'LBL_OK' => 'Ok',
    'LBL_PROCEED' => 'Poursuivre',

    'LBL_COLUMNS_FILTER_HEADER_TITLE' => 'Choisissez les colonnes',
    'LBL_COLUMN_CHOOSER' => 'Sélecteur de colonne',
    'LBL_SAVE_CHANGES_BUTTON_TITLE' => 'Enregistrer les modifications',
    'LBL_DISPLAYED' => 'Affiché',
    'LBL_HIDDEN' => 'Caché',
    'ERR_EMPTY_COLUMNS_LIST' => 'Au moins, un élément nécessaire',

    'LBL_FILTER_HEADER_TITLE' => 'Filter',

    'LBL_CATEGORY' => 'Category',
    'LBL_LIST_CATEGORY' => 'Category',
    'ERR_FACTOR_TPL_INVALID' => 'Le message d’authentification est invalide, veuillez contacter votre administrateur.',
    'LBL_SUBTHEMES' => 'Style',
    'LBL_SUBTHEME_OPTIONS_DAWN' => 'Aurore',
    'LBL_SUBTHEME_OPTIONS_DAY' => 'Jour',
    'LBL_SUBTHEME_OPTIONS_DUSK' => 'Crépuscule',
    'LBL_SUBTHEME_OPTIONS_NIGHT' => 'Nuit',
    'LBL_SUBTHEME_OPTIONS_NOON' => 'Midi',

    'LBL_CONFIRM_DISREGARD_DRAFT_TITLE' => 'Ignorer ce brouillon',
    'LBL_CONFIRM_DISREGARD_DRAFT_BODY' => 'Cette opération supprimera le contenu du message. Voulez-vous continuer ?',
    'LBL_CONFIRM_DISREGARD_EMAIL_TITLE' => 'Fermer la fenêtre de composition',
    'LBL_CONFIRM_DISREGARD_EMAIL_BODY' => 'En fermant cette fenêtre, toutes les informations saisies seront perdues. Êtes-vous de vouloir continuer ?',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_TITLE' => 'Appliquer un modèle d\'E-mail',
    'LBL_CONFIRM_APPLY_EMAIL_TEMPLATE_BODY' => 'Cette opération remplacera le corps du message. Voulez-vous continuer ?',

    'LBL_CONFIRM_OPT_IN_TITLE' => 'Confirmer l\'abonnement',
    'LBL_OPT_IN_TITLE' => 'Consentement',
    'LBL_CONFIRM_OPT_IN_DATE' => 'Date de la confirmation d\'activation',
    'LBL_CONFIRM_OPT_IN_SENT_DATE' => 'Date d\'envoi de confirmation d\'activation',
    'LBL_CONFIRM_OPT_IN_FAIL_DATE' => 'Date d\'échec de l\'activation confirmée',
    'LBL_CONFIRM_OPT_IN_TOKEN' => 'Confirmer le jeton de consentement',
    'ERR_OPT_IN_TPL_NOT_SET' => 'Le modèle de message pour l\'activation n\'est pas défini. Veuillez le configurer dans les paramètres de messagerie.',
    'ERR_OPT_IN_RELATION_INCORRECT' => 'L\'activation impose que l\'adresse électronique soit liée au compte / contact / prospect / cible',

    'LBL_SECURITYGROUP_NONINHERITABLE' => 'Groupe non héritable',
    'LBL_PRIMARY_GROUP' => "Groupe primaire",

    // footer
    'LBL_SUITE_TOP' => 'Back to top',
    'LBL_SUITE_SUPERCHARGED' => 'Suralimenté par SuiteCRM',
    'LBL_SUITE_POWERED_BY' => 'Propulsé par SugarCRM',
    'LBL_SUITE_DESC1' => 'SuiteCRM has been written and assembled by <a href="https://suitecrm.com/">SuiteCRM Ltd</a>. The Program is provided AS IS, without warranty. Licensed under AGPLv3.',
    'LBL_SUITE_DESC2' => 'Ce programme est un logiciel libre; vous pouvez le redistribuer et / ou le modifier selon les termes de la GNU Affero General Public License version 3 publiée par Free Software Foundation, y compris l\'autorisation supplémentaire indiqué dans l\'en-tête de code source.',
    'LBL_SUITE_DESC3' => 'SuiteCRM is a trademark of SuiteCRM Ltd<. All other company and product names may be trademarks of the respective companies with which they are associated.',
    'LBL_GENERATE_PASSWORD_BUTTON_TITLE' => 'Réinitialiser le Mot de passe',
    'LBL_SEND_CONFIRM_OPT_IN_EMAIL' => 'Envoyer le mail de confirmation d\'activation',
    'LBL_CONFIRM_OPT_IN_ONLY_FOR_PERSON' => 'Confirmer l\'autorisation d\'envoi de messages uniquement pour les comptes/contacts/pistes/prospects',
    'LBL_CONFIRM_OPT_IN_IS_DISABLED' => 'L\'envoi de courriels de confirmation d\'OptIn est désactivé, activez-le dans les paramètres de courriel ou contactez votre administrateur.',
    'LBL_CONTACT_HAS_NO_PRIMARY_EMAIL' => 'Impossible d\'envoyer le courriel de confirmation d\'OptIn car le contact n\'a aucune adresse courriel principale',
    'LBL_CONFIRM_EMAIL_SENDING_FAILED' => 'Erreur d\'envoi du courriel de confirmation d\'OptIn',
    'LBL_CONFIRM_EMAIL_SENT' => 'Courriel de confirmation d\'OptIn envoyé avec succès',

    'LBL_SEND_TEST_EMAIL' => 'Send Test Email',
    'LBL_SEND_TEST_EMAIL_DESC' => 'Please select the Email Addresses / User(s) and/or Target List(s) to send to.',
    'LBL_EMAIL_SENT_SUCCESSFULLY' => 'Email sent successfully',
    'LBL_PROSPECT_LIST_NAME' => 'Target Lists',

    //List View Column Selector Modal
    'LBL_COLUMN_SELECTOR_DISPLAYED_COLS' => 'AFFICHÉS',
    'LBL_COLUMN_SELECTOR_HIDDEN_COLS' => 'MASQUER',
    'LBL_COLUMN_SELECTOR_CLOSE_BUTTON' => 'Fermer',
    'LBL_COLUMN_SELECTOR_SAVE_BUTTON' => 'Enregistrer les modifications',
    'LBL_COLUMN_SELECTOR_MODAL_TITLE' => 'Choisir les colonnes',

    // Two-Factor Authentication
    'LBL_ENTER_AUTH_APP_2FA_CODE' => 'Please enter the verification code from your authenticator app',
    'LBL_ENABLE_2FA_LABEL' => 'Enable Two-Factor Authentication',
    'LBL_BACKUP_CODES' => 'Recovery/Backup Codes',
    'LBL_BACKUP_CODES_INFO' => 'Backup codes are one time passcodes to use when you are unable to verify via your Authenticator app.',
    'LBL_BACKUP_CODES_WARN' => ' WARNING: These codes are only generated once. Please copy BEFORE verifying as these will not be displayed again.',
    'LBL_PROBLEMS_GENERATING_CODE' => 'Problems generating the code?',
    'LBL_BACKUP_CODES_FALLBACK_INSTRUCTIONS' => 'Use one of the backup codes (it expires after being used)',
    'LBL_OTP_SETUP' => 'Use a OTP (one time password) authenticator on your mobile or computer to enable 2FA (Two-Factor Authentication)',
    'LBL_QR_CODE_HELP' => "If you haven't already, please download an Authenticator Application (such as FreeOTP or Google Authenticator). Use that app to scan the QR code.",
    'LBL_USE_SECRET' => "Unable to scan the QR Code?",
    'LBL_USE_SECRET_DESC' => "If you are unable to scan the QR code, please enter the secret below manually into your authenticator app.",
    'LBL_HIDE_SECRET' => "Hide TOTP Secret",
    'LBL_2FA_LOGIN_CANCEL' => 'Two Factor Authentication cancelled',

    'LBL_FACTOR_AUTH_DISABLE' => 'Two Factor Authentication was Disabled',
    'LBL_FACTOR_AUTH_SUCCESS' => 'Two Factor Authentication was Successful',
    'LBL_FACTOR_AUTH_FAIL' => "Two Factor Authentication failed. Try again.",

    'LBL_VERIFY_2FA' => 'Verify Code',
    'LBL_TWO_FACTOR_AUTH' => 'Two Factor Authentication',
    'LBL_TWO_FACTOR_AUTH_APP_METHOD' => 'Authenticator app',
    'LBL_TWO_FACTOR_AUTH_APP_METHOD_DESCRIPTION' => 'Use an authentication app to generate 2-factor authentication codes when prompted',
    'LBL_ENABLE' => 'Enable',
    'LBL_ENABLED' => 'Enabled',
    'LBL_DISABLE' => 'Disable',
    'LBL_GENERATED' => 'Generated',
    'LBL_REGENERATE_CODES' => 'Regenerate',
    'LBL_REGENERATED_BACKUP_CODES' => 'Backup Codes Regenerated'

);

$app_list_strings['moduleList']['Library'] = 'Librairie';
$app_list_strings['moduleList']['EmailAddresses'] = 'Adresse email';
$app_list_strings['project_priority_default'] = 'Medium';
$app_list_strings['project_priority_options'] = array(
    'High' => 'High',
    'Medium' => 'Medium',
    'Low' => 'Low',
);

//GDPR lawful basis options
$app_list_strings['lawful_basis_dom'] = array(
    '' => '',
    'consent' => 'Consentement',
    'contract' => 'Contract',
    'legal_obligation' => 'Obligation légale',
    'protection_of_interest' => 'Protection des intérêts',
    'public_interest' => 'Intérêt public',
    'legitimate_interest' => 'Intérêt légitime',
    'withdrawn' => 'Retiré',
);
//End GDPR lawful basis options

//GDPR lawful basis source options
$app_list_strings['lawful_basis_source_dom'] = array(
    '' => '',
    'website' => 'Site web',
    'phone' => 'Téléphone',
    'given_to_user' => 'Donné à l’utilisateur',
    'email' => 'Adresse E-mail',
    'third_party' => 'Tierce partie',
);
//End GDPR lawful basis source options

$app_list_strings['moduleList']['KBDocuments'] = 'Base de connaissances';

$app_list_strings['countries_dom'] = array(
    '' => '',
    'ABU DHABI' => 'ABU DHABI',
    'ADEN' => 'ADEN',
    'AFGHANISTAN' => 'AFGHANISTAN',
    'ALBANIA' => 'ALBANIE',
    'ALGERIA' => 'ALGÉRIE',
    'AMERICAN SAMOA' => 'SAMOA AMÉRICAINES',
    'ANDORRA' => 'ANDORRE',
    'ANGOLA' => 'ANGOLA',
    'ANTARCTICA' => 'ANTARCTIQUE',
    'ANTIGUA' => 'ANTIGUA-ET-BARBUDA',
    'ARGENTINA' => 'ARGENTINE',
    'ARMENIA' => 'ARMÉNIE',
    'ARUBA' => 'ARUBA',
    'AUSTRALIA' => 'AUSTRALIE',
    'AUSTRIA' => 'AUTRICHE',
    'AZERBAIJAN' => 'AZERBAÏDJAN',
    'BAHAMAS' => 'BAHAMAS',
    'BAHRAIN' => 'BAHREÏN',
    'BANGLADESH' => 'BANGLADESH',
    'BARBADOS' => 'BARBADE',
    'BELARUS' => 'BÉLARUS',
    'BELGIUM' => 'BELGIQUE',
    'BELIZE' => 'BELIZE',
    'BENIN' => 'BÉNIN',
    'BERMUDA' => 'BERMUDES',
    'BHUTAN' => 'BHOUTAN',
    'BOLIVIA' => 'BOLIVIE',
    'BOSNIA' => 'BOSNIE-HERZÉGOVINE',
    'BOTSWANA' => 'BOTSWANA',
    'BOUVET ISLAND' => 'BOUVET, ÎLE',
    'BRAZIL' => 'BRÉSIL',
    'BRITISH ANTARCTICA TERRITORY' => 'TERRITOIRE BRITANNIQUE DE L\'ANTARCTIQUE',
    'BRITISH INDIAN OCEAN TERRITORY' => 'OCÉAN INDIEN, TERRITOIRE BRITANNIQUE',
    'BRITISH VIRGIN ISLANDS' => 'ÎLES VIERGES BRITANNIQUES',
    'BRITISH WEST INDIES' => 'ANTILLES BRITANNIQUES',
    'BRUNEI' => 'BRUNÉI DARUSSALAM',
    'BULGARIA' => 'BULGARIE',
    'BURKINA FASO' => 'BURKINA FASO',
    'BURUNDI' => 'BURUNDI',
    'CAMBODIA' => 'CAMBODGE',
    'CAMEROON' => 'CAMEROUN',
    'CANADA' => 'CANADA',
    'CANAL ZONE' => 'Fuseaux horaires',
    'CANARY ISLAND' => 'ÎLES CANARIES',
    'CAPE VERDI ISLANDS' => 'CAP-VERT',
    'CAYMAN ISLANDS' => 'CAÏMANES, ÎLES',
    'CHAD' => 'TCHAD',
    'CHANNEL ISLAND UK' => 'ÎLES ANGLO-NORMANDES GB',
    'CHILE' => 'CHILI',
    'CHINA' => 'CHINE',
    'CHRISTMAS ISLAND' => 'CHRISTMAS, ÎLE',
    'COCOS (KEELING) ISLAND' => 'COCOS (KEELING), ÎLES',
    'COLOMBIA' => 'COLOMBIE',
    'COMORO ISLANDS' => 'COMORES',
    'CONGO' => 'CONGO',
    'CONGO KINSHASA' => 'CONGO, RÉPUBLIQUE DÉMOCRATIQUE DU',
    'COOK ISLANDS' => 'COOK, ÎLES',
    'COSTA RICA' => 'COSTA RICA',
    'CROATIA' => 'CROATIE',
    'CUBA' => 'CUBA',
    'CURACAO' => 'CURACAO',
    'CYPRUS' => 'CHYPRE',
    'CZECH REPUBLIC' => 'TCHÈQUE, RÉPUBLIQUE',
    'DAHOMEY' => 'DAHOMEY',
    'DENMARK' => 'DANEMARK',
    'DJIBOUTI' => 'DJIBOUTI',
    'DOMINICA' => 'DOMINIQUE',
    'DOMINICAN REPUBLIC' => 'DOMINICAINE, RÉPUBLIQUE',
    'DUBAI' => 'DUBAI',
    'ECUADOR' => 'ÉQUATEUR',
    'EGYPT' => 'ÉGYPTE',
    'EL SALVADOR' => 'Salvador',
    'EQUATORIAL GUINEA' => 'GUINÉE ÉQUATORIALE',
    'ESTONIA' => 'ESTONIE',
    'ETHIOPIA' => 'ÉTHIOPIE',
    'FAEROE ISLANDS' => 'FÉROÉ, ÎLES',
    'FALKLAND ISLANDS' => 'FALKLAND, ÎLES (MALVINAS)',
    'FIJI' => 'FIDJI',
    'FINLAND' => 'FINLANDE',
    'FRANCE' => 'France',
    'FRENCH GUIANA' => 'GUYANE FRANÇAISE',
    'FRENCH POLYNESIA' => 'POLYNÉSIE FRANÇAISE',
    'GABON' => 'Gabon',
    'GAMBIA' => 'GAMBIE',
    'GEORGIA' => 'GÉORGIE',
    'GERMANY' => 'ALLEMAGNE',
    'GHANA' => 'GHANA',
    'GIBRALTAR' => 'GIBRALTAR',
    'GREECE' => 'GRÈCE',
    'GREENLAND' => 'GROENLAND',
    'GUADELOUPE' => 'GUADELOUPE',
    'GUAM' => 'GUAM',
    'GUATEMALA' => 'GUATEMALA',
    'GUINEA' => 'GUINÉE',
    'GUYANA' => 'GUYANE',
    'HAITI' => 'HAÏTI',
    'HONDURAS' => 'HONDURAS',
    'HONG KONG' => 'HONG-KONG',
    'HUNGARY' => 'HONGRIE',
    'ICELAND' => 'ISLANDE',
    'IFNI' => 'IFNI',
    'INDIA' => 'INDE',
    'INDONESIA' => 'INDONÉSIE',
    'IRAN' => 'IRAN, RÉPUBLIQUE ISLAMIQUE',
    'IRAQ' => 'IRAK',
    'IRELAND' => 'IRLANDE',
    'ISRAEL' => 'ISRAËL',
    'ITALY' => 'ITALIE',
    'IVORY COAST' => 'CÔTE D IVOIRE',
    'JAMAICA' => 'JAMAÏQUE',
    'JAPAN' => 'JAPON',
    'JORDAN' => 'JORDANIE',
    'KAZAKHSTAN' => 'KASAKHSTAN',
    'KENYA' => 'KENYA',
    'KOREA' => 'CORÉE, RÉPUBLIQUE POPULAIRE DÉMOCRATIQUE DE',
    'KOREA, SOUTH' => 'CORÉE, RÉPUBLIQUE DE',
    'KUWAIT' => 'KOWEÏT',
    'KYRGYZSTAN' => 'KIRGHIZISTAN',
    'LAOS' => 'LAOS',
    'LATVIA' => 'LETTONIE',
    'LEBANON' => 'LIBAN',
    'LEEWARD ISLANDS' => 'ÎLES SOUS-LE-VENT',
    'LESOTHO' => 'LESOTHO',
    'LIBYA' => 'LIBYENNE, JAMAHIRIYA ARABE',
    'LIECHTENSTEIN' => 'LIECHTENSTEIN',
    'LITHUANIA' => 'LITUANIE',
    'LUXEMBOURG' => 'LUXEMBOURG',
    'MACAO' => 'MACAO',
    'MACEDONIA' => 'MACÉDOINE, EX-RÉPUBLIQUE YOUGOSLAVE',
    'MADAGASCAR' => 'MADAGASCAR',
    'MALAWI' => 'MALAWI',
    'MALAYSIA' => 'MALAISIE',
    'MALDIVES' => 'MALDIVES',
    'MALI' => 'MALI',
    'MALTA' => 'MALTE',
    'MARTINIQUE' => 'MARTINIQUE',
    'MAURITANIA' => 'MAURITANIE',
    'MAURITIUS' => 'MAURICE',
    'MELANESIA' => 'MÉLANÉSIE',
    'MEXICO' => 'MEXIQUE',
    'MOLDOVIA' => 'MOLDOVA, RÉPUBLIQUE DE',
    'MONACO' => 'MONACO',
    'MONGOLIA' => 'MONGOLIE',
    'MOROCCO' => 'MAROC',
    'MOZAMBIQUE' => 'MOZAMBIQUE',
    'MYANAMAR' => 'MYANMAR',
    'NAMIBIA' => 'NAMIBIE',
    'NEPAL' => 'NÉPAL',
    'NETHERLANDS' => 'PAYS-BAS',
    'NETHERLANDS ANTILLES' => 'ANTILLES NÉERLANDAISES',
    'NETHERLANDS ANTILLES NEUTRAL ZONE' => 'ZONE NEUTRE DES ANTILLES HOLLANDAISES',
    'NEW CALADONIA' => 'NOUVELLE-CALÉDONIE',
    'NEW HEBRIDES' => 'NOUVELLES-HÉBRIDES',
    'NEW ZEALAND' => 'NOUVELLE-ZÉLANDE',
    'NICARAGUA' => 'NICARAGUA',
    'NIGER' => 'NIGER',
    'NIGERIA' => 'NIGÉRIA',
    'NORFOLK ISLAND' => 'NORFOLK, ÎLE',
    'NORWAY' => 'NORVÈGE',
    'OMAN' => 'OMAN',
    'OTHER' => 'OTHER',
    'PACIFIC ISLAND' => 'ILES DU PACIFIQUE',
    'PAKISTAN' => 'PAKISTAN',
    'PANAMA' => 'PANAMA',
    'PAPUA NEW GUINEA' => 'PAPOUASIE-NOUVELLE-GUINÉE',
    'PARAGUAY' => 'PARAGUAY',
    'PERU' => 'PÉROU',
    'PHILIPPINES' => 'PHILIPPINES',
    'POLAND' => 'POLOGNE',
    'PORTUGAL' => 'PORTUGAL',
    'PORTUGUESE TIMOR' => 'TIMOR ORIENTAL',
    'PUERTO RICO' => 'PORTO RICO',
    'QATAR' => 'QATAR',
    'REPUBLIC OF BELARUS' => 'BÉLARUS',
    'REPUBLIC OF SOUTH AFRICA' => 'AFRIQUE DU SUD',
    'REUNION' => 'RÉUNION',
    'ROMANIA' => 'ROUMANIE',
    'RUSSIA' => 'RUSSIE',
    'RWANDA' => 'RWANDA',
    'RYUKYU ISLANDS' => 'ÎLES RYŪKYŪ',
    'SABAH' => 'SABAH',
    'SAN MARINO' => 'SAINT-MARIN',
    'SAUDI ARABIA' => 'ARABIE SAOUDITE',
    'SENEGAL' => 'SÉNÉGAL',
    'SERBIA' => 'SERBIE',
    'SEYCHELLES' => 'SEYCHELLES',
    'SIERRA LEONE' => 'SIERRA LEONE',
    'SINGAPORE' => 'SINGAPOUR',
    'SLOVAKIA' => 'SLOVAQUIE',
    'SLOVENIA' => 'SLOVÉNIE',
    'SOMALILIAND' => 'SOMALIE',
    'SOUTH AFRICA' => 'AFRIQUE DU SUD',
    'SOUTH YEMEN' => 'YÉMEN DU SUD',
    'SPAIN' => 'ESPAGNE',
    'SPANISH SAHARA' => 'SAHARA ESPAGNOL',
    'SRI LANKA' => 'SRI LANKA',
    'ST. KITTS AND NEVIS' => 'SAINT-KITTS-ET-NEVIS',
    'ST. LUCIA' => 'SAINTE-LUCIE',
    'SUDAN' => 'SOUDAN',
    'SURINAM' => 'SURINAME',
    'SW AFRICA' => 'NAMIBIE',
    'SWAZILAND' => 'SWAZILAND',
    'SWEDEN' => 'SUÈDE',
    'SWITZERLAND' => 'SUISSE',
    'SYRIA' => 'SYRIENNE, RÉPUBLIQUE ARABE',
    'TAIWAN' => 'TAÏWAN, PROVINCE DE CHINE',
    'TAJIKISTAN' => 'TADJIKISTAN',
    'TANZANIA' => 'TANZANIE, RÉPUBLIQUE-UNIE DE',
    'THAILAND' => 'THAÏLANDE',
    'TONGA' => 'TONGA',
    'TRINIDAD' => 'TRINITÉ-ET-TOBAGO',
    'TUNISIA' => 'TUNISIE',
    'TURKEY' => 'TURQUIE',
    'UGANDA' => 'OUGANDA',
    'UKRAINE' => 'UKRAINE',
    'UNITED ARAB EMIRATES' => 'ÉMIRATS ARABES UNIS',
    'UNITED KINGDOM' => 'ROYAUME-UNI',
    'URUGUAY' => 'URUGUAY',
    'US PACIFIC ISLAND' => 'ILES DU PACIFIQUE (US)',
    'US VIRGIN ISLANDS' => 'ÎLES VIERGES DES ÉTATS-UNIS',
    'USA' => 'ÉTATS-UNIS',
    'UZBEKISTAN' => 'OUZBÉKISTAN',
    'VANUATU' => 'VANUATU',
    'VATICAN CITY' => 'SAINT-SIÈGE (ÉTAT DE LA CITÉ DU VATICAN)',
    'VENEZUELA' => 'VENEZUELA',
    'VIETNAM' => 'VIET NAM',
    'WAKE ISLAND' => 'ÎLE DE WAKE',
    'WEST INDIES' => 'WEST INDIES',
    'WESTERN SAHARA' => 'SAHARA OCCIDENTAL',
    'YEMEN' => 'YÉMEN',
    'ZAIRE' => 'REP. DEM. CONGO',
    'ZAMBIA' => 'ZAMBIE',
    'ZIMBABWE' => 'ZIMBABWE',
);

$app_list_strings['charset_dom'] = array(
    'BIG-5' => 'BIG-5 (Taïwan et Hong Kong)',
    /*'CP866'     => 'CP866', // ms-dos Cyrillic */
    /*'CP949'     => 'CP949 (Microsoft Korean)', */
    'CP1251' => 'Cp1251 (MS Cyrillique)',
    'CP1252' => 'CP1252 (MS Europe occidentale et États-Unis)',
    'EUC-CN' => 'EUC-CN (GB2312 Chinois simplifié)',
    'EUC-JP' => 'EUC-JP (Japonais Unix)',
    'EUC-KR' => 'EUC-KR (Corée)',
    'EUC-TW' => 'EUC-TW (Taiwanais)',
    'ISO-2022-JP' => 'ISO-2022-JP (japonais)',
    'ISO-2022-KR' => 'ISO-2022-KR (Coréen)',
    'ISO-8859-1' => 'ISO-8859-1 (Europe occidentale et États-Unis)',
    'ISO-8859-2' => 'ISO-8859-2 (Europe centrale et orientale)',
    'ISO-8859-3' => 'ISO-8859-3 (Latin 3)',
    'ISO-8859-4' => 'ISO-8859-4 (Latin 4)',
    'ISO-8859-5' => 'ISO-8859-5 (Cyrillique)',
    'ISO-8859-6' => 'ISO-8859-6 (Arabe)',
    'ISO-8859-7' => 'ISO-8859-7 (Grec)',
    'ISO-8859-8' => 'ISO-8859-8 (Hébreu)',
    'ISO-8859-9' => 'ISO-8859-9 (Latin 5)',
    'ISO-8859-10' => 'ISO-8859-10 (Latin 6)',
    'ISO-8859-13' => 'ISO-8859-13 (7 Latin)',
    'ISO-8859-14' => 'ISO-8859-14 (Latin 8)',
    'ISO-8859-15' => 'ISO-8859-15 (Latin 9)',
    'KOI8-R' => 'KOI8-R (Russe Cyrillique)',
    'KOI8-U' => 'KOI8-U (Cyrillique Ukrainien)',
    'SJIS' => 'SJIS (MS japonais)',
    'UTF-8' => 'UTF-8',
);

$app_list_strings['timezone_dom'] = array(

    'Africa/Algiers' => 'Afrique/Alger',
    'Africa/Luanda' => 'Afrique/Luanda',
    'Africa/Porto-Novo' => 'Afrique / Porto-Novo',
    'Africa/Gaborone' => 'Afrique / Gaborone',
    'Africa/Ouagadougou' => 'Afrique / Ouagadougou',
    'Africa/Bujumbura' => 'Afrique / Bujumbura',
    'Africa/Douala' => 'Afrique/Douala',
    'Atlantic/Cape_Verde' => 'Atlantique/Cap-Vert',
    'Africa/Bangui' => 'Afrique/Bangui',
    'Africa/Ndjamena' => 'Afrique/Ndjamena',
    'Indian/Comoro' => 'Océan Indien/Comorres',
    'Africa/Kinshasa' => 'Afrique/Kinshasa',
    'Africa/Lubumbashi' => 'Afrique / Lubumbashi',
    'Africa/Brazzaville' => 'Afrique/Brazzaville',
    'Africa/Abidjan' => 'Afrique/Abidjan',
    'Africa/Djibouti' => 'Afrique/Djibouti',
    'Africa/Cairo' => 'Afrique/Le Caire',
    'Africa/Malabo' => 'Afrique/Malabo',
    'Africa/Asmera' => 'Afrique/Asmera',
    'Africa/Addis_Ababa' => 'Afrique/Addis-Abeba',
    'Africa/Libreville' => 'Afrique/Libreville',
    'Africa/Banjul' => 'Afrique/Banjul',
    'Africa/Accra' => 'Afrique/Accra',
    'Africa/Conakry' => 'Afrique/Conakry',
    'Africa/Bissau' => 'Afrique/Bissau',
    'Africa/Nairobi' => 'Afrique/Nairobi',
    'Africa/Maseru' => 'Afrique / Maseru',
    'Africa/Monrovia' => 'Afrique / Monrovia',
    'Africa/Tripoli' => 'Afrique/Tripoli',
    'Indian/Antananarivo' => 'Océan Indien/Antananarivo',
    'Africa/Blantyre' => 'Afrique / Blantyre',
    'Africa/Bamako' => 'Afrique/Bamako',
    'Africa/Nouakchott' => 'Afrique / Nouakchott',
    'Indian/Mauritius' => 'Océan Indien/Maurice',
    'Indian/Mayotte' => 'Océan Indien/Mayotte',
    'Africa/Casablanca' => 'Afrique/Casablanca',
    'Africa/El_Aaiun' => 'Afrique / El Aaiun',
    'Africa/Maputo' => 'Afrique / Maputo',
    'Africa/Windhoek' => 'Afrique / Windhoek',
    'Africa/Niamey' => 'Afrique/Niamey',
    'Africa/Lagos' => 'Afrique/Lagos',
    'Indian/Reunion' => 'Océan Indien/La Réunion',
    'Africa/Kigali' => 'Afrique/Kigali',
    'Atlantic/St_Helena' => 'Atlantique/Sainte-Hélène',
    'Africa/Sao_Tome' => 'Afrique/Sao Tomé',
    'Africa/Dakar' => 'Afrique/Dakar',
    'Indian/Mahe' => 'Inde/Mahé',
    'Africa/Freetown' => 'Afrique/Libreville',
    'Africa/Mogadishu' => 'Afrique/Mogadicio',
    'Africa/Johannesburg' => 'Afrique/Johannesburg',
    'Africa/Khartoum' => 'Afrique / Khartoum',
    'Africa/Mbabane' => 'Afrique / Mbabane',
    'Africa/Dar_es_Salaam' => 'Afrique/Dar es Salaam',
    'Africa/Lome' => 'Afrique/Lomé',
    'Africa/Tunis' => 'Afrique/Tunis',
    'Africa/Kampala' => 'Afrique / Kampala',
    'Africa/Lusaka' => 'Afrique / Lusaka',
    'Africa/Harare' => 'Afrique/Hararé',
    'Antarctica/Casey' => 'Antartique / Casey',
    'Antarctica/Davis' => 'Antartique / Davis',
    'Antarctica/Mawson' => 'Antartique / Mawson',
    'Indian/Kerguelen' => 'Inde / Kerguelen',
    'Antarctica/DumontDUrville' => 'Antartique/DumontDUrville',
    'Antarctica/Syowa' => 'Antartique / Syowa',
    'Antarctica/Vostok' => 'Antartique / Vostok',
    'Antarctica/Rothera' => 'Antartique / Rothera',
    'Antarctica/Palmer' => 'Antartique / Palmer',
    'Antarctica/McMurdo' => 'Antartique / McMurdo',
    'Asia/Kabul' => 'Asie / Kabul',
    'Asia/Yerevan' => 'Asie /Yerevan',
    'Asia/Baku' => 'Asie/Baku',
    'Asia/Bahrain' => 'Asie/Bahrain',
    'Asia/Dhaka' => 'Asie /Dhaka',
    'Asia/Thimphu' => 'Asie /Thimphu',
    'Indian/Chagos' => 'Inde/Chagos',
    'Asia/Brunei' => 'Asie/Brunei',
    'Asia/Rangoon' => 'Asie /Rangoon',
    'Asia/Phnom_Penh' => 'Asie /Phnom Penh',
    'Asia/Beijing' => 'Asie/Pékin',
    'Asia/Harbin' => 'Asie /Harbin',
    'Asia/Shanghai' => 'Asie/Shanghai',
    'Asia/Chongqing' => 'Asie /Chongqing',
    'Asia/Urumqi' => 'Asie /Urumqi',
    'Asia/Kashgar' => 'Asie/Kashgar',
    'Asia/Hong_Kong' => 'Asie/Hong Kong',
    'Asia/Taipei' => 'Asie/Taipei',
    'Asia/Macau' => 'Asie/Macao',
    'Asia/Nicosia' => 'Asie/Nicosie',
    'Asia/Tbilisi' => 'Asie/Tbilisi',
    'Asia/Dili' => 'Asie/Dili',
    'Asia/Calcutta' => 'Asie/Calcutta',
    'Asia/Jakarta' => 'Asie/Jakarta',
    'Asia/Pontianak' => 'Asie/Pontianak',
    'Asia/Makassar' => 'Asie/Makassar',
    'Asia/Jayapura' => 'Asie/Jayapura',
    'Asia/Tehran' => 'Asie/Téhéran',
    'Asia/Baghdad' => 'Asie/Bagdad',
    'Asia/Jerusalem' => 'Asie/Jérusalem',
    'Asia/Tokyo' => 'Asie/Tokyo',
    'Asia/Amman' => 'Asie/Amman',
    'Asia/Almaty' => 'Asie/Almaty',
    'Asia/Qyzylorda' => 'Asie/Kyzylorda',
    'Asia/Aqtobe' => 'Asie/Aqtobe',
    'Asia/Aqtau' => 'Asie/Aqtaū',
    'Asia/Oral' => 'Asie/Oral',
    'Asia/Bishkek' => 'Asie/Bishkek',
    'Asia/Seoul' => 'Asie/Séoul',
    'Asia/Pyongyang' => 'Asie/Pyongyang',
    'Asia/Kuwait' => 'Asie/Kuwait',
    'Asia/Vientiane' => 'Asie/Vientiane',
    'Asia/Beirut' => 'Asie/Beyrouth',
    'Asia/Kuala_Lumpur' => 'Asie/Kuala Lumpur',
    'Asia/Kuching' => 'Asie/Kuching',
    'Indian/Maldives' => 'Océan Indien/Les Maldives',
    'Asia/Hovd' => 'Asie/Hovd',
    'Asia/Ulaanbaatar' => 'Asie/Ulaanbaatar',
    'Asia/Choibalsan' => 'Asie/Choybalsan',
    'Asia/Katmandu' => 'Asie/Katmandu',
    'Asia/Muscat' => 'Asie/Muscat',
    'Asia/Karachi' => 'Asie/Karachi',
    'Asia/Gaza' => 'Asie/Gaza',
    'Asia/Manila' => 'Asie/Manille',
    'Asia/Qatar' => 'Asie/Qatar',
    'Asia/Riyadh' => 'Asie/Riyadh',
    'Asia/Singapore' => 'Asie/Singapour',
    'Asia/Colombo' => 'Asie/Colombo',
    'Asia/Damascus' => 'Asie/Damas',
    'Asia/Dushanbe' => 'Asie/Dushanbe',
    'Asia/Bangkok' => 'Asie/Bangkok',
    'Asia/Ashgabat' => 'Asie/Ashgabat',
    'Asia/Dubai' => 'Asie/Dubaï',
    'Asia/Samarkand' => 'Asie/Samarkand',
    'Asia/Tashkent' => 'Asie/Tashkent',
    'Asia/Saigon' => 'Asie/Saigon',
    'Asia/Aden' => 'Asie/Aden',
    'Australia/Darwin' => 'Australie/Darwin',
    'Australia/Perth' => 'Australie / Perth',
    'Australia/Brisbane' => 'Australie / Brisbane',
    'Australia/Lindeman' => 'Australie / Lindeman',
    'Australia/Adelaide' => 'Australie / Adelaide',
    'Australia/Hobart' => 'Australie / Hobart',
    'Australia/Currie' => 'Australie / Currie',
    'Australia/Melbourne' => 'Australie / Melbourne',
    'Australia/Sydney' => 'Australie / Sydney',
    'Australia/Broken_Hill' => 'Australie / Broken Hill',
    'Indian/Christmas' => 'Inde/Christmas',
    'Pacific/Rarotonga' => 'Pacifique/Rarotonga',
    'Indian/Cocos' => 'Inde/Cocos',
    'Pacific/Fiji' => 'Pacifique/Fidji',
    'Pacific/Gambier' => 'Pacifique/Gambier',
    'Pacific/Marquesas' => 'Pacifique/Marquesas',
    'Pacific/Tahiti' => 'Pacifique/Tahiti',
    'Pacific/Guam' => 'Pacifique/Guam',
    'Pacific/Tarawa' => 'Pacifique/Tarawa',
    'Pacific/Enderbury' => 'Pacifique/Enderbury',
    'Pacific/Kiritimati' => 'Pacifique/Kiritimati',
    'Pacific/Saipan' => 'Pacifique/Saipan',
    'Pacific/Majuro' => 'Pacifique/Majuro',
    'Pacific/Kwajalein' => 'Pacifique/Kwajalein',
    'Pacific/Truk' => 'Pacifique/Truk',
    'Pacific/Pohnpei' => 'Pacifique/Ponape',
    'Pacific/Kosrae' => 'Pacifique/Kosrae',
    'Pacific/Nauru' => 'Pacifique/Nauru',
    'Pacific/Noumea' => 'Pacifique/Noumea',
    'Pacific/Auckland' => 'Pacifique/Auckland',
    'Pacific/Chatham' => 'Pacifique/Chatham',
    'Pacific/Niue' => 'Pacifique/Niue',
    'Pacific/Norfolk' => 'Pacifique/Norfolk',
    'Pacific/Palau' => 'Pacifique/Palau',
    'Pacific/Port_Moresby' => 'Pacifique/Port Moresby',
    'Pacific/Pitcairn' => 'Pacifique/Pitcairn',
    'Pacific/Pago_Pago' => 'Pacifique/Pago Pago',
    'Pacific/Apia' => 'Pacifique/Apia',
    'Pacific/Guadalcanal' => 'Pacifique/Guadalcanal',
    'Pacific/Fakaofo' => 'Pacifique/Fakaofo',
    'Pacific/Tongatapu' => 'Pacifique/Tongatapu',
    'Pacific/Funafuti' => 'Pacifique/Funafuti',
    'Pacific/Johnston' => 'Pacifique/Johnston',
    'Pacific/Midway' => 'Pacifique/Midway',
    'Pacific/Wake' => 'Pacifique/Wake',
    'Pacific/Efate' => 'Pacifique/Efate',
    'Pacific/Wallis' => 'Pacifique/Wallis',
    'Europe/London' => 'Europe/Londres',
    'Europe/Dublin' => 'Europe/Dublin',
    'WET' => 'WET',
    'CET' => 'CET',
    'MET' => 'MET',
    'EET' => 'EET',
    'Europe/Tirane' => 'Europe/Tirana',
    'Europe/Andorra' => 'Europe/Andorre',
    'Europe/Vienna' => 'Europe/Vienne',
    'Europe/Minsk' => 'Europe/Minsk',
    'Europe/Brussels' => 'Europe/Bruxelles',
    'Europe/Sofia' => 'Europe/Sofia',
    'Europe/Prague' => 'Europe/Prague',
    'Europe/Copenhagen' => 'Europe/Copenhague',
    'Atlantic/Faeroe' => 'Atlantique/Féroé',
    'America/Danmarkshavn' => 'Amérique/Danmarkshavn',
    'America/Scoresbysund' => 'Amérique/Scoresbysund',
    'America/Godthab' => 'Amérique/Godthab',
    'America/Thule' => 'Amérique/Thule',
    'Europe/Tallinn' => 'Europe/Tallinn',
    'Europe/Helsinki' => 'Europe/Helsinki',
    'Europe/Paris' => 'Europe/Paris',
    'Europe/Berlin' => 'Europe/Berlin',
    'Europe/Gibraltar' => 'Europe/Gibraltar',
    'Europe/Athens' => 'Europe/Athènes',
    'Europe/Budapest' => 'Europe/Budapest',
    'Atlantic/Reykjavik' => 'Atlantique/Reykjavik',
    'Europe/Rome' => 'Europe/Rome',
    'Europe/Riga' => 'Europe/Riga',
    'Europe/Vaduz' => 'Europe/Vaduz',
    'Europe/Vilnius' => 'Europe/Vilnius',
    'Europe/Luxembourg' => 'Europe/Luxembourg',
    'Europe/Malta' => 'Europe/Malte',
    'Europe/Chisinau' => 'Europe/Chișinău',
    'Europe/Monaco' => 'Europe/Monaco',
    'Europe/Amsterdam' => 'Europe/Amsterdam',
    'Europe/Oslo' => 'Europe/Oslo',
    'Europe/Warsaw' => 'Europe/Varsovie',
    'Europe/Lisbon' => 'Europe/Lisbone',
    'Atlantic/Azores' => 'Atlantique/Açores',
    'Atlantic/Madeira' => 'Atlantique/Madère',
    'Europe/Bucharest' => 'Europe/Bucarest',
    'Europe/Kaliningrad' => 'Europe/Kaliningrad',
    'Europe/Moscow' => 'Europe/Moscou',
    'Europe/Samara' => 'Europe/Samara',
    'Asia/Yekaterinburg' => 'Asie/Yekaterinburg',
    'Asia/Omsk' => 'Asie/Omsk',
    'Asia/Novosibirsk' => 'Asie/Novosibirsk',
    'Asia/Krasnoyarsk' => 'Asie/Krasnoyarsk',
    'Asia/Irkutsk' => 'Asie/Irkutsk',
    'Asia/Yakutsk' => 'Asie/Yakutsk',
    'Asia/Vladivostok' => 'Asie/Vladivostok',
    'Asia/Sakhalin' => 'Asie/Sakhalin',
    'Asia/Magadan' => 'Asie/Magadan',
    'Asia/Kamchatka' => 'Asie/Kamchatka',
    'Asia/Anadyr' => 'Asie/Anadyr',
    'Europe/Belgrade' => 'Europe/Belgrade',
    'Europe/Madrid' => 'Europe/Madrid',
    'Africa/Ceuta' => 'Afrique / Ceuta',
    'Atlantic/Canary' => 'Atlantique/Canaries',
    'Europe/Stockholm' => 'Europe/Stockholm',
    'Europe/Zurich' => 'Europe/Zurich',
    'Europe/Istanbul' => 'Europe/Istanbul',
    'Europe/Kiev' => 'Europe/Kiev',
    'Europe/Uzhgorod' => 'Europe/Oujhorod',
    'Europe/Zaporozhye' => 'Europe/Zaporijia',
    'Europe/Simferopol' => 'Europe/Simferopol',
    'America/New_York' => 'Amérique / New York',
    'America/Chicago' => 'Amérique / Chicago',
    'America/North_Dakota/Center' => 'Amérique/Dakota du Nord/Centre',
    'America/Denver' => 'Amérique / Denver',
    'America/Los_Angeles' => 'Amérique / Los Angeles',
    'America/Juneau' => 'Amérique / Juneau',
    'America/Yakutat' => 'Amérique / Yakutat',
    'America/Anchorage' => 'Amérique / Anchorage',
    'America/Nome' => 'Amérique/Nome',
    'America/Adak' => 'Amérique/Adak',
    'Pacific/Honolulu' => 'Pacifique/Honolulu',
    'America/Phoenix' => 'Amérique / Phoenix',
    'America/Boise' => 'Amérique/Boise',
    'America/Indiana/Indianapolis' => 'Amérique/Indiana/Indianapolis',
    'America/Indiana/Marengo' => 'Amérique/Indiana/Marengo',
    'America/Indiana/Knox' => 'Amérique/Indiana/Knox',
    'America/Indiana/Vevay' => 'Amérique/Indiana/Vevay',
    'America/Kentucky/Louisville' => 'Amérique/Kentucky/Louisville',
    'America/Kentucky/Monticello' => 'Amérique/Kentucky/Monticello',
    'America/Detroit' => 'Amérique/Détroit',
    'America/Menominee' => 'Amérique/Menominee',
    'America/St_Johns' => 'Amérique/St. Johns',
    'America/Goose_Bay' => 'Amérique/Goose Bay',
    'America/Halifax' => 'Amérique/Halifax',
    'America/Glace_Bay' => 'Amérique/Glace Bay',
    'America/Montreal' => 'Amérique/Montréal',
    'America/Toronto' => 'Amérique/Toronto',
    'America/Thunder_Bay' => 'Amérique/Thunder Bay',
    'America/Nipigon' => 'Amérique/Nipigon',
    'America/Rainy_River' => 'Amérique/Rainy River',
    'America/Winnipeg' => 'Amérique/Winnipeg',
    'America/Regina' => 'Amérique/Regina',
    'America/Swift_Current' => 'Amérique/Swift Current',
    'America/Edmonton' => 'Amérique/Edmonton',
    'America/Vancouver' => 'Amérique / Vancouver',
    'America/Dawson_Creek' => 'Amérique/Dawson Creek',
    'America/Pangnirtung' => 'Amérique/Pangnirtung',
    'America/Iqaluit' => 'Amérique/Iqaluit',
    'America/Coral_Harbour' => 'Amérique/Coral Harbour',
    'America/Rankin_Inlet' => 'Amérique/Rankin Inlet',
    'America/Cambridge_Bay' => 'Amérique/Cambridge Bay',
    'America/Yellowknife' => 'Amérique/Yellowknife',
    'America/Inuvik' => 'Amérique/Inuvik',
    'America/Whitehorse' => 'Amérique/Whitehorse',
    'America/Dawson' => 'Amérique/Dawson',
    'America/Cancun' => 'Amérique/Cancun',
    'America/Merida' => 'Amérique/Merida',
    'America/Monterrey' => 'Amérique/Monterrey',
    'America/Mexico_City' => 'Amérique/Mexique ville',
    'America/Chihuahua' => 'Amérique/Chihuahua',
    'America/Hermosillo' => 'Amérique/Hermosillo',
    'America/Mazatlan' => 'Amérique/Mazatlan',
    'America/Tijuana' => 'Amérique/Tijuana',
    'America/Anguilla' => 'Amérique/Anguilla',
    'America/Antigua' => 'Amérique/Antigua',
    'America/Nassau' => 'Amérique/Nassau',
    'America/Barbados' => 'Amérique/Barbados',
    'America/Belize' => 'Amérique/Bélize',
    'Atlantic/Bermuda' => 'Atlantique/Bermudes',
    'America/Cayman' => 'Amérique/Cayman',
    'America/Costa_Rica' => 'Amérique/Costa Rica',
    'America/Havana' => 'Amérique/La Havane',
    'America/Dominica' => 'Amérique/Dominica',
    'America/Santo_Domingo' => 'Amérique/Saint-Domingue',
    'America/El_Salvador' => 'Amérique/El Salvador',
    'America/Grenada' => 'Amérique/Grenada',
    'America/Guadeloupe' => 'Amérique/Guadeloupe',
    'America/Guatemala' => 'Amérique/Guatemala',
    'America/Port-au-Prince' => 'Amérique/Port-au-Prince',
    'America/Tegucigalpa' => 'Amérique/Tegucigalpa',
    'America/Jamaica' => 'Amérique / Jamaïque',
    'America/Martinique' => 'Amérique/Martinique',
    'America/Montserrat' => 'Amérique/Montserrat',
    'America/Managua' => 'Amérique/Managua',
    'America/Panama' => 'Amérique/Panama',
    'America/Puerto_Rico' => 'Amérique/Puerto Rico',
    'America/St_Kitts' => 'Amérique/St Kitts',
    'America/St_Lucia' => 'Amérique/Ste Lucia',
    'America/Miquelon' => 'Amérique/Miquelon',
    'America/St_Vincent' => 'Amérique/Saint-Vincent',
    'America/Grand_Turk' => 'Amérique/Grand Turk',
    'America/Tortola' => 'Amérique/Tortola',
    'America/St_Thomas' => 'Amérique/St. Thomas',
    'America/Argentina/Buenos_Aires' => 'Amérique/Argentine/Buenos Aires',
    'America/Argentina/Cordoba' => 'Amérique/Argentine/Cordoba',
    'America/Argentina/Tucuman' => 'Amérique/Argentine/Tucuman',
    'America/Argentina/La_Rioja' => 'Amérique/Argentine/La_Rioja',
    'America/Argentina/San_Juan' => 'Amérique/Argentine/San Juan',
    'America/Argentina/Jujuy' => 'Amérique/Argentine/Jujuy',
    'America/Argentina/Catamarca' => 'Amérique/Argentine/Catamarca',
    'America/Argentina/Mendoza' => 'Amérique/Argentine/Mendoza',
    'America/Argentina/Rio_Gallegos' => 'Amérique/Argentine/Rio Gallegos',
    'America/Argentina/Ushuaia' => 'Amérique/Argentine/Ushuaïa',
    'America/Aruba' => 'Amérique/Aruba',
    'America/La_Paz' => 'Amérique/La Paz',
    'America/Noronha' => 'Amérique/Noronha',
    'America/Belem' => 'Amérique/Belem',
    'America/Fortaleza' => 'Amérique/Fortaleza',
    'America/Recife' => 'Amérique/Recife',
    'America/Araguaina' => 'Amérique/Araguaina',
    'America/Maceio' => 'Amérique/Maceio',
    'America/Bahia' => 'Amérique/Bahia',
    'America/Sao_Paulo' => 'Amérique/São Paulo',
    'America/Campo_Grande' => 'Amérique/Campo Grande',
    'America/Cuiaba' => 'Amérique/Cuiaba',
    'America/Porto_Velho' => 'Amérique/Porto Velho',
    'America/Boa_Vista' => 'Amérique/Boa Vista',
    'America/Manaus' => 'Amérique/Manaus',
    'America/Eirunepe' => 'Amérique/Eirunepe',
    'America/Rio_Branco' => 'Amérique/Rio Branco',
    'America/Santiago' => 'Amérique/Santiago',
    'Pacific/Easter' => 'Pacifique/Easter',
    'America/Bogota' => 'Amérique/Bogota',
    'America/Curacao' => 'Amérique/Curacao',
    'America/Guayaquil' => 'Amérique/Guayaquil',
    'Pacific/Galapagos' => 'Pacifique/Galapagos',
    'Atlantic/Stanley' => 'Atlantique/Stanley',
    'America/Cayenne' => 'Amérique / Cayenne',
    'America/Guyana' => 'Amérique/Guyana',
    'America/Asuncion' => 'Amérique/Asuncion',
    'America/Lima' => 'Amérique / Lima',
    'Atlantic/South_Georgia' => 'Atlantique/Georgie du Sud',
    'America/Paramaribo' => 'Amérique/Paramaribo',
    'America/Port_of_Spain' => 'Amérique/Port d\'Espagne',
    'America/Montevideo' => 'Amérique/Montevideo',
    'America/Caracas' => 'Amérique/Caracas',
);

$app_list_strings['eapm_list'] = array(
    'Sugar' => 'SuiteCRM',
    'WebEx' => 'WebEx',
    'GoToMeeting' => 'GoToMeeting',
    'IBMSmartCloud' => 'IBM SmartCloud',
    'Google' => 'Google Docs',
    'Box' => 'Box.net',
    'Facebook' => 'Facebook',
    'Twitter' => 'Twitter',
);
$app_list_strings['eapm_list_import'] = array(
    'Google' => 'Contacts Google',
);
$app_list_strings['eapm_list_documents'] = array(
    'Google' => 'Google Drive',
);
$app_list_strings['token_status'] = array(
    1 => 'Demande',
    2 => 'Accès',
    3 => 'Invalid',
);

$app_list_strings ['emailTemplates_type_list'] = array(
    '' => '',
    'campaign' => 'Campagne',
    'email' => 'Adresse électronique',
    'event' => 'Evènement',
);

$app_list_strings ['emailTemplates_type_list_campaigns'] = array(
    '' => '',
    'campaign' => 'Campagne',
);

$app_list_strings ['emailTemplates_type_list_no_workflow'] = array(
    '' => '',
    'campaign' => 'Campagne',
    'email' => 'Adresse E-mail',
    'event' => 'Evènement',
    'system' => 'System',
);

// knowledge base
$app_list_strings['moduleList']['AOK_KnowledgeBase'] = 'Base de connaissances';
$app_list_strings['moduleList']['AOK_Knowledge_Base_Categories'] = 'KB - Catégories';
$app_list_strings['aok_status_list']['Draft'] = 'Brouillon';
$app_list_strings['aok_status_list']['Expired'] = 'Expired';
$app_list_strings['aok_status_list']['In_Review'] = 'En relecture';
//$app_list_strings['aok_status_list']['Published'] = 'Published';
$app_list_strings['aok_status_list']['published_private'] = 'Privée';
$app_list_strings['aok_status_list']['published_public'] = 'Public';

$app_list_strings['moduleList']['FP_events'] = 'Évènements';
$app_list_strings['moduleList']['FP_Event_Locations'] = 'Localisations';

//events
$app_list_strings['fp_event_invite_status_dom']['Invited'] = 'Invité';
$app_list_strings['fp_event_invite_status_dom']['Not Invited'] = 'Pas invité';
$app_list_strings['fp_event_invite_status_dom']['Attended'] = 'A participé';
$app_list_strings['fp_event_invite_status_dom']['Not Attended'] = 'N\'a pas participé';
$app_list_strings['fp_event_status_dom']['Accepted'] = 'Accepted';
$app_list_strings['fp_event_status_dom']['Declined'] = 'Declined';
$app_list_strings['fp_event_status_dom']['No Response'] = 'Pas de réponse';

$app_strings['LBL_STATUS_EVENT'] = 'Statut de l\'invitation';
$app_strings['LBL_ACCEPT_STATUS'] = 'Statut acceptation';
$app_strings['LBL_LISTVIEW_OPTION_CURRENT'] = 'Page courante';
$app_strings['LBL_LISTVIEW_OPTION_ENTIRE'] = 'Liste Complète';
$app_strings['LBL_LISTVIEW_NONE'] = 'Aucun';

$app_list_strings['moduleList']['AOP_Case_Events'] = 'Événements du Cas';
$app_list_strings['moduleList']['AOP_Case_Updates'] = 'Mises à jour du cas';
$app_strings['LBL_AOP_EMAIL_REPLY_DELIMITER'] = '=== Veuillez répondre au-dessus de cette ligne ===';

//aop
$app_list_strings['case_state_default_key'] = 'Ouvrir';
$app_list_strings['case_state_dom'] =
    array(
        'Open' => 'Ouvrir',
        'Closed' => 'Closed',
    );
$app_list_strings['case_status_default_key'] = 'Ouvrir_Nouveau';
$app_list_strings['case_status_dom'] =
    array(
        'Open_New' => 'New',
        'Open_Assigned' => 'Assigné',
        'Closed_Closed' => 'Closed',
        'Open_Pending Input' => 'Pending Input',
        'Closed_Rejected' => 'Rejected',
        'Closed_Duplicate' => 'Dupliquer',
    );
$app_list_strings['contact_portal_user_type_dom'] =
    array(
        'Single' => 'Utilisateur unique',
        'Account' => 'Compte utilisateur',
    );
$app_list_strings['dom_email_distribution_for_auto_create'] = array(
    'AOPDefault' => 'Système par défaut',
    'singleUser' => 'Utilisateur unique',
    'roundRobin' => 'Round-Robin',
    'leastBusy' => 'Least-Busy',
    'random' => 'Aléatoire',
);

//aor
$app_list_strings['moduleList']['AOR_Reports'] = 'Rapports';
$app_list_strings['moduleList']['AOR_Conditions'] = 'Critères du Rapport';
$app_list_strings['moduleList']['AOR_Charts'] = 'Graphique de rapport';
$app_list_strings['moduleList']['AOR_Fields'] = 'Champs du Rapport';
$app_list_strings['moduleList']['AOR_Scheduled_Reports'] = 'Rapports planifiés';
$app_list_strings['aor_operator_list']['Equal_To'] = 'Egal à';
$app_list_strings['aor_operator_list']['Not_Equal_To'] = 'Différent de';
$app_list_strings['aor_operator_list']['Greater_Than'] = 'Greater Than';
$app_list_strings['aor_operator_list']['Less_Than'] = 'Less Than';
$app_list_strings['aor_operator_list']['Greater_Than_or_Equal_To'] = 'Supérieur ou égal à';
$app_list_strings['aor_operator_list']['Less_Than_or_Equal_To'] = 'Inférieur ou égal à';
$app_list_strings['aor_operator_list']['Contains'] = 'Contains';
$app_list_strings['aor_operator_list']['Starts_With'] = 'Starts With';
$app_list_strings['aor_operator_list']['Ends_With'] = 'Fini par';
$app_list_strings['aor_format_options'][''] = '';
$app_list_strings['aor_format_options']['Y-m-d'] = 'A-m-j';
$app_list_strings['aor_format_options']['m-d-Y'] = 'm-j-A';
$app_list_strings['aor_format_options']['d-m-Y'] = 'j-m-A';
$app_list_strings['aor_format_options']['Y/m/d'] = 'A/m/j';
$app_list_strings['aor_format_options']['m/d/Y'] = 'm/j/A';
$app_list_strings['aor_format_options']['d/m/Y'] = 'j/m/A';
$app_list_strings['aor_format_options']['Y.m.d'] = 'A.m.j';
$app_list_strings['aor_format_options']['m.d.Y'] = 'm.j.A';
$app_list_strings['aor_format_options']['d.m.Y'] = 'j.m.A';
$app_list_strings['aor_format_options']['Ymd'] = 'Amj';
$app_list_strings['aor_format_options']['Y-m'] = 'A-m';
$app_list_strings['aor_format_options']['Y'] = 'A';
$app_list_strings['aor_condition_operator_list']['And'] = 'And';
$app_list_strings['aor_condition_operator_list']['OR'] = 'OR';
$app_list_strings['aor_condition_type_list']['Value'] = 'Valeur';
$app_list_strings['aor_condition_type_list']['Field'] = 'Champ';
$app_list_strings['aor_condition_type_list']['Date'] = 'Date';
$app_list_strings['aor_condition_type_list']['Multi'] = 'Un sur';
$app_list_strings['aor_condition_type_list']['Period'] = 'Période';
$app_list_strings['aor_condition_type_list']['CurrentUserID'] = 'Utilisateur courant';
$app_list_strings['aor_date_type_list'][''] = '';
$app_list_strings['aor_date_type_list']['minute'] = 'Minutes';
$app_list_strings['aor_date_type_list']['hour'] = 'Hours';
$app_list_strings['aor_date_type_list']['day'] = 'Days';
$app_list_strings['aor_date_type_list']['week'] = 'Semaine(s)';
$app_list_strings['aor_date_type_list']['month'] = 'Mois';
$app_list_strings['aor_date_type_list']['business_hours'] = 'Heures ouvrées';
$app_list_strings['aor_date_options']['now'] = 'Maintenant';
$app_list_strings['aor_date_options']['field'] = 'Ce champ';
$app_list_strings['aor_date_operator']['now'] = '';
$app_list_strings['aor_date_operator']['plus'] = '+';
$app_list_strings['aor_date_operator']['minus'] = '-';
$app_list_strings['aor_sort_operator'][''] = '';
$app_list_strings['aor_sort_operator']['ASC'] = 'Ascending';
$app_list_strings['aor_sort_operator']['DESC'] = 'Descending';
$app_list_strings['aor_function_list'][''] = '';
$app_list_strings['aor_function_list']['COUNT'] = 'Nombre';
$app_list_strings['aor_function_list']['MIN'] = 'Minimum';
$app_list_strings['aor_function_list']['MAX'] = 'Maximum';
$app_list_strings['aor_function_list']['SUM'] = 'Total';
$app_list_strings['aor_function_list']['AVG'] = 'Moyenne';
$app_list_strings['aor_total_options'][''] = '';
$app_list_strings['aor_total_options']['COUNT'] = 'Nombre';
$app_list_strings['aor_total_options']['SUM'] = 'Sum';
$app_list_strings['aor_total_options']['AVG'] = 'Average';
$app_list_strings['aor_chart_types']['bar'] = 'Histogramme';
$app_list_strings['aor_chart_types']['line'] = 'Graphique courbe';
$app_list_strings['aor_chart_types']['pie'] = 'Graphique en camembert';
$app_list_strings['aor_chart_types']['radar'] = 'Graphique en radar';
$app_list_strings['aor_chart_types']['stacked_bar'] = 'Barres empilées';
$app_list_strings['aor_chart_types']['grouped_bar'] = 'Barres groupées';
$app_list_strings['aor_scheduled_report_schedule_types']['monthly'] = 'Mensuel';
$app_list_strings['aor_scheduled_report_schedule_types']['weekly'] = 'Weekly';
$app_list_strings['aor_scheduled_report_schedule_types']['daily'] = 'Daily';
$app_list_strings['aor_scheduled_reports_status_dom']['active'] = 'Activé';
$app_list_strings['aor_scheduled_reports_status_dom']['inactive'] = 'Désactivé';
$app_list_strings['aor_email_type_list']['Email Address'] = 'Adresse E-mail';
$app_list_strings['aor_email_type_list']['Specify User'] = 'Utilisateur';
$app_list_strings['aor_email_type_list']['Users'] = 'Utilisateurs';
$app_list_strings['aor_assign_options']['all'] = 'TOUS les utilisateurs';
$app_list_strings['aor_assign_options']['role'] = 'TOUS les utilisateurs de rôle';
$app_list_strings['aor_assign_options']['security_group'] = 'TOUS les utilisateurs du groupe de sécurité';
$app_list_strings['date_time_period_list']['today'] = 'Aujourd’hui';
$app_list_strings['date_time_period_list']['yesterday'] = 'Hier';
$app_list_strings['date_time_period_list']['this_week'] = 'Cette semaine';
$app_list_strings['date_time_period_list']['last_week'] = 'Dernière Semaine';
$app_list_strings['date_time_period_list']['last_month'] = 'Last Month';
$app_list_strings['date_time_period_list']['this_month'] = 'This Month';
$app_list_strings['date_time_period_list']['this_quarter'] = 'Ce trimestre';
$app_list_strings['date_time_period_list']['last_quarter'] = 'Le trimestre dernier';
$app_list_strings['date_time_period_list']['this_year'] = 'Cette année';
$app_list_strings['date_time_period_list']['last_year'] = 'Année dernière';
$app_strings['LBL_CRON_ON_THE_MONTHDAY'] = 'le';
$app_strings['LBL_CRON_ON_THE_WEEKDAY'] = 'le';
$app_strings['LBL_CRON_AT'] = 'à';
$app_strings['LBL_CRON_RAW'] = 'Avancé';
$app_strings['LBL_CRON_MIN'] = 'Min';
$app_strings['LBL_CRON_HOUR'] = 'Heure';
$app_strings['LBL_CRON_DAY'] = 'Jour';
$app_strings['LBL_CRON_MONTH'] = 'Mois';
$app_strings['LBL_CRON_DOW'] = 'Jour de la semaine';
$app_strings['LBL_CRON_DAILY'] = 'Daily';
$app_strings['LBL_CRON_WEEKLY'] = 'Weekly';
$app_strings['LBL_CRON_MONTHLY'] = 'Mensuel';

//aos
$app_list_strings['moduleList']['AOS_Contracts'] = 'Contrats';
$app_list_strings['moduleList']['AOS_Invoices'] = 'Factures';
$app_list_strings['moduleList']['AOS_PDF_Templates'] = 'PDF - modèles';
$app_list_strings['moduleList']['AOS_Product_Categories'] = 'Produits- catégories';
$app_list_strings['moduleList']['AOS_Products'] = 'Produits';
$app_list_strings['moduleList']['AOS_Products_Quotes'] = 'Lignes de produits';
$app_list_strings['moduleList']['AOS_Line_Item_Groups'] = 'Rubrique groupes';
$app_list_strings['moduleList']['AOS_Quotes'] = 'Devis';
$app_list_strings['aos_quotes_type_dom'][''] = '';
$app_list_strings['aos_quotes_type_dom']['Analyst'] = 'Analyst';
$app_list_strings['aos_quotes_type_dom']['Competitor'] = 'Competitor';
$app_list_strings['aos_quotes_type_dom']['Customer'] = 'Customer';
$app_list_strings['aos_quotes_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_quotes_type_dom']['Investor'] = 'Investor';
$app_list_strings['aos_quotes_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_quotes_type_dom']['Press'] = 'Press';
$app_list_strings['aos_quotes_type_dom']['Prospect'] = 'Prospect';
$app_list_strings['aos_quotes_type_dom']['Reseller'] = 'Reseller';
$app_list_strings['aos_quotes_type_dom']['Other'] = 'Autre';
$app_list_strings['template_ddown_c_list'][''] = '';
$app_list_strings['quote_stage_dom']['Draft'] = 'Brouillon';
$app_list_strings['quote_stage_dom']['Negotiation'] = 'Négociation';
$app_list_strings['quote_stage_dom']['Delivered'] = 'Délivré';
$app_list_strings['quote_stage_dom']['On Hold'] = 'On Hold';
$app_list_strings['quote_stage_dom']['Confirmed'] = 'Confirmé';
$app_list_strings['quote_stage_dom']['Closed Accepted'] = 'Clos Accepté';
$app_list_strings['quote_stage_dom']['Closed Lost'] = 'Closed Lost';
$app_list_strings['quote_stage_dom']['Closed Dead'] = 'Clos Abandonné';
$app_list_strings['quote_term_dom']['Net 15'] = 'Net 15 jours';
$app_list_strings['quote_term_dom']['Net 30'] = 'Net 30 jours';
$app_list_strings['quote_term_dom'][''] = '';
$app_list_strings['approval_status_dom']['Approved'] = 'Validé';
$app_list_strings['approval_status_dom']['Not Approved'] = 'Non validé';
$app_list_strings['approval_status_dom'][''] = '';
$app_list_strings['vat_list']['0.0'] = '0%';
$app_list_strings['vat_list']['5.0'] = '5%';
$app_list_strings['vat_list']['7.5'] = '7,5%';
$app_list_strings['vat_list']['17.5'] = '17,5%';
$app_list_strings['vat_list']['20.0'] = '20%';
$app_list_strings['discount_list']['Percentage'] = 'Pourcent';
$app_list_strings['discount_list']['Amount'] = 'Montant';
$app_list_strings['aos_invoices_type_dom'][''] = '';
$app_list_strings['aos_invoices_type_dom']['Analyst'] = 'Analyst';
$app_list_strings['aos_invoices_type_dom']['Competitor'] = 'Competitor';
$app_list_strings['aos_invoices_type_dom']['Customer'] = 'Customer';
$app_list_strings['aos_invoices_type_dom']['Integrator'] = 'Integrator';
$app_list_strings['aos_invoices_type_dom']['Investor'] = 'Investor';
$app_list_strings['aos_invoices_type_dom']['Partner'] = 'Partner';
$app_list_strings['aos_invoices_type_dom']['Press'] = 'Press';
$app_list_strings['aos_invoices_type_dom']['Prospect'] = 'Prospect';
$app_list_strings['aos_invoices_type_dom']['Reseller'] = 'Reseller';
$app_list_strings['aos_invoices_type_dom']['Other'] = 'Autre';
$app_list_strings['invoice_status_dom']['Paid'] = 'Payé';
$app_list_strings['invoice_status_dom']['Unpaid'] = 'Non payé';
$app_list_strings['invoice_status_dom']['Cancelled'] = 'Annulé';
$app_list_strings['invoice_status_dom'][''] = '';
$app_list_strings['quote_invoice_status_dom']['Not Invoiced'] = 'Non facturé';
$app_list_strings['quote_invoice_status_dom']['Invoiced'] = 'Facturé';
$app_list_strings['product_code_dom']['XXXX'] = 'XXXX';
$app_list_strings['product_code_dom']['YYYY'] = 'YYYY';
$app_list_strings['product_category_dom']['Laptops'] = 'Ordinateurs portables';
$app_list_strings['product_category_dom']['Desktops'] = 'Ordinateurs de bureau';
$app_list_strings['product_category_dom'][''] = '';
$app_list_strings['product_type_dom']['Good'] = 'Bon';
$app_list_strings['product_type_dom']['Service'] = 'Service';
$app_list_strings['product_quote_parent_type_dom']['AOS_Quotes'] = 'Devis';
$app_list_strings['product_quote_parent_type_dom']['AOS_Invoices'] = 'Factures';
$app_list_strings['product_quote_parent_type_dom']['AOS_Contracts'] = 'Contrats';
$app_list_strings['pdf_template_type_dom']['AOS_Quotes'] = 'Devis';
$app_list_strings['pdf_template_type_dom']['AOS_Invoices'] = 'Factures';
$app_list_strings['pdf_template_type_dom']['AOS_Contracts'] = 'Contrats';
$app_list_strings['pdf_template_type_dom']['Accounts'] = 'Comptes';
$app_list_strings['pdf_template_type_dom']['Contacts'] = 'Contacts';
$app_list_strings['pdf_template_type_dom']['Leads'] = 'Prospects';
$app_list_strings['pdf_template_sample_dom'][''] = '';
$app_list_strings['contract_status_list']['Not Started'] = 'Non démarré';
$app_list_strings['contract_status_list']['In Progress'] = 'En cours';
$app_list_strings['contract_status_list']['Signed'] = 'Signé';
$app_list_strings['contract_type_list']['Type'] = 'Type';
$app_strings['LBL_PRINT_AS_PDF'] = 'Imprimer en PDF';
$app_strings['LBL_SELECT_TEMPLATE'] = 'Veuillez sélectionner un Template';
$app_string['LBL_PDF_GENERATION_FAILED'] = 'Unable to generate PDF document. See logs for more info.';
$app_strings['LBL_NO_TEMPLATE'] = 'ERREUR\nAucun template trouvé\nVeuillez aller à la section PDF Templates et créez en un';

//aow
$app_list_strings['moduleList']['AOW_WorkFlow'] = 'Flux d\'activité';
$app_list_strings['moduleList']['AOW_Conditions'] = 'Critères du WorkFlow';
$app_list_strings['moduleList']['AOW_Processed'] = 'Analyse du processus';
$app_list_strings['moduleList']['AOW_Actions'] = 'Actions du WorkFlow';
$app_list_strings['aow_status_list']['Active'] = 'Actif';
$app_list_strings['aow_status_list']['Inactive'] = 'Désactivé';
$app_list_strings['aow_operator_list']['Equal_To'] = 'Equal To';
$app_list_strings['aow_operator_list']['Not_Equal_To'] = 'Not Equal To';
$app_list_strings['aow_operator_list']['Greater_Than'] = 'Greater Than';
$app_list_strings['aow_operator_list']['Less_Than'] = 'Less Than';
$app_list_strings['aow_operator_list']['Greater_Than_or_Equal_To'] = 'Greater Than or Equal To';
$app_list_strings['aow_operator_list']['Less_Than_or_Equal_To'] = 'Less Than or Equal To';
$app_list_strings['aow_operator_list']['Contains'] = 'Contains';
$app_list_strings['aow_operator_list']['Starts_With'] = 'Starts With';
$app_list_strings['aow_operator_list']['Ends_With'] = 'Ends With';
$app_list_strings['aow_operator_list']['is_null'] = 'Est nul';
$app_list_strings['aow_process_status_list']['Complete'] = 'Terminée';
$app_list_strings['aow_process_status_list']['Running'] = 'En cours d\'exécution';
$app_list_strings['aow_process_status_list']['Pending'] = 'Pending';
$app_list_strings['aow_process_status_list']['Failed'] = 'Failed';
$app_list_strings['aow_condition_operator_list']['And'] = 'And';
$app_list_strings['aow_condition_operator_list']['OR'] = 'OR';
$app_list_strings['aow_condition_type_list']['Value'] = 'Valeur';
$app_list_strings['aow_condition_type_list']['Field'] = 'Champ';
$app_list_strings['aow_condition_type_list']['Any_Change'] = 'Tout changement';
$app_list_strings['aow_condition_type_list']['SecurityGroup'] = 'Dans le groupe de sécurité';
$app_list_strings['aow_condition_type_list']['Date'] = 'Date';
$app_list_strings['aow_condition_type_list']['Multi'] = 'Un sur';
$app_list_strings['aow_action_type_list']['Value'] = 'Valeur';
$app_list_strings['aow_action_type_list']['Field'] = 'Champ';
$app_list_strings['aow_action_type_list']['Date'] = 'Date';
$app_list_strings['aow_action_type_list']['Round_Robin'] = 'A tour de rôle';
$app_list_strings['aow_action_type_list']['Least_Busy'] = 'Moins chargé';
$app_list_strings['aow_action_type_list']['Random'] = 'Random';
$app_list_strings['aow_rel_action_type_list']['Value'] = 'Valeur';
$app_list_strings['aow_rel_action_type_list']['Field'] = 'Champ';
$app_list_strings['aow_date_type_list'][''] = '';
$app_list_strings['aow_date_type_list']['minute'] = 'Minutes';
$app_list_strings['aow_date_type_list']['hour'] = 'Hours';
$app_list_strings['aow_date_type_list']['day'] = 'Days';
$app_list_strings['aow_date_type_list']['week'] = 'Weeks';
$app_list_strings['aow_date_type_list']['month'] = 'Months';
$app_list_strings['aow_date_type_list']['year'] = 'Années';
$app_list_strings['aow_date_type_list']['business_hours'] = 'Business Hours';
$app_list_strings['aow_date_options']['now'] = 'Now';
$app_list_strings['aow_date_options']['today'] = 'Aujourd’hui';
$app_list_strings['aow_date_options']['field'] = 'This Field';
$app_list_strings['aow_date_operator']['now'] = '';
$app_list_strings['aow_date_operator']['plus'] = '+';
$app_list_strings['aow_date_operator']['minus'] = '-';
$app_list_strings['aow_assign_options']['all'] = 'ALL Users';
$app_list_strings['aow_assign_options']['role'] = 'ALL Users in Role';
$app_list_strings['aow_assign_options']['security_group'] = 'ALL Users in Security Group';
$app_list_strings['aow_email_type_list']['Email Address'] = 'Adresse E-mail';
$app_list_strings['aow_email_type_list']['Record Email'] = 'Enregistrer l\'E-mail';
$app_list_strings['aow_email_type_list']['Related Field'] = 'Champ lié';
$app_list_strings['aow_email_type_list']['Specify User'] = 'Utilisateur';
$app_list_strings['aow_email_type_list']['Users'] = 'Utilisateurs';
$app_list_strings['aow_email_to_list']['to'] = 'To';
$app_list_strings['aow_email_to_list']['cc'] = 'Cc';
$app_list_strings['aow_email_to_list']['bcc'] = 'Cci';
$app_list_strings['aow_run_on_list']['All_Records'] = 'Tous les enregistrements';
$app_list_strings['aow_run_on_list']['New_Records'] = 'Nouveaux enregistrements';
$app_list_strings['aow_run_on_list']['Modified_Records'] = 'Enregistrements modifiés';
$app_list_strings['aow_run_when_list']['Always'] = '- toujours -';
$app_list_strings['aow_run_when_list']['On_Save'] = 'Seulement à l\'enregistrement';
$app_list_strings['aow_run_when_list']['In_Scheduler'] = 'Seulement dans le planificateur';

//gant
$app_list_strings['moduleList']['AM_ProjectTemplates'] = 'Projets - modèles';
$app_list_strings['moduleList']['AM_TaskTemplates'] = 'Modèles de tâches';
$app_list_strings['relationship_type_list']['FS'] = 'Finaliser pour démarrer';
$app_list_strings['relationship_type_list']['SS'] = 'Démarrer pour commencer';
$app_list_strings['duration_unit_dom']['Days'] = 'Days';
$app_list_strings['duration_unit_dom']['Hours'] = 'Hours';
$app_strings['LBL_GANTT_BUTTON_LABEL'] = 'Voir le Gantt';
$app_strings['LBL_DETAIL_BUTTON_LABEL'] = 'Voir le détail';
$app_strings['LBL_CREATE_PROJECT'] = 'Créer Projet';

//gmaps
$app_strings['LBL_MAP'] = 'Carte';

$app_strings['LBL_JJWG_MAPS_LNG'] = 'Longitude';
$app_strings['LBL_JJWG_MAPS_LAT'] = 'Latitude';
$app_strings['LBL_JJWG_MAPS_GEOCODE_STATUS'] = 'Status Géocode';
$app_strings['LBL_JJWG_MAPS_ADDRESS'] = 'Adresse';

$app_list_strings['moduleList']['jjwg_Maps'] = 'Cartes';
$app_list_strings['moduleList']['jjwg_Markers'] = 'Cartes - Marqueurs';
$app_list_strings['moduleList']['jjwg_Areas'] = 'Cartes - zones';
$app_list_strings['moduleList']['jjwg_Address_Cache'] = 'Cartes - cache des adresses';

$app_list_strings['moduleList']['jjwp_Partners'] = 'Partenaires JJWP';

$app_list_strings['map_unit_type_list']['mi'] = 'Km';
$app_list_strings['map_unit_type_list']['km'] = 'Kilomètres';

$app_list_strings['map_module_type_list']['Accounts'] = 'Comptes';
$app_list_strings['map_module_type_list']['Contacts'] = 'Contacts';
$app_list_strings['map_module_type_list']['Cases'] = 'Tickets';
$app_list_strings['map_module_type_list']['Leads'] = 'Prospects';
$app_list_strings['map_module_type_list']['Meetings'] = 'Réunions';
$app_list_strings['map_module_type_list']['Opportunities'] = 'Affaires';
$app_list_strings['map_module_type_list']['Project'] = 'Projets';
$app_list_strings['map_module_type_list']['Prospects'] = 'Cibles';

$app_list_strings['map_relate_type_list']['Accounts'] = 'Compte';
$app_list_strings['map_relate_type_list']['Contacts'] = 'Contacts';
$app_list_strings['map_relate_type_list']['Cases'] = 'Ticket';
$app_list_strings['map_relate_type_list']['Leads'] = 'Lead';
$app_list_strings['map_relate_type_list']['Meetings'] = 'Réunion';
$app_list_strings['map_relate_type_list']['Opportunities'] = 'Opportunity';
$app_list_strings['map_relate_type_list']['Project'] = 'Project';
$app_list_strings['map_relate_type_list']['Prospects'] = 'Cible';

$app_list_strings['marker_image_list']['accident'] = 'Accident';
$app_list_strings['marker_image_list']['administration'] = 'Administration';
$app_list_strings['marker_image_list']['agriculture'] = 'Agriculture';
$app_list_strings['marker_image_list']['aircraft_small'] = 'Petit Avion';
$app_list_strings['marker_image_list']['airplane_tourism'] = 'Avion Tourisme';
$app_list_strings['marker_image_list']['airport'] = 'Aéroport';
$app_list_strings['marker_image_list']['amphitheater'] = 'Amphithéâtre';
$app_list_strings['marker_image_list']['apartment'] = 'Appartement';
$app_list_strings['marker_image_list']['aquarium'] = 'Aquarium';
$app_list_strings['marker_image_list']['arch'] = 'Arche';
$app_list_strings['marker_image_list']['atm'] = 'DAB';
$app_list_strings['marker_image_list']['audio'] = 'Audio';
$app_list_strings['marker_image_list']['bank'] = 'Banque';
$app_list_strings['marker_image_list']['bank_euro'] = 'Banque Euro';
$app_list_strings['marker_image_list']['bank_pound'] = 'Banque Livre';
$app_list_strings['marker_image_list']['bar'] = 'Bar';
$app_list_strings['marker_image_list']['beach'] = 'Plage';
$app_list_strings['marker_image_list']['beautiful'] = 'Belle';
$app_list_strings['marker_image_list']['bicycle_parking'] = 'Stationnement pour vélos';
$app_list_strings['marker_image_list']['big_city'] = 'Grande ville';
$app_list_strings['marker_image_list']['bridge'] = 'Pont';
$app_list_strings['marker_image_list']['bridge_modern'] = 'Pont moderne';
$app_list_strings['marker_image_list']['bus'] = 'Bus';
$app_list_strings['marker_image_list']['cable_car'] = 'Téléphérique';
$app_list_strings['marker_image_list']['car'] = 'Voiture';
$app_list_strings['marker_image_list']['car_rental'] = 'Location voiture';
$app_list_strings['marker_image_list']['carrepair'] = 'Garage';
$app_list_strings['marker_image_list']['castle'] = 'Château';
$app_list_strings['marker_image_list']['cathedral'] = 'Cathédrale';
$app_list_strings['marker_image_list']['chapel'] = 'Chapelle';
$app_list_strings['marker_image_list']['church'] = 'Église';
$app_list_strings['marker_image_list']['city_square'] = 'Place de la ville';
$app_list_strings['marker_image_list']['cluster'] = 'Groupe';
$app_list_strings['marker_image_list']['cluster_2'] = 'Groupe 2';
$app_list_strings['marker_image_list']['cluster_3'] = 'Groupe 3';
$app_list_strings['marker_image_list']['cluster_4'] = 'Groupe 4';
$app_list_strings['marker_image_list']['cluster_5'] = 'Groupe 5';
$app_list_strings['marker_image_list']['coffee'] = 'Café';
$app_list_strings['marker_image_list']['community_centre'] = 'Centre communautaire';
$app_list_strings['marker_image_list']['company'] = 'Société';
$app_list_strings['marker_image_list']['conference'] = 'Conference';
$app_list_strings['marker_image_list']['construction'] = 'Construction';
$app_list_strings['marker_image_list']['convenience'] = 'Magasin';
$app_list_strings['marker_image_list']['court'] = 'Cour';
$app_list_strings['marker_image_list']['cruise'] = 'Croisière';
$app_list_strings['marker_image_list']['currency_exchange'] = 'Bureau de change';
$app_list_strings['marker_image_list']['customs'] = 'Douanes';
$app_list_strings['marker_image_list']['cycling'] = 'Cyclisme';
$app_list_strings['marker_image_list']['dam'] = 'Barrage';
$app_list_strings['marker_image_list']['dentist'] = 'Dentiste';
$app_list_strings['marker_image_list']['deptartment_store'] = 'Grand magasin';
$app_list_strings['marker_image_list']['disability'] = 'Handicap';
$app_list_strings['marker_image_list']['disabled_parking'] = 'Parking handicapé';
$app_list_strings['marker_image_list']['doctor'] = 'Médecin';
$app_list_strings['marker_image_list']['dog_leash'] = 'Laisse chien';
$app_list_strings['marker_image_list']['down'] = 'Vers le bas';
$app_list_strings['marker_image_list']['down_left'] = 'Bas gauche';
$app_list_strings['marker_image_list']['down_right'] = 'Bas à droite';
$app_list_strings['marker_image_list']['down_then_left'] = 'Vers le bas puis gauche';
$app_list_strings['marker_image_list']['down_then_right'] = 'Vers le bas puis à droite';
$app_list_strings['marker_image_list']['drugs'] = 'Médicaments';
$app_list_strings['marker_image_list']['elevator'] = 'Ascenseur';
$app_list_strings['marker_image_list']['embassy'] = 'Ambassade';
$app_list_strings['marker_image_list']['expert'] = 'Expert';
$app_list_strings['marker_image_list']['factory'] = 'Usine';
$app_list_strings['marker_image_list']['falling_rocks'] = 'Chutes de pierres';
$app_list_strings['marker_image_list']['fast_food'] = 'Restauration rapide';
$app_list_strings['marker_image_list']['festival'] = 'Festival';
$app_list_strings['marker_image_list']['fjord'] = 'Fjord';
$app_list_strings['marker_image_list']['forest'] = 'Forêt';
$app_list_strings['marker_image_list']['fountain'] = 'Fontaine';
$app_list_strings['marker_image_list']['friday'] = 'Friday';
$app_list_strings['marker_image_list']['garden'] = 'Jardin';
$app_list_strings['marker_image_list']['gas_station'] = 'Pompe à essence';
$app_list_strings['marker_image_list']['geyser'] = 'Geyser';
$app_list_strings['marker_image_list']['gifts'] = 'Cadeaux';
$app_list_strings['marker_image_list']['gourmet'] = 'Gourmet';
$app_list_strings['marker_image_list']['grocery'] = 'Épicerie';
$app_list_strings['marker_image_list']['hairsalon'] = 'Salon de coiffure';
$app_list_strings['marker_image_list']['helicopter'] = 'Hélicoptère';
$app_list_strings['marker_image_list']['highway'] = 'Autoroute';
$app_list_strings['marker_image_list']['historical_quarter'] = 'Quartier Historique';
$app_list_strings['marker_image_list']['home'] = 'Accueil';
$app_list_strings['marker_image_list']['hospital'] = 'Hôpital';
$app_list_strings['marker_image_list']['hostel'] = 'Hôtel';
$app_list_strings['marker_image_list']['hotel'] = 'Hôtel';
$app_list_strings['marker_image_list']['hotel_1_star'] = 'Hôtel 1 étoile';
$app_list_strings['marker_image_list']['hotel_2_stars'] = 'Hôtel 2 étoiles';
$app_list_strings['marker_image_list']['hotel_3_stars'] = 'Hôtel 3 étoiles';
$app_list_strings['marker_image_list']['hotel_4_stars'] = 'Hôtel 4 étoiles';
$app_list_strings['marker_image_list']['hotel_5_stars'] = 'Hôtel 5 étoiles';
$app_list_strings['marker_image_list']['info'] = 'Info';
$app_list_strings['marker_image_list']['justice'] = 'Justice';
$app_list_strings['marker_image_list']['lake'] = 'Lac';
$app_list_strings['marker_image_list']['laundromat'] = 'Laverie automatique';
$app_list_strings['marker_image_list']['left'] = 'Gauche';
$app_list_strings['marker_image_list']['left_then_down'] = 'Gauche puis Bas';
$app_list_strings['marker_image_list']['left_then_up'] = 'Gauche puis Haut';
$app_list_strings['marker_image_list']['library'] = 'Library';
$app_list_strings['marker_image_list']['lighthouse'] = 'Phare';
$app_list_strings['marker_image_list']['liquor'] = 'Alcool';
$app_list_strings['marker_image_list']['lock'] = 'Serrure';
$app_list_strings['marker_image_list']['main_road'] = 'Route principale';
$app_list_strings['marker_image_list']['massage'] = 'Massage';
$app_list_strings['marker_image_list']['mobile_phone_tower'] = 'Antenne Relais Mobile';
$app_list_strings['marker_image_list']['modern_tower'] = 'Tour moderne';
$app_list_strings['marker_image_list']['monastery'] = 'Monastère';
$app_list_strings['marker_image_list']['monday'] = 'Monday';
$app_list_strings['marker_image_list']['monument'] = 'Monument';
$app_list_strings['marker_image_list']['mosque'] = 'Mosquée';
$app_list_strings['marker_image_list']['motorcycle'] = 'Moto';
$app_list_strings['marker_image_list']['museum'] = 'Musée';
$app_list_strings['marker_image_list']['music_live'] = 'Concert Live';
$app_list_strings['marker_image_list']['oil_pump_jack'] = 'Chevalet de pompage';
$app_list_strings['marker_image_list']['pagoda'] = 'Pagode';
$app_list_strings['marker_image_list']['palace'] = 'Palais';
$app_list_strings['marker_image_list']['panoramic'] = 'Panoramique';
$app_list_strings['marker_image_list']['park'] = 'Parc';
$app_list_strings['marker_image_list']['park_and_ride'] = 'Parc relais';
$app_list_strings['marker_image_list']['parking'] = 'Stationnement';
$app_list_strings['marker_image_list']['photo'] = 'Photo';
$app_list_strings['marker_image_list']['picnic'] = 'Pic-Nic';
$app_list_strings['marker_image_list']['places_unvisited'] = 'Endroits inconnus';
$app_list_strings['marker_image_list']['places_visited'] = 'Endroits visités';
$app_list_strings['marker_image_list']['playground'] = 'Terrain de jeux';
$app_list_strings['marker_image_list']['police'] = 'Police';
$app_list_strings['marker_image_list']['port'] = 'Port';
$app_list_strings['marker_image_list']['postal'] = 'Boîte aux lettres';
$app_list_strings['marker_image_list']['power_line_pole'] = 'Poteau électrique';
$app_list_strings['marker_image_list']['power_plant'] = 'Centrale électrique';
$app_list_strings['marker_image_list']['power_substation'] = 'Poste électrique';
$app_list_strings['marker_image_list']['public_art'] = 'Art public';
$app_list_strings['marker_image_list']['rain'] = 'Pluie';
$app_list_strings['marker_image_list']['real_estate'] = 'Immobilier';
$app_list_strings['marker_image_list']['regroup'] = 'Regroupement';
$app_list_strings['marker_image_list']['resort'] = 'Station';
$app_list_strings['marker_image_list']['restaurant'] = 'Restaurant';
$app_list_strings['marker_image_list']['restaurant_african'] = 'Restaurant Africain';
$app_list_strings['marker_image_list']['restaurant_barbecue'] = 'Restaurant grill';
$app_list_strings['marker_image_list']['restaurant_buffet'] = 'Restaurant buffet';
$app_list_strings['marker_image_list']['restaurant_chinese'] = 'Restaurant Chinois';
$app_list_strings['marker_image_list']['restaurant_fish'] = 'Restaurant de poisson';
$app_list_strings['marker_image_list']['restaurant_fish_chips'] = 'Restaurant Fish and Chips';
$app_list_strings['marker_image_list']['restaurant_gourmet'] = 'Restaurant gastronomique';
$app_list_strings['marker_image_list']['restaurant_greek'] = 'Restaurant grec';
$app_list_strings['marker_image_list']['restaurant_indian'] = 'Restaurant indien';
$app_list_strings['marker_image_list']['restaurant_italian'] = 'Restaurant italien';
$app_list_strings['marker_image_list']['restaurant_japanese'] = 'Restaurant japonais';
$app_list_strings['marker_image_list']['restaurant_kebab'] = 'Kebab';
$app_list_strings['marker_image_list']['restaurant_korean'] = 'Restaurant coréen';
$app_list_strings['marker_image_list']['restaurant_mediterranean'] = 'Restaurant méditerranéen';
$app_list_strings['marker_image_list']['restaurant_mexican'] = 'Restaurant mexicain';
$app_list_strings['marker_image_list']['restaurant_romantic'] = 'Restaurant romantique';
$app_list_strings['marker_image_list']['restaurant_thai'] = 'Restaurant thai';
$app_list_strings['marker_image_list']['restaurant_turkish'] = 'Restaurant turc';
$app_list_strings['marker_image_list']['right'] = 'À droite';
$app_list_strings['marker_image_list']['right_then_down'] = 'À droite et en bas';
$app_list_strings['marker_image_list']['right_then_up'] = 'À droite et en haut';
$app_list_strings['marker_image_list']['saturday'] = 'Saturday';
$app_list_strings['marker_image_list']['school'] = 'Ecole';
$app_list_strings['marker_image_list']['shopping_mall'] = 'Centre Commercial';
$app_list_strings['marker_image_list']['shore'] = 'Rivage';
$app_list_strings['marker_image_list']['sight'] = 'Vue';
$app_list_strings['marker_image_list']['small_city'] = 'Village';
$app_list_strings['marker_image_list']['snow'] = 'Neige';
$app_list_strings['marker_image_list']['spaceport'] = 'Base de lancement';
$app_list_strings['marker_image_list']['speed_100'] = 'Vitesse à 100';
$app_list_strings['marker_image_list']['speed_110'] = 'Vitesse à 110';
$app_list_strings['marker_image_list']['speed_120'] = 'Vitesse à 120';
$app_list_strings['marker_image_list']['speed_130'] = 'Vitesse à 130';
$app_list_strings['marker_image_list']['speed_20'] = 'Vitesse à 20';
$app_list_strings['marker_image_list']['speed_30'] = 'Vitesse à 30';
$app_list_strings['marker_image_list']['speed_40'] = 'Vitesse à 40';
$app_list_strings['marker_image_list']['speed_50'] = 'Vitesse à 50';
$app_list_strings['marker_image_list']['speed_60'] = 'Vitesse à 60';
$app_list_strings['marker_image_list']['speed_70'] = 'Vitesse à 70';
$app_list_strings['marker_image_list']['speed_80'] = 'Vitesse à 80';
$app_list_strings['marker_image_list']['speed_90'] = 'Vitesse à 90';
$app_list_strings['marker_image_list']['speed_hump'] = 'Ralentisseur';
$app_list_strings['marker_image_list']['stadium'] = 'Stade';
$app_list_strings['marker_image_list']['statue'] = 'Statue';
$app_list_strings['marker_image_list']['steam_train'] = 'Train à vapeur';
$app_list_strings['marker_image_list']['stop'] = 'Stop';
$app_list_strings['marker_image_list']['stoplight'] = 'Feu';
$app_list_strings['marker_image_list']['subway'] = 'Métro';
$app_list_strings['marker_image_list']['sun'] = 'Sun';
$app_list_strings['marker_image_list']['sunday'] = 'Sunday';
$app_list_strings['marker_image_list']['supermarket'] = 'Supermarché';
$app_list_strings['marker_image_list']['synagogue'] = 'Synagogue';
$app_list_strings['marker_image_list']['tapas'] = 'Tapas';
$app_list_strings['marker_image_list']['taxi'] = 'Taxi';
$app_list_strings['marker_image_list']['taxiway'] = 'Voie réservée aux taxis';
$app_list_strings['marker_image_list']['teahouse'] = 'Salon de Thé';
$app_list_strings['marker_image_list']['telephone'] = 'Téléphone';
$app_list_strings['marker_image_list']['temple_hindu'] = 'Temple Hindou';
$app_list_strings['marker_image_list']['terrace'] = 'Terrasse';
$app_list_strings['marker_image_list']['text'] = 'Texte';
$app_list_strings['marker_image_list']['theater'] = 'Théâtre';
$app_list_strings['marker_image_list']['theme_park'] = 'Parc d\'Attractions';
$app_list_strings['marker_image_list']['thursday'] = 'Thursday';
$app_list_strings['marker_image_list']['toilets'] = 'Toilettes';
$app_list_strings['marker_image_list']['toll_station'] = 'Péage';
$app_list_strings['marker_image_list']['tower'] = 'Tour';
$app_list_strings['marker_image_list']['traffic_enforcement_camera'] = 'Caméra de surveillance routière';
$app_list_strings['marker_image_list']['train'] = 'Train';
$app_list_strings['marker_image_list']['tram'] = 'Tramway';
$app_list_strings['marker_image_list']['truck'] = 'Camion';
$app_list_strings['marker_image_list']['tuesday'] = 'Tuesday';
$app_list_strings['marker_image_list']['tunnel'] = 'Tunnel';
$app_list_strings['marker_image_list']['turn_left'] = 'Tourner à Gauche';
$app_list_strings['marker_image_list']['turn_right'] = 'Tourner à Droite';
$app_list_strings['marker_image_list']['university'] = 'Université';
$app_list_strings['marker_image_list']['up'] = 'En haut';
$app_list_strings['marker_image_list']['up_left'] = 'Haut gauche';
$app_list_strings['marker_image_list']['up_right'] = 'Haut droit';
$app_list_strings['marker_image_list']['up_then_left'] = 'En haut et à gauche';
$app_list_strings['marker_image_list']['up_then_right'] = 'En haut et à droite';
$app_list_strings['marker_image_list']['vespa'] = 'Vespa';
$app_list_strings['marker_image_list']['video'] = 'Vidéo';
$app_list_strings['marker_image_list']['villa'] = 'Maison';
$app_list_strings['marker_image_list']['water'] = 'Eau';
$app_list_strings['marker_image_list']['waterfall'] = 'Chute d\'eau';
$app_list_strings['marker_image_list']['watermill'] = 'Moulin à Eau';
$app_list_strings['marker_image_list']['waterpark'] = 'Parc Aquatique';
$app_list_strings['marker_image_list']['watertower'] = 'Château d\'eau';
$app_list_strings['marker_image_list']['wednesday'] = 'Wednesday';
$app_list_strings['marker_image_list']['wifi'] = 'WiFi';
$app_list_strings['marker_image_list']['wind_turbine'] = 'Eolienne';
$app_list_strings['marker_image_list']['windmill'] = 'Moulin à vent';
$app_list_strings['marker_image_list']['winery'] = 'Chai';
$app_list_strings['marker_image_list']['work_office'] = 'Bureau';
$app_list_strings['marker_image_list']['world_heritage_site'] = 'Site du patrimoine mondial';
$app_list_strings['marker_image_list']['zoo'] = 'Zoo';

//Reschedule
$app_list_strings['call_reschedule_dom'][''] = '';
$app_list_strings['call_reschedule_dom']['Out of Office'] = 'Absent du bureau';
$app_list_strings['call_reschedule_dom']['In a Meeting'] = 'En réunion';

$app_strings['LBL_RESCHEDULE_LABEL'] = 'Replanifier';
$app_strings['LBL_RESCHEDULE_TITLE'] = 'Merci de saisir les informations de la replanification';
$app_strings['LBL_RESCHEDULE_DATE'] = 'Date :';
$app_strings['LBL_RESCHEDULE_REASON'] = 'Motif :';
$app_strings['LBL_RESCHEDULE_ERROR1'] = 'Veuillez sélectionner une date valide';
$app_strings['LBL_RESCHEDULE_ERROR2'] = 'Merci de choisir la cause';

$app_strings['LBL_RESCHEDULE_PANEL'] = 'Reschedule';
$app_strings['LBL_RESCHEDULE_HISTORY'] = 'Historique des tentatives d\'appel';
$app_strings['LBL_RESCHEDULE_COUNT'] = 'Tentatives d\'appel';

//SecurityGroups
$app_list_strings['moduleList']['SecurityGroups'] = 'Gestion de la sécurité';
$app_strings['LBL_SECURITYGROUP'] = 'Groupes de sécurité';
$app_strings['LBL_ROLE'] = 'Rôle';

$app_list_strings['moduleList']['OutboundEmailAccounts'] = 'Comptes d\'E-mail sortant';
$app_list_strings['moduleList']['ExternalOAuthConnection'] = 'Connexion OAuth Externe';
$app_list_strings['moduleList']['ExternalOAuthProvider'] = 'Fournisseur OAuth externe';
$app_list_strings['moduleList']['ManualMigrationTasks'] = 'Migrations';
$app_list_strings['moduleList']['Processes'] = 'Processes';
$app_list_strings['moduleList']['AsyncTaskItems'] = 'Async Task Item';

$app_strings['LNK_USER_MENU_PROCESSES'] = 'Processes';

//social
$app_strings['FACEBOOK_USER_C'] = 'Facebook';
$app_strings['TWITTER_USER_C'] = 'Twitter';
$app_strings['LBL_PANEL_SOCIAL_FEED'] = 'Détails des flux sociaux';

$app_strings['LBL_SUBPANEL_FILTER_LABEL'] = 'Filter';

$app_strings['LBL_COLLECTION_TYPE'] = 'Type';

$app_strings['LBL_ADD_TAB'] = 'Ajouter un onglet';
$app_strings['LBL_EDIT_TAB'] = 'Editer les onglets';
$app_strings['LBL_SUITE_DASHBOARD'] = 'Tableau de bord SuiteCRM';
$app_strings['LBL_ENTER_DASHBOARD_NAME'] = 'Entrer le nom du tableau de bord :';
$app_strings['LBL_NUMBER_OF_COLUMNS'] = 'Nombre de colonnes :';
$app_strings['LBL_DELETE_DASHBOARD1'] = 'Etes-vous sûr de vouloir effacer ce';
$app_strings['LBL_DELETE_DASHBOARD2'] = 'tableau de bord ?';
$app_strings['LBL_ADD_DASHBOARD_PAGE'] = 'Ajouter une page au tableau de bord';
$app_strings['LBL_DELETE_DASHBOARD_PAGE'] = 'Supprimer la page du tableau de bord en cours';
$app_strings['LBL_RENAME_DASHBOARD_PAGE'] = 'Renommer la page du tableau de bord';
$app_strings['LBL_SUITE_DASHBOARD_ACTIONS'] = 'ACTIONS';

$app_list_strings['collection_temp_list'] = array(
    'Tasks' => 'Tâches',
    'Meetings' => 'Réunions',
    'Calls' => 'Appels',
    'Notes' => 'Notes',
    'Emails' => 'E-mails'
);

$app_list_strings['moduleList']['TemplateEditor'] = 'Editeur de modèles';
$app_strings['LBL_CONFIRM_CANCEL_INLINE_EDITING'] = "Vous avez cliqué en dehors du champ que vous éditiez sans l’enregistrer. Cliquez sur ok si vous voulez perdre vos modifications, ou sur annuler si vous souhaitez continuer l’édition";
$app_strings['LBL_LOADING_ERROR_INLINE_EDITING'] = "Il y a eu une erreur lors du chargement du champ. Votre session peut avoir expiré. Veuillez vous connecter à nouveau pour résoudre ce problème";

$app_list_strings['moduleList']['AOBH_BusinessHours'] = 'Business Hours';
$app_list_strings['business_hours_list']['0'] = '12:00';
$app_list_strings['business_hours_list']['1'] = '01:00';
$app_list_strings['business_hours_list']['2'] = '02:00';
$app_list_strings['business_hours_list']['3'] = '03:00';
$app_list_strings['business_hours_list']['4'] = '04:00';
$app_list_strings['business_hours_list']['5'] = '05:00';
$app_list_strings['business_hours_list']['6'] = '06:00';
$app_list_strings['business_hours_list']['7'] = '07:00';
$app_list_strings['business_hours_list']['8'] = '08:00';
$app_list_strings['business_hours_list']['9'] = '09:00';
$app_list_strings['business_hours_list']['10'] = '10:00';
$app_list_strings['business_hours_list']['11'] = '11:00';
$app_list_strings['business_hours_list']['12'] = '00:00';
$app_list_strings['business_hours_list']['13'] = '13:00';
$app_list_strings['business_hours_list']['14'] = '14:00';
$app_list_strings['business_hours_list']['15'] = '15:00';
$app_list_strings['business_hours_list']['16'] = '16:00';
$app_list_strings['business_hours_list']['17'] = '17:00';
$app_list_strings['business_hours_list']['18'] = '18:00';
$app_list_strings['business_hours_list']['19'] = '19:00';
$app_list_strings['business_hours_list']['20'] = '20:00';
$app_list_strings['business_hours_list']['21'] = '21:00';
$app_list_strings['business_hours_list']['22'] = '22:00';
$app_list_strings['business_hours_list']['23'] = '23:00';
$app_list_strings['day_list']['Monday'] = 'Monday';
$app_list_strings['day_list']['Tuesday'] = 'Tuesday';
$app_list_strings['day_list']['Wednesday'] = 'Wednesday';
$app_list_strings['day_list']['Thursday'] = 'Thursday';
$app_list_strings['day_list']['Friday'] = 'Friday';
$app_list_strings['day_list']['Saturday'] = 'Saturday';
$app_list_strings['day_list']['Sunday'] = 'Sunday';
$app_list_strings['pdf_page_size_dom']['A4'] = 'A4';
$app_list_strings['pdf_page_size_dom']['Letter'] = 'Lettres';
$app_list_strings['pdf_page_size_dom']['Legal'] = 'Légal';
$app_list_strings['pdf_orientation_dom']['Portrait'] = 'Photo';
$app_list_strings['pdf_orientation_dom']['Landscape'] = 'Paysage';


$app_list_strings['moduleList']['SurveyResponses'] = 'Réponses au sondage';
$app_list_strings['moduleList']['Surveys'] = 'Sondages';
$app_list_strings['moduleList']['SurveyQuestionResponses'] = 'Réponses aux questions du sondage';
$app_list_strings['moduleList']['SurveyQuestions'] = 'Questions du sondage';
$app_list_strings['moduleList']['SurveyQuestionOptions'] = 'Options des questions du sondage';
$app_list_strings['survey_status_list']['Draft'] = 'Brouillon';
$app_list_strings['survey_status_list']['Public'] = 'Public';
$app_list_strings['survey_status_list']['Closed'] = 'Closed';
$app_list_strings['surveys_question_type']['Text'] = 'Texte';
$app_list_strings['surveys_question_type']['Textbox'] = 'Boîte de saisie';
$app_list_strings['surveys_question_type']['Checkbox'] = 'Case à cocher';
$app_list_strings['surveys_question_type']['Radio'] = 'Radio';
$app_list_strings['surveys_question_type']['Dropdown'] = 'Liste déroulante';
$app_list_strings['surveys_question_type']['Multiselect'] = 'Sélection multiple';
$app_list_strings['surveys_question_type']['Matrix'] = 'Matrice';
$app_list_strings['surveys_question_type']['DateTime'] = 'Date et heure';
$app_list_strings['surveys_question_type']['Date'] = 'Date';
$app_list_strings['surveys_question_type']['Scale'] = 'Échelle';
$app_list_strings['surveys_question_type']['Rating'] = 'Rating';
$app_list_strings['surveys_matrix_options'][0] = 'Satisfait';
$app_list_strings['surveys_matrix_options'][1] = 'Ni satisfait ni insatisfait';
$app_list_strings['surveys_matrix_options'][2] = 'Insatisfait (e)';

$app_strings['LBL_OPT_IN_PENDING_EMAIL_NOT_SENT'] = 'Dans l\'attente de la confirmation opt-in, Confirmation opt-in non envoyée';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_FAILED'] = 'Erreur d\'envoi de l\'e-mail de confirmation de consentement';
$app_strings['LBL_OPT_IN_PENDING_EMAIL_SENT'] = 'Dans l\'attente de la confirmation opt-in, Confirmation opt-in envoyée';
$app_strings['LBL_OPT_IN'] = 'Activé';
$app_strings['LBL_OPT_IN_CONFIRMED'] = 'Confirmer l\'abonnement';
$app_strings['LBL_OPT_IN_OPT_OUT'] = 'Désinscrit';
$app_strings['LBL_OPT_IN_INVALID'] = 'Invalid';

/** @see SugarEmailAddress */
$app_list_strings['email_settings_opt_in_dom'] = array(
    'not-opt-in' => 'Disabled',
    'opt-in' => 'Consentement',
    'confirmed-opt-in' => 'Confirmer l\'abonnement'
);

$app_list_strings['email_confirmed_opt_in_dom'] = array(
    'not-opt-in' => 'Non activé',
    'opt-in' => 'Consentement',
    'confirmed-opt-in' => 'Confirmer l\'abonnement'
);

$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL'] = 'L\'e-mail de confirmation de consentement a été ajouté à la file d’attente de messagerie pour les adresses %s . ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_NOT_OPT_IN'] = 'Impossible d’envoyer des e-mails à %s adresse(s) e-mail, car elles ne sont pas activées. ';
$app_strings['RESPONSE_SEND_CONFIRM_OPT_IN_EMAIL_MISSING_EMAIL_ADDRESS_ID'] = 'L\'adresse e-mail %s n\'a pas d\' id valide. ';

$app_strings['ERR_TWO_FACTOR_FAILED'] = 'Échec de l’authentification en deux étapes';
$app_strings['ERR_TWO_FACTOR_CODE_SENT'] = 'Code envoyé pour l’authentification en deux étapes.';
$app_strings['ERR_TWO_FACTOR_CODE_FAILED'] = 'Échec de l\'envoi du code pour l\'authentification à deux facteurs.';
$app_strings['LBL_THANKS_FOR_SUBMITTING'] = 'Merci pour votre intérêt.';

$app_strings['ERR_IP_CHANGE'] = 'Votre session a été clôturée à cause d\'un changement de votre adresse IP';
$app_strings['ERR_RETURN'] = 'Retour à l\'accueil';


$app_list_strings['oauth2_grant_type_dom'] = array(
    'password' => 'Attribution de mot de passe',
    'client_credentials' => 'Identifiants client',
    'implicit' => 'Implicite',
    'authorization_code' => 'Code d\'autorisation'
);

$app_list_strings['oauth2_duration_units'] = [
    'minute' => 'minutes',
    'hour' => 'heures',
    'day' => 'days',
    'week' => 'semaines',
    'month' => 'mois',
];

$app_list_strings['search_controllers'] = [
    'Search' => 'Recherche (nouveau)',
    'UnifiedSearch' => 'Recherche unifiée globale (ancien)'
];

// Calendar Account Types dropdown
$app_list_strings['calendar_account_types'] = [
    'personal' => 'Personal',
    'shared' => 'Partagé',
    'group' => 'Group',
];

// Calendar Connection Status dropdown
$app_list_strings['calendar_connection_status_list'] = [
    'never_tested' => 'Never Tested',
    'success' => 'Accès validé',
    'failed' => 'Failed',
];

// Calendar Sync Attempt Status dropdown
$app_list_strings['sync_attempt_status_list'] = [
    '' => '',
    'in_progress' => 'En cours',
    'success' => 'Success',
    'warning' => 'Avertissement',
    'error' => 'Erreur',
];

$app_list_strings['sync_attempt_message_list'] = [
    '' => '',
    'sync_complete' => 'All meetings synced.',
    'up_to_date' => 'No new meetings to sync.',
    'meetings_failed' => 'Some meetings failed to sync. Check logs.',
    'sync_partial' => 'Some meetings synced. More pending due to limits.',
    'sync_failed' => 'No meetings synced. Check logs.',
];

$app_strings['LBL_DEFAULT_API_ERROR_TITLE'] = 'Erreur API JSON';
$app_strings['LBL_DEFAULT_API_ERROR_DETAIL'] = 'Une erreur API JSON est survenue.';
$app_strings['LBL_API_EXCEPTION_DETAIL'] = 'Version de l’API : 8';
$app_strings['LBL_BAD_REQUEST_EXCEPTION_DETAIL'] = 'Veuillez compléter les champs obligatoires';
$app_strings['LBL_EMPTY_BODY_EXCEPTION_DETAIL'] = 'l\'API JSON attend une requête au format JSON';
$app_strings['LBL_INVALID_JSON_API_REQUEST_EXCEPTION_DETAIL'] = 'Impossible de valider la requête sur l\'API Json';
$app_strings['LBL_INVALID_JSON_API_RESPONSE_EXCEPTION_DETAIL'] = 'Impossible de valider la réponse de l\'API Json';
$app_strings['LBL_MODULE_NOT_FOUND_EXCEPTION_DETAIL'] = 'L\'API JSON ne peut pas trouver la ressource';
$app_strings['LBL_NOT_ACCEPTABLE_EXCEPTION_DETAIL'] = 'L\'en-tête "Accept" attendu par l\'API Json devrait être du type "application/vnd.api+json"';
$app_strings['LBL_UNSUPPORTED_MEDIA_TYPE_EXCEPTION_DETAIL'] = 'L\'en-tête "Content-Type" attendu par l\'API Json devrait être du type "application/vnd.api+json"';

$app_strings['MSG_BROWSER_NOTIFICATIONS_ENABLED'] = 'Les notifications de bureau sont maintenant activées pour ce navigateur web.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_DISABLED'] = 'Les notifications de bureau sont désactivées pour ce navigateur web. Utilisez les préférences de votre navigateur afin de les ré-activer.';
$app_strings['MSG_BROWSER_NOTIFICATIONS_UNSUPPORTED'] = 'Ce navigateur ne supporte pas les notifications de bureau.';

$app_strings['LBL_THERE_WAS_AN_ERR'] = 'Une erreur s\'est produite : ';
$app_strings['LBL_CLICK_HERE'] = 'Cliquer ici';
$app_strings['LBL_TO_CONTINUE'] = ' pour continuer.';
$app_strings['LBL_OPT_OUT'] = 'Désinscription';
$app_strings['LBL_INVALID_EMAIL'] = 'Invalid';
$app_strings['LBL_PRIMARY'] = 'Primary';
$app_strings['LBL_EMAIL_ADDRESS'] = 'Adresse email';

$app_strings['IMAP_HANDLER_ERROR'] = 'ERREUR : {error}; la clé était: "{key}".';
$app_strings['IMAP_HANDLER_SUCCESS'] = 'OK : réglages de test modifier en "{key}“';
$app_strings['IMAP_HANDLER_ERROR_INVALID_REQUEST'] = 'Requête non valide. Utilisez la valeur "{var}".';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN_BY_KEY'] = 'Une erreur inconnue s\'est produite, la clé "{key}" n\'a pas été enregistrée.';
$app_strings['IMAP_HANDLER_ERROR_NO_TEST_SET'] = 'Il n’existe pas de paramètres de test.';
$app_strings['IMAP_HANDLER_ERROR_NO_KEY'] = 'Clé introuvable.';
$app_strings['IMAP_HANDLER_ERROR_KEY_SAVE'] = 'Erreur d\'enregistrement de clé.';
$app_strings['IMAP_HANDLER_ERROR_UNKNOWN'] = 'Erreur inconnue';
$app_strings['LBL_SEARCH_TITLE']                   = 'Search';
$app_strings['LBL_SEARCH_TEXT_FIELD_TITLE_ATTR']   = 'Critère de recherche';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_TITLE_ATTR'] = 'Search';
$app_strings['LBL_SEARCH_SUBMIT_FIELD_VALUE']      = 'Search';
$app_strings['LBL_SEARCH_QUERY']                   = 'Requête de recherche : ';
$app_strings['LBL_SEARCH_RESULTS_PER_PAGE']        = 'Results per module: ';
$app_strings['LBL_SEARCH_ENGINE']                  = 'Moteur:';
$app_strings['LBL_SEARCH_TOTAL'] = 'Résultat(s) : ';
$app_strings['LBL_SEARCH_PREV'] = 'Précédent';
$app_strings['LBL_SEARCH_NEXT'] = 'Suivant';
$app_strings['LBL_SEARCH_PAGE'] = 'Page ';
$app_strings['LBL_SEARCH_OF'] = ' sur ';
$app_strings['LBL_INSIGHTS'] = 'Insights';
$app_strings['LBL_CHARTS'] = 'Graphiques';
$app_strings['LBL_CHART_NOT_FOUND'] = 'Graphique introuvable';
$app_strings['LBL_NO_DATA'] = 'Aucune donnée';
$app_strings['LBL_ERROR_FETCHING_METADATA'] = 'Une erreur s\'est produite lors de la récupération des métadonnées';
$app_strings['LBL_TOTAL'] = 'Total';
$app_strings['LBL_ACTIONS'] = 'Actions';
$app_strings['LBL_SELECT_SUBPANEL_BANNER'] = 'Sélectionnez les sous-panneaux à afficher';
$app_strings['LBL_SELECT_ITEM'] = 'Sélectionner un élément';
$app_strings['LBL_ITEMS_SELECTED'] = 'items selected';
$app_strings['LBL_WIDGET_NOT_FOUND'] = 'Widget introuvable';
$app_strings['LBL_BAD_CONFIG'] = 'Configuration incorrecte';
$app_strings['LBL_CONFIG_BAD_CONTEXT'] = 'Configuration incorrecte : le contexte n\'est pas correctement configuré';
$app_strings['LBL_CONFIG_NO_CONFIG'] = 'Configuration incorrecte : configuration manquante';
$app_strings['LBL_CONFIG_NO_STATISTICS_KEY'] = 'Configuration incorrecte : clé de statistiques manquante';
$app_strings['LBL_STATISTIC_ERROR'] = 'Erreur lors du chargement des statistiques';
$app_strings['LBL_STATISTIC_ERROR_DESC'] = 'Erreur lors du chargement des statistiques';
$app_strings['LBL_STATISTIC_ERROR_DESC_TOOLTIP'] = 'Erreur lors du chargement des statistiques. Veuillez contacter votre administrateur';
$app_strings['LBL_AVERAGE_CLOSED_WON_PER_YEAR'] = 'Moyenne des affaires gagnées par an';
$app_strings['LBL_OPPORTUNITIES_TOTAL'] = 'Valeur totale de l\'affaire';
$app_strings['LBL_CASE_TOTAL_DAYS_OPEN'] = 'Nombre total de jours d\'ouverture';
$app_strings['LBL_DAYS_OPEN'] = 'Jours Ouverts';
$app_strings['LBL_DAYS_IN_SALE_STAGE'] = 'DAY(S) THIS OPPORTUNITY HAS BEEN AT THIS SALES STAGE';
$app_strings['LBL_STAT_DAYS'] = 'Jour(s)';
$app_strings['LBL_CLOSED_PER_YEAR'] = 'Fermé par an';
$app_strings['LBL_WAS_OPEN'] = 'Ce cas était ouvert pour';
$app_strings['LBL_HAS_BEEN_OPEN'] = 'Ce cas était ouvert pour';
$app_strings['LBL_NUMBER_OF_CASES_PER_ACCOUNT'] = 'Nombre de cas par compte';
$app_strings['LBL_TOTAL_CASES_FOR_THIS_ACCOUNT'] = 'Total Cases For This Account';
$app_strings['LBL_NONE_OUTSTANDING'] = 'Aucun';
$app_strings['LBL_VALIDATION_ERROR_REQUIRED'] = 'Champ obligatoire manquant : {{fields.field.label}}';
$app_strings['LBL_VALIDATION_ERROR_ATTACHMENT'] = 'File attachment(s) not valid.';
$app_strings['LBL_VALIDATION_ERROR_CURRENCY_FORMAT'] = "Format de devise invalide. Requis: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_INT_FORMAT'] = "Format d'entier non valide. Requis: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_FLOAT_FORMAT'] = "Format de float invalide. Requis : '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_DATE_FORMAT'] = "Format de date invalide. Requis: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_DATETIME_FORMAT'] = "Format de date et heure invalide. Requis: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_UNSUBSCRIBE_LINK'] = "Non-Transactional Emails must contain an unsubscribe link. Please add an opt out tracker, '{{ unsubscribe_link }}' or select the icon: ";
$app_strings['LBL_VALIDATION_ERROR_REMOVE_UNSUBSCRIBE_LINK'] = "Transactional Emails must NOT contain an unsubscribe link. Please remove '{{ unsubscribe_link }}'";
$app_strings['LBL_VALIDATION_ERROR_EMAIL_FORMAT'] = "Format d'e-mail invalide. Requis: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_PHONE_FORMAT'] = "Format de téléphone invalide.";
$app_strings['LBL_VALIDATION_ERROR_MIN'] = "Valeur invalide. La valeur doit être supérieure ou égale à '{{context.min}}'";
$app_strings['LBL_VALIDATION_ERROR_VERSIONING'] = "Invalid format. Expected: '{{context.expected}}'";
$app_strings['LBL_VALIDATION_ERROR_MAX'] = "Valeur invalide. La valeur doit être inférieure ou égale à '{{context.max}}'";
$app_strings['LBL_MULTIPLE_PRIMARY_EMAIL_VALIDATION_ERROR'] = "Only one Valid Email Address should be marked as primary";
$app_strings['LBL_DUPLICATE_EMAIL_VALIDATION_ERROR'] = "Les doublons d'adresses électroniques ne sont pas autorisés";
$app_strings['LBL_NO_PRIMARY_EMAIL_VALIDATION_ERROR'] = "One Valid Email Address should be marked as primary";
$app_strings['LBL_NO_EM_ID'] = 'Unable to get Email Marketing ID';
$app_strings['LBL_VALIDATION_ERRORS'] = 'Il y a des erreurs de validation, impossible d\'effectuer l\'action.';
$app_strings['LBL_LOADING_IN_PROGRESS'] = 'Le calcul est en cours, veuillez patienter quelques instants avant de réessayer.';
$app_strings['LBL_SELECT_EMAIL_FOR_TEST'] = 'Please Select Targets/ Users or Enter an Email';
$app_strings['LBL_TYPE_TO_SEARCH'] = 'Tapez pour rechercher...';
$app_strings['LBL_SEARCHING'] = 'Recherche ...';
$app_strings['LBL_NOT_FOUND'] = 'Introuvable';
$app_strings['LBL_SEARCH_ERROR'] = 'Erreur de recherche.';
$app_strings['LBL_FOUND'] = 'Trouvé';
$app_strings['LBL_GET_RECORD_LIST_ERROR'] = 'Une erreur s\'est produite lors de la récupération des enregistrements';
$app_strings['LBL_NUMBER_OF_RECORDS'] = 'Le nombre d\'enregistrements';
$app_strings['LBL_FORWARD_SLASH'] = '/';
$app_strings['LBL_CASES_INSIGHT'] = ' {{fields.cases.value}} ( {{fields.default.value}} )';
$app_strings['LBL_INVOICES_INSIGHT'] = ' {{fields.invoices.value}} ( {{fields.default.value}} )';
$app_strings['LBL_CONTRACT_RENEWAL_TOOLTIP'] = 'Date du renouvellement du prochain contrat';
$app_strings['LBL_INVOICES_OVERDUE_TOOLTIP'] = 'Nombre total de factures en retard';
$app_strings['LBL_ACTIVITIES_NEXT_DATE_TOOLTIP'] = 'Date de la prochaine interaction';
$app_strings['LBL_CAMPAIGN_LAST_RECEIVED_TOOLTIP'] = 'Date de réception de la campagne la plus récente';
$app_strings['LBL_OPEN_CASES_COUNT_TOOLTIP'] = 'Nombre total de cas ouverts';
$app_strings['LBL_EVENTS_LAST_DATE_TOOLTIP'] = 'Date de l\'événement le plus récent';
$app_strings['LBL_HISTORY_LAST_DATE_TOOLTIP'] = 'Date de l\'interaction la plus récente';
$app_strings['LBL_OPPORTUNITIES_TOTAL_SUM_TOOLTIP'] = 'Somme totale des affaires';
$app_strings['LBL_QUOTES_EXPIRY_TOOLTIP'] = 'Date d\'expiration du devis suivant';
$app_strings['LBL_DEFAULT_TOTAL_TOOLTIP'] = 'Nombre total d\'enregistrements';
$app_strings['LBL_CONTRACT_RENEWAL'] = 'Date de renouvellement';
$app_strings['LBL_INVOICES_OVERDUE'] = 'Total d\'overdue';
$app_strings['LBL_ACTIVITIES_NEXT_DATE'] = 'Date de l\'activité suivante';
$app_strings['LBL_CAMPAIGN_LAST_RECEIVED'] = 'Dernière participation';
$app_strings['LBL_OPEN_CASES_COUNT'] = 'Cas ouverts';
$app_strings['LBL_EVENTS_LAST_DATE'] = 'Dernier événement auquel vous avez participé';
$app_strings['LBL_HISTORY_LAST_DATE'] = 'Dernier point de contact';
$app_strings['LBL_OPPORTUNITIES_TOTAL_SUM'] = 'Valeur Totale';
$app_strings['LBL_QUOTES_EXPIRY'] = 'Prochaine date d\'expiration';
$app_strings['LBL_DEFAULT_TOTAL'] = 'Total';
$app_strings['AOS_Contracts'] = 'Contrats';
$app_strings['AOS_Quotes'] = 'Devis';
$app_strings['AOS_Invoices'] = 'Factures';
$app_strings['LBL_PHOTO'] = 'Photo';
$app_strings['LBL_CASE_UPDATES'] = 'Mises à jour du cas';
$app_strings['LBL_CASE_UPDATE_SUBMITTED'] = 'Mise à jour du cas envoyée';
$app_strings['LBL_SUMMARY_DEFAULT'] = "{{fields.name.value}}";
$app_strings['LBL_SUMMARY_PERSON'] = "{{fields.salutation.value}} {{fields.first_name.value}} {{fields.last_name.value}}";
$app_strings['LBL_REVISION_FILENAME'] = "{{fields.document_name.value}} - v{{fields.revision.value}}";
$app_strings['LBL_SUMMARY_DOCUMENT'] = "{{fields.document_name.value}}";
$app_strings['LBL_CREATE'] = 'Créer';
$app_strings['LBL_CLEAR_FILTER'] = 'Réinitialiser les filtres';
$app_strings['LBL_QUICK_FILTERS'] = 'Filtres rapides';
$app_strings['LBL_SAVED_FILTER_SAVED'] = 'Filtre enregistré avec succès';
$app_strings['LBL_FILTER_ID_NOT_DEFINED'] = 'Identifiant de filtre non défini';
$app_strings['LBL_GENERIC_CONFIRMATION'] = 'Voulez-vous poursuivre l\'action?';
$app_strings['LBL_SHOW_MORE'] = 'Afficher plus';
$app_strings['LBL_SHOW_LESS'] = 'Afficher moins';
$app_strings['LBL_LOAD_MORE'] = 'Charger plus';
$app_strings['LBL_EMPTY'] = '-- Empty --';
$app_strings['LBL_OPERATOR'] = 'Operator';
$app_strings['LBL_START'] = 'Start';
$app_strings['LBL_END'] = 'End';
$app_strings['LBL_LINE_ITEMS_FIELD_CONFIG'] = 'Mauvaise configuration';


$app_strings['LBL_ACTION_SUCCESS'] = 'Action réussie';

$app_strings['LBL_YES'] = 'Yes';
$app_strings['LBL_NO'] = 'Non';

$app_list_strings['sort_order'] = [];
$app_list_strings['sort_order']['asc'] = 'Ascending';
$app_list_strings['sort_order']['desc'] = 'Descending';

// Labels used by subpanel unlink relationship process
$app_strings['LBL_LINK'] = 'Link';
$app_strings['LBL_LINK_UNLINK'] = 'Link / Unlink';
$app_strings['LBL_SAVE'] = 'Sauvegarder';
$app_strings['LBL_UNLINK_RECORD'] = 'Délier l\'enregistrement';
$app_strings['LBL_DELETE_RECORD'] = 'Delete Record';
$app_strings['LBL_EDIT_RECORD'] = 'Modifier l\'enregistrement';
$app_strings['LBL_UNLINK_RELATIONSHIP_CONFIRM'] = 'Êtes-vous sûr de vouloir dissocier cet enregistrement ? Seule la relation sera dissociée. L\'enregistrement ne sera pas supprimé.';
$app_strings['LBL_UNLINK_RELATIONSHIP_SUCCESS'] = 'L\'enregistrement a été dissocié avec succès.';
$app_strings['LBL_UNLINK_RELATIONSHIP_FAILED'] = 'Une erreur s\'est produite lors de la dissociation de cet enregistrement.';
$app_strings['LBL_ALL_RECORDS_UNLINKED'] = 'All records unlinked successfully';
$app_strings['LBL_SOME_RECORDS_UNLINKED_FAILED'] = 'There was an issue unlinking some records. See the logs for more.';
$app_strings['LBL_LINK_RELATIONSHIP_SUCCESS'] = 'Relation liée avec succès.';
$app_strings['LBL_LINK_RELATIONSHIP_FAILED'] = 'Une erreur s\'est produite lors de la liaison de cette relation.';
$app_strings['LBL_MODULE_NOT_FOUND'] = 'Module introuvable.';
$app_strings['LBL_RECORD_NOT_FOUND'] = 'Impossible de charger l\'enregistrement';
$app_strings['LBL_FILE_NOT_FOUND'] = 'Unable to load file';
$app_strings['LBL_RELATIONSHIP_LOAD_ERROR'] = 'Impossible de charger la relation';
$app_strings['LBL_NOT_LINKED'] = 'Impossible de délier le lien. Les enregistrements ne sont pas liés';
$app_strings['LBL_ACCESS_DENIED'] = 'Accès refusé';
$app_strings['LBL_ADD_RECORDS_TO_TARGET_LIST_SUCCESS'] = 'Enregistrements ajoutés à la liste de cibles avec succès.';
$app_strings['LBL_ADD_RECORDS_TO_TARGET_LIST_FAILED'] = 'Une erreur s\'est produite lors de l\'ajout d\'enregistrements sur la liste de cibles.';
$app_strings['LBL_ADD_CONTACTS_TO_TARGET_LIST_SUCCESS'] = 'Les contacts ont été ajoutés à la liste de cibles avec succès.';
$app_strings['LBL_ADD_CONTACTS_TO_TARGET_LIST_FAILED'] = 'Une erreur s\'est produite lors de l\'ajout de contacts sur la liste de cibles.';
$app_strings['LBL_CHANGED_TO_TEXT'] = 'changé en';
$app_strings['LBL_RECORD_CHANGED'] = 'Enregistrement mis à jour';
$app_strings['LBL_CREATE'] = "Créer";
$app_strings['LBL_USE_ADVANCED_SEARCH'] = 'Utiliser la recherche avancée';
$app_strings['LBL_USE_BASIC_SEARCH'] = 'Utiliser la recherche simple';
$app_strings['LBL_NO_MODULE_SELECTED'] = 'Aucun module sélectionné';
$app_strings['LBL_CLOSE_MENU'] = 'Fermer le menu';
$app_strings['LOGIN_INCORRECT'] = 'Identifiants incorrects, veuillez réessayer.';
$app_strings['LOGIN_TOO_MANY_FAILED'] = 'Trop de tentatives de connexion infructueuses. Veuillez réessayer plus tard.';

// PDF Engines
$app_strings['LBL_LEGACY_MPDF_ENGINE'] = 'Moteur MPDF hérité';
$app_strings['LBL_TCPDF_ENGINE'] = 'Moteur TCPDF';


$app_strings['ERR_INVALID_FILE_NAME'] = 'Nom de fichier invalide :';
$app_strings['LBL_LOGGER_VALID_FILENAME_CHARACTERS'] = 'Ne peuvent être que des caractères alphanumériques, \'.\', \'-\' et \'_\'';
$app_strings['LBL_LOGGER_INVALID_FILENAME'] = 'Nom de fichier d\'importation invalide';

$app_strings['LBL_PASSWORD_SET_NEW_VALUE_TO_RESET'] = 'Mot de passe défini. Entrez la valeur pour définir un nouveau mot de passe.';
$app_strings['LBL_VALUE_SET_PLACEHOLDER'] = 'Valeur définie. Entrez une nouvelle valeur pour remplacer la valeur actuelle.';

$app_strings['ERR_IMAP_OAUTH_CONNECTION_ERROR'] = 'Impossible de se connecter en utilisant le login OAuth avec le serveur de messagerie entrante. Pour la connexion : ';
$app_strings['WARN_OAUTH_TOKEN_SESSION_EXPIRED'] = 'Votre session IMAP OAuth a expiré, veuillez vous reconnecter dans la connexion : ';

$app_strings['ERR_OAUTH_CONNECTION_ERROR'] = 'Not able to connect using OAuth login. For connection: ';

$app_strings['LBL_KEY'] = 'Clé';
$app_strings['LBL_VALUE'] = 'Valeur';
$app_strings['LBL_OPTIONAL'] = 'Facultatif';
$app_strings['LBL_OPTIONAL_CONNECTION_STRING'] = 'Optionnel. Définir pour utiliser une chaîne de connexion spécifique';
$app_strings['LBL_OUTBOUND_ACCOUNT'] = 'Compte Sortant';
$app_strings['LBL_INBOUND_ACCOUNT'] = 'Compte Entrant';
$app_strings['LBL_SYSTEM_ACCOUNT'] = 'Compte Système';
$app_strings['LBL_FROM_SYSTEM'] = 'Envoyer Depuis le Système';
$app_strings['LBL_SIGNATURE'] = 'Signature';
$app_strings['LBL_NEW_NOTIFICATION'] = "Vous avez {{context.unread}} nouvelles notifications";
$app_strings['LBL_ALERT_STATUS_COMPLETED'] = 'Réalisée';
$app_strings['LBL_ALERT_STATUS_COMPLETED_WITH_FAILURES'] = 'Completed With Failures';
$app_strings['LBL_ALERT_STATUS_FAILED'] = 'Failed';
$app_strings['LBL_NOTIFICATION_ITEM_DATE'] = 'Échéance : {{fields.date_start.value}}';
$app_strings['LBL_NOTIFICATION_ITEM_DATE_ENTERED'] = 'Notifié : {{fields.snooze.value}}';
$app_strings['LBL_QUICK_ACTIONS'] = 'Actions rapides';
$app_strings['LBL_RELATIONSHIPS'] = 'Relationships';
$app_strings['LBL_SHOW_CC'] = 'Show Cc';
$app_strings['LBL_SHOW_BCC'] = 'Show Bcc';
$app_strings['LBL_CC'] = 'Cc';
$app_strings['LBL_BCC'] = 'Bcc';
$app_strings['LNK_NEW_EMAIL'] = 'Nouvel E-mail';
$app_strings['LBL_INSERT_TEMPLATE'] = 'Insert Template';
$app_strings['LBL_MISSING_RECORD_DATA'] = 'Missing Record Data';
$app_strings['LBL_MISSING_FIELDS_DATA'] = 'Missing Fields Data';
$app_strings['LBL_WRONG_MODULE_PROVIDED'] = 'Wrong module provided';
$app_strings['LBL_NO_TEMPLATE_ID_PROVIDED'] = 'No template id provided';
$app_strings['LBL_TEMPLATE_NOT_FOUND'] = 'Template not found';
$app_strings['LBL_EMAIL_MODAL_DYNAMIC_TITLE'] = 'New Email{{fields.name.value|prefix:\' - \'}}';
$app_strings['LBL_EMAIL_MODAL_DRAFT_DYNAMIC_TITLE'] = 'Draft{{fields.name.value|prefix:\' - \'}}';
$app_strings['LBL_CLOSE_EMAIL_MODAL'] = 'Are you sure you wish to discard this Email? (Changes will be lost)';
$app_strings['LBL_RELATED_TO_DYNAMIC'] = '{{fields.parent_type.value|uppercase}}';
$app_strings['LBL_RELATED_TO'] = 'Related To';
$app_strings['LBL_OUTBOUND_EMAIL_NAME_COMPOSE_LABEL'] = '{{fields.smtp_from_name}}';
$app_strings['LBL_OUTBOUND_EMAIL_NAME_COMPOSE_SUB_LABEL'] = '{{fields.smtp_from_addr}}';
$app_strings['LBL_SMALL'] = 'Small';
$app_strings['LBL_MEDIUM'] = 'Medium';
$app_strings['LBL_NORMAL'] = 'Normal';
$app_strings['LBL_LARGE'] = 'Large';
$app_strings['LBL_HUGE'] = 'Huge';
$app_strings['LBL_DEFAULT'] = 'Par défaut';
$app_strings['LBL_APPLY'] = 'Apply';
$app_strings['LBL_INSERT_LINK_URL_DESCRIPTION'] = 'Insert URL or email:';
$app_strings['LBL_INSERT_LINK_PLACEHOLDER'] = 'e.g.: https://www.example.com';

$app_strings['LBL_COLOR_BLACK'] = 'Black';
$app_strings['LBL_COLOR_FIREBRICK'] = 'Firebrick';
$app_strings['LBL_COLOR_RED'] = 'Red';
$app_strings['LBL_COLOR_SALMON'] = 'Salmon';
$app_strings['LBL_COLOR_BLUSH'] = 'Blush';
$app_strings['LBL_COLOR_DARK_RED'] = 'Dark Red';
$app_strings['LBL_COLOR_BROWN'] = 'Brown';
$app_strings['LBL_COLOR_DARK_ORANGE'] = 'Dark Orange';
$app_strings['LBL_COLOR_ORANGE'] = 'Orange';
$app_strings['LBL_COLOR_ANTIQUE_WHITE'] = 'Antique White';
$app_strings['LBL_COLOR_SADDLE_BROWN'] = 'Saddle Brown';
$app_strings['LBL_COLOR_GOLDENROD'] = 'Golden Rod';
$app_strings['LBL_COLOR_GOLD'] = 'Gold';
$app_strings['LBL_COLOR_YELLOW'] = 'Yellow';
$app_strings['LBL_COLOR_LIGHT_YELLOW'] = 'Light Yellow';
$app_strings['LBL_COLOR_DARK_SLATE_GRAY'] = 'Dark Slate Grey';
$app_strings['LBL_COLOR_DARK_GREEN'] = 'Dark Green';
$app_strings['LBL_COLOR_GREEN'] = 'Green';
$app_strings['LBL_COLOR_LIME'] = 'Lime';
$app_strings['LBL_COLOR_HONEYDEW'] = 'Honeydew';
$app_strings['LBL_COLOR_TEAL'] = 'Teal';
$app_strings['LBL_COLOR_TURQUOISE'] = 'Turquoise';
$app_strings['LBL_COLOR_AQUA'] = 'Aqua';
$app_strings['LBL_COLOR_PALE_TURQUOISE'] = 'Pale Turquoise';
$app_strings['LBL_COLOR_AZURE'] = 'Azure';
$app_strings['LBL_COLOR_NAVY_BLUE'] = 'Navy Blue';
$app_strings['LBL_COLOR_MEDIUM_BLUE'] = 'Medium Blue';
$app_strings['LBL_COLOR_BLUE'] = 'Blue';
$app_strings['LBL_COLOR_LIGHT_BLUE'] = 'Light Blue';
$app_strings['LBL_COLOR_ALICE_BLUE'] = 'Alice Blue';
$app_strings['LBL_COLOR_INDIGO'] = 'Indigo';
$app_strings['LBL_COLOR_PATRIARCH_PURPLE'] = 'Patriarch Purple';
$app_strings['LBL_COLOR_VIOLET_PURPLE'] = 'Violet Purple';
$app_strings['LBL_COLOR_PLUM'] = 'Plum';
$app_strings['LBL_COLOR_LAVENDER'] = 'Lavender';
$app_strings['LBL_COLOR_DIM_GRAY'] = 'Dim Gray';
$app_strings['LBL_COLOR_GRAY'] = 'Gray';
$app_strings['LBL_COLOR_DARK_GRAY'] = 'Dark Gray';
$app_strings['LBL_COLOR_LIGHT_GRAY'] = 'Light Gray';
$app_strings['LBL_COLOR_WHITE'] = 'White';

$app_strings['LBL_BOLD'] = 'Bold';
$app_strings['LBL_ITALIC'] = 'Italique';
$app_strings['LBL_INSERT_TEMPLATE_VARIABLE'] = 'Insert Variable';
$app_strings['LBL_UNDERLINE'] = 'Underline';
$app_strings['LBL_STRIKETHROUGH'] = 'Strikethrough';
$app_strings['LBL_FONT_FACE'] = 'Font Face';
$app_strings['LBL_TEXT_SIZE'] = 'Text Size';
$app_strings['LBL_TEXT_COLOR'] = 'Text Color';
$app_strings['LBL_TEXT_HIGHLIGHT'] = 'Text Highlight';
$app_strings['LBL_LINK'] = 'Link';
$app_strings['LBL_UNORDERED_LIST'] = 'Unordered List';
$app_strings['LBL_ORDERED_LIST'] = 'Ordered List';
$app_strings['LBL_QUOTE'] = 'Quote';
$app_strings['LBL_UNQUOTE'] = 'Unquote';
$app_strings['LBL_ALIGN'] = 'Align';
$app_strings['LBL_ALIGN_LEFT'] = 'Left';
$app_strings['LBL_ALIGN_CENTER'] = 'Center';
$app_strings['LBL_ALIGN_RIGHT'] = 'Right';
$app_strings['LBL_JUSTIFY'] = 'Justify';
$app_strings['LBL_TEXT_LEFT_TO_RIGHT'] = 'Text Direction: Left to Right';
$app_strings['LBL_TEXT_RIGHT_TO_LEFT'] = 'Text Direction: Right to Left';
$app_strings['LBL_CLEAR_FORMATTING'] = 'Clear Formatting';
$app_strings['LBL_INJECT_UNSUBSCRIBE'] = 'Unsubscribe Link';
$app_strings['LBL_TEXT_INDENT_LEFT'] = 'Indent Text Left';
$app_strings['LBL_TEXT_INDENT_RIGHT'] = 'Indent Text Right';

// Day and Time labels
$app_strings['LBL_SUN'] = 'Sunday';
$app_strings['LBL_MON'] = 'Monday';
$app_strings['LBL_TUE'] = 'Tuesday';
$app_strings['LBL_WED'] = 'Wednesday';
$app_strings['LBL_THU'] = 'Thursday';
$app_strings['LBL_FRI'] = 'Friday';
$app_strings['LBL_SAT'] = 'Saturday';
$app_strings['LBL_ALL'] = 'Every Day';
$app_strings['LBL_EVERY'] = 'Every';
$app_strings['LBL_ON_THE'] = 'On the';
$app_strings['LBL_RANGE'] = 'to';
$app_strings['LBL_FROM'] = 'From';
$app_strings['LBL_AND'] = 'et';
$app_strings['LBL_MINS'] = 'Min';
$app_strings['LBL_MINUTES'] = 'minutes';
$app_strings['LBL_HOUR'] = 'heures';
$app_strings['LBL_HOUR_SING'] = 'hour';
$app_strings['LBL_OFTEN'] = 'As often as possible.';
$app_strings['LBL_MIN_MARK'] = 'minutes';
$app_strings['LBL_INBOUND_EMAIL'] = 'E-mails entrants';

$app_strings['LBL_LEGEND'] = 'Legend';

$app_strings['LBL_EMAIL_MARKETING_NOT_UNSCHEDULED'] = 'Email Marketing is not Un Scheduled cannot schedule';
$app_strings['LBL_INCORRECT_RECORD_ID'] = 'Incorrect record id';

$app_strings['LBL_TEST_ENTRIES_DELETED'] = 'Test Entries Deleted.';
$app_strings['LBL_UNABLE_TO_GET_ID'] = 'Unable to retrieve Email Marketing ID';
$app_strings['LBL_UNABLE_TO_DELETE_TEST_ENTRIES'] = 'Error Deleting Test Entries. See logs for more info';
$app_strings['LBL_SECTION_KEY_NOT_DEFINED'] = 'Section key not defined';
$app_strings['LBL_DOES_BOUNCE_EXIST'] = 'Does a Bounce Email exist?';
$app_strings['LBL_IS_OUTBOUND_CONNECTED'] = 'Is Outbound Email Connected?';
$app_strings['LBL_CAMPAIGN_SETTINGS'] = 'Settings';

$app_strings['LBL_SEND_FROM_QUEUE_DYNAMIC_LABEL'] = '{{ fields.send-from-queue.value }}';
$app_strings['LBL_EMAIL_TO_QUEUE_DYNAMIC_LABEL'] = '{{ fields.email-to-queue.value }}';
$app_strings['LBL_POLL_BOUNCED_CAMPAIGN_DYNAMIC_LABEL'] = '{{ fields.pollMonitoredInboxesForBouncedCampaignEmails.value }}';

$app_strings['LBL_CRON_LINUX_DESC1_DYNAMIC'] = '{{ fields.desc1.value }}';
$app_strings['LBL_CRON_LINUX_DESC2_DYNAMIC'] = '{{ fields.desc2.value }}';
$app_strings['LBL_CRON_LINUX_DESC3_DYNAMIC'] = '{{ fields.desc3.value }}';
$app_strings['LBL_CRON_LINUX_DESC4_DYNAMIC'] = '{{ fields.desc4.value }}';
$app_strings['LBL_CRON_LINUX_DESC5_DYNAMIC'] = '{{ fields.desc5.value }}';
$app_strings['LBL_CRON_LINUX_DESC6_DYNAMIC'] = '{{ fields.desc6.value }}';
$app_strings['LBL_CRON_LINUX_DESC7_DYNAMIC'] = '{{ fields.desc7.value }}';
$app_strings['LBL_CRON_LINUX_DESC8_DYNAMIC'] = '{{ fields.desc8.value }}';

$app_strings['LBL_CRON_WIN_DESC1_DYNAMIC'] = '{{ fields.desc1.value }}';
$app_strings['LBL_CRON_WIN_DESC2_DYNAMIC'] = '{{ fields.desc2.value }}';
$app_strings['LBL_CRON_WIN_DESC3_DYNAMIC'] = '{{ fields.desc3.value }}';
$app_strings['LBL_CRON_WIN_DESC4_DYNAMIC'] = '{{ fields.desc4.value }}';
$app_strings['LBL_CRON_WIN_DESC5_DYNAMIC'] = '{{ fields.desc5.value }}';

$app_strings['LBL_CRON_LAST_RUN'] = 'Last successful run';
$app_strings['LBL_CRON_LAST_USER_TO_RUN'] = 'Last user to run schedulers';
$app_strings['LBL_LAST_RUN_VALUE'] = '{{ fields.lastRun.value }}';
$app_strings['LBL_LAST_USER_RUN_VALUE'] = '{{ fields.user.value }}';
$app_strings['LBL_RUN_USER_INVALID'] = 'This user is not part of `allowed_cron_users` config setting. Therefore the last run was not successful';
$app_strings['LBL_SCHEDULERS_NEVER_RUN'] = 'Schedulers have never been run.';
$app_strings['LBL_MARKETING_ITEMS_PER_RUN'] = 'Campaign Marketing Items Per Run';
$app_strings['LBL_EMAILS_PER_RUN'] = 'Campaign Emails Per Run';
$app_strings['LBL_TRACKERS_ENABLED'] = 'Trackers Enabled';
$app_strings['LBL_TRACKER_LINKS_ENABLED'] = 'Tracker Links Enabled';

$app_strings['LBL_MARKETING_ITEMS_PER_RUN_DYNAMIC_LABEL'] = '{{ fields.campaign_marketing_items_per_run.value }}';
$app_strings['LBL_EMAILS_PER_RUN_DYNAMIC_LABEL'] = '{{ fields.campaign_emails_per_run.value }}';
$app_strings['LBL_EMAILS_MAX_RETRIES'] = 'Campaign Emails Max Retries';
$app_strings['LBL_EMAILS_MAX_RETRIES_DYNAMIC_LABEL'] = '{{ fields.campaign_emails_max_retries.value }}';
$app_strings['LBL_EMAILS_THRESHOLD'] = 'Campaign Emails Error Threshold Per Batch';
$app_strings['LBL_EMAILS_THRESHOLD_DYNAMIC_LABEL'] = '{{ fields.campaign_emails_threshold.value }}';
$app_strings['LBL_TRACKERS_ENABLED_DYNAMIC_LABEL'] = '{{ fields.trackers_enabled.value }}';
$app_strings['LBL_UNSUBSCRIBE'] = 'Unsubscribe';
$app_strings['LBL_INACTIVE'] = 'Désactivé';
$app_strings['LBL_DISPLAYING_TEST_EMAIL_MARKETING_DATA'] = 'Charts and Subpanels currently displaying data generated from Test Emails.';
$app_strings['LBL_DASH_SYMBOL'] = '-';
$app_strings['LBL_FIELD_STORAGE_NOT_SET'] = 'File storage type not set for field. Unable to upload file.';
$app_strings['LBL_FIELD_STORAGE_INVALID_TYPE'] = 'File storage type is not valid for field. Unable to upload file.';
$app_strings['LBL_UPLOAD'] = 'Télécharger';
$app_strings['LBL_UPLOAD_FAILED'] = 'Upload failed, please try again later';
$app_strings['LBL_UPLOADING'] = 'Uploading';
$app_strings['LBL_UPLOAD_FROM_FILES'] = 'Upload from files';
$app_strings['LBL_ATTACH_DOCUMENTS'] = 'Joindre des Documents';
$app_strings['LBL_FILE_FIELD_UPLOAD_BUTTON_DESCRIPTION'] = 'Click or drag a file here to upload';
$app_strings['LBL_ATTACHMENTS_FIELD_UPLOAD_BUTTON_DESCRIPTION'] = 'Drag and drop a file here to upload';
$app_strings['LBL_SOME_ATTACHMENTS_FAILED'] = 'Some attachments failed to upload. See logs for more info.';
$app_strings['LBL_UPLOAD_IMAGE'] = 'Upload Image';
$app_strings['LBL_DOWNLOAD_IMAGE'] = 'Download Image';
$app_strings['LBL_PREVIEW_IMAGE'] = 'Preview Image';
$app_strings['LBL_UPLOAD_IMAGE_DESCRIPTION'] = 'Click or drag an image here to upload';
$app_strings['LBL_INVALID_PROCESS_OPTIONS'] = 'Invalid process options. See logs for more info.';
$app_strings['LBL_TEMPORARY'] = 'Temporary';
$app_strings['LBL_MAX_FILE_SIZE_EXCEEDED'] = 'The file exceeds the maximum allowed size.';
$app_strings['LBL_UNSUPPORTED_IMAGE_TYPE'] = 'The image type is not supported.';
$app_strings['LBL_UNSUPPORTED_FILE_TYPE'] = 'The file type is not supported.';
$app_strings['LBL_UNSUPPORTED_IMAGE_FILE_TYPE'] = 'This image type is not supported.';
$app_strings['LBL_MALWARE_DETECTED'] = 'Malware detected in uploaded file. The upload has been rejected.';

$app_strings['LBL_DEFAULT_OUTBOUND_NOT_SET'] = 'Unable to retrieve Default Outbound Email';
$app_strings['LBL_SMTP_UNABLE_TO_CONNECT']='Unable to connect to SMTP server with the current Outbound Email settings.';
$app_strings['LBL_DEFAULT_OUTBOUND_NOT_CONFIGURED'] = 'Outbound Email Account not correctly configured.';

$app_strings['LBL_CRON_UNRECOMMENDED_USER'] = 'You are currently running as root, this is NOT recommended, would you like to continue (y,n)? ';
$app_strings['LBL_UNKNOWN_USER'] = 'Unknown User';

$app_strings['LBL_DRAFTS'] = 'Brouillons';
$app_strings['LBL_DRAFT_ITEM_LAST_MODIFIED'] = '{{fields.date_modified.value}}';
$app_strings['LBL_DRAFT_ITEM_TO_EMPTY'] = 'No Recipient(s)';
$app_strings['LBL_DRAFT_ITEM_TO'] = '{{fields.to_addrs_names.valueList|filter:primary=true:attributeKey=name}}';
$app_strings['LBL_DRAFT_ITEM_TO_ICON'] = '{{fields.to_icon_type.value}}';
$app_strings['LBL_DRAFTS_TOTAL'] = '{{fields.count.value}}';
$app_strings['LBL_DRAFTS_DELETED_SUCCESSFULLY'] = 'Drafts Deleted Successfully.';
$app_strings['LBL_DRAFT_DELETED_SUCCESSFULLY'] = 'Draft Deleted Successfully.';
$app_strings['LBL_DRAFTS_DELETED_UNSUCCESSFULLY'] = 'Drafts Not Deleted Successfully. See logs for more info.';
$app_strings['LBL_DRAFT_DELETED_UNSUCCESSFULLY'] = 'Draft Not Deleted Successfully. See logs for more info.';
$app_strings['LBL_OPEN_DRAFT'] = 'Open Draft';
$app_strings['LBL_DELETE_DRAFT'] = 'Delete Draft';
$app_strings['LBL_UNABLE_TO_GET_DRAFT_ID'] = 'Unable to retrieve Draft ID.';
$app_strings['LBL_UNABLE_TO_DELETE_DRAFT'] = 'Unable to delete draft.';
$app_strings['LBL_EMAIL_NOT_DRAFT'] = 'Email is no longer a draft.';
$app_strings['LBL_DRAFT_DELETED_SUCCESSFULLY'] = 'Draft Deleted Successfully.';

$app_strings['LBL_CANNOT_DELETE_LATEST_REVISION'] = 'You cannot delete the latest revision of a document.';
$app_strings['LBL_NO_DOCUMENT_ID_PROVIDED'] = 'Cannot find document to delete revision, no document id provided.';
$app_strings['LBL_NO_RECORD_ID_PROVIDED'] = 'Cannot find docuemnt revision to delete, no record id provided.';
$app_strings['LBL_DELETE_REVISION_CONFIRM'] = 'Are you sure you want to delete this revision?';
$app_strings['LBL_DOCUMENT_NOT_FOUND'] = 'Document not found.';
$app_strings['LBL_EMAIL_ATTACHMENT_DOCUMENT_DELETED'] = 'One or more attached documents have been deleted and cannot be sent.';

$app_strings['LBL_DISMISS_INVALID_STATUS'] = 'This record cannot be dismissed while it is still in progress.';
$app_strings['LBL_DISMISS_FAILED'] = 'Failed to dismiss. Please try again.';
$app_strings['LBL_RERUN_NOT_ELIGIBLE'] = 'This record is not eligible for re-run. It may not have completed with failures or re-run may not be supported.';
$app_strings['LBL_RETRY_FAILED_NOT_ELIGIBLE'] = 'This record is not eligible for retry. It may not have completed with failures or retry may not be supported.';
$app_strings['LBL_ASYNC_TASK_UNSUPPORTED_MODULE'] = 'This module does not support async task actions.';
$app_strings['LBL_RERUN_SUCCESS'] = 'Task has been re-queued and will restart from the beginning.';
$app_strings['LBL_RETRY_FAILED_SUCCESS'] = 'Failed items have been re-queued for processing.';

$app_strings['LBL_MIGRATE_GOOGLE_CALENDAR_SYNC_SIBLING_RUNNING'] = 'Cannot run this migration while "Migrate Google Calendar Users Sync" is currently pending / running.';
$app_strings['LBL_MIGRATE_GOOGLE_CALENDAR_SYNC_USERS_SIBLING_RUNNING'] = 'Cannot run this migration while "Migrate Google Calendar Sync" is currently pending / running.';

$app_strings['LBL_CANNOT_DELETE_LATEST_REVISION'] = 'You cannot delete the latest revision of a document.';
$app_strings['LBL_NO_DOCUMENT_ID_PROVIDED'] = 'Cannot find document to delete revision, no document id provided.';
$app_strings['LBL_NO_RECORD_ID_PROVIDED'] = 'Cannot find docuemnt revision to delete, no record id provided.';

$app_strings['LBL_CANNOT_DELETE_LATEST_REVISION'] = 'You cannot delete the latest revision of a document.';
$app_strings['LBL_NO_DOCUMENT_ID_PROVIDED'] = 'Cannot find document to delete revision, no document id provided.';
$app_strings['LBL_NO_RECORD_ID_PROVIDED'] = 'Cannot find docuemnt revision to delete, no record id provided.';

$app_list_strings['email_import_timeframe_start_dom'] = [
    '-1 year' => '1 Year',
    '-6 months' => '6 Months',
    '-3 months' => '3 Months',
    '-30 days' => '30 Days',
    '-15 days' => '15 Days',
    '-5 days' => '5 Days',
    '-1 days' => '1 Day',
    '0 days' => '0 Days',
];

$app_strings['LBL_NOT_AUTHORIZED'] = 'Not authorized';
