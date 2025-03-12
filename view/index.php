<?php
if (isset($_GET["error"])) {
    echo "<p style='color: red;'>" . htmlspecialchars($_GET["error"]) . "</p>";
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <title>WorkLike</title>
</head>
<body>
    <header>
        <?php include("../include/header.php") ?>
    </header>
    <main>
        <div class="welcome">
            <h1>Bienvenido a WorkLike</h1>
            <p>
                Descubre tu vocación haciendo un test en el cuál viendo tus gustos, aficiones y hábitos podrás descubrir la profesión o carrera <br>
                que mejor encaje contigo.
            </p>
        </div>
        <div class="form">
            <form action="../controler/evaluate.php" method="POST">
                <!-- Sección 1: Gustos e Intereses -->
                1. ¿Qué tipo de libros, películas o series prefieres? <br>
                <input type="radio" name="pregunta1" value="Tecnologia"> Ciencia ficción o documentales técnicos <br>
                <input type="radio" name="pregunta1" value="Arte"> Drama/Arte o biografías de artistas <br>
                <input type="radio" name="pregunta1" value="Social"> Psicología/Sociedad <br>
                <input type="radio" name="pregunta1" value="Naturaleza"> Aventuras en la naturaleza <br>

                2. ¿Cómo te sientes al trabajar con números o datos? <br>
                Selecciona del 1 al 5:
                <select name="pregunta2">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>

                3. Prefieres actividades que involucren: <br>
                <input type="radio" name="pregunta3" value="Tecnologia"> Innovación y tecnología <br>
                <input type="radio" name="pregunta3" value="Creatividad"> Expresión creativa <br>
                <input type="radio" name="pregunta3" value="Social"> Ayudar a otros <br>

                <!-- Sección 2: Habilidades y Hábitos -->
                4. Ante un conflicto, tiendes a: <br>
                <input type="radio" name="pregunta4" value="Logica"> Analizar fríamente las causas <br>
                <input type="radio" name="pregunta4" value="Empatia"> Mediar entre las partes <br>
                <input type="radio" name="pregunta4" value="Resolucion"> Buscar soluciones prácticas <br>

                5. ¿Cómo manejas proyectos a largo plazo? <br>
                Selecciona del 1 al 5:
                <select name="pregunta5">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>

                6. ¿Qué frase te define mejor? <br>
                <input type="radio" name="pregunta6" value="Prevision"> "Siempre tengo un plan B" <br>
                <input type="radio" name="pregunta6" value="Adaptabilidad"> "Improviso sobre la marcha" <br>
                <input type="radio" name="pregunta6" value="Estructura"> "Prefiero seguir instrucciones claras" <br>

                <!-- Sección 3: Personalidad y Toma de Decisiones -->
                7. En equipo, tu rol suele ser: <br>
                <input type="radio" name="pregunta7" value="Liderazgo"> Líder/organizador <br>
                <input type="radio" name="pregunta7" value="Innovacion"> Creativo/generador de ideas <br>
                <input type="radio" name="pregunta7" value="Colaboracion"> Apoyo/logístico <br>

                8. ¿Cómo reaccionas ante el fracaso? <br>
                <input type="radio" name="pregunta8" value="Persistencia"> Analizo errores y reintento <br>
                <input type="radio" name="pregunta8" value="Desmotivacion"> Me desmotivo fácilmente <br>
                <input type="radio" name="pregunta8" value="Aprendizaje"> Pido feedback para mejorar <br>

                9. ¿Prefieres trabajar: <br>
                <input type="radio" name="pregunta9" value="Rutina"> En oficina con horario fijo <br>
                <input type="radio" name="pregunta9" value="Autonomia"> Remoto con flexibilidad <br>
                <input type="radio" name="pregunta9" value="Adaptabilidad"> En entornos dinámicos (ej: eventos) <br>

                <!-- Sección 4: Hobbies y Tiempo Libre -->
                10. ¿Qué haces para desconectar? <br>
                <input type="radio" name="pregunta10" value="Tecnologia"> Videojuegos o programar proyectos personales <br>
                <input type="radio" name="pregunta10" value="Arte"> Pintar, escribir o tocar música <br>
                <input type="radio" name="pregunta10" value="Aventura"> Deportes extremos o actividades al aire libre <br>

                11. Si tuvieras 3 horas libres al día, ¿qué aprenderías? <br>
                <input type="radio" name="pregunta11" value="Comunicacion"> Un idioma nuevo <br>
                <input type="radio" name="pregunta11" value="Tecnologia"> Programación <br>
                <input type="radio" name="pregunta11" value="Creatividad"> Cocina gourmet <br>

                12. ¿Qué tipo de viaje prefieres? <br>
                <input type="radio" name="pregunta12" value="Cultura"> Explorar ciudades históricas <br>
                <input type="radio" name="pregunta12" value="Naturaleza"> Acampar en la montaña <br>
                <input type="radio" name="pregunta12" value="Ciencia"> Visitar laboratorios o museos científicos <br>

                <!-- Sección 5: Escenarios Prácticos -->
                13. Si ganaras 10.000€, ¿qué harías? <br>
                <input type="radio" name="pregunta13" value="Innovacion"> Invertir en educación o tecnología <br>
                <input type="radio" name="pregunta13" value="Aventura"> Viajar y explorar culturas <br>
                <input type="radio" name="pregunta13" value="Empatia"> Donar a causas sociales <br>

                14. En una isla desierta, ¿qué objeto llevarías? <br>
                <input type="radio" name="pregunta14" value="Pragmatismo"> Un kit de supervivencia <br>
                <input type="radio" name="pregunta14" value="Creatividad"> Un cuaderno para escribir/dibujar <br>
                <input type="radio" name="pregunta14" value="Tecnologia"> Un equipo de comunicación <br>

                <!-- Sección 6: Autopercepción -->
                15. ¿Cómo te describirían tus amigos? <br>
                <input type="radio" name="pregunta15" value="Logica"> Analítico y detallista <br>
                <input type="radio" name="pregunta15" value="Social"> Emocional y empático <br>
                <input type="radio" name="pregunta15" value="Creatividad"> Visionario y soñador <br>

                16. ¿Qué te motiva más? <br>
                <input type="radio" name="pregunta16" value="Retos"> Resolver problemas complejos <br>
                <input type="radio" name="pregunta16" value="Social"> Impactar positivamente en otros <br>
                <input type="radio" name="pregunta16" value="Arte"> Crear algo único <br>

                <!-- Sección 7: Escala Likert (1-5) -->
                17. "Disfruto seguir instrucciones paso a paso." <br>
                Selecciona del 1 al 5:
                <select name="pregunta17">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>

                18. "Me gusta liderar grupos y tomar decisiones." <br>
                Selecciona del 1 al 5:
                <select name="pregunta18">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>

                19. "Prefiero trabajos con resultados concretos y medibles." <br>
                Selecciona del 1 al 5:
                <select name="pregunta19">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>

                20. "Soy bueno negociando o persuadiendo a otros." <br>
                Selecciona del 1 al 5:
                <select name="pregunta20">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                </select>
                <br>

                <input type="submit" value="Enviar">
            </form>
        </div>
    </main>
    <script src="../scripts/index.js"></script>
    <footer>
        <?php include("../include/footer.php") ?>
    </footer>
</body>
</html>