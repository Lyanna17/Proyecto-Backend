<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Formulario de Contacto</title>

    <!-- Fuente -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600&display=swap" rel="stylesheet">

    <style>
        * {
            box-sizing: border-box;
            font-family: 'Inter', sans-serif;
        }

        body {
            margin: 0;
            padding: 40px 20px;
            background: linear-gradient(135deg, #0f2027, #203a43, #2c5364);
        }

        .form-container {
            background: rgba(255, 255, 255, 0.95);
            padding: 30px 35px;
            width: 100%;
            max-width: 420px;
            margin: auto;
            border-radius: 16px;
            box-shadow: 0 20px 40px rgba(0,0,0,0.2);
        }

        h2 {
            text-align: center;
            margin-bottom: 10px;
            font-weight: 600;
            color: #1f2933;
        }

        p {
            text-align: center;
            margin-bottom: 25px;
            font-size: 14px;
            color: #6b7280;
        }

        label {
            font-size: 14px;
            font-weight: 500;
            color: #374151;
        }

        input, textarea {
            width: 100%;
            margin-top: 6px;
            margin-bottom: 18px;
            padding: 12px 14px;
            border-radius: 10px;
            border: 1px solid #d1d5db;
            font-size: 14px;
        }

        input:focus, textarea:focus {
            outline: none;
            border-color: #2563eb;
            box-shadow: 0 0 0 3px rgba(37,99,235,0.15);
        }

        textarea {
            resize: none;
            height: 120px;
        }

        button {
            width: 100%;
            padding: 12px;
            border-radius: 12px;
            border: none;
            background: linear-gradient(135deg, #2563eb, #1d4ed8);
            color: white;
            font-size: 15px;
            font-weight: 500;
            cursor: pointer;
            transition: transform 0.2s ease, box-shadow 0.2s ease;
        }

        button:hover {
            transform: translateY(-2px);
            box-shadow: 0 10px 20px rgba(37,99,235,0.3);
        }
    </style>
</head>
<body>

    <div class="form-container">
        <h2>Contáctame</h2>
        <p>¿Tienes alguna pregunta o propuesta? Escríbeme 👇</p>

        <form action="#" method="post">
            <label for="email">Correo electrónico</label>
            <input type="email" id="email" name="email" placeholder="tucorreo@email.com" required>

            <label for="message">Mensaje</label>
            <textarea id="message" name="message" placeholder="Escribe tu mensaje aquí..." required></textarea>

            <button type="submit">Enviar mensaje</button>
        </form>
    </div>

</body>
</html>
