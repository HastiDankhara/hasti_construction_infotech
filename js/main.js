document.addEventListener("DOMContentLoaded", function () {
  const menuItems = document.querySelectorAll(".header_menu ul li a");

  menuItems.forEach((item) => {
    item.addEventListener("click", function (event) {
      event.preventDefault();
      const targetId = this.getAttribute("data-target");
      const targetElement = document.getElementById(targetId);

      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop,
          behavior: "smooth",
        });
      }
    });
  });
});
