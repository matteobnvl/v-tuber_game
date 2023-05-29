
<header>
 <a href="<?= route('Accueil') ?>" class="logo">V-tuber Game</a>
 <ul>
    <li><a href="<?= route('Accueil') ?>" >Home</a></li>
    <li><a href="<?= route('Inscription') ?>">Inscription</a></li>
    <li><a href="<?= route('Connexion') ?>" class="active">Connexion</a></li>
 </ul>
</header>
    <section class="section">
        <img src="public/images/stars.png" id="stars">
        <img src="public/images/moon.png" id="moon">
        <img src="public/images/mountains_behind.png" id="mountains_behind">
        <img src="public/images/mountains_front.png" id="mountains_front">
    </section>
<main id="swup" class="transition-fade">
<div class="form">
    <h2>connexion</h2>
    <form method="post">
        <input type="hidden" name="check" value="ok">
        <div style="width:100%; height: 100%;">
            <div class="input">
                <input type="email" name="email" placeholder="Email">
            </div>
            <div class="input">
                <input type="password" name="password" placeholder="Mot de passe">
            </div>
            <?php if ($checker !== null) { ?>

                <p style="color: red; text-align: center;"><?= $checker ?></p>

            <?php } ?>
            <div class="input-button">
                <button class="btn" type="submit">Valider</button>
            </div>
        </div>
    </form>
</div>
</main>
<script src="https://unpkg.com/swup@latest/dist/swup.min.js">
    const swup = new Swup();
</script>