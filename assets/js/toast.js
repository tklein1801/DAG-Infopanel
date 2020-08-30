const Toast = {
  /**
   * @param {string} state
   * @param {string} message
   */
  show(state, message) {
    const toast = document.createElement("div");
    toast.classList.add("toast", `toast-${state}`, "show");
    toast.textContent = message;

    document.querySelector(".content-wrapper").append(toast);
    let shown = setTimeout(() => {
      document.querySelector(".content-wrapper").removeChild(toast);
    }, 3000);
  },
};
