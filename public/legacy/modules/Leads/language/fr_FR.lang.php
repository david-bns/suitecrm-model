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
    //DON'T CONVERT THESE THEY ARE MAPPINGS
    'db_last_name' => 'LBL_LIST_LAST_NAME',
    'db_first_name' => 'LBL_LIST_FIRST_NAME',
    'db_title' => 'LBL_LIST_TITLE',
    'db_email1' => 'LBL_LIST_EMAIL_ADDRESS',
    'db_account_name' => 'LBL_LIST_ACCOUNT_NAME',
    'db_email2' => 'LBL_LIST_EMAIL_ADDRESS',
    //END DON'T CONVERT

    'ERR_DELETE_RECORD' => 'Un identifiant doit être spécifié pour pouvoir supprimer le prospect.',
    'LBL_ACCOUNT_DESCRIPTION' => 'Description compte',
    'LBL_ACCOUNT_ID' => 'Compte (ID)',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_ADDRESS_INFORMATION' => 'Adresse',
    'LBL_ALT_ADDRESS_CITY' => 'Adresse secondaire - Ville',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Adresse secondaire - Pays',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Adresse secondaire - Code Postal',
    'LBL_ALT_ADDRESS_STATE' => 'Adresse secondaire - Région',
    'LBL_ALT_ADDRESS_STREET_2' => 'Adresse secondaire - Rue 2',
    'LBL_ALT_ADDRESS_STREET_3' => 'Adresse secondaire - Rue 3',
    'LBL_ALT_ADDRESS_STREET' => 'Adresse secondaire - Rue 1',
    'LBL_ALTERNATE_ADDRESS' => 'Autres adresses :',
    'LBL_ALT_ADDRESS' => 'Autres adresses :',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Tous les E-mails :',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigned to',
    'LBL_ASSIGNED_TO_ID' => 'Utilisateur attribué :',
    'LBL_CITY' => 'Ville :',
    'LBL_CONTACT_ID' => 'Contact (ID)',
    'LBL_CONTACT_INFORMATION' => 'Aperçu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nom du prospect :',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Prospect-Affaire :',
    'LBL_CONTACT_ROLE' => 'Rôle :',
    'LBL_CONTACT' => 'Prospect :',
    'LBL_CONVERTED_ACCOUNT' => 'Compte converti :',
    'LBL_CONVERTED_CONTACT' => 'Contact converti :',
    'LBL_CONVERTED_OPP' => 'Affaire convertie :',
    'LBL_CONVERTED' => 'Converted',
    'LBL_CONVERTLEAD_BUTTON_KEY' => 'V',
    'LBL_CONVERTLEAD_TITLE' => 'Convertir le prospect',
    'LBL_CONVERTLEAD' => 'Convert Lead',
    'LBL_CONVERTLEAD_WARNING' => 'Attention : Le statut du prospect que vous souhaitez convertir est "converti". Un contact et/ou un compte ont sans doute déja été créés à partir des informations de ce prospect. Si vous souhaitez tout de même convertir ce prospect, cliquez sur "sauvegarder". Sinon cliquez sur "annuler" pour retourner sur la page précédente.',
    'LBL_CONVERTLEAD_WARNING_INTO_RECORD' => ' Contact possible : ',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_NEW' => 'Création',
    'LBL_CREATED_ACCOUNT' => 'Created a new account',
    'LBL_CREATED_CALL' => 'Created a new call',
    'LBL_CREATED_CONTACT' => 'Created a new contact',
    'LBL_CREATED_MEETING' => 'Created a new meeting',
    'LBL_CREATED_OPPORTUNITY' => 'Created a new opportunity',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Prospects',
    'LBL_DEPARTMENT' => 'Service :',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_DO_NOT_CALL' => 'Ne pas appeler :',
    'LBL_DUPLICATE' => 'Prospects similaires',
    'LBL_EMAIL_ADDRESS' => 'Adresse électronique :',
    'LBL_EMAIL_OPT_OUT' => 'E-mail Opt Out :',
    'LBL_EXISTING_ACCOUNT' => 'Used an existing account',
    'LBL_EXISTING_CONTACT' => 'Used an existing contact',
    'LBL_EXISTING_OPPORTUNITY' => 'Used an existing opportunity',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Prénom :',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_HOME_PHONE' => 'Téléphone (domicile) :',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Créer automatiquement un nouveau prospect par import de vcard depuis votre système.',
    'LBL_INVALID_EMAIL' => 'E-mail invalide :',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Nom de famille :',
    'LBL_LEAD_SOURCE_DESCRIPTION' => 'Description de la origine du prospect :',
    'LBL_LEAD_SOURCE' => 'Origine du prospect :',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CONTACT_NAME' => 'Nom du Prospect',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_DATE_ENTERED' => 'Date de création',
    'LBL_LIST_EMAIL_ADDRESS' => 'Adresse E-mail',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Liste des Prospects',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_LEAD_SOURCE_DESCRIPTION' => 'Description origine principale',
    'LBL_LIST_LEAD_SOURCE' => 'Origine principale',
    'LBL_LIST_MY_LEADS' => 'Mes Prospects',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_PHONE' => 'Téléphone du bureau',
    'LBL_LIST_REFERED_BY' => 'Fait référence à',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LIST_TITLE' => 'Fonction',
    'LBL_MOBILE_PHONE' => 'Téléphone mobile :',
    'LBL_MODULE_NAME' => 'Prospects',
    'LBL_MODULE_TITLE' => 'Prospects : Accueil',
    'LBL_NAME' => 'Nom :',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Prospect',
    'LBL_OFFICE_PHONE' => 'Téléphone du bureau :',
    'LBL_OPP_NAME' => 'Nom de l\'Affaire :',
    'LBL_OPPORTUNITY_AMOUNT' => 'Montant Affaire :',
    'LBL_OPPORTUNITY_ID' => 'Affaire (ID)',
    'LBL_OPPORTUNITY_NAME' => 'Nom de l\'Affaire :',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Autre E-mail :',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'Portail application',
    'LBL_PORTAL_INFORMATION' => 'Portal Information',
    'LBL_PORTAL_NAME' => 'Nom sur le portail :',
    'LBL_POSTAL_CODE' => 'Code postal :',
    'LBL_STREET' => 'Street',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Adresse principale - Ville',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Adresse principale - Pays',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Adresse principale - Code Postal',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Adresse principale - Région',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Adresse principale - Rue 2',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Adresse principale - Rue 3',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Adresse principale - Rue 1',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_REFERED_BY' => 'Fait référence à :',
    'LBL_REPORTS_TO_ID' => 'Rend compte à (ID)',
    'LBL_REPORTS_TO' => 'Rend compte à :',
    'LBL_SALUTATION' => 'Salutation',
    'LBL_MODIFIED' => 'Modifié par',
    'LBL_CREATED' => 'Créé par',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher un prospect',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Sélectionner prospects vérifiés',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Leads',
    'LBL_STATE' => 'State/Region:',
    'LBL_STATUS_DESCRIPTION' => 'Description Statut :',
    'LBL_STATUS' => 'Status:',
    'LBL_TITLE' => 'Intitulé du poste :',
    'LNK_IMPORT_VCARD' => 'Insérer une vCard',
    'LNK_LEAD_LIST' => 'Voir les prospects',
    'LNK_NEW_ACCOUNT' => 'Créer un compte',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CONTACT' => 'Créer un Contact',
    'LNK_NEW_LEAD' => 'Créer un prospect',
    'LNK_NEW_NOTE' => 'Create Note',
    'LNK_NEW_TASK' => 'Planifier une tâche',
    'LNK_NEW_CASE' => 'Créer un cas',
    'LNK_NEW_CALL' => 'Enregistrer un appel',
    'LNK_NEW_MEETING' => 'Organiser une réunion',
    'LNK_NEW_OPPORTUNITY' => 'Créer une affair',
    'LNK_SELECT_ACCOUNTS' => ' <b>OU</b> Sélectionner un Compte',
    'LNK_SELECT_CONTACTS' => ' <b>Ou</b> Sélectionnez le Contact',
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_SNOOZE_CONFIRMATION' => 'Êtes-vous sûr de vouloir reporter ?',
    'NTC_REMOVE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer ce prospect ?',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagnes',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_LIST_ASSIGNED_TO_NAME' => 'Utilisateur attribué',
    'LBL_PROSPECT_LIST' => 'Liste des prospects',
    'LBL_CAMPAIGN_LEAD' => 'Campagnes',
    'LBL_BIRTHDATE' => 'Date de naissance :',
    'LBL_ASSISTANT_PHONE' => 'Assistant Phone',
    'LBL_ASSISTANT' => 'Assistant',
    'LBL_CREATED_USER' => 'Created User',
    'LBL_MODIFIED_USER' => 'Modified User',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CONVERT_MODULE_NAME' => 'Module',
    'LBL_CONVERT_REQUIRED' => 'Obligatoire',
    'LBL_CONVERT_SELECT' => 'Sélection',
    'LBL_CONVERT_COPY' => 'Copier',
    'LBL_CONVERT_EDIT' => 'Modifier',
    'LBL_CONVERT_DELETE' => 'Supprimer',
    'LBL_CONVERT_ADD_MODULE' => 'Ajouter Module',
    'LBL_CREATE' => 'Créer',
    'LBL_SELECT' => '<b>OU</b> Sélectionner',
    'LBL_WEBSITE' => 'Website',
    'LNK_IMPORT_LEADS' => 'Importer des prospects',
//Convert lead tooltips
    'LBL_MODULE_TIP' => 'Le module dans lequel vous souhaitez créer un nouvel enregistrement.',
    'LBL_REQUIRED_TIP' => 'Les modules requis doivent être créés ou sélectionnés avant de convertir le prospect.',
    'LBL_COPY_TIP' => 'Si la case est cochée, les champs du prospect seront copiés dans les champs ayant le même nom dans les enregistrements des modules de destination.',
    'LBL_SELECTION_TIP' => 'Les modules liés avec le module contacts pourront être sélectionnés plutôt que créés durant le processus de conversion des prospects.',
    'LBL_EDIT_TIP' => 'Modifier la mise en page de conversion pour ce module.',
    'LBL_DELETE_TIP' => 'Supprimer ce module de la mise en page de conversion.',

    'LBL_ACTIVITIES_MOVE' => 'Déplacer les activités vers',
    'LBL_ACTIVITIES_COPY' => 'Copier les activités vers',
    'LBL_ACTIVITIES_MOVE_HELP' => "Sélectionner les enregistrements vers lesquels les activités du prospect seront déplacées lors de la conversion. Les activités de type tâches, appels, réunions, notes et E-mails seront déplacées vers ces enregistrement sélectionnés.",
    'LBL_ACTIVITIES_COPY_HELP' => "Sélectionner les enregistrements vers lesquels les activités du prospect seront copiées lors de la conversion. Des activités de type tâches, appels, réunions et notes seront créés pour chacun des enregistrements sélectionnés. Les E-mails seront rattachés aux enregistrements sélectionnés.",
    //For export labels
    'LBL_CAMPAIGN_ID' => 'Identifiant de campagne',
    'LBL_EDITLAYOUT' => 'Modifier la mise en page' /*for 508 compliance fix*/,
    'LBL_ENTERDATE' => 'Enter Date' /*for 508 compliance fix*/,
    'LBL_LOADING' => 'Loading' /*for 508 compliance fix*/,
    'LBL_EDIT_INLINE' => 'Modifier' /*for 508 compliance fix*/,
    'LBL_FP_EVENTS_LEADS_1_FROM_FP_EVENTS_TITLE' => 'Events',
);
