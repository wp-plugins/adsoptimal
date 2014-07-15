<?php
/**
 * Represents the view for the administration dashboard.
 *
 * This includes the header, options, and other information that should provide
 * The User Interface to the end user.
 *
 * @package   AdsOptimal
 * @author    team@adsoptimal.com
 * @license   GPL-2.0+
 * @link      http://www.adsoptimal.com
 * @copyright 2014 Your Name or Company Name
 */
	if (isset($_POST["adsoptimal_access_token"])) update_option('adsoptimal_access_token', $_POST["adsoptimal_access_token"]);
	if (isset($_POST["adsoptimal_email"])) update_option('adsoptimal_email', $_POST["adsoptimal_email"]);
	if (isset($_POST["adsoptimal_publisher_id"])) update_option('adsoptimal_publisher_id', $_POST["adsoptimal_publisher_id"]);
	if (isset($_POST["adsoptimal_ad_format"])) update_option('adsoptimal_ad_format', $_POST["adsoptimal_ad_format"]);
	if (isset($_POST["adsoptimal_ad_timing"])) update_option('adsoptimal_ad_timing', $_POST["adsoptimal_ad_timing"]);
	if (isset($_POST["adsoptimal_ad_delay"])) update_option('adsoptimal_ad_delay', $_POST["adsoptimal_ad_delay"]);
	if (isset($_POST["adsoptimal_ad_scroll"])) update_option('adsoptimal_ad_scroll', $_POST["adsoptimal_ad_scroll"]);
	if (isset($_POST["adsoptimal_ad_close"])) update_option('adsoptimal_ad_close', $_POST["adsoptimal_ad_close"]);
	if (isset($_POST["adsoptimal_ad_label"])) update_option('adsoptimal_ad_label', $_POST["adsoptimal_ad_label"]);
?>
<form method="post" id="myForm">
<input type="hidden" name="adsoptimal_access_token" value="<?php echo get_option('adsoptimal_access_token', '') ?>">
<input type="hidden" name="adsoptimal_email" value="<?php echo get_option('adsoptimal_email', '') ?>">
<input type="hidden" name="adsoptimal_publisher_id" value="<?php echo get_option('adsoptimal_publisher_id', '') ?>">
<input type="hidden" name="adsoptimal_ad_format" value="<?php echo get_option('adsoptimal_ad_format', 'ALERT') ?>">
<input type="hidden" name="adsoptimal_ad_timing" value="<?php echo get_option('adsoptimal_ad_timing', 'IMMEDIATE') ?>">
<input type="hidden" name="adsoptimal_ad_delay" value="<?php echo get_option('adsoptimal_ad_delay', '10') ?>">
<input type="hidden" name="adsoptimal_ad_scroll" value="<?php echo get_option('adsoptimal_ad_scroll', '60') ?>">
<input type="hidden" name="adsoptimal_ad_close" value="<?php echo get_option('adsoptimal_ad_close', 'YES') ?>">
<input type="hidden" name="adsoptimal_ad_label" value="<?php echo get_option('adsoptimal_ad_label', 'YES') ?>">
<div class="authenticate" style="display: none;">
	<div style="color: #ffffff; width: 350px; margin: 100px auto 0px; padding: 15px; border: solid 1px #ef4036; text-align: center; background-color: #f05a28; -webkit-border-radius: 7px; -moz-border-radius: 7px; border-radius: 7px;">
		<h3 style="margin-top: 0px; font-weight: 300;">Connect Your AdsOptimal Account</h3>
		<p style="padding: 50px 0;"><a class="btn btn-default connect" href="javascript:void(0);" style="font-size: 15px; line-height: 40px; padding: 0 30px;">Connect AdsOptimal</a></p>
		<p>Promote mobile apps on your website and get $3 per download, The highest payout you'll find on the web.</p>
	</div>
</div>
<div class="authenticating" style="display: none;">
	<div style="color: #ffffff; width: 350px; margin: 100px auto 0px; padding: 15px; border: solid 1px #ef4036; text-align: center; background-color: #f05a28; -webkit-border-radius: 7px; -moz-border-radius: 7px; border-radius: 7px;">
		<h3 style="margin-top: 0px; font-weight: 300;">Connect Your AdsOptimal Account</h3>
		<h4 style="padding: 50px 0; line-height: 42px;">Retrieving Your Account..</h4>
		<p>Promote mobile apps on your website and get $3 per download, The highest payout you'll find on the web.</p>
	</div>
</div>
<div class="authenticated" style="display: none;">
	<div style="background-color: #f05a28; min-width: 1050px;">
		<img src="<?php echo plugins_url( '../assets/white-logo.png', __FILE__ ) ?>" style="width: 170px; height: 50px; float: left;">
		<div class="btn-group pull-right" style="margin: 8px 10px 0 0;">
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="background: transparent; border-color: #ffffff; color: #ffffff; ">
				<span class="email-address" style="text-shadow: none;"></span> <span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a class="change-account" href="#">Change Account</a></li>
			</ul>
		</div>
		<div class="btn-group pull-right" style="margin: 8px 10px 0 0;">
			<button class="btn btn-default dropdown-toggle" type="button" data-toggle="dropdown" style="background: transparent; border-color: #ffffff; color: #ffffff; ">
				<span class="earning" style="text-shadow: none;">$0.00</span> <span class="caret"></span>
			</button>
			<ul class="dropdown-menu">
				<li><a href="http://www.adsoptimal.com/customer/insights" target="_blank">Insights</a></li>
				<li><a href="http://www.adsoptimal.com/customer/payout" target="_blank">Payout</a></li>
			</ul>
		</div>
		<div style="clear: both;"></div>
	</div>
	<div style="width: 1050px; margin: 0 auto;">
		<div class="container-fluid">
			<div class="col-md-8">
				<div class="feature-container" style="width: auto; height: 550px;">
					<div class="container-fluid" style="padding-right: 0px;">
						<div class="col-sm-3" style="border-right: solid 1px #dddddd; height: 550px; padding: 20px 10px 0 0;">
							<ul class="nav nav-pills nav-stacked">
								<li class="active setting-nav-pill" onclick="$('.setting-nav-pill').removeClass('active'); $('.setting-pane').hide(); $('.setting-pane-1').show(); $(this).addClass('active');"><a href="javascript:void(0);" style="padding-left: 10px; padding-right: 10px;">Choose Format</a></li>
								<li class="setting-nav-pill" onclick="$('.setting-nav-pill').removeClass('active'); $('.setting-pane').hide(); $('.setting-pane-2').show(); $(this).addClass('active');"><a href="javascript:void(0);" style="padding-left: 10px; padding-right: 10px;">Choose Display Timing</a></li>
							</ul>
						</div>
						<div class="col-sm-9" style="height: 550px; padding: 0;">
							<div class="setting-pane setting-pane-1">
								<div style="height: 500px; overflow: auto;">
									<h3 style="text-align: center;">Standard</h3>
									<div class="container-fluid">
										<div class="col-md-4">
											<button type="button" class="btn btn-success format-choice pre-selected active" onclick="refreshPreview(this);" format="ALERT" data-id="<%= current_user.id %>" data-type="ALERT" data-category="<%= current_user.category %>" category="" style="padding: 0;">
												<div style="padding: 6px"><img src="<?php echo plugins_url( '../assets/template-alert.jpg', __FILE__ ) ?>" style="width: 110px; height: 143px;"></div>
												<div style="padding: 6px; border-top: solid 1px #dddddd; font-size: 11px; line-height: 13px;">
													<div>Payout: $$$$$</div>
													<div>Friendliness: &#9733;&#9733;</div>
												</div>
											</button>
										</div>
										<div class="col-md-4">
											<button type="button" class="btn btn-default format-choice" onclick="refreshPreview(this);" format="BASIC" data-id="<%= current_user.id %>" data-type="BASIC" data-category="<%= current_user.category %>" style="padding: 0;">
												<div style="padding: 6px"><img src="<?php echo plugins_url( '../assets/template-simple.jpg', __FILE__ ) ?>" style="width: 110px; height: 143px;"></div>
												<div style="padding: 6px; border-top: solid 1px #dddddd; font-size: 11px; line-height: 13px;">
													<div>Payout: $$$$</div>
													<div>Friendliness: &#9733;&#9733;&#9733;&#9733;</div>
												</div>
											</button>
										</div>
										<div class="col-md-4">
											<button type="button" class="btn btn-default format-choice" onclick="refreshPreview(this);" format="APPWALL" data-id="<%= current_user.id %>" data-type="APPWALL" data-category="<%= current_user.category %>" style="padding: 0;">
												<div style="padding: 6px"><img src="<?php echo plugins_url( '../assets/template-appwall.jpg', __FILE__ ) ?>" style="width: 110px; height: 143px;"></div>
												<div style="padding: 6px; border-top: solid 1px #dddddd; font-size: 11px; line-height: 13px;">
													<div>Payout: $$$$</div>
													<div>Friendliness: &#9733;&#9733;</div>
												</div>
											</button>
										</div>
									</div>
									<div class="container-fluid" style="padding-top: 20px;">
										<div class="col-md-4">
											<button type="button" class="btn btn-default format-choice" onclick="refreshPreview(this);" format="BOTTOMBAR" data-id="<%= current_user.id %>" data-type="BOTTOMBAR" data-category="<%= current_user.category %>" style="padding: 0;">
												<div style="padding: 6px"><img src="<?php echo plugins_url( '../assets/template-banner.jpg', __FILE__ ) ?>" style="width: 110px; height: 143px;"></div>
												<div style="padding: 6px; border-top: solid 1px #dddddd; font-size: 11px; line-height: 13px;">
													<div>Payout: $</div>
													<div>Friendliness: &#9733;&#9733;&#9733;&#9733;&#9733;</div>
												</div>
											</button>
										</div>
										<div class="col-md-4">
											<button type="button" class="btn btn-default format-choice" onclick="refreshPreview(this);" format="POSTER" data-id="<%= current_user.id %>" data-type="POSTER" data-category="<%= current_user.category %>" style="padding: 0;">
												<div style="padding: 6px"><img src="<?php echo plugins_url( '../assets/template-poster.jpg', __FILE__ ) ?>" style="width: 110px; height: 143px;"></div>
												<div style="padding: 6px; border-top: solid 1px #dddddd; font-size: 11px; line-height: 13px;">
													<div>Payout: $$$</div>
													<div>Friendliness: &#9733;&#9733;&#9733;</div>
												</div>
											</button>
										</div>
										<div class="col-md-4">
											<button type="button" class="btn btn-default format-choice" onclick="refreshPreview(this);" format="DETAIL" data-id="<%= current_user.id %>" data-type="DETAIL" data-category="<%= current_user.category %>" style="padding: 0;">
												<div style="padding: 6px"><img src="<?php echo plugins_url( '../assets/template-detailed.jpg', __FILE__ ) ?>" style="width: 110px; height: 143px;"></div>
												<div style="padding: 6px; border-top: solid 1px #dddddd; font-size: 11px; line-height: 13px;">
													<div>Payout: $$</div>
													<div>Friendliness: &#9733;&#9733;&#9733;</div>
												</div>
											</button>
										</div>
									</div>
									<h3 style="text-align: center;">Advanced</h3>
									<div class="container-fluid" style="padding-bottom: 10px;">
										<div class="col-md-4">
											<button type="button" class="btn btn-default format-choice" onclick="refreshPreview(this);" format="REDIRECT" data-id="<%= current_user.id %>" data-type="REDIRECT" data-category="<%= current_user.category %>" style="padding: 0;">
												<div style="padding: 6px; height: 100px; text-align: center; width: 122px;"><h4>Redirect<br/>all users<br/>to offer</h4></div>
												<div style="padding: 6px; border-top: solid 1px #dddddd; font-size: 11px; line-height: 13px;">
													<div>Payout: $$$$$$</div>
													<div>Friendliness: &#9733;</div>
												</div>
											</button>
										</div>
										<!--<div class="col-md-4">
											<button type="button" class="btn btn-default format-choice" onclick="refreshPreview(this);" format="EXIT" data-id="<%= current_user.id %>" data-type="EXIT" data-category="<%= current_user.category %>" style="padding: 0;">
												<div style="padding: 6px; height: 100px; text-align: center; width: 122px;"><div style="display:none"><img src="../wp-content/plugins/adsoptimal/admin/assets/template-alert.jpg" style="width: 110px; height: 143px"></div><h4>Exit<br/>Prompt</h4></div>
												<div style="padding: 6px; border-top: solid 1px #dddddd; font-size: 11px; line-height: 13px;">
													<div>Payout: $$$$</div>
													<div>Friendliness: &#9733;</div>
												</div>
											</button>
										</div>-->
									</div>
								</div>
								<div style="height: 50px; padding-top: 8px; border-top: solid 1px #dddddd; text-align: center;">
									<span>Ad Label</span> <div class="btn-group" data-toggle="buttons">
										<label class="btn btn-success toggle toggle-a toggle-a1" onclick="$('.toggle-a').removeClass('btn-success btn-warning btn-default'); $(this).addClass('btn-success'); $('.toggle-a2').addClass(' btn-default'); refreshPreview($('.format-choice.active')[0]);">
											<input type="radio" name="options" id="option1"> On
										</label>
										<label class="btn btn-default toggle toggle-a toggle-a2" onclick="$('.toggle-a').removeClass('btn-success btn-warning btn-default'); $(this).addClass('btn-warning'); $('.toggle-a1').addClass(' btn-default'); refreshPreview($('.format-choice.active')[0]);">
											<input type="radio" name="options" id="option2"> Off
										</label>
									</div>
									<span style="margin-left: 10px;">Extra Close Button</span> <div class="btn-group" data-toggle="buttons">
										<label class="btn btn-success toggle toggle-b toggle-b1" onclick="$('.toggle-b').removeClass('btn-success btn-warning btn-default'); $(this).addClass('btn-success'); $('.toggle-b2').addClass(' btn-default'); refreshPreview($('.format-choice.active')[0]);">
											<input type="radio" name="options" id="option1"> On
										</label>
										<label class="btn btn-default toggle toggle-b toggle-b2" onclick="$('.toggle-b').removeClass('btn-success btn-warning btn-default'); $(this).addClass('btn-warning'); $('.toggle-b1').addClass(' btn-default'); refreshPreview($('.format-choice.active')[0]);">
											<input type="radio" name="options" id="option2"> Off
										</label>
									</div>
								</div>
							</div>
							<div class="setting-pane setting-pane-2" style="display: none;">
								<h3 style="text-align: center;">Choose Ad Display Timing</h3>
								<form class="form-horizontal">
									<div style="padding: 13px;" class="container-fluid">
										<div class="btn-group" data-toggle="buttons">
											<label class="btn btn-success timing-toggle active" onclick="$('.timing-toggle').removeClass('btn-success btn-warning btn-default active').addClass('btn-default'); $(this).addClass('btn-success active').removeClass('btn-default'); $('.config-plane').hide(); refreshPreview($('.format-choice.active')[0]);" value="IMMEDIATE">
												<input type="radio" name="options" id="option11"> Immediately<br/>after page loaded
											</label>
											<label class="btn btn-default timing-toggle" onclick="$('.timing-toggle').removeClass('btn-success btn-warning btn-default active').addClass('btn-default'); $(this).addClass('btn-success active').removeClass('btn-default'); $('.config-plane').hide(); $('.config-delay').show(); refreshPreview($('.format-choice.active')[0]);" value="DELAY">
												<input type="radio" name="options" id="option12"> Wait for seconds<br/>after page loaded
											</label>
											<label class="btn btn-default timing-toggle" onclick="$('.timing-toggle').removeClass('btn-success btn-warning btn-default active').addClass('btn-default'); $(this).addClass('btn-success active').removeClass('btn-default'); $('.config-plane').hide(); $('.config-scroll').show(); refreshPreview($('.format-choice.active')[0]);" value="SCROLL">
												<input type="radio" name="options" id="option13"> After scroll to<br/>the bottom of the page
											</label>
										</div>
									</div>
									<div class="config-delay config-plane" style="display: none;">
										<h3 style="text-align: center;">Timing option</h3>
										<div style="padding: 7px; text-align: center;" class="container-fluid">
											<div class="form-group">
												<label class="control-label" style="display: inline-block;">Delay ad for &nbsp;</label>
												<div class="controls" style="width: 200px; display: inline-block;">
													<select style="vertical-align:-webkit-baseline-middle" class="span4 config-delay-timing input-xlarge form-control" onchange="refreshPreview($('.format-choice.active')[0]);">
														<option value="1">1 second</option>
														<option value="2">2 seconds</option>
														<option value="3">3 seconds</option>
														<option value="4">4 seconds</option>
														<option value="5">5 seconds</option>
														<option value="6">6 seconds</option>
														<option value="7">7 seconds</option>
														<option value="8">8 seconds</option>
														<option value="9">9 seconds</option>
														<option value="10" selected>10 seconds</option>
														<option value="11">11 seconds</option>
														<option value="12">12 seconds</option>
														<option value="13">13 seconds</option>
														<option value="14">14 seconds</option>
														<option value="15">15 seconds</option>
														<option value="16">16 seconds</option>
														<option value="17">17 seconds</option>
														<option value="18">18 seconds</option>
														<option value="19">19 seconds</option>
														<option value="20">20 seconds</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="config-scroll config-plane" style="display: none;">
										<h3 style="text-align: center;">Scroll option</h3>
										<div style="padding: 7px; text-align: center;" class="container-fluid">
											<div class="form-group">
												<label class="control-label" style="display: inline-block;">Show ad after scrolling &nbsp;</label>
												<div class="controls" style="width: 200px; display: inline-block;">
													<select style="vertical-align:-webkit-baseline-middle" class="span4 config-scroll-threshold input-xlarge form-control" onchange="refreshPreview($('.format-choice.active')[0]);">
														<option value="10">10%</option>
														<option value="20">20%</option>
														<option value="30">30%</option>
														<option value="40">40%</option>
														<option value="50">50%</option>
														<option value="60" selected>60%</option>
														<option value="70">70%</option>
														<option value="80">80%</option>
														<option value="90">90%</option>
													</select>
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
				<div style="text-align: center;"><button type="submit" class="btn btn-danger btn-lg">Save Settings</button></div>
			</div>
			<div class="col-md-4">
				<img src="<?php echo plugins_url( '../assets/iphone_5_white.png', __FILE__ ) ?>" style="position: relative; width: 350px; height: 655px;">
				<div style="position: absolute; left: 56px; top: 163px; width: 266px; height: 331px;">
					<img class="preview-screen" src="" style="width: 100%; height: 100%;">
				</div>
			</div>
		</div>
	</div>
</div>
</form>
<script type="text/javascript" charset="utf-8">
	var $ = jQuery;
	$(function () {
		var settings =
			{
				'host':     "www.adsoptimal.com"
			, 'clientId': "8d1ccad0433322bed59691fb0d6367a1f4846da1b70ce114cacc7202478e6cd9"
			};

		var authHost     = "https://" + settings.host;
		var resourceHost = "https://" + settings.host;
		
		// OAuth 2.0 Popup
		//
		var popupWindow=null;
		function openPopup(url)
		{
			if(popupWindow && !popupWindow.closed) popupWindow.focus();
			else popupWindow = window.open(url,"_blank","directories=no, status=no, menubar=no, scrollbars=yes, resizable=no,width=515, height=330,top=" + (screen.height - 330)/2 + ",left=" + (screen.width - 515)/2);
		}
		function parent_disable() {
			if(popupWindow && !popupWindow.closed) popupWindow.focus();
		}
		
		$("a.connect").click(function() {
			var url = authHost + '/oauth/authorize?client_id=' + settings.clientId + '&redirect_uri=' + encodeURIComponent(location.href.replace('#' + location.hash,"")) + '&response_type=token';
			openPopup(url);
			$(document.body).bind('focus', parent_disable);
			$(document.body).bind('click', parent_disable);
		});
		$(".change-account").click(function() {
			var url = authHost + '/oauth/authorize?client_id=' + settings.clientId + '&redirect_uri=' + encodeURIComponent(location.href.replace('#' + location.hash,"")) + '&response_type=token';
			var logout = authHost + '/oauth/logout?redirect=' + encodeURIComponent(url);
			openPopup(logout);
			$(document.body).bind('focus', parent_disable);
			$(document.body).bind('click', parent_disable);
		});
		
		// User Interface
		//
		$('.template').click(function() {
			$('#preview').attr('src', $(this).find('img').attr('src'));
		});
		
		// Manage OAuth 2.0 Redirect
		//
		var extractToken = function(hash) {
			var match = hash.match(/access_token=(\w+)/);
			return !!match && match[1];
		};
		var extractError = function(hash) {
			var match = hash.match(/error=(\w+)/);
			return !!match && match[1];
		};
		
		var token = extractToken(window.location.hash);
		if (extractError(window.location.hash) == 'access_denied') {
			window.close();
		}
		else if(token) {
			try { window.opener.setAccessToken(token); }
			catch(ex) { }
			window.close();
		}
		else {
			$('div.authenticate').show();
			
			if ($('[name="adsoptimal_access_token"]').val()) {
				$('div.authenticate').hide();
				$('div.authenticating').hide();
				$('div.authenticated').show();
				
				$('.email-address').text($('[name="adsoptimal_email"]').val());
				
				$('.format-choice[format="' + $('[name="adsoptimal_ad_format"]').val() + '"]').click();
				$('.timing-toggle[value="' + $('[name="adsoptimal_ad_timing"]').val() + '"]').click();
				$('.config-delay-timing').val($('[name="adsoptimal_ad_delay"]').val());
				$('.config-scroll-threshold').val($('[name="adsoptimal_ad_scroll"]').val());
				if ($('[name="adsoptimal_ad_label"]').val() == 'NO') $('.toggle-a2').click();
				if ($('[name="adsoptimal_ad_close"]').val() == 'NO') $('.toggle-b2').click();
				
				window.disabledUpdateSettings = false;
				
				$('.earning').text('...');
				if ($('[name="adsoptimal_access_token"]').val()) {
					$.ajax({
							url: resourceHost + '/api/v1/insight_info'
						, beforeSend: function (xhr) {
								xhr.setRequestHeader('Authorization', "Bearer " + $('[name="adsoptimal_access_token"]').val());
								xhr.setRequestHeader('Accept',        "application/json");
							}
						, success: function (response) {
								if (response.data) {
									$('.earning').text('$' + response.data.pending_payout.toFixed(2));
								} else {
									$('.earning').text('Insight');
								}
							}
					});
				}
			}
		}
		
		// Manage OAuth 2.0 Results
		//
		window.setAccessToken = function(token) {
			$('div.authenticate').hide();
			$('div.authenticating').show();
			$('div.authenticated').hide();
			
			$.ajax({
					url: resourceHost + '/api/v1/publisher_info'
				, beforeSend: function (xhr) {
						xhr.setRequestHeader('Authorization', "Bearer " + token);
						xhr.setRequestHeader('Accept',        "application/json");
					}
				, success: function (response) {
						$('div.authenticating').hide();
						if (response.data) {
							$('[name="adsoptimal_access_token"]').val(token);
							$('[name="adsoptimal_email"]').val(response.data.email);
							$('[name="adsoptimal_publisher_id"]').val(response.data.publisher_id);
							$('#myForm')[0].submit();
						} else {
							$('div.authenticate').show();
						}
					}
			});
		}
	});
</script>
<script type="text/javascript">
function refreshPreview(element) {
  $('.format-choice').removeClass('active btn-success').addClass('btn-default');
  $(element).addClass('active btn-success').removeClass('btn-default');
  var type = $(element).attr('format');
  var hasOption = false;
  var hasPreview = false;
  
  switch(type) {
    case 'ALERT':
    case 'BOTTOMBAR':
    case 'REDIRECT':
    case 'EXIT':
      hasOption = false;
      $('.toggle').attr('disabled', true);
      break;
    default:
      hasOption = true;
      $('.toggle').attr('disabled', false);
      break;
  }
  switch(type) {
    case 'REDIRECT':
      hasPreview = false;
      break;
    default:
      hasPreview = true;
      break;
  }
  
  var imageType = '';
  if (!$('.toggle-b1').hasClass('btn-success')) imageType += 'nc';
  if (!$('.toggle-a1').hasClass('btn-success')) imageType += 'nl';
  var imageSrc = $(element).find('img').attr('src');
  if (imageType != '' && hasOption) imageSrc = imageSrc.replace('.jpg', '-' + imageType + '.png');
  $('.preview-screen').attr('src', imageSrc);
  
  if (hasPreview) $('.preview-screen').show();
  else $('.preview-screen').hide();
	
	updateSettings();
}
window.disabledUpdateSettings = true;
function updateSettings() {
	if (window.disabledUpdateSettings) return;
	$('[name="adsoptimal_ad_format"]').val($('.format-choice.active').attr('format'));
	$('[name="adsoptimal_ad_timing"]').val($('.timing-toggle.active').attr('value'));
	$('[name="adsoptimal_ad_delay"]').val($('.config-delay-timing').val());
	$('[name="adsoptimal_ad_scroll"]').val($('.config-scroll-threshold').val());
	$('[name="adsoptimal_ad_label"]').val($('.toggle-a1').hasClass('btn-success') ? 'YES' : 'NO');
	$('[name="adsoptimal_ad_close"]').val($('.toggle-b1').hasClass('btn-success') ? 'YES' : 'NO');
}
refreshPreview($('.pre-selected')[0]);
</script>