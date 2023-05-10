let btn = document.querySelector('.wrapper__btn') 
let navList = document.querySelector('.navigation')


btn.addEventListener('click', () => {
    navList.classList.toggle('show-list')  
})

 const isOn = someCheckboxInput.checked


  function serializeForm(formNode) {
    const { elements } = formNode
  
    const data = Array.from(elements)
      .map((element) => {
        const { name, type } = element
        const value = type === 'checkbox' ? element.checked : element.value
  
        return { name, value }
      })
      .filter((item) => !!item.name)
    
    console.log(data)
  }
