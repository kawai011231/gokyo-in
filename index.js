function handleClick() {
  result = nav.classList.contains("js-nav");
  if (result) {
    nav.classList.remove("js-nav");
    menuTrigger.classList.remove("js-closeTrigger");
  } else {
    nav.classList.add("js-nav");
    menuTrigger.classList.add("js-closeTrigger");
  }
}
const menuTrigger = document.getElementById("js-menuTrigger");
const nav = document.getElementById("js-nav");
menuTrigger.addEventListener("click", handleClick);

var widget = document.getElementById("js-filter");
var checkboxes = widget.querySelectorAll('.filter-cond input[type="checkbox"]');
var checkedList = [];
var filter = function () {
  checkedList = [];

  Array.prototype.forEach.call(checkboxes, function (input) {
    if (input.checked) {
      checkedList.push(input.value);
    }
  });

  widget.setAttribute("data-filter-view", checkedList.join(" "));
};

Array.prototype.forEach.call(checkboxes, function (checkbox) {
  checkbox.addEventListener("change", filter);
});
