const titleElement = document.querySelector('title');
const sections = document.querySelectorAll('section'); // Assuming each section corresponds to a targetId

// Function to update the title based on the currently visible section
function updateTitle() {
  sections.forEach(section => {
    const rect = section.getBoundingClientRect();
    if (rect.top >= 0 && rect.top < window.innerHeight / 2) {
      const dataTitle = section.getAttribute('data-title');
      if (dataTitle) {
        titleElement.textContent = `${dataTitle} | Psychologist`;
      }
    }
  });
}

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
  anchor.addEventListener('click', function (e) {
    e.preventDefault();

    const targetId = this.getAttribute('href').substring(1);

    if (targetId === 'home') {
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    } else {
      const targetElement = document.getElementById(targetId);
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop,
          behavior: 'smooth'
        });
      }
    }
  });
});

// Add scroll event listener to update the title while scrolling
window.addEventListener('scroll', updateTitle);

// Initial call to set the title when the page loads
updateTitle();