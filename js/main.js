
jQuery(document).ready(function() {


	$(document).ready( function () {
		var table = $('#datatable-affiches').DataTable({
			"pageLength": 25
		});

		// delete
		$('#datatable-affiches tbody').on('click', '.suppr', function () {
			var id = $(this).data("affid");
			var row = $(this).parent().parent();
			if (confirm('Etes-vous sûr de vouloir supprimer cette affiche ?')) {
				$.ajax({
					type: 'POST',
					url: './queries/delete.php',
					data: {
						id: id
					},
					success: function(result) {
						row.hide();
					},
					error: function(){
						console.log('Operation failed');
					}
				});
			}
		} );

		// sell
		$('#datatable-affiches tbody').on('click', '.sell', function () {
			var id = $(this).data("affid");
			var row = $(this).parent().parent();
			console.log(row);
			if (confirm('Etes-vous sûr de vouloir vendre cette affiche ?')) {
				$.ajax({
					type: 'POST',
					url: './queries/sell.php',
					data: {
						id: id
					},
					success: function(result) {
						row.hide();
					},
					error: function(){
						console.log('Operation failed');
					}
				});
			}
		} );

		// edit
		$('#datatable-affiches tbody').on('click', '.edit', function () {
			
			var row = $(this).parent().parent();
			var data = table.row( row ).data();

			// Update id
			$('#update-id').text(data[0]);
			$('#update-id-field').val(data[0]);

			// fields
			$('#update-film-field').val(data[1]);
			$('#update-cinema-field').val(data[2]);
			$('#update-real-field').val(data[3]);
			$('#update-etat-field').val(data[4]);
			$('#update-taille-field').val(data[5]);
			$('#update-prix-field').val(data[6]);

			$('#openform-background').addClass('dblock');
			setTimeout(function() {
				$('#openform-background').addClass('opened');
			}, 10); 
			setTimeout(function() {
				$('#update-form').addClass('opened');
			}, 500); 
		} );


		$("#addnew").on("click", function () {
			$('#openform-background').addClass('dblock');
			setTimeout(function() {
				$('#openform-background').addClass('opened');
			}, 10); 
			setTimeout(function() {
				$('#addnew-form').addClass('opened');
			}, 500); 
		});

		$("#close-addform").on("click", function () {
			$('#openform-background').removeClass('opened');
			setTimeout(function() {
				$('#addnew-form').removeClass('opened');
			}, 10); 
			setTimeout(function() {
				$('#openform-background').removeClass('dblock');
			}, 500); 
		});
		$("#close-updateform").on("click", function () {
			$('#openform-background').removeClass('opened');
			setTimeout(function() {
				$('#update-form').removeClass('opened');
			}, 10); 
			setTimeout(function() {
				$('#openform-background').removeClass('dblock');
			}, 500); 
		});
	} );


});
	

