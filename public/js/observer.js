const ratio = .1
const options = {
    root: null,
    rootMargin: '0px',
    treshold: ratio
}

const handleIntersect = function(entries, observer) {
    entries.forEach(function(entry) {

        if (entry.isIntersecting) {

            /* console.log(entry.target); */

            if (entry.target.id === 'figures') {

                animateValue(nb_formations, 0, 1542, 1000);
                animateValue(nb_apprenants, 0, 15158, 1000);
                animateValue(tx_reussite, 0, 87, 1000);
                animateValue(insert_cqp, 0, 82, 1000);
            }

            if (entry.target.id === 'certification') {
                document.querySelectorAll('.reveal-X-Right').forEach(function(r) {
                    r.classList.add('reveal-visible')
                })
            }

            if (entry.target.classList.contains('reveal')) {
                document.querySelectorAll('.reveal').forEach(function(r) {
                    r.classList.add('reveal-visible')
                })
            }

            observer.unobserve(entry.target)
        }
    })
}

const observer = new IntersectionObserver(handleIntersect, options);

document.querySelectorAll('.reveal').forEach(function(r) {
    observer.observe(r)
})

if (document.getElementById('certification')) {
    $certification = document.getElementById('certification')
    observer.observe($certification)
}



/* Figures count */

function animateValue(obj, start, end, duration) {
    let startTimestamp = null;
    const step = (timestamp) => {
        if (!startTimestamp) startTimestamp = timestamp;
        const progress = Math.min((timestamp - startTimestamp) / duration, 1);
        obj.innerHTML = Math.floor(progress * (end - start) + start);
        if (progress < 1) {
            window.requestAnimationFrame(step);
        }
    };
    window.requestAnimationFrame(step);
}

const nb_formations = document.getElementById('nb_formations');
const nb_apprenants = document.getElementById('nb_apprenants');
const tx_reussite = document.getElementById('tx_reussite');
const insert_cqp = document.getElementById('insert_cqp');

if (document.getElementById('figures')) {
    $figures = document.getElementById('figures')
    observer.observe($figures)
}