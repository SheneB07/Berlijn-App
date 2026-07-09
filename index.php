<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berlin Explorer</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <?php include("connection.php");
    try {
    // Prepare the query to select the name and description
    $stmt = $conn->prepare("SELECT activity_id, activity_name, information FROM activiteiten");
    $stmt->execute();

    // Set the fetch mode to associative array
    $stmt->setFetchMode(PDO::FETCH_ASSOC);
    $activiteiten = $stmt->fetchAll();  // This stores the result in the variable you use below

    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
    ?>
    <header class="hero">
        <nav class="topbar">
            <div class="brand">Berlin Explorer</div>
            <ul class="nav-links">
                <li><a href="#highlights">Hoogtepunten</a></li>
                <li><a href="#student-info">Studenten</a></li>
                <li><a href="#activities">Activiteiten</a></li>
                <li><a href="#tips">Tips</a></li>
                <li><a href="#practical">Praktisch</a></li>
            </ul>
        </nav>

        <div class="hero-content">
            <div>
                <p class="eyebrow">Cultuur • Geschiedenis • Moderne sfeer</p>
                <h1>Ontdek de stad waar verhalen tot leven komen.</h1>
                <p class="hero-text">Berlijn combineert indrukwekkende geschiedenis, creatieve wijken, wereldberoemde musea en een bruisend nachtleven.</p>
                <div class="hero-actions">
                    <a href="#highlights" class="btn btn-primary">Ontdek Berlijn</a>
                    <a href="#activities" class="btn btn-secondary">Plan je dag</a>
                </div>
            </div>

            <div class="hero-card">
                <h2>Waarom bezoeken?</h2>
                <ul>
                    <li>Iconische bezienswaardigheden zoals de Brandenburger Tor</li>
                    <li>Street art en creatieve wijken</li>
                    <li>Heerlijk eten uit de hele wereld</li>
                </ul>
            </div>
        </div>
    </header>

    <main>
        <section class="intro">
            <div class="section-heading">
                <p class="eyebrow">Over de stad</p>
                <h2>Berlijn is een stad van contrasten en eindeloze ontdekkingen.</h2>
            </div>
            <p>Van de resten van de Berlijnse Muur tot de energie van Kreuzberg en de rust van Tiergarten, Berlijn nodigt je uit om zowel het verleden als de toekomst te ontdekken.</p>
        </section>

        <section id="highlights" class="cards-section">
            <article class="card">
                <h3>Historische bezienswaardigheden</h3>
                <p>Loop langs de Brandenburger Tor, de Rijksdag en het Holocaustmonument.</p>
            </article>
            <article class="card">
                <h3>Creatieve wijken</h3>
                <p>Bezoek Prenzlauer Berg, Friedrichshain en Mitte voor galerieën, cafés en lokaal ontwerp.</p>
            </article>
            <article class="card">
                <h3>Eten en nachtleven</h3>
                <p>Geniet van klassieke currywurst, moderne fusionrestaurants en late bars.</p>
            </article>
        </section>

        <section id="student-info" class="intro">
            <div class="section-heading">
                <p class="eyebrow">Studenten in Berlijn</p>
                <h2>De beste plekken en tips voor studenten.</h2>
            </div>
            <p>Berlijn is perfect voor studenten: betaalbare cafés, creatieve coworking-spaces, internationale festivals en musea met korting op vertoon van een studentenpas.</p>
            <div class="student-grid">
                <article class="student-card">
                    <h3>Goedkope hotspots</h3>
                    <p>Zoek naar streetfood-markten, studentenbars in Friedrichshain en goedkope lunchplekken in Kreuzberg.</p>
                </article>
                <article class="student-card">
                    <h3>Studie en cultuur</h3>
                    <p>Bezoek culturele centra zoals RAW-Gelände, Berghain Kantine en gratis tentoonstellingen in Berlijns musea.</p>
                </article>
                <article class="student-card">
                    <h3>Sociale ontmoetingen</h3>
                    <p>Kom naar gezellige cafés, rooftop bars en openluchtbioscopen waar veel internationale studenten samenkomen.</p>
                </article>
            </div>
        </section>

        <section id="activities" class="activities">
            <div class="section-heading">
                <p class="eyebrow">Activiteiten</p>
                <h2>Haal het meeste uit je bezoek.</h2>
            </div>
            <?php foreach($activiteiten as $activities): ?>
            <div class="activity-grid">
                <article class="activity-item">
                    <h3><?= htmlspecialchars($activities['activity_name']) ?></h3>
                    <p><?= htmlspecialchars($activities['information']) ?></p>
                </article>
                <article class="activity-item">
                    <h3>Ontspan in de Tiergarten</h3>
                    <p>Ontsnap naar een van de grootste parken van Berlijn voor een rustige wandeling of picknick.</p>
                </article>
                <article class="activity-item">
                    <h3>Verken Museuminsel</h3>
                    <p>Ontdek kunst, geschiedenis en archeologie op een van Europa’s grootste cultuurpleinen.</p>
                </article>
                <article class="activity-item">
                    <h3>Reis door de stad</h3>
                    <p>Gebruik de U-Bahn en fietspaden om de wijken op je eigen tempo te bekijken.</p>
                </article>
            </div>
            <?php endforeach ?>
        </section>

        <section id="tips" class="tips">
            <div class="section-heading">
                <p class="eyebrow">Reistips</p>
                <h2>Handige ideeën voor bezoekers die voor het eerst komen.</h2>
            </div>
            <ul class="tips-list">
                <li>Gebruik de U-Bahn en S-Bahn voor snel en gemakkelijk reizen door de stad.</li>
                <li>Neem een kleine paraplu mee, want het weer kan snel veranderen.</li>
                <li>Probeer lokale favorieten zoals currywurst, döner en bakkerijen in de stad.</li>
            </ul>
        </section>

        <section id="practical" class="tips">
            <div class="section-heading">
                <p class="eyebrow">Praktische informatie</p>
                <h2>Handige data voor je verblijf in Berlijn.</h2>
            </div>
            <div class="practical-grid">
                <article class="practical-card">
                    <h3>Openbaar vervoer</h3>
                    <p>De U-Bahn, S-Bahn en trams verbinden de hele stad. Koop een dagkaart voor studenten of gebruik een app zoals BVG Fahrinfo.</p>
                </article>
                <article class="practical-card">
                    <h3>Belangrijke nummers</h3>
                    <p>Europees alarmnummer: 112. Politie: 110. In geval van medische hulp of verlies van documenten, ga naar het dichtstbijzijnde politiebureau of ziekenhuis.</p>
                </article>
                <article class="practical-card">
                    <h3>Kaart</h3>
                    <p>Gebruik offline kaartapps of vraag een papieren kaart bij een toeristische balie. Het centrum is compact genoeg om veel te ontdekken te voet of met de fiets.</p>
                </article>
            </div>
        </section>
    </main>

    <footer>
        <p>Gemaakt voor nieuwsgierige reizigers • Berlin Explorer</p>
    </footer>
</body>
</html>