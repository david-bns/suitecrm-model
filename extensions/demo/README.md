# Données de démo

Remplit la base avec des données françaises réalistes (Faker `fr_FR`) pour les démos, et permet de
les effacer sans toucher au reste.

Toutes les commandes se lancent dans le conteneur :

```bash
docker compose exec -u www-data app bin/console <commande>
```

| Commande | Effet |
|---|---|
| `demo:migrate` | Applique les migrations de l'extension (à faire une fois ; `install.sh` le fait) |
| `demo:seed` | Ajoute un jeu de données |
| `demo:reset` | Supprime **uniquement** les fiches créées par `demo:seed` |
| `demo:reset --seed` | Supprime puis recrée : l'équivalent d'un `migrate:fresh --seed` |
| `demo:migrate:status` / `demo:migrate:generate` | État des migrations / nouvelle migration vide |

Options de `demo:seed` (reprises par `demo:reset --seed`) :

| Option | Défaut | |
|---|---|---|
| `--users` | 5 | Commerciaux auxquels les fiches sont assignées (sans mot de passe) |
| `--accounts` | 30 | Comptes ; contacts, affaires, tickets et activités suivent |
| `--leads` | 40 | Prospects |
| `--seed` (`--faker-seed` pour `demo:reset`) | aléatoire | Graine Faker : même graine, mêmes données |

Par compte : 1 à 4 contacts, 0 à 3 affaires, 0 à 2 tickets et 1 à 5 appels, réunions ou tâches,
passés et à venir. Environ 300 fiches en une dizaine de secondes avec les valeurs par défaut.

## Organisation

```
backend/Factory/    une fiche type par module (comme les factories Laravel)
backend/Seeder/     crée les fiches et leurs relations ; DatabaseSeeder fixe l'ordre
backend/Command/    demo:seed et demo:reset
Database/Migrations/  migrations Doctrine de l'extension
config/             câblage des migrations et des commandes demo:migrate*
```

Pour ajouter un module : une factory, un seeder, puis l'ajouter dans `DatabaseSeeder`.

## Choix techniques

- **Les fiches passent par les beans SuiteCRM** (`BeanFactory`), pas par du SQL : relations, adresses
  e-mail et champs calculés sont gérés par SuiteCRM. Aucune notification n'est envoyée.
- **Chaque fiche créée est notée dans `demo_seed_records`.** `demo:reset` ne supprime que celles-là
  (suppression logique, comme depuis l'interface) : les données saisies à la main restent.
- **Les migrations de l'extension sont isolées de celles de SuiteCRM** : table
  `demo_migration_versions` et commandes `demo:migrate*`. Les 39 migrations de SuiteCRM servent à
  ses mises à jour et ne doivent jamais être lancées à la main (`doctrine:migrations:migrate`).
- **Le dossier s'appelle `Database/Migrations` et non `Migrations`** : SuiteCRM ajoute tout dossier
  `extensions/<nom>/Migrations` à ses propres migrations, que sa procédure de mise à jour rejouerait.
- **Les migrations utilisent leur propre connexion DBAL**, sur la même base : la configuration
  Doctrine de SuiteCRM (`schema_filter`) masque toutes les tables sauf `users` et
  `migration_versions`.
