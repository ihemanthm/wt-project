document.addEventListener('DOMContentLoaded', () => {
	const slider = document.querySelector('.slider');
	let isDown = false;
	let startX;
	let scrollLeft;

	slider.addEventListener('mousedown', (e) => {
		isDown = true;
		startX = e.pageX - slider.offsetLeft;
		scrollLeft = slider.scrollLeft;
		slider.style.cursor = 'grabbing';
	});

	slider.addEventListener('mouseleave', () => {
		isDown = false;
		slider.style.cursor = 'default';
	});

	slider.addEventListener('mouseup', () => {
		isDown = false;
		slider.style.cursor = 'default';
	});

	slider.addEventListener('mousemove', (e) => {
		if (!isDown) return;
		e.preventDefault();
		const x = e.pageX - slider.offsetLeft;
		const walk = (x - startX) * 3; // Adjust the slider speed
		slider.scrollLeft = scrollLeft - walk;
	});
});