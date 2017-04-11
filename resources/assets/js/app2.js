$('.product#submit')on('click', function() {
	var product = ;
}).ajax({
  method: "POST",
  url: "http://localhost:8000/api/product",
  data: { name: "John", location: "Boston" }
})
  .done(function( msg ) {
    alert( "Data Saved: " + msg );
  });