/* JavaScript to animate the
counters sequentially*/

function animateCounters() {
    const counters = document.querySelectorAll(".counter");
    counters.forEach((counter, index) => {
        const target = parseInt(counter.getAttribute("data-target"));
        const duration = 2000;
        const step = Math.ceil((target / duration) * 15);
        let current = 0;

        const updateCounter = () => {
            current += step;
            if (current <= target) {
                counter.innerText = current;
                requestAnimationFrame(updateCounter);
            } else {
                counter.innerText = target;
            }
        };

        setTimeout(() => {
            updateCounter();
        }, index * 2000);
        // Delay each counter by 1 second
    });
}

animateCounters();

$(document).ready(function () {
    // Get the current date
    var currentDate = new Date().toISOString().split("T")[0];

    // Set the min attribute of the date input field to the current date
    $('input[type="date"]').attr("min", currentDate);
});
