<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Bienvenue sur notre site</title>
</head>
<body>
    <p>Bonjour {{ $user['firstname'] }} {{ $user['lastname'] }},</p>

    <p>Nous sommes heureux de vous accueillir sur notre site ! Votre compte a été créé avec succès.</p>

    <p>Voici vos informations de connexion :</p>
    <ul>
        <li><strong>Email :</strong> {{ $user['email'] }}</li>
        <li><strong>Mot de passe :</strong> {{ $password }}</li>
    </ul>

    <p>Nous vous recommandons de conserver votre mot de passe en sécurité et de ne pas le partager.</p>

    <p>Si vous avez des questions ou avez besoin d'aide, n'hésitez pas à nous contacter.</p>

    <p>Cordialement,<br>L'équipe de notre site</p>
</body>
</html>
