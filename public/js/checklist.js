$(document).ready(function(){
  // CSRF Token
  var token = $('meta[name="csrf-token"]').attr('content');
  $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
  });
  // edit checklist
  $('.edit_checklist').editable('checklist/update',{
	   indicator: 'saving...',
	   tooltip: 'click to edit',
	   name: 'checklist',
	   cssClass: 'form-control',
	   style: 'inherit',
	   submitdata: {
		   '_token': token,
		   'id' : $(this).attr('data-id'),
	   }
  });
   // edit ingredient
  $('.edit_ingredient').editable('ingredient/update',{
	   indicator: 'saving...',
	   tooltip: 'click to edit',
	   name: 'ingredient',
	   cssClass: 'form-control',
	   style: 'inherit',
	   submitdata: {
		   '_token': token,
		   'id' : $(this).attr('data-id'),
	   }
  });
  
  // hide the form
 $('.new-checklist').hide();
 
 // for add new checklist
 $(document).on('click','.add_check',function(e){
	 e.preventDefault();
		$('.new-checklist').show(1000);
	
 });
$(document).on('click','.btn-submit',function(e){
	 e.preventDefault();
	   
	 var checkval = $('.check-title').val();
	 
	 
	 $.ajax({
		url:'checklist/create',
		type: 'POST',
		data: {'_token': token,'checklist': checkval},
		success:function(response){
			res = response;
			if(res.return == "success"){
				//$('.new-checklist').hide(); to hide the form
				
				//
				window.location="/checklist";
			}
		 	
		} 
	 });
	
 });
 
 
}); 