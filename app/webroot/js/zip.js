$(function() {


    // ポップアップ用のタグを消す
    $('#popup-background').hide();
    $('#zip-sel').hide();

    $('#popup-sel').hide();

    $('#tran-btn').click(function() {

		// リストボックスの選択を全削除
		$("#zip-sel option").each( function(){
	        $(this).remove();
		});

		if ($('#BuserZipCode').val() != false) {
		
        $.get('/Zips/zipList',  {
				'zipcode': $('#BuserZipCode').val()
		}, function(data) {

			if (data.length == 1) {
				$('#BuserKenNameKan').val(data[0].ken_name_kan);
				$('#BuserCityNameKan').val(data[0].city_name_kan);
				$('#BuserTownNameKan').val(data[0].town_name_kan);
			} else if (data.length > 1) {
			
				for(var value of data) {
					$('#zip-sel').append($('<option>')
					.val(value.zip_code + ',' + value.ken_name_kan + ',' + value.city_name_kan + ',' +value.town_name_kan)
					.text(value.zip_code + ':' + value.ken_name_kan + value.city_name_kan + value.town_name_kan));
				}

				$('#zip-sel').fadeIn(100);
				$('#popup-sel').fadeIn(100);
				$('#popup-background').fadeIn(100);
			} else {
				$('#BuserKenNameKan').val("");
				$('#BuserCityNameKan').val("");
				$('#BuserTownNameKan').val("");
			}
			
		});
		
		};
		
	});
	
	// リストが選択されたら
	$('#zip-sel').bind('change',function(e){
		var selectVal = $("#zip-sel").val();
		var sVal=selectVal.split(','); 
		$('#BuserZipCode').val(sVal[0]);
		$('#BuserKenNameKan').val(sVal[1]);
		$('#BuserCityNameKan').val(sVal[2]);
		$('#BuserTownNameKan').val(sVal[3]);
		
		$('#popup-background').fadeOut();
        $('#zip-sel').fadeOut();
        $('#popup-sel').fadeOut();

	});

    // 黒バックグラウンドが選択されたら
    $('#popup-background').bind('click', function(){
        // ポップアップを消すため、タグをフェードアウトさせる
        $('#popup-background').fadeOut();
        $('#zip-sel').fadeOut();
        $('#popup-sel').fadeOut();

	});

	
	
});


	


