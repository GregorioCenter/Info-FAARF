<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Application FAARF</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background: #f4f4f9;
            color: #333;
        }
        .hero-section {
            background: linear-gradient(to right, #6a11cb, #2575fc);
            color: #fff;
            text-align: center;
            padding: 100px 20px;
        }
        .hero-section h1 {
            font-size: 3rem;
            margin-bottom: 20px;
        }
        .hero-section p {
            font-size: 1.2rem;
            margin-bottom: 40px;
        }
        .hero-section .btn-primary {
            background-color: #fff;
            color: #2575fc;
            border: none;
            font-weight: bold;
            padding: 10px 20px;
            text-transform: uppercase;
            border-radius: 5px;
        }
        .hero-section .btn-primary:hover {
            background-color: #f1f1f1;
            color: #0056b3;
        }
        .feature-section {
            padding: 60px 20px;
            text-align: center;
        }
        .feature-section h2 {
            margin-bottom: 30px;
            font-size: 2.5rem;
        }
        .feature-card {
            background: #fff;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin: 20px;
            text-align: left;
        }
        .feature-card h3 {
            margin-top: 0;
            font-size: 1.5rem;
        }
        .feature-card p {
            font-size: 1rem;
            color: #666;
        }
        .footer {
            background: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
        }
    </style>
</head>
<body>
    <header class="hero-section">
        <div class="container">
            <h1>Bienvenue sur l'application FAARF</h1>
            <p>Une solution complète pour gérer les activités internes de FAARF avec facilité et efficacité.</p>
            <a href="#features" class="btn btn-primary">Découvrez les fonctionnalités</a>
        </div>
    </header>
    
    <section id="features" class="feature-section">
        <div class="container">
            <h2>Fonctionnalités Clés</h2>
            <div class="row">
                <div class="col-md-4">
                    <div class="feature-card">
                        <h3>Gestion des Événements</h3>
                        <p>Organisez et suivez les événements internes avec une interface intuitive et des outils puissants.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <h3>Suivi des Réunions</h3>
                        <p>Planifiez et gérez les réunions efficacement, avec des rappels et des options de partage des agendas.</p>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="feature-card">
                        <h3>Gestion des Missions</h3>
                        <p>Assignez et suivez les missions des équipes avec des rapports détaillés et des tableaux de bord.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 FAARF. Tous droits réservés.</p>
        </div>
    </footer>
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
