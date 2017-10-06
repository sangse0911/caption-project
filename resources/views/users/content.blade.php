
<h3>
	All User
</h3>
<div class="container">
	<div class="row" id="page-id"></div>
	<div class="row">
		<button type="button" name="" id="json-click">BUTTON</button>
	</div>
	<script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script>

		$('#json-click').click(function() {
			$.ajax({
				type: 'GET',
				url: '/api/user',
				dataType: 'JSON',
				success: function(result) {
					var html ='';
					html += '<table class="table table-striper table-hover">';
					html += '<tr>';
					html += '<th>';
					html += 'ID';
					html += '</th>';
					html += '<th>';
					html += 'Name';
					html += '</th>';
					html += '<th>';
					html += 'Balance';
					html += '</th>';
					html += '</tr>';

					$.each(result, function(key, value) {
						html += '<tr>';
						html += '<td>';
						html += value['id'];
						html += '</td>';
						html += '<td>';
						html += value['name'];
						html += '</td>';
						html += '<td>';
						html += value['account_balance'];
						html += '</td>';
						html += '</tr>';
					});
					html += '</table>';
					//$('#page-id').html(html);
					console.log(result);
				}
			});
		});
	</script>
