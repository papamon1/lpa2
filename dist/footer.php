<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <div class="socials">          
          <a href="https://www.facebook.com/lapuertamarillamadrid" target="_blank" class="fb"><i class="fab fa-facebook"></i></a>
          <a href="https://www.instagram.com/la_puerta_amarilla" target="_blank" class="fb"><i class="fab fa-instagram"></i></a>          
        </div>
        <div class="copyright"><span class="brand"><?php echo $lang["LPA"]; ?> </span> &copy; <span id="copyright-year"></span> | <a href="#privacy" data-toggle="modal" data-target="#privacy"><?php echo $lang["PPRIVACIDAD"]; ?></a> <div><?php echo $lang["SITE_DESIGNED"]; ?> <a href="http://www.papamono.es/" rel="nofollow"><?php echo $lang["PAPA.MONO"]; ?></a></div>
        </div>
      </div>
    </div>
  </div>
</footer>


<script>
// Get the modal
var modal = document.getElementById("myModal");

// Get the button that opens the modal
// var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks the button, open the modal 
// btn.onclick = function() {
//   modal.style.display = "block";
// }

function ventana () {
  modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
  modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}

function open_privacy(){
  $('#privacy').modal();
}
</script>