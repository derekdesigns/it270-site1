<footer>
    <div class="copyright">
<ul>
<li>Copyright <?php echo date('Y') ;?></li>
<li>All Rights Reserved</li>
<li><a href="">Terms of Use</a></li>
<li><a href="">Web Design by murphwillsurf</a></li>
</ul>
</div>
<!-- close copyright div -->
</footer>
<!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script> -->
		<script>
		$(document).ready(function(){
			$(".nav-button").click(function () {
			$(".nav-button,.primary-nav").toggleClass("open");
			});    
		});
		</script>

<?php wp_footer(); ?>
</body>
</html>