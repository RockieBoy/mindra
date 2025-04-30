<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body { background-color: #f2f2f2; }
        .card-box { border-radius: 15px; padding: 1rem; }
        .card-box-title { border-radius: 15px; padding: 0.3rem; }
    </style>
    
</head>
<body>
    <div class="container-fluid">
        
            
            <main class="col-md-12 ms-sm-auto px-4 py-3">
                @yield('content')
            </main>
        
    </div>
</body>
</html>
