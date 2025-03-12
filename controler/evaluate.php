<?php
// Verificar si se han enviado todas las respuestas
$preguntas_requeridas = [
    "pregunta1", "pregunta2", "pregunta3", "pregunta4", "pregunta5",
    "pregunta6", "pregunta7", "pregunta8", "pregunta9", "pregunta10",
    "pregunta11", "pregunta12", "pregunta13", "pregunta14", "pregunta15",
    "pregunta16", "pregunta17", "pregunta18", "pregunta19", "pregunta20"
];

$faltan_respuestas = [];

foreach ($preguntas_requeridas as $pregunta) {
    if (!isset($_POST[$pregunta])) {
        $faltan_respuestas[] = $pregunta;
    }
}

// Si faltan respuestas, redirigir al cuestionario con un mensaje de error
if (!empty($faltan_respuestas)) {
    $mensaje_error = "Por favor, responde todas las preguntas antes de enviar el formulario.";
    header("Location: /view/index.php?error=" . urlencode($mensaje_error));
    exit();
}

// Conexión a la base de datos
$servername = "localhost";
$username = "root"; // Cambia esto por tu usuario de MySQL
$password = "root1234"; // Cambia esto por tu contraseña de MySQL
$dbname = "worklike";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Inicializar variables para almacenar los puntos por categoría
$tecnologia = 0;
$arte_creatividad = 0;
$ciencias_sociales = 0;
$analitica_logica = 0;
$liderazgo = 0;
$aventura_naturaleza = 0;

// Procesar las respuestas del formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pregunta 1
    if ($_POST["pregunta1"] == "Tecnologia") {
        $tecnologia += 2;
    } elseif ($_POST["pregunta1"] == "Arte") {
        $arte_creatividad += 2;
    } elseif ($_POST["pregunta1"] == "Social") {
        $ciencias_sociales += 2;
    }

    // Pregunta 2 (escala Likert)
    $pregunta2 = intval($_POST["pregunta2"]);
    if ($pregunta2 >= 4) {
        $tecnologia += $pregunta2;
        $analitica_logica += $pregunta2;
    }

    // Pregunta 3
    if ($_POST["pregunta3"] == "Tecnologia") {
        $tecnologia += 3;
    } elseif ($_POST["pregunta3"] == "Creatividad") {
        $arte_creatividad += 3;
    } elseif ($_POST["pregunta3"] == "Social") {
        $ciencias_sociales += 3;
    }

    // Pregunta 4
    if ($_POST["pregunta4"] == "Logica") {
        $analitica_logica += 2;
    } elseif ($_POST["pregunta4"] == "Empatia") {
        $ciencias_sociales += 2;
    } elseif ($_POST["pregunta4"] == "Resolucion") {
        $tecnologia += 2;
    }

    // Pregunta 5 (escala Likert)
    $pregunta5 = intval($_POST["pregunta5"]);
    if ($pregunta5 >= 4) {
        $analitica_logica += $pregunta5;
    }

    // Pregunta 6
    if ($_POST["pregunta6"] == "Prevision") {
        $liderazgo += 3;
    } elseif ($_POST["pregunta6"] == "Adaptabilidad") {
        $aventura_naturaleza += 3;
    } elseif ($_POST["pregunta6"] == "Estructura") {
        $analitica_logica += 3;
    }

    // Pregunta 7
    if ($_POST["pregunta7"] == "Liderazgo") {
        $liderazgo += 3;
    } elseif ($_POST["pregunta7"] == "Innovacion") {
        $arte_creatividad += 3;
    } elseif ($_POST["pregunta7"] == "Colaboracion") {
        $ciencias_sociales += 3;
    }

    // Pregunta 8
    if ($_POST["pregunta8"] == "Persistencia") {
        $analitica_logica += 2;
    } elseif ($_POST["pregunta8"] == "Desmotivacion") {
        // No suma puntos
    } elseif ($_POST["pregunta8"] == "Aprendizaje") {
        $ciencias_sociales += 2;
    }

    // Pregunta 9
    if ($_POST["pregunta9"] == "Rutina") {
        $analitica_logica += 2;
    } elseif ($_POST["pregunta9"] == "Autonomia") {
        $liderazgo += 2;
    } elseif ($_POST["pregunta9"] == "Adaptabilidad") {
        $aventura_naturaleza += 2;
    }

    // Pregunta 10
    if ($_POST["pregunta10"] == "Tecnologia") {
        $tecnologia += 3;
    } elseif ($_POST["pregunta10"] == "Arte") {
        $arte_creatividad += 3;
    } elseif ($_POST["pregunta10"] == "Aventura") {
        $aventura_naturaleza += 3;
    }

    // Pregunta 11
    if ($_POST["pregunta11"] == "Comunicacion") {
        $ciencias_sociales += 2;
    } elseif ($_POST["pregunta11"] == "Tecnologia") {
        $tecnologia += 2;
    } elseif ($_POST["pregunta11"] == "Creatividad") {
        $arte_creatividad += 2;
    }

    // Pregunta 12
    if ($_POST["pregunta12"] == "Cultura") {
        $ciencias_sociales += 2;
    } elseif ($_POST["pregunta12"] == "Naturaleza") {
        $aventura_naturaleza += 2;
    } elseif ($_POST["pregunta12"] == "Ciencia") {
        $analitica_logica += 2;
    }

    // Pregunta 13
    if ($_POST["pregunta13"] == "Innovacion") {
        $tecnologia += 3;
    } elseif ($_POST["pregunta13"] == "Aventura") {
        $aventura_naturaleza += 3;
    } elseif ($_POST["pregunta13"] == "Empatia") {
        $ciencias_sociales += 3;
    }

    // Pregunta 14
    if ($_POST["pregunta14"] == "Pragmatismo") {
        $analitica_logica += 2;
    } elseif ($_POST["pregunta14"] == "Creatividad") {
        $arte_creatividad += 2;
    } elseif ($_POST["pregunta14"] == "Tecnologia") {
        $tecnologia += 2;
    }

    // Pregunta 15
    if ($_POST["pregunta15"] == "Logica") {
        $analitica_logica += 3;
    } elseif ($_POST["pregunta15"] == "Social") {
        $ciencias_sociales += 3;
    } elseif ($_POST["pregunta15"] == "Creatividad") {
        $arte_creatividad += 3;
    }

    // Pregunta 16
    if ($_POST["pregunta16"] == "Retos") {
        $analitica_logica += 3;
    } elseif ($_POST["pregunta16"] == "Social") {
        $ciencias_sociales += 3;
    } elseif ($_POST["pregunta16"] == "Arte") {
        $arte_creatividad += 3;
    }

    // Pregunta 17 (escala Likert)
    $pregunta17 = intval($_POST["pregunta17"]);
    if ($pregunta17 <= 2) {
        $arte_creatividad += 2;
    } elseif ($pregunta17 == 5) {
        $analitica_logica += 2;
    }

    // Pregunta 18 (escala Likert)
    $pregunta18 = intval($_POST["pregunta18"]);
    if ($pregunta18 == 5) {
        $liderazgo += 2;
    }

    // Pregunta 19 (escala Likert)
    $pregunta19 = intval($_POST["pregunta19"]);
    if ($pregunta19 == 5) {
        $analitica_logica += 2;
    }

    // Pregunta 20 (escala Likert)
    $pregunta20 = intval($_POST["pregunta20"]);
    if ($pregunta20 == 5) {
        $liderazgo += 2;
    }

    // Mostrar resultados
    echo "<h2>Puntuaciones por Categoría:</h2>";
    echo "<ul>";
    echo "<li>Tecnología: $tecnologia puntos</li>";
    echo "<li>Arte/Creatividad: $arte_creatividad puntos</li>";
    echo "<li>Ciencias Sociales: $ciencias_sociales puntos</li>";
    echo "<li>Analítica/Lógica: $analitica_logica puntos</li>";
    echo "<li>Liderazgo: $liderazgo puntos</li>";
    echo "<li>Aventura/Naturaleza: $aventura_naturaleza puntos</li>";
    echo "</ul>";

    // Obtener las categorías con mayor puntuación
    $categorias = [
        "Tecnología" => $tecnologia,
        "Arte/Creatividad" => $arte_creatividad,
        "Ciencias Sociales" => $ciencias_sociales,
        "Analítica/Lógica" => $analitica_logica,
        "Liderazgo" => $liderazgo,
        "Aventura/Naturaleza" => $aventura_naturaleza
    ];

    // Ordenar las categorías por puntuación (de mayor a menor)
    arsort($categorias);

    // Obtener las 3 categorías con mayor puntuación
    $top_categorias = array_slice($categorias, 0, 3, true);

    // Mostrar las profesiones recomendadas
    echo "<h2>Profesiones Recomendadas:</h2>";
    foreach ($top_categorias as $categoria => $puntos) {
        // Obtener el ID de la categoría
        $sql = "SELECT id FROM category WHERE name = '$categoria'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            $category_id = $row["id"];

            // Obtener las profesiones de esa categoría
            $sql = "SELECT name FROM jobs WHERE category_id = $category_id LIMIT 3";
            $result = $conn->query($sql);
            if ($result->num_rows > 0) {
                echo "<h3>$categoria:</h3>";
                echo "<ul>";
                while ($row = $result->fetch_assoc()) {
                    echo "<li>" . $row["name"] . "</li>";
                }
                echo "</ul>";
            }
        }
    }
}

$conn->close();
?>