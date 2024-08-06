// Call the dataTables jQuery plugin
$(document).ready(function() {

	$('.dataTable').DataTable({
		'language' : {
			'url' : 'https://cdn.datatables.net/plug-ins/1.11.3/i18n/pt_br.json'
		},

		responsive : true,
		'aoColumnDefs' : [{
			'bSortable' : false,
			'aTargets' : ['no-sort']
		}]
	});
  });
