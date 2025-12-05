# NIRD - Numérique Inclusif Responsable Durable

## 📋 Description du Projet

NIRD est une application web éducative conçue pour accompagner les établissements scolaires dans leur transition vers un numérique plus éthique, responsable et durable. Le projet vise à sensibiliser et former les acteurs de l'éducation aux enjeux de la sobriété numérique, du réemploi du matériel et des alternatives open source.

## 🎯 Objectifs Principaux

- **Numérique** : Promouvoir l'utilisation de technologies au service de l'innovation
- **Inclusif** : Garantir l'accessibilité numérique pour tous
- **Responsable** : Respecter l'éthique et la protection des données
- **Durable** : Encourager la sobriété numérique et le réemploi

## 🚀 Fonctionnalités

### 1. Pages Informatives

#### **Accueil (Home)**
- Présentation des 4 piliers de NIRD
- Aperçu des services proposés
- Navigation rapide vers les sections principales

#### **Démarche NIRD (Solution)**
- Explication détaillée de l'approche NIRD
- Méthodologie en 3 étapes
- Processus d'accompagnement

#### **Sensibilisation**
- Information sur la sobriété numérique
- Impact environnemental du numérique (4% des émissions GES)
- Initiatives de réemploi et reconditionnement
- Approche de co-construction

#### **Alternatives Open Source**
- **Catalogue interactif** de solutions libres
- **Calculateur de coûts dynamique** :
  - Sélection des solutions payantes cliquables
  - Calcul automatique du coût total annuel
  - Ajustement du nombre d'utilisateurs/postes
  - Affichage des économies potentielles
- **Affichage en deux colonnes** :
  - Gauche : Solutions propriétaires (fond rouge) avec logo Windows
  - Droite : Alternatives open source (fond vert)
- **Catégories** :
  - Outils de Bureautique
  - Communication
  - Multimédia
  - Éducation
  - Systèmes d'exploitation
  - Systèmes d'exploitation éducatifs (Linux NIRD, PrimTux)

#### **Installer Linux**
- **Guide pas à pas** en 6 étapes
- **Liens cliquables** vers :
  - Sites officiels (Ubuntu, Linux Mint, Linux NIRD)
  - Outils de création de clé USB (Rufus, Balena Etcher)
  - Ressources d'aide (Ubuntu-fr.org, documentation, YouTube)
- Instructions détaillées pour Windows et Mac
- Conseils de sécurité et bonnes pratiques

#### **Quiz Interactif**
- 10 questions de connaissances sur NIRD
- Système de notation avec pourcentage
- Corrections détaillées avec explications
- Messages personnalisés selon le score
- Design avec thème vert écologique (#059669)
- Sujets abordés :
  - Acronyme NIRD
  - Impact environnemental (4% GES, 80% fabrication)
  - Distributions Linux éducatives
  - Économies potentielles
  - Sobriété numérique
  - Co-construction

#### **Ressources**
- Vue d'ensemble de toutes les ressources NIRD
- Cartes interactives vers chaque section
- Call-to-action pour démarrer la transition

#### **À propos**
- **Lecteur vidéo** pour présentation du projet
- **Lecteur audio** pour le podcast "Swatted"
- Présentation de la mission NIRD
- 4 axes de travail : Accompagnement, Sensibilisation, Alternatives, Formation

#### **Contact**
- Formulaire de contact
- Coordonnées de l'équipe NIRD

### 2. Fonctionnalités Interactives

#### **Calculateur de Coûts** (Page Alternatives)
- Sélection interactive des solutions propriétaires
- Calcul en temps réel du coût total annuel
- Paramétrage du nombre d'utilisateurs
- Conversion automatique des prix (mensuel → annuel)
- Affichage des économies avec l'open source
- Panneau sticky qui reste visible au scroll

#### **Navigation Intelligente**
- Navbar responsive avec menu mobile
- Indicateur de page active
- Footer enrichi avec liens rapides
- 9 pages accessibles

#### **Média Players**
- Lecteur vidéo HTML5 (page À propos)
- Lecteur audio pour podcast M4A (page À propos)
- Contrôles natifs du navigateur

### 3. Easter Egg : Jeu Snake 🐍

Un jeu Snake caché activable avec le **code Konami** :
```
↑ ↑ ↓ ↓ ← → ← → B A
```

**Fonctionnalités du jeu** :
- Serpent rouge contrôlable avec les flèches
- Le serpent "mange" les éléments de la page (titres, paragraphes, liens)
- Navigation entre pages en conservant l'état du jeu
- Système de score (nombre d'éléments mangés)
- Scroll automatique de la page
- Téléportation sur les bords de l'écran
- Collision avec le corps après 30 segments
- Sauvegarde dans localStorage
- Barre de jeu avec boutons Reset et Exit

## 🎨 Design et Thème

### Palette de Couleurs
- **Vert principal** : `#059669` (thème écologique)
- **Vert foncé** : `#047857`
- **Header coloré** : Dégradé multicolore (bleu → violet → rose → orange)
- **Fond** : Blanc et gris clair

### Gradients Personnalisés
- `gradient-nird` : Dégradé vert pour éléments importants
- `gradient-nird-header` : Dégradé coloré pour la navbar
- `gradient-nird-blue-violet` : Pour les sections hero

### Design System
- **Typography** : Police Inter de Google Fonts
- **Icônes** : SVG personnalisés et emojis
- **Cartes** : Effets hover avec scale et shadow
- **Badges** : Style cohérent pour les tags "Gratuit" et "Payant"

## 🛠️ Stack Technique

### Backend
- **Framework** : Laravel 12
- **PHP** : Version récente
- **Architecture** : MVC (Model-View-Controller)

### Frontend
- **CSS Framework** : TailwindCSS 4
- **JavaScript** : Alpine.js pour l'interactivité
- **Build Tool** : Vite 7.2.6
- **Asset Compilation** : JavaScript et CSS optimisés

### Fichiers Clés
```
app/Http/Controllers/
├── HomeController.php
├── SolutionController.php
├── SensibilisationController.php
├── AlternativesController.php
├── LinuxInstallController.php
├── QuizController.php
├── ResourcesController.php
├── AboutController.php
└── ContactController.php

resources/views/
├── layouts/app.blade.php (Layout principal)
├── home.blade.php
├── solution.blade.php
├── sensibilisation.blade.php
├── alternatives.blade.php
├── linux-install.blade.php
├── quiz.blade.php
├── resources.blade.php
├── about.blade.php
└── contact.blade.php

resources/css/
└── app.css (Thème personnalisé, gradients)

resources/js/
├── app.js
└── snake.js (Easter egg)

public/
└── podcast-swatted.m4a (1.4 MB)
```

## 📊 Routes Disponibles

| Route | Nom | Contrôleur | Description |
|-------|-----|-----------|-------------|
| `/` | home | HomeController | Page d'accueil |
| `/solution` | solution | SolutionController | Démarche NIRD |
| `/sensibilisation` | sensibilisation | SensibilisationController | Sobriété numérique |
| `/alternatives` | alternatives | AlternativesController | Alternatives open source |
| `/installer-linux` | linux.install | LinuxInstallController | Guide d'installation |
| `/quiz` | quiz | QuizController | Quiz interactif |
| `/ressources` | resources | ResourcesController | Toutes les ressources |
| `/a-propos` | about | AboutController | À propos + podcast |
| `/contact` | contact | ContactController | Formulaire de contact |

## 💡 Points Forts

### 1. Expérience Utilisateur
- Navigation intuitive et cohérente
- Design responsive (mobile-first)
- Effets visuels attractifs (hover, transitions)
- Feedback visuel immédiat (sélection, validation)

### 2. Pédagogie
- Contenu structuré et progressif
- Quiz éducatif avec corrections
- Guides pratiques étape par étape
- Liens vers ressources externes

### 3. Calculateur d'Économies
- Outil unique pour démontrer la rentabilité de l'open source
- Calculs automatiques précis
- Interface interactive et visuelle
- Comparaison côte à côte

### 4. Accessibilité
- Liens tous cliquables et fonctionnels
- Textes alternatifs
- Navigation au clavier
- Contraste de couleurs respecté

### 5. Performance
- Assets optimisés avec Vite
- CSS : 84.32 kB (14.45 kB gzippé)
- JS : 86.28 kB (32.26 kB gzippé)
- Chargement rapide

## 🎮 Easter Eggs et Fonctionnalités Cachées

### Jeu Snake
1. Taper le code Konami : `↑ ↑ ↓ ↓ ← → ← → B A`
2. Un serpent rouge apparaît
3. Contrôles : Flèches directionnelles
4. Le serpent peut manger les éléments de la page
5. Score affiché en temps réel
6. Persistance entre les pages
7. Boutons Reset et Exit disponibles

## 📈 Statistiques du Projet

- **Pages** : 9 pages complètes
- **Contrôleurs** : 9 contrôleurs Laravel
- **Composants interactifs** : Calculateur, Quiz, Snake
- **Liens externes** : Ubuntu, Linux Mint, Rufus, Etcher, Forums
- **Assets compilés** : ~84 kB CSS + ~86 kB JS
- **Temps de build** : ~1 seconde

## 🔧 Installation et Démarrage

### Prérequis
- PHP 8.x
- Composer
- Node.js & NPM
- Serveur web (Apache/Nginx) ou `php artisan serve`

### Installation
```bash
# Installer les dépendances PHP
composer install

# Installer les dépendances Node
npm install

# Compiler les assets
npm run build

# Démarrer le serveur de développement
php artisan serve
```

### Build pour Production
```bash
npm run build
```

## 🎯 Public Cible

- Établissements scolaires (écoles, collèges, lycées)
- Équipes éducatives
- Responsables IT dans l'éducation
- Décideurs de l'Éducation Nationale
- Enseignants sensibles au numérique responsable

## 📝 Licence et Crédits

- **Projet** : NIRD (Numérique Inclusif Responsable Durable)
- **Framework** : Laravel (Open Source)
- **CSS** : TailwindCSS (MIT)
- **Podcast** : Swatted (1.4 MB, format M4A)
- **Logo Windows** : Utilisé à des fins éducatives

## 🚀 Évolutions Futures Possibles

- Ajout de vidéos de présentation
- Système de comptes utilisateurs
- Tableau de bord d'accompagnement personnalisé
- Forum communautaire
- Base de données de retours d'expérience
- Calculateur d'impact environnemental
- Générateur de plan de migration
- Modules de formation en ligne

---

**Version** : 1.0
**Dernière mise à jour** : Décembre 2025
**Développé avec** : Laravel 12 + TailwindCSS 4 + Alpine.js + ❤️
