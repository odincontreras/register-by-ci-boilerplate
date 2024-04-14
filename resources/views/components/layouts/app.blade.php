<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>


    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    <main class="min-vh-100 h-100 d-flex flex-column justify-content-center">
        <div class="card m-auto w-100 shadow" style="max-width: 600px;">
            <div class="card-body">
                <h5 class="card-title mb-3">Inicio de sesión</h5>

                {{ $slot }}
            </div>
        </div>
    </main>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
    @vite('resources/js/jqueryValidationConfig.js')
    @stack('scripts')
</body>

</html>
