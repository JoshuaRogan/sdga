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

	function gen_html(){

	}


	static function gen_all_html(){
		$i = 0; 
		foreach($players as $player){
			
			//Switch the layout every other person 
			if($i % 2 == 1) $flip = true; 
			else $flip = false; 
			$i++;

			$player->gen_html(); 
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

		<div id="discgolf" class="row discgolf"> 
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

		<div id="meet-the-team" class="row players"> 
			<div class="container"> 
				<h2> Meet the Team </h2>

				<!-- PLAYER --> 
				<div class="row player"> <!-- MOVE TO THE FUNCTION!!!! -->  
					<h3> Josh Rogan </h3>
					<div class="col-md-4 center-block"> 
						<img class="img-responsive center-block" src="https://c4.staticflickr.com/4/3832/14254360792_d7a1436c1a_n.jpg">
					</div>
					<div class="col-md-8"> 
						<p> Longest member of the SDGA. Currently lives in Pittsburgh, PA and plays courses such as Deer Lakes, Moraine State Park, and practices at Schenley Park. Comes from a background of ultimate and has a strong short forehand game.  </p>
						<ul class="list-unstyled"> 
							<li> Throws: RHBH </li>
							<li> Current City: Pittsburgh </li>
							<li> Distance Driver: Innova Destroyer </li>
							<li> Putter: JK Pro Aviar </li>
							<li> Rating: 973 </li> <!-- Turn into a function  -->
						</ul>	
					</div>
				</div>
				<!-- PLAYER -->

				<!-- PLAYER --> 
				<div class="row player"> <!-- MOVE TO THE FUNCTION!!!! -->  
					<h3> Jim Sagona </h3>
					<div class="col-md-4  col-md-push-8"> 
						<img class="img-responsive center-block" src="https://farm4.staticflickr.com/3864/14893203992_3a04af0339_b.jpg">
					</div>

					<div class="col-md-8 col-md-pull-4"> 
						<p> Jim currently lives in State College, PA finishing his degree in Supply Chain Management at Penn State. He also plays on the disc golf team who are recently won the PA Collegiate championships and will be heading to the NCAA Championships this spring. Only left on the team.  </p>
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
					<h3> Mike Aniska </h3>
					<div class="col-md-4 center-block"> 
						<img class="img-responsive center-block" src="https://farm4.staticflickr.com/3885/14587660128_5eb3814395_z.jpg">
					</div>
					<div class="col-md-8"> 
						<p> The overhand specialist uses his Destoryer to dominate every course he plays. Also utilizes the, difficult to learn, Aerobie Epic to gain maximum distance on open holes with his unique overhand approach.  </p>
						<ul class="list-unstyled"> 
							<li> Throws: RHOH </li>
							<li> Current City: Millersville, PA </li>
							<li> Distance Driver: Innova Destroyer </li>
							<li> Putter: JK Pro Aviar </li>
						</ul>	
					</div>
				</div>
				<!-- PLAYER -->

				<!-- PLAYER --> 
				<div class="row player"> <!-- MOVE TO THE FUNCTION!!!! -->  
					<h3> Kyle Nole </h3>
					<div class="col-md-4  col-md-push-8"> 
						<img class="img-responsive center-block" src="https://farm6.staticflickr.com/5575/14253327331_25c1b3e4c5_z.jpg">
					</div>

					<div class="col-md-8 col-md-pull-4"> 
						<p> Kyle   </p>
						<ul class="list-unstyled"> 
							<li> Throws: LHBH </li>
							<li> Current City: Dunmore, PA </li>
							<li> Distance Driver: Innova Monarch </li>
							<li> Putter: MVP Anode </li>
						</ul>	
					</div>
				</div>
				<!-- PLAYER -->


				<!-- PLAYER --> 
				<div class="row player"> <!-- MOVE TO THE FUNCTION!!!! -->  
					<h3> Michael Zaccheo </h3>
					<div class="col-md-4"> 
						<img class="img-responsive center-block" src="https://farm3.staticflickr.com/2926/14069879829_890e8cf3be_z.jpg">
					</div>

					<div class="col-md-8"> 
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
					<h3> Jeremy Tokash </h3>
					<div class="col-md-4 center-block"> 
						<img class="img-responsive center-block" src="https://farm6.staticflickr.com/5556/14870560596_760dcf3d01_z.jpg">
					</div>
					<div class="col-md-8"> 
						<p> Longest member of the SDGA. Currently lives in Pittsburgh, PA and plays courses such as Deer Lakes, Moraine State Park, and practices at Schenley Park. Comes from a background of ultimate and has a strong short forehand game.  </p>
						<ul class="list-unstyled"> 
							<li> Throws: RHFH </li>
							<li> Current City: Scranton, PA </li>
							<li> Distance Driver: Innova Destroyer </li>
							<li> Putter: JK Pro Aviar </li>
							<li> Rating: 973 </li> <!-- Turn into a function  -->
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

		<div id="tour" class="row tour"> 
			<div class="container">
				<h2> 2015 Tour</h2>
				<p> Tournaments for the 2015 season for the SDGA.  </p>
				<div class="col-xs-12" id="tour-map" style="width: 100%; height: 100%; min-height: 600px;"></div>
			</div>
		</div>

		<div id="sponsors" class="section sponsors"> 
			<div class="container">
				<h2> Our Sponsors </h2>

				<p> Section to explain why to become a sponsor listing tour events worlds (show a animated map), college champ etc. </p>
				<p> We will be traveling all around Pennsylvania...</p>
				<p> Custom disc, Teeshirt,  </p>
				<p> Custom disc, Teeshirt,  </p>
				<h3><a href="#">Become a Sponsor</a></h3> 


				<div class="packages">
					<div class="col-md-4">
						<div> 
						  	<h3> Bronze </h3>
						  	<i class="fa fa-trophy fa-5x bronze"></i>
						  	<p> <strong>Donations $20 - $100</strong> </p>
						  	<p> <strong>What do you get?</strong> Small (at least 2"x2" logo) on our first apparel. Small logo on our website and social media pages.  </p>
						  	<p> <strong>What do we get?</strong> These funds will help us sponsor appropriate apparel and fund some additional discs. </p>
						</div>
					</div>

				  <div class="col-md-4">
				  	<div> 
					  	<h3> Silver </h3>
					  	<i class="fa fa-trophy fa-5x silver"></i>
					  	<p> <strong>Donations $100 - $250</strong> </p>
					  	<p> <strong>What do you get?</strong> Medium (at least 4"x4" logo) on our first apparel. Medium sized logo on our website and social media pages.  </p>
					  	<p> <strong>What do we get?</strong> These funds will help us sponsor appropriate apparel and fund some additional discs and more equipment. The funds will also be used for transportation costs to get us to more tournaments.  </p>
				  	</div>
				  </div>


				  <div class="col-md-4">
				  	<div> 
					  	<h3> Gold </h3>
					  	<i class="fa fa-trophy fa-5x gold"></i>
					  	<p> <strong>Donations above $250</strong> </p>
					  	<p> <strong>What do you get?</strong> Large logo on our first apparel. Prominently featured on the front or back of shirts. Large logo on our website and social media pages. Plus a logo on every shirt going forward.  </p>
					  	<p> <strong>What do we get?</strong> These funds will help us sponsor appropriate apparel and fund additional discs, better equipment, and a significant portion of travel expenses. </p>
				  	</div>
				  </div>

			 </div>








			</div>
		</div>

		<div class="section join"> 
			<div class="container">
				<h2> Become a Member </h2>
			</div>
		</div>



	</div>
</div>