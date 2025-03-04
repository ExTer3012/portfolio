<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mon Portfolio</title>
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>
    <header>
        <h1>Mon Portfolio</h1>
    </header>
    
    <main>
        <div class="button-container">
            <button class="button3d left" onclick="afficherSection('projets')">Projets</button>
            <button class="button3d right" onclick="afficherSection('contact')">Contact</button>
        </div>

        <!-- Section Projets -->
        <section id="projets" class="hidden">
            <h2>Mes Projets</h2>
            <?php
            $projets = [
                ['nom' => 'Projet 1', 'description' => 'Description du projet 1'],
                ['nom' => 'Projet 2', 'description' => 'Description du projet 2'],
                ['nom' => 'Projet 3', 'description' => 'Description du projet 3']
            ];

            foreach ($projets as $projet) {
                echo "<article>";
                echo "<h3>{$projet['nom']}</h3>";
                echo "<p>{$projet['description']}</p>";
                echo "</article>";
            }
            ?>
        </section>

        <!-- Section Contact -->
        <section id="contact" class="hidden">
            <h2>Contact</h2>
            <p>Vous pouvez me contacter via email : exemple@domaine.com</p>
        </section>
    </main>
    
    <footer>
        <p>&copy; 2025 Mon Portfolio</p>
    </footer>

    <!-- Script JavaScript -->
    <script>
        function afficherSection(sectionId) {
            // Cacher toutes les sections
            const sections = document.querySelectorAll('section');
            sections.forEach(section => section.classList.add('hidden'));

            // Afficher la section cliquée
            const section = document.getElementById(sectionId);
            if (section) {
                section.classList.remove('hidden');
            }
        }
    </script>
</body>
</html>