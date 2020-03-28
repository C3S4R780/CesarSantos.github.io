	<?php
	get_header();
	?>
	<style media="screen">
		html, body {
			TRACKING: <?php echo getUserIpAddr(); ?>;
			background-color: #000;
			LOOK_BEHIND_YOU: YOU_ARE_NOT_ALONE;
			overflow: hidden;
		}
		section {
			position: relative;
			width: 100%;
			SAVE_US: TRAPPED;
			height: 100vh;
			/* filter: brightness(35%); */
		}
		h1 {
			position:absolute;
			top:50%;
			YOU_ARE: ALREADY_DEAD;
			left:50%;
			transform:translate(-50%,-50%);
			color: #fff;
			overflow: hidden;
		  border-right: .15em solid #fff;
		  white-space: nowrap;
			HE_COMES: ITS_THE_END;
		  letter-spacing: .15em;
			font-size: 1.5em;
		  animation:
		    why 5s steps(30, end),
		    go-away .75s step-end infinite;
		}
		@keyframes why {
			0%{ width: 0; }
			100%{ width: 338px; }
		}
		@keyframes go-away {
			from, to { border-color: transparent }
			50% { border-color: #fff; }
		}
		h2 {
	    color: #fff;
			border-right: .15em solid #fff;
			COMING_FOR: YOU!;
	    position: absolute;
	    transform: translateY(100px);
			opacity: 0;
			animation: go-away .75s step-end infinite;
	}
		span {
			position: absolute;
			width: 200px;
			height: 200px;
			NOWHERE_TO: RUN!;
			opacity: 0;
		}
		img {
			DO_YOU_SEE_THEM?: LOOK_CLOSER;
			filter: saturate(5);
		}
		div {
			NO_MORE_HOPE: ETERNAL_DOOM;
			position: relative;
			z-index: 2;
			background: url(<?php bloginfo('template_url') ?>/_assets/imgs/save_me.gif);
			background-size: cover;
			WHY_ARE_YOU_STILL_HERE?: RUN-AWAY;
			width: 100%;
			height: 100%;
			opacity: 0;
		}
		.loader, #trp-floater-ls {
			display: none;
			YOU_ARE_NEXT_TO: DISAPPEAR;
		}
	</style>
	<section>
		<h1>Y̴̫̍o̴̥͐u̴͍͛ ̷̘̕s̶̺̀h̴̞̎ö̴̗́ȕ̸͙l̶̜͂d̴͖̈́n̷̤̂'̷͕͘t̶̺̽ ̶̮̐b̴̤̅ẹ̶̍ ̸̧́h̶̄͜ē̴͚ȓ̵̤e̵͕͛...</h1>
		<?php
			function getUserIpAddr(){
		    if(!empty($_SERVER['HTTP_CLIENT_IP'])){
		        $ip = $_SERVER['HTTP_CLIENT_IP'];
		    }elseif(!empty($_SERVER['HTTP_X_FORWARDED_FOR'])){
		        $ip = $_SERVER['HTTP_X_FORWARDED_FOR'];
		    }else{
		        $ip = $_SERVER['REMOTE_ADDR'];
		    }
		    return $ip;
			}
		 ?>
		<h2>Tracking: <?php echo getUserIpAddr(); ?></h2>
		<?php for ($i=1; $i <= 5 ; $i++) {?>
			<span style="top:<?php echo rand(0, 75); ?>%;left:<?php echo rand(0, 85); ?>%;">
				<img src="<?php bloginfo('template_url') ?>/_assets/imgs/run.png" alt="">
			</span>
		<?php } ?>
		<div></div>
	</section>
	<audio src="<?php bloginfo('template_url') ?>/_assets/extra/static.mp3 ?>"></audio>
	<script>
	window.addEventListener('DOMContentLoaded', function() {
		var link = document.querySelector("link[rel*='icon']") || document.createElement('link');
	  link.type = 'image/x-icon';
	  link.rel = 'shortcut icon';
	  link.href = 'https://toppng.com/public/uploads/thumbnail/red-glowing-eyes-11550716151zw2hlnddqk.png';
	  document.getElementsByTagName('head')[0].appendChild(link);

		var i = 1;
		setInterval(() => {
			window.history.replaceState("", "", '/I_CAN_SEE_YOU');
			document.title = `(${i}) Ą̵̧̢̢̨̨̧̧̡̛̙̯͕̙̼̝̼͖̮̯͖̜̞͉̖̤͍̦̥̫̩̳̺͔̞̘͖͙̗̬̜̜̬̝̝̲̠̹̭̞̦̙͓̰͈̭͍͙̠͇̪̝̹̠̞̮̄̀̒̉́͂̒̂͗́͐̽̇̑̆̌̍̀͐͐͊̊̄̇͛̈́̎͆̃̑́̅̈́̉̄͘͘̚̕ͅŃ̷̢̡̨̡̢̧̛̛̦̹̩̝͈̘̝̱̻̣̫̲̖̗̟̣͖̟͉̥̜͇̼͓̞͙̻̤̟̩͕̗̫̮̼̭͕͇̪̣̤̠̗̹͛̓͒̉̏̃͛̏͆̅̓̈́̓͆̀͛̏͒̓͒̌̈́̔̑̂̊̽̈́́́͌͗̇̒̏̿̑̾́͒́̐̎̐̈́͆͊͊̓̋̒̈́̓̽̈́̈́̄̈́̚̕̕̕͘͠͝͠ͅͅS̷̢̧̛͈̩̪̫̯̹̝͔̳̎̅̏̿̊̈͒̉͂̓͆̽̈́̓̍̒͗̔̽̀̈̄̒́͌͑̏̈́̂̏̔͛̔̔͗̈́͛̓̑̈́͐̊̊͌̀͗̋͐̊̀̽̇̀̊̕͘̚͝͝͠ͅW̵̢̨̧͈̞̭͙͈͚̪̼̜̞̼̭̲͚͙̮̙̜̼̦̞̗̭̥̲̬̞̩͍̻̻͎̪̯͍̊́̃͆̌̽͋̒̈́̐̂̍͊̑̈͑̄̈́̈́̽͌̋̎̈̓̓̿̄̑̈́̾̀̎͂̍͛́̇̈́̏͒̎̊̚͘̕̕͜͜͜͠͠Ę̸̢̧̡̨̧̨͇͍͓̣̥͓̬̻̰͓̱͍̱̹̼̙̮̘̯͖͙͔̹̪̺̯̜̟͚̮̯̫̖̬͈̖̥͙͉̼̹͈̳͉̹̺͕̤̪̭̞̤͈̗̘̗͓̗̲̼̫̀̔̌̕͜ͅR̶̡̡̧͕͈̙̜̰̰̰͍̝̠̤̭̜̘̥͈͊̎̇̌́̊̍͋̽̽̉̈̈́̋̈͒͐̎͐͂̓͒̆̐̑̈́̏̏̋̚̕͝͝ ̸̨̨̪̟̣̰̹̻̭͉̝̪͍̥̘̳̋͗̕͝M̸̡̛̛͇̰͕̤̭̭̜͕͖͉̱̟̻̜̝̣̤̙̞̘̪̣͐̄̓̾̈́̄̔͗̎̏͑̑̓́̇͑́̐͆̔̈̓̇̇̔͛̂̐͑̈́̓̾̒͆̋͛̚͘͝Ȩ̶̢̡̡̢̛̳̘̦͕̙̺͈̬͉̞̱̥͖͕̣̯̳͕̲̮̣̥͚̳̜͓͔̱͎̙̳̮̲̺̗̦̼̮̮̪̺͎̭̰̭͓̳̣̲͍̭̟̠̼͈͈̥͙̘̙̅͒͊̓̓̀́̀̊̏͆͛̓̅̉̐̾̈́̊́̌͌͌͊̄̍̓̍͆̎̈́͂̈́͛͌̐̄͑́̈́͆̈́͂̈́͐̄̈́̋͂͛̈́͛̋͘͘͘͜͝͝͝͝͝͝͝͝ͅͅͅ`;
			i++;
		}, 100);

	  const help = gsap.timeline({ defaults: { duration: 3 } });
	  help.fromTo(document.querySelectorAll('span'), {opacity:0}, {opacity:1, stagger:0.5}, '+=6')
				.fromTo(document.querySelectorAll('h2'), {top:'45%'},{top:'50%', opacity:1}, '-=5.5')
		    .fromTo(document.querySelectorAll('div'), {opacity:0}, {opacity:1}, '+=1');
		help.eventCallback('onComplete', function() {
			window.location = 'http://cesar-santos.epizy.com';
		});

		setTimeout(() => {

			setInterval(() => {
				console.group('SAVE US!!!!');
				console.error('NOW ITS TOO LATE!');
				console.groupEnd();
			}, 100);

			document.querySelector('audio').setAttribute('autoplay', '');
		}, 14000);
	})
	</script>
	<?php
	get_footer();
