const testimonials = document.querySelectorAll('.testimonial');
let currentTestimonial = 0;

function showTestimonial(index) {
  testimonials.forEach(testimonial => testimonial.classList.remove('active'));
  testimonials[index].classList.add('active');
  currentTestimonial = index;
}

function nextTestimonial() {
  currentTestimonial++;
  if (currentTestimonial >= testimonials.length) {
    currentTestimonial = 0;
  }
  showTestimonial(currentTestimonial);
}

setInterval(nextTestimonial, 5000);

