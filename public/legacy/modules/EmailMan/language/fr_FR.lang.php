<?php
/**
 *
 * SugarCRM Community Edition is a customer relationship management program developed by
 * SugarCRM, Inc. Copyright (C) 2004-2013 SugarCRM Inc.
 *
 * SuiteCRM is an extension to SugarCRM Community Edition developed by SalesAgility Ltd.
 * Copyright (C) 2011 - 2019 SalesAgility Ltd.
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
    'LBL_SEND_DATE_TIME' => 'Envoyé à partir de',
    'LBL_SEND_ON' => 'Send On',
    'LBL_IN_QUEUE' => 'In Process',
    'LBL_IN_QUEUE_DATE' => 'Date d&#39;entrée dans la file',

    'ERR_INT_ONLY_EMAIL_PER_RUN' => 'Seulement des valeurs numériques entières sont autorisées pour les E-mails par lot',

    'LBL_ATTACHMENT_AUDIT' => ' a été envoyé. Il n&#39;a pas été dupliqué localement pour conserver l&#39;utilisation du disque.',
    'LBL_CONFIGURE_SETTINGS' => 'Configurer les paramètres d\'E-mail',
    'LBL_CUSTOM_LOCATION' => 'User Defined',
    'LBL_DEFAULT_LOCATION' => 'Par défaut',

    'LBL_EMAIL_DEFAULT_DELETE_ATTACHMENTS' => 'Lors de la suppression d\'un E-mail, supprimer les pièces jointes et Notes qui lui sont rattachées.',
    'LBL_EMAIL_WARNING_NOTIFICATIONS' => 'Notifications par courrier électronique',
    'LBL_EMAIL_ENABLE_CONFIRM_OPT_IN' => 'Réglages Opt-In',
    'LBL_EMAIL_ENABLE_SEND_OPT_IN' => 'Envoyer automatiquement l\'E-mail de consentement',
    'LBL_EMAIL_CONFIRM_OPT_IN_TEMPLATE_ID' => 'Modèle du message de confirmation d\'accord',
    'LBL_DRAFTS_POPUP' => 'Enable Drafts Popup',
    'LBL_LEGACY_EMAIL_COMPOSE_BEHAVIOR' => 'Activer l\'ancien comportement de composition des e-mails',
    'LBL_EMAIL_OUTBOUND_CONFIGURATION' => 'Configuration des E-mails sortants',
    'LBL_EMAILS_PER_RUN' => 'Number of emails processed/sent per batch:',
    'LBL_CAMPAIGN_MAX_RETRIES' => 'Maximum send retries per recipient on failure:',
    'LBL_CAMPAIGN_THRESHOLD' => 'Error threshold per batch (campaign pauses when reached, 0 to disable):',
    'LBL_CAMPAIGN_MARKETING_RECORDS_PER_RUN' => 'Number of emails marketing records to process per run:',
    'LBL_TRACKERS_ENABLED' => 'Trackers enabled:',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_ID' => 'ID',
    'LBL_LIST_CAMPAIGN' => 'Campagne',
    'LBL_LIST_FORM_TITLE' => 'File d&#39;attente',
    'LBL_LIST_FROM_NAME' => 'From Name',
    'LBL_LIST_IN_QUEUE' => 'In Process',
    'LBL_LIST_MESSAGE_NAME' => 'Message Marketing',
    'LBL_LIST_RECIPIENT_EMAIL' => 'Email du destinataire',
    'LBL_LIST_RECIPIENT_NAME' => 'Recipient Name',
    'LBL_LIST_SEND_ATTEMPTS' => 'Tentative(s) d&#39;envoi',
    'LBL_LIST_SEND_DATE_TIME' => 'Envoyé à partir de',
    'LBL_LIST_USER_NAME' => 'Nom d\'utilisateur',
    'LBL_LOCATION_ONLY' => 'Location',
    'LBL_LOCATION_TRACK' => 'Localisation du "tracker" (campaign_tracker.php)',
    'LBL_CAMP_MESSAGE_COPY' => 'Garder une copie des messages envoyés via les Campagnes :',
    'LBL_CAMP_MESSAGE_COPY_DESC' => 'Would you like to store complete copies of <bold>EACH</bold> email message sent during all campaigns?  <bold>We recommend and default to no</bold>. Choosing no will store only the template that is sent and the needed variables to recreate the individual message.',
    'LBL_MAIL_SENDTYPE' => 'Agent de Transfert Mail :',
    'LBL_MAIL_SMTPAUTH_REQ' => 'Utiliser l&#39;authentification&nbsp;SMTP?',
    'LBL_MAIL_SMTPPASS' => 'Mot de passe :',
    'LBL_MAIL_SMTPPORT' => 'Port SMTP :',
    'LBL_MAIL_SMTPSERVER' => 'Serveur de messagerie SMTP :',
    'LBL_MAIL_SMTPUSER' => 'Nom d\'utilisateur :',
    'LBL_CHOOSE_EMAIL_PROVIDER' => 'Choisissez votre fournisseur de messagerie',
    'LBL_YAHOOMAIL_SMTPPASS' => 'Yahoo! Mail - Mot de passe',
    'LBL_YAHOOMAIL_SMTPUSER' => 'Yahoo! Mail - E-mail',
    'LBL_GMAIL_SMTPPASS' => 'Gmail - Mot de passe',
    'LBL_GMAIL_SMTPUSER' => 'Adresse E-mail Gmail',
    'LBL_EXCHANGE_SMTPPASS' => 'Exchange - Mot de passe',
    'LBL_EXCHANGE_SMTPUSER' => 'Exchange - Nom d\'utilisateur',
    'LBL_EXCHANGE_SMTPPORT' => 'Exchange - Port SMTP',
    'LBL_EXCHANGE_SMTPSERVER' => 'Exchange - Serveur',
    'LBL_EMAIL_LINK_TYPE' => 'Client E-mail utilisé',
    'LBL_MARKETING_ID' => 'ID Marketing',
    'LBL_LIST_MARKETING_NAME' => 'Marketing Name',
    'LBL_MODULE_ID' => 'EmailMan',
    'LBL_MODULE_NAME' => 'Paramètres emails',
    'LBL_MODULE_TITLE' => 'Gestion de la file d\'attente des "Envois en Masse" (Campagnes de Type E-mail ou Newsletter)',
    'LBL_NOTIFICATION_ON_DESC' => 'Envoyer un E-mail de notification lorsque un enregistrement est assigné.',
    'LBL_NOTIFY_FROMADDRESS' => 'Adresse de l\'expéditeur :',
    'LBL_NOTIFY_FROMNAME' => 'Nom de l\'expéditeur :',
    'LBL_NOTIFY_ON' => 'Activer les Notifications',
    'LBL_NOTIFY_TITLE' => 'Options de l\'E-mail',
    'LBL_OUTBOUND_EMAIL_TITLE' => 'Options des E-mails sortants',
    'LBL_RELATED_ID' => 'ID associé',
    'LBL_RELATED_TYPE' => 'Related Type',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher dans la file d&#39;attente',
    'TRACKING_ENTRIES_LOCATION_DEFAULT_VALUE' => 'Value of Config.php setting site_url',
    'TXT_REMOVE_ME_ALT' => 'Pour vous retirer de cette liste d\'E-mail',
    'TXT_REMOVE_ME_CLICK' => 'cliquez ici',
    'TXT_REMOVE_ME' => 'Si vous ne souhaitez plus recevoir d\'E-mail de notre part',
    'LBL_NOTIFY_SEND_FROM_ASSIGNING_USER' => 'Envoyer une notification sur l’adresse e-mail de l’utilisateur assigné',

    'LBL_SECURITY_TITLE' => 'Paramètres de sécurité',
    'LBL_SECURITY_DESC' => 'Les tags sélectionnés dans la liste ci-dessous ne seront PAS acceptés ni affichés dans les E-mails entrants ou dans le module "E-mails".',
    'LBL_SECURITY_APPLET' => 'Balise applet',
    'LBL_SECURITY_BASE' => 'Balise de base',
    'LBL_SECURITY_EMBED' => 'Balise d\'intégration',
    'LBL_SECURITY_FORM' => 'Balise Formulaire',
    'LBL_SECURITY_FRAME' => 'Balise Frame',
    'LBL_SECURITY_FRAMESET' => 'Balise Frameset',
    'LBL_SECURITY_IFRAME' => 'balise iFrame',
    'LBL_SECURITY_IMPORT' => 'Balise d’importation',
    'LBL_SECURITY_LAYER' => 'Balise de couche',
    'LBL_SECURITY_LINK' => 'Balise de lien',
    'LBL_SECURITY_OBJECT' => 'Balise Object',
    'LBL_SECURITY_OUTLOOK_DEFAULTS' => 'Sélectionner les options de sécurité minimum selon Outlook.',
    'LBL_SECURITY_STYLE' => 'Balise de style',
    'LBL_SECURITY_TOGGLE_ALL' => 'Sélectionner/Désélectionner toutes les options',
    'LBL_SECURITY_XMP' => 'Balise Xmp',
    'LBL_YES' => 'Yes',
    'LBL_NO' => 'Non',
    'LBL_PREPEND_TEST' => '[Test] : ',
    'LBL_SEND_ATTEMPTS' => 'Send Attempts',
    'LBL_OUTGOING_SECTION_HELP' => 'Paramètres du serveur SMTP pour les notifications et les alertes.',
    'LBL_ALLOW_DEFAULT_SELECTION' => "Les utilisateurs peuvent envoyer en tant que titulaire de ce compte :",
    'LBL_ALLOW_DEFAULT_SELECTION_HELP' => 'Quand cette option est activée, tous les utilisateurs utilisent le même serveur SMTP pour les notifications et les alertes. Sinon chaque utilisateur peut<br>définir et choisir son propre serveur SMTP.',
    'LBL_FROM_ADDRESS_HELP' => 'Si activé, le nom de l\'utilisateur assigné ainsi que son E-mail seront utilisés pour le champ "De" de l\'E-mail. Cela ne peut fonctionner que si le serveur SMTP utilisé autorise la surcharge de cette information, pas Gmail par exemple.',
    'LBL_HELP' => 'Aide' /*for 508 compliance fix*/,
    'LBL_OUTBOUND_EMAIL_ACCOUNT_VIEW' => 'Voir les Comptes d\'E-mail sortant',
    'LBL_SYSTEM_OUTBOUND_EMAIL_ACCOUNT' => 'System Outbound Email Account',
    'LBL_ALLOW_SEND_AS_USER' => 'Les utilisateurs peuvent envoyer à leur nom :',
    'LBL_ALLOW_SEND_AS_USER_DESC' => 'Lorsque cette option est activée, <b>tous</b> les utilisateurs peuvent envoyer des courriers par le serveur de messagerie sortant en utilisant leur adresse électronique principale en tant que &quot;De :&quot;. <br>Cette fonctionnalité peut échouer avec les serveurs SMTP qui n\'autorisent pas l\'envoi depuis un compte de messagerie différent du compte du serveur.',
    'LBL_EMAIL_IMPORT_CONFIGURATION' => 'Email Import Configuration',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Threshold for Number of Emails Imported Per Run (per Mailbox)',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD_DESC' => 'Threshold of emails to import per run. Default is 25. Each run will go through each day in the mailbox within the set timeframe, from oldest to most recent. It will import all emails on each day until the total emails imported on this run exceeds the threshold. Once met, the job will stop and mark the last day imported, starting there on the next run.',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Starting Point for New Mailbox Imports',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START_DESC' => 'Period of time from which emails will start being imported. For example, selecting 30 Days will start with emails from 30 days ago and move forward from there.',
    'LBL_EMAIL_IMPORT_FETCH_UNREAD_ONLY' => 'Only fetch unread emails when importing',
);
