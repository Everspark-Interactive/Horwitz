<footer id="footer" class="delay-load">
  <div class="contact-form">
    <?php if( is_page(1574) ): ?>
<!--    
      <div id="map">
        <iframe src="https://snazzymaps.com/embed/90117" width="100%" height="100%" style="border:none;"></iframe>
      </div>
    -->
	  <div id="map">
<iframe src="https://www.google.com/maps/d/embed?mid=1UGLF--1w5IEidtvakWknig-m63qNA6I&ehbc=2E312F" width="100%" height="100%"></iframe>
	  </div>
    <?php endif; ?>
    <div class="form-wrap">
      <p class="form-title">FREE CASE EVALUATION</p>
      <p class="form-instructions">Fill out the form below to receive your free confidential consultation with an experienced injury attorneys.</p>
      <?php //gravity_form( 1, false, false, false, '', false ); ?>
      <?php echo do_shortcode('[gravityform id="1" title="false" description="false" ajax="false"]');?>
    </div>
  </div>
  <div class="address-wrap">
    <div class="left">
      <div class="city chicago">
        <div class="city-left">
          <p>Chicago</p>
        </div>
        <div class="city-right">
          <p class="address"><?php the_field('chicago_address', 'options'); ?></p>
          <a class="google-map" href="<?php the_field('chicago_google_maps_url', 'options'); ?>" target="_blank">get directions</a>
          <a class="phone" href="tel:+1<?php echo preg_replace("/[^0-9]/",'', get_field('chicago_phone_number', 'options')); ?>"><span>phone</span> <?php the_field('chicago_phone_number','options'); ?></a>
          <a class="phone fax" href="tel:+1<?php echo preg_replace("/[^0-9]/",'', get_field('chicago_fax_number', 'options')); ?>"><span>fax</span> <?php the_field('chicago_fax_number','options'); ?></a>
        </div>
      </div>
      <div class="city joliet">
        <div class="city-left">
          <p>Joliet</p>
        </div>
        <div class="city-right">
          <p class="address"><?php the_field('joliet_address', 'options'); ?></p>
          <a class="google-map" href="<?php the_field('joliet_google_maps_url', 'options'); ?>" target="_blank">get directions</a>
          <a class="phone" href="tel:+1<?php echo preg_replace("/[^0-9]/",'', get_field('joliet_phone_number', 'options')); ?>"><span>phone</span> <?php the_field('joliet_phone_number','options'); ?></a>
          <a class="phone fax" href="tel:+1<?php echo preg_replace("/[^0-9]/",'', get_field('joliet_fax_number', 'options')); ?>"><span>fax</span> <?php the_field('joliet_fax_number','options'); ?></a>
        </div>
      </div>
		<div class="city aurora">
        <div class="city-left">
          <p>Aurora</p>
        </div>
        <div class="city-right">
          <p class="address"><?php the_field('aurora_address', 'options'); ?></p>
          <a class="google-map" href="<?php the_field('aurora_google_maps_url', 'options'); ?>" target="_blank">get directions</a>
			 <a class="phone" href="tel:+1<?php echo preg_replace("/[^0-9]/",'', get_field('aurora_phone_number', 'options')); ?>"><span>phone</span> <?php the_field('aurora_phone_number','options'); ?></a>
			<a class="phone fax" href="tel:+1<?php echo preg_replace("/[^0-9]/",'', get_field('aurora_fax_number', 'options')); ?>"><span>fax</span> <?php the_field('aurora_fax_number','options'); ?></a>
          
        </div>
      </div>
    </div>
    <div class="right">
      <div class="sm-wrap">
        <a href="<?php the_field('facebook_url', 'options'); ?>" target="_blank">facebook</a>
        <a href="<?php the_field('google_url', 'options'); ?>" target="_blank">Google</a>
        <a href="<?php the_field('twitter_url', 'options'); ?>" target="_blank">Twitter</a>
        <a href="<?php the_field('linked_in_url', 'options'); ?>"target="_blank">LinkedIn</a>
        <a href="<?php the_field('youtube_url', 'options'); ?>"target="_blank">Youtube</a>
      </div>
    </div>
  </div>
		 <div style="margin-bottom: 50px;">
		 <center><iframe src="https://www.google.com/maps/d/embed?mid=1UGLF--1w5IEidtvakWknig-m63qNA6I&ehbc=2E312F" width="90%" height="400px"></iframe></center>
	  </div>
	
  <div class="bottom-bar">
    <p class="legal">&copy; <?php echo date('Y'); ?> horwitz, horwitz &amp; associates | All rights reserved | <a href="/horwitz-horwitz-associates-terms-of-use/">Terms Of Use</a> | <a href="/horwitz-horwitz-associates-privacy-policy/">Privacy Policy</a> | <a href="<?php the_field('google_url', 'options'); ?>">GOOGLE Maps</a><strong style="display: flex; align-items: center; " ><a class="esi-footer-logo" target="_blank" style="display: flex; align-items: center; justify-content: center;" href="https://www.eversparkinteractive.com"><img style="width:150px;" src="https://www.horwitzlaw.com/wp-content/uploads/2023/04/everspark-intreactive-w-logo.png" alt="everspark interactive logo" ></a></strong></p>
    <p class="legal"><a href="https://www.applicantpro.com/openings/horwitzlaw/jobs">
      Career Opportunities
      </a></p>
  </div>
</footer>
</div> <!-- Site wrapper -->
<?php wp_footer(); ?>

<?php the_field('footer_scripts','options'); ?>
<div id="live_chat_status"></div><script type="text/javascript" src="//cdn1.thelivechatsoftware.com/assets/liveadmins/horwitzlaw.com/chatloader.min.js" ></script>

<?php if(is_page(325055)){ ?>
  <style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 20px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
span.sign {
    font-weight: bold;
    font-size: 20px;
}
	  div#Noite {
    background: #ccc;
    border-top: 1px solid #a39a9a;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-bottom: 25px;
}
	  .main-content p {
   
    margin-bottom: 0px !important;
}
	  p.accordion {
    margin-top: 25px;
}
	  .mrg {
  margin-top: 15px;
}
</style>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
        jQuery(".sign").html("+");
      document.getElementById('Noite').style.display='none';
    } else {
      document.getElementById('Noite').style.display='block';;
      jQuery(".sign").html("-");
    }
  });
}
</script>
<?php } ?>
<?php if(is_page(2882)){ ?>
  <style>
.accordion {
  background-color: #eee;
  color: #444;
  cursor: pointer;
  padding: 18px;
  width: 100%;
  border: none;
  text-align: left;
  outline: none;
  font-size: 20px;
  transition: 0.4s;
}

.active, .accordion:hover {
  background-color: #ccc; 
}

.panel {
  padding: 0 18px;
  display: none;
  background-color: white;
  overflow: hidden;
}
span.sign {
    font-weight: bold;
    font-size: 20px;
}
    div#Noite {
    background: #ccc;
    border-top: 1px solid #a39a9a;
    padding-top: 10px;
    padding-bottom: 10px;
    margin-bottom: 25px;
}
    .main-content p {
   
    margin-bottom: 0px !important;
}
    p.accordion {
    margin-top: 25px;
}
    .mrg {
  margin-top: 15px;
}
</style>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display === "block") {
        jQuery(".sign").html("+");
      document.getElementById('Noite').style.display='none';
    } else {
      document.getElementById('Noite').style.display='block';;
      jQuery(".sign").html("-");
    }
  });
}
</script>
<?php } ?>
</body>
</html>