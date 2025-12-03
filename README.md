# 🌐 NovaCraft Studio – Dynamic Website (PHP)

Modernisation du site vitrine statique de NovaCraft Studio en un site partiellement dynamique avec PHP, sans base de données.  
Le projet transforme une base HTML/CSS/Tailwind en un site maintenable avec routing, templates et contenu dynamique.

---

## 📌 Objectif du projet

- Convertir un site statique en site dynamique
- Mettre en place une architecture propre
- Faciliter les mises à jour du contenu
- Intégrer un système de templates communs
- Ajouter un formulaire de contact validé côté serveur
- Améliorer le référencement grâce aux titres dynamiques

---

## 🚀 Fonctionnalités

### ✔ Routing dynamique

- URLs :
  - `/?page=home`
  - `/?page=about`
  - `/?page=services`
  - `/?page=contact`
- Page par défaut : **home**
- Page d’erreur : **404**

### ✔ Templates réutilisables

- `header.php`
- `footer.php`
- `layout.php`
- Titre de page dynamique

### ✔ Services dynamiques

- Chargement depuis un tableau PHP ou fichier JSON
- Affichage automatique dans la page Services

### ✔ Formulaire de contact

- Champs : nom, email, message
- Validation serveur : champs obligatoires + email valide
- Messages d’erreur sous les champs
- Message de succès si validation correcte
