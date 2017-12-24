const articleContainer = document.querySelector('content')

articleContainer.addEventListener('click', e => {
	//console.log(e)
	e.preventDefault()

	const modalToggle = e.target.closest('.readmore')
	//console.log(modalToggle)
	if (! modalToggle) return

	const modal = modalToggle.parentNode.nextElementSibling
	const closeButton = modal.querySelector('.modal-close')
	//need to edit .html to match parent sibling

	modal.classList.add('is-open')

	closeButton.addEventListener('click', _ => {
		modal.classList.remove('is-open')
	})
})