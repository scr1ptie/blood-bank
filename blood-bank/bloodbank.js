const counters = document.querySelectorAll(".num-count-run");
const speed = 200;

counters.forEach((counter) => {
  const updateCount = () => {
    const target = +counter.getAttribute("data-target");
    const count = +counter.innerText;

    const inc = target / speed;

    if (count < target) {
      counter.innerText = count + inc;
      setTimeout(updateCount);
    } else {
      count.innerText = target;
    }
  };
  updateCount();
});

// model 1

const popover1 = document.querySelector(".popover-1");
const overlay1 = document.querySelector(".overlay-1");
const closepop1 = document.querySelector(".close-poper-1");
const contact1 = document.querySelector(".contact-1");
console.log(popover1, overlay1, closepop1, closepop1);

const openPopover1 = function () {
  popover1.classList.remove("hidden");
  overlay1.classList.remove("hidden");
};
const closePopover1 = function () {
  popover1.classList.add("hidden");
  overlay1.classList.add("hidden");
};

contact1.addEventListener("click", openPopover1);
closepop1.addEventListener("click", closePopover1);
overlay1.addEventListener("click", closePopover1);

// model 2

const popover2 = document.querySelector(".popover-2");
const overlay2 = document.querySelector(".overlay-2");
const closepop2 = document.querySelector(".close-poper-2");
const contact2 = document.querySelector(".contact-2");

const openPopover2 = function () {
  popover2.classList.remove("hidden");
  overlay2.classList.remove("hidden");
};
const closePopover2 = function () {
  popover2.classList.add("hidden");
  overlay2.classList.add("hidden");
};

contact2.addEventListener("click", openPopover2);
closepop2.addEventListener("click", closePopover2);
overlay2.addEventListener("click", closePopover2);
