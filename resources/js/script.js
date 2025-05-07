// Komponen Navbar dan Footer
document.addEventListener("DOMContentLoaded", function () {
    const navbar = `
      <nav>
        <a href="dashboard.html?username=${getUsername()}">Dashboard</a>
        <a href="profile.html?username=${getUsername()}">Profile</a>
        <a href="pengelolaan.html?username=${getUsername()}">Pengelolaan</a>
      </nav>`;
    const footer = `<footer>&copy; ${new Date().getFullYear()} UTS PWEB NAUFAL</footer>`;
  
    const navbarContainer = document.getElementById("navbar");
    const footerContainer = document.getElementById("footer");
  
    if (navbarContainer) navbarContainer.innerHTML = navbar;
    if (footerContainer) footerContainer.innerHTML = footer;
  
    if (document.getElementById("welcomeMessage")) {
      document.getElementById("welcomeMessage").textContent =
        "Selamat datang, " + getUsername() + "!";
    }
  
    if (document.getElementById("profileName")) {
      document.getElementById("profileName").textContent = getUsername();
    }
  
    if (document.getElementById("dataList")) {
      const data = [
        { id: 1, nama: "Kopi Robusta", stok: 20 },
        { id: 2, nama: "Kopi Arabika", stok: 15 },
        { id: 3, nama: "Kopi Liberika", stok: 10 },
      ];
  
      const tbody = document.getElementById("dataList");
      data.forEach((item) => {
        tbody.innerHTML += `
          <tr>
            <td>${item.id}</td>
            <td>${item.nama}</td>
            <td>${item.stok}</td>
          </tr>`;
      });
    }
  
    const form = document.getElementById("loginForm");
    if (form) {
      form.addEventListener("submit", function (e) {
        e.preventDefault();
        const username = document.getElementById("username").value;
        window.location.href = `dashboard.html?username=${username}`;
      });
    }
  });
  
  function getUsername() {
    const params = new URLSearchParams(window.location.search);
    return params.get("username") || "Guest";
  }
  