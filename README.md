# Gestion de Stagiaires

## Installation

1. Placez le projet dans votre serveur web (`c:\wamp64\www\Pierre_Sofip`)
2. Créez la base de données MySQL :

```sql
CREATE DATABASE pierre_sofip;
```

3. Importez le fichier `stagiaire.sql` dans votre base de données
4. Configurez `config/connexiondb.php` avec vos paramètres MySQL
5. Accédez à `http://localhost/Pierre_Sofip`

## Configuration BDD

Modifiez `config/connexiondb.php` :

```php
$server = 'localhost';
$bdd = 'pierre_sofip';
$user = 'root';
$password = '';
```
