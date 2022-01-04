
<script type="text/javascript">
	let btn = document.querySelector("#bar");
	let sidebar = document.querySelector(".sidebar");
	let profile = document.querySelector(".profile");
	let mybio = document.querySelector(".mybio");

	btn.onclick = function()
	{
		sidebar.classList.toggle("active");
		profile.classList.toggle("active1");
		mybio.classList.toggle("active2");
		
	}
	document.querySelectorAll('.pic img').forEach(image =>{
			image.onclick = () =>{
				document.querySelector('.popup-image').style.display = 'block';
				document.querySelector('.popup-image img').src = image.getAttribute('src')
			}
	});
	document.querySelector('.popup-image span').onclick = () => {
				document.querySelector('.popup-image').style.display = 'none';

	}
		
</script>
</body>
</html>