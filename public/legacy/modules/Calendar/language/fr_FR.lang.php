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

    'LBL_SHAREDWEEK' => 'Semaine partagée',
    'LBL_SHAREDMONTH' => 'Mois partagé',

    'LBL_MODULE_NAME' => 'Calendrier',
    'LBL_MODULE_TITLE' => 'Calendrier',
    'LNK_NEW_CALL' => 'Planifier Appel',
    'LNK_NEW_MEETING' => 'Organiser une réunion',
    'LNK_NEW_TASK' => 'Planifier une tâche',
    'LNK_CALL_LIST' => 'Appels',
    'LNK_MEETING_LIST' => 'Réunions',
    'LNK_TASK_LIST' => 'Tâches',
    'LNK_TASK' => 'Tâche',
    'LNK_TASK_VIEW' => 'Voir la tâche',
    'LNK_EVENT' => 'Evènement',
    'LNK_EVENT_VIEW' => 'Voir l\'évènement',
    'LNK_VIEW_CALENDAR' => 'Aujourd’hui',
    'LNK_IMPORT_CALLS' => 'Import Calls',
    'LNK_IMPORT_MEETINGS' => 'Import Meetings',
    'LNK_IMPORT_TASKS' => 'Importer des tâches',
    'LBL_MONTH' => 'Mois',
    'LBL_AGENDADAY' => 'Jour',
    'LBL_YEAR' => 'Année',

    'LBL_AGENDAWEEK' => 'Semaine',
    'LBL_PREVIOUS_MONTH' => 'Mois Précédent',
    'LBL_PREVIOUS_DAY' => 'Jour Précédent',
    'LBL_PREVIOUS_YEAR' => 'Année Précédente',
    'LBL_PREVIOUS_WEEK' => 'Sem. précédente',
    'LBL_NEXT_MONTH' => 'Next Month',
    'LBL_NEXT_DAY' => 'Jour Suivant',
    'LBL_NEXT_YEAR' => 'Next Year',
    'LBL_NEXT_WEEK' => 'Sem. suivante',
    'LBL_AM' => 'AM',
    'LBL_PM' => 'PM',
    'LBL_SCHEDULED' => 'Planifié',
    'LBL_BUSY' => 'Occupé',
    'LBL_CONFLICT' => 'Conflit',
    'LBL_USER_CALENDARS' => 'Calendriers des utilisateurs',
    'LBL_SHARED' => 'Shared',
    'LBL_PREVIOUS_SHARED' => 'Précédent',
    'LBL_NEXT_SHARED' => 'Suivant',
    'LBL_SHARED_CAL_TITLE' => 'Calendrier partagé',
    'LBL_USERS' => 'Utilisateurs',
    'LBL_REFRESH' => 'Rafraîchir',
    'LBL_EDIT_USERLIST' => 'User List',
    'LBL_SELECT_USERS' => 'Sélectionner les utilisateurs à afficher sur le calendrier',
    'LBL_FILTER_BY_TEAM' => 'Filtrer la liste des utilisateurs par équipe :',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_DATE' => 'Date et Heure de début',
    'LBL_CREATE_MEETING' => 'Organiser une réunion',
    'LBL_CREATE_CALL' => 'Enregistrer un appel',
    'LBL_HOURS_ABBREV' => 'h',
    'LBL_MINS_ABBREV' => 'm',


    'LBL_YES' => 'Yes',
    'LBL_NO' => 'Non',
    'LBL_SETTINGS' => 'Settings',
    'LBL_CREATE_NEW_RECORD' => 'Créer une activité',
    'LBL_LOADING' => 'Chargement...',
    'LBL_SAVING' => 'Sauvegarde...',
    'LBL_SENDING_INVITES' => 'Sauver et envoyer des invitations...',
    'LBL_CONFIRM_REMOVE' => 'Etes vous sûr de vouloir supprimer cet enregistrement ?',
    'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Etes vous sûr de vouloir supprimer tous les enregistrements récurrents ?',
    'LBL_EDIT_RECORD' => 'Editer activité',
    'LBL_ERROR_SAVING' => 'Erreur lors de la sauvegarde',
    'LBL_ERROR_LOADING' => 'Erreur lors du chargement',
    'LBL_GOTO_DATE' => 'Aller à la date',
    'NOTICE_DURATION_TIME' => 'La durée doit être supérieure à 0',
    'LBL_STYLE_BASIC' => 'Basique', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_STYLE_ADVANCED' => 'Avancée', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    'LBL_NO_USER' => 'Aucune correspondance pour le champ : attribué à',
    'LBL_SUBJECT' => 'Sujet',
    'LBL_DURATION' => 'Duration',
    'LBL_STATUS' => 'Status',
    'LBL_PRIORITY' => 'Priority',

    'LBL_SETTINGS_TITLE' => 'Settings',
    'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Afficher les créneaux horaires dans les vues Jour et Semaine :',
    'LBL_SETTINGS_TIME_STARTS' => 'Heure de début :',
    'LBL_SETTINGS_TIME_ENDS' => 'Heure fin :',
    'LBL_SETTINGS_CALLS_SHOW' => 'Voir les appels :',
    'LBL_SETTINGS_TASKS_SHOW' => 'Voir les tâches :',
    'LBL_SETTINGS_COMPLETED_SHOW' => 'Voir les réunion, appels et tâches terminés :',
    'LBL_SETTINGS_DISPLAY_SHARED_CALENDAR_SEPARATE' => 'Calendrier partagé distinct :',

    'LBL_SAVE_BUTTON' => 'Sauvegarder',
    'LBL_DELETE_BUTTON' => 'Supprimer',
    'LBL_APPLY_BUTTON' => 'Appliquer',
    'LBL_SEND_INVITES' => 'Enregistrer & envoyer des invitations',
    'LBL_CANCEL_BUTTON' => 'Annuler',
    'LBL_CLOSE_BUTTON' => 'Fermer',

    'LBL_GENERAL_TAB' => 'Details',
    'LBL_PARTICIPANTS_TAB' => 'Invitees',
    'LBL_REPEAT_TAB' => 'Récurrence',

    'LBL_REPEAT_TYPE' => 'Répéter',
    'LBL_REPEAT_INTERVAL' => 'Intervalle',
    'LBL_REPEAT_END' => 'End',
    'LBL_REPEAT_END_AFTER' => 'After',
    'LBL_REPEAT_OCCURRENCES' => 'récurrences',
    'LBL_REPEAT_END_BY' => 'Le',
    'LBL_REPEAT_DOW' => 'Le',
    'LBL_REPEAT_UNTIL' => 'Répéter jusqu&#39;à',
    'LBL_REPEAT_COUNT' => 'Nombre de récurrences',
    'LBL_REPEAT_LIMIT_ERROR' => 'Votre requête allait créer plus de $limit meetings.',

    'LBL_EDIT_ALL_RECURRENCES' => 'Editer toutes les récurrences',
    'LBL_REMOVE_ALL_RECURRENCES' => 'Supprimer toutes les récurrences',

    'LBL_DATE_END_ERROR' => 'La date de fin est avant la date de début',
    'ERR_YEAR_BETWEEN' => 'Désolé, le calendrier ne peut pas afficher l&#039;année que vous avez demandée<br>Année doit être compris entre 1970 et 2037',
    'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: non définit pour cette vue',
    'LBL_NO_ITEMS_MOBILE' => 'Votre calendrier est libre pour la semaine.',
    'LBL_GENERAL_SETTINGS' => 'Paramètres généraux',
    'LBL_COLOR_SETTINGS' => 'Paramètres des couleurs',
    'LBL_MODULE' => 'Module',
    'LBL_BODY' => 'Body',
    'LBL_BORDER' => 'Bordure',
    'LBL_TEXT' => 'Texte',
);


$mod_list_strings = array(
    'dom_cal_weekdays' =>
        array(
            '0' => "Sun",
            '1' => "Mon",
            '2' => "Tue",
            '3' => "Wed",
            '4' => "Thu",
            '5' => "Fri",
            '6' => "Sat",
        ),
    'dom_cal_weekdays_long' =>
        array(
            '0' => "Sunday",
            '1' => "Monday",
            '2' => "Tuesday",
            '3' => "Wednesday",
            '4' => "Thursday",
            '5' => "Friday",
            '6' => "Saturday",
        ),
    'dom_cal_month' =>
        array(
            '0' => "",
            '1' => "Jan",
            '2' => "Feb",
            '3' => "Mar",
            '4' => "Apr",
            '5' => "May",
            '6' => "Jun",
            '7' => "Jul",
            '8' => "Aug",
            '9' => "Sep",
            '10' => "Oct",
            '11' => "Nov",
            '12' => "Dec",
        ),
    'dom_cal_month_long' =>
        array(
            '0' => "",
            '1' => "January",
            '2' => "February",
            '3' => "March",
            '4' => "Avril",
            '5' => "May",
            '6' => "June",
            '7' => "Juillet",
            '8' => "August",
            '9' => "Septembre",
            '10' => "Octobre",
            '11' => "Novembre",
            '12' => "Décembre",
        ),
);
