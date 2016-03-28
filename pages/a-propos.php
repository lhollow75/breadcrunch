<!-- //============ 
   MAIN CONTENT
=============== -->

    <div class="wrapper" id="main-content">
        <div class="container">
			<div id="story" class="row">
				<h1 class="page_titre" id="histoire_titre" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'histoire_titre','', 'recuperation') ?></h1>
		        <hr>

				<div class="col-lg-6 col-xs-12">
					<div class="story-section">
						<img src="./img/story_boulanger.jpg" alt="">
					</div>
				</div>

				<div class="col-lg-6 col-xs-12">
					<div class="story-section">
						<h2 id="story-section-title" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'story-section-title','', 'recuperation') ?></h2>
						<p id="story-section-text" contenteditable="<?php echo $activeContent; ?>"><?php localisationEnBase($mysql, 'story-section-text','', 'recuperation') ?></p>

					</div>
			</div>
		</div>
	</div><!-- /#story -->
<!-- //============ 
   /MAIN CONTENT
=============== -->