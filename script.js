document.querySelectorAll('.expandable').forEach(function(expandable) {
    expandable.addEventListener('click', function() {
        var content = this.nextElementSibling;
        content.classList.toggle('show');
        this.classList.toggle('active');
    });
});
