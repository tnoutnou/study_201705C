$(function() {

    $('#tran-btn').click(function() {
        
        $.get('/cakephpe/Zips/zipList',  {
				'zipcode': $('#BuserZipCode').val()
		}, function(data) {
            $('#BuserKenNameKan').val(data.ken_name_kan);
            $('#BuserCityNameKan').val(data.city_name_kan);
            $('#BuserTownNameKan').val(data.town_name_kan);
		});
	});
});


	


