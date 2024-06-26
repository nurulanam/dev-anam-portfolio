import './bootstrap';

import '../css/app.css';
import '../css/all.css';
// import '../css/locomotive-scroll.min.css';

import Alpine from 'alpinejs';
// import LocomotiveScroll from 'locomotive-scroll';
import gsap from "gsap";
import ScrollTrigger from "gsap/ScrollTrigger";
import 'flowbite';


window.Alpine = Alpine;

Alpine.start();



gsap.registerPlugin(ScrollTrigger);



// // Using Locomotive Scroll from Locomotive https://github.com/locomotivemtl/locomotive-scroll

// const stickyElements = document.querySelectorAll('[data-scroll-sticky][data-scroll-target]');

// // Check if it's a smartphone (you may need to adjust this condition)
// if (window.innerWidth < 768) {
//   // Loop through the elements and clear the data-scroll-target attribute
//   stickyElements.forEach(element => {
//     element.removeAttribute('data-scroll-target');
//   });
// }

const servicesDescription = document.querySelector('.services-desctiption');

if (servicesDescription) {
  const text = servicesDescription.textContent;
  servicesDescription.innerHTML = [...text].map(char => `<span>${char}</span>`).join('');
}

const aboutMeDetails = document.querySelectorAll('.about-me-details p');

aboutMeDetails.forEach(aboutMeDetails => {
  const text = aboutMeDetails.textContent;
  aboutMeDetails.innerHTML = [...text].map(char => `<span>${char}</span>`).join('');
});

const testimonialTextElements = document.querySelectorAll('.testimonial-text');

if (testimonialTextElements) {
  testimonialTextElements.forEach((testimonialText) => {
    const text = testimonialText.textContent;
    testimonialText.innerHTML = [...text].map((char) => `<span>${char}</span>`).join('');
  });
}


document.addEventListener('DOMContentLoaded', function () {
  const toggleContainer = document.getElementById('toggle-container');

  // Check initial state and set display property
  if (window.innerWidth >= 768) {
    toggleContainer.style.display = 'block';
  } else {
    toggleContainer.style.display = 'none';
  }

  // Add click event listener to the navbar toggle button
  document.getElementById('navbar-toggle').addEventListener('click', function () {
    // Toggle the visibility of the toggle container
    toggleContainer.style.display = toggleContainer.style.display === 'none' ? 'block' : 'none';
  });

  // Update the toggle container visibility on window resize for medium devices
  window.addEventListener('resize', function () {
    if (window.innerWidth >= 768) {
      toggleContainer.style.display = 'block';
    } else {
      toggleContainer.style.display = 'none';
    }
  });
});


var timeline1 = gsap.timeline();
var timeline2 = gsap.timeline();
var timeline3 = gsap.timeline();
var projectsTimeline = gsap.timeline();

timeline1.to('.circle-php', {
  opacity: 1,
})
gsap.to('.circle-php', {
  x: -30,
  y: 20,
  repeat: -1,
  duration: 1.5,
  yoyo: true
})
timeline1.to('.circle-laravel', {
  opacity: 1,
})
gsap.to('.circle-laravel', {
  x: 30,
  repeat: -1,
  duration: 1.5,
  yoyo: true
})

timeline2.to('.banner-avater', {
  opacity: 1,
  delay: 0.3,
  duration: 0.5,
})
timeline2.to('.brand', {
  opacity: 1,
})
gsap.to('.brand', {
  rotation: 360,
  duration: 8,
  repeat: -1,
  ease: "linear",
})
timeline1.to('.banner-h h1', {
  opacity: 1,
  stagger: 0.25,
})
timeline1.to('.banner-p', {
  opacity: 1,
})
timeline1.to('button', {
  opacity: 1,
})
timeline3.to('.hashtags li', {
  opacity: 1,
  stagger: 0.5,
})

timeline3.to('.banner-social-list li', {
  opacity: 1,
  stagger: 0.25,
})

gsap.to('.about-me-details p span', {
  color: 'white',
  stagger: 1,
  scrollTrigger: {
    trigger: '.about-me-details p span',
    start: 'top 70%',
    end: '+=20%',
    scrub: 2,
  }
})

gsap.to('.services-desctiption span', {
  color: 'white',
  stagger: 1,
  scrollTrigger: {
    trigger: '.services-desctiption span',
    start: 'top 70%',
    end: '+=20%',
    scrub: 2,
  }
})

gsap.to('.case-study-section', {
  marginLeft: 0,
  marginRight: 0,
  stagger: 1,
  scrollTrigger: {
    trigger: '.case-study-section',
    start: 'top 40%',
    end: '+=20%',
    scrub: 2,
  }
});

var projectItems = document.querySelectorAll('#allProjects .project-items .project-item');

projectItems.forEach(function (projectItem, index) {
  projectsTimeline.from(projectItem, {
    translateY: 60,
    opacity: 0,
    scrollTrigger: {
      trigger: projectItem,
      start: 'top 80%',
      end: '+=10%',
      scrub: 2,
    },
    delay: index * 0.5,
  });
});

const items = gsap.utils.toArray(".my-style-item");

const loop = horizontalLoop(items, { paused: false, repeat: -1 });

function horizontalLoop(items, config) {
  items = gsap.utils.toArray(items);
  config = config || {};
  let tl = gsap.timeline({
    repeat: config.repeat,
    paused: config.paused,
    defaults: { ease: "none" },
    onReverseComplete: () => tl.totalTime(tl.rawTime() + tl.duration() * 100),
  }),
    length = items.length,
    startX = items[0].offsetLeft,
    times = [],
    widths = [],
    xPercents = [],
    curIndex = 0,
    pixelsPerSecond = (config.speed || 1) * 100,
    snap = config.snap === false ? (v) => v : gsap.utils.snap(config.snap || 1), // some browsers shift by a pixel to accommodate flex layouts, so for example if width is 20% the first element's width might be 242px, and the next 243px, alternating back and forth. So we snap to 5 percentage points to make things look more natural
    totalWidth,
    curX,
    distanceToStart,
    distanceToLoop,
    item,
    i;
  gsap.set(items, {
    // convert "x" to "xPercent" to make things responsive, and populate the widths/xPercents Arrays to make lookups faster.
    xPercent: (i, el) => {
      let w = (widths[i] = parseFloat(gsap.getProperty(el, "width", "px")));
      xPercents[i] = snap(
        (parseFloat(gsap.getProperty(el, "x", "px")) / w) * 100 +
        gsap.getProperty(el, "xPercent")
      );
      return xPercents[i];
    },
  });
  gsap.set(items, { x: 0 });
  totalWidth =
    items[length - 1].offsetLeft +
    (xPercents[length - 1] / 100) * widths[length - 1] -
    startX +
    items[length - 1].offsetWidth *
    gsap.getProperty(items[length - 1], "scaleX") +
    (parseFloat(config.paddingRight) || 0);
  for (i = 0; i < length; i++) {
    item = items[i];
    curX = (xPercents[i] / 100) * widths[i];
    distanceToStart = item.offsetLeft + curX - startX;
    distanceToLoop =
      distanceToStart + widths[i] * gsap.getProperty(item, "scaleX");
    tl.to(
      item,
      {
        xPercent: snap(((curX - distanceToLoop) / widths[i]) * 100),
        duration: distanceToLoop / pixelsPerSecond,
      },
      0
    )
      .fromTo(
        item,
        {
          xPercent: snap(
            ((curX - distanceToLoop + totalWidth) / widths[i]) * 100
          ),
        },
        {
          xPercent: xPercents[i],
          duration:
            (curX - distanceToLoop + totalWidth - curX) / pixelsPerSecond,
          immediateRender: false,
        },
        distanceToLoop / pixelsPerSecond
      )
      .add("label" + i, distanceToStart / pixelsPerSecond);
    times[i] = distanceToStart / pixelsPerSecond;
  }
  function toIndex(index, vars) {
    vars = vars || {};
    Math.abs(index - curIndex) > length / 2 &&
      (index += index > curIndex ? -length : length); // always go in the shortest direction
    let newIndex = gsap.utils.wrap(0, length, index),
      time = times[newIndex];
    if (time > tl.time() !== index > curIndex) {
      // if we're wrapping the timeline's playhead, make the proper adjustments
      vars.modifiers = { time: gsap.utils.wrap(0, tl.duration()) };
      time += tl.duration() * (index > curIndex ? 1 : -1);
    }
    curIndex = newIndex;
    vars.overwrite = true;
    return tl.tweenTo(time, vars);
  }
  tl.next = (vars) => toIndex(curIndex + 1, vars);
  tl.previous = (vars) => toIndex(curIndex - 1, vars);
  tl.current = () => curIndex;
  tl.toIndex = (index, vars) => toIndex(index, vars);
  tl.times = times;
  tl.progress(1, true).progress(0, true); // pre-render for performance
  if (config.reversed) {
    tl.vars.onReverseComplete();
    tl.reverse();
  }
  return tl;
}

gsap.to('.contact-section .contact-img', {
  opacity: 1,
  scrollTrigger: {
    trigger: '.contact-section .contact-img',
    start: 'top 60%',
    end: '+=10%',
    scrub: 2,
  }
});

gsap.to('.contact-section .contact-circle', {
  rotation: 360,
  duration: 8,
  repeat: -1,
  ease: "linear",
})




const testimonialItems = document.querySelectorAll('.testimonial-item');
const imageControllers = document.querySelectorAll('.img-controllers .img-controller-item');
let currentIndex = 0;

function updateImageControllers(index) {
  gsap.to(imageControllers, {
    opacity: function (i) {
      return i === index ? 1 : 0.5;
    },
    filter: function (i) {
      return i === index ? 'blur(0px)' : 'blur(2px)';
    },
    duration: 0.5,
  });
}

function showTestimonial(index) {
  const testimonialTextSpans = testimonialItems[index].querySelectorAll('.testimonial-text span');

  gsap.to(testimonialItems, {
    display: 'none',
    opacity: 0,
    duration: 0.5,
    onComplete: function () {
      testimonialItems[index].style.display = 'block';
      gsap.to(testimonialItems[index], {
        opacity: 1,
        duration: 0.5,
      });
      gsap.from(testimonialTextSpans, {
        color: '#6b7280',
        stagger: 1,
        scrollTrigger: {
          trigger: testimonialTextSpans, // Use the span as the trigger
          start: 'top 75%',
          end: '+=10%',
          scrub: 2,
        },
      });
      updateImageControllers(index);
    }
  });
}

function nextTestimonial() {
  currentIndex = (currentIndex + 1) % testimonialItems.length;
  showTestimonial(currentIndex);
}

function prevTestimonial() {
  currentIndex = (currentIndex - 1 + testimonialItems.length) % testimonialItems.length;
  showTestimonial(currentIndex);
}

// Add click event listeners to the image controllers
imageControllers.forEach((controller, index) => {
  controller.addEventListener('click', () => {
    currentIndex = index;
    showTestimonial(currentIndex);
  });
});

document.querySelector('.controller-left').addEventListener('click', prevTestimonial);
document.querySelector('.controller-right').addEventListener('click', nextTestimonial);

// Initialize the first testimonial
showTestimonial(currentIndex);






//   services page
const accordionItems = document.querySelectorAll('.accordion-item');

for (const accordionItem of accordionItems) {
  const accordionHeader = accordionItem.querySelector('.accordion-header');
  const accordionCollapse = accordionItem.querySelector('.accordion-collapse');

  accordionHeader.addEventListener('click', () => {
    accordionItem.classList.toggle('active');
    accordionCollapse.classList.toggle('hidden');
  });
}
