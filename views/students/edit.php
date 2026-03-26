<?php view('partials.head', compact('title')) ?>

    <main class="page-main">
        <h1><?= $title ?></h1>
        <section class="resource-actions">
            <h2 class="sr-only">Actions relatives à <?= $student->first_name ?> <?= $student->last_name ?></h2>
            <ul>
                <li>Supprimer</li>
            </ul>
        </section>

        <form action="/etudiant" method="post">
            <input type="hidden" name="id" value="<?= $student->id ?>">
            <input type="hidden" name="_method" value="put">
            <input type="hidden" name="_token" value="<?= csrf_token() ?>">
            <div>
                <label for="first_name">Prénom</label>
                <input type="text" id="first_name" name="first_name" value="<?= $student->first_name ?>"
                       placeholder="<?= $student->first_name ?>">
            </div>
            <div>
                <label for="last_name">Nom de famille</label>
                <input type="text" id="last_name" name="last_name" value="<?= $student->last_name ?>"
                       placeholder="<?= $student->last_name ?>">
            </div>
            <div>
                <label for="matricule">Matricule</label>
                <input type="text" id="matricule" name="matricule" value="<?= $student->matricule ?>"
                       placeholder="<?= $student->matricule ?>">
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" id="email" name="email" value="<?= $student->email ?>"
                       placeholder="<?= $student->email ?>">
            </div>
            <?php if ($student->birth_date): ?>
                <div>
                    <label for="birth_date">Date de naissance</label>
                    <input type="date" id="birth_date" name="birth_date" value="<?= $student->birth_date ?>"
                           placeholder="<?= $student->birth_date ?>">
                </div>
            <?php endif; ?>
            <div>
                <?php if ($student->profile_photo): ?>
                    <img src="<?= $student->profile_photo ?>"
                         alt="Portrait de <?= $student->first_name ?> <?= $student->last_name ?>">
                <?php endif ?>
                <label for="profile_photo">Photo de profil</label>
                <input type="file" id="profile_photo" name="profile_photo">
            </div>
            <div>
                <button type="submit">Enregistrer ces informations</button>
            </div>
        </form>
    </main>


<?php view('partials.nav') ?>


<?php view('partials.footer') ?>