<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>{{ $planet['name'] }}</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #f4f4f9; color: #333; }
        .planet { background: white; border: 1px solid #ddd; padding: 20px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1 { color: #1a1a1a; }
        a { color: #0066cc; text-decoration: none; }
        a:hover { text-decoration: underline; }
    </style>
</head>
<body>

    <!-- Terug overzicht -->
    <p><a href="{{ route('planets.index') }}">Terug overzicht</a></p>

    <div class="planet">
        <!-- Naam planeet -->
        <h1>{{ $planet['name'] }}</h1>
        <!-- Beschrijving -->
        <p>{{ $planet['description'] }}</p>
    </div>

</body>
</html>
