# Passaggi per l'installazione del progetto (con DDEV)

## 1. Clona il progetto Git

```bash
git clone your_project_repo.git
cd your_project_repo
```

## 2. Installa DDEV (se non già installato)

Se non hai già installato DDEV sul tuo sistema, segui le [istruzioni ufficiali di installazione](https://ddev.readthedocs.io/en/stable/users/install/).

## 3. Configura e avvia DDEV

```bash
ddev config --project-type=drupal11 --docroot=web
ddev start
```

- `ddev config` creerà il file `.ddev/config.yaml` e configurerà l'ambiente locale.
- `ddev start` avvierà i container (web server, database, PHP) e creerà un database vuoto.

## 4. Installa le dipendenze Composer

```bash
ddev composer install
```

Questo comando scaricherà tutti i moduli, i temi e le librerie definiti nel `composer.json` del progetto.

## 5. Unpack le ricette Drupal

```bash
ddev composer drupal:recipe-unpack
```

Questo passaggio è necessario poiché il progetto utilizza le "ricette" di Drupal, che sono un modo per gestire i componenti core e i moduli contrib in modo più modulare.

## 6. Importa il Database

A questo punto, DDEV ha già creato un database vuoto all'interno dei suoi container. Devi importare il dump SQL fornito:

```bash
ddev import-db --src=database_backup.sql
```

In alternativa, puoi usare il comando drush:

```bash
ddev drush sql:cli < database_backup.sql
```

> **Nota**: Esegui questo comando dalla directory radice del progetto, poiché DDEV cerca il file SQL relativo a quella posizione.

## 7. Aggiorna il database e importa la configurazione

Dopo aver importato il database, è necessario applicare eventuali aggiornamenti e sincronizzare la configurazione:

```bash
ddev drush updb
```

Questo comando applicherà eventuali aggiornamenti pendenti al database.

Se la configurazione del sito (tipi di contenuto, campi, viste, ecc.) deve essere sincronizzata:

```bash
ddev drush cim
```

> **Nota**: Se non trovi una cartella `sync` nel progetto, questo passaggio potrebbe non essere necessario, in quanto la configurazione potrebbe essere già stata applicata tramite le ricette o inclusa nel database.

## 8. Avvia il sito nel browser

```bash
ddev launch
```

Questo comando aprirà il sito nel tuo browser predefinito. L'URL sarà tipicamente `https://drupal-test.ddev.site/`.
