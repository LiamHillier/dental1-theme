/**
 * Front-end JavaScript
 *
 * The JavaScript code you place here will be processed by esbuild. The output
 * file will be created at `../theme/js/script.min.js` and enqueued in
 * `../theme/functions.php`.
 *
 * For esbuild documentation, please see:
 * https://esbuild.github.io/
 */

// JavaScript to handle custom dropdown functionality
// JavaScript to handle custom dropdown functionality
const styledSelect = document.getElementById('styled-select');
const selectContent = document.getElementById('select-content');
const serviceDiv = document.querySelector('.service');

styledSelect.addEventListener('click', function () {
	selectContent.style.display =
		selectContent.style.display === 'block' ? 'none' : 'block';
});

// Add event listeners for custom dropdown options
const option1 = document.getElementById('option1');
const option2 = document.getElementById('option2');
const option3 = document.getElementById('option3');

// Set "Option 1" as the default selection
updateContent('Option 1 content goes here.');

option1.addEventListener('click', function (e) {
	e.preventDefault(); // Prevent the default anchor behavior
	styledSelect.textContent = 'Option 1';
	selectContent.style.display = 'none';
	// Update content based on Option 1 selection
	updateContent('Option 1 content goes here.');
});

option2.addEventListener('click', function (e) {
	e.preventDefault(); // Prevent the default anchor behavior
	styledSelect.textContent = 'Option 2';
	selectContent.style.display = 'none';
	// Update content based on Option 2 selection
	updateContent('Option 2 content goes here.');
});

option3.addEventListener('click', function (e) {
	e.preventDefault(); // Prevent the default anchor behavior
	styledSelect.textContent = 'Option 3';
	selectContent.style.display = 'none';
	// Update content based on Option 3 selection
	updateContent('Option 3 content goes here.');
});

function updateContent(content) {
	// Update the content in the .service div
	serviceDiv.textContent = content;
}
