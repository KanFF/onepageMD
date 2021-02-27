document.addEventListener("DOMContentLoaded", init);

function init() {
  sltLanguage.addEventListener("change", selectLanguage);

  //Declare event listeners to all icons used to copy section link
  Array.prototype.forEach.call(
    document.querySelectorAll(".iconsToCopySection"),
    function (el) {
      el.addEventListener("click", copySectionLink);
    }
  );
}

//Select the language by changing the cookie and reloading the page
function selectLanguage() {
  document.cookie = "lang=" + sltLanguage.value;
  window.location.hash = "";
  window.location.reload();
}

//Copy the section link with its anchor
function copySectionLink(e) {
  ele = e.target;
  link = ele.getAttribute("data-hrefcopy");
  if (link == null) {
    link = link = ele.parentNode.getAttribute("data-hrefcopy"); //if link not found, search in the parent
  }
  if (link != null) {
    console.log(navigator.clipboard.writeText(link));
  }
}
