<body class="landing">
<div class="container-fluid">
<div class="row">
<div class="right-panel-container">
<div class="right-panel">
<div class="custom-logo">
<img src="<?php echo base_url();?>assets/img/logo.png" attr="redskins logo">
</div>
<div class="player-img">
<img src="<?php echo base_url();?>assets/img/player-images.png">
</div>
</div>
</div>
<div class="left-panel-container">
<div class="left-panel">
<h4>Bon Secours Training Center, 2401 W Lelgh St, Richmond, VA 23220</h4>
<h4 class="text-center"><strong>2018 Redskins Training Camp</strong></h4>
<div class="registration_form">
<form name="registration" method="post" class="clearfix" action="/" novalidate="novalidate">
<div class="hide">
<div class="form-group"><label for="registration_primaryGuest_firstName" class="required">
First name&nbsp;<span class="asterisk">*</span></label><input type="text" id="registration_primaryGuest_firstName" name="registration[primaryGuest][firstName]" required="required" placeholder="First Name" class="form-control" value="test"></div><div class="form-group"><label for="registration_primaryGuest_lastName" class="required">
Last name&nbsp;<span class="asterisk">*</span></label><input type="text" id="registration_primaryGuest_lastName" name="registration[primaryGuest][lastName]" required="required" placeholder="Last Name" class="form-control" value="test"></div><div class="form-group"><label for="registration_primaryGuest_email" class="required">
Email&nbsp;<span class="asterisk">*</span></label><input type="email" id="registration_primaryGuest_email" name="registration[primaryGuest][email]" required="required" placeholder="Email" class="form-control" value="sang.kri.cs155@gmail.com"></div><div class="form-group"><label for="registration_primaryGuest_zipCode" class="optional">
Zip code
</label><input type="text" id="registration_primaryGuest_zipCode" name="registration[primaryGuest][zipCode]" class="zipcode-input form-control" placeholder="Zip Code" size="5" maxlength="5" value="70013"></div><div class="form-group"><label class="required">
Subscriptions&nbsp;<span class="asterisk">*</span></label><div class="form-group"><div class="checkbox"><label><input type="checkbox" id="registration_primaryGuest_subscriptions_seasonTicketWaitlist" name="registration[primaryGuest][subscriptions][seasonTicketWaitlist]" value="1" checked="checked">
 Yes, I would like to sign up for the FREE Season Ticket Waitlist.
</label></div></div><div class="form-group"><div class="checkbox"><label><input type="checkbox" id="registration_primaryGuest_subscriptions_womensClub" name="registration[primaryGuest][subscriptions][womensClub]" value="1">
Yes, I would like to sign up for the FREE Redskins Women's club.
</label></div></div><div class="form-group"><div class="checkbox"><label><input type="checkbox" id="registration_primaryGuest_subscriptions_offers" name="registration[primaryGuest][subscriptions][offers]" value="1">
Yes, I would like to receive special offers from the Redskins and her Partner*.
</label></div></div><div class="form-group"><div class="checkbox"><label><input type="checkbox" id="registration_primaryGuest_subscriptions_saluteMilitaryAppreciationClub" name="registration[primaryGuest][subscriptions][saluteMilitaryAppreciationClub]" value="1">
Yes, I would like to sign up for the FREE Redskins Salute Military Appreciation Club.
</label></div></div></div>
<select id="registration_noOfGuests" name="registration[noOfGuests]" placeholder="No. of Guests" class="number-input form-control"><option value="">No. of Guests</option><option value="1">1</option><option value="2" selected="selected">2</option><option value="3">3</option><option value="4">4</option><option value="5">5</option><option value="6">6</option><option value="7">7</option><option value="8">8</option><option value="9">9</option><option value="10">10</option><option value="11">11</option><option value="12">12</option><option value="13">13</option><option value="14">14</option><option value="15">15</option><option value="16">16</option><option value="17">17</option><option value="18">18</option><option value="19">19</option><option value="20">20</option></select>
</div>
<div class="text-center">
<div class="col-md-12 thank">
<span class="thankyou">THANK YOU FOR SIGNING UP!</span>
</div>
<div class="col-md-12 thank">
<div class="col-md-12">
<span class="gst">GUEST</span>
</div>
<div class="col-md-12">
<span class="frname">test test</span>
<span class="fremail">sang.kri.cs155@gmail.com</span>
</div>
<div class="col-md-12">
<span class="frname">niraj kumar</span>
<span class="fremail">niraj.k36@gmail.com</span>
</div>
</div>
</div>
<div class="invatation_details">
<p>
Invite your friends and family to the Redskins Training Camp. You are not required to register kids 13 and under - your Fan Mobile Pass will also be valid for their entry.</p>
</div>
<div style="margin-left:10%;" class="input_fields_wrap invitee-list form-inline" data-prototype="    <div class=&quot;input-field clearfix&quot;>
        <div class=&quot;col-md-3 add friend-firstname&quot;>
            <input type=&quot;text&quot; id=&quot;registration_guests___name___firstName&quot; name=&quot;registration[guests][__name__][firstName]&quot; required=&quot;required&quot; placeholder=&quot;First Name&quot; class=&quot;form-control form-control&quot; />
            
        </div>
        <div class=&quot;col-md-3 add friend-lastname&quot;>
            <input type=&quot;text&quot; id=&quot;registration_guests___name___lastName&quot; name=&quot;registration[guests][__name__][lastName]&quot; required=&quot;required&quot; placeholder=&quot;Last Name&quot; class=&quot;form-control form-control&quot; />
            
        </div>
        <div class=&quot;col-md-3 add friend-email&quot;>
            <input type=&quot;email&quot; id=&quot;registration_guests___name___email&quot; name=&quot;registration[guests][__name__][email]&quot; required=&quot;required&quot; placeholder=&quot;Email&quot; class=&quot;form-control form-control&quot; />
            
        </div>
        <div class=&quot;col-md-3 remove_field &quot;>X</div>
    </div>
">
</div>
<div class="input-field clearfix text-center">
<div class="col-md-12">
<input type="button" name="addfriends" value="+ Add Friends" class="addfriend" id="add-invitee-trigger">
<input type="submit" name="getregisterd" value="Submit">
</div>
</div>
<div class="hide">
<div class="form-group"><div class="form-group collection-items registration_guests_form_group" data-prototype="" data-prototype-name="__name__" data-prototype-label="__name__label__" id="collectionregistration_guests_form_group"></div></div><input type="hidden" id="registration_step" name="registration[step]" class="form-control"><input type="hidden" id="registration__token" name="registration[_token]" class="form-control" value="m_c6EBkPXjEJc4hJXk1_9H0yfzRbzsuz3kdDLoBYom0">
</div>
</form>
<div class="details_reg">
<p>Entry is first come, first serve. Date of camp are subject to change. See complete schedule and more information at <a href="http://www.redskins.com/trainingcamp" target="_blank">redskins.com/trainingcamp.</a> <br><br>
* Please share my email address with NBC Universal, so NBC Universal can send me information about special offer and promotion. I have read and agree to <a href="https://tracking.cirrusinsight.com/6305dab5-367d-4a0f-a674-87d2e81e6e99/nbcuniversal-com-privacy" target="_blank"> NBC UNERVERSAL’S PRIVACY POLICY. </a><br><br><br></p>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</body>
</html>

