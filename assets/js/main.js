const addForm = document.getElementById("add-user-form");
const showAlert = document.getElementById("showAlert");
const tbody = document.querySelector("tbody");


// Récupérer la requête Ajax de tous les utilisateurs
const fetchAllUsers = async () => {
  const data = await fetch("action.php?read=1", 
  {
    method: "GET",
  });
  const response = await data.text();
  tbody.innerHTML = response;
};
fetchAllUsers();


 //Mettre à jour la demande Ajax de l'utilisateur
updateForm.addEventListener("submit", async (e) => {
  e.preventDefault();

  const formData = new FormData(updateForm);
  formData.append("update", 1);

  if (updateForm.checkValidity() === false) {
    e.preventDefault();
    e.stopPropagation();
    updateForm.classList.add("was-validated");
    return false;
  } else {
    document.getElementById("edit-user-btn").value = "Please Wait...";

    const data = await fetch("crud.php", {
      method: "POST",
      body: formData,
    });
    const response = await data.text();

    showAlert.innerHTML = response;
    document.getElementById("edit-user-btn").value = "Add User";
    updateForm.reset();
    updateForm.classList.remove("was-validated");
    editModal.hide();
    fetchAllUsers();
  }
});

// Supprimer la demande Ajax de l'utilisateur
tbody.addEventListener("click", (e) => {
  if (e.target && e.target.matches("a.deleteLink")) {
    e.preventDefault();
    let id = e.target.getAttribute("id");
    deleteUser(id);
  }
});

const deleteUser = async (id) => {
  const data = await fetch(`crud.php?delete=1&id=${id}`, {
    method: "GET",
  });
  const response = await data.text();
  showAlert.innerHTML = response;
  fetchAllUsers();
}; 