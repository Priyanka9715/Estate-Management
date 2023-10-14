
	<link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>

	
<input type="text" placeholder="Select Date Here" class="input"/>
<script>
var disabledDates = ["2022-09-28","2022-09-14","2022-09-21"];

$('.input').datepicker({
	minDate:0,
    beforeShowDay: disableDate
	
	
});
function disableDate(date) {
        var string = jQuery.datepicker.formatDate('yy-mm-dd', date);
        return [ disabledDates.indexOf(string) == -1 ]
    }
</script>