function create() {
  let data = `txtRol=${document.getElementById("txtRol").value}`;

  let options = {
    method: "POST",
    body: data,
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
  };
  fetch("../controller/rol.create.php", options)
    .then((response) => response.json())
    .then((data) => {});
}
