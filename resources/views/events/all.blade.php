@extends('layouts.admin')

@section('styles')
<link href="{{ asset('../resources/assets/css/calendar.css') }}" rel="stylesheet">
@endsection
@section('content')

<div class="container-fluid">
	<div class="row">
		<div class="col-xs-12">
			<div class="custom-calendar-wrap">
				<div class="custom-header clearfix">
					<h3 class="custom-month-year">
						<span id="custom-month" class="custom-month">Septiembre</span>
						<span id="custom-year" class="custom-year">2015</span>
						<nav>
							<div class="btn-group" role="group">
								<button class="btn btn-default" id="custom-prev">
									<i class="fa fa-chevron-left"></i>
								</button>
								<button class="btn btn-default" id="custom-next">
									<i class="fa fa-chevron-right"></i>
								</button>
							</div>
							<button class="btn btn-info" id="custom-current" title="Hoy">
								<i class="fa fa-map-marker"></i>
							</button>
							<button class="btn btn-primary">
								<i class="fa fa-plus"></i>
							</button>
						</nav>
					</h3>
				</div>
				<div id="calendar" class="fc-calendar-container"></div>
			</div>
		</div>
	</div>
</div>
@endsection
@section('scripts')
<script src="{{ asset('../resources/assets/js/jquery.calendar.js') }}"></script>
<script src="{{ asset('../resources/assets/js/modernizr.custom.js') }}"></script>
<script>
	var codropsEvents = {
	'11-23-2015' : '<a href="http://tympanus.net/codrops/2015/11/23/three-script-updates/">Three Script Updates</a>',
	'11-21-2015' : '<a href="http://tympanus.net/codrops/2015/11/21/adaptive-thumbnail-pile-effect-with-automatic-grouping/">Adaptive Thumbnail Pile Effect with Automatic Grouping</a>',
	'11-20-2015' : '<a href="http://tympanus.net/codrops/2015/11/20/learning-principles-for-improving-your-css/">Learning Principles for Improving Your CSS</a>',
	'11-19-2015' : '<a href="http://tympanus.net/codrops/2015/11/19/responsive-css-timeline-with-3d-effect/">Responsive CSS Timeline with 3D Effect</a>',
	'11-14-2015' : '<a href="http://tympanus.net/codrops/2015/11/14/creative-css-loading-animations/">Creative CSS Loading Animations</a>',
	'11-13-2015' : '<a href="http://tympanus.net/codrops/2015/11/13/baraja-a-plugin-for-spreading-items-in-a-card-like-fashion/">Baraja: A Plugin for Spreading Items in a Card-Like Fashion</a>',
	'11-12-2015' : '<a href="http://tympanus.net/codrops/2015/11/12/mobile-design-typography-is-vitally-important-and-challenging/">Mobile Design Typography is Vitally Important … and Challenging</a>',
	'11-09-2015' : '<a href="http://tympanus.net/codrops/2015/11/09/responsive-wordpress-theme-giveaway/">Responsive WordPress Theme Giveaway</a>',
	'11-06-2015' : '<a href="http://tympanus.net/codrops/2015/11/06/gamma-gallery-a-responsive-image-gallery-experiment/">Gamma Gallery: A Responsive Image Gallery Experiment</a>',
	'11-02-2015' : '<a href="http://tympanus.net/codrops/2015/11/02/heading-set-styling-with-css/">Heading Set Styling with CSS</a>',			
	'10-30-2015' : '<a href="http://tympanus.net/codrops/2015/10/30/becoming-device-agnostic/">Becoming Device-Agnostic</a>',
	'10-29-2015' : '<a href="http://tympanus.net/codrops/2015/10/29/elastislide-revised/">Elastislide Revised</a>',
	'10-25-2015' : '<a href="http://tympanus.net/codrops/2015/10/25/kick-start-your-project-a-collection-of-handy-css-snippets/">Kick-Start Your Project: A Collection of Handy CSS Snippets</a>',
	'10-24-2015' : '<a href="http://tympanus.net/codrops/2015/10/24/slit-slider-revised/">Slit Slider Revised</a>',
	'10-23-2015' : '<a href="http://tympanus.net/codrops/2015/10/23/basic-ready-to-use-css-styles/">Basic Ready-to-Use CSS Styles</a>',
	'10-22-2015' : '<a href="http://tympanus.net/codrops/2015/10/22/slicebox-revised/">Slicebox Revised</a><a href="http://tympanus.net/codrops/2015/10/22/managewp-giveaway/">ManageWP Giveaway</a>',
	'10-18-2015' : '<a href="http://tympanus.net/codrops/2015/10/18/creating-off-center-balance-using-asymmetry-in-web-design/">Creating Off-Center Balance: Using Asymmetry in Web Design</a>',
	'10-18-2015' : '<a href="http://tympanus.net/codrops/2015/10/18/snackwebsites-giveaway/">SnackWebsites Giveaway</a>',
	'10-17-2015' : '<a href="http://tympanus.net/codrops/2015/10/17/pfold-paper-like-unfolding-effect/">PFold: Paper-Like Unfolding Effect</a>',
	'10-16-2015' : '<a href="http://tympanus.net/codrops/2015/10/16/custom-login-form-styling/">Custom Login Form Styling</a>',
	'10-15-2015' : '<a href="http://tympanus.net/codrops/2015/10/15/the-unwritten-rules-of-a-great-design-critique/">The Unwritten Rules of a Great Design Critique</a>',
	'10-11-2015' : '<a href="http://tympanus.net/codrops/2015/10/11/foobox-wordpress-plugin-giveaway/">FooBox WordPress Plugin Giveaway</a><a href="http://tympanus.net/codrops/2015/10/11/real-time-geolocation-service-with-node-js/">Real-Time Geolocation Service with Node.js</a><a href="http://tympanus.net/codrops/2015/10/11/busting-that-creative-slump-youre-in/">Busting that Creative Slump You&#8217;re In</a>',
	'10-09-2015' : '<a href="http://tympanus.net/codrops/2015/10/09/windy-a-plugin-for-swift-content-navigation/">Windy: A Plugin for Swift Content Navigation</a>',
	'10-04-2015' : '<a href="http://tympanus.net/codrops/2015/10/04/custom-drop-down-list-styling/">Custom Drop-Down List Styling</a>',
	'10-02-2015' : '<a href="http://tympanus.net/codrops/2015/10/02/freebie-application-icon-set-png-psd-csh/">Freebie: Application Icon Set (PNG, PSD, CSH)</a>',
	'10-01-2015' : '<a href="http://tympanus.net/codrops/2015/10/01/vertical-showcase-slider-with-jquery-and-css-transitions/">Vertical Showcase Slider with jQuery and CSS Transitions</a>',
	'09-28-2015' : '<a href="http://tympanus.net/codrops/2015/09/28/stop-look-click-attention-grabbing-elements-in-web-design/">Stop, Look, Click: Attention-Grabbing Elements in Web Design</a>',
	'09-26-2015' : '<a href="http://tympanus.net/codrops/2015/09/26/make-a-statement-with-type/">Make a Statement with Type</a>',
	'09-25-2015' : '<a href="http://tympanus.net/codrops/2015/09/25/3d-restaurant-menu-concept/">3D Restaurant Menu Concept</a>',
	'09-20-2015' : '<a href="http://tympanus.net/codrops/2015/09/20/dashboard-design-elements-for-the-win/">Dashboard Design Elements for the Win</a>',
	'09-19-2015' : '<a href="http://tympanus.net/codrops/2015/09/19/fullscreen-video-slideshow-with-bigvideo-js/">Fullscreen Video Slideshow with BigVideo.js</a>',
	'09-17-2015' : '<a href="http://tympanus.net/codrops/2015/09/17/build-a-color-scheme-the-fundamentals/">Build a Color Scheme: The Fundamentals</a>',
	'09-13-2015' : '<a href="http://tympanus.net/codrops/2015/09/13/button-switches-with-checkboxes-and-css3-fanciness/">Button Switches with Checkboxes and CSS3 Fanciness</a><a href="http://tympanus.net/codrops/2015/09/13/compare-ninja-premium-subscription-giveaway/">Compare Ninja Premium Subscription Giveaway</a>',
	'09-12-2015' : '<a href="http://tympanus.net/codrops/2015/09/12/creative-web-typography-styles/">Creative Web Typography Styles</a>',
	'09-11-2015' : '<a href="http://tympanus.net/codrops/2015/09/11/psd2html-professional-coding-services-giveaway/">PSD2HTML Professional Coding Services Giveaway</a>',
	'09-06-2015' : '<a href="http://tympanus.net/codrops/2015/09/06/do-i-really-need-a-style-guide/">Do I Really Need A Style Guide?</a>',
	'09-04-2015' : '<a href="http://tympanus.net/codrops/2015/09/04/perfectly-paired-using-symmetry-in-web-design/">Perfectly Paired: Using Symmetry in Web Design</a>',
	'09-03-2015' : '<a href="http://tympanus.net/codrops/2015/09/03/bookblock-a-content-flip-plugin/">BookBlock: A Content Flip Plugin</a>',
};
	$("#li-events").addClass("active");
	$(function() {
		var transEndEventNames = {
			'WebkitTransition' : 'webkitTransitionEnd',
			'MozTransition' : 'transitionend',
			'OTransition' : 'oTransitionEnd',
			'msTransition' : 'MSTransitionEnd',
			'transition' : 'transitionend'
		},
		transEndEventName = transEndEventNames[ Modernizr.prefixed( 'transition' ) ],
		$wrapper = $( '#custom-inner' ),
		$calendar = $( '#calendar' ),
		cal = $calendar.calendario( {
			onDayClick : function( $el, $contentEl, dateProperties ) {

				if( $contentEl.length > 0 ) {
					showEvents( $contentEl, dateProperties );
				}

			},
			caldata : codropsEvents,
			displayWeekAbbr : true
		} ),
		$month = $( '#custom-month' ).html( cal.getMonthName() ),
		$year = $( '#custom-year' ).html( cal.getYear() );
		$( '#custom-next' ).on( 'click', function() {
			cal.gotoNextMonth( updateMonthYear );
		} );
		$( '#custom-prev' ).on( 'click', function() {
			cal.gotoPreviousMonth( updateMonthYear );
		} );

		function updateMonthYear() {				
			$month.html( cal.getMonthName() );
			$year.html( cal.getYear() );
		}

		// just an example..
		function showEvents( $contentEl, dateProperties ) {
			hideEvents();
			var $events = $( '<div id="custom-content-reveal" class="custom-content-reveal"><h4>Events for ' + dateProperties.monthname + ' ' + dateProperties.day + ', ' + dateProperties.year + '</h4></div>' ),
				$close = $( '<span class="custom-content-close"></span>' ).on( 'click', hideEvents );
			$events.append( $contentEl.html() , $close ).insertAfter( $wrapper );
			setTimeout( function() {
				$events.css( 'top', '0%' );
			}, 25 );
		}
		function hideEvents() {
			var $events = $( '#custom-content-reveal' );
			if( $events.length > 0 ) {				
				$events.css( 'top', '100%' );
				Modernizr.csstransitions ? $events.on( transEndEventName, function() { $( this ).remove(); } ) : $events.remove();
			}
		}			
	});
</script>
@endsection
