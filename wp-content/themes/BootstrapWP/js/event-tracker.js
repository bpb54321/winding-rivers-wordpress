function main(jQuery) {

	jQuery('#facebook-button').click( function() {

		//Send social hit to Google Analytics
		/*ga('send', {
		  hitType: 'social',
		  socialNetwork: 'Facebook',
		  socialAction: 'visit',
		  socialTarget: 'https://www.facebook.com/StLouisEcovillageNetwork'
		});	*/

		//Send generic event interaction data
		ga('send', {
		  hitType: 'event',
		  eventCategory: 'Social Buttons',
		  eventAction: 'click',
		  eventLabel: 'Visit Us on Facebook'
		});
	});
}
 

jQuery(document).ready( main );