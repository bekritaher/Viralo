// Remove Items From Cart
$(document).ready(function(){
$('#quantite').change(function(){
	$('.PT').html('baguer');
})
});

$('a.remove').click(function(){
  event.preventDefault();
  $( this ).parent().parent().parent().hide( 400 );
 
})

// Just for testing, show all items
  $('a.btn.continue').click(function(){
    $('li.items').show(400);
  })