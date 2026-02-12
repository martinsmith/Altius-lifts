// Kevin Powell-style sliding nav hover effect
// JavaScript implementation for reliable cross-browser support

function initNavHover() {
  const nav = document.querySelector('#nav');
  if (!nav) return;

  // Only enable on desktop (matches the 1200px mobile breakpoint in header.css)
  const mediaQuery = window.matchMedia('(min-width: 1201px)');
  if (!mediaQuery.matches) return;

  const ul = nav.querySelector('ul');
  if (!ul) return;

  // Create the blob element
  const blob = document.createElement('div');
  blob.className = 'nav-blob';
  nav.appendChild(blob);

  // Get all nav items except the last one (CTA button)
  const items = Array.from(ul.querySelectorAll('li:not(:last-child)'));
  if (items.length === 0) return;

  let isVisible = false;

  function positionBlob(target) {
    const targetRect = target.getBoundingClientRect();
    const navRect = nav.getBoundingClientRect();

    const left = targetRect.left - navRect.left;
    const top = targetRect.top - navRect.top;
    const width = targetRect.width;
    const height = targetRect.height;

    if (!isVisible) {
      // First hover: snap to position instantly, then fade in
      blob.style.transition = 'opacity 200ms ease';
      blob.style.left = `${left}px`;
      blob.style.top = `${top}px`;
      blob.style.width = `${width}px`;
      blob.style.height = `${height}px`;
      blob.style.opacity = '1';
      isVisible = true;

      // Restore full transitions after the snap
      requestAnimationFrame(() => {
        requestAnimationFrame(() => {
          blob.style.transition = '';
        });
      });
    } else {
      // Subsequent hovers: slide smoothly
      blob.style.left = `${left}px`;
      blob.style.top = `${top}px`;
      blob.style.width = `${width}px`;
      blob.style.height = `${height}px`;
    }
  }

  function hideBlob() {
    blob.style.opacity = '0';
    isVisible = false;
  }

  // Attach hover listeners to each nav item
  items.forEach(item => {
    item.addEventListener('mouseenter', () => positionBlob(item));
  });

  // Hide when mouse leaves the entire ul
  ul.addEventListener('mouseleave', hideBlob);

  // Recalculate on resize (header can change size when scrolled)
  let resizeTimer;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = setTimeout(() => {
      if (isVisible) hideBlob();
    }, 100);
  });

  // Handle responsive breakpoint changes
  mediaQuery.addEventListener('change', (e) => {
    if (!e.matches) {
      hideBlob();
      blob.style.display = 'none';
    } else {
      blob.style.display = '';
    }
  });
}

// Initialize when DOM is ready
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initNavHover);
} else {
  initNavHover();
}

