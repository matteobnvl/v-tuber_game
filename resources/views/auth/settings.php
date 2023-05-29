<section class="body-settings">
	<div class="image-background"><img src="public/images/background_dashboard.jpg"></div>
	<div class="entete">
		<a href="<?= route('Tableau de bord') ?>"><img src="public/images/return.svg"></a>
		<h2>Réglages</h2>
	</div>



	<div class="contain-settings">
		<div class="box-left">
			<div class="box-update">
				<div>
					<h2>Mes informations</h2>
				</div>
				<div class="donnée">
					<p class="titre">PSEUDO</p>
					<p class="texte"><?= $_SESSION['firstname'] ?></p>
					<p class="absolute">❯</p>
				</div>
				<div class="donnée">
					<p class="titre">EMAIL</p>
					<p class="texte"><?= $_SESSION['email'] ?></p>
					<p class="absolute">❯</p>
				</div>
				<button class="button-modif" onclick="openwrap()">MODIFIER</button>
			</div>
			<div class="box-update">
				<div>
					<h2>Réglages du sons</h2>
				</div>
				<div class="sons">
					<div class="btn-sons">
						<button class="bulle-sons" onclick="changeoff()"><img src="public/images/volume_off_black_24dp.svg"></button>
						<button class="bulle-sons" onclick="changedown()"><img src="public/images/volume_down_black_24dp.svg"></button>
						<button class="bulle-sons" onclick="changeup()"><img src="public/images/volume_up_black_24dp.svg"></button>
					</div>
				</div>
			</div>
		</div>
		<div class="box-right">
			<div class="box-settings">
				<h2>Mes statistiques</h2>
			</div>

		</div>
	</div>
</section>
<div class="wrapper">
	<button class="close" onclick="closewrap()" ><img src="public/images/close_white_24dp.svg"></button>
	<form method="post">
        <input type="hidden" name="check" value="ok">
        <div style="width:100%; height: 100%;">
            <div class="input">
                <input type="pseudo" name="pseudo" value="<?= $_SESSION['firstname'] ?>">
            </div>
            <div class="input">
                <input type="email" name="email" value="<?= $_SESSION['email'] ?>">
            </div> 
            <div class="input-button">
                <button class="btn" type="submit">Valider</button>
            </div>
        </div>
    </form>
</div>

<script type="text/javascript">
	function openwrap() {
        document.querySelector(".body-settings").style.opacity = 0.3;
        document.querySelector(".wrapper").style.display = "block";;

    }

    function closewrap(){
    	document.querySelector(".wrapper").style.display = "none";
    	document.querySelector(".body-settings").style.opacity = 1;
    }
    var operateur = up;

    function changeoff(){
    	document.querySelector(".bulle-sons:nth-child(1)").style.border = "3px solid black";
    	document.querySelector(".bulle-sons:nth-child(2)").style.border = "3px solid transparent";
    	document.querySelector(".bulle-sons:nth-child(3)").style.border = "3px solid transparent";
    	var operateur = off;

    }
    function changedown(){
    	document.querySelector(".bulle-sons:nth-child(1)").style.border = "3px solid transparent";
    	document.querySelector(".bulle-sons:nth-child(2)").style.border = "3px solid black";
    	document.querySelector(".bulle-sons:nth-child(3)").style.border = "3px solid transparent";
    	var operateur = down;

    }
    function changeup(){
    	document.querySelector(".bulle-sons:nth-child(1)").style.border = "3px solid transparent";
    	document.querySelector(".bulle-sons:nth-child(2)").style.border = "3px solid transparent";
    	document.querySelector(".bulle-sons:nth-child(3)").style.border = "3px solid black";
    	var operateur = up;

    }
</script>