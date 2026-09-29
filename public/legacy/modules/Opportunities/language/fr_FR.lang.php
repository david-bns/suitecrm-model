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
    'LBL_MODULE_NAME' => 'Affaires',
    'LBL_MODULE_TITLE' => 'Affaires',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher une Affaire',
    'LBL_LIST_FORM_TITLE' => 'Liste des Affaires',
    'LBL_OPPORTUNITY_NAME' => 'Nom de l\'Affaire :',
    'LBL_OPPORTUNITY' => 'Affaire :',
    'LBL_NAME' => 'Opportunity Name',
    'LBL_INVITEE' => 'Contacts',
    'LBL_CURRENCIES' => 'Devises',
    'LBL_LIST_OPPORTUNITY_NAME' => 'Nom',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_AMOUNT' => 'Montant Affaire',
    'LBL_LIST_AMOUNT_USDOLLAR' => 'Amount',
    'LBL_LIST_DATE_CLOSED' => 'Fermer',
    'LBL_LIST_SALES_STAGE' => 'Sales Stage',
    'LBL_ACCOUNT_ID' => 'Compte (ID)',
    'LBL_CURRENCY_NAME' => 'Currency Name',
    'LBL_CURRENCY_SYMBOL' => 'Currency Symbol',
    'LBL_DAYS_OPEN_FOR' => 'Cette affaire a été ouverte pour',

    'UPDATE' => 'Affaire - Devise mise à jour',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_AMOUNT' => 'Montant de l\'Affaire :',
    'LBL_AMOUNT_USDOLLAR' => 'Amount:',
    'LBL_CURRENCY' => 'Currency:',
    'LBL_DATE_CLOSED' => 'Date de cloture (prévue) :',
    'LBL_TYPE' => 'Type:',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_NEXT_STEP' => 'Next Step:',
    'LBL_LEAD_SOURCE' => 'Origine du prospect :',
    'LBL_SALES_STAGE' => 'Sales Stage:',
    'LBL_PROBABILITY' => 'Probability (%):',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_DUPLICATE' => 'Possibilité de duplication des Affaires',
    'MSG_DUPLICATE' => 'Possibilité de doublon avec une Affaire existante. La liste ci-dessous reprend les Affaires similaires. Vous pouvez soit en sélectionner une dans la liste ci-dessous, soit cliquer sur "Sauvegarder" pour poursuivre la création, soit cliquer sur "Annuler".',
    'LBL_NEW_FORM_TITLE' => 'Créer une affair',
    'LNK_NEW_OPPORTUNITY' => 'Créer une affair',
    'LNK_OPPORTUNITY_LIST' => 'Affaires',
    'ERR_DELETE_RECORD' => 'Un enregistrement doit être sélectionné pour toute suppression.',
    'LBL_TOP_OPPORTUNITIES' => 'Mon Top des Affaires',
    'OPPORTUNITY_REMOVE_PROJECT_CONFIRM' => 'Etes-vous sûr de vouloir supprimer cette Affaire de ce Projet ?',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Affaires',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à :',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur attribué',
    'LBL_MY_CLOSED_OPPORTUNITIES' => 'Mes Affaires clôturées',
    'LBL_TOTAL_OPPORTUNITIES' => 'Total des Affaires',
    'LBL_CLOSED_WON_OPPORTUNITIES' => 'Affaires cloturées et gagnées',
    'LBL_ASSIGNED_TO_ID' => 'Utilisateur attribué :',
    'LBL_MODIFIED_NAME' => 'Modifié par le nom d\'utilisateur',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_CAMPAIGN_OPPORTUNITY' => 'Campagnes',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    'LNK_IMPORT_OPPORTUNITIES' => 'Import Affaires',
    'LBL_EDITLAYOUT' => 'Modifier la mise en page'
    /*for 508 compliance fix*/,

    // SNIP

    'LBL_AOS_CONTRACTS' => 'Contrats',
    'LBL_AOS_QUOTES' => 'Devis',

    'LBL_SIZE_ANALYSIS' => 'Analyse de la taille',
    'LBL_POSITION' => 'Rang',
    'LBL_OUT_OF' => 'Hors',
);
