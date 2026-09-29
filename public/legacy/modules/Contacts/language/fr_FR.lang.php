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
    'ERR_DELETE_RECORD' => 'Un numéro d&#39;enregistrement doit être spécifié pour toute suppression.',
    'LBL_ACCOUNT_ID' => 'Compte (ID) :',
    'LBL_ACCOUNT_NAME' => 'Account Name:',
    'LBL_CAMPAIGN' => 'Campaign:',
    'LBL_ACTIVITIES_SUBPANEL_TITLE' => 'Activités',
    'LBL_ADDRESS_INFORMATION' => 'Adresse',
    'LBL_ALT_ADDRESS_CITY' => 'Adresse secondaire - Ville :',
    'LBL_ALT_ADDRESS_COUNTRY' => 'Adresse secondaire - Pays :',
    'LBL_ALT_ADDRESS_POSTALCODE' => 'Adresse secondaire - Code Postal :',
    'LBL_ALT_ADDRESS_STATE' => 'Adresse secondaire - Région :',
    'LBL_ALT_ADDRESS_STREET_2' => 'Adresse secondaire - Rue 2 :',
    'LBL_ALT_ADDRESS_STREET_3' => 'Adresse secondaire - Rue 3 :',
    'LBL_ALT_ADDRESS_STREET' => 'Adresse secondaire - Rue 1 :',
    'LBL_ALTERNATE_ADDRESS' => 'Autres adresses :',
    'LBL_ALT_ADDRESS' => 'Autres adresses :',
    'LBL_ANY_ADDRESS' => 'Any Address:',
    'LBL_ANY_EMAIL' => 'Tous les E-mails :',
    'LBL_ANY_PHONE' => 'Any Phone:',
    'LBL_ASSIGNED_TO_NAME' => 'Assigné à :',
    'LBL_ASSIGNED_TO_ID' => 'Utilisateur attribué',
    'LBL_ASSISTANT_PHONE' => 'Assistant - Tél :',
    'LBL_ASSISTANT' => 'Assistant :',
    'LBL_BIRTHDATE' => 'Date de naissance :',
    'LBL_CITY' => 'Ville :',
    'LBL_CAMPAIGN_ID' => 'Identifiant de campagne',
    'LBL_CONTACT_INFORMATION' => 'Aperçu', //No need to be translated in all caps. Translation used just in menu action items when using the SuiteP template
    'LBL_CONTACT_NAME' => 'Nom du contact :',
    'LBL_CONTACT_OPP_FORM_TITLE' => 'Contact-Affaire :',
    'LBL_CONTACT_ROLE' => 'Rôle :',
    'LBL_CONTACT' => 'Contact :',
    'LBL_COUNTRY' => 'Country:',
    'LBL_CREATED_ACCOUNT' => 'Nouveau Compte créé',
    'LBL_CREATED_CALL' => 'Nouvel Appel créé',
    'LBL_CREATED_CONTACT' => 'Nouveau Contact créé',
    'LBL_CREATED_MEETING' => 'Nouvelle Réunion créée',
    'LBL_CREATED_OPPORTUNITY' => 'Nouvelle Affaire créée',
    'LBL_DATE_MODIFIED' => 'Date de modification :',
    'LBL_DEFAULT_SUBPANEL_TITLE' => 'Contacts',
    'LBL_DEPARTMENT' => 'Service :',
    'LBL_DESCRIPTION' => 'Description :',
    'LBL_DIRECT_REPORTS_SUBPANEL_TITLE' => 'Direct Reports',
    'LBL_DO_NOT_CALL' => 'Ne pas appeler :',
    'LBL_DUPLICATE' => 'Doublons de Contacts Possible',
    'LBL_EMAIL_ADDRESS' => 'Adresse électronique :',
    'LBL_EMAIL_OPT_OUT' => 'E-mail Opt Out :',
    'LBL_EXISTING_ACCOUNT' => 'Compte existant utilisé',
    'LBL_EXISTING_CONTACT' => 'Contact existant utilisé',
    'LBL_EXISTING_OPPORTUNITY' => 'Affaire existante utilisée',
    'LBL_FAX_PHONE' => 'Fax:',
    'LBL_FIRST_NAME' => 'Prénom :',
    'LBL_HISTORY_SUBPANEL_TITLE' => 'Historique',
    'LBL_HOME_PHONE' => 'Téléphone (domicile) :',
    'LBL_ID' => 'ID :',
    'LBL_IMPORT_VCARD' => 'Import vCard',
    'LBL_VCARD' => 'vCard',
    'LBL_IMPORT_VCARDTEXT' => 'Créer automatiquement un nouveau contact en important une carte de Visite de votre fichier système.',
    'LBL_INVALID_EMAIL' => 'E-mail invalide :',
    'LBL_INVITEE' => 'Direct Reports',
    'LBL_LAST_NAME' => 'Nom de famille :',
    'LBL_LEAD_SOURCE' => 'Origine du prospect :',
    'LBL_LIST_ACCEPT_STATUS' => 'Accept Status',
    'LBL_LIST_ACCOUNT_NAME' => 'Account Name',
    'LBL_LIST_CONTACT_NAME' => 'Nom du contact',
    'LBL_LIST_CONTACT_ROLE' => 'Role',
    'LBL_LIST_EMAIL_ADDRESS' => 'Adresse E-mail',
    'LBL_LIST_FIRST_NAME' => 'First Name',
    'LBL_LIST_FORM_TITLE' => 'Contact List',
    'LBL_LIST_LAST_NAME' => 'Last Name',
    'LBL_LIST_NAME' => 'Nom',
    'LBL_LIST_PHONE' => 'Téléphone du bureau',
    'LBL_LIST_TITLE' => 'Fonction',
    'LBL_MOBILE_PHONE' => 'Téléphone mobile :',
    'LBL_MODIFIED' => 'Modifié par :',
    'LBL_MODULE_NAME' => 'Contacts',
    'LBL_MODULE_TITLE' => 'Contacts',
    'LBL_NAME' => 'Nom :',
    'LBL_NEW_FORM_TITLE' => 'Nouveau Contact',
    'LBL_NOTE_SUBJECT' => 'Objet de la Note',
    'LBL_OFFICE_PHONE' => 'Téléphone du bureau :',
    'LBL_OPP_NAME' => 'Nom Affaire :',
    'LBL_OPPORTUNITY_ROLE_ID' => 'Rôle pour cette Affaire (ID) :',
    'LBL_OPPORTUNITY_ROLE' => 'Rôle pour cette Affaire',
    'LBL_OTHER_EMAIL_ADDRESS' => 'Autre E-mail :',
    'LBL_OTHER_PHONE' => 'Other Phone:',
    'LBL_PHONE' => 'Phone:',
    'LBL_PORTAL_APP' => 'Demande de Portail :',
    'LBL_PORTAL_INFORMATION' => 'Information sur le Portail',
    'LBL_PORTAL_NAME' => 'Nom sur le portail :',
    'LBL_STREET' => 'Street',
    'LBL_POSTAL_CODE' => 'Code postal :',
    'LBL_PRIMARY_ADDRESS_CITY' => 'Primary Address City:',
    'LBL_PRIMARY_ADDRESS_COUNTRY' => 'Pays (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_POSTALCODE' => 'Primary Address Postal Code:',
    'LBL_PRIMARY_ADDRESS_STATE' => 'Région (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET_2' => 'Rue 2 (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET_3' => 'Rue 3 (adresse principale) :',
    'LBL_PRIMARY_ADDRESS_STREET' => 'Primary Address Street:',
    'LBL_PRIMARY_ADDRESS' => 'Primary Address:',
    'LBL_PRODUCTS_TITLE' => 'Produits',
    'LBL_REPORTS_TO_ID' => 'Rend compte à (ID) :',
    'LBL_REPORTS_TO' => 'Rend compte à :',
    'LBL_RESOURCE_NAME' => 'Nom de la Resource',
    'LBL_SALUTATION' => 'Titre :',
    'LBL_SAVE_CONTACT' => 'Sauvegarder le Contact',
    'LBL_SEARCH_FORM_TITLE' => 'Rechercher',
    'LBL_SELECT_CHECKED_BUTTON_LABEL' => 'Utiliser Contacts sélectionnés',
    'LBL_SELECT_CHECKED_BUTTON_TITLE' => 'Select Checked Contacts',
    'LBL_STATE' => 'State/Region:',
    'LBL_SYNC_CONTACT' => 'Synchroniser pour Outlook&reg; :',
    'LBL_PROSPECT_LIST' => 'Liste des prospects',
    'LBL_TITLE' => 'Intitulé du poste :',
    'LNK_CONTACT_LIST' => 'Contacts',
    'LNK_IMPORT_VCARD' => 'Insérer une vCard',
    'LNK_NEW_ACCOUNT' => 'Créer un compte',
    'LNK_NEW_APPOINTMENT' => 'Create Appointment',
    'LNK_NEW_CALL' => 'Enregistrer un appel',
    'LNK_NEW_CASE' => 'Créer un cas',
    'LNK_NEW_CONTACT' => 'Créer un Contact',
    'LNK_NEW_EMAIL' => 'Archiver E-mail',
    'LNK_NEW_MEETING' => 'Organiser une réunion',
    'LNK_NEW_NOTE' => 'Create Note',
    'LNK_NEW_OPPORTUNITY' => 'Créer une affair',
    'LNK_NEW_TASK' => 'Planifier une tâche',
    'LNK_SELECT_ACCOUNT' => "Select Account",
    'NTC_DELETE_CONFIRMATION' => 'Are you sure you want to delete this record?',
    'NTC_SNOOZE_CONFIRMATION' => 'Êtes-vous sûr de vouloir reporter ?',
    'NTC_OPPORTUNITY_REQUIRES_ACCOUNT' => 'Créer une Affaire nécessite un Compte associé.<br /> Merci de le créer ou de le sélectionner.',
    'NTC_REMOVE_CONFIRMATION' => 'Etes vous sûr de vouloir supprimer ce contact pour ce cas?',

    'LBL_LEADS_SUBPANEL_TITLE' => 'Prospects',
    'LBL_OPPORTUNITIES_SUBPANEL_TITLE' => 'Affaires',
    'LBL_DOCUMENTS_SUBPANEL_TITLE' => 'Documents',
    'LBL_COPY_ADDRESS_CHECKED_PRIMARY' => 'Copie de l&#39;adresse principale',
    'LBL_COPY_ADDRESS_CHECKED_ALT' => 'Copie de l&#39;adresse secondaire',

    'LBL_CASES_SUBPANEL_TITLE' => 'Tickets',
    'LBL_BUGS_SUBPANEL_TITLE' => 'Anomalies',
    'LBL_PROJECTS_SUBPANEL_TITLE' => 'Projets',
    'LBL_PROJECTS_RESOURCES' => 'Ressources projet',
    'LBL_CAMPAIGNS' => 'Campagnes',
    'LBL_CAMPAIGN_LIST_SUBPANEL_TITLE' => 'Campagnes',
    'LBL_LIST_CITY' => 'City',
    'LBL_LIST_STATE' => 'Région',
    'LBL_HOMEPAGE_TITLE' => 'Mes Contacts',
    'LBL_OPPORTUNITIES' => 'Affaires',

    'LBL_CONTACTS_SUBPANEL_TITLE' => 'Contacts',
    'LBL_PROJECT_SUBPANEL_TITLE' => 'Projets',
    'LNK_IMPORT_CONTACTS' => 'Importer des contacts',

    // SNIP
    'LBL_USER_SYNC' => 'Synchro utilisateur',

    'LBL_FP_EVENTS_CONTACTS_FROM_FP_EVENTS_TITLE' => 'Events',

    'LBL_AOP_CASE_UPDATES' => 'Mises à jour du cas',
    'LBL_CREATE_PORTAL_USER' => 'Créer le portail utilisateur',
    'LBL_ENABLE_PORTAL_USER' => 'Activer le portail utilisateur',
    'LBL_DISABLE_PORTAL_USER' => 'Désactiver le portail utilisateur',
    'LBL_CREATE_PORTAL_USER_FAILED' => 'Échec de la création du portail utilisateur',
    'LBL_ENABLE_PORTAL_USER_FAILED' => 'Échec de l\'activation du portail utilisateur',
    'LBL_DISABLE_PORTAL_USER_FAILED' => 'Échec de la désactivation du portail utilisateur',
    'LBL_CREATE_PORTAL_USER_SUCCESS' => 'Portail utilisateur créée',
    'LBL_ENABLE_PORTAL_USER_SUCCESS' => 'Portail utilisateur activé',
    'LBL_DISABLE_PORTAL_USER_SUCCESS' => 'Portail utilisateur désactivé',
    'LBL_FAILED_TO_CONNECT_JOOMLA' => 'Failed to create portal user, not able to connect to Joomla',
    'LBL_ERROR_CONTACT_ID_OR_EMAIL_EMPTY' => 'Contact ID or Email is empty',
    'LBL_NO_JOOMLA_URL' => 'Pas d\'URL spécifiée pour le portail',
    'LBL_PORTAL_USER_TYPE' => 'Type de portail utilisateur',
    'LBL_PORTAL_ACCOUNT_DISABLED' => 'Compte désactivé',
    'LBL_JOOMLA_ACCOUNT_ID' => 'ID de compte Joomla',
    'LBL_AOP_DISABLED' => 'AOP is disabled, please enable via settings',

    'LBL_AOS_CONTRACTS' => 'Contrats',
    'LBL_AOS_INVOICES' => 'Factures',
    'LBL_AOS_QUOTES' => 'Devis',
    'LBL_PROJECT_CONTACTS_1_FROM_PROJECT_TITLE' => 'Contacts du projet depuis le nom du projet',
    'LBL_LAST_MEETING' => 'Votre dernière interaction a été une réunion le :',
    'LBL_LAST_CALL' => 'Votre dernière interaction a été un appel le :',
    'LBL_LAST_EMAIL' => 'Votre dernière interaction a été un email sur :',
    'LBL_NO_INTERACTION' => 'Vous n\'avez pas encore interagi avec ce contact.',

    'LBL_LIST_INVITE_STATUS' => 'Invite Status',
);
