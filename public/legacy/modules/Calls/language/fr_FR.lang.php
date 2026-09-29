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
    'LBL_BLANK' => ' ',
    'LBL_MODULE_NAME' => 'Appels',
    'LBL_MODULE_TITLE' => 'Appels',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher un Appel',
    'LBL_LIST_FORM_TITLE' => 'Liste des Appels',
    'LBL_NEW_FORM_TITLE' => 'Planifier Appel',
    'LBL_LIST_CLOSE' => 'Fermer',
    'LBL_LIST_SUBJECT' => 'Sujet',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_LIST_RELATED_TO' => 'Relatif à',
    'LBL_LIST_RELATED_TO_ID' => 'Relatif à (ID)',
    'LBL_LIST_DATE' => 'Date de début',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_REMINDER' => 'Rappel :',
    'LBL_CONTACT_NAME' => 'Contact :',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_STATUS' => 'Status:',
    'LBL_DIRECTION' => 'Sens du tri :',
    'LBL_DATE' => 'Date de début :',
    'LBL_DURATION' => 'Durée :',
    'LBL_DURATION_HOURS' => 'Durée en heures :',
    'LBL_DURATION_MINUTES' => 'Durée en minutes :',
    'LBL_HOURS_MINUTES' => '(hours/minutes)',
    'LBL_DATE_TIME' => 'Date et Heure début :',
    'LBL_TIME' => 'Heure de début :',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINSS_ABBREV' => 'm',
    'LNK_NEW_CALL' => 'Enregistrer un appel',
    'LNK_NEW_MEETING' => 'Organiser une réunion',
    'LNK_CALL_LIST' => 'View Calls',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'ERR_DELETE_RECORD' => 'A record number must be specified to delete the account.',
    'LBL_INVITEE' => 'Invitees',
    'LBL_RELATED_TO' => 'Relatif à :',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LBL_SCHEDULING_FORM_TITLE' => 'Planification',
    'LBL_ADD_INVITEE' => 'Ajouter des participants',
    'LBL_NAME' => 'Nom',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_EMAIL' => 'Adresse E-mail',
    'LBL_PHONE' => 'Téléphone',
    'LBL_REMINDER_POPUP' => 'Rappel utilisateurs',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Envoyer un E-mail à tous les invités',
    'LBL_EMAIL_REMINDER' => 'Notification par E-mail',
    'LBL_EMAIL_REMINDER_TIME' => 'Horaire notification par E-mail',
    'LBL_SEND_BUTTON_TITLE' => 'Enregistrer & envoyer des invitations',
    'LBL_SEND_BUTTON_LABEL' => 'Enregistrer & envoyer des invitations',
    'LBL_DATE_END' => 'End Date',
    'LBL_REMINDER_TIME' => 'Heure de la notification',
    'LBL_EMAIL_REMINDER_SENT' => 'Notification par E-mail envoyée',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Appels',
    'LNK_SELECT_ACCOUNT' => 'Select Account',
    'LNK_NEW_ACCOUNT' => 'Nouveau Compte',
    'LNK_NEW_OPPORTUNITY' => 'Nouvelle Affaire',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_USERS_SUBPANEL_TITLE' => 'Utilisateurs',
    'LBL_OUTLOOK_ID' => 'ID Outlook',
    'LBL_MEMBER_OF' => 'Member Of',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_LIST_MY_CALLS' => 'Mes Appels',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ASSIGNED_TO_ID' => 'Utilisateur attribué',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_CALL_INFORMATION' => 'Aperçu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_REMOVE' => 'Supprimer',
    'LBL_ACCEPT_STATUS' => 'Accept Status',
    'LBL_ACCEPT_LINK' => 'Lien acceptation',

    // create invitee functionality
    'LBL_CREATE_INVITEE' => 'Créer un invité',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_LEAD' => 'Comme un prospect',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Annuler',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',

    'LBL_REPEAT_TYPE' => 'Répétition type',
    'LBL_REPEAT_INTERVAL' => 'Répétition intervalle',
    'LBL_REPEAT_DOW' => 'Répétition depuis',
    'LBL_REPEAT_UNTIL' => 'Répéter jusqu&#39;à',
    'LBL_REPEAT_COUNT' => 'Répétition occurences',
    'LBL_REPEAT_PARENT_ID' => 'Répétition ID parent',
    'LBL_RECURRING_SOURCE' => 'Source récurrence',

    'LBL_SYNCED_RECURRING_MSG' => 'Cet appel provient d\'un autre système et a été synchronisé à SuiteCRM . Pour apporter des modifications, allez à l\'appel d\'origine dans l\'autre système. Les modifications apportées dans l\'autre système peuvent être synchronisés à cet enregistrement.',

    // for reminders
    'LBL_REMINDERS' => 'Rappel par défaut',
    'LBL_REMINDERS_ACTIONS' => 'Actions',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'E-mail invités',
    'LBL_REMINDERS_WHEN' => 'Quand :',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Supprimer le rappel',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Ajouter tous les invités',
    'LBL_REMINDERS_ADD_REMINDER' => 'Ajouter un rappel',

    'LBL_RESCHEDULE' => 'Reschedule',
    'LBL_RESCHEDULE_COUNT' => 'Call Attempts',
    'LBL_RESCHEDULE_DATE' => 'Date',
    'LBL_RESCHEDULE_REASON' => 'Raison',
    'LBL_RESCHEDULE_ERROR1' => 'Please select a valid date',
    'LBL_RESCHEDULE_ERROR2' => 'Please select a reason',
    'LBL_RESCHEDULE_PANEL' => 'Reschedule',
    'LBL_RESCHEDULE_HISTORY' => 'Historique des tentatives d’appel',
    'LBL_CANCEL' => 'Annuler',
    'LBL_SAVE' => 'Sauvegarder',

    'LBL_CALLS_RESCHEDULE' => 'Replanifier les appels',
    'LBL_LIST_STATUS'=>'Status',
    'LBL_LIST_DATE_MODIFIED'=>'Date de modification',
    'LBL_LIST_DUE_DATE'=>'Date d\'échéance',
    'LBL_RESCHEDULED_BY'=>'by',
);
