/**
 * Modern Parallax Effect for CTA Section
 * Enhances the CSS parallax with smooth JavaScript-based scrolling
 */

export function initParallax() {
  // Check if user prefers reduced motion
  const prefersReducedMotion = window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  
  if (prefersReducedMotion) {
    return; // Skip parallax for accessibility
  }

  const ctaSections = document.querySelectorAll('.cta-section');
  
  if (ctaSections.length === 0) {
    return;
  }

  // Throttle function for performance
  function throttle(func, delay) {
    let lastCall = 0;
    return function(...args) {
      const now = Date.now();
      if (now - lastCall >= delay) {
        lastCall = now;
        func(...args);
      }
    };
  }

  // Calculate parallax offset
  function updateParallax() {
    ctaSections.forEach(section => {
      const rect = section.getBoundingClientRect();
      const scrolled = window.pageYOffset || document.documentElement.scrollTop;
      const sectionTop = rect.top + scrolled;
      const windowHeight = window.innerHeight;

      // Only apply parallax when section is in viewport
      if (rect.top < windowHeight && rect.bottom > 0) {
        // Calculate parallax offset (slower scroll for background)
        // Use a smaller multiplier to prevent background from moving too much
        const scrollProgress = (scrolled - sectionTop + windowHeight) / (windowHeight + rect.height);
        const offset = scrollProgress * 100; // Percentage-based offset

        // Keep background centered and prevent top edge from showing
        // Use percentage to keep it responsive
        section.style.backgroundPosition = `center ${50 - offset * 0.2}%`;
      }
    });
  }

  // Enhanced scroll-based parallax with content fade-in
  function updateContentParallax() {
    ctaSections.forEach(section => {
      const rect = section.getBoundingClientRect();
      const windowHeight = window.innerHeight;
      const content = section.querySelector('.cta-content');
      
      if (!content) return;
      
      // Calculate visibility percentage
      const visiblePercentage = Math.max(0, Math.min(1, 
        (windowHeight - rect.top) / (windowHeight + rect.height)
      ));
      
      // Apply subtle transform and opacity based on scroll position
      if (visiblePercentage > 0.1 && visiblePercentage < 0.9) {
        const scale = 0.95 + (visiblePercentage * 0.05);
        const opacity = Math.min(1, visiblePercentage * 1.5);
        
        content.style.transform = `scale(${scale})`;
        content.style.opacity = opacity;
      }
    });
  }

  // Throttled scroll handler for better performance
  const handleScroll = throttle(() => {
    requestAnimationFrame(() => {
      updateParallax();
      updateContentParallax();
    });
  }, 16); // ~60fps

  // Initialize on load
  updateParallax();
  updateContentParallax();

  // Add scroll listener
  window.addEventListener('scroll', handleScroll, { passive: true });

  // Update on resize
  window.addEventListener('resize', throttle(() => {
    requestAnimationFrame(() => {
      updateParallax();
      updateContentParallax();
    });
  }, 100), { passive: true });

  // Cleanup function
  return () => {
    window.removeEventListener('scroll', handleScroll);
  };
}

// Auto-initialize when DOM is ready
if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initParallax);
} else {
  initParallax();
}

