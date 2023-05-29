<main class="body2">
<div class="entete">
	<a href="<?= route('Tableau de bord') ?>"><img src="public/images/return.svg"></a>
	<h2>
		<span>incarnez </span> <span>votre </span> <span>v-tuber</span>
	</h2>
</div>
<div class="container-univer">
	<a class="a" href="<?= route('Univers1') ?>">
		<div class="game">
			<h3>univers 1</h3>
			<img src="public/images/univers1.png">
		</div>
	</a>
	<a class="a" href="#">
		<div class="no-game">
			<h3>univers 2</h3>
			<img src="public/images/univer2.jpg">
			<div class="lock">
				<img src="public/images/lock.svg">
			</div>
		</div>
	</a>
	<a class="a" href="#">
		<div class="no-game">
			<h3>univers 3</h3>
			<img src="public/images/univers3.jpg">
			<div class="lock">
				<img src="public/images/lock.svg">
			</div>
		</div>
	</a>
	<a class="a" href="#">
		<div class="no-game">
			<h3>univers 4</h3>
			<img src="public/images/univers4.jpg">
			<div class="lock">
				<img src="public/images/lock.svg">
			</div>
		</div>
	</a>
	
</div>





</main>

<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
<script>
	
const titreSpans = document.querySelectorAll('h2 span');
const btns = document.querySelectorAll('img');
const contain = document.querySelectorAll('.container-univer div');


window.addEventListener('load', () => {

    const TL = gsap.timeline({paused: true});

    TL
    .staggerFrom(titreSpans, 1, {opacity : 0, ease: "power2.out"}, 0.1)
    .staggerFrom(contain, 1, {opacity : 0, ease: "power2.out"}, 0.1)
    .staggerFrom(btns, 1, {left: -200, ease: "power2.out"});
    
    

    TL.play();
})

</script>