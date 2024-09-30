document.querySelectorAll('.expandable').forEach(function(expandable) {
	expandable.addEventListener('click', function() {
		var content = this.nextElementSibling;
		content.classList.toggle('show');
		this.classList.toggle('active');
	});
});

function scrollToEuthanasia() {
	document.getElementById('euthanasia').scrollIntoView({
		behavior: 'smooth'
	});
}

function scrollToPrevence() {
	document.getElementById('prevence').scrollIntoView({
		behavior: 'smooth'
	});
}

function scrollToAparat() {
	document.getElementById('aparat').scrollIntoView({
		behavior: 'smooth'
	});
}