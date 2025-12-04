# Site NIRD - MVP

## À propos

Site web de promotion de la méthode **NIRD** (Numérique Inclusif Responsable Durable).

Ce MVP présente les 4 piliers de NIRD et offre des outils interactifs pour aider les organisations à évaluer et améliorer leur maturité numérique.

## Fonctionnalités

### 1. Page d'accueil
- Présentation claire des 4 piliers NIRD
- Design moderne et attractif avec animations
- Appels à l'action pour l'auto-évaluation
- Statistiques sur l'impact du numérique

### 2. Auto-évaluation interactive
- Questionnaire interactif avec Alpine.js
- Barre de progression en temps réel
- Résultats immédiats avec visualisation graphique
- Recommandations personnalisées

### 3. Page Ressources
- Guides et référentiels (WCAG, RGAA, GR491, RGPD)
- Filtres par catégorie (Inclusif, Responsable, Durable)
- Liens vers des ressources externes
- Formations et communautés recommandées

### 4. Formulaire de contact
- Formulaire avec validation
- FAQ interactive
- Informations de contact

## Stack technique

- **Backend**: Laravel 12
- **Frontend**: TailwindCSS 4 + Alpine.js
- **Build**: Vite
- **Base de données**: SQLite (par défaut)

## Installation

### Prérequis
- PHP 8.2+
- Composer
- Node.js 18+ & NPM

### Étapes

1. Installer les dépendances PHP :
```bash
composer install
```

2. Installer les dépendances JavaScript :
```bash
npm install
```

3. Configurer l'environnement :
```bash
cp .env.example .env
php artisan key:generate
```

4. Créer la base de données :
```bash
php artisan migrate
```

5. Compiler les assets :
```bash
npm run build
```

6. Lancer le serveur de développement :
```bash
php artisan serve
```

Le site sera accessible sur http://localhost:8000

## Mode développement

Pour le développement avec rechargement automatique :

Terminal 1 - Serveur Laravel :
```bash
php artisan serve
```

Terminal 2 - Vite (assets en temps réel) :
```bash
npm run dev
```

## Structure du projet

```
nird-site/
├── app/
│   └── Http/
│       └── Controllers/
│           ├── HomeController.php
│           ├── EvaluationController.php
│           ├── ResourceController.php
│           └── ContactController.php
├── resources/
│   ├── css/
│   │   └── app.css (TailwindCSS)
│   ├── js/
│   │   └── app.js (Alpine.js)
│   └── views/
│       ├── layouts/
│       │   └── app.blade.php
│       ├── home.blade.php
│       ├── evaluation.blade.php
│       ├── resources.blade.php
│       └── contact.blade.php
└── routes/
    └── web.php
```

## Caractéristiques techniques

### Accessibilité
- Navigation au clavier
- ARIA labels appropriés
- Contraste des couleurs conforme WCAG
- Structure sémantique HTML5

### Performance
- Lazy loading des images
- CSS et JS minifiés en production
- Optimisation TailwindCSS (purge)
- Chargement asynchrone

### Responsive Design
- Mobile-first
- Breakpoints adaptatifs
- Navigation mobile optimisée
- Grilles flexibles

## Améliorations futures

- [ ] Système d'authentification
- [ ] Sauvegarde des résultats d'évaluation
- [ ] Tableau de bord utilisateur
- [ ] Export PDF des résultats
- [ ] API REST pour l'évaluation
- [ ] Tests unitaires et fonctionnels
- [ ] Intégration CI/CD
- [ ] Analytics et tracking
- [ ] Multilingue (EN/FR)
- [ ] Mode sombre

## Licence

Ce projet est un MVP de démonstration.

## Contact

Pour toute question concernant le projet NIRD, visitez la page contact du site.
