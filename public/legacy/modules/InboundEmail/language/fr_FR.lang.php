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


    'LBL_RE' => 'RE :',

    'ERR_BAD_LOGIN_PASSWORD' => 'Utilisateur ou mot de passe incorrect',
    'ERR_INI_ZLIB' => 'Impossible de désactiver temporairement la compression Zlib. "Tester Paramétrage" peut échouer.',
    'ERR_NO_IMAP' => 'Librairie IMAP non trouvée. Merci de résoudre le problème avant de poursuivre le paramétrage des E-mails entrants',
    'ERR_NO_OPTS_SAVED' => 'Pas de paramètres optimaux sauvegardés avec votre boîte E-mail entrante. Merci de revoir les paramétrages',
    'ERR_TEST_MAILBOX' => 'Merci de vérifier vos Paramètres et essayer à nouveau.',
    'ERR_INVALID_PORT' => 'Port invalide',

    'LBL_ASSIGN_TO_USER' => 'Assigner à l&#39;utilisateur',
    'LBL_AUTOREPLY' => 'Modèle de réponse automatique',
    'LBL_AUTOREPLY_HELP' => 'Sélectionner une réponse automatique de notification de réception.',
    'LBL_BASIC' => 'Paramètrages essentiels',
    'LBL_CASE_MACRO' => 'Mot clé du cas',
    'LBL_CASE_MACRO_DESC' => 'Ce mot clé sera analysé et utilisé lors de la réception des E-mails entrants pour lier les E-mails dont le titre contient ce mot clé, au cas dont le numéro sera égal à la valeur de %1.',
    'LBL_CASE_MACRO_DESC2' => 'Set this to any value, but preserve the <b>"%1"</b>.',
    'LBL_CLOSE_POPUP' => 'Fermer fenêtre',
    'LBL_CREATE_TEMPLATE' => 'Créer',
    'LBL_DELETE_SEEN' => 'Supprimer les E-mails lus après l\'import.',
    'LBL_EDIT_TEMPLATE' => 'Modifier',
    'LBL_EMAIL_OPTIONS' => 'Paramètres optionnels',
    'LBL_EMAIL_BOUNCE_OPTIONS' => 'Options de gestion des rebonds',
    'LBL_FILTER_DOMAIN_DESC' => 'Le domaine spécifié ne recevra pas de "Réponse automatique"',
    'LBL_ASSIGN_TO_GROUP_FOLDER_DESC' => 'Sélectionnez pour enregistrer automatiquement les E-mails dans SuiteCRM pour tous les E-mails entrants.',
    'LBL_FILTER_DOMAIN' => 'Pas de "Réponse automatique" pour le domaine',
    'LBL_FIND_SSL_WARN' => '<br>Le test SSL peut prendre un certain temps. Merci de patienter.<br>',
    'LBL_FROM_ADDR' => 'E-mail de l\'expéditeur',
    'LBL_FROM_ADDR_DESC' => 'L\'adresse e-mail renseignée ici peut ne pas apparaître dans le champ "De" de l\'e-mail envoyé à cause des restrictions imposées par votre fournisseur de service e-mail. Dans ce cas, l\'adresse e-mail définie pour le serveur d\'e-mail sortant sera utilisée.', // as long as XTemplate doesn't support output escaping, transform quotes to html-entities right here (bug #48913)
    'LBL_FROM_NAME' => 'Nom de l&#39;expéditeur',
    'LBL_GROUP_QUEUE' => 'Assigner à un Groupe',
    'LBL_HOME' => 'Accueil',
    'LBL_LIST_MAILBOX_TYPE' => 'Utilisation du compte E-mail',
    'LBL_LIST_NAME' => 'Nom :',
    'LBL_LIST_GLOBAL_PERSONAL' => 'Type',
    'LBL_LIST_SERVER_URL' => 'Serveur',
    'LBL_SERVER_ADDRESS' => 'Adresse du serveur',
    'LBL_LIST_STATUS' => 'Status',
    'LBL_LOGIN' => 'Nom d\'utilisateur',
    'LBL_USERNAME' => 'Nom d\'utilisateur',
    'LBL_MAILBOX_DEFAULT' => 'INBOX',
    'LBL_MAILBOX_SSL' => 'Use SSL',
    'LBL_MAILBOX_TYPE' => 'Actions possibles',
    'LBL_DISTRIBUTION_METHOD' => 'Méhtode de Distribution',
    'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Modèle de Réponse pour une création de cas',
    'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Sélectionnez une réponse automatique pour avertir les expéditeurs qu’un cas a été créé. L\'E-mail contient le numéro de dossier dans son sujet et respecte les paramètres généraux du cas. Cette réponse n’est envoyée qu\'après réception d\'un premier E-mail du demandeur.',
    'LBL_MAILBOX' => 'Dossier Contrôlé',
    'LBL_TRASH_FOLDER' => 'Dossier Poubelle',
    'LBL_SENT_FOLDER' => 'Dossier Envoyé',
    'LBL_SELECT' => 'Select',
    'LBL_MARK_READ_NO' => 'E-mail marqué effacé après Import',
    'LBL_MARK_READ_YES' => 'E-mail laissé sur le Serveur après Import',
    'LBL_MARK_READ' => 'Laisser les Messages sur le Seveur',
    'LBL_MAX_AUTO_REPLIES' => 'Nombre de "Réponses Automatiques"',
    'LBL_MAX_AUTO_REPLIES_DESC' => 'Nombre maximum de "Réponses Automatiques" envoyées par 24 heures à une même adresse E-mail.',
    'LBL_PERSONAL_MODULE_NAME' => 'Compte E-mail personnel',
    'LBL_CREATE_CASE' => 'Créer des cas à partir d\'e-mails',
    'LBL_CREATE_CASE_HELP' => 'Sélectionnez cette option pour créer automatiquement des enregistrements dans SuiteCRM depuis des E-mails entrants.',
    'LBL_MODULE_NAME' => 'Comptes de messagerie entrants',
    'LBL_BOUNCE_MODULE_NAME' => 'Compte E-mail de gestion des rebonds',
    'LBL_MODULE_TITLE' => 'Comptes de messagerie entrants',
    'LBL_NAME' => 'Nom',
    'LBL_NONE' => 'Aucun',
    'LBL_ONLY_SINCE_NO' => 'Non. Vérifier tous les E-mails sur le serveur E-mail.',
    'LBL_ONLY_SINCE_YES' => 'Oui.',
    'LBL_PASSWORD' => 'Password',
    'LBL_EMAIL_PASSWORD' => 'Password',
    'LBL_POP3_SUCCESS' => 'Test de connexion POP3 --> réussi.',
    'LBL_POPUP_TITLE' => 'Test Settings',
    'LBL_SELECT_SUBSCRIBED_FOLDERS' => 'Sélectionner les Dossiers sousscrits',
    'LBL_SELECT_TRASH_FOLDERS' => 'Sélectionner le Dossier Poubelle',
    'LBL_SELECT_SENT_FOLDERS' => 'Sélectionner le Dossier Envoyé',
    'LBL_DELETED_FOLDERS_LIST' => 'Le dossier %s n&#39;existe pas ou a été supprimé du serveur',
    'LBL_PORT' => 'Mail Server Port',
    'LBL_REPLY_TO_NAME' => 'Nom du "Répondre à"',
    'LBL_REPLY_TO_ADDR' => 'Adresse E-mail du "Répondre à"',
    'LBL_SAME_AS_ABOVE' => 'Utiliser adresse/nom émetteur',
    'LBL_SERVER_OPTIONS' => 'Options du Serveur Mail',
    'LBL_SERVER_TYPE' => 'Mail Server Protocol',
    'LBL_SERVER_PORT' => 'Mail Server Port',
    'LBL_SERVER_URL' => 'Mail Server Address',
    'LBL_SSL_DESC' => 'If your mail server supports secure socket connections, enabling this will force SSL connections when importing email.',
    'LBL_ASSIGN_TO_TEAM_DESC' => 'L\'équipe sélectionnée a accès au compte E-mail.',
    'LBL_SSL' => 'Use SSL',
    'LBL_STATUS' => 'Status',
    'LBL_EMAIL_BODY_FILTERING' => 'Type de filtre du corps de l\'email',
    'LBL_SYSTEM_DEFAULT' => 'System Default',
    'LBL_TEST_BUTTON_TITLE' => 'Test',
    'LBL_TEST_SETTINGS' => 'Test Settings',
    'LBL_TEST_CONNECTION_SETTINGS' => 'Test des paramètres de connexion',
    'LBL_TEST_SUCCESSFUL' => 'Test de connexion réussi.',
    'LBL_TEST_WAIT_MESSAGE' => 'Veuillez patienter...',
    'LBL_WARN_IMAP_TITLE' => 'E-mail entrant désactivé',
    'LBL_WARN_IMAP' => 'Avertissements :',
    'LBL_WARN_NO_IMAP' => 'Le système n\'a pas les librairies c-client IMAP activées / compilées dans le module PHP (--with-imap=/path/to/imap_c-client_library). Veuillez contacter votre administrateur système pour activer cette librairie.',

    'LNK_LIST_CREATE_NEW_PERSONAL' => 'Nouveau compte personnel',
    'LNK_LIST_CREATE_NEW_GROUP' => 'Nouveau compte de groupe',
    'LNK_LIST_CREATE_NEW_CASES_TYPE' => 'Nouveau compte de cas',
    'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nouveau compte de gestion des rebonds',
    'LNK_LIST_MAILBOXES' => 'Comptes de messagerie entrants',
    'LNK_LIST_OUTBOUND_EMAILS' => 'Comptes de courrier électronique sortant',
    'LNK_LIST_SCHEDULER' => 'Planificateurs',
    'LNK_SEED_QUEUES' => 'Renseigner les files d&#39;attente depuis les équipes',
    'LBL_GROUPFOLDER_ID' => 'ID du Dossier de Groupe',

    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Autoriser les utilisateurs à envoyer des E-mails en utilisant les informations du "De" nom et adresse en adresse de réponse (reply-to).',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Lorsque cette option est sélectionnée, les informations "De" nom et adresse associée avec ce compte E-mail de groupe apparaitront en option pour le champ "De" lorsque les utilisateurs qui ont accès à cette boite composeront un E-mail.',
    'LBL_STATUS_ACTIVE' => 'Activé',
    'LBL_STATUS_INACTIVE' => 'Désactivé',
    'LBL_IS_PERSONAL' => 'Personal',
    'LBL_IS_GROUP' => 'group',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importer automatiquement les E-mails',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Attention: Vous allez modifier la configuration des imports automatiques. Vous risquez de perdre des données.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Attention : L\'import automatique des E-mails doit être activé pour la création automatique des cas.',
    'LBL_LIST_TITLE_MY_DRAFTS' => 'Brouillons',
    'LBL_LIST_TITLE_MY_INBOX' => 'Boîte de réception',
    'LBL_LIST_TITLE_MY_SENT' => 'E-mail envoyé',
    'LBL_LIST_TITLE_MY_ARCHIVES' => 'E-mails Archivés',
    'LNK_MY_DRAFTS' => 'Brouillons',
    'LNK_MY_INBOX' => 'Adresse E-mail',
    'LNK_VIEW_MY_INBOX' => 'Voir l\'E-mail',
    'LNK_QUICK_REPLY' => 'Reply',
    'LNK_SENT_EMAIL_LIST' => 'Messages envoyés',
    'LBL_EDIT_LAYOUT' => 'Modifier la mise en page' /*for 508 compliance fix*/,
    'LBL_TYPE_DIFFERENT' => 'External OAuth Connection type must be the SAME as the Inbound Email Account type',

    'LBL_MODIFIED_BY' => 'Modifié par',
    'LBL_SERVICE' => 'Service',
    'LBL_STORED_OPTIONS' => 'Options stockées',
    'LBL_GROUP_ID' => 'ID Groupe',

    'LBL_OUTBOUND_CONFIGURATION' => 'Configuration sortante',
    'LBL_CONNECTION_CONFIGURATION' => 'Configuration du Serveur',
    'LBL_AUTO_REPLY_CONFIGURATION' => 'Configuration de la réponse automatique',
    'LBL_CASE_CONFIGURATION' => 'Configuration d\'une Affaire',
    'LBL_GROUP_CONFIGURATION' => 'Configuration du groupe',

    'LBL_SECURITYGROUPS_SUBPANEL_TITLE' => 'Groupes de sécurité',


    'LBL_OUTBOUND_EMAIL_ACCOUNT' => 'Compte E-mail sortant',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_ID' => 'ID compte E-mail sortant',
    'LBL_OUTBOUND_EMAIL_ACCOUNT_NAME' => 'Compte E-mail sortant',

    'LBL_AUTOREPLY_EMAIL_TEMPLATE' => 'Modèle d\'email de réponse automatique',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_ID' => 'ID du modèle d\'email de réponse automatique',
    'LBL_AUTOREPLY_EMAIL_TEMPLATE_NAME' => 'Modèle d\'email de réponse automatique',

    'LBL_CASE_EMAIL_TEMPLATE' => 'Modèle d\'e-mail d\'une Affaire',
    'LBL_CASE_EMAIL_TEMPLATE_ID' => 'ID du modèle d\'e-mail d\'une Affaire',
    'LBL_CASE_EMAIL_TEMPLATE_NAME' => 'Modèle d\'e-mail d\'une Affaire',

    'LBL_PROTOCOL' => 'Protocole',
    'LBL_CONNECTION_STRING' => 'Chaîne de connexion',
    'LBL_DISTRIB_METHOD' => 'Distribution Method',
    'LBL_DISTRIB_OPTIONS' => 'Options de distribution',

    'LBL_DISTRIBUTION_USER' => 'Utilisateur utilisé pour la distribution',
    'LBL_DISTRIBUTION_USER_ID' => 'Identifiant de l\'utilisateur utilisé pour la distribution',
    'LBL_DISTRIBUTION_USER_NAME' => 'Utilisateur utilisé pour la distribution',

    'LBL_EXTERNAL_OAUTH_CONNECTION' => 'Connexion OAuth Externe',
    'LBL_EXTERNAL_OAUTH_CONNECTION_ID' => 'ID de connexion OAuth externe',
    'LBL_EXTERNAL_OAUTH_CONNECTION_NAME' => 'Connexion OAuth Externe',
    'LNK_EXTERNAL_OAUTH_CONNECTIONS' => 'Connexions OAuth Externe',

    'LBL_TYPE' => 'Type',
    'LBL_AUTH_TYPE' => 'Type d\'authentification',
    'LBL_IS_DEFAULT' => 'Par défaut',
    'LBL_SIGNATURE' => 'Signature',

    'LBL_OWNER_NAME' => 'Owner',

    'LBL_SET_AS_DEFAULT_BUTTON' => 'Définir par défaut',

    'LBL_MOVE_MESSAGES_TO_TRASH_AFTER_IMPORT' => 'Déplacer les messages dans la corbeille après importation ?',
    'LBL_LAST_IMPORT_RUN_DATETIME' => 'Last Import Run Date/Time',
    'LBL_MAILBOX_LAST_IMPORTED_DAYS' => 'Last Imported Date Per Mailbox',
    'LBL_EMAIL_IMPORT_PER_RUN_THRESHOLD' => 'Emails to Import Per Run',
    'LBL_EMAIL_IMPORT_TIMEFRAME_START' => 'Import Timeframe Start',
    'LBL_EMAIL_IMPORT_UNREAD_ONLY' => 'Import Unread Emails Only'
);
