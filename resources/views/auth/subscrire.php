<header>
 <a href="<?= route('Accueil') ?>" class="logo">V-tuber Game</a>
 <ul>
    <li><a href="<?= route('Accueil') ?>" >Home</a></li>
    <li><a href="<?= route('Inscription') ?>" class="active">Inscription</a></li>
    <li><a href="<?= route('Connexion') ?>">Connexion</a></li>
 </ul>
</header>
    <section class="section">
        <img src="public/images/stars.png" id="stars">
        <img src="public/images/moon.png" id="moon">
        <img src="public/images/mountains_behind.png" id="mountains_behind">
        <img src="public/images/mountains_front.png" id="mountains_front">
    </section>
<main id="swup" class="transition-fade">
<div class="form" >
    <h2>Inscription</h2>
    <form method="post" class="inscription">
        <input type="hidden" name="check" value="ok">
        <div class="box-inscription">
            <div class="input">
                <input type="pseudo" name="pseudo" placeholder="Pseudo">
            </div>
            <div class="input">
                <input type="mail" name="email" placeholder="Email">
            </div>
        </div>
        <div class="box-inscription">
            <div class="input">
                <input type="password" name="password" placeholder="Mot de passe">
            </div>
            <div class="input">
                <input type="password" name="password2" placeholder="Répétez mot de passe">
            </div>
        </div>

        <div class="input-button">
            <button class="btn" type="submit">Valider</button>
        </div>
    </form>
</div>
</main>