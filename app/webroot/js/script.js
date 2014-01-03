$(document).ready(function () {
	InitTables ();	
    
});



/* *********************************************************************
 * Data Tables
 * *********************************************************************/
function InitTables () {
	$('.datatable').dataTable({
		'bLengthChange': true,
		'bPaginate': true,
		'sPaginationType': 'full_numbers',
		'iDisplayLength': 5,
		'bInfo': false,
		'oLanguage': 
		{
			'sSearch': 'Search all columns:',
			'oPaginate': 
			{
				'sNext': '&gt;',
				'sLast': '&gt;&gt;',
				'sFirst': '&lt;&lt;',
				'sPrevious': '&lt;'
			}
		},		
		'aoColumns': [ 
			{ "bSortable": false },
			null,
			null,
			null
		]	
	});
}






