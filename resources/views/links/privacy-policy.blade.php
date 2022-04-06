
@extends('layout.base')
@section('banner')
<div class="pagetitle">
	<div class="container">
		
	  <!-- Header  -->
	  {{-- <div class="row">
		  <div class="col-auto pb-4 pb-md-0">
		  		<div class="collaction_img" style=""></div>
		  </div>		  
		  <div class="col">
		  	<h2 class="h2__underline" tabindex="0">About Us</h2>
		  	
		  </div>		  
	  </div> --}}

	</div>
</div>
@endsection
    
@section('content')

<main>


	<div class="container mtb-50">


		<h2 class="headline mtb-10">Privacy Policy</h2>

		<h3>Information Collection and Use</h3>
		<p>A few sections of this web site contain areas where visitors can provide personally identifiable information to iLyrics.org. Such information is stored and used to track activity on this web site. iLyrics also will use this information to contact you when you request information about iLyrics.</p>
		<h3>Cookies</h3>
		<p>iLyrics Website uses cookies (small pieces of information stored by a browser on your computer or mobile phone) for several reasons: to authenticate those using the Stay &amp; Play Directory; to gather statistical information; and to personalize information for visitors on the website using customer preferences as well as a visitor’s location. In this way we can improve our site and our advertisements by recognizing our return visitors and follow what pages they access, as well as to monitor how effective our advertisements are at inspiring you to visit iLyrics. iLyrics does not correlate that information with individual users, but rather just tracks user patterns in general. iLyrics does this in order to study the usefulness of the content to our visitors and to see if the navigational structure is helpful in getting you to the information you seek. If you wish to opt out of cookies that allow us to serve our advertisements while you are in iLyrics, and collect aggregate information on arrivals, you may set your browser to reject cookies entirely or request permission from you before accepting each new cookie. You may also remove cookies by clearing your cache or web history in your device settings.</p>
		<h3>The Stay &amp; Play Directory</h3>
		<p>The information collected is used to provide our visitors with this service. Information on interests, preferences, etc. is used to assure that they see the information that is relevant and useful to them. Email addresses are collected to confirm the identity of the person registering and to supply password reminders. We may use these addresses to send out updates as new features are added to the itinerary planner or other areas of the site. Mailing may be sent by iLyrics.org in partnership with other relevant collections such as the iLyrics to provide relevant information on visiting iLyrics.</p>
		<h3>How We Use Your Information</h3>
		<p>Generally speaking, we use your information to provide and enhance a positive user experience throughout our website. Some ways we may use your information include but not limited to:</p>
		<ul>
			<li>to provide, personalize, and improve our website's user experience via enhancements or new features</li>
			<li>to communicate with you, including to respond to your comments or questions, and to send you updates regarding collections in iLyrics</li>
			<li>to understand your use of our website to help us improve the customer experience</li>
		</ul>
		<h3>How We Share Your Information</h3>
		<p>If we share your information, we do so only as described below.</p>
		<p><strong>With visitor, users, and advertising partners</strong><br>
			We may provide your information to our contractors and service providers as necessary to enable them to perform certain services for us, including but not limited to:</p>
		<ul>
			<li>improvement of website-related services and features</li>
			<li>data analytics to help us determine performance</li>
			<li>data analysis of user patterns to predict the preferences and attribution of future users</li>
			<li>maintenance services</li>
		</ul>
		<p>One of the third-party services that we use to track your activity on our website is Google Analytics. If you do not want Google Analytics to collect and use information about your use of our website, then you can <a href="https://tools.google.com/dlpage/gaoptout" target="_blank">install an opt-out in your web browser</a>.
			<p>Please note that all information collected by this web site, is sbject to the statutory provisions related to public access to information.</a> at any time.</p>
			<h3>Disclaimer</h3>
			<p>iLyrics officers or employees do not warrant the accuracy, reliability, or timeliness of any information published on this web site, do not endorse any products or services linked to or from this web site, and shall not be held liable for any losses caused by reliance upon the accuracy, reliability or timeliness of such information, or losses caused by or related to such products or services. Portions of the information contained in this web site may not be correct or current. Any person or entity that relies on any information obtained from this web site does so at his or her own risk.</p>

	</div>


</main>
{{-- <x-tags :tags="$tags"/>
<x-genres :genres="$genres"/> --}}
@endsection
@push('audio-styles')
<link rel="stylesheet" href="{{ asset('audio_player/audioplayer.css')}}">
	
@endpush
@push('audio-scripts')
<script src="{{ asset('audio_player/audioplayer.js')}}"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());
  gtag('config', 'UA-176923350-1');
 </script>
@endpush
