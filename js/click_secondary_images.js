document.body.addEventListener('click', e => {
    if (!e.target.matches('img')) return
    document.querySelector('.mainImage').src = e.target.src
})