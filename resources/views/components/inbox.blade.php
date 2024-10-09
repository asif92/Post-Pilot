<script>try{Typekit.load({ async: true });}catch(e){}</script>
<!-- <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css'> -->
<!-- <link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.2/css/font-awesome.min.css'> -->
<style>

#frame {
  width: 100%;
  min-width: 360px;
  max-width: 100%;
  height: 70vh;
  min-height: 100%;
  max-height: 100%;
  background: #E6EAEA;
}
@media screen and (max-width: 360px) {
  #frame {
    width: 100%;
    height: 100vh;
  }
}
#frame #sidepanel {
  float: left;
  min-width: 280px;
  max-width: 340px;
  width: 40%;
  height: 100%;
  background: #2c3e50;
  color: #f5f5f5;
  overflow: hidden;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel {
    width: 58px;
    min-width: 58px;
  }
}
#frame #sidepanel #profile {
  width: 80%;
  margin: 25px auto;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile {
    width: 100%;
    margin: 0 auto;
    padding: 5px 0 0 0;
    background: #32465a;
  }
}
#frame #sidepanel #profile.expanded .wrap {
  height: 210px;
  line-height: initial;
}
#frame #sidepanel #profile.expanded .wrap p {
  margin-top: 20px;
}
/*#frame #sidepanel #profile.expanded .wrap i.expand-button {
  -moz-transform: scaleY(-1);
  -o-transform: scaleY(-1);
  -webkit-transform: scaleY(-1);
  transform: scaleY(-1);
  filter: FlipH;
  -ms-filter: "FlipH";
}*/
#frame #sidepanel #profile .wrap {
  height: 60px;
  line-height: 60px;
  overflow: hidden;
  -moz-transition: 0.3s height ease;
  -o-transition: 0.3s height ease;
  -webkit-transition: 0.3s height ease;
  transition: 0.3s height ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap {
    height: 55px;
  }
}
#frame #sidepanel #profile .wrap img {
  width: 50px;
  border-radius: 50%;
  padding: 3px;
  border: 2px solid #e74c3c;
  height: auto;
  float: left;
  cursor: pointer;
  -moz-transition: 0.3s border ease;
  -o-transition: 0.3s border ease;
  -webkit-transition: 0.3s border ease;
  transition: 0.3s border ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap img {
    width: 40px;
    margin-left: 4px;
  }
}
#frame #sidepanel #profile .wrap img.online {
  border: 2px solid #2ecc71;
}
#frame #sidepanel #profile .wrap img.away {
  border: 2px solid #f1c40f;
}
#frame #sidepanel #profile .wrap img.busy {
  border: 2px solid #e74c3c;
}
#frame #sidepanel #profile .wrap img.offline {
  border: 2px solid #95a5a6;
}
#frame #sidepanel #profile .wrap p {
  float: left;
  margin-left: 15px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap p {
    display: none;
  }
}
/*#frame #sidepanel #profile .wrap i.expand-button {
  float: right;
  margin-top: 23px;
  font-size: 0.8em;
  cursor: pointer;
  color: #435f7a;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap i.expand-button {
    display: none;
  }
}*/
/* - - - - -  */
/*#frame #sidepanel #profile .wrap #status-options {
  position: absolute;
  opacity: 0;
  visibility: hidden;
  width: 150px;
  margin: 70px 0 0 0;
  border-radius: 6px;
  z-index: 99;
  line-height: initial;
  background: #435f7a;
  -moz-transition: 0.3s all ease;
  -o-transition: 0.3s all ease;
  -webkit-transition: 0.3s all ease;
  transition: 0.3s all ease;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options {
    width: 58px;
    margin-top: 57px;
  }
}
#frame #sidepanel #profile .wrap #status-options.active {
  opacity: 1;
  visibility: visible;
  margin: 75px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options.active {
    margin-top: 62px;
  }
}
#frame #sidepanel #profile .wrap #status-options:before {
  content: '';
  position: absolute;
  width: 0;
  height: 0;
  border-left: 6px solid transparent;
  border-right: 6px solid transparent;
  border-bottom: 8px solid #435f7a;
  margin: -8px 0 0 24px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options:before {
    margin-left: 23px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul {
  overflow: hidden;
  border-radius: 6px;
}
#frame #sidepanel #profile .wrap #status-options ul li {
  padding: 15px 0 30px 18px;
  display: block;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li {
    padding: 15px 0 35px 22px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li:hover {
  background: #496886;
}
#frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
  position: absolute;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  margin: 5px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li span.status-circle {
    width: 14px;
    height: 14px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
  content: '';
  position: absolute;
  width: 14px;
  height: 14px;
  margin: -3px 0 0 -3px;
  background: transparent;
  border-radius: 50%;
  z-index: 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li span.status-circle:before {
    height: 18px;
    width: 18px;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li p {
  padding-left: 12px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #profile .wrap #status-options ul li p {
    display: none;
  }
}
#frame #sidepanel #profile .wrap #status-options ul li#status-online span.status-circle {
  background: #2ecc71;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-online.active span.status-circle:before {
  border: 1px solid #2ecc71;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-away span.status-circle {
  background: #f1c40f;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-away.active span.status-circle:before {
  border: 1px solid #f1c40f;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-busy span.status-circle {
  background: #e74c3c;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-busy.active span.status-circle:before {
  border: 1px solid #e74c3c;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-offline span.status-circle {
  background: #95a5a6;
}
#frame #sidepanel #profile .wrap #status-options ul li#status-offline.active span.status-circle:before {
  border: 1px solid #95a5a6;
}*/
#frame #sidepanel #profile .wrap #expanded {
  padding: 100px 0 0 0;
  display: block;
  line-height: initial !important;
}

.send_message_wrapper {
	/*position: relative;  */
	height: 100px;
	width: 100%;
}
.left_icon,
.right_icon
{
	position: absolute;
	bottom: 0px;
}
.right_icon
{
	right: 0px;
}
.left_icon i,
.right_icon i
{
	cursor: pointer;
}
.emojiPickerIconWrap
{
	position: inherit;
}
.emojiPickerIconWrap .black
{
	display: none;
}
.emojiPicker
{
	top: 25% !important;
	left: 25% !important;
}
#messages_action_dropdown::after {
  display: none;
}
.nav-tabs#inbox_contacts_tab .nav-item
{
	background-color: #ffffff;
}
.nav-tabs#inbox_contacts_tab .nav-link
{
	background-color: #ffffff;
	color: #00365a;
	width: 100%;
}
.nav-tabs#inbox_contacts_tab .nav-link:hover
{
	font-weight: bold;
	color: #00365a;
}
.nav-tabs#inbox_contacts_tab .nav-link.active
{
	border-top: none;
	border-bottom: solid #00365a;
	font-weight: bold;
}
.nav-tabs#inbox_contacts_tab .nav-link.active::before
{
	background-color: #ffffff;
}
#frame #sidepanel #profile .wrap #expanded label {
  float: left;
  clear: both;
  margin: 0 8px 5px 0;
  padding: 5px 0;
}
#frame #sidepanel #profile .wrap #expanded input {
  border: none;
  margin-bottom: 6px;
  background: #32465a;
  border-radius: 3px;
  color: #f5f5f5;
  padding: 7px;
  width: calc(100% - 43px);
}
#frame #sidepanel #profile .wrap #expanded input:focus,
#filter_button:focus {
  outline: none;
  background: #435f7a;
}
#frame #sidepanel #search,
#filter_button
{
  border-top: 1px solid #32465a;
  border-bottom: 1px solid #32465a;
  font-weight: 300;
}
#filter_button
{
	background: #32465a;
}

@media screen and (max-width: 735px) {
  #frame #sidepanel #search {
    display: none;
  }
}
#frame #sidepanel #search label {
  position: absolute;
  margin: 10px 0 0 20px;
}
#frame #sidepanel #search input {
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
  padding: 10px 0 10px 46px;
  width: 100%;
  border: none;
  background: #32465a;
  color: #f5f5f5;
}
#frame #sidepanel #search input:focus {
  outline: none;
  background: #435f7a;
}
#frame #sidepanel #search input::-webkit-input-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input::-moz-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input:-ms-input-placeholder {
  color: #f5f5f5;
}
#frame #sidepanel #search input:-moz-placeholder {
  color: #f5f5f5;
}
#inbox_contacts_tab_content
{
	height: 77%;
}
#frame #sidepanel .contacts {
  height: 100%;
/*  height: calc(100% - 85px);*/
  overflow-y: auto;
  overflow-x: hidden;
}
#frame #sidepanel .contacts ul
{
	list-style-type: none;
	padding-left: 0px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel .contacts {
    height: calc(100% - 149px);
    overflow-y: scroll;
    overflow-x: hidden;
  }
  #frame #sidepanel .contacts::-webkit-scrollbar {
    display: none;
  }
}
#frame #sidepanel .contacts.expanded {
  height: calc(100% - 334px);
}
#frame #sidepanel .contacts::-webkit-scrollbar {
  width: 8px;
  background: #2c3e50;
}
#frame #sidepanel .contacts::-webkit-scrollbar-thumb {
  background-color: #243140;
}
#frame #sidepanel .contacts ul li.contact {
  position: relative;
  padding: 10px 0 15px 0;
  font-size: 0.9em;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel .contacts ul li.contact {
    padding: 6px 0 46px 8px;
  }
}
#frame #sidepanel .contacts ul li.contact:hover {
  background: #32465a;
}
#frame #sidepanel .contacts ul li.contact.active {
  background: #32465a;
  border-right: 5px solid #435f7a;
}
#frame #sidepanel .contacts ul li.contact.active span.contact-status {
  border: 2px solid #32465a !important;
}
#frame #sidepanel .contacts ul li.contact .wrap {
  width: 88%;
  margin: 0 auto;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel .contacts ul li.contact .wrap {
    width: 100%;
  }
}
#frame #sidepanel .contacts ul li.contact .wrap span {
  position: absolute;
  left: 0;
  margin: -2px 0 0 -2px;
  width: 10px;
  height: 10px;
  border-radius: 50%;
  border: 2px solid #2c3e50;
  background: #95a5a6;
}
#frame #sidepanel .contacts ul li.contact .wrap span.online {
  background: #2ecc71;
}
#frame #sidepanel .contacts ul li.contact .wrap span.away {
  background: #f1c40f;
}
#frame #sidepanel .contacts ul li.contact .wrap span.busy {
  background: #e74c3c;
}
#frame #sidepanel .contacts ul li.contact .wrap img {
  width: 40px;
  border-radius: 50%;
  float: left;
  margin-right: 10px;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel .contacts ul li.contact .wrap img {
    margin-right: 0px;
  }
}
#frame #sidepanel .contacts ul li.contact .wrap .meta {
  padding: 5px 0 0 0;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel .contacts ul li.contact .wrap .meta {
    display: none;
  }
}
#frame #sidepanel .contacts ul li.contact .wrap .meta .name {
  font-weight: 600;
}
#frame #sidepanel .contacts ul li.contact .wrap .meta .preview {
  margin: 5px 0 0 0;
  padding: 0 0 1px;
  font-weight: 400;
  white-space: nowrap;
  overflow: hidden;
  text-overflow: ellipsis;
  -moz-transition: 1s all ease;
  -o-transition: 1s all ease;
  -webkit-transition: 1s all ease;
  transition: 1s all ease;
}
#frame #sidepanel .contacts ul li.contact .wrap .meta .preview span {
  position: initial;
  border-radius: initial;
  background: none;
  border: none;
  padding: 0 2px 0 0;
  margin: 0 0 0 1px;
  opacity: .5;
}
#frame #sidepanel #bottom-bar {
  position: absolute;
  width: 100%;
  bottom: 0;
}
#frame #sidepanel #bottom-bar button {
  float: left;
  border: none;
  width: 50%;
  padding: 10px 0;
  background: #32465a;
  color: #f5f5f5;
  cursor: pointer;
  font-size: 0.85em;
  font-family: "proxima-nova",  "Source Sans Pro", sans-serif;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button {
    float: none;
    width: 100%;
    padding: 15px 0;
  }
}
#frame #sidepanel #bottom-bar button:focus {
  outline: none;
}
#frame #sidepanel #bottom-bar button:nth-child(1) {
  border-right: 1px solid #2c3e50;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button:nth-child(1) {
    border-right: none;
    border-bottom: 1px solid #2c3e50;
  }
}
#frame #sidepanel #bottom-bar button:hover {
  background: #435f7a;
}
#frame #sidepanel #bottom-bar button i {
  margin-right: 3px;
  font-size: 1em;
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button i {
    font-size: 1.3em;
  }
}
@media screen and (max-width: 735px) {
  #frame #sidepanel #bottom-bar button span {
    display: none;
  }
}
#no_content_section
{
  display: flex;
  justify-content: center;
  align-content: center !important;
}
#no_content_section i
{
  font-size: 5rem;
  color: #6e6e6ea9;
}
#no_content_section span
{
  font-size: 1.5rem;
}
#message_content_section
{
  display: none;
}
#frame .content {
  float: right;
  width: 60%;
  height: 100%;
  overflow: hidden;
  position: relative;
}
@media screen and (max-width: 735px) {
  #frame .content {
    width: calc(100% - 58px);
    min-width: 300px !important;
  }
}
@media screen and (min-width: 900px) {
  #frame .content {
    width: calc(100% - 340px);
  }
}
#frame .content .contact-profile {
  width: 100%;
  height: 60px;
  line-height: 60px;
  background: #d7d7d7;
}
#frame .content .contact-profile img {
  width: 40px;
  border-radius: 50%;
  float: left;
  margin: 9px 12px 0 9px;
}
#frame .content .contact-profile p {
  float: left;
}
#frame .content .contact-profile .social-media {
  float: right;
}
#frame .content .contact-profile .social-media i {
  margin-left: 14px;
  cursor: pointer;
}
#frame .content .contact-profile .social-media i:nth-last-child(1) {
  margin-right: 20px;
}
#frame .content .contact-profile .social-media i:hover {
  color: #435f7a;
}
#frame .content .messages {
  height: auto;
  min-height: calc(100% - 150px);
  max-height: calc(100% - 150px);
  overflow-y: scroll;
  overflow-x: hidden;
}
@media screen and (max-width: 735px) {
  #frame .content .messages {
    max-height: calc(100% - 105px);
  }
}
#frame .content .messages::-webkit-scrollbar {
  width: 8px;
  background: transparent;
}
#frame .content .messages::-webkit-scrollbar-thumb {
  background-color: rgba(0, 0, 0, 0.3);
}
#frame .content .messages ul li {
  display: inline-block;
  clear: both;
  float: left;
  margin: 10px 15px 10px 15px;
  width: calc(100% - 25px);
  font-size: 0.9em;
}
#frame .content .messages ul li:nth-last-child(1) {
  margin-bottom: 20px;
}
#frame .content .messages ul li.sent img {
  margin: 6px 8px 0 0;
}
#frame .content .messages ul li.sent p {
  background: #435f7a;
  color: #f5f5f5;
}
#frame .content .messages ul li.replies img {
  float: right;
  margin: 6px 0 0 8px;
}
#frame .content .messages ul li.replies p {
  background: #f5f5f5;
  float: right;
}
#frame .content .messages ul li img {
  width: 22px;
  border-radius: 50%;
  float: left;
}
#frame .content .messages ul li p {
  display: inline-block;
  padding: 10px 15px;
  border-radius: 20px;
  max-width: 205px;
  line-height: 130%;
}
@media screen and (min-width: 735px) {
  #frame .content .messages ul li p {
    max-width: 300px;
  }
}
#frame .content .message-input {
  position: absolute;
  bottom: 0;
  width: 100%;
  z-index: 99;
}
#frame .content .message-input .wrap {
  position: relative;
}
#frame .content .message-input .wrap input {
	width: 100% !important;
	height: 100px;
    position: absolute;
    bottom: 0;
    font-size: 1rem;
    padding-bottom: 35px;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap input {
    padding: 0px 32px 16px 8px;
  }
}
#frame .content .message-input .wrap input:focus {
  outline: none;
}
#frame .content .message-input .wrap .attachment {
  position: absolute;
  right: 60px;
  z-index: 4;
  margin-top: 10px;
  font-size: 1.1em;
  color: #435f7a;
  opacity: .5;
  cursor: pointer;
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap .attachment {
    margin-top: 17px;
    right: 65px;
  }
}
#frame .content .message-input .wrap .attachment:hover {
  opacity: 1;
}
#frame .content .message-input .wrap button {
  float: right;
  border: none;
  width: 50px;
  padding: 12px 0;
  cursor: pointer;
  background: transparent;
/*  color: #f5f5f5;*/
}
@media screen and (max-width: 735px) {
  #frame .content .message-input .wrap button {
    padding: 16px 0;
  }
}
#frame .content .message-input .wrap button:hover {
/*  background: #435f7a;*/
}
#frame .content .message-input .wrap button:focus {
  outline: none;
}
</style>

<div id="frame">
	<div id="sidepanel">
		<div id="social_media_container" class="d-flex justify-content-around py-3">
			<img src="img/social_media/facebook.png" height="25" width="25" style="border-radius: 6px;">
			<img src="img/social_media/instagram.png" height="25" width="25" style="border-radius: 6px;">
			<i class="iconsminds-add" style="font-size: 1.2rem"></i>
		</div>
		<!-- <div id="profile">
			<div class="wrap">
				<img id="profile-img" src="https://i.pravatar.cc/150?u=1" class="online" alt="" />
				<p>Mike Ross</p>
				<i class="fa fa-chevron-down expand-button" aria-hidden="true"></i>
				<div id="status-options">
					<ul>
						<li id="status-online" class="active"><span class="status-circle"></span> <p>Online</p></li>
						<li id="status-away"><span class="status-circle"></span> <p>Away</p></li>
						<li id="status-busy"><span class="status-circle"></span> <p>Busy</p></li>
						<li id="status-offline"><span class="status-circle"></span> <p>Offline</p></li>
					</ul>
				</div>
				<div id="expanded">
					<label for="twitter"><i class="fa fa-facebook fa-fw" aria-hidden="true"></i></label>
					<input name="twitter" type="text" value="mikeross" />
					<label for="twitter"><i class="fa fa-twitter fa-fw" aria-hidden="true"></i></label>
					<input name="twitter" type="text" value="ross81" />
					<label for="twitter"><i class="fa fa-instagram fa-fw" aria-hidden="true"></i></label>
					<input name="twitter" type="text" value="mike.ross" />
				</div>
			</div>
		</div> -->
		<div class="contacts_header d-flex justify-content-around mb-3">
			<div id="search">
				<label for=""><i class="fa fa-search" aria-hidden="true"></i></label>
				<input type="text" class="form-control" placeholder="Search contacts..." />
			</div>
			<button class="btn btn-default btn-sm rounded-0" id="filter_button">
				<i class="iconsminds-filter-2 text-white"></i>
			</button>
		</div>
		<ul class="nav nav-tabs nav-fill" id="inbox_contacts_tab" role="tablist">
			<li class="nav-item" role="presentation">
				<button class="nav-link active" id="unresolved_messages_tab" data-toggle="tab" data-target="#unresolved_messages" type="button" role="tab" aria-controls="unresolved_messages" aria-selected="true">
          UNRESOLVED
          <!-- <span class="badge badge-success">3</span> -->
        </button>
			</li>
			<li class="nav-item" role="presentation">
				<button class="nav-link" id="resolved_messages_tab" data-toggle="tab" data-target="#resolved_messages" type="button" role="tab" aria-controls="resolved_messages" aria-selected="false">
          RESOLVED
          <!-- <span class="badge badge-success">3</span> -->
        </button>
			</li>
      <li class="nav-item" role="presentation">
        <button class="nav-link" id="all_messages_tab" data-toggle="tab" data-target="#all_messages" type="button" role="tab" aria-controls="all_messages" aria-selected="false">
          ALL
          <!-- <span class="badge badge-success">3</span> -->
        </button>
      </li>

      <li class="nav-item" role="presentation">

        <div class="dropdown h-100">
          <button class="btn btn-light btn-sm rounded-0 btn-block h-100 p-0 dropdown-toggle" id="messages_action_dropdown" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-ellipsis-v fa-lg"></i>
          </button>
        <div class="dropdown-menu dropdown-menu-right">
        <!-- <a class="dropdown-item" href="#">Action</a> -->
        <!-- <a class="dropdown-item" href="#">Another action</a> -->
        <a class="dropdown-item" href="#">Mark all as read</a>
        </div>
        </div>
      </li>
		</ul>
		<div class="tab-content" id="inbox_contacts_tab_content">
			<div class="contacts tab-pane fade show active" id="unresolved_messages" role="tabpanel" aria-labelledby="unresolved_messages_tab">
				<ul>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status busy"></span>
							<img src="https://i.pravatar.cc/150?u=1" alt="" />
							<div class="meta">
								<p class="name">Katrina Bennett</p>
								<p class="preview">I've sent you the files for the Garrett trial.</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status"></span>
							<img src="https://i.pravatar.cc/150?u=2" alt="" />
							<div class="meta">
								<p class="name">Charles Forstman</p>
								<p class="preview">Mike, this isn't over.</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status"></span>
							<img src="https://i.pravatar.cc/150?u=3" alt="" />
							<div class="meta">
								<p class="name">Jonathan Sidwell</p>
								<p class="preview"><span>You:</span> That's bullshit. This deal is solid.</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="contacts tab-pane fade" id="resolved_messages" role="tabpanel" aria-labelledby="resolved_messages_tab">
				<ul>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status online"></span>
							<img src="https://i.pravatar.cc/150?u=4" alt="" />
							<div class="meta">
								<p class="name">Donna Paulsen</p>
								<p class="preview">Mike, I know everything! I'm Donna..</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status busy"></span>
							<img src="https://i.pravatar.cc/150?u=5" alt="" />
							<div class="meta">
								<p class="name">Jessica Pearson</p>
								<p class="preview">Have you finished the draft on the Hinsenburg deal?</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status"></span>
							<img src="https://i.pravatar.cc/150?u=6" alt="" />
							<div class="meta">
								<p class="name">Harold Gunderson</p>
								<p class="preview">Thanks Mike! :)</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status"></span>
							<img src="https://i.pravatar.cc/150?u=7" alt="" />
							<div class="meta">
								<p class="name">Daniel Hardman</p>
								<p class="preview">We'll meet again, Mike. Tell Jessica I said 'Hi'.</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status busy"></span>
							<img src="https://i.pravatar.cc/150?u=8" alt="" />
							<div class="meta">
								<p class="name">Katrina Bennett</p>
								<p class="preview">I've sent you the files for the Garrett trial.</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status"></span>
							<img src="https://i.pravatar.cc/150?u=9" alt="" />
							<div class="meta">
								<p class="name">Charles Forstman</p>
								<p class="preview">Mike, this isn't over.</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status"></span>
							<img src="https://i.pravatar.cc/150?u=10" alt="" />
							<div class="meta">
								<p class="name">Jonathan Sidwell</p>
								<p class="preview"><span>You:</span> That's bullshit. This deal is solid.</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
			<div class="contacts tab-pane fade" id="all_messages" role="tabpanel" aria-labelledby="all_messages_tab">
				<ul>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status online"></span>
							<img src="https://i.pravatar.cc/150?u=11" alt="" />
							<div class="meta">
								<p class="name">Louis Litt</p>
								<p class="preview">You just got LITT up, Mike.</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status busy"></span>
							<img src="https://i.pravatar.cc/150?u=12" alt="" />
							<div class="meta">
								<p class="name">Harvey Specter</p>
								<p class="preview">Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status away"></span>
							<img src="https://i.pravatar.cc/150?u=13" alt="" />
							<div class="meta">
								<p class="name">Rachel Zane</p>
								<p class="preview">I was thinking that we could have chicken tonight, sounds good?</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status online"></span>
							<img src="https://i.pravatar.cc/150?u=14" alt="" />
							<div class="meta">
								<p class="name">Donna Paulsen</p>
								<p class="preview">Mike, I know everything! I'm Donna..</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status busy"></span>
							<img src="https://i.pravatar.cc/150?u=15" alt="" />
							<div class="meta">
								<p class="name">Jessica Pearson</p>
								<p class="preview">Have you finished the draft on the Hinsenburg deal?</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status"></span>
							<img src="https://i.pravatar.cc/150?u=16" alt="" />
							<div class="meta">
								<p class="name">Harold Gunderson</p>
								<p class="preview">Thanks Mike! :)</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status"></span>
							<img src="https://i.pravatar.cc/150?u=17" alt="" />
							<div class="meta">
								<p class="name">Daniel Hardman</p>
								<p class="preview">We'll meet again, Mike. Tell Jessica I said 'Hi'.</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status busy"></span>
							<img src="https://i.pravatar.cc/150?u=18" alt="" />
							<div class="meta">
								<p class="name">Katrina Bennett</p>
								<p class="preview">I've sent you the files for the Garrett trial.</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status"></span>
							<img src="https://i.pravatar.cc/150?u=19" alt="" />
							<div class="meta">
								<p class="name">Charles Forstman</p>
								<p class="preview">Mike, this isn't over.</p>
							</div>
						</div>
					</li>
					<li class="contact">
						<div class="wrap">
							<span class="contact-status"></span>
							<img src="https://i.pravatar.cc/150?u=20" alt="" />
							<div class="meta">
								<p class="name">Jonathan Sidwell</p>
								<p class="preview"><span>You:</span> That's bullshit. This deal is solid.</p>
							</div>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<!-- <div id="bottom-bar">
			<button id="addcontact"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> <span>Add contact</span></button>
			<button id="settings"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> <span>Settings</span></button>
		</div> -->
	</div>

  <div class="content align-items-center" id="no_content_section">
    <h1 class="text-center d-flex flex-column">
      <i class="iconsminds-speach-bubbles"></i>
      <span>
        Please select a conversation on the left to begin.
      </span>
    </h1>
  </div>
  
  <div class="content" id="message_content_section">
		<div class="contact-profile d-flex justify-content-between">
			<div class="contact-profile-left d-flex justify-content-center align-items-center">
				<img src="https://i.pravatar.cc/150?u=21" alt="" />
				<p class="mb-0">Harvey Specter</p>
			</div>
			<div class="contact-profile-left">
				<div class="social-media">
					<i class="fa fa-facebook" aria-hidden="true"></i>
					<i class="fa fa-twitter" aria-hidden="true"></i>
					 <i class="fa fa-instagram" aria-hidden="true"></i>
				</div>
			</div>
		</div>
		<div class="messages" id="messages_box">
			<ul>
				<li class="sent">
					<img src="https://i.pravatar.cc/150?u=24" alt="" />
					<p>How the hell am I supposed to get a jury to believe you when I am not even sure that I do?!</p>
				</li>
				<li class="replies">
					<img src="https://i.pravatar.cc/150?u=21" alt="" />
					<p>When you're backed against the wall, break the god damn thing down.</p>
				</li>
				<li class="replies">
					<img src="https://i.pravatar.cc/150?u=21" alt="" />
					<p>Excuses don't win championships.</p>
				</li>
				<li class="sent">
					<img src="https://i.pravatar.cc/150?u=24" alt="" />
					<p>Oh yeah, did Michael Jordan tell you that?</p>
				</li>
				<li class="replies">
					<img src="https://i.pravatar.cc/150?u=21" alt="" />
					<p>No, I told him that.</p>
				</li>
				<li class="replies">
					<img src="https://i.pravatar.cc/150?u=21" alt="" />
					<p>What are your choices when someone puts a gun to your head?</p>
				</li>
				<li class="sent">
					<img src="https://i.pravatar.cc/150?u=24" alt="" />
					<p>What are you talking about? You do what they say or they shoot you.</p>
				</li>
				<li class="replies">
					<img src="https://i.pravatar.cc/150?u=21" alt="" />
					<p>Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
				</li>
			</ul>
		</div>
		<div class="message-input">
			<div class="wrap">
				<!-- <input type="text" placeholder="Write your message..." />
				<i class="fa fa-paperclip attachment" aria-hidden="true"></i>
				<button class="submit"><i class="fa fa-send" aria-hidden="true"></i></button> -->
				<div class="send_message_wrapper">
					<input type="text" id="send_message_input" class="form-control emojiable-question"/>
					<span class="left_icon d-flex">
						<i class="fa fa-image ml-2 mb-2 fa-lg image_icon"></i>
						<i class="fa fa-smile-o ml-2 mb-2 fa-lg emoji_icon" id="emoji_picker"></i>
						<i class="fa fa-folder-o ml-2 mb-2 fa-lg folder_icon"></i>  	
					</span>
					<span class="right_icon">
						<button class="submit"><i class="fa fa-send" aria-hidden="true"></i></button>
						<!-- <i class="fa fa-send mb-2 mr-2 fa-lg send_icon submit"></i> -->
					</span>
				</div>
			</div>
		</div>
	</div>
</div>