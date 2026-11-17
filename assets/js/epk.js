(function () {
  const nav = document.querySelector("[data-epk-nav]");
  const sections = [...document.querySelectorAll("main section[id]")];
  const toggle = document.querySelector("[data-theme-toggle]");

  function currentTheme() {
    return document.documentElement.getAttribute("data-theme") === "light" ? "light" : "dark";
  }

  function applyTheme(theme) {
    document.documentElement.setAttribute("data-theme", theme);
    try {
      localStorage.setItem("ossy-epk-theme", theme);
    } catch (e) {}
    if (toggle) {
      toggle.setAttribute(
        "aria-label",
        theme === "dark" ? "Switch to light mode" : "Switch to dark mode"
      );
    }
  }

  if (toggle) {
    applyTheme(currentTheme());
    toggle.addEventListener("click", () => {
      applyTheme(currentTheme() === "dark" ? "light" : "dark");
    });
  }

  function setActive(id) {
    if (!nav) return;
    nav.querySelectorAll("a").forEach((link) => {
      const on = link.getAttribute("href") === "#" + id;
      link.classList.toggle("is-active", on);
      if (on) link.setAttribute("aria-current", "true");
      else link.removeAttribute("aria-current");
    });
  }

  const observer = new IntersectionObserver(
    (entries) => {
      const visible = entries
        .filter((e) => e.isIntersecting)
        .sort((a, b) => b.intersectionRatio - a.intersectionRatio)[0];
      if (visible && visible.target.id) setActive(visible.target.id);
    },
    { rootMargin: "-40% 0px -40% 0px", threshold: [0.15, 0.4, 0.7] }
  );

  sections.forEach((section) => observer.observe(section));
})();
