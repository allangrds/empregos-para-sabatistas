function createAccordion() {
  const buttons = document.querySelectorAll(".accordion button");
  let i = 0;

  for (i = 0; i < buttons.length; i++) {
    buttons[i].addEventListener("click", function() {
      const panel = this.nextElementSibling;
      const plusIllustration = this.children[0];
      const minusIllustration = this.children[1];

      if (panel.style.display === "block") {
        panel.style.display = "none";
        plusIllustration.style.display = "block";
        minusIllustration.style.display = "none";
        return undefined;
      }

      panel.style.display = "block";
      plusIllustration.style.display = "none";
      minusIllustration.style.display = "block";
    });
  }

  // const acc = document.getElementsByClassName("accordion");
  // let i;

  // for (i = 0; i < acc.length; i++) {
  //   acc[i].addEventListener("click", function() {
  //     const panel = this.nextElementSibling;

  //     if (panel.style.display === "block") {
  //       panel.style.display = "none";
  //       return undefined;
  //     }

  //     panel.style.display = "block";
  //   });
  // }
}

export default function init() {
  createAccordion();
}
