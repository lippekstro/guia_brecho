function clearInput() {

    const input = document.querySelector("#search");
    input.value = "";
  }
  
  const clearBtn = document.getElementById("clear-btn");
  clearBtn.addEventListener("click", clearInput());
  