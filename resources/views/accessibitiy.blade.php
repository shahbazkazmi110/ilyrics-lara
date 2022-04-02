
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

		<h2 class="headline mtb-10">Accessibility Policy</h3>




			<br>
			<div class="content">
				<h4>Americans with Disabilities Act Purpose Grievance Procedure</h4>

				<p>The following grievance procedure is established to meet the requirements of the Americans with Disabilities Act (ADA) and/or the ADA Amendments Act (ADAAA). It is intended to provide prompt and equitable resolution of complaints alleging any violation of the ADA/ADAAA by a department, agency, or instrumentality of the Executive Branch of the government of the State of Vermont by reason of employment practices and policies or the provision of services, activities, programs, and benefits. This Grievance Procedure is available to State employees, applicants for employment with the Executive Branch of the State of Vermont, and to the public.</p>

				<p><a href="https://humanresources.vermont.gov/sites/humanresources/files/documents/Labor_Relations_Policy_EEO/Policy_Procedure_Manual/Number_10.2_ADA_GRIEVANCE_PROCEDURE.pdf" target="_blank">Americans with Disabilities Act (ADA) ADA Amendments Act (ADAAA) Grievance Procedure (PDF)</a></p>

				<h4>Policy Statement</h4>

				<p>This policy provides a set of established guidelines adopted by Vermont.gov, a checklist of design considerations and additional references. The checklist provides a quick reference for numerous design issues. Additional references are provided for those who wish to gain a broader understanding of disability and accessibility issues.</p>

				<p>Vermont.gov has adopted Section 508 and W3C Web Accessibility Initiative standards and guidelines as the benchmark to meet the objectives of the Universal Accessibility for State Web sites policy. These published Section 508 guidelines where published to the federal register on December 21, 2000 and will be implemented in portals by June 21, 2001. The Access Board (the federal board assigned to create Section 508 standards) used the W3C Web Accessibility Initiative guidelines as the benchmark for developing their standards. For more information about the Access Board and guidelines visit their Web site <a href="http://www.access-board.gov">http://www.access-board.gov</a> .</p>

				<p>Vermont has adopted the Design of HTML Pages to increase accessibility to users with disabilities as the primary guideline to meet the objectives of the Universal Access for State Design policy. These published guidelines are maintained by professionals trained in the area of assistive and information technology.</p>

				<p>Vermont embraces these standards and will be evaluating our site on a regular basis, increasing the opportunity for all individuals to access information over the Internet. The Universal Access Design Standards are being integrated into Vermont.gov and will continue to evolve as new technologies and opportunities emerge.</p>

				<ol>
					<li>A text equivalent for every non-text element shall be provided via "alt" (alternative text attribute), "longdesc" (long description tag), or in element content.</li>
					<li>Web pages shall be designed so that all information required for navigation or meaning is not dependent on the ability to identify specific colors.</li>
					<li>Changes in the natural language (e.g., English to French) of a document's text and any text equivalents shall be clearly identified.</li>
					<li>Documents shall be organized so they are readable without requiring an associated style sheet.</li>
					<li>Web pages shall update equivalents for dynamic content whenever the dynamic content changes.</li>
					<li>Redundant text links shall be provided for each active region of a server-side image map.</li>
					<li>Client-side image maps shall be used whenever possible in place of server-side image maps.</li>
					<li>Data tables shall provide identification of row and column headers.</li>
					<li>Markup shall be used to associate data cells and header cells for data tables that have two or more logical levels of row or column headers.</li>
					<li>Frames, if used, shall be titled with text that facilitates frame identification and navigation. Whenever possible, the use of frames will be avoided.</li>
					<li>Pages shall be usable when scripts, applets, or other programmatic objects are turned off or are not supported, or shall provide equivalent information on an alternative accessible page.</li>
					<li>Equivalent alternatives for any multimedia presentation shall be synchronized with the presentation.</li>
					<li>An appropriate method shall be used to facilitate the easy tracking of page content that provides users of assistive technology the option to skip repetitive navigation links.</li>
					<li>Background colors will be avoided since color schemes can create problems with legibility.</li>
					<li>Multiple browser testing will be conducted on the current versions of all vendor-supported browsers composing at a minimum 3 percent of total usage on the site. Currently, these browsers include Google Chrome 49+, Safari 8+, Internet Explorer 9+ and Firefox versions 46+.</li>
					<li>Vermont.gov also requires that your browser accepts cookies from the vermont.gov and state.vt.us domain names and that javascript is enabled. If <a href="http://www.enable-javascript.com">Javascript is not enabled, please enable it </a>and reload this page.</li>
					<li>The Official Web Site of the State of Vermont will have descriptive, intuitive text links and avoid the use of vague references such as "click," "here," "link," or "this."</li>
				</ol>
				<p>In addition to the Web Content Accessibility Guidelines, the portal recognizes Section 508 standards are more specific in specific areas:</p>

				<ul>
					<li>Flicker 1194.22 (j) Pages shall be designed to avoid causing the screen to flicker with a frequency greater than 2 Hz and lower than 55 Hz.</li>
					<li>Skip Navigation 1194.22 (o) A method shall be provided that permits users to skip repetitive navigation links.</li>
				</ul>
				<h4>Checklist of Design Considerations</h4>

				<p>The following list has been compiled from various sources. The purpose of this list is to provide a summary of the types of issues to consider when creating and designing accessible HTML pages.</p>

				<ul>
					<li><a href="#universal">Universal Design</a></li>
					<li><a href="#text">Text-Based Design</a></li>
					<li><a href="#graphics">Graphics and Images</a></li>
					<li><a href="#audio">Audio/Video Features</a></li>
				</ul>
				<p><a name="universal" id="universal"></a></p>

				<h4>Universal Design</h4>

				<ol>
					<li>Maintain a standard page layout throughout the site.</li>
					<li>Avoid the unnecessary use of icons, graphics and photographs.</li>
					<li>Use plain backgrounds and simple layouts to improve the readability of text.</li>
					<li>Provide a text-only index of your site.</li>
					<li>Include textual as well as graphical navigation aids.</li>
					<li>Whenever possible, do not abbreviate dates; e.g., use December 1, 1996 rather than 12/1/96</li>
					<li>Test your web pages with a variety of web browsers; including graphical browsers with the images turned off and a text based browser, if possible.</li>
					<li>Avoid/Limit the use of HTML tags or extensions which are supported by only one browser.</li>
					<li>Check images at different resolutions and color depths.</li>
					<li>Hyperlinks to downloadable files should include a text description that includes the file type.</li>
					<li>Consider the development of a text-only version of the document or site to facilitate access not only by people with visual impairments, but users of non-graphical browsers or slow Internet connections.</li>
				</ol>
				<p><a name="text" id="text"></a></p>

				<h4>Text-Based Design</h4>

				<ol>
					<li>End all sentences, headers, list items, etc. with a period or other suitable punctuation.</li>
					<li>Avoid/Limit using side by side presentation of text, e.g., columns and tables; Consider using preformatted text which is available in all versions of HTML and can be displayed with all type of browsers.</li>
					<li>Minimize the number of hyperlinks that appear in a single line of text - one hyperlink is best; consider using vertical lists for links wherever possible.</li>
					<li>Avoid/Limit the use of bitmap images of text.</li>
					<li>Consider beginning lists with a descriptive identifier and the number of items so the users will have an idea of what the list represents and the total length of the list. Using numbers instead of bullets will also help the user to remember items that interest them.</li>
					<li>Provide meaningful and descriptive text for hyperlinks, don't use short hand, e.g. "click here". (Screen readers can search specifically for linked text, "click here" provides no indication of where the link will take them.)If documents are provided in a specialized format (e.g. PDF, etc.) provide the equivalent text in ASCII or HTML format.</li>
				</ol>
				<p><a name="graphics" id="graphics"></a></p>

				<h4>Graphics and Images</h4>

				<ol>
					<li>Keep the number of colors in your images to a minimum.</li>
					<li>Minimize the file size and number of images you display on any one page.</li>
					<li>Design your background image, when one must be used, at the lowest color depth and resolution you can.</li>
					<li>Ensure that text can always be clearly read at any location against the background.</li>
					<li>Avoid/Limit using image maps; provide an alternate text-based method of selecting options when image maps are used, e.g., separate HTML page or menu bar.</li>
					<li>Use the [ALT] option within image tags to provide associated text for all images, pictures and graphical bullets.</li>
					<li>Consider using described images: provide a hyperlink (the capital letter D is being used at various sites) to a short paragraph describing the image.</li>
					<li>If image files are used for graphical bullets in place of standard HTML, it is best to use a bullet character like an asterisk "*" or "o" in the ALT = text field of the &lt;IMG&gt; tag (rather than describing the bullet as: "This is a small purple square").</li>
				</ol>
				<p><a name="audio" id="audio"></a></p>

				<h4>Audio/Video Features</h4>

				<ol>
					<li>Provide text transcriptions or descriptions of all video clips.</li>
					<li>If possible include captions or text tracts with a description or sounds of the movie.</li>
					<li>Provide descriptive passages about speakers and events being shown through video clips.</li>
					<li>Give a written description of any critical information that is contained in audio files contained on your Web site.</li>
					<li>If you link to an audio file directly, inform the user of the audio file format and file size in kilobytes.</li>
				</ol>
				<p>Emerging or newer technologies including RSS, Podcasting, and XML streams may be used, but should be accompanied by instructions on how to use the data. Alternative means for systems not capable of using these data streams should be provided, this may include descriptions, transcripts, and other text-based alternatives.</p>

				<h4>Additional References</h4>

				<p>The following are provided as references for Universal Web site Accessibility issues.</p>

				<ul>
					<li><a href="#law">The Law</a></li>
					<li><a href="#external">External Resources</a></li>
				</ul>
				<p><a name="law" id="law"></a></p>

				<h4>The Law</h4>

				<ul>
					<li><a href="http://www.section508.gov/">http://www.section508.gov/</a><br>
						The Section 508 Web Site is an excellent source for general information, standards, evaluation, events, and resources surrounding Section 508, which will impact electronic and information technology on the Web.</li>
					<li><a href="http://www.usdoj.gov/crt/508/508law.html">http://www.usdoj.gov/crt/508/508law.html</a><br>
						Section 508 of the Rehabilitation Act, as amended for the Workforce Investment Act of 1998. The content of this document directly relates to the Federal government and any public or private industry contracting with the Federal government.</li>
					<li><a href="http://www.ada.gov/enforce_current.htm">http://www.usdoj.gov/crt/ada/enforce.htm</a><br>
						Enforcing ADA compliance - The Department of Justice handles complaints and enforcement</li>
					<li><a href="http://www.usdoj.gov/crt/ada/t2hlt95.htm">http://www.usdoj.gov/crt/ada/t2hlt95.htm</a><br>
						Title II, Section 508 speaks directly to state, local governments and all other public entities. This highlights page provides a concise overview, abbreviated information on specific chapters that must comply with ADA standards and information about the complaint and enforcement process.</li>
				</ul>
				<p><a name="external" id="external"></a></p>

				<h4>External Resources</h4>

				<ul>
					<li><a href="http://trace.umd.edu/publications/central-reference-document-version-8-unified-web-site-accessibility-guidelines">Designing Universal Accessible websites</a><br>
						A meta-index page by the Trace Research and Development Center.</li>
					<li><a href="https://webaim.org/techniques/javascript/">JavaScript Accessibility Issues</a></li>
					<li><a href="https://www.w3.org/WAI/tips/writing/">Guide to Writing Accessible HTML</a><br>
						developed by the W3C Web Accessibility Initiative (WAI).</li>
					<li><a href="http://www.washington.edu/doit/">DO-IT HTML Guidelines</a><br>
						by Disabilities, Opportunities, Internetworking &amp; Technology at the University of Washington.</li>
					<li><a href="http://www.adobe.com/accessibility/index.html">Adobe Accessibility Resource Center</a><br>
						Resources and guidelines on accessibility issues affecting Adobe products including Acrobat and Flash.</li>
				</ul>
			</div>
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
