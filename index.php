<!DOCTYPE html>
<html lang="es-mx">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CiTIM Grupo XB</title>
    <link rel="stylesheet" href="css/problemaStem.css">
    <link href="https://fonts.googleapis.com/css?family=Comfortaa" rel="stylesheet">
    <script>
        function calcular() {
            // Constantes
            const sigma = 5.669e-8; // Constante de Stefan-Boltzmann en W/m²K⁴
            const c = 2.99792458e8; // Velocidad de la luz en m/s
            const b = 2.898e-3; // Constante de Wien en m·K

            // Datos proporcionados
            const Pt = 34e3; // Potencia radiada en W (convertido de kW)
            const A = 0.6; // Área en m²
            const epsilon = 1; // Emisividad (cuerpo negro)

            // Cálculo de la temperatura (Ley de Stefan-Boltzmann)
            const T = Math.pow(Pt / (sigma * epsilon * A), 1 / 4);

            // Cálculo de la longitud de onda de máxima emisión (Ley de Wien)
            const lambdaMax = b / T;

            // Cálculo de la frecuencia de máxima emisión
            const fMax = c / lambdaMax;

            // Mostrar resultados en la página
            const resultadoDiv = document.getElementById("resultadoA");
            resultadoDiv.innerHTML = `
                <p><strong>Temperatura (T):</strong> ${T.toFixed(2)} K</p>
                <p><strong>Longitud de onda máxima (λmáx):</strong> ${lambdaMax.toExponential(3)} m</p>
                <p><strong>Frecuencia máxima (fmáx):</strong> ${fMax.toExponential(3)} Hz</p>
            `;
        }
    </script>
</head>
<body>
    <?php
    // Header Section
    function renderHeader() {
        echo '<header>
                <h1 class="logo">Uso de la Ciencia, Tecnología, Ingeniería y Matemáticas</h1>
              </header>';
    }

    // Problem Section
    function renderProblem() {
        echo '<section class="problema">
                <h2>Problema: Cálculo de la temperatura y frecuencia de un Cuerpo Negro</h2>
                <p>Descripción:</p>
                <p>La potencia de radiación de un cuerpo negro de superficie 0,6 m2
                     es Pt=34 kW y la emisividad es 1. Hallar la temperatura
                    de este cuerpo negro y la frecuencia de la radiación máxima emitida.</p>
              </section>';
    }

    // Schema Section
    function renderSchema() {
        echo '<section class="esquemaProblema">
                <h2>Esquema</h2>
                <center>
                    <img class="imgProblema" src="images/cp.gif" alt="Esquema del problema">
                </center>
              </section>';
    }

    // Formulas Section
    function renderFormulas() {
        echo '<section class="formulas">
                <h2>Fórmulas</h2>
                <p>fmáx = c/λmáx</p>
                <p>T=(Pt/σεA)1/4</p>
                <p>λmáx = b/T</p>
              </section>';
    }

    // Data Section
    function renderData() {
        echo '<section class="datos">
                <h2>Datos:</h2>
                <ul>
                    <li>T = 6000 K</li>
                    <li>Pt = 34kW </li>
                    <li>A= 0.6</li>
                    <li>sigma= 5.669 * 10^-8 W/m2 K4</li>
                    <li>lambda= longitud de onda</li>
                    <li>c=velocidad de la luz = 2.99792458 * 10^8m/s</li>
                </ul>
              </section>';
    }

    // Calculation Section
    function renderCalculations() {
        echo '<section class="calculos">
                <h2>Solución</h2>
                <p>Sustituir los valores en las fórmulas:</p>
                <button onclick="calcular();">Presiona para calcular</button>
              </section>';
    }

    // Result Section
    function renderResult() {
        echo '<section class="resultado">
                <h2>Resultado:</h2>
                <div id="resultadoA"></div>
              </section>';
    }

    // Footer Section
    function renderFooter() {
        echo '<footer class="pie">
                Creative Commons versión 3.0 SciSoft 2024
              </footer>';
    }
    ?>

    <section class="wrapper">
        <?php
        renderHeader();
        ?>
        <section id="contenedor">
            <?php
            renderProblem();
            renderSchema();
            renderFormulas();
            renderData();
            renderCalculations();
            renderResult();
            ?>
        </section>
        <?php
        renderFooter();
        ?>
    </section>
</body>
</html>
