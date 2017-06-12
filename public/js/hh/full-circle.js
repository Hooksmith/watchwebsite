/**
 * Created Date: 08 Nov 2016
 * Create By : Flexitech Cambodia Team
 */

//  restaurant view controller
app.controller('fullCircleCtrl', function($rootScope, $scope, $http, $timeout, CryptService, Request, genfunc, Facebook, $location) {

   

    $scope.myFunc = function() {
    	// var sheet = document.createElement('style');
		// sheet.innerHTML = ""
		$('.btnSubmit img').css('opacity',1);
		$('.btnSubmit img').css('margin-top','1.5em');
		$('.btnSubmit img').css('width','1.5em');
		$('.btnSubmit .text').css('opacity',0);
    }
    // $(function(){

    // })

});
