function openModal(dialog) {
    dialog = document.getElementById(dialog);
    console.log("Opened Modal");
    dialog.showModal();
  }
  function closeModal(dialog) {
    dialog = document.getElementById(dialog);
    console.log("Closed Modal");
    dialog.close();
  }
  
  // all functions:
  function autoResize(textarea) {
    textarea.style.height = "24px";
    textarea.style.height = textarea.scrollHeight + "px"; // Set the height to scroll height
  }