
$(document).ready(function(){
	$('#manage-hotel').Tabledit({
		deleteButton: true,
		editButton: false,   		
		columns: {
		  identifier: [0, 'id'],                    
		  editable: [[1, 'name'], [2, 'phone'], [3, 'email'], [4, 'address'], [5, 'gstin']]
		},
		hideIdentifier: false,
		url: 'inc/edit.php?stat=h'		
	});
});
