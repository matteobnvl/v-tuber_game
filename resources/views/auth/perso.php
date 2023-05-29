<script src="https://cdn.babylonjs.com/babylon.js"></script>
<script src = "https://cdn.babylonjs.com/loaders/babylonjs.loaders.min.js"> </script >
<script src="https://code.jquery.com/pep/0.4.1/pep.js"></script>
<section class="main-perso">
	<div class="entete">
		<a href="<?= route('Tableau de bord') ?>"><img src="public/images/return.svg"></a>
	</div>


<section class="section-perso">


	<div class="contain-perso">
            <canvas id="canvas"></canvas>
	</div>
        <div class="perso">
            <div class="titre">
                <h2>Votre v-tuber</h2>
               <a href="#" title="charger votre V-tuber"><img src="public/images/upload.svg"></a>
            </div>

            <div class="armoir">
                <div class="selection">
                    <a href="#" class="un" onclick="changeStyleRed()"><div><p>haut</p></div></a>
                    <a href="#" class="un" onclick="changeStyleBlue()"><div><p>bas</p></div></a>
                    <a href="#" class="un" onclick="changeStyleGreen()"><div><p>chapeau</p></div></a>
                    <a href="#" class="un" onclick="changeStylePurple()"><div><p>accessoire</p></div></a>
                </div>
                <div class="red">
                    <div class="box-clothes"></div>
                </div>
                <div class="blue"></div>
                <div class="green"></div>
                <div class="purple"></div>
            </div>
        </div>

</section>
</section>

<script type="text/javascript">
        
        window.addEventListener("load",function() {

    let canvas =  document.getElementById("canvas");
    let engine = new BABYLON.Engine(canvas,true);
    engine.enableofflineSupport = false;


    let createScene = function(){
        let scene = new BABYLON.Scene(engine);

        let camera = new BABYLON.ArcRotateCamera("Camera", Math.PI / 2,Math.PI / 2, 2, new BABYLON.Vector3(0,6,10),scene);
        camera.setTarget(BABYLON.Vector3.Zero());
        camera.attachControl(canvas,true);

        let lum1 = new BABYLON.HemisphericLight("light1", new BABYLON.Vector3(4,1,0),scene);
        let lum2 = new BABYLON.PointLight("light2", new BABYLON.Vector3(-4,1,-4),scene);

        let modele = BABYLON.SceneLoader.Append("public/images/","CuteCreature.obj",scene,function(scene){
            return scene;
        });
        return scene;
    };


    let scene = createScene();

    // Boucle d'actualisation de la scene

    engine.runRenderLoop(function(){
        scene.render();
    });

    window.addEventListener("resize", function() {
        engine.resize();
    })
});

    document.querySelector('.red');

    function changeStyleBlue() {
        document.querySelector(".red").style.opacity = 0;
        document.querySelector(".blue").style.opacity = 1;
    }
    function changeStyleRed() {
        document.querySelector(".red").style.opacity = 1;

    }
     function changeStyleGreen() {
        document.querySelector(".red").style.opacity = 0;
        document.querySelector(".blue").style.opacity = 0;
        document.querySelector(".green").style.opacity = 1;
    }
    function changeStylePurple() {
        document.querySelector(".red").style.opacity = 0;
        document.querySelector(".blue").style.opacity = 0;
        document.querySelector(".green").style.opacity = 0;
        document.querySelector(".purple").style.opacity = 1;
    }


</script>