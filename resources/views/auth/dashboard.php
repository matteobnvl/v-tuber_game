<section class="body2">
	<div class="image-background"><img src="public/images/background_dashboard.jpg"></div>
	<div class="lignes">
        <div class="l1"></div>
        <div class="l2"></div>
    </div>

    <div class="container-first">
        <h1><span>Bonjour </span><span>joueur </span><br><span><?= $_SESSION['firstname'] ?> </span></h1>
        <div class="container-btns">
           <a href="<?= route('Deconnexion') ?>"><button class="btn-first b1">Déconnexion</button></a>
        </div>
    </div>



    <ul class="medias">
        <li class="bulle">
        	<div class="text-trans">
        		<p>perso</p>
        	</div>

        	<a href="<?= route('Perso') ?>"><img src="public/images/face_black_24dp.svg" class="logo-medias" title="perso/stats"></a>
        </li>

        <li class="bulle">
        	<div class="text-trans">
        		<p>game</p>
        	</div>

        	<a href="<?= route('Game') ?>"><img src="public/images/sports_esports_black_24dp.svg" class="logo-medias" title="jouer"></a>
        </li>

        <li class="bulle">
        	<div class="text-trans">
        		<p>boutique</p>
        	</div>

        	<a href="<?= route('Shop') ?>"><img src="public/images/shopping_cart_black_24dp.svg" class="logo-medias" title="boutique"></a>
        </li>

        <li class="bulle">
        	<div class="text-trans">
        		<p>réglages</p>
        	</div>

        	<a href="<?= route('Settings') ?>"><img src="public/images/settings_black_24dp.svg" class="logo-medias" title="réglages"></a>
        </li>
    </ul>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script>
	
const titreSpans = document.querySelectorAll('h1 span');
const btns = document.querySelectorAll('.btn-first');
const medias = document.querySelectorAll('.bulle');
const l1 = document.querySelector('.l1');
const l2 = document.querySelector('.l2');

window.addEventListener('load', () => {

    const TL = gsap.timeline({paused: true});

    TL
    .staggerFrom(titreSpans, 1, {top: -50, opacity: 0, ease: "power2.out"}, 0.3)
    .staggerFrom(btns, 1, {opacity: 0, ease: "power2.out"}, 0.3, '-=1')
    .from(l1, 1, {width: 0, ease: "power2.out"}, '-=2')
    .from(l2, 1, {width: 0, ease: "power2.out"}, '-=2')
    .staggerFrom(medias, 1, {right: -200, ease: "power2.out"}, 0.3, '-=1');

    
    

    TL.play();
})

</script>
    
