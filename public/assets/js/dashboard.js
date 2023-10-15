try {
  const header = document.querySelector("header");
  let tempPageOffY = 10;
  window.onscroll = function () {
    if (window.pageYOffset > tempPageOffY) {
      header.classList.add("header-dashboard-scrolling");
      header.classList.add("header-hide");
      if (window.pageYOffset >= 10) {
        tempPageOffY = window.pageYOffset;
      }
    } else {
      if (window.pageYOffset >= 10) {
        header.classList.remove("header-hide");
        tempPageOffY = window.pageYOffset;
      } else {
        header.classList.remove("header-scrolling");
        header.classList.remove("header-hide");
      }
    }
  };
} catch (e) {
  console.error(e);
}

try {
  $(".slides-menu").slick({
    // arrows: false,
  });

  const slickPrev = document.querySelector(".slick-prev");
  const slickNext = document.querySelector(".slick-next");
  slickPrev.innerHTML =
    "<img src='./assets/img/icons/icon _arrow ios back icon prev.svg' />";
  slickNext.innerHTML =
    "<img src='./assets/img/icons/icon _arrow ios back icon next.svg' />";
} catch (e) {
  console.error(e);
}

try {
  // handle label form input
  const inputs = document.querySelectorAll("#form-menu>.form-input>input");
  for (const input of inputs) {
    const label = input.nextElementSibling;
    input.addEventListener("change", function () {
      if (input.value) {
        label.classList.add(
          "!-top-2.5",
          "px-4",
          "!rounded-sm",
          "text-[12px]",
          "!left-4",
          "bg-white"
        );
      } else {
        label.classList.remove(
          "!-top-2.5",
          "px-4",
          "!rounded-sm",
          "text-[12px]",
          "!left-4",
          "bg-white"
        );
      }
    });
  }
} catch (e) {
  console.error(e);
}

try {
  const submit_menu = document.querySelector(".submit_menu");
  const modal = document.getElementById("modal");
  const closeModal = document.getElementById("close-modal");
  const btnAdd = document.getElementById("btn-add");
  btnAdd.addEventListener("click", function (e) {
    submit_menu.name = "add_" + submit_menu.id;
    document.body.classList.add("overflow-hidden");
    const nm_menu = document.getElementById("nm_menu");
    const harga = document.getElementById("harga");
    const kategori = document.getElementById("kategori");
    harga.value = "";
    nm_menu.value = "";

    const inputs = document.querySelectorAll("#form-menu>.form-input>input");
    for (const input of inputs) {
      const label = input.nextElementSibling;
      if (input.value) {
        label.classList.add(
          "!-top-2.5",
          "px-4",
          "!rounded-sm",
          "text-[12px]",
          "!left-4",
          "bg-white"
        );
      } else {
        label.classList.remove(
          "!-top-2.5",
          "px-4",
          "!rounded-sm",
          "text-[12px]",
          "!left-4",
          "bg-white"
        );
      }
    }

    for (const option of kategori.children) {
      if (option.dataset.kategori == "coffee") {
        option.setAttribute("selected", true);
      } else if (option.dataset.kategori == "non-coffee") {
        option.setAttribute("selected", true);
      } else if (option.dataset.kategori == "fasilitas") {
        option.setAttribute("selected", true);
      } else {
        option.removeAttribute("selected");
      }
    }

    modal.classList.add("active");
  });
  closeModal.addEventListener("click", function (e) {
    document.body.classList.remove("overflow-hidden");
    modal.classList.remove("active");
  });
} catch (e) {
  console.error(e);
}

try {
  const submit_menu = document.querySelector(".submit_menu");

  const listMenu = document.getElementById("list-menu");
  listMenu.addEventListener("click", function (e) {
    if (e.target.id === "btn-delete") {
      const btnDelete = e.target;
      Swal.fire({
        title: "Are you sure?",
        text: "You won't be able to revert this!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, delete it!",
      }).then((result) => {
        if (result.isConfirmed) {
          if (listMenu.classList.contains("coffee")) {
            window.location.href =
              "hapus_menu.php?id=" + btnDelete.dataset.id + "&kategori=coffee";
          } else if (listMenu.classList.contains("noncoffee")) {
            window.location.href =
              "hapus_menu.php?id=" +
              btnDelete.dataset.id +
              "&kategori=noncoffee";
          } else if (listMenu.classList.contains("fasilitas")) {
            window.location.href =
              "hapus_menu.php?id=" +
              btnDelete.dataset.id +
              "&kategori=fasilitas";
          }
        }
      });
    }

    if (e.target.id === "btn-edit") {
      const btnEdit = e.target;
      submit_menu.name = "update_" + submit_menu.id;
      const data = JSON.parse(btnEdit.dataset.id);
      const modal = document.getElementById("modal");
      modal.classList.add("active");
      const menu_id = document.getElementById("menu_id");
      const nm_menu = document.getElementById("nm_menu");
      const harga = document.getElementById("harga");
      const kategori = document.getElementById("kategori");
      const foto_menu = document.getElementById("foto_menu");
      menu_id.value = data.id;
      harga.value = data.harga;
      nm_menu.value = data.nm_menu;
      if (data.foto) {
        foto_menu.value = "./assets/img/menu/" + data.foto;
      }

      for (const option of kategori.children) {
        option.removeAttribute("selected");
        if (option.value == data.kategori_id) {
          option.setAttribute("selected", true);
        }
      }

      const inputs = document.querySelectorAll("#form-menu>.form-input>input");
      for (const input of inputs) {
        const label = input.nextElementSibling;
        if (input.value) {
          label.classList.add(
            "!-top-2.5",
            "px-4",
            "!rounded-sm",
            "text-[12px]",
            "!left-4",
            "bg-white"
          );
        } else {
          label.classList.remove(
            "!-top-2.5",
            "px-4",
            "!rounded-sm",
            "text-[12px]",
            "!left-4",
            "bg-white"
          );
        }
      }
    }
  });
} catch (e) {
  console.error(e);
}
