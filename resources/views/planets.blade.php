<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Planeten Overzicht</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 30px; background-color: #f4f4f9; color: #333; }
        .planet { background: white; border: 1px solid #ddd; padding: 20px; margin-bottom: 15px; border-radius: 8px; box-shadow: 0 2px 4px rgba(0,0,0,0.1); }
        h1 { color: #1a1a1a; }
        h2 { margin-top: 0; color: #0066cc; }
    </style>
</head>
<body>

    <h1>Overzicht van Planeten</h1>

    @if(count($planeten) > 0)
        @foreach($planeten as $planet)
            <div class="planet">
                <h2>{{ $planet['name'] }}</h2>
                <p>{{ $planet['description'] }}</p>
            </div>
        @endforeach
    @else
        <p>Geen planeten gevonden met deze naam.</p>
    @endif

</body>
</html>
