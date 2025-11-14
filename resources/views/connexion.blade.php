<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | Management Store</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="{{ asset('js/connexion.js') }}" defer></script>
</head>
<body>
    <div class="login-container">
        <div>
            <h2>MANAGEMENT STORE<br>CONNEXION</h2>
        </div>

        @if(session('status'))
            <div class="status">{{ session('status') }}</div>
        @endif

        <form id="loginForm" action="{{ url('/dashboard') }}" method="POST">
            @csrf
            <label for="email">Adresse e-mail</label>
            <input id="email" name="email" type="email" placeholder="Adresse e-mail" value="{{ old('email') }}" required>
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
            <br>

            <label for="password">Mot de passe</label>
            <input id="password" name="password" type="password" placeholder="Mot de passe" required>
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
            <br>
                <label><input type="checkbox" name="remember"> Se souvenir de moi</label>
            <div class="form-row">
                  <a href="{{ url('/password/register') }}">Créer un compte?</a>
                <a href="{{ url('/password/reset') }}">Mot de passe oublié ?</a>
            </div>

            <button type="submit">Se connecter</button>
        </form>
        <div class="footer">
            Copyright © Samuel KISENGE App 2025<br>
            <a href="#">Privacy Policy</a> ·
            <a href="#">Terms &amp; Conditions</a>
        </div>
    </div>
</body>
</html>