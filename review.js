function inc(button) {
    
    let display = button.previousElementSibling; 
    let value = parseInt(display.innerText); 
    value++; 
    display.innerText = value; 
  }
  
  
  function dec(button) {

    let display = button.nextElementSibling; 
    let value = parseInt(display.innerText); 
        if (value > 0)
         {
      value--;
    }
    display.innerText = value;
  }

              