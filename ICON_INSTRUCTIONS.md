# Instructions pour l'icône du site

## Ajouter votre propre icône

Pour personnaliser le logo du site, suivez ces étapes :

### 1. Préparez votre icône

- Format : PNG (recommandé) ou SVG
- Dimensions recommandées : 40x40 pixels minimum
- Nom du fichier : `icon.png`
- Fond transparent de préférence

### 2. Placez le fichier

Copiez votre fichier `icon.png` dans le dossier :
```
public/icon.png
```

### 3. Le site utilisera automatiquement votre icône

Le système affichera automatiquement votre icône dans la barre de navigation.

**Note** : Si aucune icône n'est trouvée, un logo par défaut "N" sera affiché automatiquement.

### Exemple avec la ligne de commande

```bash
# Depuis la racine du projet
cp /chemin/vers/votre/icon.png public/icon.png
```

### Rechargez la page

Après avoir ajouté l'icône, rechargez simplement la page dans votre navigateur (Ctrl+F5 ou Cmd+Shift+R).
