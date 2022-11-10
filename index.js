(function () {
  const fh = document.getElementById("fixed-header");
  const hh = document.getElementById("hidden-header");
  window.addEventListener("scroll", () => {
    if (window.pageYOffset > 100) {
      fh.classList.add("is-show");
      hh.classList.add("is-hidden");
    } else {
      fh.classList.remove("is-show");
      hh.classList.remove("is-hidden");
    }
  });
})();

const widget = document.getElementById("js-filter");
const checkboxes = widget.querySelectorAll(
  '.filter-cond input[type="checkbox"]'
);
const filter = () => {
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
$("input[type=checkbox]").change(function () {
  counter = 0;
  clicked = $(this).data("index");
  $("input[type=checkbox]").each(function () {
    if ($(this)[0].checked) {
      counter++;
    }
  });
  if (counter == 3) {
    toDisable = clicked;
    while (toDisable == clicked) {
      toDisable = Math.round(Math.random() * 2);
    }
    $("input:eq(" + toDisable + ")")[0].checked = false;
  }
});
