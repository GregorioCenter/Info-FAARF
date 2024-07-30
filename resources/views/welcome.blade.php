<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>FAARF - Bienvenue</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>
        body {
            font-family: 'Nunito', sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 0;
        }
        .container {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background: linear-gradient(135deg, #6a11cb 0%, #2575fc 100%);
        }
        .content {
            background: white;
            padding: 2rem;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            text-align: center;
        }
        .header {
            font-size: 2rem;
            font-weight: 700;
            margin-bottom: 1rem;
            color: #333;
        }
        .sub-header {
            font-size: 1.2rem;
            margin-bottom: 2rem;
            color: #666;
        }
        .btn {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            margin: 0.5rem;
            font-size: 1rem;
            font-weight: 600;
            text-decoration: none;
            color: white;
            background: #6a11cb;
            border-radius: 5px;
            transition: background 0.3s;
        }
        .btn:hover {
            background: #2575fc;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="content">
            <div class="header">Bienvenue à FAARF</div>
            <div class="sub-header">Gestion des activités internes</div>
            
            @if (Route::has('login'))
                <div>
                    @auth
                        <a href="{{ url('/home') }}" class="btn">Accueil</a>
                    @else
                        <a href="{{ route('login') }}" class="btn">Connexion</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn">Inscription</a>
                        @endif
                    @endauth
                </div>
            @endif
        </div>
    </div>
</body>
</html>
