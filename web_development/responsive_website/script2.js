const panels = document.querySelectorAll('.panel') // declared variable (panels)

panels.forEach(panel => {
    panel.addEventListener('click', () => {
        removeActiveClasses()
        panel.classList.add('active')
    })
})

function removeActiveClasses() { // declaring function
    panels.forEach(panel => {
        panel.classList.remove('active')
    })
}