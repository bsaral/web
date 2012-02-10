Date.createFromMysql = function(mysql_string)
{
   if(typeof mysql_string === 'string')
   {
      var t = mysql_string.split(/[- :]/);

      //when t[3], t[4] and t[5] are missing they defaults to zero
      return new Date(t[0], t[1] - 1, t[2], t[3] || 0, t[4] || 0, t[5] || 0);
   }

   return null;
}

$(function(){
	$('#pstime').datetimepicker({
	    dateFormat: 'yy-mm-dd',
	    timeFormat: 'hh:mm:ss',
	    onClose: function(dateText, inst) {
	        var endDateTextBox = $('#petime');
	        if (endDateTextBox.val() != '') {
	            var testStartDate = new Date(dateText);
	            var testEndDate = new Date(endDateTextBox.val());
	            if (testStartDate > testEndDate)
	                endDateTextBox.val(dateText);
	        }
	        else {
	            endDateTextBox.val(dateText);
	        }
	    },
	    onSelect: function (selectedDateTime){
	        var start = $(this).datetimepicker('getDate');
	        $('#petime').datetimepicker('option', 'minDate', new Date(start.getTime()));
	    }
	});

	$('#petime').datetimepicker({
	    dateFormat: 'yy-mm-dd',
	    timeFormat: 'hh:mm:ss',
	    onClose: function(dateText, inst) {
	        var startDateTextBox = $('#pstime');
	        if (startDateTextBox.val() != '') {
	            var testStartDate = new Date(startDateTextBox.val());
	            var testEndDate = new Date(dateText);
	            if (testStartDate > testEndDate)
	                startDateTextBox.val(dateText);
	        }
	        else {
	            startDateTextBox.val(dateText);
	        }
	    },
	    onSelect: function (selectedDateTime){
	        var end = $(this).datetimepicker('getDate');
	        $('#pstime').datetimepicker('option', 'maxDate', new Date(end.getTime()) );
	    }
	});

$.datepicker.regional['tr'] = {
	closeText: 'Kapat',
	prevText: '<Önceki',
	nextText: 'Sonraki>',
	currentText: 'Bugün',
	monthNames: ['Ocak','Şubat', 'Mart', 'Nisan','Mayıs', 'Haziran', 'Temmuz',
			'Ağustos', 'Eylül', 'Ekim', 'Kasım', 'Aralık'],
	monthNamesShort: ['O', 'Ş', 'Mr', 'N', 'My', 'H', 'T', 'Ağ', 'Ey', 'Ek', 'K', 'Ar'],
	dayNames: ['Pazar', 'Pazartesi', 'Salı', 'Çarşamba', 'Perşembe', 'Cuma', 'Cumartesi'],
	dayNamesShort: ['Pz', 'Pt', 'S', 'Ç', 'Pş', 'Cm', 'Ct'],
	dayNamesMin: ['Pz', 'Pt', 'S', 'Ç', 'Pş', 'Cm', 'Ct'],
	weekHeader: 'Ha',
	dateFormat: 'dd.mm.yy',
	firstDay: 1,
	isRTL: false,
	showMonthAfterYear: false,
	yearSuffix: ''
};
$.datepicker.setDefaults($.datepicker.regional['tr']);

$.timepicker.regional['tr'] = {
	timeOnlyTitle: 'Zaman',
	timeText: 'Zaman',
	hourText: 'Saat',
	minuteText: 'Dakika',
	secondText: 'Saniye',
	millisecText: 'Milisaniye',
	currentText: 'Şu an',
	closeText: 'Kapat',
	ampm: false
};
$.timepicker.setDefaults($.timepicker.regional['tr']);
});
