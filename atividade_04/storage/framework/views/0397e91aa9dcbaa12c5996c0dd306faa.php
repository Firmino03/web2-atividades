<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title><?php echo e(config('app.name', 'Laravel')); ?></title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <!-- Styles -->
        <style>
            body {
                font-family: 'Figtree', sans-serif;
                background-color: #f9fafb;
                color: #1a202c;
                display: flex;
                align-items: center;
                justify-content: center;
                min-height: 100vh;
                margin: 0;
            }
            .container {
                text-align: center;
                padding: 2rem;
            }
            h1 {
                font-size: 2.5rem;
                font-weight: 600;
                color: #e3342f;
            }
            p {
                font-size: 1.1rem;
                color: #4a5568;
                margin-top: 1rem;
            }
            a {
                color: #e3342f;
                text-decoration: none;
                font-weight: 600;
            }
            a:hover { text-decoration: underline; }
        </style>
    </head>
    <body>
        <div class="container">
            <h1>🎉 Laravel</h1>
            <p>Bem-vindo ao seu projeto Laravel!</p>
            <p>
                <a href="https://laravel.com/docs" target="_blank">Documentação</a> &nbsp;|&nbsp;
                <a href="https://laracasts.com" target="_blank">Laracasts</a>
            </p>
        </div>
    </body>
</html>
<?php /**PATH C:\Users\karol\Downloads\atividade_01 (1)\atividade_01\resources\views/welcome.blade.php ENDPATH**/ ?>