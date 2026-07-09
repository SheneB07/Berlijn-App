<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berlin Explorer CMS</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="admin-panel">
        <header class="admin-header">
            <div class="brand">Berlin Explorer CMS</div>
            <nav class="admin-nav">
                <a href="index.php">Terug naar site</a>
                <a href="#">Uitloggen</a>
            </nav>
        </header>

        <div class="admin-body">
            <aside class="sidebar">
                <ul>
                    <li><a href="#dashboard">Dashboard</a></li>
                    <li><a href="#content">Inhoud</a></li>
                    <li><a href="#editor">Editor</a></li>
                    <li><a href="#settings">Instellingen</a></li>
                </ul>
            </aside>

            <main class="admin-main">
                <section id="dashboard" class="dashboard-overview">
                    <div class="section-heading">
                        <p class="eyebrow">CMS overzicht</p>
                        <h2>Beheer je content en update je pagina’s.</h2>
                    </div>
                    <div class="dashboard-cards">
                        <article class="dashboard-card">
                            <h3>Actieve berichten</h3>
                            <p>12 publicaties</p>
                        </article>
                        <article class="dashboard-card">
                            <h3>Concepten</h3>
                            <p>3 nog niet gepubliceerd</p>
                        </article>
                        <article class="dashboard-card">
                            <h3>Bezoekers</h3>
                            <p>14K maand</p>
                        </article>
                    </div>
                </section>

                <section id="content" class="content-list">
                    <div class="section-heading">
                        <p class="eyebrow">Inhoud beheren</p>
                        <h2>Overzicht van je posts en pagina’s.</h2>
                    </div>
                    <table>
                        <thead>
                            <tr>
                                <th>Titel</th>
                                <th>Status</th>
                                <th>Datum</th>
                                <th>Acties</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Berlijnse bezienswaardigheden voor studenten</td>
                                <td>Gepubliceerd</td>
                                <td>17 juli 2026</td>
                                <td><button class="table-btn">Bewerken</button></td>
                            </tr>
                            <tr>
                                <td>Goedkope cafés en bars</td>
                                <td>Concept</td>
                                <td>13 juli 2026</td>
                                <td><button class="table-btn">Bewerken</button></td>
                            </tr>
                            <tr>
                                <td>Openbaar vervoer gids</td>
                                <td>Gepubliceerd</td>
                                <td>9 juli 2026</td>
                                <td><button class="table-btn">Bewerken</button></td>
                            </tr>
                        </tbody>
                    </table>
                </section>

                <section id="editor" class="editor-panel">
                    <div class="section-heading">
                        <p class="eyebrow">Content editor</p>
                        <h2>Maak of update een artikel.</h2>
                    </div>
                    <form>
                        <label for="post-title">Titel</label>
                        <input id="post-title" type="text" placeholder="Voer hier de titel in">

                        <label for="post-excerpt">Korte omschrijving</label>
                        <textarea id="post-excerpt" rows="3" placeholder="Schrijf een korte samenvatting"></textarea>

                        <label for="post-body">Inhoud</label>
                        <textarea id="post-body" rows="8" placeholder="Schrijf je artikel hier"></textarea>

                        <div class="form-actions">
                            <button type="button" class="btn btn-secondary">Opslaan als concept</button>
                            <button type="button" class="btn btn-primary">Publiceren</button>
                        </div>
                    </form>
                </section>

                <section id="settings" class="settings-panel">
                    <div class="section-heading">
                        <p class="eyebrow">Instellingen</p>
                        <h2>Basisinstellingen voor je CMS.</h2>
                    </div>
                    <div class="settings-grid">
                        <article class="settings-card">
                            <h3>Website titel</h3>
                            <p>Berlin Explorer</p>
                        </article>
                        <article class="settings-card">
                            <h3>Taal</h3>
                            <p>Nederlands</p>
                        </article>
                        <article class="settings-card">
                            <h3>Publicatiestatus</h3>
                            <p>Concepten, gepubliceerd en archief beschikbaar.</p>
                        </article>
                    </div>
                </section>
            </main>
        </div>
    </div>
</body>
</html>