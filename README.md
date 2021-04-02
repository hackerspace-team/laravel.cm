<p align="center">
    <img src="https://github.com/caneco/laravel-country-logomarks/blob/main/src/cm/logo.svg" width="400" />
</p>

## Laravel.cm

Ce dépôt contient le code source du site de [Laravel.cm](https://laravel.cm). Laravel Cameroun est la plus grande communauté de 
développeurs PHP & Laravel résidant au Cameroun.

Site web : https://laravelcm.com
Facebook: https://www.facebook.com/laravelcm
Twitter: https://twitter.com/laravelcm
Groupe Slack: https://laravelcm.slack.com

## Sponsors

Nous tenons à remercier ces **entreprises extraordinaires** pour leur parrainage. Si vous souhaitez devenir sponsor, veuillez visiter <a href="https://github.com/sponsors/mckenziearts">la page Laravel.cm Github de Sponsoring</a>.

- **[Laravel Shopper](https://laravelshopper.io)**
- [Localhost Academy](https://localhostkmer.xyz)
- [Lotin Corp](https://lotincorp.biz)

## Caractéristiques Serveur

The following tools are required in order to start the installation.

- PHP >=8.0
- [Composer](https://getcomposer.org/download/)
- [NPM](https://docs.npmjs.com/downloading-and-installing-node-js-and-npm)
- [Valet](https://laravel.com/docs/valet#installation)

## Installation

> Notez que vous êtes libre d'ajuster l'emplacement `~/Sites/laravel.cm` à n'importe quel répertoire de votre choix sur votre machine. Ce faisant, assurez-vous d'exécuter la commande `valet link` dans le répertoire souhaité.

1. Clonez ce repo avec la commande `git clone git@github.com:laravelcm/laravel.cm.git ~/Sites/laravel.cm`
2. Exécuter `composer install` pour installer les dépendances PHP
3. Configurez une base de données locale appelée `laravelcm`
4. Exécutez `composer setup` pour configurer l'application
5. Configurer un pilote de messagerie fonctionnel comme [Mailtrap](https://mailtrap.io/)
6. Configurez les fonctionnalités (facultatives) ci-dessous

Vous pouvez maintenant visiter l'application dans votre navigateur en visitant [http://laravel.cm.test](http://laravel.cm.test). Si vous avez amorcé la base de données, vous pouvez vous connecter à un compte de test avec ** `johndoe` ** & **` password` **.

### Github Authentication (optionnel)

Pour que l'authentification Github fonctionne localement, vous devez [enregistrer une nouvelle application OAuth sur Github](https://github.com/settings/applications/new). Utilisez `http://laravel.cm.test` pour l'URL de la page d'accueil et `http://laravel.cm.test/auth/github` pour l'URL de rappel. Lorsque vous avez créé l'application, remplissez l'ID et le secret dans votre fichier `.env` dans les variables d'environnement ci-dessous. Vous devriez maintenant pouvoir vous authentifier avec Github.

```
GITHUB_ID=
GITHUB_SECRET=
GITHUB_URL=http://laravel.cm.test/auth/github
```

### Twitter Sharing (optionnel)

Pour permettre le partage automatique des articles publiés sur Twitter, vous devez [créer une application Twitter](https://developer.twitter.com/apps/). Une fois l'application créée, mettez à jour les variables ci-dessous dans votre fichier `.env`. La clé et le secret du consommateur ainsi que le jeton et le secret d'accès se trouvent dans la section «Clés et jetons» de l'interface utilisateur des développeurs Twitter.

```
TWITTER_CONSUMER_KEY=
TWITTER_CONSUMER_SECRET=
TWITTER_ACCESS_TOKEN=
TWITTER_ACCESS_SECRET=
```

Les articles approuvés sont partagés dans l'ordre dans lequel ils ont été soumis pour approbation. Les articles sont partagés deux fois par jour à 14h00 et 18h00 UTC. Une fois qu'un article a été partagé, il ne sera plus partagé.

## Commands

Command | Description
--- | ---
**`php artisan test --parallel`** | Exécuter les tests
`php artisan migrate:fresh --seed` | Reset la base de données
`npx mix --watch` | Surveillez les changements dans les fichiers CSS et JS

## Maintainers

Le site Laravel.cm est actuellement maintenu par [Arthur Monney](https://github.com/mckenziearts). Si vous avez des questions, n'hésitez pas à créer une issue sur ce dépôt.

## Contribution

Veuillez lire [le guide de contribution](CONTRIBUTING.md) avant de créer une issue ou d'envoyer une demande d'extraction.

## Code de Conduite

Veuillez lire notre [Code de conduite](CODE_OF_CONDUCT.md) avant de contribuer ou d'engager des discussions.

## Vulnérabilités de sécurité

Si vous découvrez une faille de sécurité dans Laravel.cm, veuillez envoyer un e-mail immédiatement à [contact@arthurmonney.me](mailto:contact@arthurmonney.me). **Ne créez pas de problème pour la vulnérabilité.**

## License

La licence MIT. Veuillez consulter [le fichier de licence](LICENSE.md) pour plus d'informations.
