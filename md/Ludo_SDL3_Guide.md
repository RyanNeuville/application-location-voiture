
# Guide Complet : Créer un Jeu de Ludo en C avec SDL3 sous Code::Blocks

## 🚀 Objectif
Réaliser une application de Ludo simple (plateau, pions, dé, logique) sous **Code::Blocks** en langage C en utilisant **SDL3**.

---

## 🌐 Cahier des Charges

1. **Affichage graphique** :
   - Plateau 2D fidèle au Ludo classique.
   - Pions rouges, bleus, verts, jaunes.
   - Dé graphique interactif.

2. **Interaction** :
   - Clic souris pour lancer le dé.
   - Pions se déplaçant selon la logique du Ludo.

3. **Règles de Jeu** :
   - 4 joueurs virtuels (humain ou IA).
   - Tour à tour.
   - Sortir de la base uniquement si le dé fait 6.
   - Retour à la base si pion mangé.
   - Victoire à l'arrivée des 4 pions à la maison.

4. **Plateforme** : Windows avec Code::Blocks + MinGW.

---

## 🛠️ Étapes de Réalisation

### 1️⃣ Installer l'environnement de développement

- Installe **Code::Blocks avec MinGW**.
- Télécharge **SDL3** sur le site officiel.
- Copie les fichiers SDL3 :
  - `SDL3.dll` dans `C:\Windows\System32` ou dossier projet.
  - `.h` dans `CodeBlocks\MinGW\include`.
  - `.lib` ou `.a` dans `CodeBlocks\MinGW\lib`.

---

### 2️⃣ Configuration Code::Blocks

- Dans `Settings > Compiler > Linker` ajoute :
  ```
  -lSDL3
  ```
- Ajoute `include` et `lib` dans `Search directories`.

---

### 3️⃣ Structure du Projet

```
/ludo_sdl3/
├── main.c            // Boucle principale et gestion d'événements.
├── game.c / .h       // Logique de déplacement et règles du jeu.
├── graphics.c / .h   // Chargement des images et rendu.
├── assets/           // Images BMP :
│     └─ board.bmp, dice_1.bmp...dice_6.bmp, pawn_red.bmp...
├── ludo.cbp          // Fichier projet Code::Blocks.
```

---

### 4️⃣ Assets à préparer

- `board.bmp` : le plateau de jeu.
- `dice_1.bmp` à `dice_6.bmp` : faces du dé.
- `pawn_red.bmp`, `pawn_green.bmp`, `pawn_blue.bmp`, `pawn_yellow.bmp` : pions.

---

### 5️⃣ Initialisation du Code

1️⃣ **Initialisation SDL**
```c
if (SDL_Init(SDL_INIT_VIDEO) != 0) {
    printf("Erreur SDL : %s", SDL_GetError());
    return 1;
}
```

2️⃣ **Fenêtre et Renderer**
```c
SDL_Window* window = SDL_CreateWindow("Ludo SDL3", 800, 600, SDL_WINDOW_OPENGL);
SDL_Renderer* renderer = SDL_CreateRenderer(window, NULL, SDL_RENDERER_ACCELERATED);
```

3️⃣ **Chargement des Textures**
```c
SDL_Surface *surface = SDL_LoadBMP("assets/board.bmp");
SDL_Texture *texture_board = SDL_CreateTextureFromSurface(renderer, surface);
SDL_FreeSurface(surface);
```

4️⃣ **Affichage du Plateau**
```c
SDL_RenderClear(renderer);
SDL_RenderTexture(renderer, texture_board, NULL, NULL);
SDL_RenderPresent(renderer);
```

5️⃣ **Gestion du Dé**
```c
int dice_result = rand() % 6 + 1;
```
- Charger l'image correspondante `dice_X.bmp` après chaque lancer.

6️⃣ **Position des Pions**
```c
int pawn_positions[4][4] = {0}; // Pour chaque joueur et ses 4 pions.
```

7️⃣ **Règles de Déplacement**
- Si `dé == 6`, sortir un pion de la base.
- Sinon avancer du nombre obtenu.
- Si collision : retourner à la base.

8️⃣ **Gestion des Tours**
```c
for (int current_player = 0; game_not_over; current_player = (current_player + 1) % 4) {
    // Lancer de dé
    // Déplacement
    // Test victoire
}
```

9️⃣ **Condition de Victoire**
```c
if (pawn_positions[player][0-3] == END_POSITION) { // Tous
    printf("Le joueur %d a gagné !", player + 1);
}
```

---

## 💡 Conseils

- Découpe le projet en modules `.c` et `.h`.
- D'abord afficher les images avant d'écrire la logique.
- Utilise un tableau d'état clair pour chaque pion.
- Commente ton code ligne par ligne.

---

## 💻 Code Complet Expliqué

Un fichier `main.c` de base :

```c
#include <SDL3/SDL.h>
#include <stdio.h>
#include <stdlib.h>
#include <time.h>

int main() {
    if (SDL_Init(SDL_INIT_VIDEO) != 0) {
        printf("Erreur SDL: %s
", SDL_GetError());
        return 1;
    }

    SDL_Window *window = SDL_CreateWindow("Ludo SDL3", 800, 600, SDL_WINDOW_OPENGL);
    SDL_Renderer *renderer = SDL_CreateRenderer(window, NULL, SDL_RENDERER_ACCELERATED);

    SDL_Surface *surface = SDL_LoadBMP("assets/board.bmp");
    SDL_Texture *texture_board = SDL_CreateTextureFromSurface(renderer, surface);
    SDL_FreeSurface(surface);

    srand(time(NULL));
    int running = 1;
    SDL_Event event;

    while (running) {
        while (SDL_PollEvent(&event)) {
            if (event.type == SDL_EVENT_QUIT) {
                running = 0;
            }
            if (event.type == SDL_EVENT_MOUSE_BUTTON_DOWN) {
                int dice = rand() % 6 + 1;
                printf("Dé lancé: %d
", dice);
            }
        }
        SDL_RenderClear(renderer);
        SDL_RenderTexture(renderer, texture_board, NULL, NULL);
        SDL_RenderPresent(renderer);
    }

    SDL_DestroyTexture(texture_board);
    SDL_DestroyRenderer(renderer);
    SDL_DestroyWindow(window);
    SDL_Quit();

    return 0;
}
```

---

✅ Ce code :
- Initialise SDL3
- Crée la fenêtre et renderer
- Affiche un plateau
- Gère le clic souris pour lancer un dé (console)

Ensuite, tu peux :
- Créer les pions.
- Gérer leurs positions avec tableaux.
- Animer les déplacements.
- Ajouter la logique complète du Ludo.

---

## 🎯 Conclusion

Avec ce guide, même sans expérience, tu peux :
1. Installer ton environnement.
2. Créer la structure.
3. Suivre les règles.
4. Comprendre et écrire chaque ligne de ton Ludo SDL3.

**➡ Si besoin, demande-moi des extensions (IA, menus, sons)**

Bonne création de jeu ! 🎲🎯

---

💡 N'oublie pas de compiler en mode **Release** pour de meilleures performances une fois terminé.

---

Si tu veux, je peux aussi t'aider à faire :
- Un fichier complet `.cbp` prêt pour Code::Blocks.
- Une archive ZIP avec assets d'exemple.

Dis-le-moi dès que tu veux ! 🎯
