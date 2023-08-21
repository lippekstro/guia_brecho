document.addEventListener("DOMContentLoaded", function () {
    const editButton = document.getElementById("editButton");
    const saveButton = document.getElementById("saveButton");
    const profileInputs = document.querySelectorAll("#profile input");
  
    editButton.addEventListener("click", function () {
      profileInputs.forEach((input) => {
        input.removeAttribute("disabled");
      });
      editButton.style.display = "none";
      saveButton.style.display = "inline-block";
    });
  
    saveButton.addEventListener("click", function () {
      profileInputs.forEach((input) => {
        input.setAttribute("disabled", true);
      });
      editButton.style.display = "inline-block";
      saveButton.style.display = "none";
    });
  });
  