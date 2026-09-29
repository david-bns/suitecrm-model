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
    'LBL_ACCEPT_THIS' => 'Accept?',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_ADD_INVITEE' => 'Add Invitees',
    'LBL_CONTACT_NAME' => 'Contact :',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_CREATED_BY' => 'Created by',
    'LBL_DATE_END' => 'End Date',
    'LBL_DATE_TIME' => 'Date et Heure début :',
    'LBL_DATE' => 'Date de début :',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Réunions',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_DIRECTION' => 'Sens du tri :',
    'LBL_DURATION_HOURS' => 'Durée en heures :',
    'LBL_DURATION_MINUTES' => 'Durée en minutes :',
    'LBL_DURATION' => 'Durée :',
    'LBL_EMAIL' => 'Adresse E-mail',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Notes',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_HOURS_MINS' => '(hours/minutes)',
    'LBL_INVITEE' => 'Invitees',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à :',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur attribué',
    'LBL_LIST_CLOSE' => 'Fermer',
    'LBL_LIST_CONTACT' => 'Contact',
    'LBL_LIST_DATE_MODIFIED' => 'Date de modification',
    'LBL_LIST_DATE' => 'Date de début',
    'LBL_LIST_DIRECTION' => 'Direction',
    'LBL_LIST_DUE_DATE' => 'Date d\'échéance',
    'LBL_LIST_FORM_TITLE' => 'Liste des Réunions',
    'LBL_LIST_MY_MEETINGS' => 'Mes Rendez-vous',
    'LBL_LIST_RELATED_TO' => 'Relatif à',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Sujet',
    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_LOCATION' => 'Localisation :',
    'LBL_MINSS_ABBREV' => 'm',
    'LBL_MODIFIED_BY' => 'Modified by',
    'LBL_MODULE_NAME' => 'Réunions',
    'LBL_MODULE_TITLE' => 'Réunions',
    'LBL_NAME' => 'Nom',
    'LBL_NEW_FORM_TITLE' => 'Create Appointment',
    'LBL_OUTLOOK_ID' => 'ID Outlook',
    'LBL_SEQUENCE' => 'Fréquence de mise à jour de la réunion',
    'LBL_PHONE' => 'Téléphone du bureau :',
    'LBL_REMINDER_TIME' => 'Reminder Time',
    'LBL_EMAIL_REMINDER_SENT' => 'Notification par email envoyée',
    'LBL_REMINDER' => 'Rappels :',
    'LBL_REMINDER_POPUP' => 'Popup',
    'LBL_REMINDER_EMAIL_ALL_INVITEES' => 'Envoyer un E-mail à tous les invités',
    'LBL_EMAIL_REMINDER' => 'Notification par email',
    'LBL_EMAIL_REMINDER_TIME' => 'Horaire notification par E-mail',
    'LBL_REMOVE' => 'Supprimer',
    'LBL_SCHEDULING_FORM_TITLE' => 'Scheduling',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher une Réunion',
    'LBL_SEND_BUTTON_LABEL' => 'Enregistrer & envoyer des invitations',
    'LBL_SEND_BUTTON_TITLE' => 'Enregistrer & envoyer des invitations',
    'LBL_STATUS' => 'Status:',
    'LBL_TYPE' => 'Type',
    'LBL_PASSWORD' => 'Mot de passe',
    'LBL_URL' => 'Démarrer/rejoindre la réunion',
    'LBL_HOST_URL' => 'URL hôte',
    'LBL_DISPLAYED_URL' => 'URL affichée',
    'LBL_CREATOR' => 'Créé par',
    'LBL_EXTERNALID' => 'ID application externe',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_TIME' => 'Heure de début :',
    'LBL_USERS_SUBPANEL_TITLE' => 'Utilisateurs',
    'LBL_CALENDAR_ACCOUNTS' => 'Calendar Accounts',
    'LBL_PARENT_TYPE' => 'Type de parent',
    'LBL_PARENT_ID' => 'Parent ID',
    'LNK_MEETING_LIST' => 'View Meetings',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_MEETING' => 'Organiser une réunion',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',

    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'NOTICE_DURATION_TIME' => 'Duration time must be greater than 0',
    'LBL_MEETING_INFORMATION' => 'Aperçu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_LIST_JOIN_MEETING' => 'Joindre la réunion',
    'LBL_ACCEPT_STATUS' => 'Accept Status',
    'LBL_ACCEPT_LINK' => 'Accept Link',
    // You are not invited to the meeting messages
    'LBL_EXTNOT_MAIN' => 'Vous n&#39;êtes pas autorisé à joindre cette réunion car vous n&#39;êtes pas un des participants de celle-ci.',
    'LBL_EXTNOT_RECORD_LINK' => 'Voir la réunion',

    //cannot start messages
    'LBL_EXTNOSTART_MAIN' => 'Vous ne pouvez pas démarrer cette réunion car vous êtes ni un administrateur ni le responsable de cette réunion.',

    // create invitee functionallity
    'LBL_CREATE_INVITEE' => 'Create an invitee',
    'LBL_CREATE_CONTACT' => 'As Contact',  // Create invitee functionallity
    'LBL_CREATE_LEAD' => 'As Lead',  // Create invitee functionallity
    'LBL_CREATE_AND_ADD' => 'Create & Add',  // Create invitee functionallity
    'LBL_CANCEL_CREATE_INVITEE' => 'Annuler',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_NO_ACCESS' => 'You have no access to create $module',  // Create invitee functionallity

    'LBL_REPEAT_TYPE' => 'Repeat Type',
    'LBL_REPEAT_INTERVAL' => 'Repeat Interval',
    'LBL_REPEAT_DOW' => 'Repeat Dow',
    'LBL_REPEAT_UNTIL' => 'Répéter jusqu&#39;à',
    'LBL_REPEAT_COUNT' => 'Répétition occurences',
    'LBL_REPEAT_PARENT_ID' => 'Répétition ID parent',
    'LBL_RECURRING_SOURCE' => 'Recurring Source',

    'LBL_SYNCED_RECURRING_MSG' => 'Cette réunion provient d\'une application externe et a été synchronisé avec SuiteCRM. Une fois éditer dans SuiteCRM, cette réunion ne sera plus synchronisée avec cette application externe.',
    'LBL_RELATED_TO' => 'Relatif à :',

    // for reminders
    'LBL_REMINDERS' => 'Reminders',
    'LBL_REMINDERS_ACTIONS' => 'Actions:',
    'LBL_REMINDERS_POPUP' => 'Popup',
    'LBL_REMINDERS_EMAIL' => 'Email invités',
    'LBL_REMINDERS_WHEN' => 'Quand :',
    'LBL_REMINDERS_REMOVE_REMINDER' => 'Remove reminder',
    'LBL_REMINDERS_ADD_ALL_INVITEES' => 'Add All Invitees',
    'LBL_REMINDERS_ADD_REMINDER' => 'Add reminder',

    // for google sync
    'LBL_GSYNC_ID' => 'ID d’événement Google',
    'LBL_GSYNC_LASTSYNC' => 'Dernier horodatage de Google Sync',
);
