const menuToggle = document.querySelector('.menu-toggle');
const nav = document.querySelector('.site-nav');
const revealItems = document.querySelectorAll('.reveal');
const filterButtons = document.querySelectorAll('[data-filter]');
const projectCards = document.querySelectorAll('[data-category]');
const filterStatus = document.querySelector('.filter-status');
const contactForm = document.querySelector('.contact-form');
const projectModal = document.querySelector('.project-modal');
const projectModalImage = document.querySelector('.project-modal-image');
const projectModalTitle = document.querySelector('#project-modal-title');
const projectModalDescription = document.querySelector('.project-modal-description');
const modalCloseButtons = document.querySelectorAll('[data-close-modal]');

const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

if (menuToggle && nav) {
  menuToggle.addEventListener('click', () => {
    const isOpen = nav.classList.toggle('is-open');
    menuToggle.setAttribute('aria-expanded', String(isOpen));
  });
}

document.querySelectorAll('.site-nav a').forEach((link) => {
  link.addEventListener('click', () => {
    if (nav) {
      nav.classList.remove('is-open');
    }

    if (menuToggle) {
      menuToggle.setAttribute('aria-expanded', 'false');
    }
  });
});

const revealObserver = new IntersectionObserver(
  (entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.classList.add('is-visible');
        revealObserver.unobserve(entry.target);
      }
    });
  },
  { threshold: 0.18 }
);

revealItems.forEach((item) => revealObserver.observe(item));

if (filterButtons.length && projectCards.length) {
  const labels = {
    all: 'Alle projecten zichtbaar',
    bathroom: 'Alleen badkamers',
    tile: 'Alleen tegelwerk',
    electro: 'Alleen elektra',
    plumbing: 'Alleen loodgieterswerk',
  };

  const applyFilter = (filter) => {
    let visibleCount = 0;

    projectCards.forEach((card) => {
      const isMatch = filter === 'all' || card.dataset.category === filter;
      card.hidden = !isMatch;
      if (isMatch) {
        visibleCount += 1;
      }
    });

    if (filterStatus) {
      filterStatus.textContent = `${labels[filter] || 'Geselecteerde projecten'} · ${visibleCount} foto's`;
    }
  };

  filterButtons.forEach((button) => {
    button.addEventListener('click', () => {
      const filter = button.dataset.filter;
      filterButtons.forEach((item) => item.classList.remove('is-active'));
      button.classList.add('is-active');
      applyFilter(filter);
    });
  });

  applyFilter('all');
}

const closeProjectModal = () => {
  if (projectModal) {
    projectModal.hidden = true;
  }
};

if (projectCards.length && projectModal && projectModalImage && projectModalTitle && projectModalDescription) {
  projectCards.forEach((card) => {
    card.addEventListener('click', () => {
      const image = card.dataset.image || '';
      const alt = card.dataset.alt || '';
      const title = card.dataset.title || '';
      const description = card.dataset.description || '';

      projectModalImage.src = image;
      projectModalImage.alt = alt;
      projectModalTitle.textContent = title;
      projectModalDescription.textContent = description;
      projectModal.hidden = false;
    });
  });

  modalCloseButtons.forEach((button) => {
    button.addEventListener('click', closeProjectModal);
  });

  document.addEventListener('keydown', (event) => {
    if (event.key === 'Escape') {
      closeProjectModal();
    }
  });
}

if (contactForm) {
  contactForm.addEventListener('submit', (event) => {
    event.preventDefault();

    const submitButton = contactForm.querySelector('button[type="submit"]');
    if (submitButton) {
      submitButton.textContent = 'Request sent';
      window.setTimeout(() => {
        submitButton.textContent = 'Send request';
      }, 1800);
    }

    contactForm.reset();
  });
}

document.querySelectorAll('a[href^="#"]').forEach((link) => {
  link.addEventListener('click', (event) => {
    const target = document.querySelector(link.getAttribute('href'));
    if (!target) {
      return;
    }

    event.preventDefault();
    target.scrollIntoView({ behavior: prefersReducedMotion ? 'auto' : 'smooth', block: 'start' });
  });
});
