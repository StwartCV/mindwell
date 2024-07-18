<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio de Sesión - MindWell</title>
    <link rel="stylesheet" href="css/styles.css">
</head>
<body>
    <header>
        <h1>MindWell</h1>
        <nav>
            <ul>
                <li><a href="index.php">Inicio</a></li>
                <li><a href="profesionales.php">Directorio de Profesionales</a></li>
                <li><a href="foros.php">Foros</a></li>
                <li><a href="recursos.php">Recursos Educativos</a></li>
                <li><a href="ejercicios.php">Ejercicios</a></li>
                <li><a href="registro.php">Registro</a></li>
                <li><a href="login.php">Inicio de Sesión</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Inicio de Sesión</h2>
        <form id="loginForm" action="procesar_login.php" method="post">
            <label for="correo">Correo Electrónico:</label>
            <input type="email" id="correo" name="correo" required>
            
            <label for="contrasena">Contraseña:</label>
            <input type="password" id="contrasena" name="contrasena" required>
            
            <button type="submit">Iniciar Sesión</button>
        </form>
    </main>
    <footer>
        <p>&copy;Stward Calderon 2024 MindWell. Todos los derechos reservados.</p>
    </footer>
</body>
</html>
