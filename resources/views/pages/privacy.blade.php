@extends('app')

@section('content')
	<div class="container">
		<h1>PLEASE READ CAREFULLY BEFORE USING OPENLITTERMAP.COM:</h1>
		<p>
			<i>{{ __('app.last_updated_14') }}<sup>th</sup>{{ __('app.april_2017') }}</i>
		</p>
		<br>

		<h1>Privacy Policy of OpenLitterMap.com</h1>
		<br>
		<p>Our Services provide volunteers (Citizen Scientists) with a means to share information on occurrences of litter through geotagged imagery. Geotagged images have a spatial (a specific, typically centimeter-accurate GPS Lat/Long position) reference as well as a specific time-stamp (Year-month-day HH:MM:SS), which can be used to determine exactly where and when an occurrence of litter was identified- thus showing the location of a contributor at any point in time and potentially revealing information about the spatial patterns of a contributor or many contributors and revealing the location of hotspots and irregular occurrences of hazardous material such as drug-related litter (eg. needles, injecting equipment). A specific litter item can be shown individually and/or abstracted to a dynamically-sized hexagonal grid to analytically characterize the presence of litter, or abstractively perhaps even the illicit consumption of toxic substances. Once these images are shared with us, and only geotagged images can pass, the volunteer must properly attribute each image (eg. Determine x items of litter in x number of photos through the user of their Profile (https://openlittermap.com/profile) and once the image and its’ contents are attributed, each image must be submitted for crowdsourced verification. The verified images, their location and the time the image was captured will be mapped, spatially analyzed and the results, the images, the make/model of the device (which is an indication of spatial accuracy eg. iPhones (5+) are currently typically superior in spatial accuracy and temporal GPS-revisit frequency to Android) and their contents will be made public for guests or authenticated users of the website. Each image can account for only 1 point on the map which when clicked, will show the image which can be viewed in high-resolution, as well as its contents, the make and/or model of the device and although all images will be submitted anonymously by default, each contributor has the option to credit either their full name and/or unique Username or Organisation on the verifiable geotagged images they provide. We will maintain the images at our own discretion in accordance with our limited server capacity. However, images that are verified by an Admin and reach stage two verification will be deleted, allowing us to resolve greater volumes of data and keep our costs as low as possible.
		<br>
		<br>
		<br>
		This Privacy Policy describes how and when we collect, share and use your information across the website. By using this website, you authorize us to store and use your information in accordance with this privacy policy. This policy will change from time to time and we will do our best to notify you of these changes and updates once you log into the website and through our social media campaigns @OpenLitterMap (Twitter).</p>
		<br>
		<br>
		<h3>{{ __('app.people_under_the_age_of_13') }}</h3>
		<br>
		<p>{{ __('app.we_do_not') }}</p>
		<br>
		<h3>{{ __('app.people_aged_1317') }}</h3>
		<br>
		<p>{{ __('app.only_with_parental') }}</p>
		<br>
		<h3 style="color: red;">{{ __('app.if_you_require_urgent_medical_treatment') }}</h3>
		<br>
		<p><b>{{ __('app.please_call_112') }}</b></p>
		<br>
		<br>
		<h3>{{ __('app.we_collect_the_following_information') }}</h3>
		<br>
		<p>- Information you provide when you register for an account (eg. Full Name, legitimate and verifiable email address, a unique username or the organisation you are legally entitled to represent)
		<br>{{ __('app.the_images_you_submit') }}<br>{{ __('app.the_metadata_associated_with_the_images') }}<br>{{ __('app.the_attribute_information') }}<br>{{ __('app.cumulate_statistics_and') }}</p>

		<br>
		<h3>{{ __('app.we_do_not_1') }}</h3>
		<p>
			<br>{{ __('app.cookies') }}<br>{{ __('app.your_ip_address') }}<br>{{ __('app.the_website_you') }}<br>{{ __('app.the_type_of_browser_you_are_using') }}<br>{{ __('app.clickstream_data') }}<br>{{ __('app.how_you_use_this_website') }}<br>
		</p>
		<br>
		<h3>{{ __('app.other_people_including') }}</h3>
		<br>
		<p>{{ __('app.by_submitting_data') }}</p>
		<br>
		<h3>{{ __('app.security_and_your_password') }}</h3>
		<br>
		<p>You must choose a strong password at least 6 characters long that contains upper and lower case characters, a number and a symbol. Your password will be encrypted using the best available encryption methods and stored securely on our server. With the one exception of the map on Firefox which requires partial encryption, all of our website runs on an encrypted HTTPS network so the information you provide, including for example credit card information, is fully encrypted with SSL. In fact for credit cards we never touch your card details as we use Stripe for payments. www.stripe.com</p>
		<br>
		<h3>{{ __('app.feedback') }}</h3>
		<br>
		<p>This is a new service. We are happy to hear feedback on this service or privacy policy if you think you can offer us some advice please contact us at info@openlittermap.com</p>
	</div>
	@stop
