# myMovie

Thème WordPress pour une application de catalogue de films. Interface mobile-first inspirée des applications de streaming.

## Stack

- **CSS** — Tailwind CSS v3 + CSS custom (animations)
- **JS** — Alpine.js (CDN) + esbuild pour le bundle
- **Build** — Tailwind CLI + esbuild
- **Environnement** — ddev

## Installation

```bash
ddev start
yarn
yarn dev
```

## Build

```bash
yarn build
```

## Structure

```
src/
  css/
    style.css     # Styles globaux + Tailwind
    404.css       # Styles dédiés à la page 404
  js/
    main.js       # Entrée Alpine.js
    components/
      stories.js  # Composant stories
dist/             # Fichiers compilés (gitignorés)
template-parts/
  stories.php     # Stories plein écran
  warning.php     # Bandeau d'avertissement
```

## Commandes

| Commande | Description |
|---|---|
| `yarn dev` | Watch + compile CSS et JS |
| `yarn build` | Build minifié pour la production |
