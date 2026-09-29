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
    'LBL_MODULE_NAME' => 'Project',
    'LBL_MODULE_TITLE' => 'Projets',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher un Projet',
    'LBL_LIST_FORM_TITLE' => 'Liste des Projets',
    'LBL_HISTORY_TITLE' => 'Historique',
    'LBL_ID' => 'ID :',
    'LBL_DATE_ENTERED' => 'Date Created:',
    'LBL_DATE_MODIFIED' => 'Date de modification :',
    'LBL_ASSIGNED_USER_ID' => 'Assigné à :',
    'LBL_ASSIGNED_USER_NAME' => 'Project Manager:',
    'LBL_MODIFIED_USER_ID' => 'Modifié par (ID) :',
    'LBL_CREATED_BY' => 'Créé par :',
    'LBL_NAME' => 'Nom :',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_DELETED' => 'Supprimé :',
    'LBL_DATE' => 'Date :',
    'LBL_DATE_START' => 'Date de début :',
    'LBL_DATE_END' => 'Date de fin :',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_TOTAL_ESTIMATED_EFFORT' => 'Effort total estimé (hrs)',
    'LBL_LIST_TOTAL_ACTUAL_EFFORT' => 'Effort total actuel (hrs)',
    'LBL_LIST_END_DATE' => 'End Date',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    'LBL_PROJECT_TASK_SUBPANEL_TITLE' => 'Tâches du projet',
    'LBL_OPPORTUNITY_SUBPANEL_TITLE' => 'Affaires',
    'LBL_PROJECT_PREDECESSOR_NONE' => 'Aucun',
    'LBL_ALL_PROJECTS' => 'Tous les projets',
    'LBL_ALL_USERS' => 'Tous les utilisateurs',
    'LBL_ALL_CONTACTS' => 'Tous les contacts',

    // quick create label
    'LBL_NEW_FORM_TITLE' => 'Nouveau Projet',
    'LNK_NEW_PROJECT' => 'Create Project',
    'LNK_PROJECT_LIST' => 'Liste des Projets',
    'LNK_NEW_PROJECT_TASK' => 'Créer Tâche Projet',
    'LNK_PROJECT_TASK_LIST' => 'Voir les tâches de projet',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Projets',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Affaires',
    'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Anomalies',
    'LBL_TASK_ID' => 'ID',
    'LBL_TASK_NAME' => 'Task Name',
    'LBL_DURATION' => 'Duration',
    'LBL_ACTUAL_DURATION' => 'Actual Duration',
    'LBL_START' => 'Start',
    'LBL_FINISH' => 'Finish',
    'LBL_PREDECESSORS' => 'Predecessors',
    'LBL_PERCENT_COMPLETE' => '% Complete',
    'LBL_MORE' => 'Plus...',
    'LBL_OPPORTUNITIES' => 'Affaires',
    'LBL_NEXT_WEEK' => 'Suivant',
    'LBL_PROJECT_INFORMATION' => 'Aperçu du projet',
    'LBL_EDITLAYOUT' => 'Modifier la mise en page' /*for 508 compliance fix*/,
    'LBL_PROJECT_TASKS_SUBPANEL_TITLE' => 'Tâches du Projet',
    'LBL_VIEW_GANTT_TITLE' => 'View Gantt',
    'LBL_VIEW_GANTT_DURATION' => 'Duration',
    'LBL_TASK_TITLE' => 'Edit Task',
    'LBL_DURATION_TITLE' => 'Edit Duration',
    'LBL_LAG' => 'Lag',
    'LBL_DAYS' => 'Days',
    'LBL_HOURS' => 'Hours',
    'LBL_MONTHS' => 'Months',
    'LBL_SUBTASK' => 'Tâche',
    'LBL_MILESTONE_FLAG' => 'Milestone',
    'LBL_ADD_NEW_TASK' => 'Add New Task',
    'LBL_DELETE_TASK' => 'Delete Task',
    'LBL_EDIT_TASK_PROPERTIES' => 'Modifier les propriétés de la tâche.',
    'LBL_PARENT_TASK_ID' => 'ID de la tâche principale',
    'LBL_RESOURCE_CHART' => 'Calendrier des ressources',
    'LBL_RELATIONSHIP_TYPE' => 'Relation Type',
    'LBL_ASSIGNED_TO' => 'Project Manager',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_AM_PROJECTTEMPLATES_TITLE' => 'Modèle de projet',
    'LBL_STATUS' => 'Status:',
    'LBL_LIST_ASSIGNED_USER_ID' => 'Project Manager',
    'LBL_TOOLTIP_PROJECT_NAME' => 'Project',
    'LBL_TOOLTIP_TASK_NAME' => 'Task Name',
    'LBL_TOOLTIP_TITLE' => 'Tâches du jour',
    'LBL_TOOLTIP_TASK_DURATION' => 'Duration',
    'LBL_RESOURCE_TYPE_TITLE_USER' => 'La ressource est un utilisateur',
    'LBL_RESOURCE_TYPE_TITLE_CONTACT' => 'La ressource est un contact',
    'LBL_RESOURCE_CHART_PREVIOUS_MONTH' => 'Previous Month',
    'LBL_RESOURCE_CHART_NEXT_MONTH' => 'Next Month',
    'LBL_RESOURCE_CHART_WEEK' => 'Semaine',
    'LBL_RESOURCE_CHART_DAY' => 'Jour',
    'LBL_RESOURCE_CHART_WARNING' => 'Aucune ressource n\'a été affectée à ce projet.',
    'LBL_PROJECT_DELETE_MSG' => 'Êtes-vous certain de vouloir effacer ce projet et toutes les tâches liées?',
    'LBL_LIST_MY_PROJECT' => 'Mes Projets',
    'LBL_LIST_ASSIGNED_USER' => 'Project Manager',
    'LBL_UNASSIGNED' => 'Non assigné',
    'LBL_PROJECT_USERS_1_FROM_USERS_TITLE' => 'Resources',

    'LBL_EMAIL' => 'Adresse E-mail',
    'LBL_PHONE' => 'Téléphone du bureau :',
    'LBL_ADD_BUTTON' => 'Ajouter',
    'LBL_ADD_INVITEE' => 'Add Resource',
    'LBL_FIRST_NAME' => 'First Name',
    'LBL_LAST_NAME' => 'Last Name',
    'LBL_SEARCH_BUTTON' => 'Search',
    'LBL_EMPTY_SEARCH_RESULT' => 'Sorry, no results were found. Please create an invitee below.',
    'LBL_CREATE_INVITEE' => 'Create a Resource',
    'LBL_CREATE_CONTACT' => 'As Contact',
    'LBL_CREATE_AND_ADD' => 'Create & Add',
    'LBL_CANCEL_CREATE_INVITEE' => 'Annuler',
    'LBL_NO_ACCESS' => 'You have no access to create $module',
    'LBL_SCHEDULING_FORM_TITLE' => 'Resource List',
    'LBL_REMOVE' => 'Supprimer',
    'LBL_VIEW_DETAIL' => 'View Details',
    'LBL_OVERRIDE_BUSINESS_HOURS' => 'Consider Working days',

    'LBL_IMPORT_PROJECTS' => 'Importer des projets',

    'LBL_PROJECTS_SEARCH' => 'Rechercher les projets',
    'LBL_USERS_SEARCH' => 'Rechercher les utilisateurs',
    'LBL_CONTACTS_SEARCH' => 'Sélectionner les contacts',
    'LBL_RESOURCE_CHART_SEARCH_BUTTON' => 'Search',

    'LBL_CHART_TYPE' => 'Type',
    'LBL_CHART_WEEKLY' => 'Weekly',
    'LBL_CHART_MONTHLY' => 'Mensuel',
    'LBL_CHART_QUARTERLY' => 'Quarterly',

    'LBL_RESOURCE_CHART_MONTH' => 'Mois',
    'LBL_RESOURCE_CHART_QUARTER' => 'Trimestre',

    'LBL_PROJECT_CONTACTS_1_FROM_CONTACTS_TITLE' => 'Contacts du projet depuis le nom des contacts',
    'LBL_AM_PROJECTTEMPLATES_PROJECT_1_FROM_PROJECT_TITLE' => 'Modèles de projet : projet du nom de projet',
    'LBL_AOS_QUOTES_PROJECT' => 'Devis : Projet',
    'LBL_TASKS_NOT_FOUND' => 'There are no Tasks to build the Gantt Table',


    'LBL_ASCENDING' => 'Ascending',
    'LBL_DESCENDING' => 'Descending',
);
