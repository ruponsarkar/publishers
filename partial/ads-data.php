<script>
    $("#slideshow > div:gt(0)").hide();

setInterval(function() { 
  $('#slideshow > div:first')
  .fadeOut(1000)
  .next()
  .fadeIn(1000)
  .end()
  .appendTo('#slideshow');
}, 3000);
</script>

<style>

#slideshow { 
  /* margin: 50px auto;  */
  position: relative; 
  width: 100%; 
  height: 190px; 
  /* padding: 10px;  */
  box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}

#slideshow img{ 
  /* margin: 50px auto;  */
  position: relative; 
  width: 100%; 
  height: 200px; 
  /* padding: 10px;  */
  box-shadow: 0 0 20px rgba(0,0,0,0.4); 
}

/* #slideshow > div { 
  position: absolute; 
  top: 10px; 
  left: 10px; 
  right: 10px; 
  bottom: 10px; 
} */

</style>