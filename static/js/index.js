window.addEventListener('load', main);


function main() {
  console.log('hello');

  addRGB2sliders();

}

function addRGB2sliders() {
  const rangeInputs = document.querySelectorAll('input[type="range"]');

  rangeInputs.forEach(function(rangeInput) {
    rangeInput.addEventListener("input", function(event) {
      const t = event.target
      console.log(`Changement de valeur ${t.name} = ${t.value}`);
    });
  });
}