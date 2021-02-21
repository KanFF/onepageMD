document.addEventListener("DOMContentLoaded", init);

function init() {
  sltLanguage.addEventListener("change", selectLanguage);
}

function selectLanguage() {
  document.cookie = "lang=" + sltLanguage.value;
  window.location = window.location;
}
