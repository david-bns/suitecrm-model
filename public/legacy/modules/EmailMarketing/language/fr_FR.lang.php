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
    'LBL_REPLY_ADDR' => 'Adresse de "Répondre-à" : ',
    'LBL_REPLY_NAME' => 'Nom du "Répondre à":',

    'LBL_MODULE_NAME' => 'E-mail marketing',
    'LBL_MODULE_TITLE' => 'Marketing par E-mail',
    'LBL_LIST_FORM_TITLE' => 'Campagnes de Marketing par E-mail',
    'LBL_NAME' => 'Nom',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_FROM_ADDR' => 'E-mail de',
    'LBL_LIST_DATE_START' => 'Date de début',
    'LBL_LIST_TEMPLATE_NAME' => 'Modèle d&#39;email',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_STATUS' => 'Status',
    'LBL_QUEUEING_STATUS' => 'Queueing Status',
    'LBL_STATUS_TEXT' => 'Status:',
    'LBL_TEMPLATE_NAME' => 'Template Name',
    'LBL_DATE_ENTERED' => 'Date Entered',
    'LBL_DATE_MODIFIED' => 'Date de modification',
    'LBL_MODIFIED' => 'Modifié par : ',
    'LBL_CREATED' => 'Créé par : ',
    'LBL_MESSAGE_FOR' => 'Destinataires :',

    'LBL_FROM_NAME' => 'Nom de l&#39;expéditeur : ',
    'LBL_FROM_ADDR' => 'E-mail de l\'expéditeur : ',
    'LBL_DATE_START' => 'Date de début',
    'LBL_SEND_DATE' => 'Send Date',
    'LBL_SCHEDULED_START_DATE' => 'Scheduled Run Date',
    'LBL_CHECK_DUPLICATE' => 'Duplicate Handling',
    'LBL_TIME_START' => 'Heure de début',
    'LBL_START_DATE_TIME' => 'Début de l&#39;envoi : ',
    'LBL_TEMPLATE' => 'Modèle d\'E-mail : ',
    'LBL_TEMPLATE_SELECTED' => 'Template',

    'LBL_MODIFIED_BY' => 'Modifié par : ',
    'LBL_CREATED_BY' => 'Créé par : ',

    'LNK_NEW_CAMPAIGN' => 'Create Campaign',
    'LNK_CAMPAIGN_LIST' => 'Campagnes',
    'LBL_RELATED_CAMPAIGN' => 'Related Campaign',
    'LNK_NEW_PROSPECT_LIST' => 'Create Target List',
    'LNK_PROSPECT_LIST_LIST' => 'Target Lists',
    'LNK_NEW_PROSPECT' => 'Create Target',
    'LNK_PROSPECT_LIST' => 'Cibles',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'E-mail marketing',
    'LBL_CREATE_EMAIL_TEMPLATE' => 'Créer',
    'LBL_EDIT_EMAIL_TEMPLATE' => 'Modifier',
    'LBL_FROM_MAILBOX' => 'Depuis boite',
    'LBL_FROM_MAILBOX_NAME' => 'Boîte utilisée pour l&#39;envoi :',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Compte E-mail sortant :',
    'LBL_FROM' => 'From',
    'LBL_PROSPECT_LIST_SUBPANEL_TITLE' => 'Target Lists',
    'LBL_ALL_PROSPECT_LISTS' => 'Sélectionnez cette option pour choisir toutes les listes de cible pour cette campagne.',
    'LBL_RELATED_PROSPECT_LISTS' => 'Toutes les listes de cibles liées à ce message.',
    'LBL_PROSPECT_LIST_NAME' => 'Target List Name',
    'LBL_TARGET_LISTS' => 'Target List(s)',

    'LBL_LIST_PROSPECT_LIST_NAME' => 'Listes ciblées',
    'LBL_MODULE_SEND_TEST' => 'Campagne : Envoyer test',
    'LBL_MODULE_SEND_EMAILS' => 'Campagne : Envoyer E-mails',
    'LBL_SCHEDULE_MESSAGE_TEST' => 'Merci de sélectionner les messages de Campagne à tester :',
    'LBL_SCHEDULE_MESSAGE_EMAILS' => 'Merci de sélectionner les messages de Campagne à planifier pour une distribution à la date et heure de début spécifiée :',
    'LBL_SCHEDULE_BUTTON_TITLE' => 'Send',
    'LBL_SEND_BUTTON_LABEL' => 'Send',
    'LBL_SCHEDULE_BUTTON_LABEL' => 'Schedule',
    'LBL_ERROR_ON_MARKETING' => 'Champ(s) obligatoire(s) manquant',

    'LBL_CAMPAIGN_ID' => 'Identifiant de campagne',
    'LBL_OUTBOUND_EMAIL_ACOUNT_ID' => 'Compte E-mail sortant',
    'LBL_EMAIL_TEMPLATE' => 'Modèle d&#39;email',
    'LBL_PROSPECT_LISTS' => 'Listes de prospects',
    'LBL_OVERVIEW' => 'Basique',
    'LBL_EMAIL_CONFIG' => 'Paramètres emails',
    'LBL_CONFIGS' => 'CONFIGS',
    'LBL_EMAIL' => 'E-mail',
    'LBL_BODY' => 'Body',
    'LBL_MARKETING_TYPE' => 'Marketing Type',
    'LBL_SURVEY' => 'Sondage',
    'LBL_SCHEDULE' => 'Schedule',
    'LBL_RESUME' => 'Resume',
    'LBL_PAUSE_REASON' => 'Pause Reason',
    'LBL_DELETE_TEST_ENTRIES' => 'Delete Test Entries',
    'LBL_UNSCHEDULE' => 'Unschedule',
    'LBL_ABORT' => 'Abort',
    'LBL_USERS' => 'Utilisateurs',
    'LBL_SEND_TEST_EMAIL' => 'Send Test Email',
    'LBL_SELECT_RECORDS_WITH_EMAILS' => 'Please Select Records with Emails',
    'LBL_MESSAGE_QUEUE_TITLE' => 'Message Queue',
    'LBL_SCHEDULED_START_DATE_HELP' => 'Sending will be processed in batches. This may take minutes/hours.',
    'LBL_TARGET_LISTS_HELP' => 'Marketing recipients. Recipients on the campaign\'s suppression lists will be blocked.',
    'LBL_STATUS_DRAFT_NOT_SEND_HELP' => 'Marketing process will only start when scheduled.',
    'LBL_TYPE_MARKETING_HELP' => 'Recipients are subject to opt-out validation.',
    'LBL_TYPE_LEGACY_HELP' => 'This is a Legacy Email Marketing Record and exists for historical data purposes.',
    'LBL_TYPE_TRANSACTIONAL_HELP' => 'Recipients are NOT subject to opt-out validation.',

    'LBL_SCHEDULER_WIDGET' => 'Email Marketing Diagnostics',
    'LBL_OOTB_SEND_EMAIL_TO_QUEUE' => 'Queue Campaign Emails',
    'LBL_OOTB_BOUNCE' => 'Lancer le process nocturne de gestion des bounces des campagnes emails',
    'LBL_OOTB_SEND_EMAIL_FROM_QUEUE' => 'Send Campaign Emails',
    'LBL_SCHEDULERS' => 'Planificateurs',
    'LBL_INBOUND_EMAIL' => 'E-mails entrants',

    'LBL_TRACKERS_ENABLED' => 'Trackers Enabled',
    'LBL_TRACKER_LINKS_ENABLED' => 'Tracker Links Enabled',
    'LBL_TRACKERS_ENABLED_FOOTNOTE' => 'When enabled, links will be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_FOOTNOTE' => 'When disabled, links will NOT be replaced with tracker links that monitor clicks.',
    'LBL_TRACKERS_DISABLED_GLOBALLY_FOOTNOTE' => 'Trackers disabled globally. Email views and clicks will not be tracked.',
    'LBL_HAS_TEST_DATA' => 'Has test data',
);
