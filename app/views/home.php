<?php 
/**
 *	Generates HTML for a player where stats is a html formatted <ul> 
 *
 */


class player{
	public static $players = array(); //Array of player objects 


	function add_player($name, $bio, $img, $stats){


		self::$players[] = $this; 
	}


	static function gen_html(){
		$i = 0; 
		foreach($players as $player){
			
			//Switch the layout every other person 
			if($i % 2 == 1) $flip = true; 
			else $flip = false; 
			$i++;



		}
	}

}

?> 


<div class="container-fluid">
	<div id="panels">


		<div class="row intro"> 
		
			<div class="container"> 
				<h2> Scranton Disc Golf Association </h2>
				<p> Welcome to the home of the Scranton Disc Golf Association. We are a small community devoted to one of the fastest growing sports in the country, <strong>Disc Golf!</strong></p>
			</div>
		</div>

		<div class="row discgolf"> 
			<div class="container"> 
				<h2> What is Disc Golf? </h2>
				
				<div class="row" id="thesport"> 

					<!-- VIMEO VIDEO  -->
					<div class="col-sm-6 "> 
						<div class=" embed-responsive embed-responsive-16by9">
							<iframe class="embed-responsive-item" src="https://player.vimeo.com/video/50806380?loop=1&amp;color=c9ff23&amp;portrait=0" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
						</div>
					</div>
					<!-- VIMEO VIDEO  -->


					<div class="col-sm-6"> 
						<h3>The Sport </h3>
						<p> Occupy chillwave single-origin coffee kogi High Life. Truffaut plaid actually distillery. Scenester literally keffiyeh, you probably haven't heard of them vegan try-hard before they sold out Godard YOLO pickled Pitchfork seitan Schlitz whatever Portland. Deep v aesthetic Intelligentsia bicycle rights. Tousled selfies Intelligentsia, butcher squid crucifix jean shorts +1 retro. Authentic hoodie semiotics, synth tousled Banksy art party whatever quinoa Pinterest put a bird on it. </p>
					</div>	


				</div>

			<!-- <div class="row" id="pdga"> 
				
					<div class="col-sm-6 center-block col-sm-push-6">
						<img class="img-responsive center-block" src="http://placehold.it/300x200"> 
					</div>


					<div class="col-sm-6 col-sm-pull-6"> 
						<h3>Professional Disc Golf Association </h3>
						<p> Thundercats deep v flexitarian, Marfa American Apparel small batch church-key art party pork belly disrupt +1 wolf. Occupy chillwave single-origin coffee kogi High Life. Truffaut plaid actually distillery. Scenester literally keffiyeh, you probably haven't heard of them vegan try-hard before they sold out Godard YOLO pickled Pitchfork seitan Schlitz whatever Portland. Deep v aesthetic Intelligentsia bicycle rights. Tousled selfies Intelligentsia, butcher squid crucifix jean shorts +1 retro. Authentic hoodie semiotics, synth tousled Banksy art party whatever quinoa Pinterest put a bird on it. </p>
					</div>	

				</div> -->
			</div>
		</div>

		<div class="row players"> 
			<div class="container"> 
				<h2> Meet the Team </h2>

				<!-- PLAYER --> 
				<div class="row player"> <!-- MOVE TO THE FUNCTION!!!! -->  
					<h3> Josh Rogan </h3>
					<div class="col-md-4 center-block"> 
						<img class="img-responsive center-block" src="https://farm6.staticflickr.com/5556/14870560596_760dcf3d01_z.jpg">
					</div>
					<div class="col-md-8"> 
						<p> Tote bag scenester iPhone post-ironic, PBR banjo kitsch pickled ennui tilde. FDeep v aesthetic Intelligentsia bicycle rights. Tousled selfies Intelligentsia, butcher squid crucifix jean shorts +1 retro. Authentic hoodie semiotics, synth tousled Banksy art party whatever quinoa Pinterest put a bird on it.</p>
						<ul class="list-unstyled"> 
							<li> Throws: RHBH </li>
							<li> Current City: Pittsburgh </li>
							<li> Distance Driver: Innova Destroyer </li>
							<li> Putter: JK Pro Aviar </li>
							<li> Rating: 973 </li>
						</ul>	
					</div>
				</div>
				<!-- PLAYER -->

				<!-- PLAYER --> 
				<div class="row player"> <!-- MOVE TO THE FUNCTION!!!! -->  
					<h3> Jim Sagona </h3>
					<div class="col-md-4  col-md-push-8"> 
						<img class="img-responsive center-block" src="https://farm6.staticflickr.com/5575/14253327331_25c1b3e4c5_z.jpg">
					</div>

					<div class="col-md-8 col-md-pull-4"> 
						<p> Tote bag scenester iPhone post-ironic, PBR banjo kitsch pickled ennui tilde. FDeep v aesthetic Intelligentsia bicycle rights. Tousled selfies Intelligentsia, butcher squid crucifix jean shorts +1 retro. Authentic hoodie semiotics, synth tousled Banksy art party whatever quinoa Pinterest put a bird on it.</p>
						<ul class="list-unstyled"> 
							<li> Throws: LHBH </li>
							<li> Current City: State College </li>
							<li> Distance Driver: Innova Boss </li>
							<li> Putter: MVP Anode </li>
							<li> Rating: 950 </li>
						</ul>	
					</div>
				</div>
				<!-- PLAYER -->

								<!-- PLAYER --> 
				<div class="row player"> <!-- MOVE TO THE FUNCTION!!!! -->  
					<h3> Josh Rogan </h3>
					<div class="col-md-4 center-block"> 
						<img class="img-responsive center-block" src="https://farm4.staticflickr.com/3885/14587660128_5eb3814395_z.jpg">
					</div>
					<div class="col-md-8"> 
						<p> Tote bag scenester iPhone post-ironic, PBR banjo kitsch pickled ennui tilde. FDeep v aesthetic Intelligentsia bicycle rights. Tousled selfies Intelligentsia, butcher squid crucifix jean shorts +1 retro. Authentic hoodie semiotics, synth tousled Banksy art party whatever quinoa Pinterest put a bird on it.</p>
						<ul class="list-unstyled"> 
							<li> Throws: RHBH </li>
							<li> Current City: Pittsburgh </li>
							<li> Distance Driver: Innova Destroyer </li>
							<li> Putter: JK Pro Aviar </li>
							<li> Rating: 973 </li>
						</ul>	
					</div>
				</div>
				<!-- PLAYER -->

								<!-- PLAYER --> 
				<div class="row player"> <!-- MOVE TO THE FUNCTION!!!! -->  
					<h3> Jim Sagona </h3>
					<div class="col-md-4  col-md-push-8"> 
						<img class="img-responsive center-block" src="https://farm3.staticflickr.com/2926/14069879829_890e8cf3be_z.jpg">
					</div>

					<div class="col-md-8 col-md-pull-4"> 
						<p> Tote bag scenester iPhone post-ironic, PBR banjo kitsch pickled ennui tilde. FDeep v aesthetic Intelligentsia bicycle rights. Tousled selfies Intelligentsia, butcher squid crucifix jean shorts +1 retro. Authentic hoodie semiotics, synth tousled Banksy art party whatever quinoa Pinterest put a bird on it.</p>
						<ul class="list-unstyled"> 
							<li> Throws: LHBH </li>
							<li> Current City: State College </li>
							<li> Distance Driver: Innova Boss </li>
							<li> Putter: MVP Anode </li>
							<li> Rating: 950 </li>
						</ul>	
					</div>
				</div>
				<!-- PLAYER -->



			</div>
		</div>

<!-- 		<div class="row about"> 
			<div class="container">
				<h2> About Us</h2>
			</div>
		</div> -->

		<div class="row tour"> 
			<div class="container">
				<h2> 2015 Tour</h2>
				<p> Tournaments for the 2015 season for the SDGA.  </p>
				<div class="col-xs-12" id="tour-map" style="width: 100%; height: 100%; min-height: 600px;"></div>
			</div>
		</div>

		<div class="section sponsors"> 
			<div class="container">
				<h2> Our Sponsors </h2>

				<p> Section to explain why to become a sponsor listing tour events worlds (show a animated map), college champ etc. </p>
				<p> Custom disc, Teeshirt,  </p>
				<p> Custom disc, Teeshirt,  </p>
				<h3><a href="#">Become a Sponsor</a></h3> 
			</div>
		</div>

		<div class="section join"> 
			<div class="container">
				<h2> Become a Member </h2>
			</div>
		</div>



	</div>
</div>