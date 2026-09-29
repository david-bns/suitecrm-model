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
    'ERR_DELETE_RECORD' => 'You must specify a record number to delete the account.',
    'LBL_TOOL_TIP_BOX_TITLE' => 'Suggestions bases de connaissances',
    'LBL_TOOL_TIP_TITLE' => 'Titre :',
    'LBL_TOOL_TIP_BODY' => 'Corps :',
    'LBL_TOOL_TIP_INFO' => 'Informations additionnelles :',
    'LBL_TOOL_TIP_USE' => 'Utilisé comme :',
    'LBL_SUGGESTION_BOX' => 'Suggestions',
    'LBL_NO_SUGGESTIONS' => 'Aucune suggestion',
    'LBL_RESOLUTION_BUTTON' => 'Resolution',
    'LBL_SUGGESTION_BOX_STATUS' => 'Status',
    'LBL_SUGGESTION_BOX_TITLE' => 'Titre',
    'LBL_SUGGESTION_BOX_REL' => 'Pertinence',

    'LBL_ACCOUNT_ID' => 'Compte (ID)',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_ACCOUNTS_SUBPANEL_TITLE' => 'Comptes',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Anomalies',
    'LBL_CASE_NUMBER' => 'Numéro du cas :',
    'LBL_CASE' => 'Cas :',
    'LBL_CONTACT_NAME' => 'Nom du contact :',
    'LBL_CONTACT_ROLE' => 'Rôle :',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Tickets',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_INVITEE' => 'Contacts',
    'LBL_MEMBER_OF' => 'Compte',
    'LBL_MODULE_NAME' => 'Tickets',
    'LBL_MODULE_TITLE' => 'Cas : Accueil',
    'LBL_NEW_FORM_TITLE' => 'Nouveau cas',
    'LBL_NUMBER' => 'Number:',
    'LBL_PRIORITY' => 'Priority:',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_RESOLUTION' => 'Résolution :',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher un cas',
    'LBL_STATUS' => 'Status:',
    'LBL_SUBJECT' => 'Subject:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur attribué',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_ASSIGNED' => 'Assigné à',
    'LBL_LIST_CLOSE' => 'Fermer',
    'LBL_LIST_FORM_TITLE' => 'Liste des cas',
    'LBL_LIST_LAST_MODIFIED' => 'Last Modified',
    'LBL_LIST_MY_CASES' => 'Mes cas ouverts',
    'LBL_LIST_NUMBER' => 'Num.',
    'LBL_LIST_PRIORITY' => 'Priority',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_SUBJECT' => 'Sujet',

    'LNK_CASE_LIST' => 'Voir les Cas',
    'LNK_NEW_CASE' => 'Créer un cas',
    'LBL_LIST_DATE_CREATED' => 'Date de création',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_TYPE' => 'Type',
    'LBL_WORK_LOG' => 'Log de travail',
    'LNK_IMPORT_CASES' => 'Importer des Cas',

    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    'LBL_CASE_INFORMATION' => 'Aperçu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template

    // SNIP
    'LBL_UPDATE_TEXT' => 'Mettre le texte à jour', //Field for Case updates with text only
    'LBL_INTERNAL' => 'Internal Update',
    'LBL_AOP_CASE_UPDATES' => 'Mises à jour du cas',
    'LBL_AOP_CASE_UPDATES_THREADED' => 'Fil de mises à jour du cas',
    'LBL_CASE_UPDATES_COLLAPSE_ALL' => 'Tout refermer',
    'LBL_CASE_UPDATES_EXPAND_ALL' => 'Tout ouvrir',
    'LBL_AOP_CASE_ATTACHMENTS' => 'Pièces jointes :',

    'LBL_AOP_CASE_EVENTS' => 'Événements du Cas',
    'LBL_CASE_ATTACHMENTS_DISPLAY' => 'Pièces jointes au cas',
    'LBL_ADD_CASE_FILE' => 'Ajouter un fichier',
    'LBL_REMOVE_CASE_FILE' => 'Supprimer un fichier',
    'LBL_SELECT_CASE_DOCUMENT' => 'Choisir un document',
    'LBL_CLEAR_CASE_DOCUMENT' => 'Effacer le document',
    'LBL_SELECT_INTERNAL_CASE_DOCUMENT' => 'Document interne',
    'LBL_SELECT_EXTERNAL_CASE_DOCUMENT' => 'Fichier externe',
    'LBL_CONTACT_CREATED_BY_NAME' => 'Créé par le contact',
    'LBL_CONTACT_CREATED_BY' => 'Created by',
    'LBL_CASE_UPDATE_FORM' => 'Actualiser le formulaire attaché', //Form for attachments on case updates
    'LBL_UNKNOWN_CONTACT' => 'Contact inconnu',
);
