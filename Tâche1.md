# TÂCHE 1 : Installation vue et storybook

## TODO 1.1 : Installation de Vite

J'ai utilisé la commande :
```bash
npm create vite@latest .

```
j'ai choisi Vue + JavaScript.
```bash
npm init vite@lastest ❌ : erreur de frappe

npm init vite@latest ⚠️ : ancienne syntaxe

npm create vite@latest ✅ : la bonne

npm create vite@latest . ✅ : version recommandée pour dossier actuel et celle que j'ai installée

```
TODO 1.3 Installer storybook 

J'ai installé storybook avec 
```bash
npx storybook@latest init
```
Ça a généré .storybook/ et stories/

Q1.4 : la ligne de commande pour exécuter le storybook est 
```bash
npm run storybook

```
Q1.5 : On peut consulter storybook sur le port 6006 : storybook dev -p 6006
OUi on peut le changer en le remplacçant par une combinaison ex:
```bash
storybook dev -p 7000
```
Q1.6 : l'installation de storybook crée une dépendance de développement 
Q1.7 : Le dossier stories se trouve : app/widgets/stories/

Il a été créé automatiquement lors de l'installation de Storybook avec :

```bash
npx storybook@latest init
```
Pour voir l’arborescence, j’ai utilisé la commande :
```bash
tree app/widgets -L 2


