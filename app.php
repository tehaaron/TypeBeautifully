<?php include_once('classes/check.class.php'); ?>
<?php include_once('header.php'); ?>
<link rel="stylesheet" href="stylesheets/filtrify.css">
<script src="javascripts/slidepanel.js"></script>
<script src="javascripts/texthandling.js"></script>


<!-- ---- -->

<div class="tabbable tabs-left">
<ul id="slide-out-menu" class="nav nav-tabs">
  <li>
  	<a href="#styles" class="item" id="styles-menu" data-toggle="tab">
  	<h1>S</h1>
  	<h6>Styles</h6>
  	</a>
  </li>
  <li>
  	<a href="#designers" class="item" id="designers-menu" data-toggle="tab">
    <h1>D</h1>
    <h6>Designers</h6>
	</a>
  </li>
  <li>
  	<a href="#code" class="item" id="code-menu" data-toggle="tab">
  	<h1>C</h1>
  	<h6>Code</h6>
  	</a>
  </li>
  <li>
  	<a href="#help" class="item" id="help-menu" data-toggle="tab">
  	<h1>?</h1>
  	<h6>Help</h6>
  	</a>
  </li>
</ul>

<div class="tab-content panel">
  <div class="tab-pane" id="styles">
  	<h1>Styles</h1>
    <div id="tag-filter"></div>
    <ul id="styles-list"></ul>
  </div>
  <div class="tab-pane" id="designers"><h1>Designers</h1></div>
  <div class="tab-pane" id="code"><h1>Code</h1></div>
  <div class="tab-pane" id="help"><h1>Help</h1></div>
</div>

</div>

<!-- ---- -->

<div class="tabbable">
  <ul class="nav nav-tabs" id="workspace-tabs">
    <li class="active"><a href="#source" data-toggle="tab">Source</a></li>
    <li><a href="#styled" data-toggle="tab">Styled</a></li>
  </ul>
  <div class="tab-content">
    <div class="tab-pane active" id="source">
    	<textarea name="source-text" id="source-textarea" placeholder="Paste your html code in here.">
<h1>Testing Text</h1>
<p>Will this work or not?</p>
		</textarea>
    </div>
    <div class="tab-pane" id="styled">
      <div id="results"></div>
    </div>
  </div>
</div>


<!-- Initialize JS Plugins -->
<script src="javascripts/filtrify.js"></script>
<script>
$(function() {
  $.filtrify("styles-list", "tag-filter");
})
</script>

<?php include_once('footer.php'); ?>